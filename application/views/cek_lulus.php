<section class="home">
 <br />
<br />
 
 
</section>
<div class="container">

<div class="jumbotron"> 
<div class="alert alert-success"><h3><i class="fa fa-key"></i>Periksa Data Kelulusan Pendaftar</h3></div>
<br /><br /> 
 
 <?= $this->session->flashdata('pesan') ?>
 
 	 <form action="" method="POST"> 
	<div class="col-md-8"><input type="text" name="no_pendaftaran" class="form-control" required="" placeholder="Silahkan Masukan No Pendaftaran Anda ...."></div>
	<div class="col-md-4"><br /><button name="periksa" class="btn btn-success"><i class="fa fa-key"></i>Periksa</button></div>
</form>

</div>
</div>