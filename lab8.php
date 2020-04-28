<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- add boostrap css link -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- add a style.css link -->
	<link rel="stylesheet" href="css/style.css">
	<title>Temperature Converter</title>
</head>

<body>
<header>
	<?php require "inc/layout/header.inc.php"; ?>
</header>

<!-- this is a test -->
<?php 
require "inc/function/functions.inc.php";
require "inc/form/process-form.inc.php";
require "inc/form/form.inc.php";
?>

<!-- add link to jquery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- add link to bootstrap js -->
<script src="js/bootstrap/min.js"></script>

<footer>
<?php require "inc/layout/footer.inc.php"; ?>
</footer>
</body>
</html>