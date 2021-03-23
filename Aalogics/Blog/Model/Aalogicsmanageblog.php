<?php
namespace Aalogics\Blog\Model;

class Aalogicsmanageblog extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Aalogics\Blog\Model\ResourceModel\Aalogicsmanageblog');
    }
}
?>