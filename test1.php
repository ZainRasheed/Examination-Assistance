<?php

//$a="zain";
//$b="rasheed";
//$c=$a.$b;
//print $c;
//echo "<br>";

include('connection.php');
$query="select * from temp";
$result=mysqli_query($dbc,$query) or die("qrry err");
$count=0;
while ($row=mysqli_fetch_array($result)) {
  $count=$count+1;
  if ($count==1) $table='a';
  elseif ($count==2) $table='b';
  elseif ($count==3) $table='c';
  elseif ($count==4) $table='d';
  elseif ($count==5) $table='e';
$query="insert into p".$table." values('".$_POST["q".$count."1"]."'";
for ($i=2; $i <= $row['noq']; $i++) {
  $query=$query.",'".$_POST["q".$count.$i]."'";
}
$query=$query.")";
echo "<br>";
echo $query;
}
//echo $c;
 ?>
