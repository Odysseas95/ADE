<!DOCTYPE html>
<html>
<head>
    <title>Table</title> 
	<meta charset="UTF-8">
</head>
<body>

<?php $students1=array(1,43818,9,"Αθανασιάδης","Οδυσσέας");
 	  $students2=array(2,43844,9,"Καρβέλας","Νίκος");
	  $students3=array(3,43851,9,"Κουμανδράκης","Αντώνης");
	  $ar=array(1,2,3);
	  $am=array(43818,43844,43851);
	  $sem=array(9,9,9);
	  $Lname=array("Αθανασιάδης","Καρβέλας","Κουμανδράκης");
	  $Fname=array("Οδυσσέας","Νίκος","Αντώνης");
?>

<p>
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
	</p>
	</body>
</html>