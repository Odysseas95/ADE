<!DOCTYPE html>
<html>
<head>
    <title>Table</title> 
	<meta charset="UTF-8">
</head>
<body>

<?php 
	  $ar=array(1,2,3);
	  $am=array(43818,43844,43851);
	  $sem=array(9,9,9);
	  $Lname=array("Αθανασιάδης","Καρβέλας","Κουμανδράκης");
	  $Fname=array("Οδυσσέας","Νίκος","Αντώνης");
?>

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
	
<tr>
 	   <td align="center"> <?php foreach($ar as $ar_item){
 		 echo "$ar_item <br>"; }?> </td>
 		<td align="center">  <?php foreach($am as $am_item){
 		 echo "$am_item <br>"; }?> </td>
 		 <td align="center">  <?php foreach($sem as $sem_item){
 		 echo "$sem_item <br>"; }?> </td>
 		 <td align="left">  <?php foreach($Lname as $Lname_item){
 		 echo "$Lname_item <br>"; }?> </td>
 		 <td align="left">  <?php foreach($Fname as $Fname_item){
 		 echo "$Fname_item <br>"; }?> </td>
 </tr>
</table> 
<center>
	<p>	
	<a href="http://std.weblab.teipir.gr/~web_wed21/ask_2/index.php" class="previous">&laquo; Previous</a> 
	<a href="http://std.weblab.teipir.gr/~web_wed21/index.html"> Home </a>	
	<a href="http://std.weblab.teipir.gr/~web_wed21/ask_4/index.php" class="next">Next &raquo;</a>
	<pre></pre> 
	</p>
			<table border = "1">
			<tr>
				<th> AA </th>
				<th>ΠΙΝΑΚΑΣ ΠΕΡΙΕΧΟΜΕΝΩΝ</th>
			</tr>
			<tr>
				<td><a href="http://std.weblab.teipir.gr/~web_wed21/index.html"> ASK_1 </a>  </td>
				<td> Πίνακας HTML</td>
			</tr>
			<tr>
				<td><a href="http://std.weblab.teipir.gr/~web_wed21/ask_2/index.php"> ASK_2 </a>  </td>
				<td> Πίνακας με χρηση PHP</td>
			</tr>	
			<tr>
				<td><a href="http://std.weblab.teipir.gr/~web_wed21/ask_3/index.php"> ASK_3 </a>  </td>
				<td> Πίνακας με χρηση PHP(foreach)</td>
			</tr>	
			<tr>
				<td><a href="http://std.weblab.teipir.gr/~web_wed21/ask_2/index.php"> ASK_4 </a>  </td>
				<td> Πίνακας με χρηση PHP(fopen,fread,fclose) </td>
			</tr>	
				
		</table>
</center>
	</body>
</html>