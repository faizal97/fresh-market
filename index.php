<?php 
include 'connection/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FRESH MARKET</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Project's Stylesheet -->
	<link rel="stylesheet" type="text/css" href="style/index.css">
</head>
<body>
	<div id='site-wrapper'>
		<div id='head-wrapper'>
		<?php
		if(file_exists('header.php')){
			include 'header.php';
		}
		else {
			echo "Tidak ada file header";
		}
		?>
		</div>
		<div id='content-wrapper'>
		<?php
		if(file_exists('content.php')){
			include 'content.php';
		}
		else {
			echo "Tidak ada file konten";
		}
		?>
		</div>
		<footer>
		<?php
		if(file_exists('footer.php')){
			include 'footer.php';
		}
		else {
			echo "Tidak ada file footer";
		}
		?>
		</footer>
	</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>