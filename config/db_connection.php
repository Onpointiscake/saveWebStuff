<?php
$connect = new PDO('mysql:host=localhost;dbname=savewebstuff', 'iamjavier', 'test1234');
$connect ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>