<style type="text/css"> 
 body{
  margin: 12px 70px 10px; 

 }

.tb td, .tb th {    
    border-bottom: 1px solid #000;
    text-align: left;
    font-size: 12px;
    padding: 5px 40px 10px;
    
}

.tb {
    border-collapse: collapse;
    width: 100%;
  
}

.tb th {
  background: #ddd;
  text-align: center;
}    
 

</style>


 <div style="text-align: center">
<img src="<?= base_url('/assets/admin/dist/img/proc.png') ?>" style="width: 90px;height: 90px">
 <h4>PENERIAMAAN PESERTA DIDIK BARU. <?= tahun_akademik('ta_akademik') ?></h4>
 <h4><?= strip_tags(cari('nama')) ?></h4>
 <b><?= strip_tags(cari('jalan')) ?></b> |  <b>Telp .<?= strip_tags(cari('telp')) ?></b> 
<hr />
  </div>
 
<table align="center" class="tb">
<?php
 $jk=($dat[0]['jk'] == "L") ? "Laki" :"Perempuan"; 
 ?>
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
<tr><td colspan="4" style="background: orange">Data Orang Tua /Wali</td></tr>
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
<tr><td>Jurusan yang di pilih.</td><td><?= $dat[0]['nama_jurusan'] ?></td></tr>
 
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
<tr><td colspan="4" style="background: green">Data Nilai Seleksi</td></tr>
  <?php foreach($this->madmin->nilai_seleksi($dat[0]['id_pendaftaran'],$dat[0]['ta_akademik'])->result_array() as $dy):  ?>
   <tr><td><?= $dy['nama_test'] ?></td><td><?= $dy['nilai_test'] ?></td></tr>
   <?php endforeach  ?>  

</table>
 <div align="right">
<br /><br /><br /><br />
 DI CETAK PADA , <?= tgl_indonesia(date("Y-m-d")) ?>
<br /><br /><br /><br /><br /><br />
----------------------<br /><br /><br /><br />
PANITIA SPMB <?= cari('nama') ?>
 </div>              
 <?php
require_once(APPPATH.'/third_party/html2pdf/html2pdf.class.php');
$content = ob_get_clean();
$html2pdf = new HTML2PDF('P','A4','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Laporan Data Barang.pdf');
?>
