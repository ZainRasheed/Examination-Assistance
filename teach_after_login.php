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
?>

<!DOCTYPE html>
<?php
if ( !isset ($_SESSION['sess_user']))
die( "not logged in");
include('connection.php');
if ( !$_SESSION['role']=="teach") {
  die("Not a teacher");
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
      <li class="active"><a href="teach_after_login.php">Home</a></li>


<li class ="button"><a id="ch1" href="login.php"> LOGIN</a></li>
<li class ="button"><a href="dept.php">Department</a></li>
    </ul>

  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear">
    <form class="" action="que_pap_disp.php" method="post">

    <?php
      include("connection.php");
      $query="select * from temp";
      $result=mysqli_query($dbc,$query) or die("Couldn't retrievr from table / Table doesn't exist");
      $count=0;
    ?>
    The selected paper pattern<br>

    <?php  while($row=mysqli_fetch_array($result)){
      $count = $count + 1;
    ?>

    <h3><b>Part <?php if ($count==1) echo "A";
                   elseif ($count==2) echo "B";
                   elseif ($count==3) echo "C";
                   elseif ($count==4) echo "D";
                   elseif ($count==5) echo "E";
              ?> :</b></h3>
    <b>Number of questions:</b> <?php echo $row['noq']; ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <b> Marks:</b><?php echo $row['marks']; ?><br>

    <?php for ($i=1; $i <= $row['noq']; $i++) {
      echo "<b>Question ".$i."</b><textarea required name='q".$count.$i."' rows='5' cols='100'></textarea><br>";
    }
    ?>
    <?php echo "<hr>"; } ?>
    <br>
    <input type="submit" name="" value="Verify">
    </form>
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
