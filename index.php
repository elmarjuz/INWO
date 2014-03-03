
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php include('variables/variables.php'); ?>

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

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

<title>1stWebDesigner PHP Template</title>

</head>

	<body>

		<div id="wrapper">


<!-- -----------HEAD------------ -->
<?php include ('includes/header.php'); ?>






<!-- -----------NAVIGATION------------ -->
<?php include ('includes/nav.php'); ?>



<div id="content">

<h1>Heading1</h1>
<h2>Heading2</h2>
<h3>Heading3</h3>
<h4>Heading4</h4>
<h5>Heading5</h5>

<h3>Paragraph Element</h3>

<p>

Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. Mauris aliquam nibh vitae eros sodales fermentum. Fusce cursus est varius ante vehicula eget ultrices felis eleifend. Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.

</p>

<p>

Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. Mauris aliquam nibh vitae eros sodales fermentum. Fusce cursus est varius ante vehicula eget ultrices felis eleifend. Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.

</p>

<h3>Another Heading Starting Point</h3>

<p>

Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. Mauris aliquam nibh vitae eros sodales fermentum. Fusce cursus est varius ante vehicula eget ultrices felis eleifend. Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.

</p>

<p>

Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. Mauris aliquam nibh vitae eros sodales fermentum. Fusce cursus est varius ante vehicula eget ultrices felis eleifend. Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.

</p>

</div> <!-- end #content -->

<!-- -----------SIDEBAR------------ -->
<?php include('includes/sidebar.php'); ?>



<!-- -------------FOOT---------- -->
<?php include('includes/footer.php'); ?>





		</div> <!-- End #wrapper -->

	</body>

</html>
