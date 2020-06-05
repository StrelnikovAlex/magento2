<?php

namespace Shellpea\DataBase\Model\Attribute\Frontend;

use Magento\Eav\Model\Entity\Attribute\Frontend\AbstractFrontend;
use Magento\Framework\DataObject;

class MyFront extends AbstractFrontend
{
    public function getValue(DataObject $object)
    {
        $result = "";
        $attr = $object->getData($this->getAttribute()->getAttributeCode());
        $attrOption = $this->getOption($attr);

        if (is_string($attrOption)) {
            $result = $attrOption;
        } else {
            foreach ($attrOption as $option) {
                $result = $result . '<li><b>' . $option . '</b></li>';
            }
        }

        return '<ul>' . $result . '</ul>';
    }
}
