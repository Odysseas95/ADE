<!DOCTYPE html>
<html>
<head>
    <title>Table</title> 
	<meta charset="UTF-8">
</head>
	<link rel="stylesheet" type="text/css"
	href="style.css" />
<body>
<center>
<p>	
		<?php $ask=4;
      include '../navigation.php';?>
	</p>
</center>
<div class="left"> 	










</div>
<div class="right">
<center>
	
</center>	
<?php include '../db_connect.php';

$query = "SELECT * FROM STATISTIKA";

$result = mysql_query($query)
or die('Query failed: ' . mysql_error());
?>
<table < bordercolor="#C0C0C0" width="315" align="center" border="1" >
<tr>
     <th align="center">A/A</th>
     <th align="center">ακ.εξαμ</th>
     <th align="center">κωδικός</th>
     <th align="center">Pass</th>
     <th align="center">Favourite</th>
     <th align="center">τ.ε</th>
     <th align="center">ΜΑΘΗΜΑ</th>
	 <th align="center">ΔΗΛ.</th>
	 <th align="center">ΣΥΜ.</th>
	 <th align="center">a</th>
	 <th align="center">b</th>
	 <th align="center">c</th>
	 <th align="center">d</th>
	 <th align="center">e</th>
	 <th align="center">f</th>
	 <th align="center">ΣΥΝ.</th>
	 <th align="center">ok</th>
	 <th align="center">pr</th>
    </tr>
<?php
while ($row=mysql_fetch_array($result, MYSQL_ASSOC)) { ?>
<tr>
	<td align="center"><?php echo $row["A/A"];?></td>
	<td align="center"><?php echo $row["ak.eks."];?></td>
	<td align="center"><?php echo $row["kodikos"];?></td>
        <td> <input type="checkbox" name="pass" value="pass" /> </td>
        <td> <input type="radio" name="favourite" value="favourite" /> </td>
	<td align="center"><?php echo $row["t.e"];?></td>
	<td align="center"><?php echo $row["MATHIMA"];?></td>
	<td align="center"><?php echo $row["DHL."];?></td>
	<td align="center"><?php echo $row["SYM."];?></td>
	<td align="center"><?php echo $row["a"];?></td>
	<td align="center"><?php echo $row["b"];?></td>
	<td align="center"><?php echo $row["c"];?></td>
	<td align="center"><?php echo $row["d"];?></td>
	<td align="center"><?php echo $row["e"];?></td>
	<td align="center"><?php echo $row["f"];?></td>
	<td align="center"><?php echo $row["SYN"];?></td>
	<td align="center"><?php echo $row["ok"];?></td>
	<td align="center"><?php echo $row["pr"];}?></td>
</tr>
	</table>
</div>
<center>
<p>	
		<?php $ask=4;
      include '../navigation.php';?> 
	</p>
</center>
</body>
</html>