<!DOCTYPE html>
<html>
<head>
    <title>Table</title> 
	<meta charset="UTF-8">
</head>
<body>


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

$dblink = mysqli_connect("std.weblab.teipir.gr", "web_wed21",
"w170e7cda0") or die ("Could not connect");

mysqli_select_db($dblink,"web_wed21")
or die ("could not select");

mysqli_query($dblink,"SET CHARACTER SET UTF8");

$query = "SELECT * FROM Students";

$result = mysqli_query($dblink,$query)
or die('Query failed: ' . mysqli_error());

$i=0;
while ($row=mysqli_fetch_array($result)) {
    $i++?>
<tr>
<td align="center"><?php echo $i; ?></td>
<td align="center"><?php echo $row["AM"]?></td>
<td align="center"><?php echo $row["Sem"];?></td>
<td align="center"><?php echo $row["LastName"];?></td>
<td align="center"><?php echo $row["FirstName"];}?></td>
</tr>
	</table> 
</body>
</html>