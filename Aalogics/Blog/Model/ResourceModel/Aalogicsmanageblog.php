<?php
namespace Aalogics\Blog\Model\ResourceModel;

class Aalogicsmanageblog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('aalogics_blogdata', 'blog_id');
    }
}
?>