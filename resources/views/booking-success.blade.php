<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/successfullbooking.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Successful Booking</title>
  </head>

  <body>
    <header class="menucontainer">
      <div class="menu">
        <a href="#"><img src="{{asset('images/Group 186.png')}}" alt="Touryst Logo"></a>
        <ul class="right">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#" class="purpbg">Signed in as Karen Logan</a></li>
        </ul>
      </div>
    </header>
    
    <hr>

    <section class="upper-container">
      <div class="confetti">
        <img src="{{asset('images/confetti.png')}}" alt="">
        <h3>Congratulations!</h3>
        <p>You have successfully booked your tour.</p>
      </div>
    </section>

    <section class="mid-container">
      <div class="email">
        <h3>Dear Karen,</h3>
        <br>
        <p>Thank you for choosing to tour with Touryst. We look forward to welcome you on <strong>7/05/2021</strong> for <strong>Big Bear Lake Solo Tour.</strong> <br>
        We are committed to ensuring that you have an enjoyable experience. <br>
        <br>
        An email has been sent to <strong>karenlogan122@gmail.com</strong> with your tour information. <br>
        <br>
        Should you have any concern about your tour, please do no hesitate to <a id="contact" href="#">contact us</a> and we will make sure to assist you.
        </p>
      </div>           
    </section>

    <button>Go Home</button>

    <div class="bottom-container">

      <section class="prefooter">
        <div class="footerleft">
          <ul class="footerlinks">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>

          <ul class="socialmediaicons">
            <li><i class="fab fa-twitter fa-2x"></i></li>
            <li><i class="fab fa-facebook fa-2x"></i></li>
            <li><i class="fab fa-instagram fa-2x"></i></li>
          </ul>
        </div>

        <div class="newsletter">
            <h1>Be in the know on all travel deals and news</h1>
          <div class="newslettercontainer">
            <input type="email" placeholder="Email Address: "><button id="signup" type="submit">Sign Up</button>
          </div>
        </div>
        
      </section>


      <footer>
        <h2>Experience the Adventure that Awaits you!</h2></br>
        <p> &#169; 2021 Toursyt | All Rights Reserved </br>
        Privacy Policy | Terms & Conditions</p>
      </footer>

    </div>

  </body>
</html>