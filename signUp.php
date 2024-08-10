
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign In / Up page</title>
	<!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

		* {
		    padding: 0px;
		    margin: 0px;
		    box-sizing: border-box;
		}

		:root {
		    --linear-grad: linear-gradient(to right, #141E30, #243B55);
		    --grad-clr1: #141E30;
		    --grad-clr2: #243B55;
		}

		body {
		    height: 100vh;
		    background: #f6f5f7;
		    display: grid;
		    place-content: center;
		    font-family: 'Poppins', sans-serif;
		}

		.container {
			position: relative;
			width: 850px;
			height: 500px;
			background-color: #fff;
			box-shadow: 25px 30px 55px #5557;
			border-radius: 13px ;
			overflow: hidden;
		}

		.form-container {
			position: absolute;
			width: 60%;
			height: 100%;
			padding: 0px;
			transition: all 0.6s ease-in-out;
		}

		.sign-up-container {
			opacity: 0;
			z-index: 1;
		}

		.sign-in-container {
			z-index: 2;
		}

		form {
			height: 100%;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			padding: 0px 50px ;
		}

		h1 {
			color: var(--grad-clr1);
		}

		.social-container {
			margin: 20px 0;
		}

		.social-container a {
			border: 1px solid #DDD;
			border-radius: 50%;
			display: inline-flex;
			justify-content: center;
			align-items: center;
			margin: 0px 5px;
			height: 40px;
			width: 40px;
		}

		span {
			font-size: 12px;
		}

		.infield {
			position: relative;
			margin: 8px 0px;
			width: 100%;
		}

		input {
			width: 100%;
			padding: 12px 8px;
			background-color: #f3f3f3;
			border: none;
			outline: none;
		}

		label {
			position: absolute;
			left: 50%;
			top: 100%;
			transform: translateX(-50%);
			width: 0%;
			height: 2px;
			background: var(--linear-grad);
			transition: 0.3s;
		}

		input:focus ~ label {
			width: 100%;
		}

		a {
			color: #333;
			font-size: 14px;
			text-decoration: none;
			margin: 15px 0px;
		}

		a.forgot {
			padding-bottom: 3px;
			border-bottom: 2px solid #EEE;
		}

		button {
			border-radius: 20px;
			border: 1px solid var(--grad-clr1);
			background: var(--grad-clr2);
			color: #FFF;
			font-size: 12px;
			font-weight: bold;
			padding: 12px 45px;
			letter-spacing: 1px;
			text-transform: uppercase;
		}

		.form-container button {
			margin-top: 17px;
			transition: 80ms ease-in;
		}

		.form-container button:hover {
			background: #fff;
			color: var(--grad-clr1);
		}

		.overlay-container {
			position: absolute;
			top: 0;
			left: 60%;
			width: 40%;
			height: 100%;
			overflow: hidden;
			transition: transform 0.6s ease-in-out;
			z-index: 9;
		}

		#overlayBtn {
			cursor: pointer;
			position: absolute;
			left: 50%;
			top: 304px;
			transform: translateX(-50%);
			width: 143.67px;
			height: 40px;
			border: 1px solid #FFF;
			background: transparent;
			border-radius: 20px ;
		}

		.overlay {
			position: relative;
			background: var(--linear-grad);
			color: #fff;
			left: -150%;
			height: 100%;
			width: 250%;
			transition: transform 0.6s ease-in-out;
		}

		.overlay-panel {
			position: absolute;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0px 40px;
			text-align: center;
			height: 100%;
			width: 340px;
			transition: 0.6s ease-in-out;
		}

		.overlay-left {
			right: 60%;
			transform: translateX(-12%);
		}

		.overlay-right {
			right: 0;
			transform: translateX(0%);
		}

		.overlay-panel h1 {
			color: #fff;
		}

		p {
			font-size: 14px;
			font-weight: 300;
			line-height: 20px;
			letter-spacing: 0.5px;
			margin: 25px 0px 35px;
		}

		.overlay-panel button {
			border:none;
			background-color:transparent;
		}

		.right-panel-active .overlay-container {
			transform: translateX(-150%);
		}

		.right-panel-active .overlay {
			transform: translateX(50%);
		}

		.right-panel-active .overlay-left {
			transform: translateX(25%);
		}

		.right-panel-active .overlay-right {
			transform: translateX(35%);
		}

		.right-panel-active .sign-in-container {
			transform: translateX(20%);
			opacity: 0;
		}

		.right-panel-active .sign-up-container {
			transform: translateX(66.7%);
			opacity: 1;
			z-index: 5;
			animation: show 0.6s;
		}

		@keyframes show {
			0%, 50% {
				opacity: 0;
				z-index: 1;
			}
			50.1%, 100% {
				opacity: 0;
				z-index: 5;
			}
		}

		.btnScaled {
			animation: scaleBtn 0.6s;
		}

		@keyframes scaleBtn {
			0% {
				width: 143.67px;
			}
			50% {
				width: 250px;
			}
			100% {
				width: 250px;
			}
		}

		
	</style>
	 <script>
        function validateSignUpForm() {
            // Retrieve the form elements
            var nameInput = document.querySelector('.sign-up-container input[type="text"]');
            var emailInput = document.querySelector('.sign-up-container input[type="email"]');
            var passwordInput = document.querySelector('.sign-up-container input[type="password"]');

            // Validate each input field
            if (nameInput.value.trim() === '') {
                alert('Please enter your name.');
                nameInput.focus();
                return false;
            }
            if (emailInput.value.trim() === '') {
                alert('Please enter your email.');
                emailInput.focus();
                return false;
            }
            if (!validateEmail(emailInput.value.trim())) {
                alert('Please enter a valid email address.');
                emailInput.focus();
                return false;
            }
            if (passwordInput.value.trim() === '') {
                alert('Please enter a password.');
                passwordInput.focus();
                return false;
            }
            if (passwordInput.value.trim().length < 8) {
                alert('Password must be at least 8 characters long.');
                passwordInput.focus();
                return false;
            }

            // If all validations pass, the form will be submitted
            window.location.href = 'thanksignUp.php';

        return false;

        // Add event listener to the form submit event
        document.getElementById('signUpForm').addEventListener('submit', validateSignUpForm);
        }
          function validateSignInForm() {
            // Retrieve the form elements
            var emailInput = document.querySelector('.sign-in-container input[type="email"]');
            var passwordInput = document.querySelector('.sign-in-container input[type="password"]');

            // Validate each input field
            if (emailInput.value.trim() === '') {
                alert('Please enter your email.');
                emailInput.focus();
                return false;
            }
            if (!validateEmail(emailInput.value.trim())) {
                alert('Please enter a valid email address.');
                emailInput.focus();
                return false;
            }
            if (passwordInput.value.trim() === '') {
                alert('Please enter a password.');
                passwordInput.focus();
                return false;
            }

            // If all validations pass, the form will be submitted
            return true;


        }

        function validateEmail(email) {
            // Regular expression pattern for email validation
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }

        
    </script>
</head>

<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="#" onsubmit="validateSignUpForm()">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your email for registration</span>
				<div class="infield">
					<input type="text" placeholder="Name" />
					
				</div>
				<div class="infield">
					<input type="email" placeholder="Email" name="email" />
				
				</div>
				<div class="infield">
					<input type="password" placeholder="Password" />
					
				</div>
				<div class="infield">
					
					<input type="password" placeholder="Confirm Password" />
				</div>
				<button>Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="#" onsubmit="validateSignInForm()">
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<div class="infield">
					<input type="email" placeholder="Email" name="email" />
					<label></label>
				</div>
				<div class="infield">
					<input type="password" placeholder="Password" />
					<label></label>
				</div>
				<a href="#" class="forgot">Forgot your password?</a>
				<a href="#" class="admin"><button class="admin_Login">Admin login</button></a>
				<button>Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add('right-panel-active');
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove('right-panel-active');
		});
	</script>
 

</body>
</html>
