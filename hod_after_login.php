<?php
session_start();
if (isset ($_SESSION['sess_user']))
{
  ?> <script>
        function getit()
        {
          document.getElementById("ch2").innerHTML="Logout";
          document.getElementById("ch2").href="logout.php";
        }
  </script> <?php
}
//die( "not logged in");
//include('connection.php');
?>

<!DOCTYPE html>
<?php
session_start();
if ( !isset ($_SESSION['sess_user']))
die( "not logged in");
include('connection.php');
if ( !$_SESSION['role']="hod") {
  die("Not Hod");
}
?>
<html>
<head>
<title>Examination Assistance</title>
<meta charset="utf-8">

<link href="layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="clear">

     <div id="logo" class="fl_left">
      <h1><a href="index.html">Examination Assistance</a></h1>
    </div>



  </header>
</div>

<div class="wrapper row2">
  <nav id="mainav" class="clear">

    <ul class="clear">
      <li class="active"><a href="index.html">Home</a></li>


<li class ="button"><a href="login.php"> LOGIN</a></li>
<li class ="button"><a href="dept.php">Department</a></li>
    </ul>

  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear">


<p>


  The Question paper automation is developed to replace the manual setting of the question paper and automate the whole process of getting different unique questions from teachers and generate a randomized, fast and secure question paper.<br>
  The website will allow the respective IC to set the question paper pattern for the course and the IC and teachers are allowed to input their questions according to the question paper pattern set by the IC (assuming the question inputs to be different from different teachers and IC). Viewing and editing of the questions by the HOD, IC and teachers. Finally, automatic question paper generation by the questions that was taken as an input.<br>
  Assuming the questions taken as input from different types of users are different from each other. The question paper pattern is set by the IC, therefore questions can be taken as input only if the IC sets the question paper pattern, hence dependency for taking questions as input. Assuming the profile of the users to be with us.</p>


</div>







<div class="wrapper row4">
  <footer id="footer" class="clear">
  <div class="row">









  </footer>
</div>
</div>
<div class="wrapper row5">
  <div id="copyright" class="clear">

    <p class="fl_left">&copy; 2018 Examination Assistance. All Rights Reserved done by IT Group RS</p>

</div>
  </div>

</html>
