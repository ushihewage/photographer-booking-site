<?php include 'stickyNav.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BookingAPhotograper</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="3styles.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

	
</head>
<body>

<!------------------------------------------------------------------------------------------------------------>
<!----Slider---->
<div id="slider">
  <div id="headerSlider" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner1.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>LOOKING FOR A BEST PHOTOGRAPHER</h5>
        <h3>Find and book professional photographers around the country</h3>
        <p><h4><span></span>Is your shoot for business or personal?</h4></p>
                <!----buttons---->
  <div class="banner-btn">
    <a href="formPage.php"><span ></span>Business</a>
    <a href="privateBttn.php"><span ></span>Personal</a>
  </div>
      </div>

    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>ONLY THE BEST PHOTOGRAPHERS</h5>
        <h3>We personally hand-pick photographers whose style, experience and expertise provide an excellent match for our clients, regardless of the type of photography required.</h3>
         <p><h4><span></span>Is your shoot for business or personal?</h4></p>
<!------------------------------------------------------------------------------------------------------------>
                <!----buttons in slider---->
  <div class="banner-btn">
    <a href="#"><span ></span>Business</a>
    <a href="#"><span ></span>Personal</a>
  </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner4.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h5>CONNECTING YOU TO PHOTOGRAPHERS AROUND THE COUNTRY</h5>
        <h3>Add a professional value to your photographs</h3>
         <p><h4><span></span>Is your shoot for business or personal?</h4></p>
                <!----buttons---->
  <div class="banner-btn">
    <a href="#"><span ></span>Business</a>
    <a href="#"><span ></span>Personal</a>
  </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#headerSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#headerSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>


</div>
	
	
</div>
<!------------------------------------------------------------------------------------------------------------>
<!---discription01--->
<div class="discriptionMaking">
<div class="discription">
  
    <h2>Giving you a personal experienced photographer</h2>
  <div class="mainDisc">
 
  <div class="discp">
      
      <h3>Chat before the shoot</h3>
      <p>We put you in direct contact with your photographer.Because of that you can have a helpful coversation before the shoot. Discuss ideas, define your vision, and find the preparation.</p>
  </div>

  <div class="discp">
      
      <h3>No bulk editing</h3>
      <p >On-demand sites often outsource editing and post-production. But here our photographers that you book with us, works with you from the concept to last stage. You receive photos that reflect their signature styles.</p>
    </div>

    <div class="discp">
      
      <h3>No surprises</h3>
      <p >Know your photographer ahead of time. We offer only professional photographers. Do not get caught off-guard by amatures.</p>
    </div>
    </div>
    </div>
</div>

<!------------------------------------------------------------------------------------------------------------>
<!---discription02--->
<div class="discr">
<?php include 'discript02.php';?>
</div>
<!------------------------------------------------------------------------------------------------------------>
 <!---discription03--->
<div class="dicript-03">
  <div class="heading-D">
    <h1>Connecting you to professional photographers aroud the world</h1>
    <p>We personally hand-pick photographers whose style, experience and expertise provide an execelent match for our clients, regardless of the type of photography required.<br>
    Do you need an event or real estate photopgrapher? A lifestyle photographer? A lifestyle or fashion photographer? We have trusted photographer agents around the country.  </p>
  </div>
</div>
<!------------------------------------------------------------------------------------------------------------>
 <!---Gallery--->
 <?php include 'gallery.php';?>
 <!------------------------------------------------------------------------------------------------------------>
 <!---Testimonials--->
  <?php include 'test.php';?>
  <!------------------------------------------------------------------------------------------------------------>
 <!---Footer--->
  <?php include 'footer.php';?>

</body>
</html>