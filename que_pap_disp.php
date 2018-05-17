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
if ( !isset ($_SESSION['sess_user']))
die( "not logged in");
include('connection.php');
if ( !$_SESSION['role']="teach") {
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


<li class ="button"><a id="ch2" href="login.php"> LOGIN</a></li>
<li class ="button"><a href="dept.php">Department</a></li>
    </ul>

  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear">
    <form class="" action="" method="post">

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

    <br><h3><b>Part <?php if ($count==1) echo "A";
                   elseif ($count==2) echo "B";
                   elseif ($count==3) echo "C";
                   elseif ($count==4) echo "D";
                   elseif ($count==5) echo "E";
              ?> :</b></h3>
    <b>Number of questions:</b> <?php echo $row['noq']; ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <b> Marks:</b><?php echo $row['marks']; ?><br>

    <?php for ($i=1; $i <= $row['noq']; $i++) {
      echo "<b>Question ".$i."</b><br>";
      echo $_POST["q".$count.$i];
      echo "<br><br>";
    }
    ?>
    <?php echo "<hr>"; } ?>
    <br>
    <input type="submit" name="action" value="Submit">
    <br>
    <input type="submit" name="action" value="Change">
    </form>
</div>

<?php

if ($_POST['action']=="Submit") {
  $count=0;
  while ($row=mysqli_fetch_array($result)) {
    $count=$count+1;
    if ($count==1) $table='a';
    elseif ($count==2) $table='b';
    elseif ($count==3) $table='c';
    elseif ($count==4) $table='d';
    elseif ($count==5) $table='e';
  $query="insert into p".$table." values(".$_POST["q".$count."1"];
  for ($i=2; $i <= $row['noq']; $i++) {
    $query=$query.",".$_POST["q".$count.$i];
  }
  $query=$query.")";
  echo "<br>";
  echo $query;
  }
}

 ?>






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
