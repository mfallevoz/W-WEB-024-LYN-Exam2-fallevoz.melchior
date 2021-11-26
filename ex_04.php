<?php

function return_calls($str=null, $arr=null)
{
    if (!is_string($str) || !is_array($arr)) {
        return false;
    }

    static $calls = 0;

    if (function_exists($str)) {
        $str($arr);
        return ++$calls;
    }

    else {
        return false;
    }
}

?>