<?php namespace October\Rain\Extension;

/**
 * Extension trait
 *
 * Allows for "Private traits"
 *
 * @package october\extension
 * @author Alexey Bobkov, Samuel Georges
 */

trait ExtensionTrait
{
    /**
     * @var string The calling class when using a static method.
     */
    public static $extendableStaticCalledClass = null;
    /**
     * @var array Used to extend the constructor of an extension class. Eg:
     *
     *     BehaviorClass::extend(function($obj) { })
     *
     */
    protected static $extensionCallbacks = [];
    protected $extensionHidden = [
        'fields' => [],
        'methods' => ['extensionIsHiddenField', 'extensionIsHiddenField']
    ];

    /**
     * Helper method for `::extend()` static method
     * @param  callable $callback
     * @return void
     */
    public static function extensionExtendCallback($callback)
    {
        $class = get_called_class();
        if (
            !isset(self::$extensionCallbacks[$class]) ||
            !is_array(self::$extensionCallbacks[$class])
        ) {
            self::$extensionCallbacks[$class] = [];
        }

        self::$extensionCallbacks[$class][] = $callback;
    }

    public static function getCalledExtensionClass()
    {
        return self::$extendableStaticCalledClass;
    }

    public function extensionApplyInitCallbacks()
    {
        $classes = array_merge([get_class($this)], class_parents($this));
        foreach ($classes as $class) {
            if (isset(self::$extensionCallbacks[$class]) && is_array(self::$extensionCallbacks[$class])) {
                foreach (self::$extensionCallbacks[$class] as $callback) {
                    call_user_func($callback, $this);
                }
            }
        }
    }

    public function extensionIsHiddenField($name)
    {
        return in_array($name, $this->extensionHidden['fields']);
    }

    public function extensionIsHiddenMethod($name)
    {
        return in_array($name, $this->extensionHidden['methods']);
    }

    protected function extensionHideField($name)
    {
        $this->extensionHidden['fields'][] = $name;
    }

    protected function extensionHideMethod($name)
    {
        $this->extensionHidden['methods'][] = $name;
    }
}