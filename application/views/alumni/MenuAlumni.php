	<script src="<?= base_url('assets/js/js.js') ?>"></script>
	<nav id="navigasi">
		<div class="image">
			<img src="<?= base_url('assets/img/default.jpg') ?>" width="100px" height="100px" alt="">
			<a href=""><?= $alumni['nm_mahasiswa'] ?></a>
		</div>
		<div class="divnavigasi">
			<a href="<?= base_url('alumni/Kuesioner') ?>"><i class="fa fa-question-circle-o icon " style="font-size: 20px; padding:5px;"></i>Kuisioner</a>
		</div>
		<div class="divnavigasi">
			<a href="<?= base_url('alumni/ChangePassword') ?>"><i class="fa fa-lock icon " style="font-size: 20px; padding:5px;margin-right: 2px;margin-left: 2px;"></i>Change Password</a>
		</div>
		<div class="divnavigasi">
			<a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out icon " style="font-size: 20px; padding:5px;"></i>Logout</a>
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
