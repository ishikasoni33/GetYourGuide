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
            <li><a href="lucknow.php">Best Stays</a></li>
            <li><a href="ContactUs.php">Contact</a></li>
        </ul>
    </div>
</header>

<div class="container">
    <div class="slide">
        <!-- Your slide items here -->
        <div class="item" style="background-image: url(images/L1.jpg);">
            <div class="content">
                <div class="name">Lucknow</div>
                <div class="des">Bhool Bhulaiya,best place with great experience</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/L2.jpg);">
            <div class="content">
                <div class="name">Lucknow</div>
                <div class="des">Chota Imambara,famous for historical things.</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/L3.jpg);">
            <div class="content">
                <div class="name">Lucknow</div>
                <div class="des">High Court,of lucknow Uttar Pradesh</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/L4.jpg);">
            <div class="content">
                <div class="name">Lucknow</div>
                <div class="des">Marine Drive ,beautiful pace for spending peaceful time.</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/L5.jpg);">
            <div class="content">
                <div class="name">Lucknow</div>
                <div class="des">Red Pull,of lucknow Uttar Pradesh</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/L6.jpg);">
            <div class="content">
                <div class="name">Lucknow</div>
                <div class="des">Roomi Gate,famous place for travel and best views.</div>
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
