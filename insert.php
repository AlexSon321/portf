<!DOCTYPE html>
<html>

<head>
	<title>Document</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => form
		$conn = mysqli_connect("fdb31.biz.nf", "4134665_misha", "19112004Misha)", "4134665_misha");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email= $_REQUEST['email'];
		$message = $_REQUEST['message'];
		
		// Performing insert query execution
		// here our table name is contact
		$sql = "INSERT INTO contact VALUES ('$name',
			'$email','$message')";
		
		if(mysqli_query($conn, $sql)){
			
             echo("Дякуємо за ваше повідомлення!");
			echo nl2br("\n$name\n $email\n "
				. "$message");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
