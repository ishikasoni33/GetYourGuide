<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetYourGuide.com</title>
    <link rel="stylesheet" href="TRIP.css">
    <script src="https://kit.fontawesome.com/7dc4a59269.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav id="notes" class="navigation">
        <img src="images/logo.png" class="logo">
    <ul class="nav-links">

            <li><a href="trip.html" class="active">Home</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">Contact</a></li>
            
        </ul>
        <a href="register.html" class="register-btn">Login </a>
        <i class="fa-solid fa-bars" onclick="togglebtn()"></i>
        </nav>
        <div class="details">
            <div class="title">
                <h1>Hotel Shyam New delhi </h1>
                <div class="row">
                    <div>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                        <span>245 Reviews</span>
                    </div>
                    <div>
                        <p>location:Lucknow,gomtinagar,uttar pradesh</p>
                    </div>
                </div>
            </div>
            <div class="gallary">
                <div class="gallary-img-1"><img src="INSIDE VIEW/shyama1.jpeg"></div>
                <div><img src="INSIDE VIEW/shyama2.jpeg"></div>
                <div><img src="INSIDE VIEW/shyama3.jpeg"></div>
                <div><img src="INSIDE VIEW/shyama1.jpeg"></div>
                <div><img src="Manali/Dshyam.jpg"></div>
            </div>

        <div class="small-details">
          <h2>entire hotel room with full maintinance</h2>  
            <p>2 Guest, Double bed, 1 Bathroom, AC</p>
            <h4>Rs 1500/day</h4>
            </div>
            <hr class="line">
            <form class="checkform">
                <div>
                    <lable>Checkin</lable>
                    <input type="text" placeholder="Add data">
                </div>
                <div>
                    <lable>Checkout</lable>
                    <input type="text" placeholder="Add data">
                </div>
                <div class="guestfield">
                    <lable>Guest</lable>
                    <input type="text" placeholder="2 Guest">
                </div>
                <button type="submit">Check Availability</button>
            </form>

            <ul class="detailslist">
            <li><i class="fa-solid fa-house"></i>Entier Hotel
                <span>you will stay peacefully</span>
            </li>
            <li><i class="fa-solid fa-paintbrush"></i> Enhanced clean
                <span>proper clean with fresh things</span>
            </li>
            <li><i class="fa-solid fa-location-dot"></i>Great loacation
                <span>90% of recent guest gave location a 5 star rating.</span>
            </li>
            <li><i class="fa-solid fa-heart"></i>Great Checkin Experience
                <span>Recent guest gave the check-in process good rating</span>
            </li>
           </ul>
        </div>
        <div class="footer">
            <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
            <hr>
            <p>copyright @ GetYourGuide.</p>
        </div>
        </div>
    <script>
    
            var notes=document.getElementById("notes");
            function togglebtn(){
             notes.classList.toggle("hidemenu");
            }
    </script>
     
</body>
</html>