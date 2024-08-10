<!-- Nav Bar -->
<?php include 'stickyNav.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css  -->
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  background: linear-gradient(90deg, #404040 60%, #000 40.1%);
}

.container form{
  padding:20px;
  width:700px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #000;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background:    #000066;
}
    </style>


</head>
<body>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Your Name" id="fullName">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" id="email">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="home - street - locality" id="address">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="city" id="city">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="sri lanka" id="state">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456" id="zipCode">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Name on card" id="nameOnCard">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" id="cardNumber">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="month" id="expMonth">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="year" id="expYear">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123" id="cvv">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    
   <!---Footer--->
   
  <?php include 'footer.php';?>

   <script>
  // Function to validate the form
  function validateForm() {
    // Get form inputs
    var fullName = document.getElementById("fullName").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var zipCode = document.getElementById("zipCode").value;
    var nameOnCard = document.getElementById("nameOnCard").value;
    var cardNumber = document.getElementById("cardNumber").value;
    var expMonth = document.getElementById("expMonth").value;
    var expYear = document.getElementById("expYear").value;
    var cvv = document.getElementById("cvv").value;

    // Regular expressions for validation
    var nameRegex = /^[A-Za-z\s]+$/;
    var emailRegex = /^\S+@\S+\.\S+$/;
    var zipCodeRegex = /^\d{5}$/;
    var cardNumberRegex = /^\d{4}-\d{4}-\d{4}-\d{4}$/;
    var expMonthRegex = /^(0?[1-9]|1[0-2])$/;
    var expYearRegex = /^\d{4}$/;
    var cvvRegex = /^\d{3}$/;

    // Perform validation
    if (fullName.trim() === "") {
      alert("Please enter your full name.");
      return false;
    }

    if (!emailRegex.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }

    if (address.trim() === "") {
      alert("Please enter your address.");
      return false;
    }

    if (city.trim() === "") {
      alert("Please enter your city.");
      return false;
    }

    if (state.trim() === "") {
      alert("Please enter your state.");
      return false;
    }

    if (!zipCodeRegex.test(zipCode)) {
      alert("Please enter a valid ZIP code.");
      return false;
    }

    if (nameOnCard.trim() === "") {
      alert("Please enter the name on your card.");
      return false;
    }

    if (!cardNumberRegex.test(cardNumber)) {
      alert("Please enter a valid credit card number in the format: 1111-2222-3333-4444");
      return false;
    }

    if (!expMonthRegex.test(expMonth)) {
      alert("Please enter a valid expiration month (1-12).");
      return false;
    }

    if (!expYearRegex.test(expYear)) {
      alert("Please enter a valid expiration year (4 digits).");
      return false;
    }

    if (!cvvRegex.test(cvv)) {
      alert("Please enter a valid CVV (3 digits).");
      return false;
    }

    return true;
  }
</script>
</body>
</html>