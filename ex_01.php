<?php

function rev_epur_str($chaine=null)
{
    if (!is_string($chaine)) {
        return false;
    }

    $separators = ["/ +/", "/\t/", "/\n/"];
    $cleanedStr = trim(preg_replace($separators, " ", $chaine));
    $strToArray = explode(" ", $cleanedStr);
    $reversedStr = "";

    for ($i=count($strToArray) - 1; $i>=0; --$i)
    {
        $reversedStr .= $strToArray[$i];

        if ($i != 0) {
            $reversedStr .= " ";
        }
    }

    return $reversedStr;
}

?>