<!DOCTYPE html>
<html>
<head>
    <title>Table</title> 
	<meta charset="UTF-8">
</head>
<body>
<center>
	<p>	
		<a href="http://std.weblab.teipir.gr/~web_wed21/index.html"> <img src="http://std.weblab.teipir.gr/~web_wed21/back.png"></a> 	
		<a href="http://std.weblab.teipir.gr/~web_wed21/index.html"> <img src="http://std.weblab.teipir.gr/~web_wed21/house.png"></a>	
		<a href="http://std.weblab.teipir.gr/~web_wed21/ask_3/index.php"> <img src="http://std.weblab.teipir.gr/~web_wed21/next.png"></a>
		<pre></pre> 
	</p>
<<<<<<< HEAD
<?php 
$page = 2;
include 'D:\xampp\htdocs\ADE\navigation.php';
?>

</center>
<?php $students=array(
	array(43818,9,"Αθανασιάδης","Οδυσσέας"), 
	array(43844,9,"Καρβέλας","Νίκος"),
	array(43851,9,"Κουμανδράκης","Αντώνης")
);?>

 <table < bordercolor="#C0C0C0" width="315" align="center" border="1" >
  <tr> 
    <th align="center">Εργ.</th>  
    <th colspan="4">ΑΔΕ</th>

  </tr>
  <tr >

    <th>ακ.ετ</th>
    <th colspan="2" align="center">(x)2017-18</th>
	<th colspan="2"> </th>
  </tr>
  <tr>
    <th colspan="2">ΤΜΗΜΑ</th>
    <th colspan="3" align="center">(Τε-1) - Τετάρτη 11:00~13:00</th>
  
  </tr>
  <tr>

    <th colspan="2" align="center">OMADA</th>
    <td colspan="3" align="center"> B1 </td>
   </tr>
    <th colspan="5"> &nbsp; </th> 
   <tr>
     <th align="center">aa</th>
     <th align="center">AM</th>
     <th align="center">Εξ.</th>
     <th align="center">ΕΠΩΝΥΜΟ</th>
     <th align="center">ΟΝΟΜΑ</th>
    </tr>

   <?php for ($i=0; $i<=2; $i++){?>
 <tr>	
 	<td align="center"><?php print_r($i+1)?></td>
 		<?php for ($j=0; $j<4; $j++){ ?>
     <td align="center"><?php print_r($students[$i][$j]);}}?></td>
 </tr>

	
	</table> 
<center>
	<p>	
		<a href="http://std.weblab.teipir.gr/~web_wed21/index.html"> <img src="http://std.weblab.teipir.gr/~web_wed21/back.png"></a> 	
		<a href="http://std.weblab.teipir.gr/~web_wed21/index.html"> <img src="http://std.weblab.teipir.gr/~web_wed21/house.png"></a>	
		<a href="http://std.weblab.teipir.gr/~web_wed21/ask_3/index.php"> <img src="http://std.weblab.teipir.gr/~web_wed21/next.png"></a>
		<pre></pre> 
	</p>


</center>
	</body>
</html>