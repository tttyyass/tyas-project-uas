<?php 
include_once '../dbconfig.php';
include_once 'class.admin.php';
$admin = new admin($DB_con);

session_start();

if (!isset($_SESSION['username'])==0) {
  header('Location: home.php');
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  
  $admin->ceklogin($username,$password);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Login</title>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>
<body>
 <div class="col-md-4 col-md-offset-4 form-login">
   
   <?php 
   /* handle error */
   if (isset($_GET['error'])) : ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
    	<button type="button" class="close" data-dismiss="alert" arial-label="Close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    	<strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
    </div>
   <?php endif; ?>
   <div class="outter-form-login">
   	<div class="logo-login">
   		<em class="glyphicon glyphicon-user"></em>
   	</div>
   	 <form action="" class="inner-login" method="post">
   	 	<h3 class="text-center title-login">Login Admin</h3>
   	 	<div class="form-group">
   	 		<input type="text" class="form-control" name="username" placeholder="Username" required>
   	 	</div>

   	 	<div class="form-group">
   	 		<input type="password" class="form-control" name="password" placeholder="Password" required>
   	 	</div>

   	 	<input type="submit" name="login" class="btn btn-block btn-custom-green" value="LOGIN"/>

   	 	<div class="text-center forget">
   	 		<p><a href="../" class="btn btn-danger"><i class="glyphicon glyphicon-backward"></i> Halaman Depan</a></p>
        username: admin <br/>
        password: admin
   	 	</div>
   	 </form>
   </div>
 </div>

 <script src="../js/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
</body>
</html>