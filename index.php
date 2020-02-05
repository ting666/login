<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
	.header {
		font-family:"Verdana", sans-serif;
		text-align: left;
		color:white;
	}
	
	body {
	  background-color: #343A40;
	}
	
	.content{
		font-family:"Verdana", sans-serif;
		font-size: 1.2em;
		padding-left: 15px;
		color:cyan;
	}
	
	p{
		text-align: center;
	}
	</style>
</head>
<body>

<div class="header">
	<h1>Home Page</h1> <hr />
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br /><br /><br />
    	<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>
