<?= tahun_akademik('id_gelombang') ?>

<style type="text/css">
 	.daftar_con{
      margin: 0px 40px 0px;
      background: transparent;
 	}

 </style>

 <br />
<section class="home" style="color: #fff">
 <center>
 	<br />
 <img src="<?= base_url('/assets/admin/dist/img/proc.png') ?>" class="img-responsive" style="width: 100px;height: 100px">
 <br /><br />
 <h3><b>PANITIA PENERIMAAN SISWA BARU
</b></h3>
 <h4 style="font-family: times new roman"><?= cari('nama') ?></h4>
 <i><b><?= strip_tags(cari('jalan')) ?></b> |  <b>Telp .<?= strip_tags(cari('telp')) ?></b></i> 
<hr />
</center> 
</section>



 <div class="daftar_con">
 	<?= $this->session->flashdata('pesan') ?>
 	<div class="row">
<?php if($tutup == "Y"): ?>

 <div class="clearfix"></div>
<div class="col-md-6" style="background: #fff;">

 
<form action="" method="POST" enctype="multipart/form-data">
	 <table class="table table-striped">
<tr><td colspan="3"><div class="alert alert-success" style="border-radius: 0px;border:none;color: #000"><h4><i class="fa fa-user"></i><tt> &nbsp;&nbsp;FORM DATA CALON CALON PENDAFTAR</tt></div></td></tr>
<tr><td>Nomor Pendaftaran
<small><br />** Nomor Pendaftaran Otomatis</small></td></h4><td>
    <input type="hidden" name="no_pendaftaran" value="<?= $no_pendaftaran ?>">
	<input type="text" value="<?= $no_pendaftaran ?>" class="form-control" required="" disabled=""></td></tr>
<tr><td><b>Nama pendaftar</b> <small><br />** Bidang Wajib</small></td><td><input type="text" name="nama_pendaftar" class="form-control" required=""></td></tr>
<tr><td>Jenis Kelamin</td><td><select name="jk" class="form-control">
	                            <option value="L">Laki - Laki</option>
	                            <option value="P">Perempuan</option>
</select></td></tr>
<tr><td>Nik</td><td><input type="text" name="nik" class="form-control" required=""></td></tr>
<tr><td>Tempat lahir</td><td><input type="text" name="tempat_lahir" class="form-control" required=""></td></tr>
<tr><td>Tanggal lahir</td><td><input type="date" name="tanggal_lahir" class="form-control" required=""></td></tr>
<tr><td>Agama</td><td><select name="agama" class="form-control">
	                            <option value="Islam">Islam</option>
	                            <option value="Kristen">Kristen Protestan</option>
	                            <option value="Kristen">Kristen Katolik</option>
	                            <option value="Hindu">Hindu</option>
	                            <option value="Budha">Budha</option>
	                            <option value="Konghucu">Konghucu</option>
</select></td></tr>
 <tr><td>RT</td><td><input type="text" name="rt" class="form-control" required=""></td></tr>
<tr><td>RW</td><td><input type="text" name="rw" class="form-control" required=""></td></tr>
<tr><td>Desa Kelurahan</td><td><input type="text" name="desa_kelurahan" class="form-control" required=""></td></tr>
<tr><td>Kecamatan</td><td><input type="text" name="kecamatan" class="form-control" required=""></td></tr>
<tr><td>Kabupaten</td><td><input type="text" name="kabupaten" class="form-control" required=""></td></tr>
<tr><td>Provinsi</td><td><input type="text" name="provinsi" class="form-control" required=""></td></tr>
<tr><td>Kode Pos</td><td><input type="text" name="kode_pos" class="form-control" required=""></td></tr>
<tr><td>Tinggi Badan</td><td><input type="text" name="tinggi_badan" class="form-control" required=""></td></tr>
<tr><td>Berat Badan</td><td><input type="text" name="berat_badan" class="form-control" required=""></td></tr>
<tr><td>Nomor Telp Rumah</td><td><input type="text" name="nomor_telp_rumah" class="form-control" required=""></td></tr>
<tr><td>No Telepon</td><td><input type="text" name="no_telepon" class="form-control" required=""></td></tr>

<tr><td>Jurusan yang di pilih</td><td><select class="form-control" name="jurusan">
	<?php foreach($this->db->get('rn_jurusan')->result_array() as $sq): ?>
 <option value="<?= $sq['id_jurusan'] ?>"> <?= $sq['nama_jurusan'] ?></option>
<?php endforeach ?>

</select></td></tr> 

<tr><td>Prestasi</td><td><input type="text" name="prestasi" class="form-control" required=""></td></tr>
 

<tr><td>Kode Keamanan</td><td><?= $image ?>
	<br /><br />
	<input type="text" name="kode_rahasia" class="form-control">
</td></tr>
<hr />
<tr><td><input type="submit" name="daftar" class="btn btn-primary" value="Daftar PESERTA"> &nbsp;&nbsp;<input type="reset" class="btn btn-danger" value="Batal"></td></tr>
	 </table>
</div>

<div class="col-md-6" style="background: #fff;">
<table class="table table-striped">
	<tr><td colspan="3"><div class="alert alert-info" style="border-radius: 0px;border:none;color: #000"><h4><i class="fa fa-list"></i><tt> &nbsp;&nbsp;VALIDASI BERKAS PENDAFTARAN</tt>
    </div>*** Syarat Ketentuan <br />
    <ol>
       <li>File yang di Upload Harus Dalam Bentuk Pdf</li> 
       <li>Scan Ijazah dan pdf dalam satu berkas</li> 
       <li>Scan Kartu Keluarga</li>
   </ol>
  </td></tr>
	<tr><td>Scan Nilai Rapor 1 Sampai 5</td><td><input type="file" name="rapor_scan" class="form-control"></td></tr>
	<tr><td>Scan Ijazah Dan SKHUN </td><td><input type="file" name="ijazah_scan" class="form-control"></td></tr>	
	<tr><td>Scan Kartu Keluarga</td><td><input type="file" name="kk_scan" class="form-control"></td></tr>
</table>

<table class="table table-striped">
	<tr><td colspan="3"><div class="alert alert-info" style="border-radius: 0px;border:none;color: #000"><h4><i class="fa fa-user"></i><tt> &nbsp;&nbsp;DATA ORANG TUA CALON SISWA / WALI</tt></div></td></tr>
<tr><td>Nama Ayah</td><td><input type="text" name="nama_ayah" class="form-control" required=""></td></tr>
<tr><td>Tahun Lahir Ayah</td><td><input type="number" name="tahun_lahir_ayah" class="form-control" required=""></td></tr>
<tr><td>Pekerjaan Ayah</td><td><input type="text" name="pekerjaan_ayah" class="form-control" required=""></td></tr>
<tr><td>Pendidikan Ayah</td><td><input type="text" name="pendidikan_ayah" class="form-control" required=""></td></tr>
<tr><td>Penghasilan Ayah</td><td><input type="text" name="penghasilan_ayah" class="form-control" required=""></td></tr>
<tr><td>Nama Ibu</td><td><input type="text" name="nama_ibu" class="form-control" required=""></td></tr>
<tr><td>Tahun Lahir Ibu</td><td><input type="number" name="tahun_lahir_ibu" class="form-control" required=""></td></tr>
<tr><td>Pekerjaan Ibu</td><td><input type="text" name="pekerjaan_ibu" class="form-control" required=""></td></tr>
<tr><td>Pendidikan Ibu</td><td><input type="text" name="pendidikan_ibu" class="form-control" required=""></td></tr>
<tr><td>Penghasilan Ibu</td><td><input type="number" name="penghasilan_ibu" class="form-control" required=""></td></tr>
<tr><td>Jenis Tinggal</td><td>
	<input type="radio" name="jenis_tinggal" value="3">A.Mengontrak
	&nbsp;&nbsp;&nbsp;
	<input type="radio" name="jenis_tinggal" value="2">B.Rumah Sendiri
	&nbsp;&nbsp;&nbsp;
	<input type="radio" name="jenis_tinggal" value="1">C.Bayar Sewa 
        
</td></tr>
<tr><td colspan="3"><div class="alert alert-info"><tt><br />** Jika Data Orang Tua Ibu/Ayah Kosong Silahkan Isikan Data Orang Tua Pada 
Wali .</tt></div></td></tr>
<tr><td>Nama Wali</td><td><input type="text" name="nama_wali" class="form-control" required=""></td></tr>
<tr><td>Tahun Lahir Wali</td><td><input type="text" name="tahun_lahir_wali" class="form-control" required=""></td></tr>
<tr><td>Pekerjaan Wali</td><td><input type="text" name="pekerjaan_wali" class="form-control" required=""></td></tr>
<tr><td>Pendidikan Wali</td><td><input type="text" name="pendidikan_wali" class="form-control" required=""></td></tr>
<tr><td>Penghasilan Wali</td><td><input type="number" name="penghasilan_wali" class="form-control" required=""></td></tr>
 
</table>
</div>
</form>

<?php elseif($tutup == "N"): ?>

<div class="alert alert-danger"><h4><i class="fa fa-info"></i> MAAF PENDAFTARAN <?= strip_tags(cari('nama')); ?> TAHUN AKADEMIK <?= $sekarang ?>-
	<?= ++$sampai ?> TELAH BERAKHIR <br /><br />
	ATAU SILAHKAN DATANG LANGSUNG ALAMAT SEKOLAH DI <?= strip_tags(cari('jalan')); ?> NO. TELP : <?= strip_tags(cari('jalan')); ?><i>UNTUK INFORMASI LEBIH LANJUT</i></h4>
</div>
	<?php endif; ?>
</div>
</div>
 
<!--  -->


 