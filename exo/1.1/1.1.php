<?php

function school($age) {
    if ($age<3 )
        return " creche ";
    else if ($age<6)
        return  "maternelle";
    else if ($age<11)
        return "primaire";
    else if ($age<16)
        return "college";
    else if ($age<18)
        return "lycee";

}
 echo school(5);

?>