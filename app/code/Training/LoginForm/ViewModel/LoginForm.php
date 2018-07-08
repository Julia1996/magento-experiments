<?php

namespace Training\LoginForm\ViewModel;

class LoginForm implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    public function canShow()
    {
        return false;
    }
}
