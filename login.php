<?php
	$usr=$_POST["user"];
	$pwd=$_POST["pwd"];
	if($usr=="sajjid"&&$pwd=="sajid123")
	{
		$loginName="Welcome Admin";
	}
	else
	{
		$loginName="Login Failed";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="sitestyle.css"
	<head>
	<body>
		<header>
			<h1>Cloud Login Result</h1>
		</header>
		<hr>
		<article>
			<section>
				<h2><?php echo $loginName ?></h2>
			</section>
		</article>
		<footer>
			Developed by P.Malathi.
		</footer>
	</body>
</html>