// Studytracer bagian 1
// a2

function check(a2) {
	document.getElementById("lainnya-a3").value=a2;
	document.getElementById("lainnya-a3").style.color="white";
}
if (document.getElementById("lainnya-a3").value == "Biaya Sendiri / Keluarga") {
	document.getElementById("lainnya-a3").style.color="white";
} else if (document.getElementById("lainnya-a3").value == "Beasiswa ADIK") {
	document.getElementById("lainnya-a3").style.color="white";
} else if (document.getElementById("lainnya-a3").value == "Beasiswa BIDIKMISI / KIP") {
	document.getElementById("lainnya-a3").style.color="white";
} else if (document.getElementById("lainnya-a3").value == "Beasiswa PPA") {
	document.getElementById("lainnya-a3").style.color="white";
} else if (document.getElementById("lainnya-a3").value == "Beasiswa AFIRMASI") {
	document.getElementById("lainnya-a3").style.color="white";
} else if (document.getElementById("lainnya-a3").value == "Beasiswa Perusahaan/Swasta") {
	document.getElementById("lainnya-a3").style.color="white";
} else if (document.getElementById("lainnya-a3").value == "Beasiswa BRI") {
	document.getElementById("lainnya-a3").style.color="white";
} else if (document.getElementById("lainnya-a3").value == "Beasiswa PEMKOT Bekasi") {
	document.getElementById("lainnya-a3").style.color="white";
}

document.getElementById('lainnya-a3').addEventListener('click', function(){
	document.getElementById("lainnya-a3").style.color="white";
	document.getElementById("lainnya-a3").value = "";
	document.getElementById("radio-a3").checked = true;});

// a3
function Check(a3) {
	if(document.getElementById("dropdown_activated").checked){
		document.getElementById("myDropdown3").style.transition="2s";
		document.getElementById("myDropdown3").style.display="block";
		document.getElementById("myDropdown3").style.width="100%";
	} else {
		document.getElementById("myDropdown3").style.transition="2s";
		document.getElementById("myDropdown3").style.display="none";
		document.getElementById("myDropdown3").style.width="100%";
	}
}
if(document.getElementById("dropdown_activated").checked){
	document.getElementById("myDropdown3").style.transition="2s";
	document.getElementById("myDropdown3").style.display="block";
	document.getElementById("myDropdown3").style.width="100%";
}else {
	document.getElementById("myDropdown3").style.transition="2s";
	document.getElementById("myDropdown3").style.display="none";
	document.getElementById("myDropdown3").style.width="100%";
}

// a7
function check_a7(a7) {
	document.getElementById("lainnya-a7").value=a7;
	document.getElementById("lainnya-a7").style.color="white";
}
if (document.getElementById("lainnya-a7").value == "Sangat Erat") {
	document.getElementById("lainnya-a7").style.color="white";
} else if (document.getElementById("lainnya-a7").value == "Erat") {
	document.getElementById("lainnya-a7").style.color="white";
} else if (document.getElementById("lainnya-a7").value == "Cukup Erat") {
	document.getElementById("lainnya-a7").style.color="white";
} else if (document.getElementById("lainnya-a7").value == "Kurang Erat") {
	document.getElementById("lainnya-a7").style.color="white";
} else if (document.getElementById("lainnya-a7").value == "Tidak sama sekali") {
	document.getElementById("lainnya-a7").style.color="white";
}

document.getElementById('lainnya-a7').addEventListener('click', function(){
	document.getElementById("lainnya-a7").style.color="black";
	document.getElementById("lainnya-a7").value = "";
	document.getElementById("radio-a7").checked = true;});


// a8
function check_a8(a8) {
	document.getElementById("lainnya-a8").value=a8;
	document.getElementById("lainnya-a8").style.color="white";
}
if (document.getElementById("lainnya-a8").value == "Setingkat lebih tinggi") {
	document.getElementById("lainnya-a8").style.color="white";
} else if (document.getElementById("lainnya-a8").value == "Tingkat yang sama") {
	document.getElementById("lainnya-a8").style.color="white";
} else if (document.getElementById("lainnya-a8").value == "Setingkat lebih rendah") {
	document.getElementById("lainnya-a8").style.color="white";
} else if (document.getElementById("lainnya-a8").value == "Tidak perlu pendidikan yang tinggi") {
	document.getElementById("lainnya-a8").style.color="white";
}

document.getElementById('lainnya-a8').addEventListener('click', function(){
	document.getElementById("lainnya-a8").style.color="black";
	document.getElementById("lainnya-a8").value = "";
	document.getElementById("radio-a8").checked = true;});



// a17
function check_a17(a17) {
	document.getElementById("lainnya-a17").value=a17;
	document.getElementById("lainnya-a17").style.color="white";
}
if (document.getElementById("lainnya-a17").value == "Tidak") {
	document.getElementById("lainnya-a17").style.color="white";
} else if (document.getElementById("lainnya-a17").value == "Tidak saya menunggu hasil lamaran kerja") {
	document.getElementById("lainnya-a17").style.color="white";
} else if (document.getElementById("lainnya-a17").value == "Ya, saya akan bekerja dua minggu ke depan") {
	document.getElementById("lainnya-a17").style.color="white";
} else if (document.getElementById("lainnya-a17").value == "Ya, saya belum pasti bekerja dalam dua minggu ke depan") {
	document.getElementById("lainnya-a17").style.color="white";
}

document.getElementById('lainnya-a17').addEventListener('click', function(){
	document.getElementById("lainnya-a17").style.color="black";
	document.getElementById("lainnya-a17").value = "";
	document.getElementById("radio-a17").checked = true;});


// a18
function check_a18(a18) {
	document.getElementById("lainnya-a18").value=a18;
	document.getElementById("lainnya-a18").style.color="white";
}
if (document.getElementById("lainnya-a18").value == "Organisasi pemerintah termasuk BUMN") {
	document.getElementById("lainnya-a18").style.color="white";
} else if (document.getElementById("lainnya-a18").value == "Organisasi non profit/lembaga swadaya masyarakat") {
	document.getElementById("lainnya-a18").style.color="white";
} else if (document.getElementById("lainnya-a18").value == "Perusahaan Swasta") {
	document.getElementById("lainnya-a18").style.color="white";
} else if (document.getElementById("lainnya-a18").value == "Perusahaan Sendiri/Wirausaha") {
	document.getElementById("lainnya-a18").style.color="white";
}

document.getElementById('lainnya-a18').addEventListener('click', function(){
	document.getElementById("lainnya-a18").style.color="black";
	document.getElementById("lainnya-a18").value = "";
	document.getElementById("radio-a18").checked = true;});

