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
  width: 650px; 
  height: 350px; 
  background-color: #FFFFFF;
  margin:auto;
  border-radius: 4px;  
  font-size: 24px; 
  text-align: center; 
} 

#child { 
  position: absolute; 
  right: 0; 
  top: 0; 
  width: 650px; 
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
  width: 99%;
  padding: 12px 20px;
  box-sizing: border-box;

}

input[type=email] {
  width: 99%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
} 

input[type=password] {
  width: 49%;
  padding: 12px 20px;
  box-sizing: border-box;

}


input[type=button], input[type=submit]{
  background-color: #0069D9;
  border: none;
  color: white;
  padding: 11px 32px;
  text-decoration: none;
  cursor: pointer;
  width: 99%;
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
  <p class="words">Register an Account</p><br />
  <form name="myForm" action="register.php" method="post" class="words" onsubmit="return validate()">
   <?php include('errors.php'); ?>
 <div> 
    <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
    
  </div>
  
  <div>   
    <input type="email" name="email" placeholder="Email address" value="<?php echo $email; ?>">

  </div>
  
  <input type="password" name="psw" placeholder="Password">
  <input type="password" name="cpsw" placeholder="Confirm password">
 <br /><br />



  
  <div style="text-align:center">
   <input type="submit" name="reg_user" value="Register"><br />
  <p><a href="login.php">Login Page</a></p>
 
  </div>
  
</form>
  </div>
</div>
</body>
</html>
