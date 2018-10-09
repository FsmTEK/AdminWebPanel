<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=kisisel;charset=utf8","root","");
}catch(PDOException $error)
{
    die($error->GetMessage());
}
