<?php

namespace Training\ModuleWithController\Controller\Index;

class Forward extends \Magento\Framework\App\Action\Action
{
    
    protected $resultForwardFactory;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory
    ) {
        parent::__construct($context);
        $this->resultForwardFactory = $resultForwardFactory;
    }
    /**
     * Index action
     *
     * @return $this
     */
    public function execute()
    {
//        $this->_forward('login', 'account', 'customer');
        $result = $this->resultForwardFactory->create();
        $result->setModule('customer');
        $result->setController('account');
        $result->forward('login');
        return $result;
    }
}
