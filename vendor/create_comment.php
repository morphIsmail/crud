<?php
  require_once '../config/connect.php';

  $id_product = $_POST['id'];
  $comment = $_POST['comment'];

  mysqli_query($connect, "INSERT INTO `comments` (`id`, `product_id`, `comment`) VALUES (NULL, '$id_product', '$comment')");

  header('Location: /product.php?id=' . $id_product);