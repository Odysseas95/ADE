<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<center>

<?php
$back = 'D:\xampp\htdocs\ADE\back.png';
$home = 'D:\xampp\htdocs\ADE\house.png';
$next = 'D:\xampp\htdocs\ADE\next.png';
$page = $_GET['page'];
?><p>	
		<a href= <?php $page - 1 ?> ><img src='D:\xampp\htdocs\ADE\back.png'></a> 	
		<a href= "D:\xampp\htdocs\ADE\index.php" ><img src='D:\xampp\htdocs\ADE\house.png' ></a>	
		<a href= <?php $_GET['page'] + 1 ?> ><img src='D:\xampp\htdocs\ADE\next.png'></a>
		<pre></pre>  
	</p>
</center>
</body>
