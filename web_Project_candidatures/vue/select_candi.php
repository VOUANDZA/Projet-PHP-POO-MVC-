<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>	
<table border="1" class="table" style="width:57% ;color:white" >
<tr>
	<td colspan="9" style="font-weight:bold; padding-left:35%; font-size:30px">Posting of applications</td>
</tr>
<tr>
		
 

	<td scope="col">ID</td>
	<td scope="col">Lastname</td>
	<td scope="col">Firstname</td>
	<td scope="col">Email</td>
	<td scope="col">Phone</td>
	<td scope="col">Description</td>
	<td scope="col">Date_Apply</td>
	<td scope="col">Level</td>
	<td scope="col">Wage</td>
</tr>	
 <?php foreach ($lesinformations as $information):?>
	
<tr>
	<td><?= $information['id'];?></td>
	 <td><?=$information['Lastname'];?></td>
	<td><?= $information['Firstname'];?></td>
	<td><?= $information['Email'];?></td>
	<td><?= $information['Phone'];?></td>
	<td><?= $information['description'];?></td>
	<td><?= $information['date_applay'];?></td>
	<td><?= $information['Level'];?></td>
	<td><?= $information['Wage'];?></td>
</tr>
	
<?php endforeach;?>

</table>
</center>
</body>
</html>