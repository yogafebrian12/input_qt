<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kraf extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->library('upload');
	}

	public function index(){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$this->template->Display('kraf/index');
	}

	public function list_datatable(){
		$draw=intval($this->input->post('draw'));
		$length=intval($this->input->post('length'));
		$start=intval($this->input->post('start'));

		$list=$this->KSys->SelectAll('kraf','id_kraf','desc');
		$data=array();
		$no=$this->input->post('start');
		foreach($list->result() as $dt){
			$no++;
			$row=array();
			$row[]=$no;
			$row[]=strtoupper($dt->nama_kraf);
			$row[]='Rp '.number_format($dt->harga_kraf,2,',','.');
			if($dt->user_input != '' && $dt->waktu_input != ''){
				$row[]='Di input oleh '.$dt->user_input.' pada '.$dt->waktu_input;
			}else{
				$row[]='';
			}

			// if($dt->user_update != '' && $dt->waktu_update != ''){
			// 	$row[]=$dt->user_update.' '.$dt->waktu_update;
			// }else{
			// 	$row[]='';
			// }

			$btn='<button class="btn btn-danger btn-sm" onclick="predelData('.$dt->id_kraf.');"><i class="fa fa-trash"></i></button>';
			$row[]=$btn;
			$data[]=$row;
		}
		$output=array(
			'draw'=>$draw,
			'recordsTotal'=>$list->num_rows(),
			'recordsFiltered'=>$list->num_rows(),
			'data'=>$data
		);

		header('Access-Control-Allow-Origin: *');
		echo json_encode($output);
	}

	// Tambah data
	public function addData(){
		// Get user
		$user = $this->KSys->getWhere('account',array('username'=>$this->input->post('username')))->row_array();

		$data = array(
			'nama_kraf'=>strtoupper($this->input->post('nama')),
			'harga_kraf'=>$this->input->post('harga'),
			'user_input'=>$this->input->post('username'),
			'waktu_input'=>date('Y-m-d H:i:s')
		);

		// Check data kraf by nama
		$check_data = $this->KSys->getWhere('kraf',array('nama_kraf'=>$data['nama_kraf']))->num_rows();

		//$respon = array();
		if($check_data > 0){
			$respon = array(
				'code'=>1,
				'message'=>'Data sudah ada!'
			);
		}else{
			// Input data
			$respon = $this->KSys->inputData('kraf',$data);
		}

		// JSON
		header('Access-Control-Allow-Origin: *');
		echo json_encode($respon);
	}

	// Delete
	public function delData(){
		$id = $this->input->get('id');

		$w = array(
			'id_kraf'=>$id
		);

		$respon = $this->KSys->delData($w,'kraf');

		// JSON
		header('Access-Control-Allow-Origin: *');
		echo json_encode($respon);
	}

	// Cari harga kraf berdasarkan id
	public function getKraf(){
		$id = $this->input->get('id');

		$kraf = $this->KSys->getWhere('kraf',array('id_kraf'=>$id))->row_array();

		// JSON
		header('Access-Control-Allow-Origin: *');
		echo json_encode($kraf);
	}

	// Set Kraf
	public function setKraf(){
		// Query ambil semua data kraf
		$kraf = $this->KSys->SelectAll('kraf','id_kraf','asc')->result();

		// JSON
		header('Access-Control-Allow-Origin: *');
		echo json_encode($kraf);
	}
}