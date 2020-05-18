<?php

namespace Shellpea\None\Plugin;

class CustomBreadcrumbs
{

    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {

        $crumbInfo['label'] = $crumbInfo['label'].'(!)';

        return [$crumbName, $crumbInfo];
    }
}
