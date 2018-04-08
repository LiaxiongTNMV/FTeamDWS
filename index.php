<!DOCTYPE html>
<html>
<head>
	<title>Hospital Management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>
<style>
	#ab1:hover{
        cursor:pointer;
	}

</style>


<body style="background:url('image/bg.png') no-repeat; background-size= cover; ">
<div class="container" style="width:400px; margin-top:100px;">
<div class="card">
<img src="image/1.jpg" class="card-img-top">
<div class="card-body">
      <form class="form-group" action="func.php" method="post">
         <label>UserName : </label>
         <input type="text" id="username" name="username" class="form-control" placeholder="enter username"><br>
         <label>Password : </label>
         <input type="password" id="password" name="password" class="form-control" placeholder="enter password"><br>
         
         <input type="submit" value="submit" name="login_submit" id="ab1" class="btn btn-primary">

      </form>

  </div>
</div>

</div>





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>