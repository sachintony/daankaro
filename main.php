<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DaanKaro</title>
  <link rel="stylesheet" href="index2.css" />
  <link rel="stylesheet" href="footer.css" />
  <script src="https://kit.fontawesome.com/bd32583c0c.js" crossorigin="anonymous"></script>
  <script src="./javascript/index.js" defer></script>
  <script src="./javascript/slide.js" defer></script>


  <script src="./javascript/blrarea.js" defer></script>
  <link rel="shortcut icon" type="image/png" href="favicon.png">
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
  background-image: url("logodaan.png");
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
  color:#FF9BD2 ;
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
.prev, .next {
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

.prev:hover, .next:hover {
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

.textimg{
position: relative;
left: 15%; 
}

.brh2{
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
  background-color: #4CAF50;
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

footer {
  background-color: #F8F4EC;
  padding: 20px;
  text-align: center;
  color: black;
  position: fixed;
  bottom: 0;
  width: 100%;
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
        <a href="index2.php" class="home">
          Home</a>
      </div>
      <div class="nav-item">
        <a href="aboutus.html" class="aboutus">
          About Us
        </a>
      </div>
      <div class="nav-item">
        <a href="blog.html" class="blog">Blog</a>
      </div>
      <div class="nav-item">
        <a href="index.php" class="donatemonthly">Donate</a>
      </div>
      <div class="nav-item">
        <button class="city-dropdown">
          Select Area</button>
        <ul class="city-dropdown-content">
          <li><a href="#">North Bangalore</a></li>
          <li><a href="#">Central Bangalore</a></li>
          <li><a href="#">South Bangalore</a></li>
        </ul>
      </div>
      <div class="nav-itemright">
        <i class="fa-regular fa-user"></i>
        <a href="login.html" class="login">SignUp/SignIn</a>
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
  <img class="textimg" src="textimg.png" alt="Joining US to help others will give YOU and THEM happiness" style="width:70%;">
  <h2 class="brh2" ><b>Monthly Donations</h2>
    <div class="curved-line"></div>



  <script src="popup.js" defer></script>
  <div class="block">
    <P>Imagine a world where...

      Every stomach is full. Every child laughs with the energy of a healthy meal. Families share warm dinners, free from the grip of hunger. This world is possible. With your help, No Hunger can turn this dream into reality.</P>
      <button class="donate-food-button">Donate Food</button>
  </div>
  <footer>
  <div class="fundcontainer">
        <h1>Start a Fundraiser in three simple steps</h1>
       <div class="card">
            <h2>Start your fundraiser</h2>
            <p>It'll take only 2 minutes. Just tell us a few details about you and the ones you are raising funds for.</p>
            <button class="button">Start Your Fundraiser</button>
        </div>
        <div class="card">
           <h2>Share your fundraiser</h2>
            <p>All you need to do is share the fundraiser with your friends and family. In no time, support will start pouring in.</p>
            <button class="button">Share Now</button>
       </div>
       <div class="card">
           <h2>Withdraw Funds</h2>
           <p>The funds raised can be withdrawn without any hassle directly to your bank account. It takes only 5 minutes to withdraw funds on ketto.</p>
           <button class="button">Withdraw Funds</button>
        </div>
   </div>
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