 <!DOCTYPE html>
<html>
<head>
    <title>Table</title> 
	<meta charset="UTF-8">
</head>
<body>
<center>
	<p>	
		<?php $ask=5;
      include '../navigation.php';?>	
	</p>
</center>

<?php 

$table = fopen("STATISTIKA.csv", "r") or die("Unable to open file!");
$x = fread($table,filesize("STATISTIKA.csv"));
fclose($table); 

$z = explode("\x0A",$x);
?>
<table < align="center" border="1" >
  <tr> 

	<?php 
		
				foreach($z as $k=>$v){				
						$w = explode(';',rtrim($v,";"));
					?>
	<tr>
		<?php 
			
				if ($k>2 and $k<84 and $k<>4){
				foreach( $w as $td ) {?>

			<td align="center"><?php echo $td;}}}?></td>
	</tr>
	

	</tr>
</table>
<center>
	<p>	
		<?php $ask=5;
      include '../navigation.php';?>	
	</p>
</center>
	</body>
</html>