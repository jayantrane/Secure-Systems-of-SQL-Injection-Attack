<?php

$falseness = $_GET['falseness'];

?>

<html lang="en">

<head>
	<meta charset="utf-8"> 
	<title>SQL Injection form error example</title> 
	<!-- Bootstrap -->
    <link href="bank/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap theme -->
    <link href="bank/css/bootstrap-theme.min.css" rel="stylesheet"> 
    <link href="bank/css/login.css" rel="stylesheet">

</head>
<body>
<div class="container">
	<div class="jumbotron">
		<h2>Unauthorised User</h2>
		<p>Your IP has been logged.<?php echo $_SERVER['REMOTE_ADDR']; ?></p>
	</div>

</div>
</body>
</html>