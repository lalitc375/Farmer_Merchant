<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--<title>Bootstrap 101 Template</title>-->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <div class="well" style="text-align: center">
      <h2>Farmer Merchant Connect</h2>
  </div>
  <style>
  .footer {
 
    position:relative;
 
width:100%;
 
right:350px;
	top:420px;
 
}

</style>

</head>
<body>
<div class="col-sm-11" >
<div style="float:right;">
<a class="btn btn-info" href="farmer.php" role="button">Back</a>
</div>
</div>

<div class="col-sm-12">
<br>
<center><h3>Farmer's Registration Page</h3></center>
</div>

<br><br><br><br><br><br><br><br>
<form class="form-horizontal col-sm-5 col-sm-offset-3" action="farmerdata.php" method="post">

 <div class="form-group">
    <label for="inputname" class="col-sm-3 control-label">Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" id="inputname" placeholder="Name" required>
    </div>
  </div>
 <div class="form-group">
    <label for="inputemail" class="col-sm-3 control-label">Email-ID</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" name="email" id="inputemail" placeholder="Email-ID">
    </div>
  </div>
 <div class="form-group">
    <label for="inputmobileno" class="col-sm-3 control-label">Mobile No.</label>
    <div class="col-sm-8">
      <input type="digit" class="form-control" name="mobileno" id="inputmobileno" pattern="[789][0-9]{9}" placeholder="Mobile No" required>
    </div>
  </div>  
 <div class="form-group">
    <label for="inputaddress" class="col-sm-3 control-label">Address</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="address" id="inputaddress" placeholder="Address" required>
    </div>
  </div> 
 <div class="form-group">
    <label for="inputPassword" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-danger pull-right">Sign Up</button>
    </div>
  </div>
</form>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>