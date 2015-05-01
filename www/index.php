<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Salt Control</title>
  <meta http-equiv="refresh" content="5">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="jumbotron">
				<h1>
					<?php
                                        	$output3 = shell_exec("cat saltdate.txt");
                                        	echo "$output3";
                                        ?>

				</h1>
				<p>
					This is the Salt Master reporting system designed by @DragonStuff using SaltStack. Current Node information is displayed below.
				</p>
				<p align="center">
					<a class="btn btn-primary btn-large" href="#">Run Command</a>
                                        <a class="btn btn-primary btn-large" href="#"></a>
                                        <a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>
			<div class="row clearfix">
				<div class="col-md-4 column">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Connected Nodes
							</h3>
						</div>
						<div class="panel-body">
						<?php
							$output = shell_exec("cat saltstatus.txt");
							echo "<pre>$output</pre>";
						?>
						</div>
						<div class="panel-footer">
						</div>
					</div>
				</div>
				<div class="col-md-4 column">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Node Stats
							</h3>
						</div>
						<div class="panel-body">
						<?php
                                                        $output2 = shell_exec("cat saltuptime.txt");
                                                        echo "<pre>$output2</pre>";
                                                ?>
						</div>
						<div class="panel-footer">
						</div>
					</div>
				</div>
				<div class="col-md-4 column">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Node IPs
							</h3>
						</div>
						<div class="panel-body">
						<?php
                                                        $output3 = shell_exec("cat saltip.txt");
                                                        echo "<pre>$output3</pre>";
                                                ?>
						</div>
						<div class="panel-footer">
						</div>
					</div>
				</div>
        <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nd/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">SaltStackWebView</span> by <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">DragonStuff</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/">Creative Commons Attribution-NoDerivatives 4.0 International License</a>.
			</div>
		</div>
	</div>
</div>
</body>
</html>
