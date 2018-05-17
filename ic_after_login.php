<?php
session_start();
if ( !isset ($_SESSION['sess_user']))
die( "not logged in");
include('connection.php');
if($_GET['change']){
  $query="drop table temp";
  mysqli_query($dbc,$query) or die("Couldn't drop table");
  for ($i=1; $i <= $_GET['part']; $i++) {
   if ($i==1) $table_name="a";
    elseif ($i==2) $table_name="b";
    elseif ($i==3) $table_name="c";
    elseif ($i==4) $table_name="d";
    elseif ($i==5) $table_name="e";
    $query="drop table p".$table_name."";
    mysqli_query($dbc,$query) or die("Couldn't drop part table");
  }
}

$query="select 1 from temp limit 1";
//$row=mysqli_fetch_array($result);
if ($result=mysqli_query($dbc,$query)) {
 header("location:que_pat_disp.php");
}

?>
<script>

  function Show(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("show").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "sel_pattern.html", true);
    xhttp.send();
  }

  function start(){
    var patnum=document.getElementById("select_pattern").elements['parts'].value;
    if (patnum==1) {
      disp1();
    }
    else if (patnum==2) {
      disp2();
    }
    else if (patnum==3) {
      disp3();
    }
    else if (patnum==4) {
      disp4();
    }
    else if(patnum==5) {
      disp5();
    }
  }

  function disp1(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("pattern_display").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "pat1.php", true);
    xhttp.send();
  }
  function disp2(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("pattern_display").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "pat2.php", true);
    xhttp.send();
  }
  function disp3(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("pattern_display").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "pat3.php", true);
    xhttp.send();
  }
  function disp4(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("pattern_display").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "pat4.php", true);
    xhttp.send();
  }
  function disp5(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("pattern_display").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "pat5.php", true);
    xhttp.send();
  }

</script>
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
      <li class="active"><a href="index.html">Home</a></li>


<li class ="button"><a href="logout.php"> Logout</a></li>
<li class ="button"><a href="dept.php">Department</a></li>
    </ul>

  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear">
<style>
#ic_info
{
  float:right;
}
</style>

<div id="ic_info">

<?php
$n= $_SESSION['sess_name'];
echo "Name: $n<br>";
$id= $_SESSION['sess_user'];
echo "ID No: $id<br>";
$s= $_SESSION['sess_sub'];
echo "Course Name: $s<br>";
 ?>
</div>

    <label>Select Number of Parts</label>
    <br>
      <div id="show"><button onclick="Show()">Select </button></div>
      <br>
      <input type="submit" value="Start" onclick="start()">
    <br>
    <br>
    <div id="pattern_display">
        here
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
