<?php

namespace DApexchartsJs\helper;

class CallableClass
{
    public function __invoke()
    {
        return call_user_func_array([$this, 'call'], func_get_args());
    }

}
