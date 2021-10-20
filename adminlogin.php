<!DOCTYPE html>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dashboardstyle.css">
<link rel="shortcut icon" type="image/x-icon" href="images/download (4).jpg"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: rgb(1, 9, 82);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #d60505;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
<h1><b><i>ADMIN LOGIN</i></b></h1>
<br><br>
<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    
  </div>
  <center>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw"><b>Admin Code (Code changes everyday)</b></label>
    <input type="password" placeholder="Enter Code Sent To Email" name="psw" required>
        
    <button type="submit" class="registerbtn"><a href="dashboard.php">Login</a></button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>


  <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw">Not Yet Registered? <a href="adminregistration.php">Register here</a></span>
  </div>
</center>
</form>
 
<br><br>
<img src="Images/download (2).png" style="max-width: 100%;width: 100%;height: 200px;">
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
