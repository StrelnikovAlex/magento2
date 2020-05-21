<?php

namespace Shellpea\MyTempl\Plugin;

class MyTempl
{
    public function beforeSetTemplate()
    {
        return 'Shellpea_MyTempl::info.phtml';
    }
}
