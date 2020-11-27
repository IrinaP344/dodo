<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','dodo');
    $query = mysqli_query($con, "DELETE FROM trash WHERE id='{$_GET['id']}'");
    header('Location: index.php');
 ?>