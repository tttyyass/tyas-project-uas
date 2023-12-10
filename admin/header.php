<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Admin</title>

  <link href="../css/bootstrap.min.css" rel="stylesheet">  
  <script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<style>
          body { background: url(../image/bg.jpg);
          	background-size: cover;}
          .container { background: auto; }
        </style>
</head>

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Form Admin</a>
		</div>
			

		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<!-- <li><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-list-alt'></span>  Isi Buku Tamu</a></li> -->
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Selamat Datang <strong style="color:red;"><?php echo	$_SESSION['username']; ?></strong></a></li>
				<li><a href="?logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>

		</div>
	</div>
</nav>