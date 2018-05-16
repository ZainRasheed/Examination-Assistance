<?php
session_start();
if ( !isset ($_SESSION['sess_user']))
die( "not logged in");
include('connection.php');
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
      <li class="active"><a href="index.html">Home</a></li>


<li class ="button"><a href="logout.php"> LOGout</a></li>
<li class ="button"><a href="dept.php">Department</a></li>
    </ul>

  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear">

    <?php
      include("connection.php");
      $query="select * from temp";
      $result=mysqli_query($dbc,$query) or die("Couldn't retrievr from table / Table doesn't exist");
      $count=0;
      $total=0;
    ?>
    The selected paper pattern<br>

    <?php  while($row=mysqli_fetch_array($result)){
      $count = $count + 1;
      $total=$total+($row['noq']*$row['marks']);
    ?>

    <h3><b>Part <?php if ($count==1) echo "A";
                   elseif ($count==2) echo "B";
                   elseif ($count==3) echo "C";
                   elseif ($count==4) echo "D";
                   elseif ($count==5) echo "E";
              ?> :</b></h3>
      <b>Number of questions:</b> <?php echo $row['noq']; ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <b> Marks:</b><?php echo $row['marks']; ?>
      <hr>
      <?php } ?>
      <br>
      <b>Total Marks:</b> <?php echo $total ?>
      <br><br>
      <a href="que_pat_disp2.php">Confirm</a> &emsp;&emsp;&emsp;&emsp; <a onclick="warning()"> Chhhhange</a>


</div>







<div class="wrapper row4">
  <footer id="footer" class="clear">
  <div class="row">








  </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="clear">

    <p class="fl_left">&copy; 2018 Examination Assistance. All Rights Reserved done by IT Group RS</p>

</div>
  </div>
</body>
</html>
<script>
function warning(){
  var parts=<?php echo $count ?>;
  var change=confirm("If you continue The present data will be deleted parts"+parts);
  if (!change) {
    window.location.assign("que_pat_disp.php");
  }
  else {
    window.location.assign("ic_after_login.php?change=1&part="+parts);
  }
}
</script>
