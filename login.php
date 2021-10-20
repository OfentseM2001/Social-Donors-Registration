<?php 
include_once($_SERVER['DOCUMENT_ROOT'] . "/social donors/functions-page.php");
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Social Donors</title>
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="phpstyle.css">
		<link rel="stylesheet" href="main.java">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/download (4).jpg"/>
        <link rel="stylesheet" href="style.css">
        <meta name="description" content="how to become a blood donor, where to donate, about blood and different types of donations">
        <meta name="keywords" content="social donors ,blood donors, join donor community, how to sign up to be a blood donor,common reasons people cant donate">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
	<style type="text/css">
	input{
		display: block;
		padding: 10px;
		margin: 10px;
	}
</style>
<body>
<nav>
            <ul>
            <li class="logo">SocialDonors<br> SAVE A LIFE</br></li>
            <div class="items">
                <li><a href="index.php#wbdd">WHERE TO DONATE |</a></li>
                <li><a href="index.php#canI">BOOK A BLOOD DRIVE |</a></li>
                <li><a href="index.php#types">DONORS |</a></li>
                <li><a href="index.php#blood">ABOUT BLOOD |</a></li>
                <li><a href="Dashboard/welcome.php">ADMIN LOGIN</a></li>

            </div>
            <li class="search-icon">
                <input type="search" placeholder="Search">
                <label class="icon">
                <span class="fas fa-search"></span>
                </label>
            </li>
            </ul>
        </nav>


<?php 
	if (isset($_SESSION['email'])) {
		$email = $_SESSION['email'];
		$username = $_SESSION['username'];
		$gender = $_SESSION['gender'];
		$id = $_SESSION['id'];
		$image = $_SESSION['image'];
		$bloodtype = $_SESSION['bloodtype'];

		// alert('you are logged in');

		include_once($_SERVER['DOCUMENT_ROOT'] . "/social donors/profile-form.php");
	}

?>

<center>
<h2>See all users</h2>
<form action="load-page.php" method="post">
	<input type="submit" name="all_users">
</form>

<div class="header">
  	<h2>Register</h2>
  </div>
<form action="load-page.php" method="post" enctype='multipart/form-data'>
	<input type="email" name="email" placeholder="Email">
	<input type="text" name="bloodtype" placeholder="Blood Type">
	<input type="text" name="gender" placeholder="Gender">
	<input type="text" name="username" placeholder="Username">
	<input type="password" name="password" placeholder="Password">
	<input type="text" name="confirm_password" placeholder="Confirm Password">
	<input type='file' name='image' accept='image/*'>
	
	<input type="submit" name="register">
</form>

<div class="header">
  	<h2>Login</h2>
  </div>
<form action="load-page.php" method="post">
	<input type="text" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<input type="submit" name="login">
</form>
</center>
</body>
</html>