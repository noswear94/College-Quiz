<?php
ob_start();

if(!isset($_COOKIE['c_name'])){
   header('Location:index.php');
}

   $con=mysqli_connect("localhost","root","","quiz");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

    $name=$_COOKIE['c_name'];
    $roll=$_COOKIE['c_roll'];
    $branch=$_COOKIE['c_branch'];



?>











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>C Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body >
    <center>
	<div id="page-wrap" class="container">
            <br><br>
		<h1>Final Quiz Score</h1>
		<hr width="80%">
        <?php

            echo "<h3>Name : ".$name."</h3>";

            echo "<h3>Roll No : ".$roll."</h3>";

            echo "<h3>Branch : ".$branch."</h3>";
            
            error_reporting(E_ERROR | E_PARSE);
            
            $answer1 = $_POST['ques1'];
            $answer2 = $_POST['ques2'];
            $answer3 = $_POST['ques3'];
            $answer4 = $_POST['ques4'];
            $answer5 = $_POST['ques5'];
            $answer6 = $_POST['ques6'];
            $answer7 = $_POST['ques7'];
            $answer8 = $_POST['ques8'];
            $answer9 = $_POST['ques9'];
            $answer10 = $_POST['ques10'];
            $answer11 = $_POST['ques11'];
            $answer12 = $_POST['ques12'];
            $answer13 = $_POST['ques13'];
            $answer14 = $_POST['ques14'];
            $answer15 = $_POST['ques15'];
            $answer16 = $_POST['ques16'];
            $answer17 = $_POST['ques17'];
            $answer18 = $_POST['ques18'];
            $answer19 = $_POST['ques19'];
            $answer20 = $_POST['ques20'];
            $answer21 = $_POST['ques21'];
            $answer22 = $_POST['ques22'];
            $answer23 = $_POST['ques23'];
            $answer24 = $_POST['ques24'];
            $answer25 = $_POST['ques25'];
            $answer26 = $_POST['ques26'];
            $answer27 = $_POST['ques27'];
            $answer28 = $_POST['ques28'];
            $answer29 = $_POST['ques29'];
            $answer30 = $_POST['ques30'];

        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "B") { $totalCorrect++; }
            if ($answer8 == "C") { $totalCorrect++; }
            if ($answer9 == "C") { $totalCorrect++; }
            if ($answer10 == "A") { $totalCorrect++; }
            if ($answer11 == "C") { $totalCorrect++; }
            if ($answer12 == "C") { $totalCorrect++; }
            if ($answer13 == "A") { $totalCorrect++; }
            if ($answer14 == "C") { $totalCorrect++; }
            if ($answer15 == "A") { $totalCorrect++; }
            if ($answer16 == "A") { $totalCorrect++; }
            if ($answer17 == "B") { $totalCorrect++; }
            if ($answer18 == "C") { $totalCorrect++; }
            if ($answer19 == "B") { $totalCorrect++; }
            if ($answer20 == "B") { $totalCorrect++; }
            if ($answer21 == "D") { $totalCorrect++; }
            if ($answer22 == "D") { $totalCorrect++; }
            if ($answer23 == "B") { $totalCorrect++; }
            if ($answer24 == "D") { $totalCorrect++; }
            if ($answer25 == "A") { $totalCorrect++; }
            if ($answer26 == "C") { $totalCorrect++; }
            if ($answer27 == "D") { $totalCorrect++; }
            if ($answer28 == "C") { $totalCorrect++; }
            if ($answer29 == "A") { $totalCorrect++; }
            if ($answer30 == "C") { $totalCorrect++; }

                        
        echo "<br><div id='results' class='btn btn-success ' style='font-size:20px;' >$totalCorrect / 30 Correct</div>";

        $query="INSERT INTO students(id,name,roll,branch,marks) values ('','$name','$roll','$branch','$totalCorrect')";

        $insert1=mysqli_query($con, $query);

        setcookie("c_branch","" , time() - ( 60 * 75 ), "/");

        setcookie("c_name","" , time() - ( 60 * 75 ), "/");

        setcookie("c_roll","" , time() - ( 60 * 75 ), "/");

        ?>
	
	</div>

    <br>
    <br>
        <a href="index.php"><button class="btn-primary btn">Start New Test</button></a>

	</center>

</body>

</html>