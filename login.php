<?php
	session_start();
	$_SESSION['logged'] = 0;

	$mail = "";
	if (isset($_POST["submit"]))
	{
		$mail = $_POST["mail"];
		$pass = $_POST["pass"];

		if ($mail != "lab4@must.edu.mn" || $pass!="pass1234" )
			$error_msg[] = "Имэйл эсвэл нууц үгээ зөв оруулна уу";
		if (empty($error_msg))
		{
			$_SESSION['logged'] = 1;
			header ("Refresh: 1; URL=index.php");
		}
	}
?>

<html>
<head>
	<title>IS301 LAB4</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap.min.css" type="text/css">
</head>
<body>
	<div class="container well" style="width:400px">
		<h3>Сайтанд нэвтрэх</h3>
		
		<form action="login.php" method="post">
			<?php
		    // Алдааны мэдээлэл хэвлэх
			if (!empty($error_msg))
			{
				echo "<div class=\"alert alert-danger\" role=\"alert\">";
				foreach ($error_msg as $k => $msg)
				 	echo "<p>$msg</p>"; 
				echo "</div>";
			}
			?>
			<div class="form-group">
				<label for="mail">Имэйл</label>
			<input type="text" class="form-control" name="mail" value="<?php echo $mail; ?>">	
			</div>
			<div class="form-group">
				<label>Нууц үг</label>
				<input type="password" class="form-control" name="pass">	
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Нэвтрэх" name="submit">
			</div>
			<a href="reg.php">Шинээр бүртгүүлэх</a>
		</form>
	</div>
</body>
</html>