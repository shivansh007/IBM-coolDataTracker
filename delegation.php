<!DOCTYPE html>
<html>
<head>
<title>Delegation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style=" background-image:url(intro-bg.jpg);background-size: cover;">
	<nav class="navbar navbar-inverse">
 		<div class="container-fluid">
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
        			<span class="icon-bar"></span>
			        <span class="icon-bar"></span>                        
      			</button>
     		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">       
      			<ul class="nav navbar-nav">
      				<li><a class="navbar-brand" href="#">coolDataTracker</a></li>
      			</ul>
			    <ul class="nav navbar-nav navbar-right">
        			<li class="active"><a href="#">Home</a></li>
        			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      			</ul>
    		</div>
  		</div>
	</nav>
	<div class="container">
		<div class="row">
		<br><br>
			<div class="col-lg-1"></div>	
			<div class="col-lg-1"></div>		
			<div class="col-lg-1"></div>	
			<div class="col-lg-6" id="thediv" style="background: rgba(0,0,2,0.5);">
					<br><br>
					<center>
						<h1 style="color:white">Delegation</h1>
						<hr width="60%">
						<br>
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
						<div class="form-group">
						  <div class="row">
						  	<div>
						  		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">&nbsp;&nbsp;&nbsp;Team Lead Info&nbsp;&nbsp;&nbsp;</button>
						  		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Team Members Info</button>
						  	</div>
						  </div>
						  <br>
						</div>
						<div class="form-group">
						  <div class="row">
							<div class="col-lg-3"><label for="usr" style="color:white;font-size:125%;">Delegator ID: </label></div>
							<div class="col-lg-8"><input type="text" class="form-control" id="usr" name="drid" required></div>
						  </div>
						</div>
						<br>
						<div class="form-group">
						  <div class="row">
							<div class="col-lg-3"><label for="usr" style="color:white;font-size:125%;">Delegatee ID: </label></div>
							<div class="col-lg-8"><input type="text" class="form-control" id="usr" name="deid" required></div>
						  </div>
						</div>
						<br>
						<div class="form-group">
						  <div class="row">
							<div class="col-lg-3"><label for="usr" style="color:white;font-size:125%;">Delegation Start Date: </label></div>
							<div class="col-lg-8"><input type="date" class="form-control" id="sdate" name="sdate"  required></div>
						  </div>
						</div>
						<div class="form-group">
						  <div class="row">
							<div class="col-lg-3"><label for="usr" style="color:white;font-size:125%;">Delegation End Date: </label></div>
							<div class="col-lg-8"><input type="date" class="form-control" id="edate" name="edate" required oninput="fn();"></div>
						  </div>
						</div>
						<div>
							<input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
						</div>
						</form>
						<br>
			</div>
		</div>
	</div>
	<br><br>
	<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <table class="table">
          	<thead>
		      <tr>
		        <th>User ID</th>
		        <th>Full Name</th>
		      </tr>
    		</thead>
    		<tbody id="thetable2"></tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Team Leader Info</h4>
        </div>
        <div class="modal-body">
          <table class="table">
          	<thead>
		      <tr>
		        <th>Team Lead ID</th>
		        <th>Team Name</th>
		      </tr>
    		</thead>
    		<tbody id="thetable"></tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	<script>
					
					function fn()
					{
						var startdate = document.getElementById('sdate').value;	
						var enddate = document.getElementById('edate').value;
						if (startdate >= enddate) 
						{
						    alert("End date should be greater than Start date!!");
						    document.getElementById('sdate').value = "";
						    document.getElementById('edate').value = "";
						}
					}
	</script>
</body>
</html>

<?php
	require_once('connection.php');
	echo "<script>";
	$res = mysqli_query($con , "SELECT * FROM tsalesteaminformation");
	while($row = mysqli_fetch_array($res))
	{
		$x = $row['TeamLeadID'];
		$y = $row['TeamName'];
		echo "document.getElementById('thetable').innerHTML+='<tr><td>$x</td><td>$y</td></tr>';";
	}
	$res = mysqli_query($con , "SELECT * FROM tuserinformations");
	while($row = mysqli_fetch_array($res))
	{
		$x = $row['ID'];
		$y = $row['FullName'];
		echo "document.getElementById('thetable2').innerHTML+='<tr><td>$x</td><td>$y</td></tr>';";
	}
	if (isset($_POST['submit'])) 
	{
		$drid = $_POST['drid'];
		$deid = $_POST['deid'];
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$res = mysqli_query($con , "INSERT INTO tuserreportingdelegation(delegatorsuserid, delegateesuserid, delegationstartdate, delegationenddate) VALUES ($drid,$deid,$sdate,$edate)") or die("Query error");
		echo "document.getElementById('thediv').innerHTML='<br><br><br><br><br><br><br><h1><center>Submitted</center></h1><br><br><br><br><br><br><br>';";
		echo "document.getElementById('thediv').style.color='white'";
	}
		echo "</script>";
?>