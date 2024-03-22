<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="places.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
       
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: left;
        }

        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .menu ul li {
            display: inline;
            margin-right: 20px;
        }

        .menu ul li a {
            color: #fff;
            text-decoration: none;
        }

        .container {
            margin-top: 40px; /* Adjust spacing */
          
        }
    </style>
</head>
<body> 

<header>
    <div class="menu">
        <ul>
            <li><a href="lucknowGuide.php">Best Guide</a></li>
            <li><a href="trip.php">Home</a></li>
            <li><a href="Aboutus.php">About Us</a></li>
            <li><a href="Manali.php">Best Stays</a></li>
            <li><a href="ContactUs.php">Contact</a></li>
        </ul>
    </div>
</header>

<div class="container">
    <div class="slide">
        <!-- Your slide items here -->
        <div class="item" style="background-image: url(images/M1.jpg);">
            <div class="content">
                <div class="name">Anjani Mahadev Temple</div>
                <div class="des">Famous religious Temple located in mounatins.</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/M2.jpg);">
            <div class="content">
                <div class="name">Manali Beas River</div>
                <div class="des">The Beas River also known as the Biás or Bias, is a river in north India.  </div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/M8.jpg);">
            <div class="content">
                <div class="name">Manali Solang Valley</div>
                <div class="des"> A paragliding trip or a trip to the top of a hill on the cable car should not be overlooked</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/M6.jpg);">
            <div class="content">
                <div class="name">Manali Jogini Waterfall</div>
                <div class="des">It is a short hike from Jogini Temple (there is a longer route via woods, from Vashishthh Temple)</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/M5.jpg);">
            <div class="content">
                <div class="name">Manali,Hadimba Devi Temple</div>
                <div class="des">It is a small temple located in a vast area surrounded by Deodar trees and others.</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/M7.jpg);">
            <div class="content">
                <div class="name">Manikaran Gurudwara,Kullu</div>
                <div class="des">Manikaran is located in the Parvati Valley on river Parvati, northeast of Bhuntar in the Kullu</div>
                <button>See More</button>
            </div>
        </div>

    </div>

    <div class="button">
        <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>

</div>
   

<script src="places.js"></script>
</body>
</html>
