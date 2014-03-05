<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php include('variables/variables.php'); ?>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"  type="text/javascript" ></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<script src="js/main.js"  type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript">
<!--
			var config = {
				height: 600,
				params: { enableDebugging:"0" }
				
			};
			config.params["disableContextMenu"] = true;
			var u = new UnityObject2(config);
			
			jQuery(function() {

				var $missingScreen = jQuery("#unityPlayer").find(".missing");
				var $brokenScreen = jQuery("#unityPlayer").find(".broken");
				$missingScreen.hide();
				$brokenScreen.hide();

				u.observeProgress(function (progress) {
					switch(progress.pluginStatus) {
						case "broken":
							$brokenScreen.find("a").click(function (e) {
								e.stopPropagation();
								e.preventDefault();
								u.installPlugin();
								return false;
							});
							$brokenScreen.show();
						break;
						case "missing":
							$missingScreen.find("a").click(function (e) {
								e.stopPropagation();
								e.preventDefault();
								u.installPlugin();
								return false;
							});
							$missingScreen.show();
						break;
						case "installed":
							$missingScreen.remove();
						break;
						case "first":
						break;
					}
				});
				u.initPlugin(jQuery("#unityPlayer")[0], "gamefile/demo.unity3d");
			});
		-->
		</script>

<!--mysql.cs.ut.ee
 grant all on juzar.* to juzar@'%' identified by 's33bim2gi';
-->


<title>INWO PLACEHOLDER PAGE</title>
</head>

<body>
<div id="wrapper">

<?php /* include ('includes/header.php');*/ ?>

<?php include ('includes/nav.php'); ?>

<div id="unityPlayer">
				<div class="missing">
					<a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
						<img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
					</a>
		</div>
	</div>
<div id="contentWrap" class="row">
	<div id="content" class="col-md-10">
		<?php include ('includes/content.php'); ?>
	</div>
	

	<div id="sidebar" class="col-md-2">
		<?php include('includes/sidebar.php'); ?>
	</div>

	<div id="footer" class="col-md-12">

	<?php include('includes/footer.php'); ?>
	</div>
</div>
<!-- end #wrapper -->
</div>
</body>
</html>
