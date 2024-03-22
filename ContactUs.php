<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<style>
/* Basic styles */
body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

.header h1 {
  margin: 0;
}

.navbar {
  overflow: hidden;
}

.navbar a {
  float: left;
  display: block;
  color: #fff;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: #ddd;
  color: #333;
}

.container {
  padding: 20px;
}

.form-container {
  max-width: 500px;
  margin: auto;
}

.form-group {
  margin-bottom: 20px;
}

.input-field {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.textarea-field {
  height: 150px;
}

.submit-btn {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

/* Animation */
@keyframes slideIn {
  from {
    transform: translateY(-20px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.form-container {
  animation: slideIn 1s ease-out;
}

.footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px 0;
}

/* Responsive styles */
@media screen and (max-width: 768px) {
  .form-container {
    max-width: 90%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Contact Us</h1>
  <div class="navbar">
    <a href="trip.php">Home</a>
    <a href="#">Destinations</a>
    <a href="#">Tours</a>
    <a href="Aboutus.php">About US</a>
  </div>
</div>

<div class="container">
  <div class="form-container">
    <h2>Send us a message</h2>
    <form action="connect.php" method="POST">
      <div class="form-group">
        <input type="text" class="input-field" id="Your Name" name="your_name" placeholder="YOUR NAME">
      </div>
      <div class="form-group">
        <input type="email" class="input-field" id="Your Email" name="email" placeholder="EMAIL">
      </div>
      <div class="form-group">
        <textarea class="input-field textarea-field" id="Your Message" name="message" placeholder="YOUR MESSAGE">
        </textarea>
      </div>
      <button type="submit" class="submit-btn">Send Message</button>
    </form>
  </div>
</div>

<div class="footer">
  <p>&copy; 2024 Getyourguide Website. All rights reserved.</p>
</div>

</body>
</html>
