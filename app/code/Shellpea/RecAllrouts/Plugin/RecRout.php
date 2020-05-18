<?php
namespace Shellpea\RecAllrouts\Plugin;

class RecRout
{
    public function afterNext(\Magento\Framework\App\RouterList $subject, $result)
    {
         echo $this->routerList[$routerId]['class'];
        die;
    }
}
