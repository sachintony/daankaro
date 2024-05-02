<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <link rel="stylesheet" href="footer.css" />
    <script src="https://kit.fontawesome.com/bd32583c0c.js" crossorigin="anonymous"></script>
  <script src="./javascript/index.js" defer></script>
  <script src="./javascript/slide.js" defer></script>
<script src="./javascript/blrarea.js" defer></script>
<style>
  * {
  margin: 0;
  padding: 0;
  font-family: Arial;
  box-sizing: border-box;
}

.navbar {
  height: 80px;
  background-color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 24px;
  font-weight: bold;
}

.navlogo {
  height: 70px;
  width: 175px;
}
.logo {
  background-image: url('./images/logodaan.png');
  background-size: cover;
  height: 70px;
  width: 175px;
}

.nav-item {
  margin-left: 55px;
}

.nav-itemright {
  margin-left: auto;
}

.nav-item a {
  text-decoration: none;
  color: #000000;
  font-size: 1rem;
  position: relative;
  margin-right: 15px;
}

.login {
  color: #000000;
  font-size: 1rem;
  margin-left: 15px;
  margin-right: 50px;
  position: relative;
}

.nav-item a:hover {
  color: #ff9bd2;
}

.login:hover {
  color: #ff69b4; /* Pink color */
}

.nav-item a:hover::after {
  content: '';
  display: block;
  width: 100%;
  height: 2px;
  background-color: #ff69b4; /* Pink color */
  position: absolute;
  bottom: 0;
  left: 0;
}

.slideshow-container {
  max-width: 100%;
  overflow: hidden;
  margin: 0;
}

.mySlides {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 600px;
  position: relative;
  overflow: hidden;
}
/* Adjust arrow styles as needed */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 40px;
  width: auto;
  padding: 10px 20px;
  text-decoration: none;
  color: rgb(72, 72, 72);
  border: none;
  opacity: 0.8;
  transition: 0.6s ease;
}

.prev:hover,
.next:hover {
  opacity: 1;
}

.prev {
  left: 0;
}

.next {
  right: 0;
}

img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.textimg {
  position: relative;
  left: 15%;
}

.brh2 {
  position: relative;
  left: 40%;
  color: #b38499;
  font-size: 250%;
}

.fundcontainer {
  width: 80%;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 20px;
  width: 100%;
  margin-bottom: 20px;
}

.card h2 {
  margin-top: 0;
  font-size: 18px;
  color: #333;
}

.card p {
  margin-bottom: 10px;
  color: #666;
}

.button {
  background-color: #4caf50;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

/* footer {
  background-color: #f8f4ec;
  padding: 20px;
  text-align: center;
  color: black;
  position: fixed;
  bottom: 0;
  width: 100%;
} */
footer {
  background-color: rgb(174, 134, 157);
  color: #fff;
  padding: 30px 0;
  position: static;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  width: 100%;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-section {
  flex-basis: 25%;
}
.footer-section h3 {
  margin-bottom: 10px;
  font-size: 18px;
}

.footer-section ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-section li {
  margin-bottom: 5px;
}

.footer-section a {
  color: #fff;
  text-decoration: none;
}

.copyright {
  text-align: center;
  margin-top: 20px;
  font-size: 14px;
}

</style>
</head>
<body>
<header>
    <div class="navbar">
      <div class="nav-logo">
        <div class="logo">
        </div>
      </div>
<div class="nav-item">
        <a href="main2.php" class="home">
          Home</a>
      </div>
      <div class="nav-item">
        <a href="aboutus.php" class="aboutus">
          About Us
        </a>
      </div>
      <div class="nav-item">
        <a href="blog.php" class="blog">Blog</a>
      </div>
      <div class="nav-item">
        <a href="index.php" class="donatemonthly">Donate</a>
      </div>
      <div class="nav-itemright">
        <i class="fa-regular fa-user"></i>
        <a href="./users_area/user_registration.php" class="login">SignUp/SignIn</a>
      </div>
    </div>
  </header>
  <div class="slideshow-container">
    <div class="mySlides">
      <video autoplay muted loop src="./video/Welcome to DaanKaro.mp4" alt="video" style="width: 100%" >
    </div>
    <div class="mySlides">
       <video autoplay muted src="./video/video2.mp4" alt="image2" style="width: 100%" >
    </div>
    <div class="mySlides">
    <video autoplay muted src="./video/video3.mp4" alt="video3" style="width: 100%" >
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  <img class="textimg" src="./images/textimg.png" alt="Joining US to help others will give YOU and THEM happiness" style="width:70%;"> 
  <h1>Donate in two simple steps:</h1>
<br>
<br>
<div class="card">
<h1> Step 1:</h1>
<h2>Create an Account</h2>
<p>It'll take only 2 minutes. Just tell us a few details about you and you can start donating.</p>
<a class="button" href="./users_area/user_registration.php">
Create an Account
</a>

</div>
<div class="card">
  <h1> Step 2:</h1>
<h2>Check out the donate now page</h2>
<p>All you need to do is add the items you would like to donate in your cart and checkout. Make payments and You've already impacted a life!</p>
<a class="button" href="index.php">
Donate Now
</a>
</div>
</div>
<footer>
<div class="footer-container">
<div class="footer-section">
<h3>Company</h3>
<ul>
<li><a href="aboutus.html">About Us</a></li>
<li><a href="#">Management Team</a></li>
<li><a href="#">Board of Directors</a></li>
<li><a href="#">Investor Relations</a></li>
</ul>
</div>
<div class="footer-section">
<h3>Resources</h3>
<ul>
<li><a href="#">Blog</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Customers</a></li>
<li><a href="#">Partners</a></li>
</ul>
</div>
<div class="footer-section">
<h3>Legal</h3>
<ul>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms of Service</a></li>
<li><a href="#">Copyright Policy</a></li>
</ul>
</div>
<div class="footer-section">
<h3>Social</h3>
<ul>
<li><a href="#">Facebook</a></li>
<li><a href="#">Twitter</a></li>
<li><a href="#">LinkedIn</a></li>
<li><a href="#">Instagram</a></li>
</ul>
</div>
</div>
<div class="copyright">
&copy; 2024 DaanKaro. All rights reserved.
</div>
</footer>
</body>

</html>
