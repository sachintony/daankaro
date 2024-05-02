<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Your Blog Name</title>
  <link rel="stylesheet" href="blog.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <script src="blog.js" defer ></script>
  <script src="blrarea.js" defer ></script>
  <script
    src="https://kit.fontawesome.com/bd32583c0c.js"
    crossorigin="anonymous"
  ></script>
  <style>
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
    background-image: url("./images/logodaan.png");
    background-size: cover;
    height: 70px;
    width: 175px;
  }
  /* Dropdown Button */
  .city-dropdown {
    background-color: #ffffff; /* Adjust background color as needed */
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
    background-color: #ffffff; /* Adjust background color as needed */
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
  body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    /* Set background color or image if desired */
  }
  
  h1 {
    /* Existing styles... */
    z-index: 2;
  }
  
  
  main {
    padding: 20px;
  }
  /* General styles for the navigation bar */
.vertical-nav {
    position: fixed; /* Fixed position to keep it visible on scroll */
    top: 0;
    left: 0;
    width: 250px; /* Adjust width as needed */
    background-color: #f5f5f5;
    color: #f5f5f5;
    margin-top: 170px;
    padding: 20px;
    z-index: 1;
    border-right: 1px solid rgb(255, 255, 255);
   
  }
  
  .vertical-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .vertical-nav li {
    margin-bottom: 15px;
  }
  
  .vertical-nav a {
    display: block;
    text-decoration: none;
    color: rgb(174,134,157);
    padding: 5px 10px;
    transition:  all 0.3s ease;
  }
  
  /* Hover effect for links */
  .vertical-nav a:hover {
    background-color: rgb(255, 255, 255);
  }
  
  /* Sub-menu styles */
  .sub-menu {
    display: none;
  position: absolute;
  top: 0;
  left: 100%;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
  transition: all 0.5s ease; 
  }
  .vertical-nav li,
.sub-menu {
  transition: all 0.5s ease; /* Adjust duration as needed */
}
  
  .vertical-nav li:hover .sub-menu {
    display: block; /* Show sub-menu on hover */
    position: absolute;
    top: 0;
    left: 100%;
    background-color: #f5f5f5;
    border: 1px solid rgb(255, 255, 255);
    border-radius: 5px;
    padding: 10px;
  }
  

  .blackbackground {
    background-color: #000;
    color: white;
    margin: 0;
    padding: 20px;
  }
  
  .blog-posts {
    display: flex; /* Or grid for different layouts */
    flex-wrap: wrap;
    justify-content: space-between; /* Adjust spacing as needed */
  }
  
  /* Blog post styles */
  .blog-post {
    position: relative;
    left: 25%;
    width: 45%; /* Adjust based on layout */
    margin-bottom: 20px;
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 5px;
    box-shadow:0px 2px 5px rgba(0, 0, 0, 0.1);
}

.blog-post img {
  width: 100%;
}

.blog-post h2 {
  margin-top: 10px;
}

.blog-post .meta-info {
  margin-top: 10px;
  font-size: 14px;
  color: #999;
}
/* footer {
    background-color: white;
    padding: 20px;
    text-align: center;
    color: black;
    position: fixed;
    bottom: 0;
    width: 100%;
  }` */
  </style>
<!-- /* Additional styles */
/* - Style navigation bar elements
   - Customize typography and colors
   - Adjust spacing and margins
   - Create responsive layouts for different screen sizes *  -->
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
          href="aboutus.php"
          class="aboutus">
          About Us
          </a>
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
    <title>Blog</title>
  <h1 class="blackbackground">Blog</h1>
</head>
<body>
    <nav class="vertical-nav">
        <ul>
          <li><a href="#">Donate</a>
            <ul class="sub-menu">
              <li><a href="#">Clothes</a></li>
              <li><a href="#">Electronic Gadgets</a></li>
              <li><a href="#">Books</a></li>
              <li><a href="#">Other Items</a></li>
            </ul>
          </li>
          <li><a href="#">Volunteer</a>
            <ul class="sub-menu">
              <li><a href="#">Education</a></li>
              <li><a href="#">Environment</a></li>
              <li><a href="#">Community Development</a></li>
              <li><a href="#">Other Causes</a></li>
            </ul>
          </li>
          <li><a href="#">Get Involved</a>
            <ul class="sub-menu">
              <li><a href="#">Fundraising Events</a></li>
              <li><a href="#">Awareness Campaigns</a></li>
              <li><a href="#">Become an Ambassador</a></li>
              <li><a href="#">Spread the Word</a></li>
            </ul>
          </li>
          <li><a href="#">News & Stories</a></li>
          <li><a href="aboutus.html">About Us</a></li>
        </ul>
      </nav>
  <main>
    <section class="blog-posts">
      </section>
    </main>
  <script src="script.js"></script>
</body>
<article class="blog-post">
    <img src="./images/blogimg.png" alt="Post image">
    <h2 class="hea"><a href="post-details.html" style="color: rgb(174,134,157);">Combating Food Waste: How NGOs Are Rescuing Food and Feeding Communities </a></h2>
    <p> Food waste is a global problem, but NGOs are stepping up to find solutions. This post explores innovative initiatives by NGOs that are rescuing food from landfills, distributing it to those in need, and promoting sustainable food systems. Discover how you can get involved in supporting these efforts.</p>
    <div class="meta-info">
      <span>By Author Name</span>
      <span>Published on 2024-01-30</span>
      <span><a href="#">Food Donation</a></span>
    </div>
  </article>
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
</html>
