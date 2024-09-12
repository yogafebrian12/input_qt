<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$this->template->Display('qt/list');
	}

	function input_default(){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$q=array('Aktif'=>'1');
		$data['d']=$this->KSys->getWhere('mstharga',$q)->row_array();
		$this->template->Display('qt/input_default',$data);
	}

	function input_qt(){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$q=array('Aktif'=>'1');
		$data['d']=$this->KSys->getWhere('mstharga',$q)->row_array();
		$data['kraf'] = $this->KSys->SelectAll('kraf','id_kraf','asc')->result();
		$this->template->Display('qt/input_qt',$data);
	}

	function quotationApproved(){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$data['item'] = $this->KSys->SelectAll('qt','id','asc')->result();
		$this->template->Display('qt/upload_qtapproved',$data);
	}

	//-------------------------------------------------------------------

	public function input_default_harga(){
		$q=array('Aktif'=>'1');
		$data['ksys']=$this->KSys->getWhere('mstharga',$q)->result();
		$this->load->view('qt/input_default',$data);
	}

	public function qt2_code($v){
		$where=array('Kode'=>$v);
		$q=$this->KSys->getWhere('qt2',$where)->num_rows();
		echo $q;
	}

	public function qt2_name(){
		$v=$this->input->post('name');
		$where=array('Nama'=>strtoupper($v));
		//print_r($where);
		$q=$this->KSys->getWhere('qt2',$where)->num_rows();
		echo $q;
	}

	public function input_quotation(){
		$q=array('Aktif'=>'1');
		$data['ksys']=$this->KSys->getWhere('mstharga',$q)->result();
		$this->load->view('input_quotation',$data);
	}

	public function input_default_harga_sv(){
		$this->KSys->NullAktif();
		$data=array('CartonBox'=>$this->input->post('cartonbox'),'Craten'=>$this->input->post('crate'),'MoldingFoam'=>$this->input->post('moldingfoam'),'FoamSheet'=>$this->input->post('foamsheet'),'BubleSheet'=>$this->input->post('bubblesheet'),'ShreddedPaper'=>$this->input->post('shreddedpaper'),'SingleFace'=>$this->input->post('singleface'),'Styrofoam2mm'=>$this->input->post('styrofoam'),'Corner'=>$this->input->post('corner'),'Plastik'=>$this->input->post('plastic'),'Trucking'=>$this->input->post('hargatruck'),'KapasitaTruck'=>$this->input->post('cbmtruck'),'Conteiner'=>$this->input->post('hargacontainer'),'KapasitasContainer'=>$this->input->post('cbmcontainer'),'JHook'=>$this->input->post('jhook'),'Dring'=>$this->input->post('dring'),'Hanger'=>$this->input->post('ringhanger'),'Keyhole'=>$this->input->post('keyhole'),'OverHead'=>$this->input->post('overhead'),'ISPN'=>$this->input->post('ispn'),'Tax'=>$this->input->post('tax'),'LastUpdate'=>date('Y-m-d H:i:s'));
		$this->KSys->inputData('mstharga',$data);
	}

	public function input_quotation_sv(){
		//$photo='';
		if(isset($_FILES['photo']['name'])){
			$config['upload_path'] = './assets/Quotation/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

			$this->load->library('upload', $config);

			// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
			//$this->upload->initialize($config);

			if($this->upload->do_upload('photo')){
				$photo=$this->upload->data('file_name');
			}else{
				echo '<script>alert("'.$this->upload->display_errors().'");</script>';
			}
		}else{
			$photo='';
		}
		
		$data=array(
			'Kode'=>strtoupper($this->input->post('code')),
			'Nama'=>strtoupper($this->input->post('name')),
			'Foto'=>$photo,
			'DimP'=>$this->input->post('dimensionlw'),
			'DimL'=>$this->input->post('dimensionll'),
			'DimT'=>$this->input->post('dimensionld'),
			'CBMDim'=>$this->input->post('dimensionlcbm'),
			'DimP_M'=>$this->input->post('dimensionmw'),
			'DimL_M'=>$this->input->post('dimensionml'),
			'DimT_M'=>$this->input->post('dimensionmd'),
			'CBMDim_M'=>$this->input->post('dimensionmcbm'),
			'DimP_S'=>$this->input->post('dimensionsw'),
			'DimL_S'=>$this->input->post('dimensionsl'),
			'DimT_S'=>$this->input->post('dimensionsd'),
			'CBMDim_S'=>$this->input->post('dimensionscbm'),
			'CBMTot'=>$this->input->post('dimensiontotcbm'),
			'Weight'=>$this->input->post('weight'),
			'SPPrice'=>$this->input->post('spprice'),
			'Finishing'=>$this->input->post('fin'),
			'Glass'=>$this->input->post('glass'),
			'Mirror'=>$this->input->post('mirror'),
			'Metal'=>$this->input->post('metal'),
			'Brass'=>$this->input->post('brass'),
			'Aluminium'=>$this->input->post('aluminium'),
			'Candle'=>$this->input->post('candle'),
			'Stone'=>$this->input->post('stone'),
			'Base'=>$this->input->post('base'),
			'Backing'=>$this->input->post('backing'),
			'BiayaLainStr1'=>$this->input->post('strbiayalain1'),
			'BiayaLainNum1'=>$this->input->post('numbiayalain1'),
			'BiayaLainStr2'=>$this->input->post('strbiayalain2'),
			'BiayaLainNum2'=>$this->input->post('numbiayalain2'),
			'SubTotal1'=>$this->input->post('subtotal1'),
			'CartonP'=>$this->input->post('boxsizew'),
			'CartonL'=>$this->input->post('boxsizel'),
			'CartonT'=>$this->input->post('boxsized'),
			'CBMCarton'=>$this->input->post('boxsizecbm'),
			'SubCarton'=>$this->input->post('boxprice1'),
			'HrgCarton'=>$this->input->post('boxprice2'),
			'BiayaCarton'=>$this->input->post('boxpriceres'),
			'BiayaInnerBox'=>$this->input->post('innerboxpriceres'),
			'CrateP'=>$this->input->post('cratesizew'),
			'CrateL'=>$this->input->post('cratesizel'),
			'CrateT'=>$this->input->post('cratesized'),
			'CrateCBM'=>$this->input->post('cratesizecbm'),
			'JmlPapan'=>$this->input->post('crateprice1'),
			'HrgPapan'=>$this->input->post('crateprice2'),
			'BiayaCrate'=>$this->input->post('cratepriceres'),
			'MoldingP'=>$this->input->post('mfoamsizew'),
			'MoldingL'=>$this->input->post('mfoamsizel'),
			'MoldingT'=>$this->input->post('mfoamsized'),
			'MoldingCBM'=>$this->input->post('mfoamsizecbm'),
			'HrgMolding'=>$this->input->post('mfoamprice2'),
			'BiayaModing'=>$this->input->post('mfoampriceres'),
			'PanjangFoam'=>$this->input->post('foamsheet1'),
			'HrgFoam'=>$this->input->post('foamsheet2'),
			'BiayaFoam'=>$this->input->post('foamsheetres'),
			'PanjangBubble'=>$this->input->post('bubblesheet1'),
			'HrgBubble'=>$this->input->post('bubblesheet2'),
			'BiayaBubble'=>$this->input->post('bubblesheetres'),
			'BeratPaper'=>$this->input->post('shreddedpaper1'),
			'HrgPaper'=>$this->input->post('shreddedpaper2'),
			'BiayaPaper'=>$this->input->post('shreddedpaperres'),
			'PanjangFace'=>$this->input->post('singleface1'),
			'HrgFace'=>$this->input->post('singleface2'),
			'BiayaFace'=>$this->input->post('singlefaceres'),
			'lbrStyrofoam'=>$this->input->post('styrofoam1'),
			'HrgStyrofoam'=>$this->input->post('styrofoam2'),
			'BiayaStrofoam'=>$this->input->post('styrofoamres'),
			'JmlConer'=>$this->input->post('corner1'),
			'HrgConer'=>$this->input->post('corner2'),
			'BiayaConer'=>$this->input->post('cornerres'),
			'PanjangPlastik'=>$this->input->post('plastic1'),
			'HrgPlastik'=>$this->input->post('plastic2'),
			'BiayaPlastik'=>$this->input->post('plasticres'),
			'ManPower'=>$this->input->post('manpower'),
			'HrgTrucking'=>$this->input->post('truckingcost1'),
			'CBMTrucking'=>$this->input->post('truckingcost2'),
			'CBMItemTru'=>$this->input->post('truckingcost3'),
			'BiayaTrucking'=>$this->input->post('truckingcostres'),
			'HrgContainer'=>$this->input->post('conteinercost1'),
			'CBMContainer'=>$this->input->post('conteinercost2'),
			'CBMItemCon'=>$this->input->post('conteinercost3'),
			'BiayaContainer'=>$this->input->post('conteinercostres'),
			'JmlISPN'=>$this->input->post('ispn1'),
			'HrgISPN'=>$this->input->post('ispn2'),
			'BiayaISPN'=>$this->input->post('ispnres'),
			'JmlHook'=>$this->input->post('jhook1'),
			'HrgHook'=>$this->input->post('jhook2'),
			'BiayaHook'=>$this->input->post('jhookres'),
			'JmlRing'=>$this->input->post('dring1'),
			'HrgRing'=>$this->input->post('dring2'),
			'BiayaRing'=>$this->input->post('dringres'),
			'JmlHanger'=>$this->input->post('ringhanger1'),
			'HrgHanger'=>$this->input->post('ringhanger2'),
			'BiayaHanger'=>$this->input->post('ringhangerres'),
			'JmlKeyHole'=>$this->input->post('keyhole1'),
			'HrgKeyHole'=>$this->input->post('keyhole2'),
			'BiayaKeyHole'=>$this->input->post('keyholeres'),
			'SubTotal2'=>$this->input->post('subtotal2'),
			'FOB1'=>$this->input->post('fobprice1'),
			'FOB2'=>$this->input->post('fobprice2'),
			'TolFOB'=>$this->input->post('fobpriceres'),
			'OverHeadPersen'=>$this->input->post('overhead1'),
			'BiayaOverHead'=>$this->input->post('overheadres'),
			'SubTotalOverHead'=>$this->input->post('subtotaloverhead'),
			'TAXPersen'=>$this->input->post('tax1'),
			'BiayaTax'=>$this->input->post('tax2'),
			'Total'=>$this->input->post('total'),
			'Devided'=>$this->input->post('devided'),
			'USDPrice'=>$this->input->post('usdprice'),
			'Quote'=>$this->input->post('quote'),
			'WaktuInput'=>date('Y-m-d H:i:s'),
			'UserInput'=>$this->session->userdata('name'),
			'LastUpdate'=>'-',
			'UserUpdate'=>'-'
			);
			$response=$this->KSys->inputData('qt2',$data);
			//$this->KSys->inputData('temp_qt',$data);
			//echo '<pre>';
			//print_r($data);
			//print_r($response);
			//echo '</pre>';
			header('Access-Control-Allow-Origin: *');
			echo json_encode($response);
	}

	public function input_quotation_print(){
		$q['q']=$this->KSys->qt2Select4Print('temp_qt',$this->session->userdata('name'))->result();
		//echo '<pre>';
		//print_r($q);
		//echo '</pre>';
		$this->load->view('input_quotation_print',$q);
	}

	//Tbl Quotation
	public function tbl_quotation(){
		$this->load->view('list_quotation');
	}

	public function data_quotation(){
		$draw=intval($this->input->post('draw'));
		$length=intval($this->input->post('length'));
		$start=intval($this->input->post('start'));

		$list=$this->KSys->SelectAll('qt2','id','desc');
		$data=array();
		$no=$this->input->post('start');
		foreach($list->result() as $dt){
			$no++;
			$row=array();
			$row[]=$no;
			$row[]=$dt->Kode;
			$row[]=strtoupper($dt->Nama);
			
			if($dt->Foto!=''){
				$row[]='<img class="img-thumbnail" src="'.base_url().'assets/photo_items/'.$dt->Foto.'" style="width:100px;height:90px;" />';
			}else{
				$row[]='<img class="img-thumbnail" src="'.base_url().'assets/photo_items/null.png" style="width:100px;height:90px;" />';
			}
			
			$row[]='<i class="fa fa-usd"></i>&nbsp;'.number_format($dt->Quote,2,',','.');
			$row[]='<div class="input-group-btn"><a class="btn btn-info btn-sm" href="'.base_url().'main/data_quotation_edit/'.$dt->id.'"><i class="fa fa-edit"></i></a> <a class="btn btn-warning btn-sm" href="'.base_url().'main/data_quotation_view/'.$dt->id.'" target="__blank"><i class="fa fa-eye"></i></a> <a class="btn btn-primary btn-sm" href="'.base_url().'main/data_quotation_print/'.$dt->id.'" target="__blank"><i class="fa fa-print"></i></a></div>';
			$data[]=$row;
		}
		$output=array(
			'draw'=>$draw,
			'recordsTotal'=>$list->num_rows(),
			'recordsFiltered'=>$list->num_rows(),
			'data'=>$data
		);
		echo json_encode($output);
		//echo '<pre>';
		//print_r($data);
		//echo '</pre>';
	}

	public function data_quotation_print($id){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$w=array('id'=>$id);
		$data['q']=$this->KSys->getWhere('qt2',$w)->result();
		$this->load->view('input_quotation_print',$data);
	}

	public function data_quotation_view($id){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$w=array('id'=>$id);
		$data['q']=$this->KSys->getWhere('qt2',$w)->result();
		$this->load->view('input_quotation_view',$data);
	}

	public function data_quotation_edit($id){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$w=array('id'=>$id);
		$data['q']=$this->KSys->getWhere('qt2',$w)->result();
		$q=array('Aktif'=>'1');
		$data['ksys']=$this->KSys->getWhere('mstharga',$q)->result();
		$this->load->view('input_quotation_edit',$data);
	}

	public function data_quotation_update(){
		$id=$this->input->post('id');
		$useript=$this->input->post('UserInput');
		$waktuipt=date('Y-m-d H:i:s',strtotime($this->input->post('WaktuInput')));
		$userupd=$this->session->userdata('name');
		$waktuupd=date('Y-m-d H:i:s');
		$where=array('id'=>$id);
		$q=$this->KSys->getWhere('qt2',$where)->result();
		//$photo=$_FILES['photo']['name'];
		//echo $id;

		if(!empty($_FILES['photo']['name'])){
			foreach($q as $d){
				if(strtoupper($_FILES['photo']['name'])==strtoupper($d->Foto)){
				$photo=$d->Foto;
				$data=array(
				'Kode'=>strtoupper($this->input->post('code')),
				'Nama'=>strtoupper($this->input->post('name')),
				'Foto'=>$photo,
				'DimP'=>$this->input->post('dimensionlw'),
				'DimL'=>$this->input->post('dimensionll'),
				'DimT'=>$this->input->post('dimensionld'),
				'CBMDim'=>$this->input->post('dimensionlcbm'),
				'DimP_M'=>$this->input->post('dimensionmw'),
				'DimL_M'=>$this->input->post('dimensionml'),
				'DimT_M'=>$this->input->post('dimensionmd'),
				'CBMDim_M'=>$this->input->post('dimensionmcbm'),
				'DimP_S'=>$this->input->post('dimensionsw'),
				'DimL_S'=>$this->input->post('dimensionsl'),
				'DimT_S'=>$this->input->post('dimensionsd'),
				'CBMDim_S'=>$this->input->post('dimensionscbm'),
				'CBMTot'=>$this->input->post('dimensiontotcbm'),
				'Weight'=>$this->input->post('weight'),
				'SPPrice'=>$this->input->post('spprice'),
				'Finishing'=>$this->input->post('fin'),
				'Glass'=>$this->input->post('glass'),
				'Mirror'=>$this->input->post('mirror'),
				'Metal'=>$this->input->post('metal'),
				'Brass'=>$this->input->post('brass'),
				'Aluminium'=>$this->input->post('aluminium'),
				'Candle'=>$this->input->post('candle'),
				'Stone'=>$this->input->post('stone'),
				'Base'=>$this->input->post('base'),
				'Backing'=>$this->input->post('backing'),
				'BiayaLainStr1'=>$this->input->post('strbiayalain1'),
				'BiayaLainNum1'=>$this->input->post('numbiayalain1'),
				'BiayaLainStr2'=>$this->input->post('strbiayalain2'),
				'BiayaLainNum2'=>$this->input->post('numbiayalain2'),
				'SubTotal1'=>$this->input->post('subtotal1'),
				'CartonP'=>$this->input->post('boxsizew'),
				'CartonL'=>$this->input->post('boxsizel'),
				'CartonT'=>$this->input->post('boxsized'),
				'CBMCarton'=>$this->input->post('boxsizecbm'),
				'SubCarton'=>$this->input->post('boxprice1'),
				'HrgCarton'=>$this->input->post('boxprice2'),
				'BiayaCarton'=>$this->input->post('boxpriceres'),
				'BiayaInnerBox'=>$this->input->post('innerboxpriceres'),
				'CrateP'=>$this->input->post('cratesizew'),
				'CrateL'=>$this->input->post('cratesizel'),
				'CrateT'=>$this->input->post('cratesized'),
				'CrateCBM'=>$this->input->post('cratesizecbm'),
				'JmlPapan'=>$this->input->post('crateprice1'),
				'HrgPapan'=>$this->input->post('crateprice2'),
				'BiayaCrate'=>$this->input->post('cratepriceres'),
				'MoldingP'=>$this->input->post('mfoamsizew'),
				'MoldingL'=>$this->input->post('mfoamsizel'),
				'MoldingT'=>$this->input->post('mfoamsized'),
				'MoldingCBM'=>$this->input->post('mfoamsizecbm'),
				'HrgMolding'=>$this->input->post('mfoamprice2'),
				'BiayaModing'=>$this->input->post('mfoampriceres'),
				'PanjangFoam'=>$this->input->post('foamsheet1'),
				'HrgFoam'=>$this->input->post('foamsheet2'),
				'BiayaFoam'=>$this->input->post('foamsheetres'),
				'PanjangBubble'=>$this->input->post('bubblesheet1'),
				'HrgBubble'=>$this->input->post('bubblesheet2'),
				'BiayaBubble'=>$this->input->post('bubblesheetres'),
				'BeratPaper'=>$this->input->post('shreddedpaper1'),
				'HrgPaper'=>$this->input->post('shreddedpaper2'),
				'BiayaPaper'=>$this->input->post('shreddedpaperres'),
				'PanjangFace'=>$this->input->post('singleface1'),
				'HrgFace'=>$this->input->post('singleface2'),
				'BiayaFace'=>$this->input->post('singlefaceres'),
				'lbrStyrofoam'=>$this->input->post('styrofoam1'),
				'HrgStyrofoam'=>$this->input->post('styrofoam2'),
				'BiayaStrofoam'=>$this->input->post('styrofoamres'),
				'JmlConer'=>$this->input->post('corner1'),
				'HrgConer'=>$this->input->post('corner2'),
				'BiayaConer'=>$this->input->post('cornerres'),
				'PanjangPlastik'=>$this->input->post('plastic1'),
				'HrgPlastik'=>$this->input->post('plastic2'),
				'BiayaPlastik'=>$this->input->post('plasticres'),
				'ManPower'=>$this->input->post('manpower'),
				'HrgTrucking'=>$this->input->post('truckingcost1'),
				'CBMTrucking'=>$this->input->post('truckingcost2'),
				'CBMItemTru'=>$this->input->post('truckingcost3'),
				'BiayaTrucking'=>$this->input->post('truckingcostres'),
				'HrgContainer'=>$this->input->post('conteinercost1'),
				'CBMContainer'=>$this->input->post('conteinercost2'),
				'CBMItemCon'=>$this->input->post('conteinercost3'),
				'BiayaContainer'=>$this->input->post('conteinercostres'),
				'JmlISPN'=>$this->input->post('ispn1'),
				'HrgISPN'=>$this->input->post('ispn2'),
				'BiayaISPN'=>$this->input->post('ispnres'),
				'JmlHook'=>$this->input->post('jhook1'),
				'HrgHook'=>$this->input->post('jhook2'),
				'BiayaHook'=>$this->input->post('jhookres'),
				'JmlRing'=>$this->input->post('dring1'),
				'HrgRing'=>$this->input->post('dring2'),
				'BiayaRing'=>$this->input->post('dringres'),
				'JmlHanger'=>$this->input->post('ringhanger1'),
				'HrgHanger'=>$this->input->post('ringhanger2'),
				'BiayaHanger'=>$this->input->post('ringhangerres'),
				'JmlKeyHole'=>$this->input->post('keyhole1'),
				'HrgKeyHole'=>$this->input->post('keyhole2'),
				'BiayaKeyHole'=>$this->input->post('keyholeres'),
				'SubTotal2'=>$this->input->post('subtotal2'),
				'FOB1'=>$this->input->post('fobprice1'),
				'FOB2'=>$this->input->post('fobprice2'),
				'TolFOB'=>$this->input->post('fobpriceres'),
				'OverHeadPersen'=>$this->input->post('overhead1'),
				'BiayaOverHead'=>$this->input->post('overheadres'),
				'SubTotalOverHead'=>$this->input->post('subtotaloverhead'),
				'TAXPersen'=>$this->input->post('tax1'),
				'BiayaTax'=>$this->input->post('tax2'),
				'Total'=>$this->input->post('total'),
				'Devided'=>$this->input->post('devided'),
				'USDPrice'=>$this->input->post('usdprice'),
				'Quote'=>$this->input->post('quote'),
				'WaktuInput'=>$waktuipt,
				'UserInput'=>$useript,
				'LastUpdate'=>$waktuupd,
				'UserUpdate'=>$userupd
				);
				}elseif(strtoupper($_FILES['photo']['name'])!=strtoupper($d->Foto)){
				$config['upload_path'] = './assets/photo_items/';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['max_size']     = '100000';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('photo')){
				$photo=$this->upload->data('file_name');
				$data=array(
				'Kode'=>strtoupper($this->input->post('code')),
				'Nama'=>strtoupper($this->input->post('name')),
				'Foto'=>$photo,
				'DimP'=>$this->input->post('dimensionlw'),
				'DimL'=>$this->input->post('dimensionll'),
				'DimT'=>$this->input->post('dimensionld'),
				'CBMDim'=>$this->input->post('dimensionlcbm'),
				'DimP_M'=>$this->input->post('dimensionmw'),
				'DimL_M'=>$this->input->post('dimensionml'),
				'DimT_M'=>$this->input->post('dimensionmd'),
				'CBMDim_M'=>$this->input->post('dimensionmcbm'),
				'DimP_S'=>$this->input->post('dimensionsw'),
				'DimL_S'=>$this->input->post('dimensionsl'),
				'DimT_S'=>$this->input->post('dimensionsd'),
				'CBMDim_S'=>$this->input->post('dimensionscbm'),
				'CBMTot'=>$this->input->post('dimensiontotcbm'),
				'Weight'=>$this->input->post('weight'),
				'SPPrice'=>$this->input->post('spprice'),
				'Finishing'=>$this->input->post('fin'),
				'Glass'=>$this->input->post('glass'),
				'Mirror'=>$this->input->post('mirror'),
				'Metal'=>$this->input->post('metal'),
				'Brass'=>$this->input->post('brass'),
				'Aluminium'=>$this->input->post('aluminium'),
				'Candle'=>$this->input->post('candle'),
				'Stone'=>$this->input->post('stone'),
				'Base'=>$this->input->post('base'),
				'Backing'=>$this->input->post('backing'),
				'BiayaLainStr1'=>$this->input->post('strbiayalain1'),
				'BiayaLainNum1'=>$this->input->post('numbiayalain1'),
				'BiayaLainStr2'=>$this->input->post('strbiayalain2'),
				'BiayaLainNum2'=>$this->input->post('numbiayalain2'),
				'SubTotal1'=>$this->input->post('subtotal1'),
				'CartonP'=>$this->input->post('boxsizew'),
				'CartonL'=>$this->input->post('boxsizel'),
				'CartonT'=>$this->input->post('boxsized'),
				'CBMCarton'=>$this->input->post('boxsizecbm'),
				'SubCarton'=>$this->input->post('boxprice1'),
				'HrgCarton'=>$this->input->post('boxprice2'),
				'BiayaCarton'=>$this->input->post('boxpriceres'),
				'BiayaInnerBox'=>$this->input->post('innerboxpriceres'),
				'CrateP'=>$this->input->post('cratesizew'),
				'CrateL'=>$this->input->post('cratesizel'),
				'CrateT'=>$this->input->post('cratesized'),
				'CrateCBM'=>$this->input->post('cratesizecbm'),
				'JmlPapan'=>$this->input->post('crateprice1'),
				'HrgPapan'=>$this->input->post('crateprice2'),
				'BiayaCrate'=>$this->input->post('cratepriceres'),
				'MoldingP'=>$this->input->post('mfoamsizew'),
				'MoldingL'=>$this->input->post('mfoamsizel'),
				'MoldingT'=>$this->input->post('mfoamsized'),
				'MoldingCBM'=>$this->input->post('mfoamsizecbm'),
				'HrgMolding'=>$this->input->post('mfoamprice2'),
				'BiayaModing'=>$this->input->post('mfoampriceres'),
				'PanjangFoam'=>$this->input->post('foamsheet1'),
				'HrgFoam'=>$this->input->post('foamsheet2'),
				'BiayaFoam'=>$this->input->post('foamsheetres'),
				'PanjangBubble'=>$this->input->post('bubblesheet1'),
				'HrgBubble'=>$this->input->post('bubblesheet2'),
				'BiayaBubble'=>$this->input->post('bubblesheetres'),
				'BeratPaper'=>$this->input->post('shreddedpaper1'),
				'HrgPaper'=>$this->input->post('shreddedpaper2'),
				'BiayaPaper'=>$this->input->post('shreddedpaperres'),
				'PanjangFace'=>$this->input->post('singleface1'),
				'HrgFace'=>$this->input->post('singleface2'),
				'BiayaFace'=>$this->input->post('singlefaceres'),
				'lbrStyrofoam'=>$this->input->post('styrofoam1'),
				'HrgStyrofoam'=>$this->input->post('styrofoam2'),
				'BiayaStrofoam'=>$this->input->post('styrofoamres'),
				'JmlConer'=>$this->input->post('corner1'),
				'HrgConer'=>$this->input->post('corner2'),
				'BiayaConer'=>$this->input->post('cornerres'),
				'PanjangPlastik'=>$this->input->post('plastic1'),
				'HrgPlastik'=>$this->input->post('plastic2'),
				'BiayaPlastik'=>$this->input->post('plasticres'),
				'ManPower'=>$this->input->post('manpower'),
				'HrgTrucking'=>$this->input->post('truckingcost1'),
				'CBMTrucking'=>$this->input->post('truckingcost2'),
				'CBMItemTru'=>$this->input->post('truckingcost3'),
				'BiayaTrucking'=>$this->input->post('truckingcostres'),
				'HrgContainer'=>$this->input->post('conteinercost1'),
				'CBMContainer'=>$this->input->post('conteinercost2'),
				'CBMItemCon'=>$this->input->post('conteinercost3'),
				'BiayaContainer'=>$this->input->post('conteinercostres'),
				'JmlISPN'=>$this->input->post('ispn1'),
				'HrgISPN'=>$this->input->post('ispn2'),
				'BiayaISPN'=>$this->input->post('ispnres'),
				'JmlHook'=>$this->input->post('jhook1'),
				'HrgHook'=>$this->input->post('jhook2'),
				'BiayaHook'=>$this->input->post('jhookres'),
				'JmlRing'=>$this->input->post('dring1'),
				'HrgRing'=>$this->input->post('dring2'),
				'BiayaRing'=>$this->input->post('dringres'),
				'JmlHanger'=>$this->input->post('ringhanger1'),
				'HrgHanger'=>$this->input->post('ringhanger2'),
				'BiayaHanger'=>$this->input->post('ringhangerres'),
				'JmlKeyHole'=>$this->input->post('keyhole1'),
				'HrgKeyHole'=>$this->input->post('keyhole2'),
				'BiayaKeyHole'=>$this->input->post('keyholeres'),
				'SubTotal2'=>$this->input->post('subtotal2'),
				'FOB1'=>$this->input->post('fobprice1'),
				'FOB2'=>$this->input->post('fobprice2'),
				'TolFOB'=>$this->input->post('fobpriceres'),
				'OverHeadPersen'=>$this->input->post('overhead1'),
				'BiayaOverHead'=>$this->input->post('overheadres'),
				'SubTotalOverHead'=>$this->input->post('subtotaloverhead'),
				'TAXPersen'=>$this->input->post('tax1'),
				'BiayaTax'=>$this->input->post('tax2'),
				'Total'=>$this->input->post('total'),
				'Devided'=>$this->input->post('devided'),
				'USDPrice'=>$this->input->post('usdprice'),
				'Quote'=>$this->input->post('quote'),
				'WaktuInput'=>$waktuipt,
				'UserInput'=>$useript,
				'LastUpdate'=>$waktuupd,
				'UserUpdate'=>$userupd
				);
				}else{
					echo $this->upload->display_errors();
				}
				}
			}
		}else{
			foreach($q as $d){
				$photo=$d->Foto;
				$data=array(
				'Kode'=>strtoupper($this->input->post('code')),
				'Nama'=>strtoupper($this->input->post('name')),
				'Foto'=>$photo,
				'DimP'=>$this->input->post('dimensionlw'),
				'DimL'=>$this->input->post('dimensionll'),
				'DimT'=>$this->input->post('dimensionld'),
				'CBMDim'=>$this->input->post('dimensionlcbm'),
				'DimP_M'=>$this->input->post('dimensionmw'),
				'DimL_M'=>$this->input->post('dimensionml'),
				'DimT_M'=>$this->input->post('dimensionmd'),
				'CBMDim_M'=>$this->input->post('dimensionmcbm'),
				'DimP_S'=>$this->input->post('dimensionsw'),
				'DimL_S'=>$this->input->post('dimensionsl'),
				'DimT_S'=>$this->input->post('dimensionsd'),
				'CBMDim_S'=>$this->input->post('dimensionscbm'),
				'CBMTot'=>$this->input->post('dimensiontotcbm'),
				'Weight'=>$this->input->post('weight'),
				'SPPrice'=>$this->input->post('spprice'),
				'Finishing'=>$this->input->post('fin'),
				'Glass'=>$this->input->post('glass'),
				'Mirror'=>$this->input->post('mirror'),
				'Metal'=>$this->input->post('metal'),
				'Brass'=>$this->input->post('brass'),
				'Aluminium'=>$this->input->post('aluminium'),
				'Candle'=>$this->input->post('candle'),
				'Stone'=>$this->input->post('stone'),
				'Base'=>$this->input->post('base'),
				'Backing'=>$this->input->post('backing'),
				'BiayaLainStr1'=>$this->input->post('strbiayalain1'),
				'BiayaLainNum1'=>$this->input->post('numbiayalain1'),
				'BiayaLainStr2'=>$this->input->post('strbiayalain2'),
				'BiayaLainNum2'=>$this->input->post('numbiayalain2'),
				'SubTotal1'=>$this->input->post('subtotal1'),
				'CartonP'=>$this->input->post('boxsizew'),
				'CartonL'=>$this->input->post('boxsizel'),
				'CartonT'=>$this->input->post('boxsized'),
				'CBMCarton'=>$this->input->post('boxsizecbm'),
				'SubCarton'=>$this->input->post('boxprice1'),
				'HrgCarton'=>$this->input->post('boxprice2'),
				'BiayaCarton'=>$this->input->post('boxpriceres'),
				'BiayaInnerBox'=>$this->input->post('innerboxpriceres'),
				'CrateP'=>$this->input->post('cratesizew'),
				'CrateL'=>$this->input->post('cratesizel'),
				'CrateT'=>$this->input->post('cratesized'),
				'CrateCBM'=>$this->input->post('cratesizecbm'),
				'JmlPapan'=>$this->input->post('crateprice1'),
				'HrgPapan'=>$this->input->post('crateprice2'),
				'BiayaCrate'=>$this->input->post('cratepriceres'),
				'MoldingP'=>$this->input->post('mfoamsizew'),
				'MoldingL'=>$this->input->post('mfoamsizel'),
				'MoldingT'=>$this->input->post('mfoamsized'),
				'MoldingCBM'=>$this->input->post('mfoamsizecbm'),
				'HrgMolding'=>$this->input->post('mfoamprice2'),
				'BiayaModing'=>$this->input->post('mfoampriceres'),
				'PanjangFoam'=>$this->input->post('foamsheet1'),
				'HrgFoam'=>$this->input->post('foamsheet2'),
				'BiayaFoam'=>$this->input->post('foamsheetres'),
				'PanjangBubble'=>$this->input->post('bubblesheet1'),
				'HrgBubble'=>$this->input->post('bubblesheet2'),
				'BiayaBubble'=>$this->input->post('bubblesheetres'),
				'BeratPaper'=>$this->input->post('shreddedpaper1'),
				'HrgPaper'=>$this->input->post('shreddedpaper2'),
				'BiayaPaper'=>$this->input->post('shreddedpaperres'),
				'PanjangFace'=>$this->input->post('singleface1'),
				'HrgFace'=>$this->input->post('singleface2'),
				'BiayaFace'=>$this->input->post('singlefaceres'),
				'lbrStyrofoam'=>$this->input->post('styrofoam1'),
				'HrgStyrofoam'=>$this->input->post('styrofoam2'),
				'BiayaStrofoam'=>$this->input->post('styrofoamres'),
				'JmlConer'=>$this->input->post('corner1'),
				'HrgConer'=>$this->input->post('corner2'),
				'BiayaConer'=>$this->input->post('cornerres'),
				'PanjangPlastik'=>$this->input->post('plastic1'),
				'HrgPlastik'=>$this->input->post('plastic2'),
				'BiayaPlastik'=>$this->input->post('plasticres'),
				'ManPower'=>$this->input->post('manpower'),
				'HrgTrucking'=>$this->input->post('truckingcost1'),
				'CBMTrucking'=>$this->input->post('truckingcost2'),
				'CBMItemTru'=>$this->input->post('truckingcost3'),
				'BiayaTrucking'=>$this->input->post('truckingcostres'),
				'HrgContainer'=>$this->input->post('conteinercost1'),
				'CBMContainer'=>$this->input->post('conteinercost2'),
				'CBMItemCon'=>$this->input->post('conteinercost3'),
				'BiayaContainer'=>$this->input->post('conteinercostres'),
				'JmlISPN'=>$this->input->post('ispn1'),
				'HrgISPN'=>$this->input->post('ispn2'),
				'BiayaISPN'=>$this->input->post('ispnres'),
				'JmlHook'=>$this->input->post('jhook1'),
				'HrgHook'=>$this->input->post('jhook2'),
				'BiayaHook'=>$this->input->post('jhookres'),
				'JmlRing'=>$this->input->post('dring1'),
				'HrgRing'=>$this->input->post('dring2'),
				'BiayaRing'=>$this->input->post('dringres'),
				'JmlHanger'=>$this->input->post('ringhanger1'),
				'HrgHanger'=>$this->input->post('ringhanger2'),
				'BiayaHanger'=>$this->input->post('ringhangerres'),
				'JmlKeyHole'=>$this->input->post('keyhole1'),
				'HrgKeyHole'=>$this->input->post('keyhole2'),
				'BiayaKeyHole'=>$this->input->post('keyholeres'),
				'SubTotal2'=>$this->input->post('subtotal2'),
				'FOB1'=>$this->input->post('fobprice1'),
				'FOB2'=>$this->input->post('fobprice2'),
				'TolFOB'=>$this->input->post('fobpriceres'),
				'OverHeadPersen'=>$this->input->post('overhead1'),
				'BiayaOverHead'=>$this->input->post('overheadres'),
				'SubTotalOverHead'=>$this->input->post('subtotaloverhead'),
				'TAXPersen'=>$this->input->post('tax1'),
				'BiayaTax'=>$this->input->post('tax2'),
				'Total'=>$this->input->post('total'),
				'Devided'=>$this->input->post('devided'),
				'USDPrice'=>$this->input->post('usdprice'),
				'Quote'=>$this->input->post('quote'),
				'WaktuInput'=>$waktuipt,
				'UserInput'=>$useript,
				'LastUpdate'=>$waktuupd,
				'UserUpdate'=>$userupd
				);
				//echo $photo;
			}
		}
		//print_r($data);
		$this->KSys->updData('qt2',$where,$data);
		$this->KSys->inputData('temp_qt',$data);
	}

	public function update_quotation_print(){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$q['q']=$this->KSys->qt2Update4Print('temp_qt',$this->session->userdata('name'))->result();
		//echo '<pre>';
		//print_r($q);
		//echo '</pre>';
		$this->load->view('input_quotation_print',$q);
	}
}