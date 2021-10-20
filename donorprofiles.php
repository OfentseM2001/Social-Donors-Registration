<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="images/download (4).jpg"/>
  <link rel="stylesheet" href="dashboardstyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
      color: #d60505;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
  <nav>
    <ul>
    <li class="logo">SocialDonors<br> SAVE A LIFE</br></li>
    <div class="items" style="padding-right:200px;">
    
    </ul>
   
</nav>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Save a Life<br> Give blood</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="donoralerts.php">Alerts 12</a></li>
        <li><a href="analysis.php">Analysis Mode</a></li>
        <li><a  class="active" href="donorprofiles.php">Donors</a></li>
        <li><a href="patients.php">Patients</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Give blood <br> Save a Life</h2>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="dashboard.php">-HOME</a></li><br>
        <li><a href="donoralerts.php">-DONOR ALERTS</a></li><br>
        <li><a href="analysis.php">-ANALYSIS MODE</a></li><br>
        <li><a class="active" href="donorprofiles.php">-DONOR PROFILES ></a></li><br>
        <li><a href="patients.php">-PATIENTS</a></li><br>
        <button type="button" class="btn btn-danger" align="right"><a href="logoutpage.php">Logout</a></button>
      </ul><br>
    </div>
  
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4><b><i>Social Donors Admin Dashboard</i></b></h4>
        
      </div>

      <div class="row">
        <div class="col-sm-3">
          <div class="well"  style="background-color: #d60505">
            <img src="images/she4.jpg" style="height: 150px;width: 200px;">
            <p>NAME: Jo- Anne Mohloki</p> 
            <p>LAST DONATED: 14 June 2020</p>
            <p>EMERGENCY NO.:0712345678</p>
            <p>BLOOD GROUP:A-</p>
          </div>
          <button type="button" class="btn btn-danger">Request</button>
          
        </div>
      
        <div class="col-sm-3">
          <div class="well"  style="background-color: #d60505">
            <img src="images/she3.jpg" style="height: 150px;width: 200px;">
            <p>NAME: Tawheeda Setlhoke</p> 
            <p>LAST DONATED: 14 June 2020</p>
            <p>EMERGENCY NO.:0613245687</p>
            <p>BLOOD GROUP:AB</p>
          </div>
          <button type="button" class="btn btn-danger">Request</button>
          
        </div>
       
        <div class="col-sm-3">
          <div class="well"  style="background-color: #d60505">
            <img src="images/little ngwana.jpg" style="height: 150px;width: 200px;">
            <p>NAME:Oagit Van Tonder</p> 
            <p>LAST DONATED: 14 June 2020</p>
            <p>EMERGENCY NO.:0659876543</p>
            <p>BLOOD GROUP:O+</p>
          </div>
          <button type="button" class="btn btn-danger">Request</button>
          
          
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="well"  style="background-color: #d60505">
              <img src="images/male3.jpg" style="height: 150px;width: 200px;">
              <p>NAME: Jacob Williams</p> 
              <p>LAST DONATED: 14 June 2020</p>
              <p>EMERGENCY NO.:0816543278</p>
              <p>BLOOD GROUP:B+</p>
            </div>
            <button type="button" class="btn btn-danger">Request</button>
          
          </div>
        
         
    
</body>
</html>
