<?php
/* php program on file handling */ 

	if(isset($_POST['username'])) {

		$username=$_POST['username'];
		$email =$_POST['email'];
		if(empty($username) ||empty($email)){
			$status="please enter valid username and email";

		}
		// validating email
		else if(filter_var($email,FILTER_VALIDATE_EMAIL)){

				$file="list.txt";
				file_put_contents($file, "$username : $email\n", FILE_APPEND | LOCK_EX);
				$status="THANKS FOR THE REGISTRATION";

				} else {
					$status="please enter valid email address";
				}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Myweb page</title>
		<style type="text/css">
		ul{
			margin: 0;padding: 0;
		}
		li{ 
			list-style: none;
		
			padding-bottom: 1em;
		}
		
		</style>
	</head>
	<body>
		<h1>my web page</h1>
		<form action="index.php" method="POST">
			<ul>
				<li>
					<label>Username:</label>
					<input type="text" name="username" />
				</li>
				<li>
					<label>Email</l Address</label>
					<input type="text" name="email" />
				</li>
				<li>
					<input type="submit" name="submit" value="submit" />
				</li>
				<li>	
					<a href="retrieve.php">view Registered people</a>
				<?php
					if (isset($status)) {
						echo "<li><h1>$status<h1></li>";
					}
				?>
			</ul>
		</form>
	</body>
</html>