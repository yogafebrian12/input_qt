<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuotationApproved extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function uploadData(){
		$item = $this->input->post('item');

		$dir = './assets/quotationapproved/';
		if(!is_dir($dir)){
			mkdir($dir);
		}

		$config['upload_path'] = $dir;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = $item.'.jpg';
        $config['overwrite'] = true;
        $config['max_size'] = 9000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('qtapproved'))
        {
            $respon = array(
            	'code'=>1,
            	'message'=>$this->upload->display_errors()
            );
        }
        else
        {
            $respon = array(
            	'code'=>0,
            	'message'=>'Gambar '.$this->upload->data('file_name').' berhasil di upload.'
            );
        }

        echo json_encode($respon);
	}

	public function loadData(){
		// Load directory
		$this->load->helper('directory');

		// Data
		$map = directory_map('./assets/quotationapproved');

		// echo '<pre>';
		// print_r($map);
		// echo '</pre>';

		$data['map'] = $map;
		$data['KSys'] = $this->KSys;
		$this->load->view('qt/upload_qtapproved_data',$data);
	}

}