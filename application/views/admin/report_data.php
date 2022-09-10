
<script type="text/javascript" src="<?= base_url('assets/js/Chart.js') ?>"></script>
<nav id="containerreportdata">


     <div id="laporan1">
                <select onchange="location = this.value;">
                    <option value="<?echo site_url('admin/laporan/2019')?>">Pilih tahun</option>
                    <? foreach($drop_tahun as $element): ?>
                    <option value="<?echo site_url('admin/laporan/'.$element->tahun)?>"><?echo $element->tahun?></option>
                    <? endforeach; ?>
                </select>
                    <canvas style="width:500px;" id="myChart" style="width:100%;max-width:600px"></canvas>
                </div>
                 <script>
            var xValues = ["Kerja sesuai bidang", "Kerja tidak sesuai bidang", "Melanjutkan studi S2", "Belum bekerja"];
            var yValues = [<?echo $bar1?>, <?echo $bar2?>, <?echo $bar3?>, <?echo $bar4?>];
            var barColors = ["green", "red","blue","black"];

            new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                legend: {display: false},
                title: {
                display: true,
                text: "Laporan Alumni Tahun <?echo $par?>"
                }
            }
            });
        </script>
<!-- 	<div id="laporan1">	
		<canvas id="myChart"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $nama_a3= "";
    $jumlah=null;
    foreach ($hasil as $item)
    {
        $jur=$item->a3;
        $nama_a3 .= "'$jur'". ", ";
        $jum=$item->total;
        $jumlah .= "$jum". ", ";
    }
    ?>
<script>
	 var xValues = ["Kerja sesuai bidang", "Kerja tidak sesuai bidang", "Melanjutkan studi S2", "Belum bekerja"];
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_a3; ?>],
            datasets: [{
                label:xValues,
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
	</div> -->
</nav>
