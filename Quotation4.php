<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->library('upload');
	}

	public function getData(){
		$kode=$this->input->post('kode');
		//$kode='25593';
		$w=array('Kode'=>$kode);
		$cek=$this->KSys->getWhere('qt',$w);
		if($cek->num_rows() > 0){
			$row=$cek->row_array();
			$output=array(
				//'Kode'=>strtoupper($this->input->post('code')),
				'Nama'=>strtoupper($row['Nama']),
				'Foto'=>$row['Foto'],
				'DimP'=>$row['DimP'],
				'DimL'=>$row['DimL'],
				'DimT'=>$row['DimT'],
				'CBMDim'=>$row['CBMDim'],
				'DimP_M'=>$row['DimP_M'],
				'DimL_M'=>$row['DimL_M'],
				'DimT_M'=>$row['DimT_M'],
				'CBMDim_M'=>$row['CBMDim_M'],
				'DimP_S'=>$row['DimP_S'],
				'DimL_S'=>$row['DimL_S'],
				'DimT_S'=>$row['DimT_S'],
				'CBMDim_S'=>$row['CBMDim_S'],
				'CBMTot'=>$row['CBMTot'],
				'Weight'=>$row['Weight'],
				'SPPrice'=>$row['SPPrice'],
				'Finishing'=>$row['Finishing'],
				'Glass'=>$row['Glass'],
				'Mirror'=>$row['Mirror'],
				'Metal'=>$row['Metal'],
				'Brass'=>$row['Brass'],
				'Aluminium'=>$row['Aluminium'],
				'Candle'=>$row['Candle'],
				'Stone'=>$row['Stone'],
				'Base'=>$row['Base'],
				'Backing'=>$row['Backing'],
				'BiayaLainStr1'=>$row['BiayaLainStr1'],
				'BiayaLainNum1'=>$row['BiayaLainNum1'],
				'BiayaLainStr2'=>$row['BiayaLainStr2'],
				'BiayaLainNum2'=>$row['BiayaLainNum2'],
				'SubTotal1'=>$row['SubTotal1'],
				'CartonP'=>$row['CartonP'],
				'CartonL'=>$row['CartonL'],
				'CartonT'=>$row['CartonT'],
				'CBMCarton'=>$row['CBMCarton'],
				'SubCarton'=>$row['SubCarton'],
				'HrgCarton'=>$row['HrgCarton'],
				'BiayaCarton'=>$row['BiayaCarton'],
				'BiayaInnerBox'=>$row['BiayaInnerBox'],
				'CrateP'=>$row['CrateP'],
				'CrateL'=>$row['CrateL'],
				'CrateT'=>$row['CrateT'],
				'CrateCBM'=>$row['CrateCBM'],
				'JmlPapan'=>$row['JmlPapan'],
				'HrgPapan'=>$row['HrgPapan'],
				'BiayaCrate'=>$row['BiayaCrate'],
				'MoldingP'=>$row['MoldingP'],
				'MoldingL'=>$row['MoldingL'],
				'MoldingT'=>$row['MoldingT'],
				'MoldingCBM'=>$row['MoldingCBM'],
				'HrgMolding'=>$row['HrgMolding'],
				'BiayaModing'=>$row['BiayaModing'],
				'PanjangFoam'=>$row['PanjangFoam'],
				'HrgFoam'=>$row['HrgFoam'],
				'BiayaFoam'=>$row['BiayaFoam'],
				'PanjangBubble'=>$row['PanjangBubble'],
				'HrgBubble'=>$row['HrgBubble'],
				'BiayaBubble'=>$row['BiayaBubble'],
				'BeratPaper'=>$row['BeratPaper'],
				'HrgPaper'=>$row['HrgPaper'],
				'BiayaPaper'=>$row['BiayaPaper'],
				'PanjangFace'=>$row['PanjangFace'],
				'HrgFace'=>$row['HrgFace'],
				'BiayaFace'=>$row['BiayaFace'],
				'lbrStyrofoam'=>$row['lbrStyrofoam'],
				'HrgStyrofoam'=>$row['HrgStyrofoam'],
				'BiayaStrofoam'=>$row['BiayaStrofoam'],
				'JmlConer'=>$row['JmlConer'],
				'HrgConer'=>$row['HrgConer'],
				'BiayaConer'=>$row['BiayaConer'],
				'PanjangPlastik'=>$row['PanjangPlastik'],
				'HrgPlastik'=>$row['HrgPlastik'],
				'BiayaPlastik'=>$row['BiayaPlastik'],
				'ManPower'=>$row['ManPower'],
				'HrgTrucking'=>$row['HrgTrucking'],
				'CBMTrucking'=>$row['CBMTrucking'],
				'CBMItemTru'=>$row['CBMItemTru'],
				'BiayaTrucking'=>$row['BiayaTrucking'],
				'HrgContainer'=>$row['HrgContainer'],
				'CBMContainer'=>$row['CBMContainer'],
				'CBMItemCon'=>$row['CBMItemCon'],
				'BiayaContainer'=>$row['BiayaContainer'],
				'JmlISPN'=>$row['JmlISPN'],
				'HrgISPN'=>$row['HrgISPN'],
				'BiayaISPN'=>$row['BiayaISPN'],
				'JmlHook'=>$row['JmlHook'],
				'HrgHook'=>$row['HrgHook'],
				'BiayaHook'=>$row['BiayaHook'],
				'JmlRing'=>$row['JmlRing'],
				'HrgRing'=>$row['HrgRing'],
				'BiayaRing'=>$row['BiayaRing'],
				'JmlHanger'=>$row['JmlHanger'],
				'HrgHanger'=>$row['HrgHanger'],
				'BiayaHanger'=>$row['BiayaHanger'],
				'JmlKeyHole'=>$row['JmlKeyHole'],
				'HrgKeyHole'=>$row['HrgKeyHole'],
				'BiayaKeyHole'=>$row['BiayaKeyHole'],
				'SubTotal2'=>$row['SubTotal2'],
				'FOB1'=>$row['FOB1'],
				'FOB2'=>$row['FOB2'],
				'TolFOB'=>$row['TolFOB'],
				'OverHeadPersen'=>$row['OverHeadPersen'],
				'BiayaOverHead'=>$row['BiayaOverHead'],
				'SubTotalOverHead'=>$row['SubTotalOverHead'],
				'TAXPersen'=>$row['TAXPersen'],
				'BiayaTax'=>$row['BiayaTAX'],
				'Total'=>$row['Total'],
				'Devided'=>$row['Devided'],
				'USDPrice'=>$row['USDPrice'],
				'Quote'=>$row['Quote'],
				'biayaJasaOven'=>$row['biayaJasaOven']
			);
		}

		header('Access-Control-Allow-Origin: *');
		echo json_encode($output);
	}

	public function saveData(){
		$username = $this->input->post('username');
		//$photo='';

		// Kraf
		$kraf_cartonbox = $this->KSys->getWhere('kraf',array('id_kraf'=>$this->input->post('kraf_cartonbox')))->row_array();
		$kraf_floatingcartonbox = $this->KSys->getWhere('kraf',array('id_kraf'=>$this->input->post('kraf_floatingcartonbox')))->row_array();

		if(isset($_FILES['photo']['name'])){
			$cek_kode_gambar = $this->KSys->getWhere('qt',array('Kode'=>$this->input->post('code')))->result();
			// $id_gambar = 0;
			// foreach($cek_kode_gambar as $ckg){
			// 	$id_gambar = $ckg->Rev;
			// }

			//$config['file_name'] = strtoupper($this->input->post('code')).$id_gambar+1;
			$config['upload_path'] = './assets/photo_items';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp|jfif';
			$config['overwrite'] = true;

			//$this->load->library('upload', $config);

			// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
			$this->upload->initialize($config);

			if($this->upload->do_upload('photo')){
				$photo=$this->upload->data('file_name');
			}else{
				$photo=$this->input->post('photo_old');	
			}
		}else{
			//$photo=$this->input->post('photo_old');
			$photo=$this->input->post('photo_old');
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
			'BiayaLainStr1'=>strtoupper($this->input->post('strbiayalain1')),
			'BiayaLainNum1'=>$this->input->post('numbiayalain1'),
			'BiayaLainStr2'=>strtoupper($this->input->post('strbiayalain2')),
			'BiayaLainNum2'=>$this->input->post('numbiayalain2'),
			'BiayaLainStr3'=>strtoupper($this->input->post('strbiayalain3')),
			'BiayaLainNum3'=>$this->input->post('numbiayalain3'),
			'BiayaLainStr4'=>strtoupper($this->input->post('strbiayalain4')),
			'BiayaLainNum4'=>$this->input->post('numbiayalain4'),
			'BiayaLainStr5'=>strtoupper($this->input->post('strbiayalain5')),
			'BiayaLainNum5'=>$this->input->post('numbiayalain5'),
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
			'LbrBrownPaper'=>$this->input->post('brownpaper'),
			'HrgBrownPaper'=>$this->input->post('brownpaperprice'),
			'BiayaBrownPaper'=>$this->input->post('brownpapertotal'),
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
			'jmlSponati'=>$this->input->post('sponati1'),
			'hargaSponati'=>$this->input->post('sponati2'),
			'biayaSponati'=>$this->input->post('sponatires'),
			'jmlFisher'=>$this->input->post('fisher1'),
			'hargaFisher'=>$this->input->post('fisher2'),
			'biayaFisher'=>$this->input->post('fisherres'),
			'jmlScrew'=>$this->input->post('screw1'),
			'hargaScrew'=>$this->input->post('screw2'),
			'biayaScrew'=>$this->input->post('screwres'),
			'jmlKuncipas'=>$this->input->post('kuncipas1'),
			'hargaKuncipas'=>$this->input->post('kuncipas2'),
			'biayaKuncipas'=>$this->input->post('kuncipasres'),
			'jmlBabat'=>$this->input->post('babat1'),
			'hargaBabat'=>$this->input->post('babat2'),
			'biayaBabat'=>$this->input->post('babatres'),
			'jmlBabat_25'=>$this->input->post('babat125'),
			'hargaBabat_25'=>$this->input->post('babat225'),
			'biayaBabat_25'=>$this->input->post('babatres25'),
			'jmlBabat_5'=>$this->input->post('babat15'),
			'hargaBabat_5'=>$this->input->post('babat25'),
			'biayaBabat_5'=>$this->input->post('babatres5'),
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
			'BiayaTAX'=>$this->input->post('tax2'),
			'Total'=>$this->input->post('total'),
			'Devided'=>$this->input->post('devided'),
			'USDPrice'=>$this->input->post('usdprice'),
			'Quote'=>$this->input->post('quote'),
			'WaktuInput'=>date('Y-m-d H:i:s'),
			'UserInput'=>$username,//$this->session->userdata('username'),
			'LastUpdate'=>'-',
			'UserUpdate'=>'-',
			'catatan'=>$this->input->post('catatan'),
			'hargaJasaOven'=>$this->input->post('hrg_jasaoven'),
			'biayaJasaOven'=>$this->input->post('jasaoven'),
			'jmlGlides'=>$this->input->post('glides'),
  			'hargaGlides'=>$this->input->post('glidesharga'),
  			'biayaGlides'=>$this->input->post('glidestotal'),
  			'FloatingCartonP'=>$this->input->post('floatingcartonp'),
  			'FloatingCartonL'=>$this->input->post('floatingcartonl'),
  			'FloatingCartonT'=>$this->input->post('floatingcartont'),
  			'CBMFloatingCarton'=>$this->input->post('cbmfloatingcarton'),
  			'SubFloatingCarton'=>$this->input->post('subfloatingcarton'),
  			'HrgFloatingCarton'=>$this->input->post('hrgfloatingcarton'),
  			'BiayaFloatingCarton'=>$this->input->post('biayafloatingcarton'),
  			'kraf_cartonbox'=>$kraf_cartonbox['nama_kraf'],
  			'kraf_floatingbox'=>$kraf_floatingcartonbox['nama_kraf'],
  			'JmlCornerLuar'=>$this->input->post('cornerluar'),
  			'HrgCornerLuar'=>$this->input->post('cornerluarprice'),
  			'SubtotCornerLuar'=>$this->input->post('cornerluarres'),

  			'pembahanan_cleaning'=>$this->input->post('pembahanan_cleaning'),
  			'pembahanan_tenaga_cleaning'=>$this->input->post('pembahanan_tenaga_cleaning'),
  			'pembahanan_sikat'=>$this->input->post('pembahanan_sikat'),
  			'pembahanan_tenaga_sikat'=>$this->input->post('pembahanan_tenaga_sikat'),
  			'pembahanan_amplas40'=>$this->input->post('pembahanan_amplas40'),
  			'pembahanan_tenaga_amplas40'=>$this->input->post('pembahanan_tenaga_amplas40'),
  			'pembahanan_amplas80'=>$this->input->post('pembahanan_amplas80'),
  			'pembahanan_tenaga_amplas80'=>$this->input->post('pembahanan_tenaga_amplas80'),
  			'pembahanan_amplas180'=>$this->input->post('pembahanan_amplas180'),
  			'pembahanan_tenaga_amplas180'=>$this->input->post('pembahanan_tenaga_amplas180'),
  			'pembahanan_amplas400'=>$this->input->post('pembahanan_amplas400'),
  			'pembahanan_tenaga_amplas400'=>$this->input->post('pembahanan_tenaga_amplas400'),
  			'pembahanan_dowel'=>$this->input->post('pembahanan_dowel'),
  			'pembahanan_tenaga_dowel'=>$this->input->post('pembahanan_tenaga_dowel'),
  			'pembahanan_tenaga_pleting'=>$this->input->post('pembahanan_tenaga_pleting'),
  			'finishing_antigetah'=>$this->input->post('finishing_antigetah'),
  			'finishing_tenaga_antigetah'=>$this->input->post('finishing_tenaga_antigetah'),
  			'finishing_sandingsealer'=>$this->input->post('finishing_sandingsealer'),
  			'finishing_tenaga_sandingsealer'=>$this->input->post('finishing_tenaga_sandingsealer'),
  			'finishing_finishing'=>$this->input->post('finishing_finishing'),
  			'finishing_tenaga_finishing'=>$this->input->post('finishing_tenaga_finishing'),
  			'finishing_topcoat'=>$this->input->post('finishing_topcoat'),
  			'finishing_tenaga_topcoat'=>$this->input->post('finishing_tenaga_topcoat'),
  			'finishing_bleaching'=>$this->input->post('finishing_bleaching'),
  			'finishing_tenaga_bleaching'=>$this->input->post('finishing_tenaga_bleaching'),
  			'jmlSawteeth'=>$this->input->post('sawteeth_qty'),
  			'hrgSawteeth'=>$this->input->post('sawteeth_price'),
  			'biayaSawteeth'=>$this->input->post('sawteeth_total'),
  			'jmlBabat_250'=>$this->input->post('babat250_qty'),
  			'hrgBabat_250'=>$this->input->post('babat250_price'),
  			'biayaBabat_250'=>$this->input->post('babat250_total'),
  			'jmlBautjcbc'=>$this->input->post('bautjcbc_qty'),
  			'hrgBautjcbc'=>$this->input->post('bautjcbc_price'),
  			'totBautjcbc'=>$this->input->post('bautjcbc_total'),
  			'jmlNanasan'=>$this->input->post('nanasan_qty'),
  			'hrgNanasan'=>$this->input->post('nanasan_price'),
  			'totNanasan'=>$this->input->post('nanasan_total'),
  			'jmlKuncil'=>$this->input->post('kuncil_qty'),
  			'hrgKuncil'=>$this->input->post('kuncil_price'),
  			'totKuncil'=>$this->input->post('kuncil_total')
		);

		$cek=$this->KSys->getWhere('qt',array('Kode'=>$data['Kode']));

		if($data['Kode']!='' && $data['SubTotal1']!='' && $data['ManPower']!='' && $data['SubTotal1']!=0 && $data['SubTotal2']!=0 && $data['ManPower']!=0){

		if($cek->num_rows() > 0){
			/*$row=$cek->row_array();
			$w_upd=array('id'=>$row['id']);

			$this->KSys->updData('qt',$w_upd,$data);

			$response=array(
				'code'=>0,
				'message'=>'Data update!',
				'id'=>$row['id']
			);*/
			// $response=array(
			// 	'code'=>1,
			// 	'message'=>'Data sudah ada!'
			// 	//'id'=>$row['id']
			// );

			// Input data
			$response=$this->KSys->inputData('qt',$data);

			// Update rev dan status
			if($response['code'] == 0){
				// Update rev
				$countDataUpd = $cek->num_rows();
				$w_upd = array('id'=>$response['id']);
				$getdata_upd = $cek->result();
				$id_last = "";
				foreach($getdata_upd as $gdu){
					if($gdu->id != $response['id']){
						$id_last = $gdu->id;
					}
				}
				$lastid_data = $this->KSys->getWhere('qt',array('id'=>$id_last))->row_array();
				$d_upd = array('Rev'=>$lastid_data['Rev']+1);
				$this->KSys->updData('qt',$w_upd,$d_upd);
			}
		}else{
			$response=$this->KSys->inputData('qt',$data);
		}
		
		//$this->KSys->inputData('temp_qt',$data);
		//echo '<pre>';
		//print_r($data);
		//print_r($response);
		//echo '</pre>';
		}else{

			$response=array(
				'code'=>1,
				'message'=>'Data belum lengkap: '
			);

			if($data['Kode']=='') $response['message'].='Kode, ';
			if($data['SubTotal1']=='') $response['message'].='Sub Total 1, ';
			if($data['SubTotal2']=='') $response['message'].='Sub Total 2, ';
			if($data['ManPower']=='') $response['message'].='Man Power, ';
		}

		header('Access-Control-Allow-Origin: *');
		echo json_encode($response);
	}

	public function tempData(){
		$this->KSys->NullAktifTempQt();

		//$photo='';
		if(isset($_FILES['photo']['name'])){
			$config['file_name'] = strtoupper($this->input->post('code'));
			$config['upload_path'] = './assets/photo_items';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
			$config['overwrite'] = true;
			//$config['max_size']=5000;

			//$this->load->library('upload', $config);

			// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
			$this->upload->initialize($config);

			if($this->upload->do_upload("photo")){
				$photo=$this->upload->data('file_name');
			}else{
				$photo='';
			}
		}else{
			//$photo=$this->input->post('photo_old');
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
			'BiayaLainStr1'=>strtoupper($this->input->post('strbiayalain1')),
			'BiayaLainNum1'=>$this->input->post('numbiayalain1'),
			'BiayaLainStr2'=>strtoupper($this->input->post('strbiayalain2')),
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
			'LbrBrownPaper'=>$this->input->post('brownpaper'),
			'HrgBrownPaper'=>$this->input->post('brownpaperprice'),
			'BiayaBrownPaper'=>$this->input->post('brownpapertotal'),
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
			'jmlSponati'=>$this->input->post('sponati1'),
			'hargaSponati'=>$this->input->post('sponati2'),
			'biayaSponati'=>$this->input->post('sponatires'),
			'jmlFisher'=>$this->input->post('fisher1'),
			'hargaFisher'=>$this->input->post('fisher2'),
			'biayaFisher'=>$this->input->post('fisherres'),
			'jmlScrew'=>$this->input->post('screw1'),
			'hargaScrew'=>$this->input->post('screw2'),
			'biayaScrew'=>$this->input->post('screwres'),
			'jmlKuncipas'=>$this->input->post('kuncipas1'),
			'hargaKuncipas'=>$this->input->post('kuncipas2'),
			'biayaKuncipas'=>$this->input->post('kuncipasres'),
			'jmlBabat'=>$this->input->post('babat1'),
			'hargaBabat'=>$this->input->post('babat2'),
			'biayaBabat'=>$this->input->post('babatres'),
			'jmlBabat_25'=>$this->input->post('babat125'),
			'hargaBabat_25'=>$this->input->post('babat225'),
			'biayaBabat_25'=>$this->input->post('babatres25'),
			'jmlBabat_5'=>$this->input->post('babat15'),
			'hargaBabat_5'=>$this->input->post('babat25'),
			'biayaBabat_5'=>$this->input->post('babatres5'),
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
			'BiayaTAX'=>$this->input->post('tax2'),
			'Total'=>$this->input->post('total'),
			'Devided'=>$this->input->post('devided'),
			'USDPrice'=>$this->input->post('usdprice'),
			'Quote'=>$this->input->post('quote'),
			'WaktuInput'=>date('Y-m-d H:i:s'),
			'UserInput'=>$this->session->userdata('username'),
			'LastUpdate'=>date('Y-m-d H:i:s'),
			'UserUpdate'=>$this->session->userdata('username'),
			'catatan'=>$this->input->post('catatan'),
			'hargaJasaOven'=>$this->input->post('hrg_jasaoven'),
			'biayaJasaOven'=>$this->input->post('jasaoven'),
			'kraf_cartonbox'=>$kraf_cartonbox['nama_kraf'],
  			'kraf_floatingbox'=>$kraf_floatingcartonbox['nama_kraf'],
  			'JmlCornerLuar'=>$this->input->post('cornerluar'),
  			'HrgCornerLuar'=>$this->input->post('cornerluarprice'),
  			'SubtotCornerLuar'=>$this->input->post('cornerluarres'),

  			'pembahanan_cleaning'=>$this->input->post('pembahanan_cleaning'),
  			'pembahanan_tenaga_cleaning'=>$this->input->post('pembahanan_tenaga_cleaning'),
  			'pembahanan_sikat'=>$this->input->post('pembahanan_sikat'),
  			'pembahanan_tenaga_sikat'=>$this->input->post('pembahanan_tenaga_sikat'),
  			'pembahanan_amplas40'=>$this->input->post('pembahanan_amplas40'),
  			'pembahanan_tenaga_amplas40'=>$this->input->post('pembahanan_tenaga_amplas40'),
  			'pembahanan_amplas80'=>$this->input->post('pembahanan_amplas80'),
  			'pembahanan_tenaga_amplas80'=>$this->input->post('pembahanan_tenaga_amplas80'),
  			'pembahanan_amplas180'=>$this->input->post('pembahanan_amplas180'),
  			'pembahanan_tenaga_amplas180'=>$this->input->post('pembahanan_tenaga_amplas180'),
  			'pembahanan_amplas400'=>$this->input->post('pembahanan_amplas400'),
  			'pembahanan_tenaga_amplas400'=>$this->input->post('pembahanan_tenaga_amplas400'),
  			'pembahanan_dowel'=>$this->input->post('pembahanan_dowel'),
  			'pembahanan_tenaga_dowel'=>$this->input->post('pembahanan_tenaga_dowel'),
  			'pembahanan_tenaga_pleting'=>$this->input->post('pembahanan_tenaga_pleting'),
  			'finishing_antigetah'=>$this->input->post('finishing_antigetah'),
  			'finishing_tenaga_antigetah'=>$this->input->post('finishing_tenaga_antigetah'),
  			'finishing_sandingsealer'=>$this->input->post('finishing_sandingsealer'),
  			'finishing_tenaga_sandingsealer'=>$this->input->post('finishing_tenaga_sandingsealer'),
  			'finishing_finishing'=>$this->input->post('finishing_finishing'),
  			'finishing_tenaga_finishing'=>$this->input->post('finishing_tenaga_finishing'),
  			'finishing_topcoat'=>$this->input->post('finishing_topcoat'),
  			'finishing_tenaga_topcoat'=>$this->input->post('finishing_tenaga_topcoat'),
  			'finishing_bleaching'=>$this->input->post('finishing_bleaching'),
  			'finishing_tenaga_bleaching'=>$this->input->post('finishing_tenaga_bleaching'),
  			'jmlSawteeth'=>$this->input->post('sawteeth_qty'),
  			'hrgSawteeth'=>$this->input->post('sawteeth_price'),
  			'biayaSawteeth'=>$this->input->post('sawteeth_total'),
  			'jmlBabat_250'=>$this->input->post('babat250_qty'),
  			'hrgBabat_250'=>$this->input->post('babat250_price'),
  			'biayaBabat_250'=>$this->input->post('babat250_total')
		);

		if($data['ManPower']==null||$data['ManPower']==0){
			$respon=array(
				'code'=>1,
				'message'=>'Man Power tidak boleh kosong / 0!'
			);
		}else{
			$respon=$this->KSys->inputData('t_qt',$data);
		}

		header('Access-Control-Allow-Origin: *');
		echo json_encode($respon);
	}

	public function printTempData($id){
		$w=array('id'=>$id/*,'UserUpdate'=>$this->session->userdata('username')*/,'active'=>1);
		$data['q']=$this->KSys->getWhere('t_qt',$w)->row_array();
		//$data['q']=$this->KSys->getWhere('t_qt',$w)->result();
		$data['title']='QUOTATION '.$data['q']['Nama'].' ('.$data['q']['Kode'].')';
		$this->load->view('qt/print_tqt1_pdf',$data);

		// -----SIMPAN PDF DENGAN DOMPDF-----
	    // dapatkan output html  
	    $html = $this->output->get_output();
	        
	    // Load/panggil library dompdfnya
	    //$this->load->library('dompdf_gen');
	    $this->dompdf->set_paper("A4", "portrait");
	    
	    // Convert to PDF
	    $this->dompdf->load_html($html);
	    // $this->dompdf->load_Html_File(base_url().'application/view/index.html');
	    $this->dompdf->render();
	    // file_put_contents("/path/to/file.pdf", $output);

	    //utk menampilkan preview pdf
	    // $this->dompdf->stream("Packing_List-".$data['hasil'][0]->NoLPB."_".$tgl.".pdf",array('Attachment'=>0));
	    $this->dompdf->stream("Quotation_".$data['q']['Kode']."_".str_replace(" ", "_", $data['q']['Nama'])."_".$tgl.".pdf",array('Attachment'=>0));
	}

	public function updateData(){
		$id=$this->input->post('id');

		// Kraf
		$kraf_cartonbox = $this->KSys->getWhere('kraf',array('id_kraf'=>$this->input->post('kraf_cartonbox')))->row_array();
		$kraf_floatingcartonbox = $this->KSys->getWhere('kraf',array('id_kraf'=>$this->input->post('kraf_floatingcartonbox')))->row_array();

		$row=$this->KSys->getWhere('qt',array('id'=>$id))->row_array();
		if(isset($_FILES['photo']['name'])){
			$config['file_name'] = strtoupper($this->input->post('code'));
			$config['upload_path'] = './assets/photo_items/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['overwrite'] = true;
			//$config['max_size'] = 5000000;

			

			// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
			$this->upload->initialize($config);

			if($this->upload->do_upload('photo')){
				$foto=$this->upload->data();
				$photo=$foto["file_name"];
				/*$config['source_image']='./assets/photo_items/'.$photo;
				$config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '70%';
				$this->load->library('image_lib',$config);*/
			}else{
				//$photo=$this->upload->display_error();
				//echo '<script>alert("'.$this->upload->display_error().'");</script>';
				$photo=$row['Foto'];
			}
		}else{
			//$photo='';
			$photo=$row['Foto'];
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
			'BiayaLainStr1'=>strtoupper($this->input->post('strbiayalain1')),
			'BiayaLainNum1'=>$this->input->post('numbiayalain1'),
			'BiayaLainStr2'=>strtoupper($this->input->post('strbiayalain2')),
			'BiayaLainNum2'=>$this->input->post('numbiayalain2'),
			'BiayaLainStr3'=>strtoupper($this->input->post('strbiayalain3')),
			'BiayaLainNum3'=>$this->input->post('numbiayalain3'),
			'BiayaLainStr4'=>strtoupper($this->input->post('strbiayalain4')),
			'BiayaLainNum4'=>$this->input->post('numbiayalain4'),
			'BiayaLainStr5'=>strtoupper($this->input->post('strbiayalain5')),
			'BiayaLainNum5'=>$this->input->post('numbiayalain5'),
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
			'LbrBrownPaper'=>$this->input->post('brownpaper'),
			'HrgBrownPaper'=>$this->input->post('brownpaperprice'),
			'BiayaBrownPaper'=>$this->input->post('brownpapertotal'),
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
			'jmlSponati'=>$this->input->post('sponati1'),
			'hargaSponati'=>$this->input->post('sponati2'),
			'biayaSponati'=>$this->input->post('sponatires'),
			'jmlFisher'=>$this->input->post('fisher1'),
			'hargaFisher'=>$this->input->post('fisher2'),
			'biayaFisher'=>$this->input->post('fisherres'),
			'jmlScrew'=>$this->input->post('screw1'),
			'hargaScrew'=>$this->input->post('screw2'),
			'biayaScrew'=>$this->input->post('screwres'),
			'jmlKuncipas'=>$this->input->post('kuncipas1'),
			'hargaKuncipas'=>$this->input->post('kuncipas2'),
			'biayaKuncipas'=>$this->input->post('kuncipasres'),
			'jmlBabat'=>$this->input->post('babat1'),
			'hargaBabat'=>$this->input->post('babat2'),
			'biayaBabat'=>$this->input->post('babatres'),
			'jmlBabat_25'=>$this->input->post('babat125'),
			'hargaBabat_25'=>$this->input->post('babat225'),
			'biayaBabat_25'=>$this->input->post('babatres25'),
			'jmlBabat_5'=>$this->input->post('babat15'),
			'hargaBabat_5'=>$this->input->post('babat25'),
			'biayaBabat_5'=>$this->input->post('babatres5'),
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
			'BiayaTAX'=>$this->input->post('tax2'),
			'Total'=>$this->input->post('total'),
			'Devided'=>$this->input->post('devided'),
			'USDPrice'=>$this->input->post('usdprice'),
			'Quote'=>$this->input->post('quote'),
			//'WaktuInput'=>date('Y-m-d H:i:s'),
			//'UserInput'=>$this->session->userdata('username'),
			'LastUpdate'=>date('Y-m-d H:i:s'),
			'UserUpdate'=>$this->session->userdata('username'),
			'catatan'=>$this->input->post('catatan'),
			'hargaJasaOven'=>$this->input->post('hrg_jasaoven'),
			'biayaJasaOven'=>$this->input->post('jasaoven'),
			'jmlGlides'=>$this->input->post('glides'),
  			'hargaGlides'=>$this->input->post('glidesharga'),
  			'biayaGlides'=>$this->input->post('glidestotal'),
  			'FloatingCartonP'=>$this->input->post('floatingcartonp'),
  			'FloatingCartonL'=>$this->input->post('floatingcartonl'),
  			'FloatingCartonT'=>$this->input->post('floatingcartont'),
  			'CBMFloatingCarton'=>$this->input->post('cbmfloatingcarton'),
  			'SubFloatingCarton'=>$this->input->post('subfloatingcarton'),
  			'HrgFloatingCarton'=>$this->input->post('hrgfloatingcarton'),
  			'BiayaFloatingCarton'=>$this->input->post('biayafloatingcarton'),
  			'kraf_cartonbox'=>$kraf_cartonbox['nama_kraf'],
  			'kraf_floatingbox'=>$kraf_floatingcartonbox['nama_kraf'],
  			'JmlCornerLuar'=>$this->input->post('cornerluar'),
  			'HrgCornerLuar'=>$this->input->post('cornerluarprice'),
  			'SubtotCornerLuar'=>$this->input->post('cornerluarres'),

  			'pembahanan_cleaning'=>$this->input->post('pembahanan_cleaning'),
  			'pembahanan_tenaga_cleaning'=>$this->input->post('pembahanan_tenaga_cleaning'),
  			'pembahanan_sikat'=>$this->input->post('pembahanan_sikat'),
  			'pembahanan_tenaga_sikat'=>$this->input->post('pembahanan_tenaga_sikat'),
  			'pembahanan_amplas40'=>$this->input->post('pembahanan_amplas40'),
  			'pembahanan_tenaga_amplas40'=>$this->input->post('pembahanan_tenaga_amplas40'),
  			'pembahanan_amplas80'=>$this->input->post('pembahanan_amplas80'),
  			'pembahanan_tenaga_amplas80'=>$this->input->post('pembahanan_tenaga_amplas80'),
  			'pembahanan_amplas180'=>$this->input->post('pembahanan_amplas180'),
  			'pembahanan_tenaga_amplas180'=>$this->input->post('pembahanan_tenaga_amplas180'),
  			'pembahanan_amplas400'=>$this->input->post('pembahanan_amplas400'),
  			'pembahanan_tenaga_amplas400'=>$this->input->post('pembahanan_tenaga_amplas400'),
  			'pembahanan_dowel'=>$this->input->post('pembahanan_dowel'),
  			'pembahanan_tenaga_dowel'=>$this->input->post('pembahanan_tenaga_dowel'),
  			'pembahanan_tenaga_pleting'=>$this->input->post('pembahanan_tenaga_pleting'),
  			'finishing_antigetah'=>$this->input->post('finishing_antigetah'),
  			'finishing_tenaga_antigetah'=>$this->input->post('finishing_tenaga_antigetah'),
  			'finishing_sandingsealer'=>$this->input->post('finishing_sandingsealer'),
  			'finishing_tenaga_sandingsealer'=>$this->input->post('finishing_tenaga_sandingsealer'),
  			'finishing_finishing'=>$this->input->post('finishing_finishing'),
  			'finishing_tenaga_finishing'=>$this->input->post('finishing_tenaga_finishing'),
  			'finishing_topcoat'=>$this->input->post('finishing_topcoat'),
  			'finishing_tenaga_topcoat'=>$this->input->post('finishing_tenaga_topcoat'),
  			'finishing_bleaching'=>$this->input->post('finishing_bleaching'),
  			'finishing_tenaga_bleaching'=>$this->input->post('finishing_tenaga_bleaching'),
  			'jmlSawteeth'=>$this->input->post('sawteeth_qty'),
  			'hrgSawteeth'=>$this->input->post('sawteeth_price'),
  			'biayaSawteeth'=>$this->input->post('sawteeth_total'),
  			'jmlBabat_250'=>$this->input->post('babat250_qty'),
  			'hrgBabat_250'=>$this->input->post('babat250_price'),
  			'biayaBabat_250'=>$this->input->post('babat250_total')
		);

		//echo '<pre>';
		//print_r($data);
		//echo '</pre>';

		$cek=$this->KSys->getWhere('qt',array('Kode'=>$data['Kode']));

		if($data['Kode']!='' && $data['SubTotal1']!='' && $data['ManPower']!='' && $data['SubTotal1']!=0 && $data['SubTotal2']!=0 && $data['ManPower']!=0 && $data['BiayaTrucking']!=0 && $data['BiayaContainer']!=0){

		$response=$this->KSys->updData('qt',array('id'=>$id),$data);
		$response['id'].=$id;
		//$this->KSys->inputData('temp_qt',$data);
		//echo '<pre>';
		//print_r($data);
		//print_r($response);
		//echo '</pre>';
		}else{

			$response=array(
				'code'=>1,
				'message'=>'Data belum lengkap: '
			);

			if($data['Kode']=='') $response['message'].='Kode, ';
			if($data['SubTotal1']=='') $response['message'].='Sub Total 1, ';
			if($data['SubTotal2']=='') $response['message'].='Sub Total 2, ';
			if($data['ManPower']=='') $response['message'].='Man Power, ';
			if($data['BiayaTrucking']=='' || $data['BiayaTrucking']==0) $response['message'].='Biaya Trucking, ';
			if($data['BiayaContainer']=='' || $data['BiayaContainer']==0) $response['message'].='Biaya Container, ';
		}

		header('Access-Control-Allow-Origin: *');
		echo json_encode($response);
	}

	public function listQt(){
		$draw=intval($this->input->post('draw'));
		$length=intval($this->input->post('length'));
		$start=intval($this->input->post('start'));

		//$list=$this->KSys->SelectAll('qt','id','desc');
		$list=$this->KSys->dataQt();
		$data=array();
		$no=$this->input->post('start');
		foreach($list->result() as $dt){
			$no++;
			$row=array();
			$row[]=$no;
			//$row[]='<a href="'.site_url('detailQt').'/'.$dt->id.'" target="_blank">'.$dt->Kode.'</a>';
			$rev = "";
			if($dt->Rev > 0){
				$rev = "REV".$dt->Rev;
			}

			$dql = $this->KSys->dataQtLast($dt->Kode)->row_array();
			$rev = '';
			if($dql['Rev'] > 0){$rev = '-(REV'.$dql['Rev'].')';}

			$row[]=$dql['Kode'].$rev;
			$row[]=strtoupper($dql['Nama']);

			$btn='<div class="input-group-btn">';
			//$btn.='<a class="btn btn-primary btn-sm" href="'.site_url('printQt').'/'.$dt->id.'" target="__blank"><i class="fa fa-print"></i></a>';

			if($this->session->userdata('level')=='1'){
				//$btn.=' <a class="btn btn-warning btn-sm" href="'.site_url('detailQt').'/'.$dt->id.'" title="Detail"><i class="fa fa-eye"></i></a>';
				$btn.=' <a class="btn btn-warning btn-sm" href="'.site_url('detailQtKode').'/'.$dql['Kode'].'" title="Detail '.$dql['Kode'].'"><i class="fa fa-eye"></i></a>';
				//$btn.=' <a class="btn btn-warning btn-sm" href="'.site_url('updateQt').'/'.$dt->id.'"><i class="fa fa-edit"></i></a>';
				//$btn.=' <button class="btn btn-danger btn-sm" onclick="preDelData('.$dt->id.');"><i class="fa fa-trash"></i></button>';
			}

			if($this->session->userdata('level')=='2'){
				$btn.=' <a class="btn btn-warning btn-sm" href="'.site_url('detailQtKode').'/'.$dql['Kode'].'" title="Detail '.$dql['Kode'].'"><i class="fa fa-eye"></i></a>';
				//$btn.=' <a class="btn btn-warning btn-sm" href="'.site_url('updateQt').'/'.$dt->id.'"><i class="fa fa-edit"></i></a>';
			}
			$btn.='</div>';
			
			if($dt->Foto!=''){
				$row[]='<div class="text-center"><a href="'.base_url().'assets/photo_items/'.$dql['Foto'].'" target="__blank"><img class="img-thumbnail" src="'.base_url().'assets/photo_items/'.$dql['Foto'].'" style="width:100px;" /></a></div>';
			}else{
				$row[]='<div class="text-center"><img class="img-thumbnail" src="'.base_url().'assets/photo_items/null.png" style="width:100px;height:90px;" /></div>';
			}

			if($dql['CBMCarton'] > $dql['CrateCBM']){
				$row[]=$dql['CBMCarton'].' CM';
			}else{
				if($dql['CrateCBM'] > $dql['CBMTot']){
					$row[]=$dql['CrateCBM'].' CM';
				}else{
					$row[]=$dql['CBMTot'].' CM';
				}
			}
			
			$row[]='<i class="fa fa-usd"></i>&nbsp;'.number_format($dql['USDPrice'],2,',','.');
			$row[]='<i class="fa fa-usd"></i>&nbsp;'.number_format($dql['Quote'],2,',','.');
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

	public function listQt1(){
		$draw=intval($this->input->post('draw'));
		$length=intval($this->input->post('length'));
		$start=intval($this->input->post('start'));

		$list=$this->KSys->SelectAll('t_qt','id','desc');
		$data=array();
		$no=$this->input->post('start');
		foreach($list->result() as $dt){
			$no++;
			$row=array();
			$row[]=$no;
			//$row[]='<a href="'.site_url('detailQt').'/'.$dt->id.'" target="_blank">'.$dt->Kode.'</a>';
			$row[]=$dt->Kode;
			$row[]=strtoupper($dt->Nama).'<br>';


			$level=$this->session->userdata('level');
			$btn='';
			switch ($level) {
				# code...
				case '1':
					$btn.='<a class="btn btn-primary btn-sm" href="'.site_url('printOnlyQtPrint').'/'.$dt->id.'" target="__blank"><i class="fa fa-print"></i></a>';
					//$btn.='<a class="btn btn-primary btn-sm" href="'.site_url('updateQt').'/'.$dt->id.'" target="__blank"><i class="fa fa-edit"></i></a>';
					break;

				case '2':
					# code...
					$btn.='<a class="btn btn-primary btn-sm" href="'.site_url('printOnlyQtPrint').'/'.$dt->id.'" target="__blank"><i class="fa fa-print"></i></a>';
					//$btn.='<a class="btn btn-primary btn-sm" href="'.site_url('updateQt').'/'.$dt->id.'" target="__blank"><i class="fa fa-edit"></i></a>';
					break;
				
				case '3':
					# code...
					$btn.='<a class="btn btn-primary btn-sm" href="'.site_url('printOnlyQtPrint').'/'.$dt->id.'" target="__blank"><i class="fa fa-print"></i></a>';
					break;
			}

			/*if($this->session->userdata('level')=='1'){
				$btn.='&nbsp;<a class="btn btn-warning btn-sm" href="'.site_url('updateQt').'/'.$dt->id.'"><i class="fa fa-edit"></i></a>';
				$btn.='&nbsp;<button class="btn btn-danger btn-sm" onclick="preDelData('.$dt->id.');"><i class="fa fa-trash"></i></button>';
			}*/
			
			if($dt->Foto!=''){
				$row[]='<div class="text-center"><a href="'.base_url().'assets/photo_items/'.$dt->Foto.'" target="__blank"><img class="img-thumbnail" src="'.base_url().'assets/photo_items/'.$dt->Foto.'" style="width:100px;height:90px;" /></a></div>';
			}else{
				$row[]='<div class="text-center"><img class="img-thumbnail" src="'.base_url().'assets/photo_items/null.png" style="width:100px;height:90px;" /></div>';
			}

			if($dt->CBMCarton > $dt->CrateCBM){
				$row[]=$dt->CBMCarton.' CM';
			}else{
				$row[]=$dt->CrateCBM.' CM';
			}
			
			$row[]='<i class="fa fa-usd"></i>&nbsp;'.number_format($dt->Quote,2,',','.');
			$row[]=$dt->UserInput.'<br>('.$dt->WaktuInput.')';
			$row[]=$dt->UserUpdate.'<br>('.$dt->LastUpdate.')';
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

	public function detailQt($id){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$w=array('id'=>$id);
		$data['q'] = $this->KSys->getWhere('qt',$w)->row_array();
		$data['id'] = $w['id'];
		$this->template->Display('qt/detail_qt',$data);
	}

	public function detailQtKode($kode){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$w=array('Kode'=>$kode);
		//$data['q'] = $this->KSys->getWhere('qt',$w)->row_array();
		$data['qt'] = $this->KSys->findKode($kode)->result_array();
		$data['kode'] = $w['Kode'];
		//$data['id'] = $w['id'];
		$this->template->Display('qt/detail_qt_kode',$data);
	}

	public function printQt($id){
		$w=array('id'=>$id);
		$data['q']=$this->KSys->getWhere('qt',$w)->row_array();
		//$data['q']=$this->KSys->getWhere('qt',$w)->result();
		$rev = "";
		if($data['q']['Rev'] > 0){
			$rev = "REV".$data['q']['Rev'];
		}
		$data['title']='QUOTATION '.$data['q']['Nama'].' ('.$data['q']['Kode'].$rev.')';
		$data['rev'] = $rev;
		$this->load->view('qt/print_qt1_pdf',$data);
		// -----SIMPAN PDF DENGAN DOMPDF-----
	    // dapatkan output html  
	    $html = $this->output->get_output();
	        
	    // Load/panggil library dompdfnya
	    //$this->load->library('dompdf_gen');
	    $this->dompdf->set_paper("A4", "portrait");
	    
	    // Convert to PDF
	    $this->dompdf->load_html($html);
	    // $this->dompdf->load_Html_File(base_url().'application/view/index.html');

	    $this->dompdf->render();
	    // file_put_contents("/path/to/file.pdf", $output);

	    // Tambah nomor halaman
	    $canvas = $this->dompdf->get_canvas(); 
		$font = Font_Metrics::get_font("helvetica", "bold"); 
		// $x = 490;
  //       $y = 10;
		$text = $data['title']." {PAGE_NUM} of {PAGE_COUNT}";
        $font = Font_Metrics::get_font("helvetica", "bold");
        $size = 9;
		$y = $canvas->get_height() - 20;
        $x = $canvas->get_width() + 90 - Font_Metrics::get_text_width($text, $font, $size);
        $color = array(0,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
		$canvas->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle); 

	    //utk menampilkan preview pdf
	    // $this->dompdf->stream("Packing_List-".$data['hasil'][0]->NoLPB."_".$tgl.".pdf",array('Attachment'=>0));
	    $this->dompdf->stream("Quotation_".$data['q']['Kode']."_".str_replace(" ", "_", $data['q']['Nama'])."_".$tgl.".pdf",array('Attachment'=>0));
	}

	public function updateQt($id){
		if($this->session->userdata('status')!='login'){
			redirect('welcome');
		}

		$w=array('id'=>$id);
		$data['dd']=$this->KSys->getWhere('qt',$w)->row_array();
		$data['d']=$this->KSys->getWhere('mstharga',array('Aktif'=>'1'))->row_array();
		$data['kraf'] = $this->KSys->SelectAll('kraf','id_kraf','asc')->result();
		$this->template->Display('qt/update_qt',$data);
	}

	public function deleteQt($id){
		$w=array('id'=>$id);
		$this->KSys->delData($w,'qt');
		echo 'Data berhasil dihapus.';
	}

	public function kursBCA(){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, 'http://www.adisurya.net/kurs-bca/get?MataUang=USD');
		$kurs_bca = curl_exec($ch);
		curl_close($ch);
		echo $kurs_bca;
	}

}