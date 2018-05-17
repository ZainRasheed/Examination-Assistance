<?php
include('connection.php');
session_start();
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
<center><h2>Final Question Paper</h2></center>
<?php
include('connection.php');
$query="select * from temp";
$result=mysqli_query($dbc,$query) or die("qrry err");
$count=0;
$total=0;
  while ($row=mysqli_fetch_array($result)) {
    $count=$count+1;
      $total=$total+($row['noq']*$row['marks']);
    if ($count==1) $table='a';
    elseif ($count==2) $table='b';
    elseif ($count==3) $table='c';
    elseif ($count==4) $table='d';
    elseif ($count==5) $table='e';
    $query="select * from p".$table;
    $result1=mysqli_query($dbc,$query);

    while ($row1=mysqli_fetch_array($result1)) {
      $arr=array($row1['q1']);
  for ($i=1; $i < $row['noq']; $i++) {
    $j=$i+1;
    $arr=array_merge($arr,array($row1['q'.$j]));

}
}
shuffle($arr);
?>
<style>
#ma{
  float:right;
}
</style>

<h3><b>Part <?php if ($count==1) echo "A";
               elseif ($count==2) echo "B";
               elseif ($count==3) echo "C";
               elseif ($count==4) echo "D";
               elseif ($count==5) echo "E";
          ?> :</b></h3>
  <b>Number of questions:</b> <?php echo $row['noq']; ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <div id="ma"><b> Marks:</b><?php echo $row['marks']; ?></div>
  <br>
<?php
  for ($i=0; $i < $row['noq']; $i++) {

    echo $arr[$i]."<br>";

  }
  ?>
  <?php echo "<hr>"; } ?>

<b><center>Total Marks:</b> <?php echo $total ?><br>Refresh for shuffle</center>

<?php
//$numrows = mysqli_num_rows($parta);
//if($numrows !=0)
//{
//while ($row = mysqli_fetch_array($parta))
//{
  //for(i=1;i<$row;i++)
  //{
  //$dbq1=$row['q1'];
  //$dbq2=$row['q2'];
  //$dbq3=$row['q3'];
//}

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
