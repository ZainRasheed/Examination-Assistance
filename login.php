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

<li class ="active" ><a href="login.php"> LOGIN</a></li>
<li class ="button"><a href="dept.php">Department</a></li>

    </ul>

  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear">


<h1>Login</h1>
<form action="" method="post">
<p>
<label>Select:</label><select name="select">
	<option value="non"> Select</option>
        <option value="HOD"> HOD</option>
        <option value="IC">Instructor-in-Charge</option>
    </select><br>
Username:<input type="text" name="user"></p>
<label>Password:</label><input type="password" name="pass"><br/>
<input type="submit" value="Login" name="submit"><br/>
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $select = $_POST['select'];
$user = $_POST['user'];
 $pass = $_POST['pass'];

if ($select == 'HOD')
{

 $query = mysqli_query($dbc, "SELECT * FROM hod");
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
      $_SESSION['role']="hod";
      $_SESSION['sess_name']=$dbname;
      $_SESSION['sess_sub']=$dbsub;
      //Redirect Browser
      header("Location:hod_after_login.php");
    }
   else
     {
       echo"<script>alert('invalid password');</script>";
     }
  }
 }
 echo "<script>alert('invalid username');</script>";
}

else if ($select == 'IC')
{
$query = mysqli_query($dbc, "SELECT * FROM cse_ic");
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
     $_SESSION['role']="cse_ic";
     $_SESSION['sess_name']=$dbname;
     $_SESSION['sess_sub']=$dbsub;
 //Redirect Browser
    header("Location:ic_after_login.php?change=0");
   }
  else
    {
      echo"<script>alert('invalid password');</script>";
    }
 }
}
echo "<script>alert('invalid username');</script>";

}
else
{
$query = mysqli_query($dbc, "SELECT * FROM admin");
 while($row = mysqli_fetch_array($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
  if($user == $row['user'])
  {
    if($pass ==$row['pass'])
    {
      session_start();
      $_SESSION['sess_user']=$user;
      $_SESSION['sess_name']='Admin';

  //Redirect Browser
     header("Location:admin.php");
    }
   else
     {
       echo"<script>alert('invalid password');</script>";
     }
  }
 }
 echo "<script>alert('invalid username');</script>";

 }
}
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

</html>
