<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'crud');
if(!$connect) {
  die('Ошибка подключения к БД');
}