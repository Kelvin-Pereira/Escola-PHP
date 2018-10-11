<?php 
/*
* By: Kelvin Pereira Biserra    
* Time: 19:47
* Data 04/09/2018
*/

$conection = new PDO("mysql:host=localhost;dbname=escola, 'root', ''");

$conection = query("INSERT INTO curso (nome) VALUES ('Educação Fisica');")
?>