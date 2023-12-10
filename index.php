<?php 
include_once 'dbconfig.php'; 

if (isset($_POST['btn-simpan'])) {
	$table = "table_buku_tamu";
 $nama = $_POST['nama'];
 $subject = $_POST['subject'];
 $isi = $_POST['isi'];
	if ($buku->tambah($table,$nama,$subject,$isi)) {
		header("Location: index.php?success");
	}else{
		header("Location: index.php?failed");
	}

}

?>
<?php include_once 'header.php'; ?>
<br/><br/><br/>
<div class="clearfix"></div>

<?php 
if (isset($_GET['success'])) {
	?>
	<div class="container">
	 <div class="alert alert-info">
	 <strong>Input Buku Tamu Berhasil</strong>
	 </div>
	</div>
	<?php
}else if(isset($_GET['failed'])){
	?>
	<div class="container">
	 <div class="alert alert-warning">
	 <strong>Buku Tamu gagal Di input</strong>
	 </div>
	</div>
	<?php
}
?>


<div class="container">

	<div class="panel panel-primary">
		<div class="panel-heading"><h4><i class="glyphicon glyphicon-list-alt"></i> Buku Tamu</h4></div>
			<div class="panel-body">
				
			<form class="form-horizontal" role="form" method="post">
				
				<div class="form-group">
					<label class="control-label col-sm-3">Nama</label>
					<div class="col-sm-3">
						<input type="text" name="nama" class="form-control" placeholder="Nama .." required>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3" required>Subject</label>
					<div class="col-sm-5">
						<input type="text" name="subject" class="form-control" placeholder="Subject ..">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3">Isi</label>
						<div class="col-sm-5">
						<textarea name="isi" class="form-control" rows="5" id="comment"></textarea>
						</div>
				</div>

				<div class="form-group" align="center">
					<label class="control-label col-sm-3"></label>
					<div class="col-sm-5">
						<button type="submit" name="btn-simpan" class="btn btn-primary">Simpan</button>
						<button type="reset" class="btn btn-warning">Batal</button>						
					</div>
				</div>

			</form>

		</div>
	</div>

</div>

<div class="container">
	
<table class="table table-bordered">
	<thead>
		<tr class="success">
			<th class="col-sm-2">Tanggal</th>
			<th class="col-sm-3">Nama</th>
			<th class="col-sm-3">Subject</th>
			<th class="col-sm-5">Isi</th>
		</tr>
	</thead>
	<?php 
	$tampil = 'depan';
	$query = "SELECT * FROM table_buku_tamu";
	$buku->tampildata($query,$tampil);
	?>
</table>

</div>
