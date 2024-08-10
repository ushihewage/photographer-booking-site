<!-- Nav Bar -->
<?php include 'stickyNav.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
	<style type="text/css">
		
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
*
{
	margin: 0;
	padding: 0;
	
}
.topic
{
	font-family: Roboto;
	text-align: center;
	color: #fff;
	margin-top: 40px;


}
h2
{
	font-weight: bold;
	
	font-size: 40px;
}
p{
	font-size: 20px;
	line-height: 30px;
}
body
{
	background-image: url("images/bgcam2.jpg");
	background-size: 280%;
	background-repeat: no-repeat;
	background-attachment: fixed;
    background-size: 100% 100%;

}
input[type=text]
{
	width: 80%;
	padding: 12px 20px;
	margin: 8px 0;
	margin-right: 15px;
	
}
input[type=email]
{
	width: 80%;
	padding: 12px 20px;
	margin: 8px 0;
	margin-right: 15px;
	
}
input[type=date]
{
	width: 80%;
	padding: 15px 30px;
	margin: 8px 0;
	margin-right: 15px;
	
}
textarea
{
	width: 80%;
}
div.main
{
	width: 500px;
	margin: 100px auto 0px auto;
	align-content: center;
	text-decoration: none;


}
h3
{
	text-align: center;
	padding: 20px;
	font-family: sans-serif;
}
div.register
{
	background-color: rgba(0, 0, 0, 0.5);

	font-size: 18px;
	border-radius: 10px;
	border: 1px solid rgba(255, 255, 255, 0.3);
	box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
	color: #fff;
}
form#register
{
	margin: 40px;
}
label
{
	font-family: sans-serif;
	font-size: 18px;
	font-style: italic;
}

input#name{
	
	padding: 12px 20px;
	border: 1px solid #ddd;
	border-radius: 3px;
	outline: 0;
	margin: 8px 0;
	background-color: #fff;
	box-shadow:inset 1px 1px 5px rgba(0, 0, 0, 0.3);
	display: inline-block;

}
.button
{
	width: 200px;
	padding: 10px;
	font-size: 16px;
	font-family: sans-serif;
	font-weight: 600;
	border: solid;
	border-color:  #002080;
	border-radius: 8px;
	background-color: #b3c6ff;
	cursor: pointer;
	border: 1px solid rgba(0, 0, 0, 0.3);
	margin-bottom: 20px;
	margin-left: 70px;
	text-align: center;


}
label,h2
{
	text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
}
.button:hover
{
	background-color: #fff ;
	color:  #001233;
	border: solid;
	border-width: 2px;
	border-color:  #002080;


}
	</style>
	
   <script>
		// JavaScript for form validation
		{
			function validateForm() {
			var photographer = document.getElementById('photographer');
			var videographer = document.getElementById('videographer');
			var other = document.getElementById('other');
			var place = document.getElementById('place');
			var email = document.getElementById('email');
			var date = document.getElementById('date');
			var person = document.getElementById('person');
			var tel = document.getElementById('contact');
			var explain = document.getElementById('explain');

			if (!photographer.checked && !videographer.checked && !other.checked) {
				alert('Please select at least one talent.');
				return false;
			}

			if (place.value === '') {
				alert('Please enter the project location.');
				return false;
			}

			if (email.value === '') {
				alert('Please enter a valid email address.');
				return false;
			}

			if (date.value === '') {
				alert('Please select a date.');
				return false;
			}

			if (person.value === '') {
				alert('Please enter the contact person.');
				return false;
			}

			if (tel.value === '') {
				alert('Please enter the contact number.');
				return false;
			}

			// Validate contact number format
			var contactFormat = /^\+?\d{1,3}[-.\s]?\(?\d{1,3}\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}$/;
			if (!contactFormat.test(tel.value)) {
				alert('Please enter a valid contact number.');
				return false;
			}

			if (explain.value === '') {
				alert('Please describe the project.');
				return false;
			}

			// If all validations pass, you can redirect to the thanks.php page.
			
			// window.location.href = 'thanks.php';

			return false; 
		}
		}
		
	</script> 

            
        
       
</head>
<body>
	<div class="topic">
		<h2>Let's Get Started</h2>
		<p><strong>Fill out the form below to get started or ask questions. We will contact you within 24 hours.</strong></p>
	</div>
	<div class="main">
		<div class="register">
			<h3>Project Details</h3>
			<form id="register" method="POST" name="form_1" onsubmit="return validateForm()" action="connect_01.php">
				<label>What kind of talent(s) you are looking for?</label>
				<br><br>
				<input type="checkbox" id="photographer" name="talent" value="photographer">
                <label for="photographer"> Photographer</label><br><br>
                <input type="checkbox" id="videographer" name="talent" value="videographer" >
                <label for="videographer"> Videographer</label><br><br>
                <input type="checkbox" id="other" name="talent" value="other" >
                <label for="other"> Other</label><br><br>
                <label>Where will your project take place?</label>
				<br><br>
				<input type="text" name="place" id="place" placeholder="Enter the place that your project takes place"><br><br>
				<label>E-mail Address</label>
				<br><br>
				<input type="email" name="email" id="email" placeholder="Enter a valid e-mail address" >
				<br><br>
				<label for="date">Date</label>
				<br><br>
                <input type="date" id="date" name="date" >
                <br><br>
                <label>Contact Person</label>
				<br><br>
				<input type="text" name="person" id="person" placeholder="Oshadi Udgandhi"><br><br>
				<label>Contact Number</label>
				<br><br>
				<input type="text" name="tel" id="contact" placeholder="+98 76 004 6712" ><br><br>

                <label>Discribe the project</label>
				<br><br>

                <textarea id="explain" name="explain" rows="4" cols="50"></textarea><br><br>

                <div class="Sub-button">
                	<a href="#" style="text-decoration: none;">
                		 
                		<button class="button" name="submit">Submit</button>
                	</a>


                </div>



			
		</div>
	</div>
    <!---Footer--->
  <?php include 'footer.php';?>
</body>
</html>