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
            <li><a href="Mathura.php">Best Stays</a></li>
            <li><a href="ContactUs.php">Contact</a></li>
        </ul>
    </div>
</header>

<div class="container">
    <div class="slide">
        <!-- Your slide items here -->
        <div class="item" style="background-image: url(images/MT3.jpg);">
            <div class="content">
                <div class="name">Mathura Vrindavan</div>
                <div class="des"> Prem Mandir (The Temple of Divine Love) is a Hindu temple in Vrindavan</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/MT8.jpg);">
            <div class="content">
                <div class="name"> Shri RadhaRani Mandir</div>
                <div class="des">Shri Radha Rani Temple, is a historical Hindu temple, located in Barsana in Mathura district, Uttar Pradesh, India</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/MT5.jpg);">
            <div class="content">
                <div class="name">Mathura Vrindavan</div>
                <div class="des">Govardhan Parvat, Govardhana Hill also called Mount Govardhana and Giriraj,</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/MT6.jpg);">
            <div class="content">
                <div class="name">Mathura Vrindavan</div>
                <div class="des">Iskon Temple,Located at Raman Reti in Vrindavan</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/MT7.png);">
            <div class="content">
                <div class="name">Mathura Vrindavan</div>
                <div class="des">Vaishno Devi Mandir,beautiful temple located in vrindavan.</div>
                <button>See More</button>
            </div>
        </div>
        <div class="item" style="background-image: url(images/MT10.jpg);">
            <div class="content">
                <div class="name">Radha Kund</div>
                <div class="des"> Krishna bathed in this kund (temple tank) to please Radha</div>
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
