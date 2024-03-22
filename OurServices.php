<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(images/serviceback.jpg);
            background-size: cover;
            background-position: center;
            color: #fff !important;
        }
        .services {
            margin: 90px auto;
            text-align: center;
        }
        h1 {
            font-family: sans-serif;
            letter-spacing: 1px;
        }
        h1:after {
            content: '';
            background: white;
            display: block;
            width: 150px;
            height: 3px;
            margin: 10px auto;
        }
        .icon {
            color: white;
            font-size: 40px;
            margin: 20px auto;
            padding: 20px;
            height: 80px;
            width: 80px;
            border: 1px solid white;
            border-radius: 50%;
        }
        .col-md-3:hover {
            box-shadow: 5px 7px 9px -3px rgba(255,255,255,0.5);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">GetYourGuide</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="trip.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Aboutus.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallary.php">Gallary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ContactUs.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="services">
            <h1>Our Services</h1>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="icon">
                    <i class="fab fa-glide-g"></i>
                </div>
                <h3>Accommodation</h3>
                <p>Find comfortable and affordable places to stay during your travels.</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Activities</h3>
                <p>Experience thrilling activities tailored to your interests.</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="icon">
                    <i class="fas fa-car"></i>
                </div>
                <h3>Transportation</h3>
                <p>Get reliable transportation options to reach your desired locations.</p>
            </div>
        </div>
    </div>
    
