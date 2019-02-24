<?php  
session_start();//session starts here  
  
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    header
    {
        background-color:#4db6ac !important;
       // background-color:#00BCD4 !important;
    }
    header [role="progressbar"][aria-busy="true"] {
  position: absolute;
  top: 0;
  left: 0;
  padding-top: 8px;
  width: 100%;
  background-color: #159756;
  -webkit-animation: preloader-background linear 3.5s infinite;
          animation: preloader-background linear 3.5s infinite;
}
header [role="progressbar"][aria-busy="true"]::before, header [role="progressbar"][aria-busy="true"]::after {
  display: block;
  position: absolute;
  top: 0;
  z-index: 2;
  width: 0;
  height: 8px;
  background: #afa;
  -webkit-animation: preloader-front linear 3.5s infinite;
          animation: preloader-front linear 3.5s infinite;
  content: '';
}
header [role="progressbar"][aria-busy="true"]::before {
  right: 50%;
}
header [role="progressbar"][aria-busy="true"]::after {
  left: 50%;
}

@-webkit-keyframes preloader-background {
  0%, 24.9% {
    background-color: #159756;
  }
  25%, 49.9% {
    background-color: #da4733;
  }
  50%, 74.9% {
    background-color: #3b78e7;
  }
  75%, 100% {
    background-color: #fdba2c;
  }
}

@keyframes preloader-background {
  0%, 24.9% {
    background-color: #159756;
  }
  25%, 49.9% {
    background-color: #da4733;
  }
  50%, 74.9% {
    background-color: #3b78e7;
  }
  75%, 100% {
    background-color: #fdba2c;
  }
}
@-webkit-keyframes preloader-front {
  0% {
    width: 0;
    background-color: #da4733;
  }
  24.9% {
    width: 50%;
    background-color: #da4733;
  }
  25% {
    width: 0;
    background-color: #3b78e7;
  }
  49.9% {
    width: 50%;
    background-color: #3b78e7;
  }
  50% {
    width: 0;
    background-color: #fdba2c;
  }
  74.9% {
    width: 50%;
    background-color: #fdba2c;
  }
  75% {
    width: 0%;
    background-color: #159756;
  }
  100% {
    width: 50%;
    background-color: #159756;
  }
}
@keyframes preloader-front {
  0% {
    width: 0;
    background-color: #da4733;
  }
  24.9% {
    width: 50%;
    background-color: #da4733;
  }
  25% {
    width: 0;
    background-color: #3b78e7;
  }
  49.9% {
    width: 50%;
    background-color: #3b78e7;
  }
  50% {
    width: 0;
    background-color: #fdba2c;
  }
  74.9% {
    width: 50%;
    background-color: #fdba2c;
  }
  75% {
    width: 0%;
    background-color: #159756;
  }
  100% {
    width: 50%;
    background-color: #159756;
  }
}
* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

@import url(https://fonts.googleapis.com/css?family=Roboto:300,400,500);

html,
body {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: "Roboto";
}

body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background-color: #f5f5f5;
      background-image: url(https://lh4.googleusercontent.com/-XplyTa1Za-I/VMSgIyAYkHI/AAAAAAAADxM/oL-rD6VP4ts/w1184-h666/Android-Lollipop-wallpapers-Google-Now-Wallpaper-2.png);
      background-repeat: no-repeat;
      background-size: cover;
}

header {
  position: relative;
  width: 100%;
  height: 60px;
  -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
  background-color: #fff;
}

main {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 20px;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  text-align: center;
}
:root main > * + * {
  margin-top: 1em;
}

h1 {
  margin: 0;
  font-size: 2.2em;
  font-weight: 200;
}

p {
  margin: 0;
  font-size: .875em;
  font-weight: 400;
}
.menu-bar
{
    margin-top: 15px;
    margin-left: 25px;
    color: #ffffff;
    font-size: 25px;
}

.menu-bar a:link a:visited a:hover a:active
{
    color:#ffffff;
}
footer {
  height: 30px;
  width: 100%;
  background: #03A9F4;
}
    
    </style>
    
</head>
<body>
   <div class="loader"></div> 
    <header>
  <div aria-busy="true" aria-label="Loading, please wait." role="progressbar"></div>
  <div class="menu-bar dropdown">
      <a href="#" style="color:#ffffff"><i class="fa fa-bars"></i></a>
  <div class="dropdown-content">
    <a href="index.php" class="link">Faculty Login</a>
    <a href="admin.php" class="link">Admin Login</a>
    <a href="forgot_password.php" class="link">Forgot password</a>
  </div>
  </div>
</header>
<main role="main">

    
<div class="box" style="margin-bottom:40%">
  <div id="box-header" >
    <div id="cont-lock"><i class="fa fa-lock fa-3x" style="color:#ffffff ; margin-top:10px;" aria-hidden="true"></i></div>
    <div id="bottom-head"><h1 id="logintoregister">Faculty Login</h1></div>
  </div> 
   <form action="" method="post">
    <div class="group">      
      <input class="inputMaterial" type="text" name="userid" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>USERID</label>
    </div>
	    <div class="group">      
      <input class="inputMaterial" name="password" type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>PASSWORD</label>
    </div>
    <input type="submit" name="submit" value="LOGIN" class="waves-effect waves-light btn" id="buttonlogintoregister">
    <!--<button name="submit"  id="buttonlogintoregister" type="submit">Log In</button>-->
  </form>
  <div id="footer-box"><p class="footer-text"></p></div>
</div>

 
</main>
<style>
/*PURELY FUNCTIONNAL CSS START*/
.dropdown, .link, .link-hover {
  display: inline-block; /*keep from overflow*/
}
.dropdown-content {
  display: none; /*don't show it on default*/
  position: absolute; /*dropdown needs to be below the text*/
     padding-top: 16px;
    margin-left: -15px;
}
.dropdown:hover .dropdown-content {
  display: inline-block; /*show the content*/
} /*concerns all items inside the .dropdown div, when the .dropdown gets hovered*/
.dropdown-content .link {
  display: block; /*not inline because we want to skip lines*/
} /*the links won't show up until the parent .dropdown-content gets shown*/
/*PURELY FUNCTIONNAL CSS STOPS*/

/*LET THE STYLING BEGIN !*/
.link, .link-hover {
  font-family: Arial;
  font-size: 20px;
  font-weight: 200;
  text-decoration: none;
  //text-align: center;
  color: #4db6ac ;
  background: #ffffff;
  outline: none;
  padding: 15px;
  min-width: 150px;
  transition: background 0.5s;
}
.link:hover, .link-hover:hover {
  background: #f5f5f5;
}
.link:active, .link-hover:active {
  background: #ffffff;
  font-weight: bold;
}
 
/*LET THE STYLING END :(*/
</style>
<footer></footer>
</body>
</html>
<?php  
include("conn.php");  
  
if(isset($_POST['submit']))  
{  
    $userid=$_POST['userid'];  
    $password=$_POST['password'];  
  
    $sql="select * from faculty WHERE perid='$userid'AND password='$password'";  
  //var_dump($check_user);
    $run=mysqli_query($conn,$sql); 
	//var_dump($run);
	//var_dump(mysqli_num_rows($run));
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('faculty_dashboard.php','_self')</script>";
        $_SESSION['userid']=$userid;
		//$_SESSION['student']=$student_name;
		//here session is used and value of $jno store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('userid or password is incorrect!')</script>";  
    }  
}  
?>