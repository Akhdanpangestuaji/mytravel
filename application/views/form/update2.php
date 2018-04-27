<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach ($isi->result() as $key): ?>
		<form action="http://localhost/mytravel/index.php/User/login" method="post">

			
			<input type="text" name="username" placeholder="username" >
			<input type="text" name="password" placeholder="password" >
			<input type="submit" value="save">

		</form>
	<?php endforeach ?>
	
</body>
</html>