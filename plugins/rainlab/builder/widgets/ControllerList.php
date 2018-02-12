<?php namespace RainLab\Builder\Widgets;

use Str;
use Input;
use Backend\Classes\WidgetBase;
use RainLab\Builder\Classes\ControllerModel;

/**
 * Plugin controller list widget.
 *
 * @package rainlab\builder
 * @author Alexey Bobkov, Samuel Georges
 */
class ControllerList extends WidgetBase
{
    use \Backend\Traits\SearchableWidget;

    public $noRecordsMessage = 'rainlab.builder::lang.controller.no_records';

    public function __construct($controller, $alias)
    {
        $this->alias = $alias;

        parent::__construct($controller, []);
        $this->bindToController();
    }

    /**
     * Renders the widget.
     * @return string
     */
    public function render()
    {
        return $this->makePartial('body', $this->getRenderData());
    }

    protected function getRenderData()
    {
        $activePluginVector = $this->controller->getBuilderActivePluginVector();
        if (!$activePluginVector) {
            return [
                'pluginVector'=>null,
                'items' => []
            ];
        }

        $items = $this->getControllerList($activePluginVector->pluginCodeObj);

        $searchTerm = Str::lower($this->getSearchTerm());
        if (strlen($searchTerm)) {
            $words = explode(' ', $searchTerm);
            $result = [];

            foreach ($items as $controller) {
                if ($this->textMatchesSearch($words, $controller)) {
                    $result[] = $controller;
                }
            }

            $items = $result;
        }

        return [
            'pluginVector'=>$activePluginVector,
            'items'=>$items
        ];
    }

    protected function getControllerList($pluginCode)
    {
        $result = ControllerModel::listPluginControllers($pluginCode);

        return $result;
    }

    /*
     * Event handlers
     */

    public function refreshActivePlugin()
    {
        return ['#'.$this->getId('body') => $this->makePartial('widget-contents', $this->getRenderData())];
    }

    public function onUpdate()
    {
        return $this->updateList();
    }

    /*
     * Methods for the internal use
     */

    public function updateList()
    {
        return ['#'.$this->getId('plugin-controller-list') => $this->makePartial('items', $this->getRenderData())];
    }

    public function onSearch()
    {
        $this->setSearchTerm(Input::get('search'));
        return $this->updateList();
    }
}