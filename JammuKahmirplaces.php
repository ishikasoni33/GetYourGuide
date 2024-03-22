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
            <li><a href="JammuKashmir.php">Best Stays</a></li>
            <li><a href="ContactUs.php">Contact</a></li>
        </ul>
    </div>
</header>

<div class="container">
    <div class="slide">
        <!-- Your slide items here -->
        <div class="item" style="background-image: url(images/k10.jpg);">
            <div class="content">
                <div class="name">Jammu&Kashmir</div>
                <div class="des">Sonamarg,is a stirring destination known for its stunning natural beauty and witching geographie</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/K1.jpg);">
            <div class="content">
                <div class="name">Jammu&Kashmir</div>
                <div class="des">Pahalgam,It is a popular tourist destination and hill station </div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/K2.jpg);">
            <div class="content">
                <div class="name">Jammu&Kashmir</div>
                <div class="des">Green Hill,best destination in jammu kashmir</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/k3.jpg);">
            <div class="content">
                <div class="name">Jammu&Kashmir</div>
                <div class="des">Indira Gandhi Tulip Garden,beauty of flowers</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/k5.jpg);">
            <div class="content">
                <div class="name">Jammu&Kashmir</div>
                <div class="des">Dal Lake,It is an urban lake, the second largest lake in Jammu and Kashmir</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/k8.jpg);">
            <div class="content">
                <div class="name">Jammu&Kashmir</div>
                <div class="des">Ogden Mountain hill,Experience best snow fall</div>
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
