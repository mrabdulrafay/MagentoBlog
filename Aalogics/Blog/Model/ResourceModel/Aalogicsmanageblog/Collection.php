<?php

namespace Aalogics\Blog\Model\ResourceModel\Aalogicsmanageblog;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Aalogics\Blog\Model\Aalogicsmanageblog', 'Aalogics\Blog\Model\ResourceModel\Aalogicsmanageblog');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>