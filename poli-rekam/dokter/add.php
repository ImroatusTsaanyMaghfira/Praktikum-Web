<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Dokter</h1>
	<h4>
		<small>Tambah Data Dokter</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post"  enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama">Nama Dokter</label>
					<input type="text" name="nama" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="ket">spesialis</label>
					<textarea name="spes" id="spes" class="form-control" required=""></textarea>
				</div>
				<div class="form-group">
					<label for="ket">Alamat</label>
					<textarea name="alm" id="alm" class="form-control" required=""></textarea>
				</div>
				<div class="form-group">
					<label for="ket">No. Telp</label>
					<textarea name="no" id="no" class="form-control" required=""></textarea>
				</div>
				<div class="form-group">
					<label for="ket">Tambah Foto</label>
					<input type="file" name="uploadfile" id="uploadfile" class="form-control" required=""></input>
				</div>
				<div class="form-group">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
