<?php namespace RainLab\Builder\Widgets;

use Str;
use Input;
use Backend\Classes\WidgetBase;
use RainLab\Builder\Classes\DatabaseTableModel;

/**
 * Database table list widget.
 *
 * @package rainlab\builder
 * @author Alexey Bobkov, Samuel Georges
 */
class DatabaseTableList extends WidgetBase
{
    use \Backend\Traits\SearchableWidget;
    use \Backend\Traits\SelectableWidget;

    public $noRecordsMessage = 'rainlab.builder::lang.database.no_records';
    protected $theme;

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

        return [
            'pluginVector'=>$activePluginVector,
            'items'=>$this->getData($activePluginVector)
        ];
    }

    protected function getData($pluginVector)
    {
        if (!$pluginVector) {
            return [];
        }

        $pluginCode = $pluginVector->pluginCodeObj->toCode();

        if (!$pluginCode) {
            return [];
        }

        $tables = $this->getTableList($pluginCode);
        $searchTerm = Str::lower($this->getSearchTerm());

        // Apply the search
        //
        if (strlen($searchTerm)) {
            $words = explode(' ', $searchTerm);
            $result = [];

            foreach ($tables as $table) {
                if ($this->textMatchesSearch($words, $table)) {
                    $result[] = $table;
                }
            }

            $tables = $result;
        }

        return $tables;
    }

    /*
     * Event handlers
     */

    protected function getTableList($pluginCode)
    {
        $result = DatabaseTableModel::listPluginTables($pluginCode);

        return $result;
    }

    public function refreshActivePlugin()
    {
        return ['#'.$this->getId('body') => $this->makePartial('widget-contents', $this->getRenderData())];
    }

    /*
     * Methods for the internal use
     */

    public function onUpdate()
    {
        return $this->updateList();
    }

    public function updateList()
    {
        return ['#'.$this->getId('database-table-list') => $this->makePartial('items', $this->getRenderData())];
    }

    public function onSearch()
    {
        $this->setSearchTerm(Input::get('search'));
        return $this->updateList();
    }
}