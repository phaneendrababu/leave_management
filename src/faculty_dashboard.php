<?php  
include 'conn.php';
session_start(); 
$userid=$_SESSION['userid'];
?>
<?php
 
 include'conn.php';
 $sql=mysqli_query($conn,"SELECT * FROM leave_apply WHERE perid='$userid' and status='Approved'");
 $count=mysqli_num_rows($sql);
 $remain=20-$count;
$dataPoints = array( 
	array("label"=>"Leaves Taken", "y"=>"$count"),
	array("label"=>"Leaves Remaining", "y"=>"$remain")
)
 
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "theme2",
	animationEnabled: true,
	title: {
		text: " Pie chart Of leaves"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
    <style>
  #backButton {
	border-radius: 4px;
	padding: 8px;
	border: none;
	font-size: 16px;
	background-color: #2eacd1;
	color: white;
	position: absolute;
	top: 10px;
	right: 10px;
	cursor: pointer;
  }
  .invisible {
    display: none;
  }
</style>
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
     /* background-image: url(https://lh4.googleusercontent.com/-XplyTa1Za-I/VMSgIyAYkHI/AAAAAAAADxM/oL-rD6VP4ts/w1184-h666/Android-Lollipop-wallpapers-Google-Now-Wallpaper-2.png);*/
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
    width:100%;
    height:100%;
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
  //padding: 20px;
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
        
</header>
<?php
  include 'conn.php';  
  $sql="select * from faculty WHERE perid='$userid'";
  $run=mysqli_query($conn,$sql); 
  
  while($row=mysqli_fetch_array($run)) 
	{
	    $userid=$row[1];
	    $fullname=$row[2];
	}
?>

<main role="main">
    <div class="row1">
  <div class="column left" style="background-color:#ffffff;">
      <div class="left-col">
      <img src="http://www.clker.com/cliparts/3/V/U/m/W/U/admin-button-icon-md.png" style="text-align:center;width:100px;">
      <h3><?php echo"$userid"; ?></h3>
      <h3><?php echo"$fullname"; ?></h3>
      </div>
      <div>
          <ul>
              <li class="item"><a class="wave-effect" href="faculty_dashboard.php"><i class="material-icons">home</i>Home</a></li>
              <li class="item"><a class="wave-effect" href="faculty_profile.php"><i class="material-icons">account_box</i>My Profile</a></li>
              <li class="item"><a class="wave-effect" href="faculty_apply_leave.php"><i class="material-icons">note_add</i>Apply Leave</a></li>
              <li class="item"><a class="wave-effect" href="show_faculty_dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a></li>
              <!--<li class="item"><a class="wave-effect" href="faculty_notify.php"><i class="material-icons">notifications</i>Notifications<sup style="font-size:20px;"></sup></a></li>-->
              <li class="item"><a class="wave-effect" href="faculty_logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
          </ul>
      </div>  
    <!--<h2>Column 1</h2>
    <p>Some text..</p>-->
  </div>
  <div class="column right">
    <h2 style="text-align:center;color:#4db6ac">Welcome <?php echo"$fullname"; ?></h2>
    <!--<p>Some text..</p>
    <p>Welcome <?php echo"$userid"; ?></p>-->
    
    <div style="width:50%;background-color:white;border-radius:5px; box-shadow:5px 5px 5px;">
<!--<form action="" method="post">
    <div class="group">      
      <input class="inputMaterial" type="password" name="currentpass" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>CURRENT PASSWORD</label>
    </div>
	    <div class="group">      
      <input class="inputMaterial" name="newpassword" type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>NEW PASSWORD</label>
    </div>
    <div class="group">      
      <input class="inputMaterial" name="confirmpassword" type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>CONFIRM PASSWORD</label>
    </div>
    <input type="submit" name="submit" value="CHANGE PASSWORD" id="buttonlogintoregister">
    <button name="submit"  id="buttonlogintoregister" type="submit">Log In</button>
  </form>-->
  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
  </div>
  
  
</div>

 
</main>
<style>
.column {
    float: left;
    //box-shadow: 10px 10px 5px grey;
    padding: 10px;
    height:100%;
   // height: 300px; /* Should be removed. Only for demonstration */
}

.left {
  width:15%;
  box-shadow: 10px 10px 5px grey;
}

.right {
  width: 85%;
}
.row1
{
    width:100%;
    height:100%;
}
/* Clear floats after the columns */
.row1:after 
{
    content: "";
    display: table;
    clear: both;
}
.item
{
    list-style:none;
    float:left;
}
ul li a
{
    font-size: 15px;
    height: auto!important;
    color: rgba(0,0,0,.7);
    padding: 15px 0 15px 24px!important;
    line-height: 1em!important;
    text-decoration:none;
    display: block;
    font-weight:bold;
}
ul{
    padding:0px;
}
ul li a i
{
    vertical-align: middle;
    //margin-right:20px;
}
ul li a .material-icons
{
line-height: inherit;
 margin: 0 20px 0 0; 
    width: auto;
}
}
li
{
    float: none;
    line-height: 48px;
    //display: block;
    cursor:pointer;
}
.wave-effect
{
    position: relative;
    cursor: pointer;
    //display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    will-change: opacity, transform;
    transition: all .3s ease-out;
}
input[type=submit] {
  background: #cfd8dc;
  border: 0;
  color: #009688;
  padding: 10px;
  font-size: 16px;
  font-weight: 300;
  /*width: 330px;*/
  /*margin: 20px auto;*/
  margin-left:80px;
  display: block;
  cursor: pointer;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  border-radius: 2px;
}
 input[type=submit]:active {
  background: #009688;
  color: #263238;
}
 input[type=submit]:hover {
  background: #009688;
  color: #FFF;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
}
</style>
<footer></footer>
</body>
</html>