<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Sb Admin</title>
 <meta charset="utf-8" />
 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />

<style type="text/css">

.words {
 font-family:"Verdana", sans-serif;
 font-size: 0.6em;
 padding-left: 15px;
 color:#212560;
 }

 
 #parent { 
  position: relative; 
  width: 400px; 
  height: 340px; 
  background-color: #FFFFFF;
   margin: auto;
  border-radius: 4px;  
  font-size: 24px; 
  text-align: center; 
} 

#child { 
  position: absolute; 
  right: 0; 
  top: 0; 
  width: 400px; 
  height: 50px; 
  background-color: #F7F7F7;
  border-radius: 5px;  
  font-size: 24px; 
  text-align: left; 
}

body {
  background-color: #343A40;
}


input[type=text] {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
} 

input[type=password] {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;

}

input[type=button], input[type=submit]{
  background-color: #0069D9;
  border: none;
  color: white;
  padding: 11px 32px;
  text-decoration: none;
  cursor: pointer;
  width: 90%;
  border-radius: 5px;
}


a:link {
  text-decoration: none;
  font-size: 0.8em;
}

a:hover {
  color: #0056BA;
  text-decoration: underline;
}

a:visited {
  color: #0056B3;
   font-size: 0.8em;
}


</style>
</head>

<body>
<div id="parent">
  <div id="child">
  <p class="words">Login</p>
  <form action="login.php" method="post" class="words">
  <?php include('errors.php'); ?>
  <div style="text-align:center">
  <input type="text" name="username" placeholder="Username" ><br />
  <input type="password" name="password" placeholder="Password"><br /><br />
  </div>

  
  <div style="text-align:center">
   <input type="submit" name="login_user" value="Login"><br />
  <p><a href="register.php">Register an Account</a></p>
  
  </div>
  
</form>
  </div>
</div>

</body>
</html>
