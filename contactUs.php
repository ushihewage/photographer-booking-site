<!-- Nav Bar -->
<?php include 'stickyNav.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');

        *
        {
            margin: 0;
            padding: 0;

        }
        body
        {
            background-image: url('images/back6.jpg');
            font-size: 14px;
            font-family: Poppins, sans-serif;
            background-repeat: no-repeat;
            background-size: cover;


        }
        .container
        {
            width: 80%;
            margin: 50px auto;
        }
        .contact-box
        {
            background: #fff;
            display: flex;
        }
        .contact-left
        {
            flex-basis: 60%;
            padding: 40px 60px;
        }
        .contact-right
        {
            flex-basis: 40%;
            padding: 40px ;
            background: #3d3d5c;
            color: #fff;
        }
        h1
        {
            margin-bottom: 10px;
            color: whitesmoke;
        }
        .container p
        {
            margin-bottom: 40px;
            color: whitesmoke;

        }
        .input-row
        {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .input-row .input-group
        {
            flex-basis: 45%;
        }
        input
        {
            width: 100%;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            padding-bottom: 5px;
        }
        textarea
        {
            width: 100%;
            border: 1px solid #ccc;
            outline: none;
            padding: 10px;
            box-sizing: border-box;
        }
        label
        {
            margin-bottom: 6px;
            display: block;
            color: #000;

        }
        button
        {
            background: #1c00b5;
            width: 100px;
            border: none;
            outline: none;
            color: #fff;
            height: 35px;
            border-radius: 30px;
            margin-top: 20px;
            box-shadow: 0px 5px 15px 0px rgba(28, 0, 181, 0.3);
        }
        button:hover
        {
            color: whitesmoke;
            background-color: black;
        }
        .contact-left h3
        {
            font-weight: 600;
            margin-bottom: 30px;
        }
        .contact-right h3
        {
            font-weight: 600;
            margin-bottom: 30px;
        }
        tr td:first-child
        {
            padding-right: 20px;
        }
        tr td
        {
            padding-top: 20px;
        }

    </style>

    <script>
        // JavaScript for form validation
        {
            function validateForm() {
            
            var name = document.getElementById('name');
            var email = document.getElementById('mail');
            var contact = document.getElementById('contact');
            var subject = document.getElementById('subject');
            var message = document.getElementById('message');
            

           
            if (name.value === '') {
                alert('Please enter your name.');
                return false;
            }

            if (email.value === '') {
                alert('Please enter a valid email address.');
                return false;
            }

            if (contact.value === '') {
                alert('Please enter a contact number');
                return false;
            }

            if (subject.value === '') {
                alert('Please enter the subject for your message');
                return false;
            }

            if (message.value === '') {
                alert('Please write a message');
                return false;
            }

            // Validate contact number format
            var contactFormat = /^\+?\d{1,3}[-.\s]?\(?\d{1,3}\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}$/;
            if (!contactFormat.test(contact.value)) {
                alert('Please enter a valid contact number.');
                return false;
            }

           
        }
        }
        
    </script>
</head>
<body>
    <div class="container">
        <h1>Connect With Us</h1>
        <p>
            We would love to answer your questions.<br> Feel free to get in touch with us.
        </p>
        <div class="contact-box">
            <div class="contact-left">
            <h3>
                Send your message
            </h3>
            <form action="connect_02.php" method="POST" onsubmit="return validateForm()">
                <div class="input-row">
                    <div class="input-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" placeholder="Femeena">

                    </div>
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="mail" id="mail" placeholder="meena98@gmail.com">
                        
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label>Phone</label>
                        <input type="text" name="contact" id="contact" placeholder="011-4573422">
                        
                    </div>
                    <div class="input-group">
                        <label>Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="Price">
                        
                    </div>
                </div>
                <label>Message</label>
                <textarea rows="5" placeholder="Your message" name="message" id="message"></textarea>
                <button type="submit">Send</button>
             

            </form>
            
        </div>
        <div class="contact-right">
            <h3>Reach Us</h3>
            <table>
                <tr>
                    <td>Email</td>
                    <td>glamors98@gmail.com</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>+98 76 004 6712</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>122/D, Suhada Lane, Kaduwela Rd, Malabe</td>
                </tr>
            </table>
            
        </div>
        </div>
        
    </div>
    <!---Footer--->
  <?php include 'footer.php';?>
</body>
</html>