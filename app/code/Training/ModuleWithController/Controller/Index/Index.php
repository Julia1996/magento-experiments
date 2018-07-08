<?php

namespace Training\ModuleWithController\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Index action
     *
     * @return $this
     */
    public function execute()
    {
        // frontName/controllerPath/controllerName in request
        // routeName/controllerPath/controllerName
//        echo $this->_url->getUrl('training_modulewithcontroller/index/index/id/222');
        echo $this->_url->getUrl('catalog/product/view', ['_current' => true]);
//        echo $this->_url->getUrl('catalog/product/view', 
//            ['id' => '222', 'view' => 'grid', '_query' => ['s' => 2, 'f' => 'd']]);
//        catalog/product/view/id/222
        exit();
    }
}
