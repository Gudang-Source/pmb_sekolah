<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <meta name="description" content="<?= cari('description') ?>">
    <meta name="author" content="<?= cari('description') ?>">
    <title><?= strip_tags($judul) ?></title>
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap.min.css') ?>">
        <link rel="shortcut icon" href="<?= base_url('assets/gambar/'.cari('favicon')) ?>" type="image/x-icon" />
        <link rel="stylesheet" href="<?= base_url('assets/admin/bootstrap/font-awesome/css/font-awesome.min.css') ?>">
        <link href="<?= base_url('assets/admin/dist') ?>/css/ehsan_nahyed.css" rel="stylesheet">
       <link rel="stylesheet" href="<?= base_url('assets/admin') ?>/dist/css/AdminLTE.min.css">          
        <link href="<?= base_url('assets/') ?>/carousel.css" rel="stylesheet">
        <script src="<?= base_url('assets/admin/bootstrap/js/') ?>/jquery-1.11.2.min.js"></script> 
        <script src="<?= base_url('assets/admin/dist/js/') ?>/sweetalert.js"></script>
  </head>
  <body>
    <script type="text/javascript">
      $(function(){ 
        $('#login_akses').click(function(){
             $("#modal_login").modal('show');
         });
      });

       
    </script>


    <script type="text/javascript">
  $(function(){
  $('.notifikasi').hide();
  $('#login').submit(function(){
   $('.notifikasi').hide();
   if($('input[name=username]').val() == ""){
         swal({
  title: "Kesalahan",
  text: "Username Tidak Boleh Kosong",
  icon: "error",
  button: "OK",
});
      }else if($('input[name=password]').val() == ""){
          swal({
  title: "Kesalahan",
  text: "Password Tidak Boleh Kosong",
  icon: "error",
  button: "OK",
});
      }else{
        $.ajax({
            type : "POST",
            url : "<?= base_url('home/login') ?>",
            data : $(this).serialize(),
            success : function(data){
               if(data == 'admin'){
                swal("Good job!", "You clicked the button!", "success");
                window.location = "<?= base_url('admin/?gos=Berhasil') ?>"; 
               }else if(data == "siswa"){
                swal("Good job!", "You clicked the button!", "success");
                window.location = "<?= base_url('pendaftar/?gos=Berhasil') ?>"; 
               }else{ 
swal({
title: "Kesalahan",
text: 'Username Dan Password Salah',
icon: "error",
button: "OK ",
});
               } 
            },
             error : function(data){
              alert('Silahkan Refresh Kembali Browser Anda : )');
             }
         });
 
     }
     return false;
  });

});

</script>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #17a8b1!important">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">SISTEM INFORMASI PENERIMAAN SISWA BARU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('') ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('pendaftaran.jsp') ?>">Pendaftaran</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="<?= base_url('cek-lulus.jsp') ?>">Cek Kelulusan</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('pengumuman.jsp') ?>">Informasi</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#" id="login_akses">Login</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Page Content -->
     <?php $this->load->view($content) ?>
    <!-- Footer -->
    <div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="modal_loginLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 80%">
                <div class="modal-content">
                    <div class="modal-header">
                      <div class="modal-header"><b>Login Pendaftar / Administrator</b></div>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                         
                    </div>
                    <div class="modal-body">
                   
          <form id="login" class="form-horizontal">
             <div class="box-body">
                <div class="form-group has-feedback">
                  <div class="col-sm-12">
                    <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username ...">
                     <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <div class="col-sm-12">
                   <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password ...">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                </div>
                <br />
         <div class="form-group">
               <div class="col-sm-12">
          <button name="login" class="btn btn-primary btn-block btn-flat"> <span class="glyphicon glyphicon-user"></span>Login</button>
         
        </div>
          </div>
              </div>
            </form>
             
</div>
</div>
</div>
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/jquery-1.10.2.js') ?>"></script>
    <script src="<?= base_url('assets/jquery.backstretch.min.js') ?>"></script>

    <?php
     $array=array();
     foreach($this->db->get('rn_slider')->result_array() as $data){
     $array[] = '\''.base_url('assets/gambar/'.$data['gambar']).'\'';
     }

     $data=implode(',',$array);
     ?>
    <script type="text/javascript">
           
    $.backstretch(
    [
     <?= $data ?>
    ], 
    {
      duration: 1200, 
      fade: 600
    });
    
  </script>
  

    <script src="<?= base_url('assets/admin/dist/js/') ?>/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/dist') ?>/js/bootstrap.bundle.min.js"></script>
    
  </body>

</html>
