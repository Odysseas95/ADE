<!DOCTYPE html>
<html>
<head >
    <title>Table</title> 
	<meta charset="UTF-8" http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script language="javascript" src="script.js"></script>
</head>
<body>

<center>
<p>	
		<?php $ask=8; 
      include '../navigation.php';?>
</p>
</center>

<div class="left"  >
	<h> Choose semester </h>
<form id="chosesemester" name="chosesemester" action="index.php" method="post" enctype="application/x-www-form-urlencoded"  >
     <select name="akex" id="examList" size="1" onchange="this.form.submit()" >
			<optgroup label="Ακ.Εξάμηνο:" name="akeks"></optgroup>
				<option value="2003-04.x">Επιλέγξτε Εξάμηνο</option>
			<optgroup label="2003-04:">
				<option value="2003-04.x">Χειμερινό 2003-04</option>
				<option value="2003-04.e">Εαρινό 2003-04</option>
			</optgroup>
			<optgroup label="2004-05:">
				<option value="2004-05.x">Χειμερινό 2004-05</option>
				<option value="2004-05.e">Εαρινό 2004-05</option>
			</optgroup>
			<optgroup label="2005-06:">
				<option value="2005-06.x">Χειμερινό 2005-06</option>
				<option value="2005-06.e">Εαρινό 2005-06</option>
			</optgroup>
			<optgroup label="2006-07:">
				<option value="2006-07.x">Χειμερινό 2006-07</option>
				<option value="2006-07.e">Εαρινό 2006-07</option>
			</optgroup>
			<optgroup label="2007-08:">
				<option value="2007-08.x">Χειμερινό 2007-08</option>
				<option value="2007-08.e">Εαρινό 2007-08</option>
			</optgroup>
			<optgroup label="2008-09:">
				<option value="2008-09.x">Χειμερινό 2008-09</option>
				<option value="2008-09.e">Εαρινό 2008-09</option>
			</optgroup>
			<optgroup label="2009-10:">
				<option value="2009-10.x">Χειμερινό 2009-10</option>
				<option value="2009-10.e">Εαρινό 2009-10</option>
			</optgroup>
			<optgroup label="2010-11:">
				<option value="2010-11.x">Χειμερινό 2010-11</option>
			</optgroup>
		</select>



</form>  		

</div> 		

<div class="right" id="right">

<a href="#top">
<img onmouseover="zoomImg(this)" onmouseout="outImg(this)" style="position: fixed; top: 310px; left: 10px; width: 70px; height: 30px;" src="Bck.png">
</a>

<table class="maintable" width=80% align="center" border="2px inset #D8D8D8" cellspacing="1">
<form id="form1" name="form1" action="index.php" method="post">
<tbody>	
	<tr>
     	<th >A/A</th>
     	<th >κωδικός</th>
     	<th >τ.ε</th>
     	<th ></th>
     	<th ></th>
     	<th >ΜΑΘΗΜΑ (Θεωρία/Εργαστήριο)</th>
	 	<th >ΔΗΛ.</th>
	 	<th >ΣΥΜ.</th>
	 	<th >a</th>  
	 	<th >b</th>
	 	<th >c</th>
	 	<th >d</th>
	 	<th >e</th>
	 	<th >f</th>
	 	<th >ΣΥΝ.</th>
	 	<th >ok</th>
	 	<th >pr</th>
    </tr>
<tr align="center" style="background-color:#4d0000;" >
	<td class="td1" colspan="3" >
		<p>
			<font color="white" width>
				<strong> α.ε: <?php echo $_POST["akex"]?> </strong>
			</font>
		</p>
	</td>

	<td class="td2" align="center" colspan="5">
		<font color="white">Επιλογές :</font>
		<select name="akex" id="examList" size="1" onchange="this.form.submit()">
			<optgroup label="Ακ.Εξάμηνο:" name="akeks"></optgroup>
				<option value="2003-04.x">Επιλέγξτε Εξάμηνο</option>
			<optgroup label="2003-04:">
				<option value="2003-04.x">Χειμερινό 2003-04</option>
				<option value="2003-04.e">Εαρινό 2003-04</option>
			</optgroup>
			<optgroup label="2004-05:">
				<option value="2004-05.x">Χειμερινό 2004-05</option>
				<option value="2004-05.e">Εαρινό 2004-05</option>
			</optgroup>
			<optgroup label="2005-06:">
				<option value="2005-06.x">Χειμερινό 2005-06</option>
				<option value="2005-06.e">Εαρινό 2005-06</option>
			</optgroup>
			<optgroup label="2006-07:">
				<option value="2006-07.x">Χειμερινό 2006-07</option>
				<option value="2006-07.e">Εαρινό 2006-07</option>
			</optgroup>
			<optgroup label="2007-08:">
				<option value="2007-08.x">Χειμερινό 2007-08</option>
				<option value="2007-08.e">Εαρινό 2007-08</option>
			</optgroup>
			<optgroup label="2008-09:">
				<option value="2008-09.x">Χειμερινό 2008-09</option>
				<option value="2008-09.e">Εαρινό 2008-09</option>
			</optgroup>
			<optgroup label="2009-10:">
				<option value="2009-10.x">Χειμερινό 2009-10</option>
				<option value="2009-10.e">Εαρινό 2009-10</option>
			</optgroup>
			<optgroup label="2010-11:">
				<option value="2010-11.x">Χειμερινό 2010-11</option>
			</optgroup>
		</select>

		<font color="white">*</font>
		<font color="white"><strong>Focus on Sem:</strong></font>
		<a href="#1" class="semester">1</a>
		<a href="#2" class="semester">2</a>
		<a href="#3" class="semester">3</a>
		<a href="#4" class="semester">4</a>
		<a href="#5" class="semester">5</a>
		<a href="#6" class="semester">6</a>
		<a href="#7" class="semester">7</a>
		<font color="white">* </font>

	</td>
	<td align="center" colspan="17">
		<font color="white">*</font>
		<input class="box" type="button" onclick="onRefresh()" name="refresh" value="REFRESH">
		<font color="white">* </font>
		<input class="box" type="submit" onclick="onReset()" name="Reset" value="RESET">
		<font color="white">* </font>
		<input class="box" type="button" onclick="location" href='graphs.php' name="graphs" value="GRAPHS">
		<font color="white">* </font>
		<input class="box" type="submit" formaction="formsubmit.php" name="update" value="UPDATE">
		<font color="white">* </font>

	</td>
</tr>
</form>

<?php 

include '../db_connect.php';

$query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2003-04.x'";

	switch ($_POST["akex"]) {
	    case "2003-04.x":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2003-04.x'"; 
	        break;
	    case "2003-04.e":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2003-04.e'"; 
	        break;
	    case "2004-05.x":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2004-05.x'"; 
	        break;
	    case "2004-05.e":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2004-05.e'" ; 
	        break;
	    case "2005-06.x":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2005-06.x'"; 
	        break;
	    case "2005-06.e":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2005-06.e'"; 
	        break;
	    case "2006-07.x":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2006-07.x'"; 
	        break;
	    case "2006-07.e":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2006-07.e'"; 
	        break;
	    case "2007-08.x":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2007-08.x'"; 
	        break;
	    case "2007-08.e":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2007-08.e'"; 
	        break;
	    case "2008-09.x":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2008-09.x'"; 
	        break;
	    case "2008-09.e":
	        $query = "SELECT * FROM STATISTIKA2 WHERE ακ_εξαμ='2008-09.e'"; 
	    default: echo "ERROR"; 
	}


$result = mysql_query($query)
or die('Query failed: ' . mysql_error());
?>

<?php
$i=0; $flag=1;
while ($row=mysql_fetch_array($result, MYSQL_ASSOC)) { $i++; $f=mysql_result($result,$i,"κωδικός"); $c=mysql_result($result,$i,"te");?>
<tr>
	
	<?php if ((strcspn($f, '1') ==2) or (strcspn($f, '3') ==2)){	?>
	<td class="labstyle" align="center"><?php echo $i;?></td>
	<td class="labstyle" align="right"><?php echo $row["κωδικός"];?></td>
	<td class="labstyle" align="center"><?php echo $row["te"];?></td>
    <td class="labstyle"> <input type="checkbox" name="pass" value="pass" /> </td>
    <td class="labstyle"> <input type="radio" name="favourite" value="favourite" /> </td>
	<td class="labstyle" align="left"><?php echo $row["ΜΑΘΗΜΑ"];?></td>
	<td class="labstyle" align="right"><?php echo $row["ΔΗΛΩΣΕΙΣ"];?></td>
	<td class="labstyle" align="right"><?php echo $row["ΣΥΜΜΕΤΟΧΕΣ"];?></td>
	<td class="labstyle" align="right"><?php echo $row["a"];?></td>
	<td class="labstyle" align="right"><?php echo $row["b"];?></td>
	<td class="labstyle" align="right"><?php echo $row["c"];?></td>
	<td class="labstyle" align="right"><?php echo $row["d"];?></td>
	<td class="labstyle" align="right"><?php echo $row["e"];?></td>
	<td class="labstyle" align="right"><?php echo $row["f"];?></td>
	<td class="labstyle" align="right"><?php echo $row["ΣΥΝ"];?></td>
	<td class="labstyle" align="right"><?php echo $row["ΠΑΡΑΓΩΓΙΚΟΤΗΤΑ"];?></td>
	<td class="labstyle" align="right"><?php echo $row["pr%"];?></td>
		<?php }else{

		if (($c=='1') and ($flag==1)){ $flag=2;?>
			<td id="1" class="te" align="center">
				<a href="#1"><?php echo $i;?></a> </td>
			<td align="right"><?php echo $row["κωδικός"];?></td>
			<td class="te" align="center"><?php echo $row["te"];?></td>

		<?php }else if (($c=='2') and ($flag==2)){ $flag=3;?>
			<td id="2" class="te" align="center">
				<a href="#2"><?php echo $i;?></a> </td>
			<td align="right"><?php echo $row["κωδικός"];?></td>
			<td class="te" align="center"><?php echo $row["te"];?></td>

		<?php }else if (($c=='3') and ($flag==3)){ $flag=4;?>
			<td id="3" class="te" align="center">
				<a href="#3"><?php echo $i;?></a> </td>
			<td align="right"><?php echo $row["κωδικός"];?></td>
			<td class="te" align="center"><?php echo $row["te"];?></td>

		<?php }else if (($c=='4') and ($flag==4)){ $flag=5;?>
			<td id="4" class="te" align="center">
				<a href="#4"><?php echo $i;?></a> </td>
			<td align="right"><?php echo $row["κωδικός"];?></td>
			<td class="te" align="center"><?php echo $row["te"];?></td>

		<?php }else if (($c=='5') and ($flag==5)){ $flag=6;?>
			<td id="5" class="te" align="center">
				<a href="#5"><?php echo $i;?></a> </td>
			<td align="right"><?php echo $row["κωδικός"];?></td>
			<td class="te" align="center"><?php echo $row["te"];?></td>

		<?php }else if (($c=='6') and ($flag==6)){ $flag=7;?>
			<td id="6" class="te" align="center">
				<a href="#6"><?php echo $i;?></a> </td>
			<td align="right"><?php echo $row["κωδικός"];?></td>
			<td class="te" align="center"><?php echo $row["te"];?></td>
		<?php }else if (($c=='7') and ($flag==7)){ $flag=8;?>
			<td id="7" class="te" align="center">
				<a href="#7"><?php echo $i;?></a> </td>
			<td align="right"><?php echo $row["κωδικός"];?></td>
			<td class="te" align="center"><?php echo $row["te"];?></td>
		<?php }else{ ?>
			<td align="center"><?php echo $i;?></td>
			<td align="right"><?php echo $row["κωδικός"];?></td>
			<td align="center"><?php echo $row["te"];}?></td>

    <td> <input type="checkbox" name="pass" value="pass" /> </td>
    <td> <input type="radio" name="favourite" value="favourite" /> </td>
	<td align="left"><?php echo $row["ΜΑΘΗΜΑ"];?></td>
	<td align="right"><?php echo $row["ΔΗΛΩΣΕΙΣ"];?></td>
	<td align="right"><?php echo $row["ΣΥΜΜΕΤΟΧΕΣ"];?></td>
	<td align="right"><?php echo $row["a"];?></td>
	<td align="right"><?php echo $row["b"];?></td>
	<td align="right"><?php echo $row["c"];?></td>
	<td align="right"><?php echo $row["d"];?></td>
	<td align="right"><?php echo $row["e"];?></td>
	<td align="right"><?php echo $row["f"];?></td>
	<td align="right"><?php echo $row["ΣΥΝ"];?></td>
	<td align="right"><?php echo $row["ΠΑΡΑΓΩΓΙΚΟΤΗΤΑ"];?></td>
	<td align="right"><?php echo $row["pr%"];}	}?></td>
		
</tr>
	</table>
</div>
</body>
</html>