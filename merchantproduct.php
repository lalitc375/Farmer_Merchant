<?php
session_start();
if(!isset($_SESSION['contact_no']))
{
header('location:homepage.php');
}

?>
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

  <script>
    function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 80){                            // limit the user from creating fields more than your limits
	for($j=8;$j>=0;$j--)
            {
            var row = table.insertRow(rowCount);
		var colCount = table.rows[$j].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[$j].cells[i].innerHTML;
		}
                }
	}else{
		 alert("Maximum no. of Suppliers is 10");
			   
	}
}

  </script>
  <style>
 
 
 
 
</style>

</head>
<body>
<div class="col-sm-offset-9 col-sm-5" >
<div id="demo" class="row">
<div id="demo" class="col-sm-2">
<div id="demo">
<a class="btn btn-info" href="merchantdashboard.php" role="button">Back</a>
</div>
</div>
<div class="col-sm-1">
<div>
<a class="btn btn-danger" href="logout.php" role="button">Logout</a>
</div>
</div>

</div>
</div>
<div class="col-sm-12">
<br>
<center><h3>Merchant's Selling Products</h3></center>
</div>


<form action="merchantproductdata.php" method="post">
<div class="form-horizontal container col-sm-8 col-sm-offset-4 ">
    
    <table id="dataTable" class="col-sm-6">
        <tr>
        <td><hr></td>
        <td><hr></td>
        </tr>
        <tr>

    <td><label for="SUPPLIER" class="col-sm-2 control-label">Product</label></td>
      <td><input type="text" class="form-control" id="product" placeholder="Product Name" name="product[]" ></td></tr><tr><td><br></td></tr><tr>

    <td><label for="FILE" class="col-sm-2 control-label">Cost(Per Kg) </label></td>
   
      <td><input type="text" class="form-control" id="FILE" placeholder="Cost" name="cost[]" ></td>
   
  </tr><tr><td><br></td></tr><tr>
    
    <td><label for="TOTAL_AMOUNT" class="col-sm-3 control-label">Max Amount(Kg)</label></td>
    
      <td><input type="text" class="form-control" id="TOTAL_AMOUNT" placeholder="Amount" name="amount[]"></td>
   
</tr><tr><td><br></td></tr>
  <tr>
       
    <td><label for="REMARKS" class="col-sm-3 control-label">Location</label></td>
   
      <td><input type="text" class="form-control" id="REMARKS" placeholder="Location" name="location[]"></td>
    
  </tr><tr><td><br></td></tr>
      </table>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      

      <button type="submit" class="btn btn-success" name="submit">Save</button>
      <input type="button" class="btn btn-success" onClick="addRow('dataTable')" value="Add Product"/>
      
    </div>
  </div>
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>