<?php
namespace Shellpea\ActionNameJS\Controller;

use Magento\Framework\View\Element\Template;

class Templ extends Template
{
    public function myActionName()
    {
        return $this->getRequest()->getFullActionName();
    }
}
