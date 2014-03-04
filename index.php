<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php include('variables/variables.php'); ?>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"  type="text/javascript" ></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />

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
<title>INWO PLACEHOLDER PAGE</title>
</head>

<body>
<div id="wrapper">

<?php/* include ('includes/header.php');*/ ?>

<?php include ('includes/nav.php'); ?>

<div id="contentWrap" class="row">
	<div id="content" class="col-md-8">
		<?php include ('includes/content.php'); ?>
	</div>
	

	<div id="sidebar" class="col-md-4">
		<?php include('includes/sidebar.php'); ?>
	</div>

	<div id="footer" class="col-md-4">

	<?php include('includes/footer.php'); ?>
	</div>
</div>
<!-- end #wrapper -->
</div>
</body>
</html>
