<!-- Nav Bar -->
<?php include 'stickyNav.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Team</title>
	<style type="text/css">


		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@100;300;500&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Comforter&family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@100;300;500&display=swap');
		body
		{
			background: #fff;
			font-family: Poppins,sans-serif;
		}
		.wrapper
		{
			width: 1170px;
			margin: 2% auto;
			z-index: 2;

		}
		.section-header
		{
			text-align: center;
			margin-bottom: 30px;
		}
		.section-header h2
		{
			text-transform: uppercase;
			margin: 0;
			color: #000;
			font-size: 45px;
			letter-spacing: 5px;
			font-family: comforter;
		}
		.team-member
		{
			width: 29%;
			height: 150vh;
			float: left;
			box-shadow: 5px 5px 15px #000;
			position: relative;
			display: block;
			overflow: hidden;
			padding: 15px;
			text-align: center;
			margin: 0 5px;
			background: #fff;
			margin-bottom: 30px;
		}
		.team-member img
		{
			width: 100%;
			height:350px;

		}
		.team-member h3
		{
			margin: 0;
			text-transform: uppercase;
			font-size: 25px ;
			color: #000;
		}
		.team-member p
		{
			color: #000;
			line-height: 2;
		}
		.team-member:before
		{
			position: absolute;
			content: '';
			left: 0;
			bottom: 0;
			height: 4px;
			width: 100%;
			border-bottom:4px solid transparent ;
			border-left:4px solid transparent ;
			box-sizing: border-box;
			transform: translateX(100%);
		}
		.team-member:after
		{
			position: absolute;
			content: '';
			left: 0;
			top: 0;
			height: 4px;
			width: 100%;
			border-top:4px solid transparent ;
			border-right:4px solid transparent ;
			box-sizing: border-box;
			transform: translateX(-100%);
		}
		.team-member:hover:before
		{
			border-color: #d04f81;
			height:100%;
			transform: translateX(0);
			transition: .3s transform linear, .3s height linear .5s;

		}
		.team-member:hover:after
		{
			border-color: #d04f81;
			height:100%;
			transform: translateX(0);
			transition: .3s transform linear, .3s height linear .3s;

		}
		.gallery
		{
			width: 150px;
			height: 40px;
			cursor: pointer;
			text-align: center;
            text-decoration: none;
            display: inline-block;
			border-radius: 12px;
			font-size: 16px;
			transition-duration: 0.4s;
			background-color: lightblue;
		}
		.gallery:hover
		{
			width: 150px;
			height: 40px;
			border-radius: 12px;
			font-size: 16px;
			background-color: #000;
			color: white;
			transition-duration:auto ;
		}
		.Add
		{
			width: 150px;
			height: 40px;
			cursor: pointer;
			text-align: center;
            text-decoration: none;
            display: inline-block;
			border-radius: 12px;
			font-size: 16px;
			transition-duration: 0.4s;
background-color: lightblue;

		}
		.Add:hover

		{
			width: 150px;
			height: 40px;
			border-radius: 12px;
			font-size: 16px;
			background-color: #000;
			color: white;
			transition-duration: auto;
			
		}

	</style>
</head>
<body>
	<div class="wrapper">
		<div class="section-header">
			<h2>Our Team </h2>
	</div>
	<div class="team-member">
		<img src="images/tharindu.jpg">
		<h3>
			Tharindu Perera
		</h3>
		<p>Photographer</p>
		<p><b>Years of experience</b>
      <br>
      4
      <br>
      <b>I specialize in</b>
      <br>
      Large event photography such as weddings, business events, birthday parties, portraits, food and still life, animals,advertising photography video
      <br>
      <b>I speak</b>
      <br>
      English, Sinhala
      <br>
      <b>Pricing Information</b>
      <br>
      Personal photo shoots starting at <b>Rs.5,500</b> per session
      <br>
      Commercial photo shoots starting at <b>Rs.7,000</b> per day
      <br>
      Event photoshoots starting at <b>Rs.1,000</b> per hour
      

    </p>
    <a href="#"><button class="gallery">See Gallery</button></a>
    <a href="payment.php"><button class="Add">Add+</button></a>
	</div>
	<div class="team-member">
		<img src="images/sudarshana.jpg">
		<h3>
			Sudarshana Madusanka
		</h3>
		<p>Photographer</p>
		<p><b>Years of experience</b>
      <br>
      4
      <br>
      <b>I specialize in</b>
      <br>
      Weddings, Family photos, Portraits, Fashion, Food and still life, love shoots, Entertainment events, Web design, Videography.
      <br>
      <b>I speak</b>
      <br>
      English, Sinhala
      <br>
      <b>Pricing Information</b>
      <br>
      Personal photo shoots starting at <b>Rs.5,000</b> per session
      <br>
      Commercial photo shoots starting at <b>Rs.7,000</b> per day
      <br>
      Event photoshoots starting at <b>Rs.1,000</b> per hour
      

    </p>
		<a href="#"><button class="gallery">See Gallery</button></a>
		<a href="payment.php"><button class="Add">Add+</button></a>
	</div>
	<div class="team-member">
		<img src="images/nadun.jpg">
		<h3>
			Nadun Vihanga
		</h3>
		<p>Photographer</p>
		<p><b>Years of experience</b>
    	<br>
    	5
    	<br>
    	<b>I specialize in</b>
    	<br>
    	Large event photography such as weddings, business events, birthday parties, portraits, food and still life, animals,advertising photography video
    	<br>
    	<b>I speak</b>
    	<br>
    	English, Sinhala
    	<br>
    	<b>Pricing Information</b>
    	<br>
    	Personal photo shoots starting at <b>Rs.5,000</b> per session
    	<br>
    	Commercial photo shoots starting at <b>Rs.8,000</b> per day
    	<br>
    	Event photoshoots starting at <b>Rs.1,000</b> per hour
    	

    </p>
    <a href="#"><button class="gallery">See Gallery</button></a>
    <a href="payment.php"><button class="Add">Add+</button></a>					
	</div>
</div>

</body>
</html>