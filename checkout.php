<?php

// doit être inclu AVANT notre session_start
include_once('jcart/jcart.php');

// session multi-usage (panier + autres utilisations) ! le session_start existe aussi dans jcart/jcart.php (pour l'ajax)

@session_start();

echo $_SESSION['lulu'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Finalisez votre achat!</title>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />

		<link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/jcart.css" />
	</head>
	<body>
		<div id="wrapper">
			<h2>Demo Checkout</h2>

			<div id="sidebar">
			</div>

			<div id="content">
				<div id="jcart"><?php $jcart->display_cart();?></div>

				<p><a href="index.php">&larr; Continue shopping</a></p>

				<?php
					//echo '<pre>';
					//var_dump($_SESSION['jcart']);
					//echo '</pre>';
				?>
			</div>

			<div class="clear"></div>
		</div>

		<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="jcart/js/jcart.min.js"></script>
	</body>
</html>