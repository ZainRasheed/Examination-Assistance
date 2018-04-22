<?php
include("connection.php");
$val=$_GET['val'];
if($val == 1) {
  $aq=$_POST['aq'];
  $am=$_POST['am'];

  $query1="create table temp(sl int(10) primary key,noq int(10),marks int(10))";
  $query2="insert into temp values('1','$aq','$am')";

  mysqli_query($dbc,$query1) or die("CAnt create table");
  mysqli_query($dbc,$query2) or die("CAnt insert");

  header("Location:que_pat_disp.php");
}
elseif ($val == 2) {
  $aq=$_POST['aq'];
  $am=$_POST['am'];
  $bq=$_POST['bq'];
  $bm=$_POST['bm'];

  $query1="create table temp(sl int(10) primary key,noq int(10),marks int(10))";
  $query2="insert into temp values('1','$aq','$am')";
  $query3="insert into temp values('2','$bq','$bm')";

  mysqli_query($dbc,$query1) or die("CAnt create table");
  mysqli_query($dbc,$query2) or die("CAnt insert");
  mysqli_query($dbc,$query3) or die("CAnt insert");
  header("Location:que_pat_disp.php");

}
elseif ($val == 3) {
  $aq=$_POST['aq'];
  $am=$_POST['am'];
  $bq=$_POST['bq'];
  $bm=$_POST['bm'];
  $cq=$_POST['cq'];
  $cm=$_POST['cm'];

  $query1="create table temp(sl int(10) primary key,noq int(10),marks int(10))";
  $query2="insert into temp values('1','$aq','$am')";
  $query3="insert into temp values('2','$bq','$bm')";
  $query4="insert into temp values('3','$cq','$cm')";


  mysqli_query($dbc,$query1) or die("CAnt create table");
  mysqli_query($dbc,$query2) or die("CAnt insert");
  mysqli_query($dbc,$query3) or die("CAnt insert");
  mysqli_query($dbc,$query4) or die("CAnt insert");
  header("Location:que_pat_disp.php");

}
elseif ($val == 4) {
  $aq=$_POST['aq'];
  $am=$_POST['am'];
  $bq=$_POST['bq'];
  $bm=$_POST['bm'];
  $cq=$_POST['cq'];
  $cm=$_POST['cm'];
  $dq=$_POST['dq'];
  $dm=$_POST['dm'];

  $query1="create table temp(sl int(10) primary key,noq int(10),marks int(10))";
  $query2="insert into temp values('1','$aq','$am')";
  $query3="insert into temp values('2','$bq','$bm')";
  $query4="insert into temp values('3','$cq','$cm')";
  $query5="insert into temp values('4','$dq','$dm')";


  mysqli_query($dbc,$query1) or die("CAnt create table");
  mysqli_query($dbc,$query2) or die("CAnt insert");
  mysqli_query($dbc,$query3) or die("CAnt insert");
  mysqli_query($dbc,$query4) or die("CAnt insert");
  mysqli_query($dbc,$query5) or die("CAnt insert");
  header("Location:que_pat_disp.php");

}
elseif ($val == 5) {
  $aq=$_POST['aq'];
  $am=$_POST['am'];
  $bq=$_POST['bq'];
  $bm=$_POST['bm'];
  $cq=$_POST['cq'];
  $cm=$_POST['cm'];
  $dq=$_POST['dq'];
  $dm=$_POST['dm'];
  $eq=$_POST['eq'];
  $em=$_POST['em'];

  $query1="create table temp(sl int(10) primary key,noq int(10),marks int(10))";
  $query2="insert into temp values('1','$aq','$am')";
  $query3="insert into temp values('2','$bq','$bm')";
  $query4="insert into temp values('3','$cq','$cm')";
  $query5="insert into temp values('4','$dq','$dm')";
  $query6="insert into temp values('5','$eq','$em')";


  mysqli_query($dbc,$query1) or die("CAnt create table");
  mysqli_query($dbc,$query2) or die("CAnt insert");
  mysqli_query($dbc,$query3) or die("CAnt insert");
  mysqli_query($dbc,$query4) or die("CAnt insert");
  mysqli_query($dbc,$query5) or die("CAnt insert");
  mysqli_query($dbc,$query6) or die("CAnt insert");
  header("Location:que_pat_disp.php");

}
 ?>
