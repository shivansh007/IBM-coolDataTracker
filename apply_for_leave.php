<!DOCTYPE html>
<html>
<head>
<title>Apply for Leave</title>
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
					<h1 style="color:white">Apply for leave</h1>
					<hr width="60%">
					<br>
					<div class="form-group">
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
					   			<div class="row">
							  		<div class="col-lg-3"><label for="usr" style="color:white;font-size:125%;">User ID: </label></div>
									<div class="col-lg-8"><input type="text" class="form-control" id="usr" name="usr" required></div>
							  	</div>
							<br>
							<div class="row">
								<div class="col-lg-3"><label for="usr" style="color:white;font-size:125%;">Start Date: </label></div>
								<div class="col-lg-8"><input type="date" class="form-control" id="sdate" name="sdate"  required></div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-3"><label for="usr" style="color:white;font-size:125%;">End Date: </label></div>
								<div class="col-lg-8"><input type="date" class="form-control" id="edate" name="edate" required oninput="fn();"></div>
						  	</div>
							<br>
							<div>
								<input type="submit" name="submit" class="btn btn-primary">
							</div>
						</form>	
					</div>
					<br><br><br>
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
<script>
<?php
	include_once("connection.php");
	if (isset($_POST['submit'])) 
	{
		$id = $_POST['usr'];
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$res = mysqli_query($con , "INSERT INTO tuserleaveinformations(UserID, LeaveStartDate, LeaveEndDate) VALUES ($id,'$sdate','$edate')") or die("Query error");
		echo "document.getElementById('thediv').innerHTML='<br><br><br><br><br><br><br><h1><center>Submitted</center></h1><br><br><br><br><br><br><br>';";
		echo "document.getElementById('thediv').style.color='white'";
	}
?>
</script>