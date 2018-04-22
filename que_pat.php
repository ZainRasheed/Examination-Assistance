<?php
session_start();
if ( !isset ($_SESSION['sess_user']))
die( "not logged in");
include('connection.php');
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
    xhttp.open("GET", "pat1.html", true);
    xhttp.send();
  }
  function disp2(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("pattern_display").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "pat2.html", true);
    xhttp.send();
  }
  function disp3(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("pattern_display").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "pat3.html", true);
    xhttp.send();
  }
  function disp4(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("pattern_display").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "pat4.html", true);
    xhttp.send();
  }
  function disp5(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("pattern_display").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "pat5.html", true);
    xhttp.send();
  }

</script>


<html>
<head>
  <title>Question Paper Pattern</title>
</head>
<body>
  <label>Select number of parts</label>
  <br>
    <div id="show"><button onclick="Show()">click here</button></div>
    <input type="submit" value="Start" onclick="start()">
  <br>
  <br>
  <div id="pattern_display">
      <br>hrere
  </div>
</body>
</html>
