<?php

session_start();

$_SESSION['email'] = $_POST['email'];

echo "bonjour " . $_SESSION['email'] 


?>

<a href = "index.php">
    <button onclick = "unset($_SESSION['email'])"> </button>
    </a>



