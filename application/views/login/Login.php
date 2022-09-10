<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/alumniubj.css">
	<nav id="containerlogin">	
			<form id="formloginview" method="post" action="<?=base_url('login') ?>">
				<div class="divformloginview">
					<h3>SILAHKAN LOGIN</h3>
				</div>
				<?= $this->session->flashdata('message'); ?>
				<div class="divformloginview">
					<div class="labellog">
						<label>NPM:</label><br>
					</div>
					<div class="inputlog">
						<input  type="text" name="npm" value="" autocomplete="off" placeholder="Masukkan NPM">
					</div>
				</div>
				<div class="divformloginview">	
					<div class="labellog">
						<label >PASSWORD :</label>
					</div>
					<div class="inputlog">
						<input  type="password" name="password" value="" placeholder="Masukkan Password"><?= form_error('password', '<small class="eror">', '</small>') ?>
					</div>
				</div>
				<div class="divformloginview">
					<button><i class="fa fa-sign-in iconlogout" style="font-size: 23px;"></i> LOGIN</button>
				</div>
			</form>
	</nav>