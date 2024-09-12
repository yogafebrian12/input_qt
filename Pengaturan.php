<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	function listAkun(){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		if($this->session->userdata('level')==1){
			$this->template->Display('pengaturan/listAkun');
		}else{
			$data['d']=$this->KSys->getWhere('account',array('username'=>$this->session->userdata('username')))->row_array();
			$this->template->Display('pengaturan/updateAkun2',$data);
		}
	}

	function listDataAkun(){
		$draw=intval($this->input->post('draw'));
		$length=intval($this->input->post('length'));
		$start=intval($this->input->post('start'));

		$list=$this->KSys->SelectAll('account','username','asc');
		$data=array();
		$no=$this->input->post('start');
		foreach($list->result() as $dt){
			$no++;
			$row=array();
			$row[]=$no;
			$row[]=$dt->ac_name;
			$row[]=$dt->gender;
			
			if($dt->ac_foto!=''){
				$row[]='<img class="img-thumbnail" src="'.base_url().'assets/photo_profile/'.$dt->ac_foto.'" style="width:100px;height:90px;" />';
			}else{
				$row[]='<img class="img-thumbnail" src="'.base_url().'assets/photo_items/null.png" style="width:100px;height:90px;" />';
			}
			
			$row[]=$dt->username;
			$row[]=$dt->pass;
			$row[]='<div class="input-group-btn"><a class="btn btn-primary btn-sm" href="'.base_url().'pengaturan/updAkun/'.$dt->username.'"><i class="fa fa-edit"></i></a> <a class="btn btn-danger btn-sm" href="'.base_url().'pengaturan/delAkun/'.$dt->username.'"><i class="fa fa-trash"></i></a></div>';
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

	function tambahAkun(){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		} 

		$this->template->Display('pengaturan/tambahAkun');
	}

	function checkUsername(){
		$user=$this->input->post('user');
		if($user==''){
			$respon=array(
				'code'=>1,
				'message'=>'Username tidak boleh kosong!'
			);
		}else{
			$cek=$this->KSys->getWhere('account',array('username'=>$user));
			if($cek->num_rows() > 0){
				$respon=array(
					'code'=>1,
					'message'=>'Username sudah ada'
				);
			}else{
				$respon=array(
					'code'=>0,
					'message'=>'Username dapat digunakan'
				);
			}
		}

		header('Access-Control-Allow-Origin: *');
		echo json_encode($respon);
	}

	function simpanAkun(){
		if(isset($_FILES['foto']['name'])){
			$config['file_name'] = $this->input->post('username');
			$config['upload_path'] = './assets/photo_profile';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
			$config['overwrite'] = true;

			$this->load->library('upload', $config);

			// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
			//$this->upload->initialize($config);

			if($this->upload->do_upload('foto')){
				$photo=$this->upload->data('file_name');
			}else{
				$photo='';
			}
		}else{
			$photo='';
		}

		$data=array(
			'username'=>$this->input->post('username'),
			'pass'=>$this->input->post('pass'),
			'ac_name'=>$this->input->post('nama'),
			'ac_foto'=>$photo,
			'gender'=>$this->input->post('gender'),
			'level'=>$this->input->post('level')
		);

		if($data['username']==''||$data['pass']==''||$data['level']==''){
			$respon=array(
				'code'=>1,
				'message'=>'Data belum lengkap: '
			);
			if($data['username']=='') $respon['message'].='username, ';
			if($data['pass']=='') $respon['message'].='password, ';
			if($data['level']=='') $respon['message'].='level, ';
		}else{
			$cek=$this->KSys->getWhere('account',array('username'=>$data['username']));
			if($cek->num_rows() > 0){
				$row=$cek->row_array();

				if($data['ac_foto']!=''){
					$ft=$data['ac_foto'];
				}else{
					$ft=$this->input->post('fotolama');
				}

				$w_upd=array('username'=>$data['username']);
				$d_upd=array(
					'pass'=>$data['pass'],
					'ac_name'=>$data['ac_name'],
					'ac_foto'=>$ft,
					'gender'=>$data['gender'],
					'level'=>$data['level']
				);
				$this->KSys->updData('account',$w_upd,$d_upd);
				$respon=array(
					'code'=>0,
					'message'=>'Data update'
				);
			}else{
				$respon=$this->KSys->inputData('account',$data);
			}
		}

		header('Access-Control-Allow-Origin: *');
		echo json_encode($respon);
	}

	function delAkun($user){
		//$user=$this->input->post('username');
		$this->KSys->delData(array('username'=>$user),'account');
		redirect('Pengaturan/listAkun');
	}

	function updAkun($user){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}
		
		$data['d']=$this->KSys->getWhere('account',array('username'=>$user))->row_array();
		$this->template->Display('pengaturan/updateAkun',$data);
	}

}