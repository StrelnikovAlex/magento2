<?php

namespace Shellpea\None\Plugin;

class CustomPrice
    {
        public function afterGetPrice($myPrice){
          return $myPrice = 123;
        }

    }
