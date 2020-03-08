<script type="text/javascript">
	$(function(){
         $('.verifikasi').click(function(){
             var ket= $('#ket').val();
             var url= $('#id_pendaftaran').val();

             $.ajax({
             	 url:"<?= base_url('admin/pendaftar/verfikasi') ?>",
             	 type:"POST",
             	 data:"ket="+ket+"&url="+url,
             	 chace:false,
             	 success:function(html){
                    window.location='<?= base_url('admin/pendaftar') ?>';
             	 },
             	 error:function(html){
             	 	alert('gagal')
             	 },

             	})
         })


	})

function rapor_scan(id){
window.open("<?= base_url('assets/raport/') ?>/"+id, "Cetak Kartu Ujian", "height=650, width=1024, left=150, scrollbars=yes");
   return false;
}
 
function ijazah_scan(id){
window.open("<?= base_url('assets/ijazah/') ?>/"+id, "Cetak Kartu Ujian", "height=650, width=1024, left=150, scrollbars=yes");
   return false;
}

 
function kk_scan(id){
window.open("<?= base_url('assets/kk/') ?>/"+id, "Cetak Kartu Ujian", "height=650, width=1024, left=150, scrollbars=yes");
   return false;	
}

</script>


<div class="callout callout-warning">
	Jumlah Data Peserta Pendaftar pada tahun akademik <?= tahun_akademik('ta_akademik') ?>
    <br />
	* ) pada tahun akademik diatas yang benar benar aktif adalah satu.
  <br />

  Untuk penentuan kelulusan silahkan isi dahulu hasil nilai seleksi.
</div>

<?= $this->session->flashdata('pesan') ?>
<table id="example1" class="table table-bordered table-striped">
    <thead>
	<tr>
		<th>No.</th>
		<th>No Pendaftaran</th>
		<th>Nama Pendaftar</th>
		<th>Jenis Kelamin</th>
		<th>NIK</th>
		<th>Tempat lahir</th>
		<th>Tanggal lahir</th>
		<th>Tanggal Daftar</th>
		<th>Agama</th>
		<th>Keterangan</th>
		<th>Aksi</th>
		<th>Detail</th>
		</tr>
	</thead>
		<tbody>
		 <?php $no=1; foreach($data->result_array() as $dat):
                  $qw = $this->db->get_where('rank',array('id_siswa'=>$dat['id_pendaftaran']))->row_array();
                      $jk=($dat['jk'] == "L") ? "Laki" :"Pendingrempuan";    
                      $cek=isset($dat['konfirmasi']) ? $dat['konfirmasi'] :'';
					if ($cek == "P") {
						$keterangan="<button class='btn btn-info'>Pending</button>";
					}elseif($cek =="N"){
						$keterangan="<button class='btn btn-danger'>Di Tolak</button>";
					}elseif($cek =="Y"){
						$keterangan="<button class='btn btn-success'>Di Terima</button>";
					}else{
						$keterangan="<button class='btn btn-danger'>Belum Di Konfirmasi</button>";
				    }
		 ?>
		 <tr>
		 <td><?= $no ?></td>
		 <td><?= $dat['no_pendaftaran'] ?></td>
		 <td><?= $dat['nama_pendaftar'] ?></td>
		 <td><?= $jk ?></td>
		 <td><?= $dat['nik'] ?></td>
		 <td><?= $dat['tempat_lahir'] ?></td>
		 <td><?= $dat['tanggal_lahir'] ?></td>
		 <td><?= $dat['tanggal'] ?></td>
		 <td><?= $dat['agama'] ?></td>
		 <td>
             
		 	<?php  if(empty($qw['id_siswa'])):  else: $keterangan; endif;  ?>
		 	 
		 </td>
		 <td> 
		 	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#rangking<?= $no ?>">
                Isi Rangking
              </button>
              <br /><br />

<?php if($this->session->userdata('level') == "admin"): ?>
		 	<a href="<?= base_url('admin/pendaftar/delete/'.$dat['id_pendaftaran']) ?>" class="btn btn-danger"><i class="fa fa-trash">
<?php else: endif; ?>
 		 	</i></a></td>	
 		 <td>  
          	<?php  if(empty($qw['id_siswa'])):  else: ?> 

          	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default<?= $no ?>">
                Detail Informasi 
              </button>
               <?php endif;  ?></td>
		</tr>
		<?php $no++; endforeach; ?>
		</tbody>
	<thead>
	<tr>
		<th>No.</th>
		<th>No Pendaftaran</th>
		<th>Nama Pendaftar</th>
		<th>Jenis Kelamin</th>
		<th>NIK</th>
		<th>Tempat lahir</th>
		<th>Tanggal lahir</th>
		<th>Agama</th>
		<th>Aksi</th>
		</tr>
	 </thead>
</table>



<?php $no=1; foreach($data->result_array() as $dat):
      $rangking = $this->madmin->rangking($dat['id_pendaftaran']);
      $hasil_rk=  ksort($rangking);



      $jk=($dat['jk'] == "L") ? "Laki" :"Perempuan";    
   ?>

   <!-- modal buat  tank --> 

<div class="modal fade" id="rangking<?= $no ?>">
          <div class="modal-dialog" style="width: 80%">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Isi hasil test</h4>
                <div style="float: right;">
				<!-- tomobol pemeriksaan data -->
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                 &nbsp;
             
                </div>
              </div>
              <div class="modal-body">
               <div class="container">
 <div class="row">

  <form action="<?= base_url('Hasil_test') ?>" method="POST">
    <input type="hidden" name="id_pendaftaran" value="<?= $dat['id_pendaftaran'] ?>">
    <table class="table table-striped">  
     <?php foreach($this->madmin->data_test($dat['ta_akademik'])->result_array() as $q): 
                   $nl = $this->db->get_where('rank',array('id_test'=>$q['id_test']))->row_array();
     ?>
     <input type="hidden" name="test<?= $q['id_test'] ?>" value="<?= $q['id_test'] ?>" class="form-control">
     <tr><td><b><?= $q['nama_test'] ?></b></td><td><input type="number" name="nilai_test<?= $q['id_test'] ?>" value="<?= $nl['nilai_test'] ?>" class="form-control"></td></tr>
   <?php endforeach ?> 
   <td></td><td><button type="submit" name="kirim" class="btn btn-success"><i class="fa fa-save"></i>Simpan</button>
    <button type="reset" name="kirim" class="btn btn-warning"><i class="fa fa-save"></i>Simpan</button></td>
 </table>
</form> 

 </div>
</div>
</div>
</div>
</div>
</div>

<!-- end -->
 <div class="modal fade" id="modal-default<?= $no ?>">
          <div class="modal-dialog" style="width: 80%">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detail Data Pendaftar PMB</h4>
                <div style="float: right;">
				<!-- tomobol pemeriksaan data -->
                 
				<a href="<?= base_url('admin/pendaftar/terima/'.$dat['id_pendaftaran']) ?>" class="btn btn-success">Terima</a> 
				<a href="<?= base_url('admin/pendaftar/tolak/'.$dat['id_pendaftaran']) ?>" class="btn btn-danger">Tolak</a>
				<a href="<?= base_url('admin/pendaftar/pending/'.$dat['id_pendaftaran']) ?>" class="btn btn-info">Pending</a>

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                 &nbsp;
                <a href="<?= base_url('admin/pendaftar/cetak/'.$dat['id_pendaftaran'].'-Cetak-Data-Pendaftar.pdf') ?>" target="_blank" class="btn btn-success"><i class="fa fa-print"></i>Cetak Data</a> 
                </div>
              </div>
              <div class="modal-body">
               <div class="container">
 <div class="row">

<div class="col-md-6">
<form action="" method="POST">
	 <table class="table table">
<tr><div class="callout callout-success"><i class="fa fa-user"></i><tt>Data Calon Siswa</tt></div></tr>
<tr><td>Nomor Pendaftaran</td><td><b><?= $dat['no_pendaftaran'] ?></b></td></tr>
<tr><td>Nama pendaftar</td><td><?= $dat['nama_pendaftar'] ?></td></tr>
<tr><td>Jenis Kelamin</td><td><?= $jk ?></td></tr>
<tr><td>Nik</td><td><?= $dat['nik'] ?></td></tr>
<tr><td>Tempat lahir</td><td><?= $dat['tempat_lahir'] ?></td></tr>
<tr><td>Tanggal lahir</td><td><?= $dat['tanggal_lahir'] ?></td></tr>
<tr><td>Agama</td><td><?= $dat['agama'] ?></td></tr>
 <tr><td>RT</td><td><?= $dat['rt'] ?></td></tr>
<tr><td>RW</td><td><?= $dat['rw'] ?></td></tr>
<tr><td>Desa Kelurahan</td><td><?= $dat['desa_kelurahan'] ?></td></tr>
<tr><td>Kecamatan</td><td><?= $dat['kecamatan'] ?></td></tr>
<tr><td>Kabupaten</td><td><?= $dat['kabupaten'] ?></td></tr>
<tr><td>Provinsi</td><td><?= $dat['provinsi'] ?></td></tr>
<tr><td>Kode Pos</td><td><?= $dat['kode_pos'] ?></td></tr>
<tr><td>Tinggi Badan</td><td><?= $dat['tinggi_badan'] ?> /Cm</td></tr>
<tr><td>Berat Badan</td><td><?= $dat['berat_badan'] ?> /Kg</td></tr>
<tr><td>Nomor Telp Rumah</td><td><?= $dat['nomor_telp_rumah'] ?></td></tr>
<tr><td>No Telepon</td><td><?= $dat['no_telepon'] ?></td></tr>
<tr><td>Jarak Sekolah</td><td><?= $dat['jarak_sekolah'] ?></td></tr>
<tr><td>Alat Transportasi</td><td><?= $dat['alat_transportasi'] ?></td></tr>
<tr><td>Prestasi</td><td><?= $dat['prestasi'] ?></td></tr>
</table>
</div>

<div class="col-md-6">
<?php
 $CEkpdf=$this->db->get_where('rn_daftar',array('rapor_scan' =>$dat['rapor_scan'],
                                                'ijazah_scan'=>$dat['ijazah_scan'],
                                                'kk_scan'=>$dat['kk_scan']));
 if($dat['konfirmasi'] == ""): ?>
 <?php if($CEkpdf->num_rows() > 0): ?>
<table class="table table-striped">
	<tr><td colspan="3"><div class="alert alert-info" style="border-radius: 0px;border:none;color: #000"><h4><i class="fa fa-user"></i><tt> &nbsp;&nbsp;VALIDASI BERKAS PENDAFTARAN</tt>
    </div>*** Perhatikan <br />
    <ol>
       <li>File pdf verifiksai harus sesuai dengan yang di minta misalkan : raport</li> 
       <li>Scan Ijazah dan pdf dalam satu berkas</li> 
       <li>Scan Kartu Keluarga</li>
   </ol>
  </td></tr>
	<tr><td>Scan Nilai Rapor 1 Sampai 5</td><td>
		<button type="button" class="btn btn-success" onclick="return rapor_scan('<?= $dat['rapor_scan'] ?>')">
                Lihat Pdf File.
              </button></td></tr>
	<tr><td>Scan Ijazah Dan SKHUN </td><td><button type="button" class="btn btn-info" onclick="return ijazah_scan('<?= $dat['ijazah_scan'] ?>')">
                Lihat Pdf File.
              </button></td></tr>	
	<tr><td>Scan Kartu Keluarga</td><td><button type="button"  class="btn btn-warning"  onclick="return kk_scan('<?= $dat['kk_scan'] ?>')">
                Lihat Pdf File.
              </button></td></tr>
</table>
<?php else: ?>
 <div class="callout callout-danger">File PDF RUSAK .</div>
<?php endif; ?>

<?php else: ?>
<div class="callout callout-danger"><i class="fa fa-info"></i> Maaf Untuk Data Pdf Tidak Bisa Di Tampilkan Karna Calon Sudah Siswa Terverifikasi .</div>
<?php endif ?>

<table class="table table-striped">

<tr class="callout callout-success"><td colspan="4">Data Nilai Seleksi</td></tr>
  <?php $nilai = '';
        $jum = ''; 
        foreach($this->madmin->nilai_seleksi($dat['id_pendaftaran'],$dat['ta_akademik'])->result_array() as $dy):  
        $jum += $dy['nilai_test'];  
        $hasil = +$jum / count($dy['id_test']); 
  ?>
   <tr class="callout callout-danger"><td><?= $dy['nama_test'] ?></td><td><?= $dy['nilai_test'] ?></td></tr>
   <?php endforeach  ?>
    
   <tr><td>Jumlah Nilai</td><td><?= $hasil ?></td></tr>
   <tr><td>Rata-Rata Nilai</td><td><?= rata_rata($dat['id_pendaftaran'],tahun_akademik('id_gelombang'))  ?></td></tr>
   <tr><td>Jumlah Siswa</td><td><?= $this->madmin->jumlah_siswa(tahun_akademik('id_gelombang')) ?></td></tr>
   <tr><td>Rangking ke </td><td><?= $hasil_rk ?></td></tr>

<tr><td colspan="3"><div class="callout callout-success"><tt>Data Orang Tua /Wali</tt></div></td></tr>
<tr><td>Nama Ayah</td><td><?= $dat['nama_ayah'] ?></td></tr>
<tr><td>Tahun Lahir Ayah</td><td><?= $dat['tahun_lahir_ayah'] ?></td></tr>
<tr><td>Pekerjaan Ayah</td><td><?= $dat['pekerjaan_ayah'] ?></td></tr>
<tr><td>Pendidikan Ayah</td><td><?= $dat['pendidikan_ayah'] ?></td></tr>
<tr><td>Penghasilan Ayah</td><td><?= $dat['penghasilan_ayah'] ?></td></tr>
<tr><td>Nama Ibu</td><td><?= $dat['nama_ibu'] ?></td></tr>
<tr><td>Tahun Lahir Ibu</td><td><?= $dat['tahun_lahir_ibu'] ?></td></tr>
<tr><td>Pekerjaan Ibu</td><td><?= $dat['pekerjaan_ibu'] ?></td></tr>
<tr><td>Pendidikan Ibu</td><td><?= $dat['pendidikan_ibu'] ?></td></tr>
<tr><td>Penghasilan Ibu</td><td><?= $dat['penghasilan_ibu'] ?></td></tr>
<tr><td colspan="3"><div class="callout callout-success"><tt>** Jika Data Orang Tua Ibu/Ayah Kosong Silahkan Isikan Data Orang Tua Pada 
Wali .</tt></div></td></tr>
<tr><td>Nama Wali</td><td><?= $dat['nama_wali'] ?></td></tr>
<tr><td>Tahun Lahir Wali</td><td><?= $dat['tahun_lahir_wali'] ?> </td></tr>
<tr><td>Pekerjaan Wali</td><td><?= $dat['pekerjaan_wali'] ?></td></tr>
<tr><td>Pendidikan Wali</td><td><?= $dat['pendidikan_wali'] ?> </td></tr>
<tr><td>Penghasilan Wali</td><td>
<?= $dat['penghasilan_wali'] ?></td></tr>
<tr><td>Jenis Tinggal</td><td>
   <?php 
   $jenis_tinggal=isset($dat['jenis_tinggal']) ? $dat['jenis_tinggal'] :"";
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

</td>
 
</tr>
 </table> 
</div> 
</form>
</div>
</div>
      </div> 
    </div> 
  </div> 
</div>


 

 <?php $no++; endforeach; ?>
 