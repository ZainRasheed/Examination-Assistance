<?php
include('connection.php');
$parta= mysqli_query($dbc,"select * from pa");
$numrows = mysqli_num_rows($parta);
if($numrows !=0)
{
while ($row = mysqli_fetch_array($parta))
{
  $dbq1=$row['q1'];
  $dbq2=$row['q2'];
  $dbq3=$row['q3'];
}
echo $dbq1."<br>";
echo $dbq2."<br>";
echo $dbq3."<br>";

    $p = array("$dbq1","$dbq2","$dbq3");
    shuffle($p);
    print_r($p);
    echo "<BR>";
    echo $p[0]."<br>";
    echo $p[1]."<br>";
    echo $p[2]."<BR>";
}
?>
