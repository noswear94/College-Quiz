<?php
ob_start();

if($_COOKIE['c_name']==""){
	if ( $_POST['name']=="") {		
	header("Location:index.php");
	}
}

if(!isset($_COOKIE['c_name'])){
$name =	$_POST['name'];
$roll = $_POST['roll'];
$branch = $_POST['branch'];



setcookie("c_name",$name , time() + ( 60 * 75 ), "/");
setcookie("c_roll",$roll , time() + ( 60 * 75 ), "/");
setcookie("c_branch",$branch , time() + ( 60 * 75 ), "/");


}
else{
	$name=$_COOKIE['c_name'];
	$roll=$_COOKIE['c_roll'];
	$branch=$_COOKIE['c_branch'];
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Online Quiz</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style type="text/css">
	body{
	background: #f2f2f2;
	
		}


	.qa{
		 position:relative;
		 background:#e0f4d9;
		 height:480px;
		 padding:20px;
		 margin-top:20px;
		 box-shadow:inset 0px 0px 10px 3px #ace09a ;
		 border-radius:10px;		 
		}
	input[type=radio]{transform:scale(1.5);}
</style>

</head>
<body>
<!--Navigation-->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" data-spy="affix">
  <a class="navbar-brand" href="#">Optimist Society </a> 
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" >Welcome to the C programming Quiz </a>
    </li>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
    <li class="nav-item" >
      <a class="nav-link"  >Time left : </a>
    </li>
    <li class="nav-item" >
      <a class="nav-link" id="timer"></a>
    </li>
    
    <li class="nav-item" >
      <a class="nav-link" >Name : <?php echo $name;  ?> </a>
    </li>

        <li class="nav-item" >
      <a class="nav-link" >Roll No : <?php echo $roll;  ?> </a>
    </li>

    <li class="nav-item" >
      <a class="nav-link" >Branch : <?php echo $branch;  ?> </a>
    </li>
   
    </ul>
</nav>
<!--Navigation-->

<br/><br/><br/>
<div class="container">
<form action="grade.php" method="post" name="quiz">
		<ol>
		<label id="1"></label>
		<br/><br/>

		<li class="qa">

			<div>
			<h3>The break statement is used to exit from ?</h3>
			<br>

			<input type="radio" name="ques1" value="A">
			<label>A. If statement</label><br/>
			<input type="radio" name="ques1" value="B">
			<label>B. Structure</label><br>
			<input type="radio" name="ques1" value="C">
			<label>C. Array</label><br>
			<input type="radio" name="ques1" value="D">
			<label>D. No option valid</label>
			</div>
			<br><br>
			<a href="javascript:void(0)"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#2" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="2"></label>
		<br><br><br>

		<li class="qa">

			<div>
			<h3>Which escape charecter can be used to hear a beep from speaker ?</h3>
			<br>
			<input type="radio" name="ques2" value="A">
			<label>A. \a</label><br/>
			<input type="radio" name="ques2" value="B">
			<label>B. \b</label><br>
			<input type="radio" name="ques2" value="C">
			<label>C. \n</label><br>
			<input type="radio" name="ques2" value="D">
			<label>D. \m</label>
			</div>
			<br><br>
			<a href="#1"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#3" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="3"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>The keyword used to transfer control from a function back to the calling function is ?</h3>
			<br>
			<input type="radio" name="ques3" value="A">
			<label>A. switch</label><br/>
			<input type="radio" name="ques3" value="B">
			<label>B. goto</label><br>
			<input type="radio" name="ques3" value="C">
			<label>C. return</label><br>
			<input type="radio" name="ques3" value="D">
			<label>D. go back</label>
			</div>
			<br><br>
			<a href="#2"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#4" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="4"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>Which is the only function all C programs must contain?</h3>
			<br>
			<input type="radio" name="ques4" value="A">
			<label>A. start()</label><br/>
			<input type="radio" name="ques4" value="B">
			<label>B. system()</label><br>
			<input type="radio" name="ques4" value="C">
			<label>C. main()</label><br>
			<input type="radio" name="ques4" value="D">
			<label>D. printf()</label>
			</div>
			<br><br>
			<a href="#3"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#5" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="5"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>An array elements are always stored in ________ memory locations.</h3>
			<br>
			<input type="radio" name="ques5" value="A">
			<label>A. Sequential</label><br/>
			<input type="radio" name="ques5" value="B">
			<label>B. Random</label><br>
			<input type="radio" name="ques5" value="C">
			<label>C. Sequential as well as Random</label><br>
			<input type="radio" name="ques5" value="D">
			<label>D. None of the Above</label>
			</div>
			<br><br>
			<a href="#4"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#6" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="6"></label>
		<br><br><br>

		<li class="qa">

			<div>
			<h3>C was primarily developed as ?</h3>
			<br>
			<input type="radio" name="ques6" value="A">
			<label>A. System programming language</label><br/>
			<input type="radio" name="ques6" value="B">
			<label>B. General purpose language</label><br>
			<input type="radio" name="ques6" value="C">
			<label>C. Data processing language</label><br>
			<input type="radio" name="ques6" value="D">
			<label>D. None of the Above</label>
			</div>
			<br><br>
			<a href="#5"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#7" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		
		<label id="7"></label>
		<br><br><br>

			<li class="qa">

			<div><h3>
			Find the output of the following program? </h3>
				 <br> <code>
				 void main()<br>
{ <br>
   int i=53, j=65;<br>
   printf("%d %d", j, i);<br>
}</code>
			<br><br>
			<input type="radio" name="ques7" value="A">
			<label>A. 65 65</label><br/>
			<input type="radio" name="ques7" value="B">
			<label>B. 65 53</label><br>
			<input type="radio" name="ques7" value="C">
			<label>C. 53 65</label><br>
			<input type="radio" name="ques7" value="D">
			<label>D. Syntax error</label>
			</div>
			<br><br>
			<a href="#6"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#8" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="8"></label>
		<br><br><br>
		

		<li class="qa">

			<div>
			<h3>Which one of the following is not a valid identifier?</h3>
			<br>
			<input type="radio" name="ques8" value="A">
			<label>A. _examveda</label><br/>
			<input type="radio" name="ques8" value="B">
			<label>B. 1examveda</label><br>
			<input type="radio" name="ques8" value="C">
			<label>C. exam_veda</label><br>
			<input type="radio" name="ques8" value="D">
			<label>D. examveda1</label>
			</div>
			<br><br>
			<a href="#7"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#9" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="9"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>Which of the following cannot be checked in a switch-case statement ?</h3>
			<br>
			<input type="radio" name="ques9" value="A">
			<label>A. enum</label><br/>
			<input type="radio" name="ques9" value="B">
			<label>B. int</label><br>
			<input type="radio" name="ques9" value="C">
			<label>C. float</label><br>
			<input type="radio" name="ques9" value="D">
			<label>D. char</label>
			</div>
			<br><br>
			<a href="#8"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#10" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="10"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>Which is value <code>float a=5/2;</code> ?</h3>
			<br>
			<input type="radio" name="ques10" value="A">
			<label>A. 2.5</label><br/>
			<input type="radio" name="ques10" value="B">
			<label>B. 2.000</label><br>
			<input type="radio" name="ques10" value="C">
			<label>C. 2.5000</label><br>
			<input type="radio" name="ques10" value="D">
			<label>D. 2</label>
			</div>
			<br><br>
			<a href="#9"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#11" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="11"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>Which is correct sequence?</h3>
			<br>
			<input type="radio" name="ques11" value="A">
			<label>A. link,load,compile,execute</label><br/>
			<input type="radio" name="ques11" value="B">
			<label>B. code,compile,link,execute,load</label><br>
			<input type="radio" name="ques11" value="C">
			<label>C. code,compile,link,load,execute</label><br>
			<input type="radio" name="ques11" value="D">
			<label>D. compile,code,link,load,execute</label>
			</div>
			<br><br>
			<a href="#10"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#12" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="12"></label>
		<br><br><br>

		<li class="qa">

			<div>
			<h3>Which is return type of ftell() function ?</h3>
			<br>
			<input type="radio" name="ques12" value="A">
			<label>A. double</label><br/>
			<input type="radio" name="ques12" value="B">
			<label>B. float</label><br>
			<input type="radio" name="ques12" value="C">
			<label>C. long</label><br>
			<input type="radio" name="ques12" value="D">
			<label>D. int</label>
			</div>
			<br><br>
			<a href="#11"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#13" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="13"></label>
		<br><br><br>

		<li class="qa">

			<div>
			<h3>Give the output of the program</h3>
			<code>
				void main()<br>
{<br>
int y=10;<br>
if(y++>9 && y++!=10 && y++>11)<br>
printf("%d",y);<br>
else<br>
printf("%d",y);<br>
}<br>
			</code>
			<br>
			<input type="radio" name="ques13" value="A">
			<label>A. 11</label><br/>
			<input type="radio" name="ques13" value="B">
			<label>B. 12</label><br>
			<input type="radio" name="ques13" value="C">
			<label>C. 13</label><br>
			<input type="radio" name="ques13" value="D">
			<label>D. 14</label>
			</div>
			<a href="#12"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#14" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="14"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>Is the following statement a declaration or definition <code>extern int i;</code>?</h3>
			<br>
			<input type="radio" name="ques14" value="A">
			<label>A. Error</label><br/>
			<input type="radio" name="ques14" value="B">
			<label>B. Definition</label><br>
			<input type="radio" name="ques14" value="C">
			<label>C. Declartion</label><br>
			<input type="radio" name="ques14" value="D">
			<label>D. function</label>
			</div>
			<br><br>
			<a href="#13"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#15" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="15"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>What will be printed after execution of the following program code?</h3>
			<code>
				main()<br>
{<br>
      printf("\ab"); <br>
      printf("\si"); <br>
      printf("\ha"); <br>
}
			</code>
			<br>
			<input type="radio" name="ques15" value="A">
			<label>A. absiha</label><br/>
			<input type="radio" name="ques15" value="B">
			<label>B. asbiha</label><br>
			<input type="radio" name="ques15" value="C">
			<label>C. hbasi</label><br>
			<input type="radio" name="ques15" value="D">
			<label>D. hai</label>
			</div>
			<br><br>
			<a href="#14"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#16" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="16"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>Which of the following is a scalar data type ?</h3>
			<br>
			<input type="radio" name="ques16" value="A">
			<label>A. float</label><br/>
			<input type="radio" name="ques16" value="B">
			<label>B. array</label><br>
			<input type="radio" name="ques16" value="C">
			<label>C. union</label><br>
			<input type="radio" name="ques16" value="D">
			<label>D. pointer</label>
			</div>
			<br><br>
			<a href="#15"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#17" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="17"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>What will be the output of the program?</h3>
			<br>
			<input type="radio" name="ques17" value="A">
			<label>A. 200</label><br/>
			<input type="radio" name="ques17" value="B">
			<label>B. 30</label><br>
			<input type="radio" name="ques17" value="C">
			<label>C. 100</label><br>
			<input type="radio" name="ques17" value="D">
			<label>D. 500</label>
			</div>
			<br><br>
			<a href="#16"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#18" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="18"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>Which of the following statements are correct about the function?</h3>
			<code>
				long fun(int num)<br>
{<br>
    int i;<br>
    long f=1;<br>
    for(i=1; i<=num; i++)<br>
        f = f * i;<br>
    return f;<br>
}<br>
			</code>
			<br>
			<input type="radio" name="ques18" value="A">
			<label>A. The function calculates the value of 1 raised to power num.
</label><br/>
			<input type="radio" name="ques18" value="B">
			<label>B. The function calculates the square root of an integer
</label><br>
			<input type="radio" name="ques18" value="C">
			<label>C. The function calculates the factorial value of an integer
</label><br>
			<input type="radio" name="ques18" value="D">
			<label>D. None of above
</label>
			</div>
			
			<a href="#17"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#19" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="19"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>How will you free the allocated memory ?</h3>
			<br>
			<input type="radio" name="ques19" value="A">
			<label>A. remove(var-name);
</label><br/>
			<input type="radio" name="ques19" value="B">
			<label>B. free(var-name);
</label><br>
			<input type="radio" name="ques19" value="C">
			<label>C. delete(var-name);
</label><br>
			<input type="radio" name="ques19" value="D">
			<label>D. dalloc(var-name);
</label>
			</div>
			<br><br>
			<a href="#18"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#20" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="20"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>	
How many times the <code>while</code> loop will get executed if a <code>short int</code> is 2 byte wide?</h3>
			<br>
			<input type="radio" name="ques20" value="A">
			<label>A. Infinite times</label><br/>
			<input type="radio" name="ques20" value="B">
			<label>B. 255 times</label><br>
			<input type="radio" name="ques20" value="C">
			<label>C. 256 times</label><br>
			<input type="radio" name="ques20" value="D">
			<label>D. 254 times</label>
			</div>
			<br><br>
			<a href="#19"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#21" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="21"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>What will be the output of the program?</h3>
			<code>
				#include&lt;stdio.h><br>
int main()<br>
{<br>
    int i=2;<br>
    printf("%d, %d\n", ++i, ++i);<br>
    return 0;<br>
}<br>
			</code>
			<br>
			<input type="radio" name="ques21" value="A">
			<label>A. 3, 4</label><br/>
			<input type="radio" name="ques21" value="B">
			<label>B. 4, 3</label><br>
			<input type="radio" name="ques21" value="C">
			<label>C. 4, 4</label><br>
			<input type="radio" name="ques21" value="D">
			<label>D. Output may vary from compiler to compiler</label>
			</div>
			<br><br>
			<a href="#20"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#22" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="22"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>How many times the program will print "JSS" ?</h3>
			<code>
				#include&lt;stdio.h><br>
<br>
int main()<br>
{<br>
    printf("JSS");<br>
    main();<br>
    return 0;<br>
}<br>
			</code>
			<br>
			<input type="radio" name="ques22" value="A">
			<label>A. Infinite times</label><br/>
			<input type="radio" name="ques22" value="B">
			<label>B. 32767 times</label><br>
			<input type="radio" name="ques22" value="C">
			<label>C. 65535 times</label><br>
			<input type="radio" name="ques22" value="D">
			<label>D. Till stack overflows</label>
			</div>
			<a href="#21"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#23" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="23"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>Which statement will you add in the following program to work it correctly?</h3>
			<code>
				#include&lt;stdio.h><br>
int main()<br>
{<br>
    printf("%f\n", log(36.0));<br>
    return 0;<br>
}<br>
			</code>
			<br>
			<input type="radio" name="ques23" value="A">
			<label>A. <code>#include&lt;conio.h></code></label><br/>
			<input type="radio" name="ques23" value="B">
			<label>B. <code>#include&lt;math.h></code></label><br>
			<input type="radio" name="ques23" value="C">
			<label>C. <code>#include&lt;stdlib.h></code></label><br>
			<input type="radio" name="ques23" value="D">
			<label>D. <code>#include&lt;dos.h></code></label>
			</div>
			<br><br>
			<a href="#22"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#24" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="24"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>What is the output of the following code snippet?</h3>
			<code>
				#include&lt;stdio.h><br>

main() <br>
{ <br>
   const int a = 5; <br>
<br>   
   a++; <br>
   printf("%d", a); <br>
}<br>
			</code>
			<br>
			<input type="radio" name="ques24" value="A">
			<label>A. 5</label><br/>
			<input type="radio" name="ques24" value="B">
			<label>B. 6</label><br>
			<input type="radio" name="ques24" value="C">
			<label>C. Runtime Error</label><br>
			<input type="radio" name="ques24" value="D">
			<label>D. Compile Error</label>
			</div>
			
			<a href="#23"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#25" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="25"></label>
		<br><br><br>

		<li class="qa">

			<div>
			<h3>Which header file supports the functions - malloc() and calloc()?</h3>
			<br>
			<input type="radio" name="ques25" value="A">
			<label>A. stdlib.h</label><br/>
			<input type="radio" name="ques25" value="B">
			<label>B. memory.h</label><br>
			<input type="radio" name="ques25" value="C">
			<label>C. math.h</label><br>
			<input type="radio" name="ques25" value="D">
			<label>D. stdio.h</label>
			</div>
			
			<a href="#24"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#26" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="26"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>What will be the output of the program if value 25 given to scanf()?</h3>
			<code>
				#include&lt;stdio.h><br>
<br>
int main()<br>
{<br>
    int i;<br>
    printf("%d\n", scanf("%d", &i));<br>
    return 0;<br>
}<br>
			</code>
			<br>
			<input type="radio" name="ques26" value="A">
			<label>A. 25</label><br/>
			<input type="radio" name="ques26" value="B">
			<label>B. 2</label><br>
			<input type="radio" name="ques26" value="C">
			<label>C. 1</label><br>
			<input type="radio" name="ques26" value="D">
			<label>D. 5</label>
			</div>
			<a href="#25"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#27" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="27"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>Which of the statements is correct about the program?</h3>
			<code>
				#include&lt;stdio.h><br>
<br>
int main()<br>
{<br>
    int arr[3][3] = {1, 2, 3, 4};<br>
    printf("%d\n", *(*(*(arr))));<br>
    return 0;<br>
}<br>
			</code>
			<br>
			<input type="radio" name="ques27" value="A">
			<label>A. Output: Garbage value
</label><br/>
			<input type="radio" name="ques27" value="B">
			<label>B. Output: 1
</label><br>
			<input type="radio" name="ques27" value="C">
			<label>C. Output: 3
</label><br>
			<input type="radio" name="ques27" value="D">
			<label>D. Error: Invalid indirection
</label>
			</div>
			<a href="#26"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#28" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="28"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>	
What will happen if in a C program you assign a value to an array element whose subscript exceeds the size of array?</h3>
			<br>
			<input type="radio" name="ques28" value="A">
			<label>A. The element will be set to 0.</label><br/>
			<input type="radio" name="ques28" value="B">
			<label>B. The compiler would report an error.</label><br>
			<input type="radio" name="ques28" value="C">
			<label>C. The program may crash if some important data gets overwritten.</label><br>
			<input type="radio" name="ques28" value="D">
			<label>D. The array size would appropriately grow.</label>
			</div>
			<br><br>
			<a href="#27"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#29" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="29"></label>
		<br><br><br>


		<li class="qa">

			<div>
			<h3>	
Which of the following is not logical operator?</h3>
			<br>
			<input type="radio" name="ques29" value="A">
			<label>A. &</label><br/>
			<input type="radio" name="ques29" value="B">
			<label>B. &&</label><br>
			<input type="radio" name="ques29" value="C">
			<label>C. ||</label><br>
			<input type="radio" name="ques29" value="D">
			<label>D. !</label>
			</div>
			<br><br>
			<a href="#28"><input type="button" class="btn btn-success" value="Prev"></a>
			<a href="#30" style="float: right;"	><input type="button" class="btn btn-success" value="Next"></a>
		</li>
		<label id="30"></label>
		<br><br><br>


		<li class="qa" >
			<div><h3>What error if any will this program generate</h3>
			<code>
				#include&lt;stdio.h> <br>
				int main()<br>
				{<br>
				    int n = 0, y = 1;<br>
				    y == 1 ? n=0 : n=1;<br>
				    if(n)<br>
				        printf("Yes\n");<br>
				    else<br>
				        printf("No\n");<br>
				    return 0;<br>
				}<br>
			</code>
			<br>
			<input type="radio"  name="ques30" value="A">
			<label>A. Error: Declaration terminated incorrectly</label><br/>
			<input type="radio" name="ques30" value="B">
			<label>B. Error: Syntax error</label><br/>
			<input type="radio" name="ques30" value="C">
			<label>C. Error: Lvalue required</label><br/>
			<input type="radio" name="ques30" value="D">
			<label>D. None of above</label>
			</div>
		</li>


	</ol>
	<br>
	<center>
		<input id="final" type="submit" name="submit" value="Final Submit" class="btn-success btn" style="width: 80%;" >	
	</center>
	</form>

	</div>

<br><br><br><br>



<nav  class="navbar fixed-bottom navbar-expand-sm navbar-dark footy" style="background-color: #e3f2fd;">
	Question map:
  <a href="#1" id="q1n" >1</a>
  <a href="#2"	id="q2n" >2</a>
  <a href="#3"	id="q3n" >3</a>
  <a href="#4" id="q4n">4</a>
  <a href="#5" id="q5n">5</a>
  <a href="#6" id="q6n">6</a>
  <a href="#7" id="q7n">7</a>
  <a href="#8" id="q8n">8</a>
  <a href="#9" id="q9n">9</a>
  <a href="#10" id="q10n">10</a>
  <a href="#11" id="q11n">11</a>
  <a href="#12" id="q12n">12</a>
  <a href="#13" id="q13n">13</a>
  <a href="#14" id="q14n">14</a>
  <a href="#15" id="q15n">15</a>
  <a href="#16" id="q16n">16</a>
  <a href="#17" id="q17n">17</a>
  <a href="#18" id="q18n">18</a>
  <a href="#19" id="q19n">19</a>
  <a href="#20" id="q20n">20</a>
  <a href="#21" id="q21n">21</a>
  <a href="#22" id="q22n">22</a>
  <a href="#23" id="q23n">23</a>
  <a href="#24" id="q24n">24</a>
  <a href="#25" id="q25n">25</a>
  <a href="#26" id="q26n">26</a>
  <a href="#27" id="q27n">27</a>
  <a href="#28" id="q28n">28</a>
  <a href="#29" id="q29n">29</a>
  <a href="#30" id="q30n">30</a>
  <a href="#final" id="sub">Submit</a>
  
</nav>s

</body>
<script type="text/javascript">
    window.onbeforeunload = function() {
        return "Dude, are you sure you want to leave? Think of the kittens!";
    }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--Timer-->
<script>
	document.getElementById('timer').innerHTML =  60 + ":" + 00;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  //if(m<0){alert('timer completed')}
  
  document.getElementById('timer').innerHTML = 
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script>

<script type="text/javascript">
	$(document).ready(function() {
    $('input:radio[name=ques1]').change(function() {
        if (this.value)
                $('#q1n').css('background-color', 'green');
            	$('#q1n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques2]').change(function() {
        if (this.value)
                $('#q2n').css('background-color', 'green');
            	$('#q2n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques3]').change(function() {
        if (this.value)
                $('#q3n').css('background-color', 'green');
            	$('#q3n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques4]').change(function() {
        if (this.value)
                $('#q4n').css('background-color', 'green');
            	$('#q4n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques5]').change(function() {
        if (this.value)
                $('#q5n').css('background-color', 'green');
            	$('#q5n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques6]').change(function() {
        if (this.value)
                $('#q6n').css('background-color', 'green');
            	$('#q6n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques7]').change(function() {
        if (this.value)
                $('#q7n').css('background-color', 'green');
            	$('#q7n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques8]').change(function() {
        if (this.value)
                $('#q8n').css('background-color', 'green');
            	$('#q8n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques9]').change(function() {
        if (this.value)
                $('#q9n').css('background-color', 'green');
            	$('#q9n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques10]').change(function() {
        if (this.value)
                $('#q10n').css('background-color', 'green');
            	$('#q10n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques11]').change(function() {
        if (this.value)
                $('#q11n').css('background-color', 'green');
            	$('#q11n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques12]').change(function() {
        if (this.value)
                $('#q12n').css('background-color', 'green');
            	$('#q12n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques13]').change(function() {
        if (this.value)
                $('#q13n').css('background-color', 'green');
            	$('#q13n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques14]').change(function() {
        if (this.value)
                $('#q14n').css('background-color', 'green');
            	$('#q14n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques15]').change(function() {
        if (this.value)
                $('#q15n').css('background-color', 'green');
            	$('#q15n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques16]').change(function() {
        if (this.value)
                $('#q16n').css('background-color', 'green');
            	$('#q16n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques17]').change(function() {
        if (this.value)
                $('#q17n').css('background-color', 'green');
            	$('#q17n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques18]').change(function() {
        if (this.value)
                $('#q18n').css('background-color', 'green');
            	$('#q18n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques20]').change(function() {
        if (this.value)
                $('#q20n').css('background-color', 'green');
            	$('#q20n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques21]').change(function() {
        if (this.value)
                $('#q21n').css('background-color', 'green');
            	$('#q21n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques22]').change(function() {
        if (this.value)
                $('#q22n').css('background-color', 'green');
            	$('#q22n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques23]').change(function() {
        if (this.value)
                $('#q23n').css('background-color', 'green');
            	$('#q23n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques24]').change(function() {
        if (this.value)
                $('#q24n').css('background-color', 'green');
            	$('#q24n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques25]').change(function() {
        if (this.value)
                $('#q25n').css('background-color', 'green');
            	$('#q25n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques26]').change(function() {
        if (this.value)
                $('#q26n').css('background-color', 'green');
            	$('#q26n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques27]').change(function() {
        if (this.value)
                $('#q27n').css('background-color', 'green');
            	$('#q27n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques28]').change(function() {
        if (this.value)
                $('#q28n').css('background-color', 'green');
            	$('#q28n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques29]').change(function() {
        if (this.value)
                $('#q29n').css('background-color', 'green');
            	$('#q29n').css('color', 'white');
            	
         
    });
    $('input:radio[name=ques30]').change(function() {
        if (this.value)
                $('#q30n').css('background-color', 'green');
            	$('#q30n').css('color', 'white');
            	
         
    });
    $('input:radio[name=submit]').change(function() {
        if (this.value)
                $('#sub').css('background-color', 'green');
            	$('#sub').css('color', 'white');
            	
         
    });
 
});
</script>


<script type="text/javascript">
        var allRadios = document.getElementsByName('ques1');
        var booRadio;
        var x = 0;
        for(x = 0; x < allRadios.length; x++){

            allRadios[x].onclick = function() {
                if(booRadio == this){
                    this.checked = false;
                    booRadio = null;
                }else{
                    booRadio = this;
                }
            };
        }
    </script>



</html>