<?php

namespace ForWinterCms\Toolbox\FormWidgets;

use Backend\Classes\FormWidgetBase;
use ForWinterCms\Toolbox\Classes\IconList;

/**
 * FaIcons Form Widget
 */
class FaIcons extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'fa_icons';

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('faicons');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    public function getFaIcons()
    {
        return IconList::getAllGroupedIcons();
    }
}
