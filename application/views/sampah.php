				<nav class="navformtracerstudy22">
					<div class="divformtracerstudy12">
						<div class="divformtracerstudy22">
							<div class="divlabelformtracerstudy1">
								<label>Berapa bulan waktu (sebelum atau sesudah kelulusan) untuk memperoleh pekerjaan pertama?</label>
							</div>
							<div class="divinputtracerstudy12">
								<input type="text" class="input" name="a1" value="<?=$studytracer['a1'] ?>"><?= form_error('a1', '<small class="eror">', '</small>') ?>
							</div>
						</div>
		
		<div class="divformtracerstudy22">
				<div class="divlabelformtracerstudy1">
						<label>Sebutkan sumberdana dalam pembiayaan kuliah?</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio" name="a2" value="Biaya Sendiri / Keluarga"  ><?= form_error('a2', '<small class="eror">', '</small>') ?>Biaya Sendiri / Keluarga</p></label>
					<label><p><input type="radio"  name="a2" value="Beasiswa ADIK" ><?= form_error('a2', '<small class="eror">', '</small>') ?>Beasiswa ADIK</p></label>
					<label><p><input type="radio"  name="a2" value="Beasiswa BIDIKMISI / KIP" ><?= form_error('a2', '<small class="eror">', '</small>') ?>Beasiswa BIDIKMISI / KIP</p></label>
					<label><p><input type="radio"  name="a2" value="Beasiswa PPA"><?= form_error('a2', '<small class="eror">', '</small>') ?>Beasiswa PPA</p></label>
					<label><p><input type="radio"  name="a2" value="Beasiswa AFIRMASI"><?= form_error('a2', '<small class="eror">', '</small>') ?>Beasiswa AFIRMASI</p></label>
					<label><p><input type="radio"  name="a2" value="Beasiswa Perusahaan/Swasta"><?= form_error('a2', '<small class="eror">', '</small>') ?>Beasiswa Perusahaan/Swasta</p></label>
					<label><p><input type="radio"  name="a2" value="Beasiswa BRI"><?= form_error('a2', '<small class="eror">', '</small>') ?>Beasiswa BRI</p></label>
					<label><p><input type="radio"  name="a2" value="Beasiswa PEMKOT Bekasi"><?= form_error('a2', '<small class="eror">', '</small>') ?>Beasiswa PEMKOT Bekasi</p></label>
				</div>
		</div>
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Apakah Anda Sudah Bekerja</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio"  name="a3" value="Sudah Bekerja"  <?php if ( $studytracer['a3'] =='Sudah Bekerja' ) echo 'checked'?><?= form_error('a3', '<small class="eror">', '</small>') ?>>Sudah Bekerja</p></label>
					<label><p><input type="radio"  name="a3" value="Belum Bekerja" <?php if ( $studytracer['a3'] =='Belum Bekerja' ) echo 'checked'?><?= form_error('a3', '<small class="eror">', '</small>') ?>>Belum Bekerja</p></label>
					<label><p><input type="radio"  name="a3" value="Wirausaha" <?php if ( $studytracer['a3'] =='Wirausaha' ) echo 'checked'?><?= form_error('a3', '<small class="eror">', '</small>') ?>>Wirausaha</p></label>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Nama Perusahaan</label>
				</div>
				<div class="divinputtracerstudy12">
						<input type="text" class="input" name="a4" value="<?= $studytracer['a4'] ?>"><?= form_error('a4', '<small class="eror">', '</small>') ?>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Posisi/jabatan</label>
				</div>
				<div class="divinputtracerstudy12">
						<input type="text" class="input" name="a5" value="<?= $studytracer['a5'] ?>"><?= form_error('a5', '<small class="eror">', '</small>') ?>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Nama Atasan/Jabatan</label>
				</div>
				<div class="divinputtracerstudy12">
						<input type="text" class="input" name="a6" value="<?= $studytracer['a6'] ?>"><?= form_error('a6', '<small class="eror">', '</small>') ?>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio"  name="a7" value="Sangat Erat"<?php if ( $studytracer['a7'] =='Sangat Erat' ) echo 'checked'?><?= form_error('a7', '<small class="eror">', '</small>') ?>>Sangat Erat</p></label>
					<label><p><input type="radio"  name="a7" value="Erat"<?php if ( $studytracer['a7'] =='Erat' ) echo 'checked'?><?= form_error('a7', '<small class="eror">', '</small>') ?>>Erat</p></label>
					<label><p><input type="radio"  name="a7" value="Cukup Erat"<?php if ( $studytracer['a7'] =='Cukup Erat' ) echo 'checked'?><?= form_error('a7', '<small class="eror">', '</small>') ?>>Cukup Erat</p></label>
					<label><p><input type="radio"  name="a7" value="Kurang Erat"<?php if ( $studytracer['a7'] =='Kurang Erat' ) echo 'checked'?><?= form_error('a7', '<small class="eror">', '</small>') ?>>Kurang Erat</p></label>
					<label><p><input type="radio"  name="a7" value="Tidak sama sekali"<?php if ( $studytracer['a7'] =='Tidak sama sekali' ) echo 'checked'?><?= form_error('a7', '<small class="eror">', '</small>') ?>>Tidak sama sekali</p></label>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio"  name="a8" value="Setingkat lebih tinggi"<?php if ( $studytracer['a8'] =='Setingkat lebih tinggi' ) echo 'checked'?><?= form_error('a8', '<small class="eror">', '</small>') ?>>Setingkat lebih tinggi</p></label>
					<label><p><input type="radio"  name="a8" value="Tingkat yang sama"<?php if ( $studytracer['a8'] =='Tingkat yang sama' ) echo 'checked'?><?= form_error('a8', '<small class="eror">', '</small>') ?>>Tingkat yang sama</p></label>
					<label><p><input type="radio"  name="a8" value="Setingkat lebih rendah"<?php if ( $studytracer['a8'] =='Setingkat lebih rendah' ) echo 'checked'?><?= form_error('a8', '<small class="eror">', '</small>') ?>>Setingkat lebih rendah</p></label>
					<label><p><input type="radio"  name="a8" value="Tidak perlu pendidikan yang tinggi"<?php if ( $studytracer['a8'] =='Tidak perlu pendidikan yang tinggi' ) echo 'checked'?><?= form_error('a8', '<small class="eror">', '</small>') ?>>Tidak perlu pendidikan yang tinggi</p></label>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Kira-kira berapa pendapatan anda perbulan</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio"  name="a9" value="Kurang dari Rp 1.000.0000" <?php if ( $studytracer['a9'] =='Kurang dari Rp 1.000.0000' ) echo 'checked'?><?= form_error('a9', '<small class="eror">', '</small>') ?>>Kurang dari Rp 1.000.0000</p></label>
					<label><p><input type="radio"  name="a9" value="Rp 1.000.000-Rp 3.000.000" <?php if ( $studytracer['a9'] =='Rp 1.000.000-Rp 3.000.000' ) echo 'checked'?><?= form_error('a9', '<small class="eror">', '</small>') ?>>Rp 1.000.000-Rp 3.000.000</p></label>
					<label><p><input type="radio"  name="a9" value="Rp 3.000.000-Rp 5.000.000" <?php if ( $studytracer['a9'] =='Rp 3.000.000-Rp 5.000.000' ) echo 'checked'?><?= form_error('a9', '<small class="eror">', '</small>') ?>>Rp 3.000.000-Rp 5.000.000</p></label>
					<label><p><input type="radio"  name="a9" value="Rp 5.000.000-Rp 7.000.000" <?php if ( $studytracer['a9'] =='Rp 5.000.000-Rp 7.000.000' ) echo 'checked'?><?= form_error('a9', '<small class="eror">', '</small>') ?>>Rp 5.000.000-Rp 7.000.000</p></label>
					<label><p><input type="radio"  name="a9" value="Rp 7.000.000-Rp 10.000.000" <?php if ( $studytracer['a9'] =='Rp 7.000.000-Rp 10.000.000' ) echo 'checked'?><?= form_error('a9', '<small class="eror">', '</small>') ?>>Rp 7.000.000-Rp 10.000.000</p></label>
					<label><p><input type="radio"  name="a9" value="Lebih dari Rp 10.000.000" <?php if ( $studytracer['a9'] =='Lebih dari Rp 10.000.000' ) echo 'checked'?><?= form_error('a9', '<small class="eror">', '</small>') ?>>Lebih dari Rp 10.000.000</p></label>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Menurut Anda seberapa besar penekanan pada metode belajar di bawah ini dilaksanakan di program studi anda?</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio"  name="a10" value="Sangat Besar"<?php if ( $studytracer['a10'] =='Sangat Besar' ) echo 'checked'?><?= form_error('a10', '<small class="eror">', '</small>') ?>>Sangat Besar</p></label>
					<label><p><input type="radio"  name="a10" value="Besar"<?php if ( $studytracer['a10'] =='Besar' ) echo 'checked'?><?= form_error('a10', '<small class="eror">', '</small>') ?>>Besar</p></label>
					<label><p><input type="radio"  name="a10" value="Cukup Besar"<?php if ( $studytracer['a10'] =='Cukup Besar' ) echo 'checked'?><?= form_error('a10', '<small class="eror">', '</small>') ?>>Cukup Besar</p></label>
					<label><p><input type="radio"  name="a10" value="Kurang"<?php if ( $studytracer['a10'] =='Kurang' ) echo 'checked'?><?= form_error('a10', '<small class="eror">', '</small>') ?>>Kurang</p></label>
					<label><p><input type="radio"  name="a10" value="Tidak Sama Sekali"<?php if ( $studytracer['a10'] =='Tidak Sama Sekali' ) echo 'checked'?><?= form_error('a10', '<small class="eror">', '</small>') ?>>Tidak Sama Sekali</p></label>
				</div>
		</div>
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Kapan anda memulai pekerjaan, Mohon pekerjaan sambilan tidak dimasukkan</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio"  name="a11" value="Kira-kira 1 bulan sebelum lulus" <?php if ( $studytracer['a11'] =='Kira-kira 1 bulan sebelum lulus' ) echo 'checked'?><?= form_error('a11', '<small class="eror">', '</small>') ?>>Kira-kira 1 bulan sebelum lulus</p></label>
					<label><p><input type="radio"  name="a11" value="Kira-kira 1 bulan setelah lulus" <?php if ( $studytracer['a11'] =='Kira-kira 1 bulan setelah lulus' ) echo 'checked'?><?= form_error('a11', '<small class="eror">', '</small>') ?>>Kira-kira 1 bulan setelah lulus</p></label>
					<label><p><input type="radio"  name="a11" value="Saya tidak mencari kerja" <?php if ( $studytracer['a11'] =='Saya tidak mencari kerja' ) echo 'checked'?><?= form_error('a11', '<small class="eror">', '</small>') ?>>Saya tidak mencari kerja</p></label>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Bagaimana anda mencari pekerjaan tersebut (jawaban bisa lebih dari satu)</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="checkbox"  name="a12" value="Melalui iklan di koran"<?php if ( $studytracer['a12'] =='Melalui iklan di koran' ) echo 'checked'?><?= form_error('a12', '<small class="eror">', '</small>') ?>>Melalui iklan di koran</p></label>
					<label><p><input type="checkbox"  name="a12" value="Melamar ke Perusahaan tanpa mengetahui lowongan yang ada"<?php if ( $studytracer['a12'] =='Melamar ke Perusahaan tanpa mengetahui lowongan yang ada' ) echo 'checked'?><?= form_error('a12', '<small class="eror">', '</small>') ?>>Melamar ke Perusahaan tanpa mengetahui lowongan yang ada</p></label>
					<label><p><input type="checkbox"  name="a12" value="Bekerja ke bursa/pameran kerja">Bekerja ke bursa/pameran kerja</p></label>
					<label><p><input type="checkbox"  name="a12" value="Mencari lewat internet/iklan online/milis">Mencari lewat internet/iklan online/milis</p></label>
					<label><p><input type="checkbox"  name="a12" value="Dihubungi oleh perusahaan">Dihubungi oleh perusahaan</p></label>
					<label><p><input type="checkbox"  name="a12" value="Menghubungi Kemenakertrans">Menghubungi Kemenakertrans</p></label>
					<label><p><input type="checkbox"  name="a12" value="Menghubungi agen, tenaga kerja komersial/ swasta">Menghubungi agen, tenaga kerja komersial/ swasta</p></label>
					<label><p><input type="checkbox"  name="a12" value="Bekerja di tempat yang sama dengan tempat kerja semasa kuliah">Bekerja di tempat yang sama dengan tempat kerja semasa kuliah</p></label>
				</div>
		</div>
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Berapa banyak perusahaan/instansi yang anda lamar (lewat/ surat atau email) sebelum anda memperoleh pekerjaan utama?</label>
				</div>
				<div class="divinputtracerstudy121">	
					<label><p><input type="radio"  name="a13" value="Kurang dari 2" <?php if ( $studytracer['a13'] =='Kurang dari 2' ) echo 'checked'?><?= form_error('a13', '<small class="eror">', '</small>') ?>>Kurang dari 2 </p></label>
					<label><p><input type="radio"  name="a13" value="Antara 3 sampai dengan 5" <?php if ( $studytracer['a13'] =='Antara 3 sampai dengan 5' ) echo 'checked'?><?= form_error('a13', '<small class="eror">', '</small>') ?>>Antara 3 sampai dengan 5</p></label>
					<label><p><input type="radio"  name="a13" value="Antara 5 sampai 10" <?php if ( $studytracer['a13'] =='Antara 5 sampai 10' ) echo 'checked'?><?= form_error('a13', '<small class="eror">', '</small>') ?>>Antara 5 sampai 10</p></label>
					<label><p><input type="radio"  name="a13" value="Lebih dari 10" <?php if ( $studytracer['a13'] =='Lebih dari 10' ) echo 'checked'?><?= form_error('a13', '<small class="eror">', '</small>') ?>>Lebih dari 10</p></label>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Berapa banyak perusahaan atau instansi/institusi yang merespon lamaran anda</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio"  name="a14" value="Kurang dari 2 " <?php if ( $studytracer['a14'] =='Kurang dari 2 ' ) echo 'checked'?><?= form_error('a14', '<small class="eror">', '</small>') ?>>Kurang dari 2 </p></label>
					<label><p><input type="radio"  name="a14" value="Antara 3 sampai dengan 5" <?php if ( $studytracer['a14'] =='Antara 3 sampai dengan 5' ) echo 'checked'?><?= form_error('a14', '<small class="eror">', '</small>') ?>>Antara 3 sampai dengan 5</p></label>
					<label><p><input type="radio"  name="a14" value="Antara 5 sampai 10" <?php if ( $studytracer['a14'] =='Antara 5 sampai 10' ) echo 'checked'?><?= form_error('a14', '<small class="eror">', '</small>') ?>>Antara 5 sampai 10</p></label>
					<label><p><input type="radio"  name="a14" value="Lebih dari 10" <?php if ( $studytracer['a14'] =='Lebih dari 10' ) echo 'checked'?><?= form_error('a14', '<small class="eror">', '</small>') ?>>Lebih dari 10</p></label>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Berapa banyak perusahaan instansi atau institusi yang mengundang anda untuk wawancara?</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio"  name="a15" value="Kurang dari 2 " <?php if ( $studytracer['a15'] =='Kurang dari 2 ' ) echo 'checked'?><?= form_error('a15', '<small class="eror">', '</small>') ?>>Kurang dari 2 </p></label>
					<label><p><input type="radio"  name="a15" value="Antara 3 sampai dengan 5" <?php if ( $studytracer['a15'] =='Antara 3 sampai dengan 5' ) echo 'checked'?><?= form_error('a15', '<small class="eror">', '</small>') ?>>Antara 3 sampai dengan 5</p></label>
					<label><p><input type="radio"  name="a15" value="Antara 5 sampai 10" <?php if ( $studytracer['a15'] =='Antara 5 sampai 10' ) echo 'checked'?><?= form_error('a15', '<small class="eror">', '</small>') ?>>Antara 5 sampai 10</p></label>
					<label><p><input type="radio"  name="a15" value="Lebih dari 10" <?php if ( $studytracer['a15'] =='Lebih dari 10' ) echo 'checked'?><?= form_error('a15', '<small class="eror">', '</small>') ?>>Lebih dari 10</p></label>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Bagaimana anda menggambarkan situasi saat ini (Jawaban bisa lebih dari satu)</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="Checkbox"  name="a16" value="Saya masih belajar melanjutkan kuliah profesi atau pascasarjana" <?php if ( $studytracer['a16'] =='Saya masih belajar melanjutkan kuliah profesi atau pascasarjana' ) echo 'checked'?><?= form_error('a16', '<small class="eror">', '</small>') ?>>Saya masih belajar melanjutkan kuliah profesi atau pascasarjana</p></label>
					<label><p><input type="Checkbox"  name="a16" value="Saya menikah" <?php if ( $studytracer['a16'] =='Saya menikah' ) echo 'checked'?><?= form_error('a16', '<small class="eror">', '</small>') ?>>Saya menikah</p></label>
					<label><p><input type="Checkbox"  name="a16" value="Saya sibuk dengan keluarga dan anak-anak" <?php if ( $studytracer['a16'] =='Saya sibuk dengan keluarga dan anak-anak' ) echo 'checked'?><?= form_error('a16', '<small class="eror">', '</small>') ?>>Saya sibuk dengan keluarga dan anak-anak</p></label>
					<label><p><input type="Checkbox"  name="a16" value="Saya sekarang sedang mencari pekerjaan" <?php if ( $studytracer['a16'] =='Saya sekarang sedang mencari pekerjaan' ) echo 'checked'?><?= form_error('a16', '<small class="eror">', '</small>') ?>>Saya sekarang sedang mencari pekerjaan</p></label>
					<label><p><input type="Checkbox"  name="a16" value="Saya sedang bekerja" <?php if ( $studytracer['a16'] =='Saya sedang bekerja' ) echo 'checked'?><?= form_error('a16', '<small class="eror">', '</small>') ?>>Saya sedang bekerja</p></label>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Apakah anda aktif dalam mencari pekerjaan dalam empat minggu terakhir?</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio"  name="a17" value="Tidak"<?php if ( $studytracer['a17'] =='Tidak' ) echo 'checked'?><?= form_error('a17', '<small class="eror">', '</small>') ?>>Tidak</p></label>
					<label><p><input type="radio"  name="a17" value="Tidak saya menunggu hasil lamaran kerja"<?php if ( $studytracer['a17'] =='Tidak saya menunggu hasil lamaran kerja' ) echo 'checked'?><?= form_error('a17', '<small class="eror">', '</small>') ?>>Tidak saya menunggu hasil lamaran kerja</p></label>
					<label><p><input type="radio"  name="a17" value="Ya, saya akan bekerja dua minggu ke depan"<?php if ( $studytracer['a17'] =='Ya, saya akan bekerja dua minggu ke depan' ) echo 'checked'?><?= form_error('a17', '<small class="eror">', '</small>') ?>>Ya, saya akan bekerja dua minggu ke depan</p></label>
					<label><p><input type="radio"  name="a17" value="Ya, saya belum pasti bekerja dalam dua minggu ke depan"<?php if ( $studytracer['a17'] =='Ya, saya belum pasti bekerja dalam dua minggu ke depan' ) echo 'checked'?><?= form_error('a17', '<small class="eror">', '</small>') ?>>Ya, saya belum pasti bekerja dalam dua minggu ke depan</p></label>
<!-- 					<div style="background: #aed">
						<label>Yang Lain :
							<input class="input" type="text" name=p17">
						</label>
					</div> -->
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Apa jenis perusahaan/instansi tempat anda bekerja sekarang?</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio"  name="a18" value="Organisasi pemerintah termasuk BUMN"<?php if ( $studytracer['a18'] =='Organisasi pemerintah termasuk BUMN' ) echo 'checked'?><?= form_error('a18', '<small class="eror">', '</small>') ?>>Organisasi pemerintah termasuk BUMN</p></label>
					<label><p><input type="radio"  name="a18" value="Organisasi non profit/lembaga swadaya masyarakat"<?php if ( $studytracer['a18'] =='Organisasi non profit/lembaga swadaya masyarakat' ) echo 'checked'?><?= form_error('a18', '<small class="eror">', '</small>') ?>>Organisasi non profit/lembaga swadaya masyarakat</p></label>
					<label><p><input type="radio"  name="a18" value="Perusahaan Swasta"<?php if ( $studytracer['a18'] =='Perusahaan Swasta' ) echo 'checked'?><?= form_error('a18', '<small class="eror">', '</small>') ?>>Perusahaan Swasta</p></label>
					<label><p><input type="radio"  name="a18" value="Perusahaan Sendiri/Wirausaha"<?php if ( $studytracer['a18'] =='Perusahaan Sendiri/Wirausaha' ) echo 'checked'?><?= form_error('a18', '<small class="eror">', '</small>') ?>>Perusahaan Sendiri/Wirausaha</p></label>
				</div>
		</div>		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? (Jawaban bisa lebih satu)</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="checkbox"  name="a19" value="Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya"<?php if ( $studytracer['a19'] =='Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Pekerjaan saya sekarang sudah sesuai dengan pendidikan saya</p></label>
					<label><p><input type="checkbox"  name="a19" value="Saya mendapat pekerjaan yang lebih sesuai"<?php if ( $studytracer['a19'] =='Saya mendapat pekerjaan yang lebih sesuai' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Saya mendapat pekerjaan yang lebih sesuai</p></label>
					<label><p><input type="checkbox"  name="a19" value="Di pekerjaan ini saya memperoleh kesempatan karir yang lebih baik"<?php if ( $studytracer['a19'] =='Di pekerjaan ini saya memperoleh kesempatan karir yang lebih baik' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Di pekerjaan ini saya memperoleh kesempatan karir yang lebih baik</p></label>
					<label><p><input type="checkbox"  name="a19" value="Saya lebih suka bekerja di lingkungan yang tidak sesuai dengan pendidikan saya"<?php if ( $studytracer['a19'] =='Saya lebih suka bekerja di lingkungan yang tidak sesuai dengan pendidikan saya' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Saya lebih suka bekerja di lingkungan yang tidak sesuai dengan pendidikan saya</p></label>
					<label><p><input type="checkbox"  name="a19" value="Saya dipromosikan di tempat yang kurang sesuai dengan latar pendidikan"<?php if ( $studytracer['a19'] =='Saya dipromosikan di tempat yang kurang sesuai dengan latar pendidikan' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Saya dipromosikan di tempat yang kurang sesuai dengan latar pendidikan</p></label>
					<label><p><input type="checkbox"  name="a19" value="Saya memperoleh pendapatan yang lebih tinggi"<?php if ( $studytracer['a19'] =='Saya memperoleh pendapatan yang lebih tinggi' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Saya memperoleh pendapatan yang lebih tinggi</p></label>
					<label><p><input type="checkbox"  name="a19" value="Pekerjaan saat ini lebih aman/terjamin atau secure"<?php if ( $studytracer['a19'] =='Pekerjaan saat ini lebih aman/terjamin atau secure' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Pekerjaan saat ini lebih aman/terjamin atau secure</p></label>
					<label><p><input type="checkbox"  name="a19" value="Pekerjaan saya saat ini lebih menarik"<?php if ( $studytracer['a19'] =='Pekerjaan saya saat ini lebih menarik' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Pekerjaan saya saat ini lebih menarik</p></label>
					<label><p><input type="checkbox"  name="a19" value="Pekerjaan saat ini lebih memungkinkan pekerjaan tambahan yang fleksibel"<?php if ( $studytracer['a19'] =='Pekerjaan saat ini lebih memungkinkan pekerjaan tambahan yang fleksibel' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Pekerjaan saat ini lebih memungkinkan pekerjaan tambahan yang fleksibel</p></label>
					<label><p><input type="checkbox"  name="a19" value="Pekerjaan saat ini lokasinya lebih dekat dengan rumah"<?php if ( $studytracer['a19'] =='Pekerjaan saat ini lokasinya lebih dekat dengan rumah' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Pekerjaan saat ini lokasinya lebih dekat dengan rumah</p></label>
					<label><p><input type="checkbox"  name="a19" value="Pekerjaan saat ini dapat menjamin kebutuhan keluarga saya"<?php if ( $studytracer['a19'] =='Pekerjaan saat ini dapat menjamin kebutuhan keluarga saya' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Pekerjaan saat ini dapat menjamin kebutuhan keluarga saya</p></label>
					<label><p><input type="checkbox"  name="a19" value="Pada awal meniti karir, saya harus menerima pekerjaan yang berhubungan dengan pendidikan saya"<?php if ( $studytracer['a19'] =='Pada awal meniti karir, saya harus menerima pekerjaan yang berhubungan dengan pendidikan saya' ) echo 'checked'?><?= form_error('a19', '<small class="eror">', '</small>') ?>>Pada awal meniti karir, saya harus menerima pekerjaan yang berhubungan dengan pendidikan saya</p></label>
				</div>
		</div>
		
		<div class="divformtracerstudy2">
				<div class="divlabelformtracerstudy1">
						<label>Bagaimana tingkat kompetensi anda berkaitan dengan pekerjaan yang sedang dijalani?</label>
				</div>
				<div class="divinputtracerstudy121">
					<label><p><input type="radio"  name="a20" value="Sangat Tinggi"<?php if ( $studytracer['a20'] =='Sangat Tinggi' ) echo 'checked'?><?= form_error('a20', '<small class="eror">', '</small>') ?>>Sangat Tinggi</p></label>
					<label><p><input type="radio"  name="a20" value="Tinggi"<?php if ( $studytracer['a20'] =='Tinggi' ) echo 'checked'?><?= form_error('a20', '<small class="eror">', '</small>') ?>>Tinggi</p></label>
					<label><p><input type="radio"  name="a20" value="Rendah"<?php if ( $studytracer['a20'] =='Rendah' ) echo 'checked'?><?= form_error('a20', '<small class="eror">', '</small>') ?>>Rendah</p></label>
					<label><p><input type="radio"  name="a20" value="Sangat Rendah"<?php if ( $studytracer['a20'] =='Sangat Rendah' ) echo 'checked'?><?= form_error('a20', '<small class="eror">', '</small>') ?>>Sangat Rendah</p></label>
				</div>
	</div>