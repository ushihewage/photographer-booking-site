<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Glamors</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');
		body {
			margin: 0;
			padding: 0;
		}
		.sticky {
            position: fixed;
            top: 0;
            width: 100%;
            }

          .sticky + .content {
           padding-top: 60px;
           }
		#navbar {
			position: sticky;
			top: 0;
			background-color: #333;
			padding: 10px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			z-index: 9999;
		}
		.logo {
			font-family: Monoton;

			color: #fff;
			font-size: 24px;
			text-decoration: none;
			padding: 10px;
			font-style: italic;
			
		}
		#navbar ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			display: flex;
		}
		#navbar li {
			margin-left: 10px;
		}
		#navbar a {
			display: block;
			color: #fff;
			text-decoration: none;
			padding: 10px;
		}
		#navbar a:hover {
			background-color: #555;
		}
	
	</style>
</head>
<body>
	<div id="navbar">
		<a class="logo">GlaMors</a>
		<ul>
			<li><a href="photographers.php">HOME</a></li>
			<li><a href="team.php">PHOTOGRAPHERS</a></li>
			<li><a href="howItWorks.php">HOW IT WORKS</a></li>
			<li><a href="photographersLogin.php">BECOME A PHOTOGRAPHER</a></li>
			<li><a href="contactUs.php">CONTACT US</a></li>
			<li><a href="login.php"><img src="images/osh.png"></a></li>
			
		</ul>
	</div>
	<script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
    if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
    } else {
    navbar.classList.remove("sticky");
   }
}
</script>

</body>
</html>