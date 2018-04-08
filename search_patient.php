<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php 
include('func.php');
if(isset($_POST['patient_search_submit'])){
	$contact=$_POST['search'];
	$query="select * from doctorapp where contact='$contact' ";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid' style='margin-top:30px;'>
	      <div class='card'>
	      <div class='card-body'><a href='patient_dt.php' class='btn btn-primary'>Back</a></div>
	      <img src='image/sch.png' class='card-img-top'>
	      <div class='card-body' style='background-color:#3498DB; color:#ffffff;'>
          <table class='table table-hover'>
          <thead>
          <tr>
          <th scope='col'>First Name</th>
          <th scope='col'>Last Name</th>
          <th scope='col'>Email id</th>
          <th scope='col'>Contact</th>
          <th scope='col'>Doctor Appointment</th>
          </tr>
          </thead>
          <tbody>
          ";

	while ($row=mysqli_fetch_array($result)) {
		# code...
		$fname=$row['fname'];
		$lname=$row['lname'];
		$email=$row['email'];
		$contact=$row['contact'];
		$docapp=$row['docapp'];
		echo "<tr>
             <td>$fname</td>
             <td>$lname</td>
             <td>$email</td>
             <td>$contact</td>
             <td>$docapp</td>
		</tr>";
	}
	echo "</thody></table></div></div></div>";
}


?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
