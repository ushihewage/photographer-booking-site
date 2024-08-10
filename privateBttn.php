<!-- Nav Bar -->
<?php include 'stickyNav.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Private Photography Category</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
body {
  font-family: Open Sans;
  color: white;
  height: 1000px;

}
    .intro-para
{
  margin: 0;
  padding: 10px;
  height: 25%;
  font-family: sans-serif;
  color: black;
  text-align: center;
  line-height: 2;
  z-index: 1;
}
.intro-para p
{
  font-size: 18px;
}


.split {
   height: 700px;
  width: 33.33%;
  position: absolute;
  z-index: 2;
  top: 2;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color:  black;

}

.right {
  right: 0;
  background-color:  black;

}
.center
{
	left: 33.33%;
	right: 33.33%;
	background-color:  	 #1a1a1a;

}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
}
.centered h2
{
	text-align: center;
}
.centered p
{
	text-align: left;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}
/*--------------------------------------------------*/
.form01
{
/*  box-sizing: border-box;*/
    font-family: sans-serif;
    min-height: 120vh;
  
    display: inline-flex;
  align-items: center;
    justify-content: center;
    background-image: url('images/cam3.jpg');
    background-size: 100% 100%;

    width: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;

}
.respos-reg
  {

    position: relative;
    max-width: 900px;
    width: 150%;
    border-radius: 12px;
    padding: 30px;
    margin: 0 17px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  }
  .respos-reg header
  {
    font-size: 20px;
    font-weight: 600;
    color: #333;
  }
  .respos-reg header::before
  {
    content: "";
    position: absolute;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
    left: 0;
  }
  .respos-reg form
  {
    position: relative;
    margin-top: 50px;
    min-height: 490px;
    background-color: #fff;

  }
  .respos-reg form .details
  {
    margin-top: 30px;

  }
  .respos-reg form .title01
  {
    display: block;
    margin-bottom: 8px;

    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
  }
  .respos-reg form .fields
  {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  form .fields .input-field
  {
    display: flex;
    width: calc(100% 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
  }
  .input-field label
  {
    font-size: 15px;
    font-weight: 500;
    color: #2e2e2e;
  }
  .input-field input{
    outline: none;
    font-size: 14px;
    color: #333;
    font-weight: 400;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
    width: 300px;
  }
  .input-field input:is(focus, :valid)
  {
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
  }
  .input-field input[type="date"]
  {
    color: #707070;

  }
  .input-field input[type="date"]:valid
  {
    color: #333;
  }
  #type-Shoot
  {
    outline: none;
    font-size: 14px;
    color: #333;
    font-weight: 400;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 7px 0;
    width: 330px;
  }
 
  #alternative
  {
    outline: none;
    font-size: 14px;
    color: #333;
    font-weight: 400;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
    width: 330px;
  }
  .Submit02
  {
    outline: none;
    font-size: 14px;
    color: #333;
    font-weight: 400;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    align-items: center;
    height: 42px;
/*    margin: 8px 0;*/
    margin-left: 20vw ;
    cursor: pointer;
    width: 150px;
  }
  .Submit02:hover
        {
          background-color: #000033;
          color: #fff;
        }
</style>
<script>
  // Function to validate the form
  function validateForm() {
    var name = document.forms["registrationForm"]["name"].value;
    var email = document.forms["registrationForm"]["email"].value;
    var mobile = document.forms["registrationForm"]["mobile"].value;
    var wApp = document.forms["registrationForm"]["wApp"].value;
    var location = document.forms["registrationForm"]["location"].value;
    var shoot = document.forms["registrationForm"]["shoot"].value;
    var date = document.forms["registrationForm"]["date"].value;

    // Check if any field is empty
    if (name == "" || email == "" || mobile == "" || wApp == "" || location == "" || shoot == "" || date == "") {
      alert("Please fill out all fields");
      return false;
    }

    // Validate email format
    var email_R = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(email_R)) {
      alert("Please enter a valid email address");
      return false;
    }

    // Validate mobile number format
    var mobile_R = /^\d{10}$/;
    if (!mobile.match(mobile_R)) {
      alert("Please enter a valid 10-digit mobile number");
      return false;
    }

    // Validate WhatsApp number format
    var wApp_R = /^\d{10}$/;
    if (!wApp.match(wApp_R)) {
      alert("Please enter a valid 10-digit WhatsApp number");
      return false;
    }
    

        return false;
  }
</script>
</head>
<body>
  <div class="intro-para">
    <h1>
      Find Your Photographer
    </h1>
    <p>
      Get in touch with one of our trusted representative photographers. These agents serves as both talented photographers as well as local experts who can assist in meet your needs.
      <br>
      If they are not available on your preffered  date, you can book another photographer. All photographer-agents are hand-selected to ensure you receive professional photos and high-end service.
    </p>
  </div>
	<div class="split left">
  <div class="centered">
  	<img src="images/nadun2.jpg" >
    <h2>Nadun Vihanga</h2>
    
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
  </div>
</div>
<div class="split center">
  <div class="centered">
  	<img src="images/sudarshana2.jpg" >
    <h2>Sudarshana Madusanka</h2>
    
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
  </div>
</div>


<div class="split right">
  <div class="centered">
    <img src="images/tharindu.jpg">
    <h2>Tharindu Perera</h2>
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
  </div>
</div>
<!-- registration form -->
<div class="respos-reg">
  <header>
    Book your personal photographer
  </header>
  
    
  
  <form action="#">
    <div class="details">
      <span class="title01">
        Fill out the form below and an agent will get in touch with you to discuss your expectation and further details.
      </span>
      
    </div>
    
  </form>
  
</div>
<div class="form01">

    <!-- registration form -->
<div class="respos-reg">
  <header>
    Book your personal photographer
  </header>
  
    
  
  <form name= "registrationForm" action="connect_03.php" method="POST" onsubmit="return validateForm()">
    <div class="details">
      <span class="title01">
        Fill out the form below and an agent will get in touch with you to discuss your expectation and further details.
        <br>
        
      </span>
      <div class="fields">
        <div class="input-field">
          <label>Your Full Name:</label><br>
          <input type="text" placeholder="Enter your name"name="y_name">
          
        </div>
        <div class="input-field">
          <label>E-Mail:</label><br>
          <input type="E-Mail" placeholder="Enter email address"name="email">
          
        </div>
        <div class="input-field">
          <label>Contact No:</label><br>
          <input type="tel" placeholder="Mobile number"name="mobile">
          
        </div>
        
        <div class="input-field">
          <label>Whatsapp:</label><br>
          <input type="tel" placeholder="Whatsapp number"name="wApp">
          
        </div>
        <div class="input-field">
          <label>Confirm Location(city):</label><br>
          <input type="text" placeholder="location"name="location">
          
        </div>
        <div class="input-field">
          <label>Select the type of photoshoot</label><br>
          <select id="type-Shoot" name="shoot" >
            <option value="portrait" >Portrait photoshoot</option>
            <option value="couple">Couple photoshoot</option>
            <option value="lifestyle">LifeStyle photshoot</option>
            <option value="fashion">Fashion photoshoot</option>
          
          </select>
          
        </div>
         <div class="input-field">
          <label>Preffered date for photoshoot:</label><br>
          <input type="date" placeholder="date"name="date" >
          
        </div>
        <div class="input-field">
          <label>If this date is not available are there<br> any alternative dates that would be ok?</label><br>
          <select id="alternative" name="alternative" >
            <option value="yes">Yes</option>
            <option value="no">No </option>
          
          
          </select>
          
        </div>
      </div>
<br>
      <a href="thanks.php" ><button class="Submit02">Submit</button>
      </a>
    </div>
    
  </form>
  
</div>
</div>
  <!---Footer--->
  <?php include 'footer.php';?>
</body>
</html>