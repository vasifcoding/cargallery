<?php
try {
    $db= new PDO("mysql:host=localhost;dbname=otogaleri",'root','');
} catch (Exception $e) {
    $e->getMessage();
}










?>