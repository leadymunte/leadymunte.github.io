<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/Login.css'); ?>">
    <link rel="shortcut icon" type="text/css" href="<?php echo base_url('assets/Login/img/globe.png'); ?>">
    <title>TravelGO - Login</title>
  </head>
<body>
	<nav class="navbar navbar-default himg">
		<center>
	     	 	<a class="navbar-brand" href="<?php echo base_url('index.php/home')?>">
	     	 		<img class="logo1" src="<?php echo base_url('assets/Login/img/globe.png'); ?>" align="center">
	     	 	</a>
	    </center>
	</nav>
	<div class="container bg">
		<center>
		<div class="container">
			<div class="col-md-6">
				<p align="center" class="awal">Login</p>
				<form method="POST" action="<?php echo $action ?>">	
					<div class="form-group">
						<input type="text" class="form-control" id="inputUser" aria-describedby="emailHelp" placeholder="Email" name="email" required>				
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
					</div>						  
					<div class="form-group">
						<center>
							<button type="submit" class="btn" id="loginbtn">LOGIN</button> 
						</center>
					</div>
				</form>
				<span style="color: red; "><b><?php echo $this->session->flashdata('message');?> </b></span>
				<p align="center" class="ft1">Forgot your password ? or <b><a href="<?php echo base_url('index.php/signup')?>">Sign Up</a></b></p>
				<center>
					<div class="gateng">
						<div class="garis"></div>
						<div class="spas">Or</div>
						<div class="garis"></div>
					</div>
				</center>
				<div>
					<center>
						<a href="https://www.facebook.com"><img class="img-circle" src="<?php echo base_url('assets/Login/ass\facebook.png'); ?>"></a>
						<a href="https://www.twitter.com"><img class="img-circle" src="<?php echo base_url('assets/Login/ass\twitter.png'); ?>"></a>
						<a href="https://www.gmail.com"><img class="img-circle" src="<?php echo base_url('assets/Login/ass\gmail.png'); ?>"></a>
					</center>
				</div>
			</div>
		</div>
		</center>
	</div>
	<div class="i">
		<div align="center" class="foot">
			<p>Copyright WWW.TRAVELGO.COM ® - All Rights Reserved.</p>
		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function (){ 
        $("#loginbtn").click(function(){
          stat = false;
          $.getJSON("DataLogin.json", function(result){
            $.each(result, function(i, field){
              $.each(this, function(indeks, data){
                if($("#inputUser").val() == data.user && $("#inputPassword").val() == data.password){
                  stat =true;
                }
              });
              if (stat == true){
              	window.location.href = "file:///F:/Project/Tubes%20Webpro/2.0/Home/homelogin.html";
              } else{
              	alert("Sorry Username and Password doesn't match.");
              }
            });
          });
        });
      });
</script>