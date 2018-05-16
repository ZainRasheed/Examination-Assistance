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

  $queryPA="create table pa(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPA) or die("CAnt create table");
  for ($i=1; $i <= $aq; $i++) {
    $query="ALTER TABLE pa ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }

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

  $queryPA="create table pa(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPA) or die("CAnt create table");
  for ($i=1; $i <= $aq; $i++) {
    $query="ALTER TABLE pa ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }
  $queryPB="create table pb(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPB) or die("CAnt create table");
  for ($i=1; $i <= $bq; $i++) {
    $query="ALTER TABLE pb ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }

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

  $queryPA="create table pa(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPA) or die("CAnt create table");
  for ($i=1; $i <= $aq; $i++) {
    $query="ALTER TABLE pa ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }
  $queryPB="create table pb(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPB) or die("CAnt create table");
  for ($i=1; $i <= $bq; $i++) {
    $query="ALTER TABLE pb ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }
  $queryPC="create table pc(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPC) or die("CAnt create table");
  for ($i=1; $i <= $cq; $i++) {
    $query="ALTER TABLE pc ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }

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

  $queryPA="create table pa(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPA) or die("CAnt create table");
  for ($i=1; $i <= $aq; $i++) {
    $query="ALTER TABLE pa ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }
  $queryPB="create table pb(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPB) or die("CAnt create table");
  for ($i=1; $i <= $bq; $i++) {
    $query="ALTER TABLE pb ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }
  $queryPC="create table pc(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPC) or die("CAnt create table");
  for ($i=1; $i <= $cq; $i++) {
    $query="ALTER TABLE pc ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }
  $queryPD="create table pd(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPD) or die("CAnt create table");
  for ($i=1; $i <= $dq; $i++) {
    $query="ALTER TABLE pd ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }

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

  $queryPA="create table pa(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPA) or die("CAnt create table");
  for ($i=1; $i <= $aq; $i++) {
    $query="ALTER TABLE pa ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }
  $queryPB="create table pb(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPB) or die("CAnt create table");
  for ($i=1; $i <= $bq; $i++) {
    $query="ALTER TABLE pb ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }
  $queryPC="create table pc(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPC) or die("CAnt create table");
  for ($i=1; $i <= $cq; $i++) {
    $query="ALTER TABLE pc ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }
  $queryPD="create table pd(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPD) or die("CAnt create table");
  for ($i=1; $i <= $dq; $i++) {
    $query="ALTER TABLE pd ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }
  $queryPE="create table pe(id varchar(10) primary key)";
  mysqli_query($dbc,$queryPE) or die("CAnt create table");
  for ($i=1; $i <= $eq; $i++) {
    $query="ALTER TABLE pe ADD q".$i." varchar(500)";
    mysqli_query($dbc,$query) or die("update");
  }

  header("Location:que_pat_disp.php");

}
 ?>
