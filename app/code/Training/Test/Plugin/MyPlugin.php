<?php
namespace Training\Test\Plugin;

class MyPlugin {
    public function afterGetPrice($subject, $result) {
        return $result;
    }

    public function afterGetCopyright($subject, $result) {
        return "Customized copyright!";
    }

    public function afterAddCrumb($subject, $result) {
        return $result."(!)";
    }
}