<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php include('variables/variables.php'); ?>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" /-->

<!--mysql.cs.ut.ee
 grant all on juzar.* to juzar@'%' identified by 's33bim2gi';
-->

<?php /*
$link = mysql_connect('mysql.cs.ut.ee', 'juzar', 's33bim2gi');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
*/?>
<title>INWO test page</title>
</head>

<body>
<div id="wrapper">

<!-- -----------HEAD------------ -->
<?php/* include ('includes/header.php');*/ ?>

<!-- -----------NAVIGATION------------ -->
<?php include ('includes/nav.php'); ?>

<!-- -----------CONTENT------------ -->
<div id="contentWrap" class="row">
	<div id="content" class="col-md-8">
		<?php include ('includes/content.php'); ?>
	</div>
	
	<!-- -----------SIDEBAR------------ -->
	<div id="sidebar" class="col-md-4">
		<?php include('includes/sidebar.php'); ?>
	</div>
	<!-- -------------FOOT---------- -->
	<div id="footer" class="col-md-4">

	<?php include('includes/footer.php'); ?>
	</div>
</div>
<!-- End #wrapper -->

</body>
</html>
