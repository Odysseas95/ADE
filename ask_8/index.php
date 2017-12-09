<!DOCTYPE html>
<html>
<head>
    <title>Table</title> 
	<meta charset="UTF-8" http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
	<link rel="stylesheet" type="text/css"
		href="style.css" />
<body>
<center>
<p>	
		<?php $ask=8;
      include '../navigation.php';?>
	</p>
</center>

<div class="left" align="center" >

<form id="chosesemester" name="chosesemester" action="semchoise.php" method="post" enctype="application/x-www-form-urlencoded">
  Chose Semester:
   <select name="Semester" id="Semester">
  	<option value="2003-04x"selected="selected">2003-04x</option>
    <option value="2003-04e">2003-04e</option>
    <option value="2004-05x">2004-05x</option>
    <option value="2004-05e">2004-05e</option>
    <option value="2005-06x">2005-06x</option>
    <option value="2005-06e">2005-06e</option>
    <option value="2006-07x">2006-07x</option>
    <option value="2006-07e">2006-07e</option>
    <option value="2007-08x">2007-08x</option>
    <option value="2007-08e">2007-08e</option>
    <option value="2008-09x">2008-09x</option>
    <option value="2008-09e">2008-09e</option>
    <option value="2010-11x">2010-11x</option>
    <option value="2010-11e">2010-11e</option>
    <option value="2011-12x">2011-12x</option>
    <option value="2011-12e">2011-12e</option>
  </select>


</form>  		

</div> 		

<div class="right">
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

include '../db_connect.php';

$query = "SELECT * FROM STATISTIKA";

$result = mysql_query($query)
or die('Query failed: ' . mysql_error());
?>

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
	<?php $ask=8;
      include '../navigation.php';?> 
	</p>
</center>
</body>
</html>