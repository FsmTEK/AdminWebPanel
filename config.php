<?php
error_reporting(0);
session_start();
try{
    $db = new PDO("mysql:host=localhost;dbname=giris;charset=utf8","root","");
}catch(PDOException $error)
{

    die($error->GetMessage());

}