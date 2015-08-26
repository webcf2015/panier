<?php

// doit être inclu AVANT notre session_start
include_once('jcart/jcart.php');

// session multi-usage (panier + autres utilisations) ! le session_start existe aussi dans jcart/jcart.php (pour l'ajax)
@session_start();
$_SESSION['lulu']= 5;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />
        <link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/jcart.css" />

	</head>
	<body>
		<div id="wrapper">
			<h2>Demo Store</h2>

			<div id="sidebar">
				<div id="jcart"><?php $jcart->display_cart();?></div>
			</div>

			<div id="content">

				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="jcartToken" value="<?php echo $_SESSION['jcartToken'];?>" />
						<input type="hidden" name="my-item-id" value="ABC-123" />
						<input type="hidden" name="my-item-name" value="Soccer Ball" />
						<input type="hidden" name="my-item-price" value="25.00" />
						<input type="hidden" name="my-item-url" value="" />

						<ul>
							<li><strong>Soccer Ball</strong></li>
							<li>Price: $25.00</li>
							<li>
								<label>Qty: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="my-add-button" value="add to cart" class="button" />
					</fieldset>
				</form>

				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="jcartToken" value="<?php echo $_SESSION['jcartToken'];?>" />
						<input type="hidden" name="my-item-id" value="2" />
						<input type="hidden" name="my-item-name" value="Baseball Mitt" />
						<input type="hidden" name="my-item-price" value="19.50" />
						<input type="hidden" name="my-item-url" value="http://yahoo.com" />

						<ul>
							<li><strong>Baseball Mitt</strong></li>
							<li>Price: $19.50</li>
							<li>
								<label>Qty: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="my-add-button" value="add to cart" class="button" />
					</fieldset>
				</form>

				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="jcartToken" value="<?php echo $_SESSION['jcartToken'];?>" />
						<input type="hidden" name="my-item-id" value="3" />
						<input type="hidden" name="my-item-name" value="Hockey Stick" />
						<input type="hidden" name="my-item-price" value="33.25" />
						<input type="hidden" name="my-item-url" value="http://bing.com" />

						<ul>
							<li><strong>Hockey Stick</strong></li>
							<li>Price: $33.25</li>
							<li>
								<label>Qty: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="my-add-button" value="add to cart" class="button tip" />
					</fieldset>
				</form>

				<div class="clear"></div>

				<p><small>Having trouble? <a href="jcart/server-test.php">Test your server settings.</a></small></p>

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