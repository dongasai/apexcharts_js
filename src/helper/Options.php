<?php

namespace DApexchartsJs\helper;

use MyCLabs\Enum\Enum;

class Options
{


    public function toArray()
    {
        $array = [];
//        dump(get_object_vars($this) );
        foreach (get_object_vars($this) as $name => $value) {
//            dump($name);
            if($value instanceof Enum){
                $array[$name] = $value->getValue();
                continue;
            }
            if (is_object($value)) {
                $array[$name] = $value->toArray();

            } else {
                $array[$name] = $value;

            }
        }
        return $array;
    }

}
