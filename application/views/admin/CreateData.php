<title>Create New Data</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/alumniubj.css">

<link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="https://repo.rachmat.id/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<form id="containercreatedata" action="<?=base_url('login/CreateData') ?>" method="post">
	<div id="divformcreatedata">
		<h2>Create New Data Alumni</h2>
	</div>
	<div id="divformcreatedata">
		<div id="labelcreatedata">
			<label>NPM:</label><br>
		</div>
		<div id="inputcreatedata">
			<input  type="number" name="npm" autocomplete="off" placeholder="Masukkan NPM"><?= form_error('npm', '<small class="eror">', '</small>') ?>
		</div>
	</div>
	<div id="divformcreatedata">
		<div id="labelcreatedata">
			<label>MAHASISWA:</label><br>
		</div>
		<div id="inputcreatedata">
			<input  type="text" name="nm_mahasiswa" autocomplete="off" onkeyup="this.value = this.value.toUpperCase()" placeholder="Masukkan Nama Mahasiswa dengan Huruf Besar"><?= form_error('nm_mahasiswa', '<small class="eror">', '</small>') ?>
		</div>
	</div>
	<div id="divformcreatedata">
		<div id="labelcreatedata">
			<label>EMAIL:</label><br>
		</div>
		<div id="inputcreatedata">
			<input  type="text" name="email" autocomplete="off" placeholder="Masukkan EMAIL"><?= form_error('email', '<small class="eror">', '</small>') ?>
		</div>
	</div>
	<div id="divformcreatedata">
		<div id="labelcreatedata">
			<label>Tahun Lulus:</label><br>
		</div>
		<div class="inputcreatedata ui-widget">
			<input id="datepicker" name="thn_lulus" autocomplete="offnone" placeholder="Masukkan Tahun Lulus"><?= form_error('thn_lulus', '<small class="eror">', '</small>') ?>
		</div>
	</div>
	<div id="divformcreatedata">
		<button><i id="fa fa-sign-in iconlogout" style="font-size: 23px;"></i>FINISH</button>
	</div>

</form>
<script type="text/javascript">
	$(function(){
		$("#datepicker").datepicker({
			dateFormat:"dd/mm/yy",
		});
	});
</script>