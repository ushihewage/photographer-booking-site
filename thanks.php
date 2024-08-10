<!-- Nav Bar -->
<?php include 'stickyNav.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thank You</title>
	<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
	*
	{
		margin:0;
		padding: 0;
		box-sizing: border-box;
		font-family: Poppins, sans-serif;
	}
	.container
	{
		width: 100%;
		height: 60vh;
		background: #3c5077;
		display: flex;
		align-items: center;
		justify-content: center;
	} 
	.popup
	{
		width: 400px;
		background: #fff;
		position: absolute;
		border-radius: 6px;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		text-align: center;
		padding: 0 30px 30px;

	}
	.popup img
	{
		width: 100px;
		margin-top: -50px;
		border-radius: 50%;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
	}

	
	</style>

</head>
<body>
	<div class="container">
	

		<div class="popup" id="popup">
		<img src="images/tick2.jpg">
		<h2>Thank You!</h2>
		<p>Your details has been successfully submitted. Thanks!</p>
		

	    </div>
	

	</div>
	   <!---Footer--->
  <?php include 'footer.php';?>
</body>
</html>