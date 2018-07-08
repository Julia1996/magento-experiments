<?php

namespace Training\ModuleWithBlock\Block;

class Page extends \Magento\Framework\View\Element\Template
{
    protected $catalogHelper;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Helper\Data $catalogHelper,
        array $data = array()
    ) {
        $this->catalogHelper = $catalogHelper;
        parent::__construct($context, $data);
    }

    public function canShow()
    {
        return true;
    }

    public function check()
    {
        return $this->catalogHelper->isPriceGlobal();
    }
}
