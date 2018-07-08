<?php

namespace Training\ModuleWithController\Controller\Index;

class Redirect extends \Magento\Framework\App\Action\Action
{
    /**
     * Index action
     *
     * @return $this
     */
    public function execute()
    {
        $result = $this->resultRedirectFactory->create();
        $result->setPath('training_modulewithcontroller/index/index');
        return $result;
    }
}
