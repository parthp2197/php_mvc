<form action="muldelete" method="GET">
<table border="2"> 
	<tr>
		<tH>id</tH>
		<tH>name</tH>
		<tH>lname</tH>
		<tH>email</tH>
		<tH>hobbies</tH>
		<tH>password</tH>
		<tH>gender</tH>
		<th colspan="2"> action </tH>
	</tr>
	<?php 
		foreach ($data as $key => $value) 
		{
	?>
		<tr>
			<td> <?php echo $value->id ?> </td>
			<td> <?php echo $value->name ?> </td>
			<td> <?php echo $value->lname ?> </td>
			<td> <?php echo $value->email ?> </td>
			<td> <?php echo $value->hobbies ?> </td>
			<td> <?php echo $value->password ?> </td>
			<td> <?php echo $value->gender ?> </td>
			<td> <a href="delete?id=<?php echo $value->id; ?>">delete</a> </td>
			<td><input type="checkbox" name="abc[]" value="'<?php echo $value->id; ?>'"></td>
			<!-- <td><?php echo $value->id; ?></td> -->
		</tr>
	<?php 
		}
	?>

</table>

<br><br>
	
		<button type="submit" name="dlt" value="muldlt">Delete</button>
	</form>