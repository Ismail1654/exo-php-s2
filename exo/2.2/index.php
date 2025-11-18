<?php

function my_strrev($str) {
    $length = strlen($str);
    $result = "";
    $i = $length - 1;
    while ($i >= 0) {
<<<<<<< HEAD
=======
        
>>>>>>> 2ad1fea041786fa97702ec94d0a02adf36081e47
        $result = $result . $str[$i];
        $i = $i - 1;
    }
    return $result;
}
echo my_strrev("Bonjour le monde !");

