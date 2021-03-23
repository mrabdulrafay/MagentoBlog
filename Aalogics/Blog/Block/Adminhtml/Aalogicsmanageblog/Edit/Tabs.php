<?php
namespace Aalogics\Blog\Block\Adminhtml\Aalogicsmanageblog\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('aalogicsmanageblog_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Aalogicsmanageblog Information'));
    }
}