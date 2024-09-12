<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultHarga extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function kurs(){
		$mu1=strtoupper($this->input->post('matauang'));
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, 'http://www.adisurya.net/kurs-bca/get');
		$kurs_bca = curl_exec($ch);
		curl_close($ch);
		$data_kurs=json_decode($kurs_bca);

		$json=array(
			'Beli'=>$data_kurs->Data->USD->Beli,
			'Jual'=>$data_kurs->Data->USD->Jual
		);
		
		echo json_encode($json);
	}

	public function saveData(){
		$this->KSys->NullAktif();
		$data=array(
			'CartonBox'=>$this->input->post('h_ctnbox'),
			'Craten'=>$this->input->post('h_crate'),
			'MoldingFoam'=>$this->input->post('h_mf'),
			'BrownPaper'=>$this->input->post('h_bp'),
			'FoamSheet'=>$this->input->post('h_fs'),
			'BubleSheet'=>$this->input->post('h_bs'),
			'ShreddedPaper'=>$this->input->post('h_sp'),
			'SingleFace'=>$this->input->post('h_sf'),
			'Styrofoam2mm'=>$this->input->post('h_styrofoam'),
			'Corner'=>$this->input->post('h_corner'),
			'Plastik'=>$this->input->post('h_plastic'),
			'Trucking'=>$this->input->post('h_truck'),
			'KapasitaTruck'=>$this->input->post('h_cbmtruck'),
			'Conteiner'=>$this->input->post('h_cont'),
			'KapasitasContainer'=>$this->input->post('h_cbmcontainer'),
			'JHook'=>$this->input->post('h_jhook'),
			'Dring'=>$this->input->post('h_dring'),
			'Hanger'=>$this->input->post('h_ringhanger'),
			'sponati'=>$this->input->post('h_sponati'),
			'fisher'=>$this->input->post('h_fisher'),
			'screw'=>$this->input->post('h_screw'),
			'kuncipas'=>$this->input->post('h_kuncipas'),
			'babat'=>$this->input->post('h_Babat'),
			'babat_25'=>$this->input->post('h_Babat25'),
			'babat_5'=>$this->input->post('h_Babat5'),
			'Keyhole'=>$this->input->post('h_keyhole'),
			'OverHead'=>$this->input->post('h_overhead'),
			'ISPN'=>$this->input->post('h_ispn'),
			'Tax'=>$this->input->post('h_tax'),
			'k_mf'=>$this->input->post('k_mf'),
			'k_ctn'=>$this->input->post('k_ctn'),
			'k_crt'=>$this->input->post('k_crt'),
			'k_sr'=>$this->input->post('k_sr'),
			'LastUpdate'=>date('Y-m-d H:i:s'),
			'devided'=>$this->input->post('h_devided')
		);
		$respon=$this->KSys->inputData('mstharga',$data);

		//output to json format
        header("Access-Control-Allow-Origin: *");
        echo json_encode($respon);
	}
}