<!DOCTYPE html>
<html>
<head>
	<title>MyTravel</title>
</head>
<body>

	<h1>Show Data</h1>

	<table border="1">

		<tr>

			<td>id</td>
			<td>username</td>
			<td>password</td>
			<td>fullname</td>
			<td>level</td>
			
			<td><form action="http://localhost/mytravel/index.php/User/add"><input type="submit" name="" value="Kembali"></form></td>
		</tr>

		<?php foreach ($isi->result() as $key ): ?><!--variabel isi dihasilkan kemudian ditampung di $key foreach digunakan apabila ada data di dalam database maka akan di tampilkan / akan ngloop ampai data ditampilkan semua-->
				<tr>

					<td><?php echo $key->id ?></td>
					<td><?php echo $key->username ?></td>
					<td><?php echo $key->password ?></td>
					<td><?php echo $key->fullname ?></td>
					<td><?php echo $key->level ?></td>
					<td><a href="http://localhost/mytravel/index.php/User/delete/<?php echo $key->id ?>">Delete</td>
					<td><a href="http://localhost/mytravel/index.php/User/update/<?php echo $key->id ?>">Update</td>
				</tr>
		<?php endforeach ?>
	</table>
	


</body>
</html>