<?php

function min_len_array($arr=null)
{
    if (count($arr) == 0) {
        return false;
    }

    $result = "";

    foreach ($arr as $key => $value) {
        if ($result == "" || strlen($key) < strlen($result)) {
            $result = $key;
        } 

        elseif (strlen($key) == strlen($result)) {
            $result = strlen($value) < strlen($result[0]) ? $key : $result;
        }

    }
    
    return $result;
}

?>