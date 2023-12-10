<?php 
include_once '../dbconfig.php';
include_once 'class.admin.php';
$admin = new admin($DB_con);
session_start();
if (isset($_SESSION['username']) == 0) {
	header('Location: index.php');
}


if (isset($_GET['logout'])) {
	$admin->logout();
}

?>
<?php include_once 'header.php'; ?>
<br/><br/><br/><br/>
<?php 
if (isset($_POST['btn-update'])) {
	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$subject = $_POST['subject'];
	$isi = $_POST['isi'];

	if ($admin->update($id,$nama,$subject,$isi)) {
		header("Location: ?success");
	}else{
		header("Location: ?failed");
	}
}

	if (isset($_GET['success'])) {
		?>
		<div class="container">
			<div class='alert alert-success'>
			<strong><span class="glyphicon glyphicon-ok"></span> Data berhasi di perbarui !</strong>
			</div>
		</div>
		<?php
	}elseif(isset($_GET['failed'])){ ?>
		<div class="container">
			<div class='alert alert-danger'>
			<strong><span class="glyphicon glyphicon-remove"></span> Data Gagal di perbarui !</strong>
			</div>
		</div>
	<?php }
?>

<div class="container">
	
<table class="table table-bordered">
	<thead>
		<tr>
			<th class="col-sm-2">Tanggal</th>
			<th class="col-sm-2">Nama</th>
			<th class="col-sm-2">Subject</th>
			<th class="col-sm-3">Isi</th>
			<th class="col-sm-2" colspan="2">Aksi</th>
		</tr>
	</thead>
	<?php 
	$tampil = 'admin';
	$query = "SELECT * FROM table_buku_tamu";
	$buku->tampildata($query,$tampil);
	?>
</table>


<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	extract($admin->getID($id));
}

if (isset($_GET['aksi']) == 'edit' && $_GET['id'] != '' ) {

	?>
<div class="panel panel-primary">
	<div class="panel-heading"><h4><i class="glyphicon glyphicon-list-alt"></i> Buku Tamu</h4></div>
		<div class="panel-body">

			<form class="form-horizontal" role="form" method="post">
							
					<div class="form-group">
						<label class="control-label col-sm-3">Nama</label>
						<div class="col-sm-3">
							<input type="text" name="nama" class="form-control" placeholder="Nama .." value="<?=$nama; ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3">Subject</label>
						<div class="col-sm-5">
							<input type="text" name="subject" class="form-control" placeholder="Subject .." value="<?=$subject; ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3">Isi</label>
						<div class="col-sm-5">
							<textarea name="isi" class="form-control" rows="5" id="comment"><?=$isi?></textarea>
						</div>
					</div>

					<div class="form-group" align="center">
					<label class="control-label col-sm-3"></label>
					<div class="col-sm-5">
						<button type="submit" name="btn-update" class="btn btn-primary">Update</button>
						<button type="reset" class="btn btn-warning" onclick="window.history.back();">Batal</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>

	<?php
	
}
?>
