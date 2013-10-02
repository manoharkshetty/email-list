<!DOCTYPE html>
<html>
	<head>
		<title>file retrive</title>
	</head>
	<body>
		<h1>Retriving from file</h1>
		<table border="1">
			<tr><th>Name</th><th>Email address</th></tr>
			<?php
				$result=file("list.txt");
				foreach ($result as $row) {
					list($name,$email)= explode(':', $row);
					echo "<tr><td>$name</td><td><a href='#'>$email</td></tr>";
					# code...
				}
			?>
		</table>

	</body>
</html>