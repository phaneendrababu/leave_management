<?php  
include 'conn.php';
session_start();  
$userid=$_SESSION['userid']; 
if(!$_SESSION['userid'])  
{  
  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
?> 
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="mui.min.css" rel="stylesheet" type="text/css"/>
    <script src="mui.min.js"></script>
    <script src='jquery.min.js'></script>
    
    <script>
$(document).ready(function(){
    $("#ad").click(function(){
        $("#cls_adj").fadeIn();
    });
});
</script>
    
    
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
	    $email=$row[3];
	    $gender=$row[5];
	    $department=$row[6];
	    $mno=$row[7];
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
              <li class="item"><a class="wave-effect" href="faculty_notify.php"><i class="material-icons">notifications</i>Notifications<sup style="font-size:20px;"><?echo"$count";?></sup></a></li>
              <li class="item"><a class="wave-effect" href="faculty_logout.php"><i class="material-icons">exit_to_app</i>Logout</a></li>
          </ul>
      </div>  
    <!--<h2>Column 1</h2>
    <p>Some text..</p>-->
  </div>
  <div class="column right" >
   <!-- <h2 style="text-align:center;color:#4db6ac">Welcome <?php echo"$fullname"; ?></h2>-->
    <!--<p>Some text..</p>
    <p>Welcome <?php echo"$userid"; ?></p>-->
        
    <!--<div style="width:100%;height:90%;background-color:white;border-radius:5px; box-shadow:5px 5px 5px;">
<div class="mui-container">-->
        <div class="mui-panel" style="font-weight:bold;color:#4db6ac">
            LIST OF THE CLASS ADJUSTMENTS
        </div>

<?php
include 'conn.php';

if(isset($_POST['apply']))
{
    $dates_leave=$_POST['dates_leave'];
    
    $s1=$_POST['periodadj1'];
    $s2=$_POST['periodadj2'];
    $s3=$_POST['periodadj3'];
    $s4=$_POST['periodadj4'];
    $s5=$_POST['periodadj5'];
    $s6=$_POST['periodadj6'];
    $s7=$_POST['periodadj7'];
    $s8=$_POST['periodadj8'];
    
    $s9=$_POST['periodadj9'];
    $s10=$_POST['periodadj10'];
    $s11=$_POST['periodadj11'];
    $s12=$_POST['periodadj12'];
    $s13=$_POST['periodadj13'];
    $s14=$_POST['periodadj14'];
    $s15=$_POST['periodadj15'];
    $s16=$_POST['periodadj16'];
    
    $s17=$_POST['periodadj17'];
    $s18=$_POST['periodadj18'];
    $s19=$_POST['periodadj19'];
    $s20=$_POST['periodadj20'];
    $s21=$_POST['periodadj21'];
    $s22=$_POST['periodadj22'];
    $s23=$_POST['periodadj23'];
    $s24=$_POST['periodadj24'];
    
    $s25=$_POST['periodadj25'];
    $s26=$_POST['periodadj26'];
    $s27=$_POST['periodadj27'];
    $s28=$_POST['periodadj28'];
    $s29=$_POST['periodadj29'];
    $s30=$_POST['periodadj30'];
    $s31=$_POST['periodadj31'];
    $s32=$_POST['periodadj32'];
    
    $s33=$_POST['periodadj33'];
    $s34=$_POST['periodadj34'];
    $s35=$_POST['periodadj35'];
    $s36=$_POST['periodadj36'];
    $s37=$_POST['periodadj37'];
    $s38=$_POST['periodadj38'];
    $s39=$_POST['periodadj39'];
    $s40=$_POST['periodadj40'];
    
    $s41=$_POST['periodadj41'];
    $s42=$_POST['periodadj42'];
    $s43=$_POST['periodadj43'];
    $s44=$_POST['periodadj44'];
    $s45=$_POST['periodadj45'];
    $s46=$_POST['periodadj46'];
    $s47=$_POST['periodadj47'];
    $s48=$_POST['periodadj48'];
    
    
    $leavetype=$_POST['leavetype'];
    //$fromdate=$_POST['fromdate'];
    //$todate=$_POST['todate'];
    $purpose=$_POST['purpose'];
    $timestamp = date('Y-m-d G:i:s');
    
    $dates=explode(",",$dates_leave);
    
   $arr=array($_POST['periodadj1'],$_POST['periodadj2'],$_POST['periodadj3'],$_POST['periodadj4'],$_POST['periodadj5'],$_POST['periodadj6'],$_POST['periodadj7'],$_POST['periodadj8'],$_POST['periodadj9'],$_POST['periodadj10'],$_POST['periodadj11'],$_POST['periodadj12'],$_POST['periodadj13'],$_POST['periodadj14'],$_POST['periodadj15'],$_POST['periodadj16'],$_POST['periodadj17'],$_POST['periodadj18'],$_POST['periodadj29'],$_POST['periodadj20'],$_POST['periodadj21'],$_POST['periodadj22'],$_POST['periodadj23'],$_POST['periodadj24'],$_POST['periodadj25'],$_POST['periodadj26'],$_POST['periodadj27'],$_POST['periodadj28'],$_POST['periodadj29'],$_POST['periodadj30'],$_POST['periodadj31'],$_POST['periodadj32'],$_POST['periodadj33'],$_POST['periodadj34'],$_POST['periodadj35'],$_POST['periodadj36'],$_POST['periodadj37'],$_POST['periodadj38'],$_POST['periodadj39'],$_POST['periodadj40'],$_POST['periodadj41'],$_POST['periodadj42'],$_POST['periodadj43'],$_POST['periodadj44'],$_POST['periodadj45'],$_POST['periodadj46'],$_POST['periodadj47'],$_POST['periodadj48']);
    
   $v=$s1.",".$s2.",".$s3.",".$s4.",".$s5.",".$s6.",".$s7.",".$s8.",".$s9.",".$s10.",".$s11.",".$s12.",".$s13.",".$s14.",".$s15.",".$s16.",".$s17.",".$s18.",".$s19.",".$s20.",".$s21.",".$s22.",".$s23.",".$s24.",".$s25.",".$s26.",".$s27.",".$s28.",".$s29.",".$s30.",".$s31.",".$s32.",".$s33.",".$s34.",".$s35.",".$s36.",".$s37.",".$s38.",".$s39.",".$s40.",".$s41.",".$s42.",".$s43.",".$s44.",".$s45.",".$s46.",".$s47.",".$s48;
   echo"<table class='mui-table'>";
   echo"<thead>
    <tr style='background-color:#FFFFFF;color:#03A9F4'>
      <th>Faculty Name</th>
      <th>Peroid Time</th>
      <th>Section</th>
    </tr>
  </thead>";
  //echo"<div class='mui-divider'></div>";
  echo"<div class='facl'>";
   echo"<tbody>";
   $p=0;
   foreach($arr as $fac)
   {
       if($fac=="")
       {
           
       }
       else
       {
          $z=explode(",",$fac);
        echo"<tr style='background-color:#03A9F4'>
        <td style='float:left;color:#FFFFFF'>$z[0]</td>
        <td style='color:#FFFFFF'>$z[1]</td>
        <td style='color:#FFFFFF'>$z[2]</td>
        </tr>";
        //$cm=$z[0].",".$z[1].",".$z[2]."^";
        $cm[$p]=$fac;
        $p++;
       }
   }
   echo"</tbody>";
   echo"</div>";
   echo"</table>";
   //$v1=str_replace(",,",",","$v");
    //echo"$v";
    //echo str_replace(",,",",","$v");
    //echo"$v1";
    
    print_r($cm);
    
    $myArray = explode(',', $v1);
        //print_r($myArray);
        $cnt=0;
        foreach($myArray as $value)
        {
            $cnt+=1;
        }
    /*$sql1="select * from faculty where perid='$userid'";
    $run1=mysqli_query($conn,$sql1);
    $sql2=mysqli_query($conn,"SELECT * FROM `leave_apply`");
    $count_rows=mysqli_num_rows($sql2);
    $slno=$count_rows+1;
    while($row=mysqli_fetch_array($run1))
    {
        $name=$row[2];
    }
    $sql="INSERT INTO `leave_apply`(`slno`,`perid`, `name`,`leavetype`, `fromdate`, `todate`, `purpose`, `timestamp`,`status`,`adj`,`cnt`) VALUES ('$slno','$userid','$name','$leavetype','$fromdate','$todate','$purpose','$timestamp','null','$v1','$cnt')";
    $run=mysqli_query($conn,$sql);
    if($run)
    {
        echo"<script>alert('Leave application sended sucessfully')</script>";
    }*/
    
    
    //echo"<script>alert('$v')</script>";
    echo"<form class='mui-form' method='post'>
 <div class='mui-row'>
    <div class='mui-col-md-4'>
        <a href='faculty_apply_leave.php'><button  class='mui-btn mui-btn--raised' style='background-color:#4db6ac'>BACK</button></a>
    </div>
      <div class='mui-col-md-4'>
        <button type='submit' name='leave_apply' class='mui-btn mui-btn--raised' style='background-color:#4db6ac'>APPLY YOUR LEAVE</button>
    </div>
    </form>
    </div>";

    /*if(isset($_POST['leave_apply']))
    {*/
        $sql1="select * from faculty where perid='$userid'";
    $run1=mysqli_query($conn,$sql1);
    $sql2=mysqli_query($conn,"SELECT * FROM `leave_apply`");
    $count_rows=mysqli_num_rows($sql2);
    $slno=$count_rows+1;
    while($row=mysqli_fetch_array($run1))
    {
        $name=$row[2];
    }
    echo"$slno~$userid~$name~$leavetype~$purpose~$dates_leave~$timestamp~$cm~null~$cnt~0";
    $sql="INSERT INTO `leave_apply`(`slno`,`perid`, `name`,`leavetype`, `purpose`,`dates`, `timestamp`,`status`,`adj`,`cnt`,`lcnt`) VALUES ('$slno','$userid','$name','$leavetype','$purpose','$dates_leave','$timestamp','$cm','null,'$cnt','0')";
    $run=mysqli_query($conn,$sql);
    if($run)
    {
        echo"Leave application sended sucessfully";
    }
 }   //}
    ?>
  
  </div>
</main>

<style>

* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column2 {
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}
.abc
{
    overflow-y: scroll; 
}
/* Clear floats after the columns */
.row2:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}




strong
{
    margin-right:10px;
}
.float-left
{
    float:left;
    margin-bottom:25px;
    margin-left:20px;
}
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
ul li a:hover
{
    text-decoration:none;
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
.card {
  background: #fff;
  border-radius: 2px;
  /*display: inline-block;*/
  height: 300px;
  margin: 1rem;
  position: relative;
  width: 50%;
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
</style>
<footer></footer>
</body>
</html>