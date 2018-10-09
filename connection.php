<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=site", "root", "");
} catch (PDOException $e) {
    print $e->getMessage();
}
?>