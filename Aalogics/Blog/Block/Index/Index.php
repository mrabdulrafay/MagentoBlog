<?php

namespace Aalogics\Blog\Block\Index;


class Index extends \Magento\Framework\View\Element\Template {
    
    protected $_blogFactory;
    public $_storeManager;


    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Aalogics\Blog\Model\Aalogicsmanageblogfactory $blogFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
         array $data = []) {
        $this->_blogFactory = $blogFactory;
        $this->_storeManager = $storeManager;
        parent::__construct($context, $data);

    }


    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getBlogData(){
        $blog = $this->_blogFactory->create();
        $blogCollection = $blog->getCollection();
        return $blogCollection;
    }

}