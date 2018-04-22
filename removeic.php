<?php
include('connection.php');
 session_start();
if ( !isset ($_SESSION['sess_user']))
die( "not logged in");
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
              <li class ="active"><a href="logout.php"> LOGOUT</a></li>
              <li class ="button"><a href="dept.php">Department</a></li>

    </ul>

  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear">


<h1>Admin</h1>
<h2 align="center"> Instructor-in-Charge's List</h2>
 <table class="table table-hover">
           <tr>
               <th>Name</th>

           </tr>

<?php
if(isset($_POST["submit"])){
if(!empty($_POST['user'])){
$user = $_POST['user'];
$query = mysqli_query($dbc, " DELETE FROM ic WHERE user='".$user."'");
}}

 $sql = "Select name from cse_ic";
 $result = $dbc->query($sql);
 //Result Message

 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 ?>
		                   <tr>
						   <td><?php echo $row['name']; ?></td>

</tr>
		                 <?php
				     }
				 } else {
				     echo "0 results";
				 }
				 $dbc->close();
				 ?>

		               </tr>
		        </table>


<form action="" method="post">
Username:<input type="text" name="user"></p>

<input type="submit" value="Remove" name="submit"><br/>
</form>




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
