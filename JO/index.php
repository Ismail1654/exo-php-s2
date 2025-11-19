<?php

try {
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=jo;charset=utf8',
        'root',
        '' 
    );
} 
catch (PDOException $e) {
    die($e->getMessage());
}
 
 
$data  = $sth -> fetchAll ( PDO::FETCH_ASSOC);

foreach ($data as $value ){
    echo $value ["nom"] . ":"  . $value["temps"] . " s<br/>"; }




?>