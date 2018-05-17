<?php
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
      <li class="button"><a href="index.html">Home</a></li>

<li class ="active"><a href="login.php">LOGIN</a></li>


<li class ="button"><a href="dept.php">Department</a></li>

    </ul>

  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear">


<h1>CD Login</h1>
<form action="" method="post">
<p>
Username:<input type="text" name="user"></p>
<label>Password:</label><input type="password" name="pass"><br/>
<input type="submit" value="Login" name="submit"><br/>
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
$user = $_POST['user'];
 $pass = $_POST['pass'];

 $query = mysqli_query($dbc, "SELECT * FROM cd_tea");
 while($row = mysqli_fetch_array($query))
  {
    $dbusername=$row['user'];
    $dbname=$row['name'];
    $dbpassword=$row['pass'];
    $dbsub=$row['sub'];

  if($user == $row['user'])
  {
    if($pass ==$row['pass'])
    {
      session_start();
      $_SESSION['sess_user']=$user;
      $_SESSION['role']="cd_tea";
      $_SESSION['sess_name']=$dbname;
      $_SESSION['sess_sub']=$dbsub;
      //Redirect Browser
      header("Location:teach_after_login.php");
    }
   else
     {
       echo"<script>alert('invalid password');</script>";
     }
  }
 }
 echo "<script>alert('invalid username');</script>";
}

?>







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
</body>
</html>
