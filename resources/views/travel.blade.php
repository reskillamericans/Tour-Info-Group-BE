<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/travelpage.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Touryst</title>
        <link rel="shortcut icon" type="image/jpg" href=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    </head>

<body>
    <header class="header">
        <div class="menu">
            <a href="#"><img src="{{asset('img/Group 186.png')}}" alt="Touryst Logo"></a>
            <ul class="right">
                <li><a href="/index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="/contactus.html">Contact</a></li>
                <li class="signin"><a href="#"><i class="far fa-user-circle"></i>Sign In</a></li>
                <li><a href="/signup.html" class="purpbg">Join Now</a></li>
            </ul>
        </div>
    </header>

    <hr>
    
    <section class="topimg">
        <div class="first-selection">
            <img class="item" src="{{asset('img/new-year-travel 1@2x.png')}}" alt="new-year-travel">
            <p>Explore the world by air, land or sea. <br>We have many options available to suit your needs</p>
        </div>
    </section>

    <section class="companyInfo1">
        <p>select your next adventure!</p>
    </section>

    <section class="travelmid"> 
        <div class="middle-preference">
            <div class="middle-selection">
                <img class="item" src="{{asset('img/car travel image 1@2x.png')}}" height="300" width="250" alt="">
                <button type="button"> Explore</button>
            </div>
            <div class="middle-selection">
                <img class="item" src="{{asset('img/plane.png')}}" height="300" width="250" alt="">
                <button type="button"> Explore</button>
            </div>
            <div class="middle-selection">
                <img class="item" src="{{asset('img/ship.png')}}" height="300" width="250"alt="">
                <button type="button"> Explore</button>
            </div>
        </div>  
    </section>

    <section class="companyInfo2">
        <p>Check out some of our exciting Tours by interest</p>
    </section>
    
    <section class="traveltype">
        <div class="top-preference">
            <div class="top-selection">
                <h3>Food & Wines Tours</h3>
                <img src="{{asset('img/foodnwine.png')}}"  alt="">
            </div>
            <div class="top-selection">
                <h3>Adventure Tours</h3>
                <img src="{{asset('img/adventure.png')}}" alt="">
            </div>
            <div class="top-selection">
                <h3>National Park Tours</h3>
                <img src="{{asset('img/nationalpark.png')}}" alt="">
            </div>
        </div>
        <div class="bottom-preference">
            <div class="bottom-selection">
                <h3>Castle Tours</h3>
                <img src="{{asset('img/castle.png')}}" alt="">
            </div> 
            <button>View All Travel Types</button>
        </div>    
    </section>

    <section class="companyInfo3">
        <p>This is the first year for Touryst and we're very happy with providing all our curated and specially designed tours for our special travelers!</p>
    </section>

   

    <footer>
        <div class="footertxtcontainer">
            <div class="footertxt">
                <h2>Experience the Adventure that Awaits You!</h2></br>
                <p> 2021 Toursyt | All Rights Reserved </br>
                    Privacy Policy | Terms & Conditions</p>
            </div>
        </div>
    </footer>
</body>

<script>
    //Get the button:
mybutton = document.getElementById("topBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.documentElement.scrollTop > 850) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
