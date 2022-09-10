<form id="containerchangepassword" action="changepassword_action" method="post">
	<div id="divformchangepassword">
		<h2>CHANGE PASSWORD</h2>
	</div>
	<div id="divformchangepassword">
		<div id="labelchangepassword">
			<label>Old Password:</label><br>
		</div>
		<div id="inputchangepassword">
			<input  type="password" name="password_lama" value="" autocomplete="" placeholder="Enter Old Password">
		</div>
			<?= form_error('password_lama', '<small class="eror">', '</small>') ?>
	</div>
	<div id="divformchangepassword">	
		<div id="labelchangepassword">
			<label >New Password:</label>
		</div>
		<div id="inputchangepassword">
			<input  type="password" name="password_baru" value="" placeholder="Enter New Password"><?= form_error('password', '<small class="eror">', '</small>') ?>
		</div>
	</div>
	<div id="divformchangepassword">
		<button><i id="fa fa-sign-in iconlogout" style="font-size: 23px;"></i>CHANGE</button>
	</div>
	<div id="divformchangepassword2">
		<!-- <a href="">FORGOT PASSWORD ?</a> -->
		<!-- <a href="<?= base_url('auth/create') ?>">CREATE ACCOUNT</a> -->
	</div>
</form>