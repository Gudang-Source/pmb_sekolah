<link rel="stylesheet" href="<?= base_url('assets/bootstrap.min.css') ?>">
<script type="text/javascript">window.print()</script>
 
 <br /><br /><br />
 <div class="container">
<img src="<?= base_url('/assets/admin/dist/img/proc.png') ?>" style="width: 90px;height: 90px;float: left;padding: 20px">
 <h4>PANITIA PENERIMAAN SISWA BARU TAHUN AKADEMIK <?=  $dat[0]['ta_akademik'] ?></h4>
 <h4><?= strip_tags(cari('nama')) ?></h4>
 <i><?= strip_tags(cari('jalan')) ?></b> |  <b>Telp .<?= strip_tags(cari('telp')) ?></i> 
<hr />
 


<?php
 $jk=($dat[0]['jk'] == "L") ? "Laki" :"Perempuan"; 
 $cek=isset($dat[0]['konfirmasi']) ? $dat[0]['konfirmasi'] :'';
  if ($cek == "P") {
            $keterangan="<button class='btn btn-info'>Pending</button>";
          }elseif($cek =="N"){
            $keterangan="<button class='btn btn-danger'>Tidak Lulus</button>";
          }elseif($cek =="Y"){
            $keterangan="<button class='btn btn-success'>Lulus</button>";
          }else{
            $keterangan="<button class='btn btn-info'><p>Belum Di Konfirmasi Silahkan Menunggu Hasil Keputusan Dari Panitia Penerimaan siswa baru ".cari('nama').' <br />Selama 1x24 Jam , Atau Silahkan Cek pada link berikut <a href="'.base_url('cek-lulus.jsp').'">cek pendaftaran</a>, apabila no pendaftaran anda telah di konfirmasi ,<br /> apabila username anda dan password tanggal dan tahun lahir yang di daftar kan sebelumnya dengan format yyyy-mm-dd<p></button>';
            }
 ?>
  <?= $keterangan ?>
  <br />
  <hr />
  <div class="row">
<div class="col-md-6">
 
<table class="table table-striped">
 
<tr><td>Nomor Pendaftaran</td><td><b><?= $dat[0]['no_pendaftaran'] ?></b></td></tr>
<tr><td>Nama pendaftar</td><td><?= $dat[0]['nama_pendaftar'] ?></td></tr>
<tr><td>Jenis Kelamin</td><td><?= $jk ?></td></tr>
<tr><td>Nik</td><td><?= $dat[0]['nik'] ?></td></tr>
<tr><td>Tempat lahir</td><td><?= $dat[0]['tempat_lahir'] ?></td></tr>
<tr><td>Tanggal lahir</td><td><?= $dat[0]['tanggal_lahir'] ?></td></tr>
<tr><td>Agama</td><td><?= $dat[0]['agama'] ?></td></tr>
<tr><td>RT</td><td><?= $dat[0]['rt'] ?></td></tr>
<tr><td>RW</td><td><?= $dat[0]['rw'] ?></td></tr>
<tr><td>Desa Kelurahan</td><td><?= $dat[0]['desa_kelurahan'] ?></td></tr>
<tr><td>Kecamatan</td><td><?= $dat[0]['kecamatan'] ?></td></tr>
<tr><td>Kabupaten</td><td><?= $dat[0]['kabupaten'] ?></td></tr>
<tr><td>Provinsi</td><td><?= $dat[0]['provinsi'] ?></td></tr>
<tr><td>Kode Pos</td><td><?= $dat[0]['kode_pos'] ?></td></tr>
<tr><td>Tinggi Badan</td><td><?= $dat[0]['tinggi_badan'] ?></td></tr>
<tr><td>Berat Badan</td><td><?= $dat[0]['berat_badan'] ?></td></tr>
<tr><td>Nomor Telp Rumah</td><td><?= $dat[0]['nomor_telp_rumah'] ?></td></tr>
<tr><td>No Telepon</td><td><?= $dat[0]['no_telepon'] ?></td></tr>
<tr><td>Jarak Sekolah</td><td><?= $dat[0]['jarak_sekolah'] ?></td></tr>
<tr><td>Alat Transportasi</td><td><?= $dat[0]['alat_transportasi'] ?></td></tr>
<tr><td>Prestasi</td><td><?= $dat[0]['prestasi'] ?></td></tr>
 
  
	 </table>
</div>

<div class="col-md-6">

<table class="table table-striped">
	<tr><td colspan="3"><div class="callout callout-success"><tt>Data Orang Tua /Wali</tt></div></td></tr>
<tr><td>Nama Ayah</td><td><?= $dat[0]['nama_ayah'] ?></td></tr>
<tr><td>Tahun Lahir Ayah</td><td><?= $dat[0]['tahun_lahir_ayah'] ?></td></tr>
<tr><td>Pekerjaan Ayah</td><td><?= $dat[0]['pekerjaan_ayah'] ?></td></tr>
<tr><td>Pendidikan Ayah</td><td><?= $dat[0]['pendidikan_ayah'] ?></td></tr>
<tr><td>Penghasilan Ayah</td><td><?= $dat[0]['penghasilan_ayah'] ?></td></tr>
<tr><td>Nama Ibu</td><td><?= $dat[0]['nama_ibu'] ?></td></tr>
<tr><td>Tahun Lahir Ibu</td><td><?= $dat[0]['tahun_lahir_ibu'] ?></td></tr>
<tr><td>Pekerjaan Ibu</td><td><?= $dat[0]['pekerjaan_ibu'] ?></td></tr>
<tr><td>Pendidikan Ibu</td><td><?= $dat[0]['pendidikan_ibu'] ?></td></tr>
<tr><td>Penghasilan Ibu</td><td><?= $dat[0]['penghasilan_ibu'] ?></td></tr>
<tr><td colspan="3"><div class="callout callout-success">** Jika Data Orang Tua Ibu/Ayah Kosong Silahkan Isikan Data Orang Tua Pada 
Wali .</div></td></tr>
<tr><td>Nama Wali</td><td><?= $dat[0]['nama_wali'] ?></td></tr>
<tr><td>Tahun Lahir Wali</td><td><?= $dat[0]['tahun_lahir_wali'] ?></td></tr>
<tr><td>Pekerjaan Wali</td><td><?= $dat[0]['pekerjaan_wali'] ?></td></tr>
<tr><td>Pendidikan Wali</td><td><?= $dat[0]['pendidikan_wali'] ?></td></tr>
<tr><td>Penghasilan Wali</td><td><?= $dat[0]['penghasilan_wali'] ?></td></tr>
<tr><td>Jenis Tinggal</td><td>
   <?php 
   $jenis_tinggal=isset($dat[0]['jenis_tinggal']) ? $dat[0]['jenis_tinggal'] :"";
   if($jenis_tinggal == "1"){
   	echo "Bayar Sewa / Kos";
   }elseif($jenis_tinggal == "2"){
    echo "Rumah Sendiri";
   }elseif($jenis_tinggal == "3"){
    echo "Mengontrak";
   }else{
   	echo "Maaf Data Tidak Terverifikasi";
   } 
   ?>

</td></tr>
 
</table>
</div>
</div>
 </div>