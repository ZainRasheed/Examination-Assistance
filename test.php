<html>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "pat1.php", true);
  xhttp.send();
}

function getit(){
document.getElementById('haha').innerHTML='u dont say';
}
</script>
<body onload="getit()">

<div id="demo">
  <h2>Let AJAX change this text</h2>
  <button type="button" onclick="loadDoc()">Change Content</button>
</div>
<p id="haha">xdcfvgbhnj</p>

</body>
</html>

<?php
include("connection.php");

$q='select 1 from temp limit 1';
$r=mysqli_query($dbc,$q) or die("0");
$ra=mysqli_fetch_array($r) or die("hahaha");
echo $ra[0];
 ?>
