<?php 

 /**
  * 
  */
 class Hasil_test extends CI_controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		if ($this->session->userdata('admin') != TRUE) {
 			redirect(base_url());
 			exit();
 		} 
 	}

 	function index(){

 		$data=$this->madmin->data_test(trim(tahun_akademik('id_gelombang')));
 		foreach($data->result_array() as $s):
 		$cek = $this->db->get_where('rank',array('id_test'=>$s['id_test']));
 		if ($cek->num_rows() > 0) {
 		 	$update = [ 
 				'id_siswa'=>$this->input->post('id_pendaftaran'),
 				'id_test'=>$this->input->post('test'.$s['id_test'].''),
 				'nilai_test'=>$this->input->post('nilai_test'.$s['id_test'].''),
 				'tanggal'=>date('Y-m-d'),
 				'id_gelombang'=>tahun_akademik('id_gelombang'),
 			];
 			$cek=$this->db->update('rank',$update,array('id_test'=>$s['id_test']));
 		 }else{
           $insert = [ 
 				'id_siswa'=>$this->input->post('id_pendaftaran'),
 				'id_test'=>$this->input->post('test'.$s['id_test'].''),
 				'nilai_test'=>$this->input->post('nilai_test'.$s['id_test'].''),
 				'tanggal'=>date('Y-m-d'),
 				'id_gelombang'=>tahun_akademik('id_gelombang'),
 			];
 			$cek=$this->db->insert('rank',$insert);

 		} 	 
 		endforeach; 
 		$this->session->set_flashdata('pesan','<div class="callout callout-info">Data berhasil update</div>');
 		redirect(base_url('admin/pendaftar'));      
 	}
 }