<?php
include('connection.php');
$query="select * from pa";
$result1=mysqli_query($dbc,$query);
$arr=array("0");
while ($row1=mysqli_fetch_array($result1)) {
for ($i=1; $i <= 3; $i++) {
$arr=array_merge($arr,array($row1['q'.$i]));


}}
shuffle($arr);
print_r($arr);

?>
$p = array("$dbq1","$dbq2","$dbq3");
shuffle($p);
print_r($p);
echo "<BR>";
echo $p[0]."<br>";
echo $p[1]."<br>";
echo $p[2]."<BR>";
}
<head>
  <meta http-equiv="refresh" content="30">
</head>
