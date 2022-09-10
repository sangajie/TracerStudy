<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/percobaan.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav id="container">
		<form id="pembungkusformtracerstudy"  method="post" action="<?=base_url('alumni/TracerStudy'); ?>">
			<div id="tracerstudy1">
					<div id="divjudultracerstudy2">
						<h3>Tracer Study Universitas Bhayangkara Jakarta</h3><br>
						<p>Para Alumni yang terhormat,<br><br>
						&ensp;&ensp;&ensp;&ensp;Kami sangat berterimakasih atas kesediaan anda meluangkan waktu sejenak guna membantu kami dalam pelaksanaan survey yang ditujukan untuk seluruh sarjana alumni Universitas Bhayangkara Jakarta Raya.</p>
						<p>Kami memberikan jaminan sepenuhnya atas jawaban anda dan kesemuanya ini hanya akan dipergunakan untuk kepentingan ilmiah di dalam kerangka kerja studi ini. </p>
					</div>
				<div id="tracerstudy12">
					<div id="pembungkuslabelinput">
						<div id="divlabel">
							<label>Berapa bulan waktu (sebelum atau sesudah kelulusan) untuk memperoleh pekerjaan pertama?</label>
						</div>
						<div id="divinputtext">
							<input type="text" class="input" name="a1" ><?= form_error('a1', '<small class="eror">', '</small>') ?>
						</div>
					</div>
					<div id="pembungkuslabelinput">
						<div id="divlabel">
							<label>Sebutkan sumberdana dalam pembiayaan kuliah?</label>
						</div>
						<div id="divinputradio">
							<label><p><input type="radio" name="a2" onclick="check(this.value)" value="Biaya Sendiri / Keluarga" <?php if ( $studytracer['a2'] =='Biaya Sendiri / Keluarga' ) echo 'checked'?>>Biaya Sendiri / Keluarga</p></label>
							<label><p><input type="radio"  name="a2" onclick="check(this.value)" value="Beasiswa ADIK"  <?php if ( $studytracer['a2'] =='Beasiswa ADIK' ) echo 'checked'?>>Beasiswa ADIK</p></label>
							<label><p><input type="radio"  name="a2" onclick="check(this.value)" value="Beasiswa BIDIKMISI / KIP"  <?php if ( $studytracer['a2'] =='Beasiswa BIDIKMISI / KIP' ) echo 'checked'?>>Beasiswa BIDIKMISI / KIP</p></label>
							<label><p><input type="radio"  name="a2" onclick="check(this.value)" value="Beasiswa PPA" <?php if ( $studytracer['a2'] =='Beasiswa PPA' ) echo 'checked'?>>Beasiswa PPA</p></label>
							<label><p><input type="radio"  name="a2" onclick="check(this.value)" value="Beasiswa AFIRMASI" <?php if ( $studytracer['a2'] =='Beasiswa AFIRMASI' ) echo 'checked'?>>Beasiswa AFIRMASI</p></label>
							<label><p><input type="radio"  name="a2" onclick="check(this.value)" value="Beasiswa Perusahaan/Swasta" <?php if ( $studytracer['a2'] =='Beasiswa Perusahaan/Swasta' ) echo 'checked'?>>Beasiswa Perusahaan/Swasta</p></label>
							<label><p><input type="radio"  name="a2" onclick="check(this.value)" value="Beasiswa BRI" <?php if ( $studytracer['a2'] =='Beasiswa BRI' ) echo 'checked'?>>Beasiswa BRI</p></label>
							<label><p><input type="radio"  name="a2" onclick="check(this.value)" value="Beasiswa PEMKOT Bekasi" <?php if ( $studytracer['a2'] =='Beasiswa PEMKOT Bekasi' ) echo 'checked'?>>Beasiswa PEMKOT Bekasi</p></label>
							<label><p>
								<input id="radio-a3" type="radio" name="a2"
								<?php
								if($studytracer['a2']=="Biaya Sendiri / Keluarga"){echo "";}
								else if($studytracer['a2']=="Beasiswa ADIK"){echo "";}
								else if($studytracer['a2']=="Beasiswa BIDIKMISI / KIP"){echo "";}
								else if($studytracer['a2']=="Beasiswa PPA"){echo "";}
								else if($studytracer['a2']=="Beasiswa AFIRMASI"){echo "";}
								else if($studytracer['a2']=="Beasiswa Perusahaan/Swasta"){echo "";}
								else if($studytracer['a2']=="Beasiswa BRI"){echo "";}
								else if($studytracer['a2']=="Beasiswa PEMKOT Bekasi"){echo "";}
								else echo 'checked'; ?>> lainnya
								<input id="lainnya-a3" class="lainnya_input" type="text"  name="a2" value="<?=$studytracer['a2'] ?>">
							</p></label>
						</div>
					</div>
					<div id="pembungkuslabelinput">
						<div id="divlabel">
							<label>Apakah Anda Sudah Bekerja</label>
						</div>
						<div id="divinputradio">
							<label><p><input type="radio"  id="dropdown_activated" onclick="Check()" name="a3" value="Sudah Bekerja"  <?php if ( $studytracer['a3'] =='Sudah Bekerja' ) echo 'checked'?>>Sudah Bekerja</p></label>
							<label><p><input type="radio" onclick="Check()" name="a3" value="Resign"<?php if ( $studytracer['a3'] =='Resign' ) echo 'checked'?>>Resign</p></label>
							<label><p><input type="radio" onclick="Check()" name="a3" value="Belum Bekerja"<?php if ( $studytracer['a3'] =='Belum Bekerja' ) echo 'checked'?>>Belum Bekerja</p></label>
							<label><p><input type="radio" onclick="Check()" name="a3" value="Wirausaha" <?php if ( $studytracer['a3'] =='Wirausaha' ) echo 'checked'?>>Wirausaha</p></label>
						</div>
					</div>
					<div id="myDropdown3">
						<div  class="pembungkuslabelinput">
							<div id="divlabel">
								<label>Nama Perusahaan</label>
							</div>
							<div id="divinputtext">
								<input type="text" id="pekerjaan" class="input" name="a4" value="<?= $studytracer['a4'] ?>">
							</div>
						</div>
						<div class="pembungkuslabelinput">
							<div id="divlabel">
								<label>Posisi/jabatan</label>
							</div>
							<div id="divinputtext">
								<input type="text" id="pekerjaan" class="input" name="a5" value="<?= $studytracer['a5'] ?>">
							</div>
						</div>
						<div class="pembungkuslabelinput">
							<div id="divlabel">
								<label>Nama Atasan/Jabatan</label>
							</div>
							<div id="divinputtext">
								<input type="text" id="pekerjaan" class="input" name="a6" value="<?= $studytracer['a6'] ?>">
							</div>
						</div>
					</div>
					<div id="pembungkuslabelinput">
						<div id="divlabel">
							<label>Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label>
						</div>
						<div id="divinputradio">
							<label><p><input type="radio" onclick="check_a7(this.value)" name="a7" value="Sangat Erat"<?php if ( $studytracer['a7'] =='Sangat Erat' ) echo 'checked'?>>Sangat Erat</p></label>
							<label><p><input type="radio" onclick="check_a7(this.value)" name="a7" value="Erat"<?php if ( $studytracer['a7'] =='Erat' ) echo 'checked'?>>Erat</p></label>
							<label><p><input type="radio" onclick="check_a7(this.value)" name="a7" value="Cukup Erat"<?php if ( $studytracer['a7'] =='Cukup Erat' ) echo 'checked'?>>Cukup Erat</p></label>
							<label><p><input type="radio" onclick="check_a7(this.value)" name="a7" value="Kurang Erat"<?php if ( $studytracer['a7'] =='Kurang Erat' ) echo 'checked'?>>Kurang Erat</p></label>
							<label><p><input type="radio" onclick="check_a7(this.value)" name="a7" value="Tidak sama sekali"<?php if ( $studytracer['a7'] =='Tidak sama sekali' ) echo 'checked'?>>Tidak sama sekali</p></label>
							<label><p>
								<input id="radio-a7" type="radio" name="a7"
								<?php
								if($studytracer['a7']=="Sangat Erat"){echo "";}
								else if($studytracer['a7']=="Erat"){echo "";}
								else if($studytracer['a7']=="Cukup Erat"){echo "";}
								else if($studytracer['a7']=="Kurang Erat"){echo "";}
								else if($studytracer['a7']=="Tidak sama sekali"){echo "";}
								else echo 'checked'; ?>> lainnya
								<input id="lainnya-a7" class="lainnya_input" type="text"  name="a7" value="<?= $studytracer['a7'] ?>">
							</p></label>
						</div>
					</div>
					<div id="pembungkuslabelinput">
						<div id="divlabel">
							<label>Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label>
						</div>
						<div id="divinputradio">
							<label><p><input type="radio" onclick="check_a8(this.value)" name="a8" value="Setingkat lebih tinggi"<?php if ( $studytracer['a8'] =='Setingkat lebih tinggi' ) echo 'checked'?>>Setingkat lebih tinggi</p></label>
							<label><p><input type="radio" onclick="check_a8(this.value)" name="a8" value="Tingkat yang sama"<?php if ( $studytracer['a8'] =='Tingkat yang sama' ) echo 'checked'?>>Tingkat yang sama</p></label>
							<label><p><input type="radio" onclick="check_a8(this.value)" name="a8" value="Setingkat lebih rendah"<?php if ( $studytracer['a8'] =='Setingkat lebih rendah' ) echo 'checked'?>>Setingkat lebih rendah</p></label>
							<label><p><input type="radio" onclick="check_a8(this.value)" name="a8" value="Tidak perlu pendidikan yang tinggi"<?php if ( $studytracer['a8'] =='Tidak perlu pendidikan yang tinggi' ) echo 'checked'?>>Tidak perlu pendidikan yang tinggi</p></label>
							<label><p>
								<input id="radio-a8" type="radio" name="a8"
								<?php
								if($studytracer['a8']=="Setingkat lebih tinggi"){echo "";}
								else if($studytracer['a8']=="Tingkat yang sama"){echo "";}
								else if($studytracer['a8']=="Setingkat lebih rendah"){echo "";}
								else if($studytracer['a8']=="Tidak perlu pendidikan yang tinggi"){echo "";}
								else echo 'checked'; ?>> lainnya
								<input id="lainnya-a8" class="lainnya_input" type="text"  name="a8" value="<?= $studytracer['a8'] ?>">
							</p></label>
						</div>
					</div>
					<div id="pembungkuslabelinput">
						<div id="divlabel">
							<label>Kira-kira berapa pendapatan anda perbulan</label>
						</div>
						<div id="divinputradio">
							<label><p><input type="radio"  name="a9" value="Kurang dari Rp 1.000.0000" <?php if ( $studytracer['a9'] =='Kurang dari Rp 1.000.0000' ) echo 'checked'?>>Kurang dari Rp 1.000.0000</p></label>
							<label><p><input type="radio"  name="a9" value="Rp 1.000.000-Rp 3.000.000" <?php if ( $studytracer['a9'] =='Rp 1.000.000-Rp 3.000.000' ) echo 'checked'?>>Rp 1.000.000-Rp 3.000.000</p></label>
							<label><p><input type="radio"  name="a9" value="Rp 3.000.000-Rp 5.000.000" <?php if ( $studytracer['a9'] =='Rp 3.000.000-Rp 5.000.000' ) echo 'checked'?>>Rp 3.000.000-Rp 5.000.000</p></label>
							<label><p><input type="radio"  name="a9" value="Rp 5.000.000-Rp 7.000.000" <?php if ( $studytracer['a9'] =='Rp 5.000.000-Rp 7.000.000' ) echo 'checked'?>>Rp 5.000.000-Rp 7.000.000</p></label>
							<label><p><input type="radio"  name="a9" value="Rp 7.000.000-Rp 10.000.000" <?php if ( $studytracer['a9'] =='Rp 7.000.000-Rp 10.000.000' ) echo 'checked'?>>Rp 7.000.000-Rp 10.000.000</p></label>
							<label><p><input type="radio"  name="a9" value="Lebih dari Rp 10.000.000" <?php if ( $studytracer['a9'] =='Lebih dari Rp 10.000.000' ) echo 'checked'?>>Lebih dari Rp 10.000.000</p></label>
						</div>
					</div>
					<div id="pembungkuslabelinput">
						<div id="divlabel">
							<label>Menurut Anda seberapa besar penekanan pada metode belajar di bawah ini dilaksanakan di program studi anda?</label>
						</div>
						<div id="divinputradio">
							<label><p><input type="radio"  name="a10" value="Sangat Besar"<?php if ( $studytracer['a10'] =='Sangat Besar' ) echo 'checked'?>>Sangat Besar</p></label>
							<label><p><input type="radio"  name="a10" value="Besar"<?php if ( $studytracer['a10'] =='Besar' ) echo 'checked'?>>Besar</p></label>
							<label><p><input type="radio"  name="a10" value="Cukup Besar"<?php if ( $studytracer['a10'] =='Cukup Besar' ) echo 'checked'?>>Cukup Besar</p></label>
							<label><p><input type="radio"  name="a10" value="Kurang"<?php if ( $studytracer['a10'] =='Kurang' ) echo 'checked'?>>Kurang</p></label>
							<label><p><input type="radio"  name="a10" value="Tidak Sama Sekali"<?php if ( $studytracer['a10'] =='Tidak Sama Sekali' ) echo 'checked'?>>Tidak Sama Sekali</p></label>
						</div>
					</div>
					<div id="pembungkuslabelinput">
						<div id="divlabel">
							<label>Kapan anda memulai pekerjaan, Mohon pekerjaan sambilan tidak dimasukkan</label>
						</div>
						<div id="divinputradio">
							<label><p><input type="radio"  name="a11" value="Kira-kira 1 bulan sebelum lulus" <?php if ( $studytracer['a11'] =='Kira-kira 1 bulan sebelum lulus' ) echo 'checked'?>>Kira-kira 1 bulan sebelum lulus</p></label>
							<label><p><input type="radio"  name="a11" value="Kira-kira 1 bulan setelah lulus" <?php if ( $studytracer['a11'] =='Kira-kira 1 bulan setelah lulus' ) echo 'checked'?>>Kira-kira 1 bulan setelah lulus</p></label>
							<label><p><input type="radio"  name="a11" value="Saya tidak mencari kerja" <?php if ( $studytracer['a11'] =='Saya tidak mencari kerja' ) echo 'checked'?>>Saya tidak mencari kerja</p></label>
						</div>
					</div>
					<div id="pembungkuslabelinput">
						<div id="divlabel">
							<label>Bagaimana anda mencari pekerjaan tersebut (jawaban bisa lebih dari satu)</label>
						</div>
						<div id="divinputradio">
							<label><p><input type="Checkbox"  name="a12[]" value="Melalui iklan di koran"
								<?php $a = explode(",", $studytracer['a12']);echo in_array("Melalui iklan di koran",$a)?' checked':'';	?>>Melalui iklan di koran</p></label>
								<label><p><input type="Checkbox"  name="a12[]" value="Melamar ke Perusahaan tanpa mengetahui lowongan yang ada" 
									<?php $a = explode(",", $studytracer['a12']);echo in_array("Melamar ke Perusahaan tanpa mengetahui lowongan yang ada",$a)?' checked':'';?>>Melamar ke Perusahaan tanpa mengetahui lowongan yang ada</p></label>
									<label><p><input type="Checkbox"  name="a12[]" value="Bekerja ke bursa/pameran kerja" 
										<?php $a = explode(",", $studytracer['a12']);echo in_array("Bekerja ke bursa/pameran kerja",$a)?' checked':'';?>>Bekerja ke bursa/pameran kerja</p></label>
										<label><p><input type="Checkbox"  name="a12[]" value="Mencari lewat internet/iklan online/milis"
											<?php $a = explode(",", $studytracer['a12']);echo in_array("Mencari lewat internet/iklan online/milis",$a)?' checked':'';?>>Mencari lewat internet/iklan online/milis</p></label>
											<label><p><input type="Checkbox"  name="a12[]" value="Dihubungi oleh perusahaan"
												<?php $a = explode(",", $studytracer['a12']);echo in_array("Dihubungi oleh perusahaan",$a)?' checked':'';?>
												>Dihubungi oleh perusahaan</p></label>
												<label><p><input type="Checkbox"  name="a12[]" value="Menghubungi Kemenakertrans"
													<?php $a = explode(",", $studytracer['a12']);echo in_array("Menghubungi Kemenakertrans",$a)?' checked':'';?>
													>Menghubungi Kemenakertrans</p></label>
													<label><p><input type="Checkbox"  name="a12[]" value="Menghubungi agen/ tenaga kerja komersial/ swasta"
														<?php $a = explode(",", $studytracer['a12']);echo in_array("Menghubungi agen/ tenaga kerja komersial/ swasta",$a)?' checked':'';?>
														>Menghubungi agen/ tenaga kerja komersial/ swasta</p></label>
														<label><p><input type="Checkbox"  name="a12[]" value="Bekerja di tempat yang sama dengan tempat kerja semasa kuliah"
															<?php $a = explode(",", $studytracer['a12']);echo in_array("Bekerja di tempat yang sama dengan tempat kerja semasa kuliah",$a)?' checked':'';?>
															>Bekerja di tempat yang sama dengan tempat kerja semasa kuliah</p></label>
															<label><p>
																lainnya
																<input id="lainnya-a12" class="lainnya_input" type="text"  name="a12[]" value="<?php 
																$a = explode(",", $studytracer['a12']);
																$b = array("Melalui iklan di koran","Melamar ke Perusahaan tanpa mengetahui lowongan yang ada","Bekerja ke bursa/pameran kerja","Mencari lewat internet/iklan online/milis","Dihubungi oleh perusahaan","Menghubungi Kemenakertrans","Menghubungi agen/ tenaga kerja komersial/ swasta","Bekerja di tempat yang sama dengan tempat kerja semasa kuliah");
																$c = array_diff($a,$b);
																$d = implode("", $c);
																echo "$d";
																?>">
															</p></label>
														</div>
													</div>
													<div id="pembungkuslabelinput">
														<div id="divlabel">
															<label>Berapa banyak perusahaan/instansi yang anda lamar (lewat/ surat atau email) sebelum anda memperoleh pekerjaan utama?</label>
														</div>
														<div id="divinputradio">	
															<label><p><input type="radio"  name="a13" value="Kurang dari 2" <?php if ( $studytracer['a13'] =='Kurang dari 2' ) echo 'checked'?>>Kurang dari 2 </p></label>
															<label><p><input type="radio"  name="a13" value="Antara 3 sampai dengan 5" <?php if ( $studytracer['a13'] =='Antara 3 sampai dengan 5' ) echo 'checked'?>>Antara 3 sampai dengan 5</p></label>
															<label><p><input type="radio"  name="a13" value="Antara 5 sampai 10" <?php if ( $studytracer['a13'] =='Antara 5 sampai 10' ) echo 'checked'?>>Antara 5 sampai 10</p></label>
															<!-- <label><p><input type="radio"  name="a13" value="Lebih dari 10" <?php if ( $studytracer['a13'] =='Lebih dari 10' ) echo 'checked'?>>Lebih dari 10</p></label> -->
														</div>
													</div>
													<div id="pembungkuslabelinput">
														<div id="divlabel">
															<label>Berapa banyak perusahaan atau instansi/institusi yang merespon lamaran anda</label>
														</div>
														<div id="divinputradio">
															<label><p><input type="radio"  name="a14" value="Kurang dari 2 " <?php if ( $studytracer['a14'] =='Kurang dari 2 ' ) echo 'checked'?>>Kurang dari 2 </p></label>
															<label><p><input type="radio"  name="a14" value="Antara 3 sampai dengan 5" <?php if ( $studytracer['a14'] =='Antara 3 sampai dengan 5' ) echo 'checked'?>>Antara 3 sampai dengan 5</p></label>
															<label><p><input type="radio"  name="a14" value="Antara 5 sampai 10" <?php if ( $studytracer['a14'] =='Antara 5 sampai 10' ) echo 'checked'?>>Antara 5 sampai 10</p></label>
															<label><p><input type="radio"  name="a14" value="Lebih dari 10" <?php if ( $studytracer['a14'] =='Lebih dari 10' ) echo 'checked'?>>Lebih dari 10</p></label>
														</div>
													</div>
													<div id="pembungkuslabelinput">
														<div id="divlabel">
															<label>Berapa banyak perusahaan instansi atau institusi yang mengundang anda untuk wawancara?</label>
														</div>
														<div id="divinputradio">
															<label><p><input type="radio"  name="a15" value="Kurang dari 2 " <?php if ( $studytracer['a15'] =='Kurang dari 2 ' ) echo 'checked'?>>Kurang dari 2 </p></label>
															<label><p><input type="radio"  name="a15" value="Antara 3 sampai dengan 5" <?php if ( $studytracer['a15'] =='Antara 3 sampai dengan 5' ) echo 'checked'?>>Antara 3 sampai dengan 5</p></label>
															<label><p><input type="radio"  name="a15" value="Antara 5 sampai 10" <?php if ( $studytracer['a15'] =='Antara 5 sampai 10' ) echo 'checked'?>>Antara 5 sampai 10</p></label>
															<label><p><input type="radio"  name="a15" value="Lebih dari 10" <?php if ( $studytracer['a15'] =='Lebih dari 10' ) echo 'checked'?>>Lebih dari 10</p></label>
														</div>
													</div>
													<div id="pembungkuslabelinput">
														<div id="divlabel">
															<label>Bagaimana anda menggambarkan situasi saat ini (Jawaban bisa lebih dari satu)</label>
														</div>
														<div id="divinputradio">
															<label><p><input type="Checkbox"  name="a16[]" value="Saya masih belajar melanjutkan kuliah profesi atau pascasarjana"
																<?php $a = explode(",", $studytracer['a16']);echo in_array("Saya masih belajar melanjutkan kuliah profesi atau pascasarjana",$a)?' checked':'';	?>>Saya masih belajar melanjutkan kuliah profesi atau pascasarjana</p></label>
																<label><p><input type="Checkbox"  name="a16[]" value="Saya Menikah" 
																	<?php $a = explode(",", $studytracer['a16']);echo in_array("Saya Menikah",$a)?' checked':'';?>>Saya menikah</p></label>
																	<label><p><input type="Checkbox"  name="a16[]" value="Saya sibuk dengan keluarga dan anak-anak" 
																		<?php $a = explode(",", $studytracer['a16']);echo in_array("Saya sibuk dengan keluarga dan anak-anak",$a)?' checked':'';?>>Saya sibuk dengan keluarga dan anak-anak</p></label>
																		<label><p><input type="Checkbox"  name="a16[]" value="Saya sekarang sedang mencari pekerjaan"
																			<?php $a = explode(",", $studytracer['a16']);echo in_array("Saya sekarang sedang mencari pekerjaan",$a)?' checked':'';?>>Saya sekarang sedang mencari pekerjaan</p></label>
																			<label><p><input type="Checkbox"  name="a16[]" value="Saya sedang bekerja"
																				<?php $a = explode(",", $studytracer['a16']);echo in_array("Saya sedang bekerja",$a)?' checked':'';?>
																				>Saya sedang bekerja</p></label>

																			</div>
																		</div>
																		<div id="pembungkuslabelinput">
																			<div id="divlabel">
																				<label>Apakah anda aktif dalam mencari pekerjaan dalam empat minggu terakhir?</label>
																			</div>
																			<div id="divinputradio">
																				<label><p><input type="radio" onclick="check_a17(this.value)"  name="a17" value="Tidak"<?php if ( $studytracer['a17'] =='Tidak' ) echo 'checked'?>>Tidak</p></label>
																				<label><p><input type="radio" onclick="check_a17(this.value)"  name="a17" value="Tidak saya menunggu hasil lamaran kerja"<?php if ( $studytracer['a17'] =='Tidak saya menunggu hasil lamaran kerja' ) echo 'checked'?>>Tidak saya menunggu hasil lamaran kerja</p></label>
																				<label><p><input type="radio" onclick="check_a17(this.value)"  name="a17" value="Ya, saya akan bekerja dua minggu ke depan"<?php if ( $studytracer['a17'] =='Ya, saya akan bekerja dua minggu ke depan' ) echo 'checked'?>>Ya, saya akan bekerja dua minggu ke depan</p></label>
																				<label><p><input type="radio" onclick="check_a17(this.value)"  name="a17" value="Ya, saya belum pasti bekerja dalam dua minggu ke depan"<?php if ( $studytracer['a17'] =='Ya, saya belum pasti bekerja dalam dua minggu ke depan' ) echo 'checked'?>>Ya, saya belum pasti bekerja dalam dua minggu ke depan</p></label>
																				<label><p>
																					<input id="radio-a17" type="radio" name="a17"
																					<?php
																					if($studytracer['a17']=="Tidak"){echo "";}
																					else if($studytracer['a17']=="Tidak saya menunggu hasil lamaran kerja"){echo "";}
																					else if($studytracer['a17']=="Ya, saya akan bekerja dua minggu ke depan"){echo "";}
																					else if($studytracer['a17']=="Ya, saya belum pasti bekerja dalam dua minggu ke depan"){echo "";}
																					else echo 'checked'; ?>> lainnya
																					<input id="lainnya-a17" class="lainnya_input" type="text"  name="a17" value="<?= $studytracer['a17'] ?>">
																				</p></label>
																			</div>
																		</div>
																		<div id="pembungkuslabelinput">
																			<div id="divlabel">
																				<label>Apa jenis perusahaan/instansi tempat anda bekerja sekarang?</label>
																			</div>
																			<div id="divinputradio">
																				<label><p><input type="radio" onclick="check_a18(this.value)"  name="a18" value="Organisasi pemerintah termasuk BUMN"<?php if ( $studytracer['a18'] =='Organisasi pemerintah termasuk BUMN' ) echo 'checked'?>>Organisasi pemerintah termasuk BUMN</p></label>
																				<label><p><input type="radio" onclick="check_a18(this.value)"  name="a18" value="Organisasi non profit/lembaga swadaya masyarakat"<?php if ( $studytracer['a18'] =='Organisasi non profit/lembaga swadaya masyarakat' ) echo 'checked'?>>Organisasi non profit/lembaga swadaya masyarakat</p></label>
																				<label><p><input type="radio" onclick="check_a18(this.value)"  name="a18" value="Perusahaan Swasta"<?php if ( $studytracer['a18'] =='Perusahaan Swasta' ) echo 'checked'?>>Perusahaan Swasta</p></label>
																				<label><p><input type="radio" onclick="check_a18(this.value)"  name="a18" value="Perusahaan Sendiri/Wirausaha"<?php if ( $studytracer['a18'] =='Perusahaan Sendiri/Wirausaha' ) echo 'checked'?>>Perusahaan Sendiri/Wirausaha</p></label>
																				<label><p>
																					<input id="radio-a18" type="radio" name="a18"
																					<?php
																					if($studytracer['a18']=="Organisasi pemerintah termasuk BUMN"){echo "";}
																					else if($studytracer['a18']=="Organisasi non profit/lembaga swadaya masyarakat"){echo "";}
																					else if($studytracer['a18']=="Perusahaan Swasta"){echo "";}
																					else if($studytracer['a18']=="Perusahaan Sendiri/Wirausaha"){echo "";}
																					else echo 'checked'; ?>> lainnya
																					<input id="lainnya-a18" class="lainnya_input" type="text"  name="a18" value="<?= $studytracer['a18'] ?>">
																				</p></label>
																			</div>
																		</div>
																		<div id="pembungkuslabelinput">
																			<div id="divlabel">
																				<label>Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? (Jawaban bisa lebih satu)</label>
																			</div>
																			<div id="divinputradio">
																				<label><p><input type="Checkbox"  name="a19[]" value="Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya"
																					<?php $a = explode(",", $studytracer['a19']);echo in_array("Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya",$a)?' checked':'';	?>>Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya</p></label>
																					<label><p><input type="Checkbox"  name="a19[]" value="Saya mendapat pekerjaan yang lebih sesuai" 
																						<?php $a = explode(",", $studytracer['a19']);echo in_array("Saya mendapat pekerjaan yang lebih sesuai",$a)?' checked':'';?>>Saya mendapat pekerjaan yang lebih sesuai</p></label>
																						<label><p><input type="Checkbox"  name="a19[]" value="Di pekerjaan ini saya memperoleh kesempatan karir yang lebih baik" 
																							<?php $a = explode(",", $studytracer['a19']);echo in_array("Di pekerjaan ini saya memperoleh kesempatan karir yang lebih baik",$a)?' checked':'';?>>Di pekerjaan ini saya memperoleh kesempatan karir yang lebih baik</p></label>
																							<label><p><input type="Checkbox"  name="a19[]" value="Saya lebih suka bekerja di lingkungan yang tidak sesuai dengan pendidikan saya"
																								<?php $a = explode(",", $studytracer['a19']);echo in_array("Saya lebih suka bekerja di lingkungan yang tidak sesuai dengan pendidikan saya",$a)?' checked':'';?>>Saya lebih suka bekerja di lingkungan yang tidak sesuai dengan pendidikan saya</p></label>
																								<label><p><input type="Checkbox"  name="a19[]" value="Saya dipromosikan di tempat yang kurang sesuai dengan latar pendidikan"
																									<?php $a = explode(",", $studytracer['a19']);echo in_array("Saya dipromosikan di tempat yang kurang sesuai dengan latar pendidikan",$a)?' checked':'';?>
																									>Saya dipromosikan di tempat yang kurang sesuai dengan latar pendidikan</p></label>
																									<label><p><input type="Checkbox"  name="a19[]" value="Saya memperoleh pendapatan yang lebih tinggi"
																										<?php $a = explode(",", $studytracer['a19']);echo in_array("Saya memperoleh pendapatan yang lebih tinggi",$a)?' checked':'';?>
																										>Saya memperoleh pendapatan yang lebih tinggi</p></label>
																										<label><p><input type="Checkbox"  name="a19[]" value="Pekerjaan saat ini lebih aman/terjamin atau secure"
																											<?php $a = explode(",", $studytracer['a19']);echo in_array("Pekerjaan saat ini lebih aman/terjamin atau secure",$a)?' checked':'';?>
																											>Pekerjaan saat ini lebih aman/terjamin atau secure</p></label>
																											<label><p><input type="Checkbox"  name="a19[]" value="Pekerjaan saya saat ini lebih menarik"
																												<?php $a = explode(",", $studytracer['a19']);echo in_array("Pekerjaan saya saat ini lebih menarik",$a)?' checked':'';?>
																												>Pekerjaan saya saat ini lebih menarik</p></label>
																												<label><p><input type="Checkbox"  name="a19[]" value="Pekerjaan saat ini lebih memungkinkan pekerjaan tambahan yang fleksibel"
																													<?php $a = explode(",", $studytracer['a19']);echo in_array("Pekerjaan saat ini lebih memungkinkan pekerjaan tambahan yang fleksibel",$a)?' checked':'';?>
																													>Pekerjaan saat ini lebih memungkinkan pekerjaan tambahan yang fleksibel</p></label>
																													<label><p><input type="Checkbox"  name="a19[]" value="Pekerjaan saat ini lokasinya lebih dekat dengan rumah"
																														<?php $a = explode(",", $studytracer['a19']);echo in_array("Pekerjaan saat ini lokasinya lebih dekat dengan rumah",$a)?' checked':'';?>
																														>Pekerjaan saat ini lokasinya lebih dekat dengan rumah</p></label>
																														<label><p><input type="Checkbox"  name="a19[]" value="Pekerjaan saat ini dapat menjamin kebutuhan keluarga saya"
																															<?php $a = explode(",", $studytracer['a19']);echo in_array("Pekerjaan saat ini dapat menjamin kebutuhan keluarga saya",$a)?' checked':'';?>
																															>Pekerjaan saat ini dapat menjamin kebutuhan keluarga saya</p></label>
																															<label><p><input type="Checkbox"  name="a19[]" value="Pada awal meniti karir saya harus menerima pekerjaan yang berhubungan dengan pendidikan saya"
																																<?php $a = explode(",", $studytracer['a19']);echo in_array("Pada awal meniti karir saya harus menerima pekerjaan yang berhubungan dengan pendidikan saya",$a)?' checked':'';?>
																																>Pada awal meniti karir saya harus menerima pekerjaan yang berhubungan dengan pendidikan saya</p></label>
																															</div>
																														</div>
																														<div id="pembungkuslabelinput">
																															<div id="divlabel">
																																<label>Bagaimana tingkat kompetensi anda berkaitan dengan pekerjaan yang sedang dijalani?</label>
																															</div>
																															<div id="divinputradio">
																																<label><p><input type="radio"  name="a20" value="Sangat Tinggi"<?php if ( $studytracer['a20'] =='Sangat Tinggi' ) echo 'checked'?>>Sangat Tinggi</p></label>
																																<label><p><input type="radio"  name="a20" value="Tinggi"<?php if ( $studytracer['a20'] =='Tinggi' ) echo 'checked'?>>Tinggi</p></label>
																																<label><p><input type="radio"  name="a20" value="Rendah"<?php if ( $studytracer['a20'] =='Rendah' ) echo 'checked'?>>Rendah</p></label>
																																<label><p><input type="radio"  name="a20" value="Sangat Rendah"<?php if ( $studytracer['a20'] =='Sangat Rendah' ) echo 'checked'?>>Sangat Rendah</p></label>
																															</div>
																														</div>
																													</div>
<!-- 
	<div>Bagian TraceStudy 2</div>
-->
<div id="divjudultracerstudy2">
	<p>Menurut Pendapat Anda, seberapa penting aspek-aspek berikut bagi pengembangan karir anda?</p><br>
	<p>Keterangan Jawaban 1= tidak penting ----------------------------- 5 = Sangat Penting</p>
</div>
<div id="tracerstudy2">
	<div id="pembungkuskiri">
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Pengetahuan di bidang atau disiplin ilmu anda</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b1" value="Tidak Penting" <?php if ( $studytracer2['b1'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b1" value="Kurang Penting" <?php if ( $studytracer2['b1'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b1" value="Cukup Penting" <?php if ( $studytracer2['b1'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b1" value="Penting" <?php if ( $studytracer2['b1'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b1" value="Sangat Penting" <?php if ( $studytracer2['b1'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Pengetahuan di luar bidang ilmu atau disiplin ilmu anda</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b2" value="Tidak Penting" <?php if ( $studytracer2['b2'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b2" value="Kurang Penting" <?php if ( $studytracer2['b2'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b2" value="Cukup Penting" <?php if ( $studytracer2['b2'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b2" value="Penting" <?php if ( $studytracer2['b2'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b2" value="Sangat Penting" <?php if ( $studytracer2['b2'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Bahasa Inggris</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b4" value="Tidak Penting" <?php if ( $studytracer2['b4'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b4" value="Kurang Penting" <?php if ( $studytracer2['b4'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b4" value="Cukup Penting" <?php if ( $studytracer2['b4'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b4" value="Penting" <?php if ( $studytracer2['b4'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b4" value="Sangat Penting" <?php if ( $studytracer2['b4'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Keterampilan Internet</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b5" value="Tidak Penting" <?php if ( $studytracer2['b5'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b5" value="Kurang Penting" <?php if ( $studytracer2['b5'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b5" value="Cukup Penting" <?php if ( $studytracer2['b5'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b5" value="Penting" <?php if ( $studytracer2['b5'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b5" value="Sangat Penting" <?php if ( $studytracer2['b5'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Keterampilan Komputer</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b6" value="Tidak Penting" <?php if ( $studytracer2['b6'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b6" value="Kurang Penting" <?php if ( $studytracer2['b6'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b6" value="Cukup Penting" <?php if ( $studytracer2['b6'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b6" value="Penting" <?php if ( $studytracer2['b6'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b6" value="Sangat Penting" <?php if ( $studytracer2['b6'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Berpikir Kritis</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b7" value="Tidak Penting" <?php if ( $studytracer2['b7'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b7" value="Kurang Penting" <?php if ( $studytracer2['b7'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b7" value="Cukup Penting" <?php if ( $studytracer2['b7'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b7" value="Penting" <?php if ( $studytracer2['b7'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b7" value="Sangat Penting" <?php if ( $studytracer2['b7'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Keterampilan Riset</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b8" value="Tidak Penting" <?php if ( $studytracer2['b8'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b8" value="Kurang Penting" <?php if ( $studytracer2['b8'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b8" value="Cukup Penting" <?php if ( $studytracer2['b8'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b8" value="Penting" <?php if ( $studytracer2['b8'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b8" value="Sangat Penting" <?php if ( $studytracer2['b8'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Kemampuan Belajar</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b9" value="Tidak Penting" <?php if ( $studytracer2['b9'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b9" value="Kurang Penting" <?php if ( $studytracer2['b9'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b9" value="Cukup Penting" <?php if ( $studytracer2['b9'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b9" value="Penting" <?php if ( $studytracer2['b9'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b9" value="Sangat Penting" <?php if ( $studytracer2['b9'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Kemampuan Berkomunikasi</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b10" value="Tidak Penting" <?php if ( $studytracer2['b10'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b10" value="Kurang Penting" <?php if ( $studytracer2['b10'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b10" value="Cukup Penting" <?php if ( $studytracer2['b10'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b10" value="Penting" <?php if ( $studytracer2['b10'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b10" value="Sangat Penting" <?php if ( $studytracer2['b10'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Bekerja di bawah tekanan</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b11" value="Tidak Penting" <?php if ( $studytracer2['b11'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b11" value="Kurang Penting" <?php if ( $studytracer2['b11'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b11" value="Cukup Penting" <?php if ( $studytracer2['b11'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b11" value="Penting" <?php if ( $studytracer2['b11'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b11" value="Sangat Penting" <?php if ( $studytracer2['b11'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Manajemen waktu</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b12" value="Tidak Penting" <?php if ( $studytracer2['b12'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b12" value="Kurang Penting" <?php if ( $studytracer2['b12'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b12" value="Cukup Penting" <?php if ( $studytracer2['b12'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b12" value="Penting" <?php if ( $studytracer2['b12'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b12" value="Sangat Penting" <?php if ( $studytracer2['b12'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Bekerja secara mandiri</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b13" value="Tidak Penting" <?php if ( $studytracer2['b13'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b13" value="Kurang Penting" <?php if ( $studytracer2['b13'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b13" value="Cukup Penting" <?php if ( $studytracer2['b13'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b13" value="Penting" <?php if ( $studytracer2['b13'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b13" value="Sangat Penting" <?php if ( $studytracer2['b13'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Bekerja sama dalam tim/bekerja sama dengan orang lain</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b14" value="Tidak Penting" <?php if ( $studytracer2['b14'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b14" value="Kurang Penting" <?php if ( $studytracer2['b14'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b14" value="Cukup Penting" <?php if ( $studytracer2['b14'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b14" value="Penting" <?php if ( $studytracer2['b14'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b14" value="Sangat Penting" <?php if ( $studytracer2['b14'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Kemampuan memecahkan masalah</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b15" value="Tidak Penting" <?php if ( $studytracer2['b15'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b15" value="Kurang Penting" <?php if ( $studytracer2['b15'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b15" value="Cukup Penting" <?php if ( $studytracer2['b15'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b15" value="Penting" <?php if ( $studytracer2['b15'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b15" value="Sangat Penting" <?php if ( $studytracer2['b15'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Negosiasi</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b16" value="Tidak Penting" <?php if ( $studytracer2['b16'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b16" value="Kurang Penting" <?php if ( $studytracer2['b16'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b16" value="Cukup Penting" <?php if ( $studytracer2['b16'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b16" value="Penting" <?php if ( $studytracer2['b16'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b16" value="Sangat Penting" <?php if ( $studytracer2['b16'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>
	</div>
	<div id="pembungkuskanan">
		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Kemampuan analisis</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b17" value="Tidak Penting" <?php if ( $studytracer2['b17'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b17" value="Kurang Penting" <?php if ( $studytracer2['b17'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b17" value="Cukup Penting" <?php if ( $studytracer2['b17'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b17" value="Penting" <?php if ( $studytracer2['b17'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b17" value="Sangat Penting" <?php if ( $studytracer2['b17'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Toleransi</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b18" value="Tidak Penting" <?php if ( $studytracer2['b18'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b18" value="Kurang Penting" <?php if ( $studytracer2['b18'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b18" value="Cukup Penting" <?php if ( $studytracer2['b18'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b18" value="Penting" <?php if ( $studytracer2['b18'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b18" value="Sangat Penting" <?php if ( $studytracer2['b18'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Kemampuan adaptasi</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b19" value="Tidak Penting" <?php if ( $studytracer2['b19'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b19" value="Kurang Penting" <?php if ( $studytracer2['b19'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b19" value="Cukup Penting" <?php if ( $studytracer2['b19'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b19" value="Penting" <?php if ( $studytracer2['b19'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b19" value="Sangat Penting" <?php if ( $studytracer2['b19'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Loyalitas</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b20" value="Tidak Penting" <?php if ( $studytracer2['b20'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b20" value="Kurang Penting" <?php if ( $studytracer2['b20'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b20" value="Cukup Penting" <?php if ( $studytracer2['b20'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b20" value="Penting" <?php if ( $studytracer2['b20'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b20" value="Sangat Penting" <?php if ( $studytracer2['b20'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Integritas</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b21" value="Tidak Penting" <?php if ( $studytracer2['b21'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b21" value="Kurang Penting" <?php if ( $studytracer2['b21'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b21" value="Cukup Penting" <?php if ( $studytracer2['b21'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b21" value="Penting" <?php if ( $studytracer2['b21'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b21" value="Sangat Penting" <?php if ( $studytracer2['b21'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Bekerja dengan orang yang berbeda budaya maupun latar belakang</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b22" value="Tidak Penting" <?php if ( $studytracer2['b22'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b22" value="Kurang Penting" <?php if ( $studytracer2['b22'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b22" value="Cukup Penting" <?php if ( $studytracer2['b22'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b22" value="Penting" <?php if ( $studytracer2['b22'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b22" value="Sangat Penting" <?php if ( $studytracer2['b22'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Kepemimpinan</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b23" value="Tidak Penting" <?php if ( $studytracer2['b23'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b23" value="Kurang Penting" <?php if ( $studytracer2['b23'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b23" value="Cukup Penting" <?php if ( $studytracer2['b23'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b23" value="Penting" <?php if ( $studytracer2['b23'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b23" value="Sangat Penting" <?php if ( $studytracer2['b23'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Kemampuan memegang tanggung jawab</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b24" value="Tidak Penting" <?php if ( $studytracer2['b24'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b24" value="Kurang Penting" <?php if ( $studytracer2['b24'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b24" value="Cukup Penting" <?php if ( $studytracer2['b24'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b24" value="Penting" <?php if ( $studytracer2['b24'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b24" value="Sangat Penting" <?php if ( $studytracer2['b24'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Inisiatif</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b25" value="Tidak Penting" <?php if ( $studytracer2['b25'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b25" value="Kurang Penting" <?php if ( $studytracer2['b25'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b25" value="Cukup Penting" <?php if ( $studytracer2['b25'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b25" value="Penting" <?php if ( $studytracer2['b25'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b25" value="Sangat Penting" <?php if ( $studytracer2['b25'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Manajemen Proyek atau program</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b26" value="Tidak Penting" <?php if ( $studytracer2['b26'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b26" value="Kurang Penting" <?php if ( $studytracer2['b26'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b26" value="Cukup Penting" <?php if ( $studytracer2['b26'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b26" value="Penting" <?php if ( $studytracer2['b26'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b26" value="Sangat Penting" <?php if ( $studytracer2['b26'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Kemampuan mempresentasikan ide/produk/laporan</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b27" value="Tidak Penting" <?php if ( $studytracer2['b27'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b27" value="Kurang Penting" <?php if ( $studytracer2['b27'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b27" value="Cukup Penting" <?php if ( $studytracer2['b27'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b27" value="Penting" <?php if ( $studytracer2['b27'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b27" value="Sangat Penting" <?php if ( $studytracer2['b27'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Kemampuan menulis laporan, memo dan dokumen</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b28" value="Tidak Penting" <?php if ( $studytracer2['b28'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b28" value="Kurang Penting" <?php if ( $studytracer2['b28'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b28" value="Cukup Penting" <?php if ( $studytracer2['b28'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b28" value="Penting" <?php if ( $studytracer2['b28'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b28" value="Sangat Penting" <?php if ( $studytracer2['b28'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Kemampuan untuk belajar sepanjang hayat</label>
			</div>
			<div class="divinput2">
				<label><p><input type="radio"  name="b29" value="Tidak Penting" <?php if ( $studytracer2['b29'] =='Tidak Penting' ) echo 'checked'?>>1</p></label>
				<label><p><input type="radio"  name="b29" value="Kurang Penting" <?php if ( $studytracer2['b29'] =='Kurang Penting' ) echo 'checked'?>>2</p></label>
				<label><p><input type="radio"  name="b29" value="Cukup Penting" <?php if ( $studytracer2['b29'] =='Cukup Penting' ) echo 'checked'?>>3</p></label>
				<label><p><input type="radio"  name="b29" value="Penting" <?php if ( $studytracer2['b29'] =='Penting' ) echo 'checked'?>>4</p></label>
				<label><p><input type="radio"  name="b29" value="Sangat Penting" <?php if ( $studytracer2['b29'] =='Sangat Penting' ) echo 'checked'?>>5</p></label>
			</div>
		</div>

		<div id="pembungkuslabelinput2">
			<div class="divlabel2">
				<label>Saran-saran untuk pengembangan Universitas</label>
			</div>
			<div class="divinput21">
				<textarea style="resize: none" rows="3" name="b30"><?=$studytracer2['b30'] ?></textarea><?= form_error('b30', '<small class="eror">', '</small>') ?>
			</div>
		</div>
	</div>
</div>
<div id="pembungkussubmit">
	<button type="submit"><i class="fa fa-check" style="font-size: 20px;">KIRIM</i></button>
</div>
</div>
</form>
</nav>
<nav id="pembungkusnavigasi">
	<div id="navigasi">
		<a class="left1" href="<?= base_url('login')?>"><i class="fa fa-user-circle-o icon " style="font-size: 20px;"></i><p class="left2">Dashboard</p></a>
		<a href="<?= base_url('login')?>"><i class="fa fa-user-circle-o icon" style="font-size: 20px;"></i><p>Profil</p></a>
		<a href="<?= base_url('login')?>"><i class="fa fa-question-circle-o iconkuisioner " style="font-size: 23px;"></i><p>Kuisioner</p></a>
		<a href="<?= base_url('login') ?>"><i class="fa fa-lock iconpassword " style="font-size: 25px;"></i><p>Change Password</p></a>
		<a class="right1"href="<?= base_url('login')?>"><i class="fa fa-sign-out iconlogout" style="font-size: 23px;"></i><p class="right2">Logout</p></a>

	</div>

</nav>
</body>
</html>
<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('assets/js/js.js') ?>"></script>
