<?php
session_start();
if (isset ($_SESSION['sess_user']))
{
  ?> <script>
        function getit()
        {
          document.getElementById("okbro").innerHTML="Logout";
        }
  </script> <?php
}
//die( "not logged in");
//include('connection.php');
?>
<!DOCTYPE html>

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
      <li class="button"><a id="ch1" href="index.html">Home</a></li>


<li class ="button"><a id="ch2" href="login.php"> LOGIN</a></li>
<li class ="active"><a href="dept.php">Department</a></li>
    </ul>

  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear">

<a href='cse_sub.php'>CSE</a>
<br>
<a href='mec_sub.php'>MEC</a>
<br>
<div id="okbro">
 <h1>gjjgfgfgjjg</h1>
</div>


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
