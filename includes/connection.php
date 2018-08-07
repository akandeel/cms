<?php

try{//function using as exception

$pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '21iLabs');
} catch (PDOEexception $e) {
  //retrieves exception & creates object containing the exception information
    exit('Database error.');//if PDO above fails do whats here
}
//2)user name is root,
//3)password is 21iLabs
?>
