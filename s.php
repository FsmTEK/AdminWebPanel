<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=dersler;charset=utf8","root","");
}catch(PDOException $error)
{
    die($error->GetMessage());
}