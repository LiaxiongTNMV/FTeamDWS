<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url(image/bkgd.jpg) no-repeat; background-size:cover; height:410px; "></div>

	<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        	<div class="list-group">
                <a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color:#3498DB ">Patients</a>
                <a href="patient_dt.php" class="list-group-item">Patient Detail</a>
                <a href="" class="list-group-item">Add New</a>
                <a href="" class="list-group-item">PayMent/Checkout</a> 
        	</div>
        	<hr>
        	<div class="list-group">
                <a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color:#3498DB ">Active</a>
                <a href="" class="list-group-item">Staff Details</a>
                <a href="" class="list-group-item">Add New Staff</a>
                <a href="" class="list-group-item">Remove Staff Members</a> 
        	</div>
        </div>
        <div class="col-md-8">
        	<div class="card">
        		<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
        			Book an appointment
        		</div>
        		<div class="card-body">
        			<form class="form-group" action="func.php" method="post">
        				<label>First Name :</label>
        				<input type="text" name="fname" class="form-control"><br>
        				<label>Last Name :</label>
        				<input type="text" name="lname" class="form-control"><br>
        				<label>Email id :</label>
        				<input type="text" name="email" class="form-control"><br>
        				<label>Contact :</label>
        				<input type="text" name="contact" class="form-control"><br>
        				<label>Doctor Appointment : </label>
        				<select class="form-control" name="docapp">
                           <option value="Dr Sharma From 6pm to 8pm">Dr Sharma From 6pm ot 8pm </option>
                           <option value="Dr Shetty From 4pm to 6pm">Dr Shetty From 4pm ot 6pm </option>
        				</select><br>
        				<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">
        			</form>
        		</div>
        	</div>
        </div>
        <div class="col-md-1"></div>
  
    </div>

	</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--sweetAlert-->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript">
     $(document).ready(function (){
        swal({
            title: 'Welcome!',
            text: 'Have a nice day...!',
            imageUrl: 'image/swal.jpg',
            imageWidth: 400,
            imageHieght: 200,
            imageAlt: 'Custom image',
            animation: false

        })
     });
 </script>

</body>
</html>