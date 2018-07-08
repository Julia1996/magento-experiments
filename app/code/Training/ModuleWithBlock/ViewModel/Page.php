<?php

namespace Training\ModuleWithBlock\ViewModel;

class Page implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    public function canShow()
    {
        return true;
    }
}
