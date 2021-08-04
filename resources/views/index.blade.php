<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
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
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li class="signin"><a href="#"><i class="far fa-user-circle"></i>Sign In</a></li>
                <li><a href="#" class="purpbg">Join Now</a></li>
            </ul>
        </div>
    </header>

    <section class="heroimg">
        <h1>Your Adventure Awaits</h1>
        <h2>Risk Free booking at only $150 down!</h2>
        <div class="seachcontainer">
            <div class="searchinputs">
                <input type="text" id="destination" name="destination" placeholder="Destination"><input type="date" value="Check In"><input type="date" value="Check Out"><input type="number" id="number" name="number" placeholder="Number of Travelers"><button type="submit" value="Submit">Search</button>
            </div>
        </div>
    </section>

    <section class="tritours">
        <h1>Select Tours on Sale Now Through August!</h1>
        <h3>Save up to $365 for tours in 2021 and 2022</h3></br>
        <h3>Choose our carefully selected and crafted tours made for the traveler like you!</h3>

        <div class="tritourscontainer">
            <div class="tours">
                <div class="toursimgframe"></div><p>Proin aptent pellentesque accumsan scelerisque id ligula etiam elementum ante urna fringilla porttitor faucibus quisque est suscipit leo semper volutpat.</p>
            </div>
            <div class="tours">
                <div class="toursimgframe"></div><p>Proin aptent pellentesque accumsan scelerisque id ligula etiam elementum ante urna fringilla porttitor faucibus quisque est suscipit leo semper volutpat.</p>
            </div>
            <div class="tours">
                <div class="toursimgframe"></div><p>Proin aptent pellentesque accumsan scelerisque id ligula etiam elementum ante urna fringilla porttitor faucibus quisque est suscipit leo semper volutpat.</p>
            </div>
        </div>
    </section>


    <section class="tritoursblurb">
        <p>Orci per hac etiam dictum. Torquent turpis cubilia massa cras ullamcorper sapien lacus blandit sodales posuere vulputate dictumst varius massa adipiscing viverra dapibus mattis. Vitae vestibulum hymenaeos torquent venenatis curabitur.</p>

        <button type="button">Sign-up for a Tour</button>
    </section>

    <section class="sixtours">
        <div class="tour-container">
            <div class="tour-left">
                <div class="destination-left">
                    <h3>New York</h3>
                    <img class="item" src="{{asset('img/newyork.png')}}" width="325px" height="175px" alt="">
                </div>
                <div class="destination-left">
                    <h3>Italy</h3>
                    <img class="item" src="{{asset('img/italy.png')}}" width="325px" height="175px" alt="">
                </div>
                <div class="destination-left">
                    <h3>China</h3>
                    <img class="item" src="{{asset('img/china.png')}}" width="325px" height="175px" alt="">
                </div>
            </div>
            <div class="tour-right">
                <div class="destination-right">
                    <h3>Caribbean</h3>
                    <img src="{{asset('img/caribbean.png')}}" alt="">
                </div>
                <div class="destination-right">
                    <h3>Africa</h3>
                    <img src="{{asset('img/africa.png')}}" alt="">
                </div>
                <div class="destination-right">
                    <h3>Additonal Tours</h3>
                    <img class="item" src="{{asset('img/world map.png')}}" width="325px" height="175px" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="whybook">
        <h1>Why Book with Us?</h1>
        <div class="wblistcontainer">
            <div class="wblistleft">
                <ul>
                <li><button type="button">24/7 Customer Service Team</button></li>
                <li><button type="button">Solo Travel Tours</button></li>
                <li><button type="button">Curated Tours Tailored for You</button></li>
                </ul>
            </div>
            <div class="wblistright">
                <ul>
                <li><button type="button">Carefully Selected Local Tour Guides</button></li>
                <li><button type="button">Airfare and Transportation</button></li>
                <li><button type="button">Four and Five Star Hotels</button></li>
                </ul>
            </div>
        </div>

        <h3>Whether solo, group or private, Touryst is here to tailor your tours based on your interests.</h3></br>
        <button type="button">Sign Up For A Tour</button>
    </section>

    <section class="tourtypes">
        <div class="tourtypes-container">
            <div class="tourselection">
                <h3>Solo Tours</h3>
                <img src="{{asset('img/soloT.png')}}" alt=""><p>Meet like-minded travelers, make memories and life-long friends!</p>    
            </div>
            <div class="tourselection">
                <h3>Group Tours</h3>
                <img src="{{asset('img/groupT.png')}}" alt=""><p>Explore the world on your own!</p>    
            </div>
            <div class="tourselection">
                <h3>Private Tours</h3>
                <img src="{{asset('img/privateT.png')}}" alt=""><p>Bring your friends and family along and make it a trip remember!</p>    
            </div>
        </div>
         
    </section>

    <section class="socialproof">
        <h3>Social Testimonial</h1>
        <div class="review"> 
            <img class="image" src="https://via.placeholder.com/100" alt="">
            <p>What a mind-blowing trip it was! I shall always keep the wonderful experiences close to my heart. <br>
            I have been on a few guided tours before with other companies and we can honesly say this has been the best. </p>
        </div>    
    </section>
    
    <section class="closingstatement">
        <h3>Closing Statement</h3>     
    </section>

    <section class="traveltype">
        <h3>Travel Type</h3>
        <button>Sign-Up for a Tour</button>
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

    <section class="companyInfo">
        <p>This is the first year for Touryst and we're very happy with providing all our curated and specially designed tours for our special travelers!</p><button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fas fa-chevron-up"></i></br>Top</button>
    </section>

    <section class="prefooter">
        <div class="footerleft">
            <ul class="footerlinks">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>

            <ul class="socialmediaicons">
                <li><i class="fab fa-twitter fa-2x"></i></li>
                <li><i class="fab fa-facebook-f fa-2x"></i></li>
                <li><i class="fab fa-instagram fa-2x"></i></li>
            </ul>
        </div>

        <div class="newsletter">
            <h1>Be in the know on all travel deals and news</h1>
            <div class="newslettercontainer">
                <input type="email" placeholder="Email Address: "><button type="submit">Sign Up</button>
            </div>
        </div>
    </section>

    <footer>
        <div class="footertxtcontainer">
            <div class="footertxt">
                <h2>Experience the Adventure that Awaits you!w</h2></br>
                <p> &#169; 2021 Toursyt | All Rights Reserved </br>
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
</script>
</html> 