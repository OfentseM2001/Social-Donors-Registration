<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="webcamjs-master/webcam.min.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="images/download (4).jpg"/>
<link rel="stylesheet" href="dashboardstyle.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: rgb(1, 9, 82);
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
  <nav>
    <ul>
    <li class="logo">SocialDonors<br> SAVE A LIFE</br></li>
    
    
   
    </ul>
   
</nav>
<br><br>
<form action="/action_page.php">
  <center>
  <div class="container">
    <h1>Admin Registration</h1>
    <p class="reg">Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>User Name</b></label>
    <input type="text" placeholder="Enter Username" name="email" id="email" required>

    <label for="psw"><b>Email</b></label>
    <input type="text" placeholder="ex@..." name="psw" id="psw" required>

    <label for="psw"><b>Date Of Birth</b></label>
    <input type="text" placeholder="DD/MM/YYYY" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Gender</b></label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
        Male
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
      <label class="form-check-label" for="flexRadioDefault2">
        Female
      </label>
    </div>


    <label for="psw-repeat"><b>Admin Code (code sent to email)</b></label>
    <input type="text" placeholder="SDAC...." name="psw-repeat" id="code" required>

    <label for="psw"><b>Create Password</b></label>
    <input type="password" placeholder="8 chararcters" name="email" id="psw" required>

    <label for="psw-repeat"><b>Re-type Password</b></label>
    <input type="password" placeholder="8 characters" name="email" id="psw" required>


    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn"><a href="adminlogin.php">Register</a></button>
  </div>

  
  <div class="container signin">
    <p>Already have an account? <a href="adminlogin.php">Sign in</a>.</p>
  </div>
</center>
</form>
<br><br>
<img src="images/download (2).png" style="max-width: 100%;width: 100%;height: 200px;">
  <footer>
    <div class="footerBottom">
      <div class="max002">
        <p>WHERE TO DONATE<br>Donor centers<br>Plasma and Platalets<br>Convalescent Plasma Donor<br>Blood Drives<br>Book a Blood Drive</p>
      </div>
    
      <div class="max002">
        <p>DONORS<br>Who can donate?<br>Why donate blood?<br>Donation process<br>Deferrals<br>Donor Partners<br>Brand ambassadors<br>Recipient Stories<br>FAQs<br>Can i save 3 lives today</p>
      </div>
    
      <div class="max002">
        <p>ABOUT BLOOD<br><br>Blood Types<br>Types of donation<br></p>
      </div>
    
      
    </div>
    
    <div class="footerBottom1">
      
      
      <a href="https://www.google.com/search?q=twitter+l&rlz=1C1CHBD_enZA946ZA946&oq=twitter+l&aqs=chrome..69i57j0i512j0i20i263i512j0i512l7.5391j0j7&sourceid=chrome&ie=UTF-8"><img src="images/icons8-twitter-circled-50.png"align="right" style="width: 40px;border-radius: 40px;"></a>
      <a href="https://www.youtube.com/"><img src="images/icons8-play-button-50.png"align="right" style="width: 40px;border-radius: 40px;"></a>
      <a href="https://www.instagram.com/accounts/login/"><img src="images/icons8-instagram-50.png"align="right" style="width: 40px;border-radius: 40px;"></a>
      <a href="https://www.facebook.com/"><img src="images/icons8-facebook-26.png"align="right" style="width: 40px;border-radius: 40px;"></a>
      <p>SOCIALDONORS &#169 2016|PRIVACY POLICY|DISCLAIMER|PIAI MANUAL|SITEMAP</p><br><br>

  
    </div>
  
  </footer>
 
</body>
</html>
