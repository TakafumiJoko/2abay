<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="POST">
    <input type="text" name="value">
    <input type="submit" value="検索">
  </form>
  <?php
    $fruits = ['apple', 'orange', 'strawberry'];
    if (isset($_POST["value"])){
      if(in_array($_POST["value"], $fruits)) {
        echo "<span>{$_POST["value"]}は、配列に含まれています。</span>";
      } else {
        echo "<span>{$_POST["value"]}は、配列に含まれていません。</span>";
      }
    }
  ?>
</body>
</html>

<?php

?>

