<?php 
// variabele scope / lingkup variabel
// $x = 10

// function tampilx () {
//     global $x;
//     echo $x;
// }

// tampilx();


// SUPERGLOBALS
// variabel global milik PHP
// marupakan array associative

var_dump($_GET);
echo "<br>";
var_dump($_POST);
echo "<br>";
var_dump($_SERVER);
echo "<br>";
echo $_SERVER["SERVER_NAME"];
var_dump($_SERVER);
echo "<br>";
?>