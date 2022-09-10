<script src="<?= base_url('assets/js/js.js') ?>"></script>
	<nav id="navigasi">
		<div class="image">
			<img src="<?= base_url('assets/img/default.jpg') ?>" width="100px" height="100px" alt="">
			<a href="">ADMIN</a>
		</div>
		<div class="divnavigasi">
			<a  href="<?php echo base_url(); ?>admin/resetpassword/<?= $alumni['npm'] ?>"><i class="fa fa-lock icon " style="font-size: 20px; padding:5px;"></i>Reset Password</a>
		</div>
		<div class="divnavigasi">
			<a href="<?= base_url('admin/AlumniData') ?>"><i class="fa fa-sign-out icon " style="font-size: 20px; padding:5px;margin-right: 2px;margin-left: 2px;"></i>Back</a>
		</div>
	</nav>

</body>
</html>
<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-1-12-4.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-ui.js') ?>"></script>

<script>
	$( "#checkbox" ).click(function() {
		$( "#navigasi" ).toggle( "drop", { direction: "left" }, "500" );
	});
</script>
<script>
	function myFunction(x) {
if (x.matches) { // If media query matches
	$( "#navigasi" ).hide( "drop", { direction: "left" }, "500" );
} else {
	$( "#navigasi" ).show( "drop", { direction: "left" }, "500" );
}
}

var x = window.matchMedia("(max-width: 1100px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
</script>