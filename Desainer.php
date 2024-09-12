<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desainer extends CI_Controller {

function __construct(){
	parent::__construct();
		//$this->load->library('upload');
	// if($this->session->userdata('status')!='login'){
	// 	redirect('welcome');
	// }
}

function LastKode(){
	$kode=$this->input->post('kode');

	if($kode=='KR'){
		$kode.=date('y').date('m');
	}
	
	$data=$this->KSys->LastKodeDesainer($kode);
	$json=array('Kode'=>$data['Kode']);
	header('Access-Control-Allow-Origin: *');
	echo json_encode($json);
}

}?>