<?php

function resum_join_str($chaine_1=null, $chaine_2=null)
{
    if (!is_string($chaine_1) || !is_string($chaine_2)) {
        return false;
    }

    $length1 = 14;
    $length2 = 3;
    $blank = 0;

    if (strlen($chaine_1) < $length1) {
        $blank = $length1 - strlen($chaine_1);

        for ($i=0; $i<$blank; $i++) {
            $chaine_1 .= ".";
        }
    }

    else {
        $chaine_1 = substr($chaine_1, 0, $length1);
    }

    if (strlen($chaine_2) < $length2) {
        $blank = $length2 - strlen($chaine_2);

        for ($i=0; $i<$blank; $i++) {
            $chaine_2 = "..." . $chaine_2;
        }
    }

    $chaine_2 = substr($chaine_2, -$length2);

    return $chaine_1 . $chaine_2;
}

?>