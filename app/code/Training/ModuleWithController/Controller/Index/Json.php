<?php

namespace Training\ModuleWithController\Controller\Index;

class Json extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
    ) {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
    }

    /**
     * Index action
     *
     * @return $this
     */
    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        $result->setData(['d' => 4, 'f' => 8]);
        return $result;
    }
}
