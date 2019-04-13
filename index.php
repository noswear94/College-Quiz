<?php
  
ob_start();
  if(isset($_COOKIE['c_name'])){
    header("Location:home.php");
  }

?>


<!DOCTYPE html>
<html>
<head>
	<title>C programming Quiz</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
  body{
    background:url('images/bg.png');
 
  }
</style>


</head>
	<body>
    <header>
  <img class="img-responsive" src="images/header.jpg">
</header>
		<div class="container">
			<div class="row">
        
        <div class="col-md-6">
        <h1>C Programming Quiz</h1><h3>Hosted by Optimist Society</h3>
        </div>

        <div class="col-md-6">
          <img class="img-responsive" src="images/optimist-logo.jpg" style="width: 120px;height: 120px;float:right;">
        </div>

      </div>
  <h2>Please Fill the form</h2>
  <form action="home.php" method="post">
    <div class="form-group">
      <label for="text">Name of Student :</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="text">Roll Number :</label>
      <input type="text" class="form-control" id="roll" placeholder="Enter Roll No." name="roll">
    </div>
    <div class="form-group">
      <label for="text">Branch :</label>
      <input type="text" class="form-control" id="branch" placeholder="Enter Branch." name="branch">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<h3>Instructions : -</h3>
<h4>1.Total number of questions : 30.</h4>
<h4>2.Time alloted : 60 minutes.</h4>
<h4>3.DO NOT refresh the page.</h4>
<h4>4.All the best :-).</h4>

</div>

	</body>
</html>