<!DOCTYPE html>
<html>
<head>
    <title>Table</title> 
	<meta charset="UTF-8">
</head>
<body>
<center>
  <p> 
    <?php $ask=6;
      include '../navigation.php';?> 
  </p>
</center>

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
<?php 
include '../db_connect.php';

$query = "SELECT * FROM Students";

$result = mysql_query($query)
or die('Query failed: ' . mysql_error());

$i=0;
while ($row=mysql_fetch_array($result, MYSQL_ASSOC)) { $i++?>
<tr>
	<td align="center"><?php echo $i; ?></td>
	<td align="center"><?php echo $row["AM"]?></td>
	<td align="center"><?php echo $row["Sem"];?></td>
	<td align="center"><?php echo $row["LastName"];?></td>
	<td align="center"><?php echo $row["FirstName"];}?></td>
</tr>
	</table>
  <center>
  <p> 
    <?php $ask=6;
      include '../navigation.php';?> 
  </p>
</center> 
</body>
</html>