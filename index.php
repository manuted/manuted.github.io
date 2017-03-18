<!DOCTYPE html>
<?php 
	include('config.php');
?>
<html lang="ru-RU">
 <head>
   <title>!DOCTYPE</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link rel="stylesheet" href="style.css">
   <script type='text/javascript' src='js/jquery-2.1.0.min.js'></script>
   <script type='text/javascript' src='js/main.js'></script>
 </head>
 <body>
	<form method="post" action="add_to_cart.php" enctype="multipart/form-data">
	<div class="wrapper">
		<?php 
			if(count($message) !== 0){?>
				<div class="message active">
					<?php echo $message;?>
				</div>
				<?php } ?>
		<div class="message">
			<?php echo $message;?>
		</div>
		<div class="add_product">
			<div class="minus_wrapper"><span class="minus"></span></div>
			<div class="count">1</div>
			<div class="plus_wrapper"><span class="plus"></span></div>
		</div>
		<div class="button_buy">
			Купить
			<noscript>
				<input type="submit" class="noscript" value="Купить">
			</noscript>
		</div>
		<noscript>
		 <input type="datetime" class="date" name = 'date'>
		 <input type="hidden" name="count" value="1">
		</noscript>
		
	</div>
</body>
</html>