<!-- Nav Bar -->
<?php include 'stickyNav.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&family=Monoton&display=swap');
		*
		{
			margin:0;
			padding: 0;


		}
	
		.paragraph
		{
			min-height: 100%;
		}

		.p1
		{
			overflow-x: hidden;
			height: 45vh;
			position: relative;
			background-image: url('images/cam2.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
            background-size: cover;
            /*margin-top: -20px;
            margin-left: -10px;*/
		
		}
		.p1 h1
		{
			font-family: Lato;
			margin-left: 20%;
			color: #fff;
			width: 100%;
			height: 100%;
			display:flex;
			align-items: center;
			font-size: 50px;

		}
		#Para
		{
			background-color: #fff2e6 ;
			margin-bottom: -40vh;
			font-size: 18px;



			
		}
        .loginP
		{
			margin-left: 50px;
			padding-left: 45px;
			font-family: sans-serif;
			align-items: center;
			padding-top: 27px;
			line-height: 3;
			height: 130vh;

		}
		   .button2 {
            background-color:  #e6e6e6;
            border: 2px solid black;
            color: #000;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 50px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            font-size: 20px;
            font-family: sans-serif;
            width: 70vw;
            text-align: center;

        }

        .button2:hover {
            background-color: #000;
            color: white;
        }
		
	</style>
</head>
<body>
	<div class="photographer">
		<div class="p1">
		<h1>Welcome Photographers</h1>

		</div>
		
		<div id="Para">
			
		<div class="loginP">
			<h3>Looking for photography job?</h3>
		    Are you a photographer with an experience with playing clients?
			<br>
			Would you like to be part of a community that recognizes quality photography?
			<br>
			We are looking for photographers in many different cities. JOIN US.
			<br>
			<b>Benefits that you receive from us:</b>
			<br>
			
			-access to photgraphy assignments, and photography related information.(no spam)<br>
			-access to a contact form which allows you to submit your portfolio if you are interested in working with us.<br>
			-access to a closed Facebook group where we also post assignments.<br>
		<a href="register.php">

        <button class="button2">SIGN UP
        </button> 
        </a>



		</div>
	</div>
	
<!---Footer--->
  <?php include 'footer.php';?>

</body>
</html>