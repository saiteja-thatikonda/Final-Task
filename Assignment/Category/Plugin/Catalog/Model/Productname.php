<?php

namespace Assignment\Category\Plugin\Catalog\Model;
class Productname
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $name)
     {
        return "Gadget".$name;                                      // return the name with category name as prefix 
       
    }

}



















