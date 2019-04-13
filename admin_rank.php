
<?php
   $con=mysqli_connect("localhost","root","","quiz");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Rank List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<br>
  <h2>Rank List of Students</h2>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Roll No.</th>
        <th>Branch</th>
        <th>Marks</th>
      </tr>
    </thead>
    <tbody>

    	<?php
    		$query="Select * from students  order by marks desc";
    		$run=mysqli_query($con,$query);
    		 while($fetch=mysqli_fetch_array($run)){
		    echo "<tr>";
		    echo    "<td>".$fetch['name']."</td>";
		    echo    "<td>".$fetch['roll']."</td>";
		    echo 	"<td>".$fetch['branch']."</td>";
			echo    "<td>".$fetch['marks']."</td>";
			echo "</tr>";
      }
    	?>

      
    </tbody>
  </table>
</div>
<br><br>
<center><h3>By Optimist Society</h3></center>
</body>
</html>