
<form id="containermail"  method="post" action="<?=base_url('admin/kirim_email') ?>" >
	<input  type="text" id="email" name="email" placeholder="Klik radio button di table untuk mendapatkan email alumni">
	<button type="submit">SEND EMAIL</button>
</form>
<nav id="containeralumnidata">
	<form id="formimport" method="post" action="<?=base_url('admin/import') ?>" enctype="multipart/form-data">
		<p>IMPORT DATA EXCEL ".Xlsx"</p>
		<input class="custom-file-input" type="file" id="importexcel" name="importexcel" accept=".xlsx">
		<button  type="submit">IMPORT</button>
	</form>
		<div id="pembungkusjudulalumnidata">
			<div style="width:5%" >No</div>
			<div style="width:40%" >Nama Mahasiswa</div>
			<div style="width:20%" >NPM</div>
			<div style="width:20%" >Tahun Lulus</div>
			<div style="width:35%" >AKSI</div>			
			<div  ></div>			
		</div>
		<nav id="pembungkusluaralumnidata">

			<?php
			$jp = 'S1';
			$nomer = 1;
			$no = 1;
			foreach($alumni as $a){
				?>
				<div id="pembungkusdalamalumnidata">
					<div style="width:5%"><?= $no++ ?></div>
					<div style="width: 40%;"><?= $a->nm_mahasiswa ?></div>
					<div style="width: 20%;"><?= $a->npm ?></div>
					<div style="width: 20%;"><?= $a->thn_lulus ?></div>
					<div style="width:35%;display: flex; justify-content: space-evenly"  ><a href="<?php echo base_url(); ?>admin/CekData/<?php echo $a->npm; ?>">Cek</a><a href="<?php echo base_url(); ?>admin/delete/<?php echo $a->npm; ?>">Delete</a><input onclick="check(this.value)" type="radio" name="nama_alumni" value="<?= $a->email ?>"></div>
				</div>
			<?php
		}?>
	</nav>
</nav>
