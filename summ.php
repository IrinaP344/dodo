<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','dodo');
	$query = mysqli_query($con, "SELECT SUM(summa) FROM trash");
    header('Location: index.php');
 ?>