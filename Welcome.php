<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$this->session->sess_destroy();
		$this->load->view('login');
	}

	public function register(){
		$this->load->view('register');
	}

	public function checkuser($val){
		//echo $val;
		$data=array('username'=>$val);
		$q=$this->KSys->getWhere('account',$data)->num_rows();
		echo $q;
	}

	public function register_sv(){
		$data=array('ac_name'=>$this->input->post('nama'),'username'=>$this->input->post('username'),'gender'=>$this->input->post('gender'),'pass'=>$this->encryption->encrypt($this->input->post('pass')));
		$this->KSys->inputData('account',$data);
	}

	public function login(){
		$user=$this->input->post('user');
		$pass=$this->input->post('pass');
		$data=array('username'=>$user);
		$q=$this->KSys->getWhere('account',$data)->result();
		foreach($q as $a){
			if(strtoupper($a->username)==strtoupper($user) && strtoupper($a->pass)==strtoupper($pass)){
				$ses=array('username'=>$user,'name'=>$a->ac_name,'status'=>'login','level'=>$a->level,'foto'=>$a->ac_foto,'init'=>$a->init);
				$this->session->set_userdata($ses);
				echo 1;
			}else{
				echo 0;
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
