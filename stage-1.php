<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HNG 4.0 STAGE 1</title>
	<link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
	<style>
		body{
			background-image: url('hng-cover.jpg');
			background-size: cover;
			background-position: center;
			font-family: 'Andika';
			font-size: 16px;
			height: 100vh;
			overflow: hidden;
		}
		.flexbox{
			height: 90vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.main{
			background-color: rgba(0, 0, 0, 0.6);
			border-top-left-radius: 30px;
			border-bottom-right-radius: 30px;
			color: #fff;
			padding: 5%;
			width: 70%;
			max-width: 300px;
			min-height: 150px;
		}

		.footer{
			position: fixed;
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
			bottom: 0;
			left: 0;
			right: 0;
			background-color: rgba(0, 0, 0, 0.6);
			color: #fff;
			text-align: center;
			padding-top: 2vh;
			height: 7vh;
		}

	</style>
</head>
<body>
	<div class="flexbox">
		<div class="main" style="text-align: center;">
			<h3>ILESANMI TEMITOPE A.</h3>
			<p><?php echo date('l, F d , Y') ?></p>
			<p><?php echo date("h:i:s A") ?></p>
		</div>
	</div>
	<div class="footer">Copyright &copy; <?php echo date("Y")?> - Santiago</div>
</body>
</html>