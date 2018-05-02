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

 $query = mysqli_query($dbc, "SELECT * FROM hod WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sess_user']=$user;
 $_SESSION['role']="hod";
 //Redirect Browser
 header("Location:hod_after_login.php");
 }

 else
 {
 echo "Invalid Username or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }

}
else if ($select == 'IC')
{
$query = mysqli_query($dbc, "SELECT * FROM cse_ic WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sess_user']=$user;
 $_SESSION['role']="cse_ic";

 //Redirect Browser

 header("Location:ic_after_login.php?change=0");
 }

 else
 {
 echo "Invalid Username or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }
}
else
{
$query = mysqli_query($dbc, "SELECT * FROM admin WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sess_user']=$user;
 $_SESSION['role']="admin";

 //Redirect Browser
 header("Location:admin.php");
 }
 else
 {
 echo "Invalid Username or Password!";
 }
}
 else
 {
 echo "Required All fields!";
 }
}}
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
