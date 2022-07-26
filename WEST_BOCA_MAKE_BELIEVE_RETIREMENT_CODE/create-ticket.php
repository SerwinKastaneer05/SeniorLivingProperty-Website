<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Ticket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    .sub-container {
      max-width: 600px;
      margin: 0 auto;
      text-align: left;
    }

    input[type='text'] {
      width: 100%;
    }

    textarea {
      width: 100%;
    }

    input {
      margin-bottom: 20px;
    }

    #cost {
        width: 150px;
    }
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><img src="thecanetanklogo.png" class="img-responsive" style="width:50px;height:50px" alt="Image"></li> 
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="update-profile.html">Update Profile</a></li>
          <li><a href="create-property.html">Create Property</a></li>
          <li><a href="update-property.html">Update Property</a></li>
          <li><a href="minigame.html">Play Minigame</a></li>
          <li><a href="create-ticket.html">Contact IT</a></li>
          <li><a href="#">Authorize Users</a></li>
          <!--<li><a href="#">Contact</a></li>-->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.html"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
        </ul>
      </div>
  </div>
</nav>

<div>
  <div class="container text-center">
    <div class="sub-container">
      <h1>Submit a Ticket</h1>
      <form action="">
        <label for="problem-name">Name: </label><br/><input type="text" name="problem-name"
                                                             id="problem-name"><br/>
        <label for="problem-contact">Contact Info: </label><br/><input type="text" name="problem-contact"
        id="problem-contact">
        <label for="problem-description">Problem: </label><br/>
        <textarea name="problem-description" id="problem-description" cols="30" rows="10"></textarea><br />
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
    <p>Made By Dov Cattan, Justin Sison, Serwin Kastaneer, Eric Palomino, and Juan Lopez Restrepo</p>
</footer>
<?php include_once('session.php'); ?>
<?php include_once('navigation.php'); ?>
</body>
</html>
