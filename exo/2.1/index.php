<?php
 
function calcMoy ($tableau) {
return array_sum ($tableau) / count ($tableau) ;
 
}
 
echo calcMoy ([10,15,20,25,30]) ;
 
 
 
 
 
?>