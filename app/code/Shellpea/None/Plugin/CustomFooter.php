<?php

namespace Shellpea\None\Plugin;

class CustomFooter
    {
        public function aroundGetCopyright($result) {
            return $result = 'Customized copyright!';
        }
    }
