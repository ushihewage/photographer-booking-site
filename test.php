<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.mySlides {display: none;
               
          }
/* Slideshow container */
.slideshow-container {
   
  font-family: Verdana, sans-serif;
  box-sizing: border-box;
  max-width: 1050px;
  position: relative;
  margin: auto;



 
}
.slideshow-container img {vertical-align: middle;
  border-radius: 12px;

}



/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: darkblue;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.9);
  color: white;
}

/* Caption text */
.text {
  color: #000;
  font-size: 17px;
  padding: 15px 15px;
  position: absolute;
  bottom: 20vh;
  width: 100%;
  text-align: center;
  line-height: 2;
}

/* Number text (1/3) */
.numbertext {
  color: #000;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: 0.2s ease;
}

.active, .dot:hover {
  background-color: #717171;
}



@keyframes fade {
 /* from {opacity: .4} 
  to {opacity: 1}*/
}

/* for small screens */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 3</div>
  <img src="images/white.jpg" style="width:100%">
  <div class="text">
    <h1>
      Testimonials
    </h1>
    <p>"Booking a photographer through this webpage was effective, easy and the experience was perfect. -you are very responsive and that is the great thing you offer. Photographer Sudarshana was great- very talented and he did a great job. I will definitely use your website for my next event."
      <br><br>
        <i>-Liyana</i></p>
  </div>
</div>

<div class="mySlides">
  <div class="numbertext">2 / 3</div>
  <img src="images/white.jpg" style="width:100%">
  <div class="text">
    <h1>
      Testimonials
    </h1>
    <p>"Had such a marvelous experience while working with photographer Tharindu through this website! I needed interesting, professional photos for my portfolio at a very short period.
    <br><br>
    He was really professional and friendly in communication, made a fantastic preparation before the photoshoot to confirm that the final outcomes meet the initial purpose. The photoshoot was just extraordinary; you can immediately feel that you are working with a professional and experienced photographer!"
      <br><br>
        <i>-Femeena</i></p>
  </div>
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img src="images/white.jpg" style="width:100%">
  <div class="text">
    <h1>
      Testimonials
    </h1>
    <p>"Both my husband and I had a very pleasant shoot with Nadun for our pre-wedding shoot, and we enjoyed the experience with booking with GlaMors.
      Definitely, I recommend this website for anyone who would like to find a local photographer in Sri Lanka. I'm sure you will find the best here."
      <br><br>
        <i>-Oshi Hewage</i></p>

  </div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>
