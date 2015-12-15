
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
 
    position:absolute;
 
    height:20px;
 right:600px;
    bottom:0px;
	top:500px;
 
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
<center><h3>Farmer's Login Page</h3></center>
</div>
<br><br><br><br><br><br><br><br>
<form class="form-horizontal col-sm-5 col-sm-offset-3" action="farmerlogindata.php" method="post">
  
 <div class="form-group">
    <label for="inputmobileno" class="col-sm-3 control-label">Mobile No.</label>
    <div class="col-sm-8">
      <input type="digit" class="form-control" name="mobileno"  id="inputmobileno" pattern="[789][0-9]{9}" placeholder="Mobile No" required>
    </div>
  </div> 
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-danger pull-right">Log in</button>
    </div>
  </div>
</form>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>