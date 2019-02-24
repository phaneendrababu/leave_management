<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Leave Management</title>
  
  
  <link rel='stylesheet prefetch' href='bootstrap.min.css'>

      <link rel="stylesheet" href="date.css">

  
</head>

<body>

  <div class="container">
      <div class="row">
          <div class=="col-md-6">
	<h3>Select the date(s) that you want to take leave</h3>
	    </div>
	   </div>
	   <div class="row">
          <div class=="col-md-4">
    <form method="post" action="faculty_apply_leave.php">          
	<input type="text" name="subdates" class="form-control date" placeholder="select the date(s) that you want to take leave">
	    </div>
	   </div>
	   <div class="row">
          <div class=="col-md-4">
	<button type="submit" name="selcdate" class="btn btn-primary" >SUBMIT</button>
	    </div>
	   </div>
</div>
  <script src='jquery.min.js'></script>
<script src='bootstrap-datepicker.js'></script>

  

    <script src="date.js"></script>




</body>

</html>
