<?php 
    $con = mysqli_connect('127.0.0.1', 'root','','dodo');
    $query = mysqli_query($con, "SELECT * FROM pizza WHERE id='{$_GET['id']}' ");
     $stroka = $query->fetch_assoc();
    $query2 = mysqli_query($con, "INSERT INTO trash(title,img,price)  VALUES ('{$stroka['title']}', '{$stroka["img"]}', '{$stroka["price"]}')");
    header('Location: index.php');
   ?>