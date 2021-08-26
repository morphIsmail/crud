<?php
require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `items` WHERE `items`.`id` = '$id'");

header('Location: /');