<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
/>

<title>About Us</title>
<!-- <link
rel="stylesheet"
href="aboutus.css"
/> -->
<link rel="stylesheet" href="footer.css">
<script src="aboutus.js" defer></script>
<script src="blrarea.js" defer></script>
<script
src="https://kit.fontawesome.com/bd32583c0c.js"
crossorigin="anonymous"
></script>
<style>
    body {
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.navbar {
  height: 80px;
  background-color: #fff;
  /* color: black; */
  border: 1px solid black;
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
/* Dropdown Button */
.city-dropdown {
  background-color: #f1f1f1; /* Adjust background color as needed */
  border: none;
  font-weight: bold;
  padding: 10px 15px;
  font-size: 16px;
  cursor: pointer;
}

/* Dropdown Content (initially hidden) */
.city-dropdown-content {
  display: none;
  position: absolute; /* Position the dropdown content */
  background-color: #f9f9f9; /* Adjust background color as needed */
  min-width: 160px; /* Set a minimum width */
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); /* Add a subtle box shadow */
  z-index: 1; /* Ensure it appears above other elements */
}

/* Dropdown Content (when shown) */
.city-dropdown-content.show {
  display: block;
}

/* Dropdown Content List Items */
.city-dropdown-content li {
  padding: 10px 15px;
  text-align: left;
}

.city-dropdown-content li a {
  color: black; /* Adjust link color as needed */
  text-decoration: none;
}

.city-dropdown-content li a:hover {
  background-color: #f4f4f4; /* Add a hover effect */
}
.city-dropdown-content li {
  list-style: none; /* Removes bullet points */
  padding: 10px 15px;
  text-align: left;
}

.nav-item {
  margin-left: 55px;
}

.nav-itemright {
  margin-left: auto;
}

.nav-item a {
  text-decoration: none;
  color: #333333;
  font-size: 1rem;
  position: relative;
  margin-right: 15px;
}

.login {
  color: #333333;
  font-size: 1rem;
  margin-left: 15px;
  margin-right: 50px;
  position: relative;
}

.nav-item a:hover {
  color: #ff69b4;
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

.container {
  display: flex;
  height: 100vh;
}

.blackbackground {
  background-color: #000;
  color: white;
  margin: 0;
  padding: 20px;
}
h1 {
  font-size: 24px;
  margin: 0;
}

.left {
  flex: 2;
  background-color: #fff;
  padding: 20px;
  box-sizing: border-box;
}

.right {
  flex: 1.5;
  background-color: rgb(174, 134, 157);
  box-sizing: border-box;
  padding: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  background-image: url('./images/aboutusimg.png');
}
.quote {
  color: #fff;
  font-family: 'Helvetica', 'Arial';
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80%;
  z-index: 1;
}
.quoteimg {
  width: 100%;
  height: 100%;
  /* top: 0;
    left: 0; */
  object-fit: contain;
  position: absolute;
  z-index: 0;
  opacity: 0.5; /* Set the image opacity to 50% (adjust as needed) */
  background-color: #f8d8ed;
}
/* footer {
  background-color: white;
  padding: 20px;
  text-align: center;
  color: black;
  position: fixed;
  bottom: 0;
  width: 100%;
} */

    </style>
<link rel="shortcut icon" type="image/png" href="favicon.png">
<div class="navbar">
<div class="nav-logo">
<div class="logo">
</div>
</div>

<div class="nav-item">
<a
href="main2.php"
class="home">
Home</a
>
</div>
<div class="nav-item">
<a
href="blog.php"
class="blog"
>Blog</a
>
</div>
<div class="nav-item">
<a
href="index.php"
class="donatemonthly"
>Donate</a
>
</div>

<div class="nav-itemright">
<i class="fa-regular fa-user"></i>
<a
href="./users_area/user_registration.php"
class="login"
>SignUp/SignIn</a
>
</div>
</div>
</head>
<body>
<div class="blackbackground">
<h1>About Us</h1>
</div>
<div class="container">
<div class="left">
<div class="aboutinfo">
<p>
We believe in the power of giving. That's why we created DaanKaro, a one-stop platform connecting passionate individuals like you with impactful NGOs making a difference in the world. We make it easy and convenient for you to volunteer your time, donate your resources, and amplify the work of incredible organizations.
<br>
<br>
Our Mission:
<ul>
<li>Unify: We bring together a diverse range of NGOs under one roof, making it easier to find causes you care about.</li>
<li> We streamline the volunteering and donation experience, removing technical barriers and focusing on action.</li>
<li>Empower: We empower individuals to make a real difference, whether through hands-on service or generous contributions.</li>
</ul>
<br>
<br>
What We Do:
<ul>
<li> Connect you with causes: Explore a curated directory of NGOs working in various areas, from education and healthcare to animal welfare and environmental protection.</li>
<li>Facilitate volunteering: Find volunteering opportunities that match your skills and interests, conveniently apply, and track your impact.</li>
<li>Secure donations: Donate to trusted NGOs seamlessly through our secure payment gateway.</li>
<li>Share stories: Connect with like-minded individuals, discover inspiring impact stories, and stay informed about important social issues.</li>
</ul>
<br>But DaanKaro is more than just a platform.
<br>We're a community of passionate individuals and dedicated organizations united by a shared vision: a world where kindness finds its cause, and every act of giving, big or small, creates a ripple effect of positive change.
<br>Join us.
<br>Be the change you want to see.

</p>
</div>
</div>
<div class="right">
<div class="quote">
<p>
Give to the world the best you have and the best will come back to
you. -Madeline Bridges
</p>
</div>
<div class="quoteimg">
<img
src="sample.png"
alt="aboutus image"
/>
</div>
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