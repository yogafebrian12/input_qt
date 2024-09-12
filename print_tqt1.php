<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quotation Print</title>
<!--Icon-->
<link rel="shortcut icon" href="<?php echo base_url();?>assets/icon/lb.jpg" />
<!--Bootstrap-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plugin/bootstrap/dist/css/bootstrap.min.css">
<!--Font Awesome-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plugin/font-awesome/css/font-awesome.min.css">
<!--QT PRINT CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/qt.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/qt_print.css">
<style type="text/css">

</style>
<!--File input CSS
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plugin/fileinput/css/fileinput.min.css">-->
<!--JQuery-->
<script type="text/javascript" src="<?php echo base_url();?>plugin/jquery/dist/jquery-3.3.1.min.js"></script>
<!--Bootstrap JS-->
<script type="text/javascript" src="<?php echo base_url();?>plugin/bootstrap/dist/js/bootstrap.min.js"></script>
<!--FIle input JS-->
<script type="text/javascript" src="<?php echo base_url();?>plugin/fileinput/js/fileinput.min.js"></script>
</head>

<body>
<!--Navbar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
      	<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="nav">
    <ul class="nav navbar-nav">
    	<li><a href="javascript:close_window();" id="btnback"><i class="glyphicon glyphicon-remove-sign"></i> Close</a></li>
    	<li><a id="btnprint" href="#"><i class="glyphicon glyphicon-print"></i> Print</a></li>
      <!--<li class="active"><a href="#">Home</a></li>-->
      <!--<li class="dropdown">
      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Input      	 <span class="caret"></span></a>
      	<ul class="dropdown-menu">
      		<li><a href="input_default_harga">Input setup default harga</a></li>
      		<li class="active"><a href="input_quotation">Input quotation</a></li>
      		<li><a href="logout">Exit & Sign Out</a></li>
      	</ul>
      </li>
      <li><a href="tbl_qt">List</a></li>-->
      <!--<li><a href="#">Page 3</a></li>-->
    </ul>
	</div>
  </div>
</nav>
<!--Navbar-->

<div class="container" id="printarea">
<div class="row">
<div class="col-md-12">

<div class="col-xs-6">
<table class="table table-bordered" style="font-size: 10px;">
	<tr>
		<td colspan="3" class="text-center">
		<?php if($q['Foto']==null):?>
			<img src="<?= base_url();?>assets/photo_items/null.png" class="img-thumbnail" style="width:100px;" />
		<?php else:?>
			<img src="<?= base_url();?>assets/photo_items/<?= $q['Foto'];?>" class="img-thumbnail" style="width:300px;" />
		<?php endif;?>
		</td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">CODE</label></td>
		<td>= <?= $q['Kode'];?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">NAME</label></td>
		<td>= <?= $q['Nama'];?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">SIZE L</label></td>
		<td>= <?= $q['DimP'];?> &times; <?= $q['DimL'];?> &times; <?= $q['DimT'];?> CM = <?= $q['CBMDim'];?> CBM</td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">SIZE M</label></td>
		<td>= <?= $q['DimP'];?> &times; <?= $q['DimL_M'];?> &times; <?= $q['DimT_M'];?> CM = <?= $q['CBMDim_M'];?> CBM</td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">SIZE S</label></td>
		<td>= <?= $q['DimP_S'];?> &times; <?= $q['DimL_S'];?> &times; <?= $q['DimT_S'];?> CM = <?= $q['CBMDim_S'];?> CBM</td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">WEIGHT</label></td>
		<td>= <?= $q['Weight'];?> KG</td>
	</tr>
</table>
</div>

<div class="col-xs-6">
<table class="table table-bordered" style="font-size: 10px;">
	<tr>
		<td class="text-right"><label class="text-uppercase">SP PRICE</label></td>
		<td>= RP <?= number_format($q['SPPrice'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Fin / Cleen / Send</label></td>
		<td>= RP <?= number_format($q['Finishing'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Glass</label></td>
		<td>= RP <?= number_format($q['Glass'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Mirror</label></td>
		<td>= RP <?= number_format($q['Mirror'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Metal</label></td>
		<td>= RP <?= number_format($q['Metal'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Brass</label></td>
		<td>= RP <?= number_format($q['Brass'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Aluminium</label></td>
		<td>= RP <?= number_format($q['Aluminium'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Candle</label></td>
		<td>= RP <?= number_format($q['Candle'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Stone</label></td>
		<td>= RP <?= number_format($q['Stone'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Base</label></td>
		<td>= RP <?= number_format($q['Base'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Backing</label></td>
		<td>= RP <?= number_format($q['Backing'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase"><?= $q['BiayaLainStr1'];?></label></td>
		<td>= RP <?= number_format($q['BiayaLainNum1'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase"><?= $q['BiayaLainStr2'];?></label></td>
		<td>= RP <?= number_format($q['BiayaLainNum2'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Sub Total 1</label></td>
		<td>= RP <?= number_format($q['SubTotal1'],2,',','.');?></td>
	</tr>
</table>
</div>

</div>

<div class="col-md-12">

<table class="table table-bordered" style="font-size: 10px;">
	<tr>
		<td colspan="9" style="font-size: 12px;"><b>PACKING</b></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Foam Sheet</label></td>
		<td><?= $q['PanjangFoam'];?> MTR &times; RP.<?= number_format($q['HrgFoam'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaFoam'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">Truck. Cost</label></td>
		<td>(RP.<?= number_format($q['HrgTrucking'],2,',','.');?> <b>/</b> <?= $q['CBMTrucking'];?>) &times; <?= $q['CBMTot'];?></td>
		<td>= RP.<?= number_format($q['BiayaTrucking'],2,',','.');?></td>
		<td colspan="2" class="text-right"><label class="text-uppercase">Sub Total Over Head</label></td>
		<td>= RP.<?= number_format($q['SubTotalOverHead'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Bubble Sheet</label></td>
		<td><?= $q['PanjangBubble'];?> MTR &times; RP.<?= number_format($q['HrgBubble'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaBubble'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">Cont. Cost</label></td>
		<td>(RP.<?= number_format($q['HrgContainer'],2,',','.');?> <b>/</b> <?= $q['CBMContainer'];?>) &times; <?= $q['CBMItemCon'];?></td>
		<td>= RP.<?= number_format($q['BiayaContainer'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">Tax</label></td>
		<td><?= number_format($q['TAXPersen'],0);?> %</td>
		<td>= RP.<?= number_format($q['BiayaTAX'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Shredded Paper</label></td>
		<td><?= $q['BeratPaper'];?> KG &times; RP.<?= number_format($q['HrgPaper'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaPaper'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">ISPN</label></td>
		<td><?= $q['JmlISPN'];?> &times; RP.<?= number_format($q['HrgISPN'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaISPN'],2,',','.');?></td>
		<td colspan="2" class="text-right"><label class="text-uppercase">Total</label></td>
		<td>= RP.<?= number_format($q['Total'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Single Face</label></td>
		<td><?= $q['PanjangFace'];?> MTR &times; RP.<?= number_format($q['HrgFace'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaFace'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">Spon Ati</label></td>
		<td><?= $q['jmlSponati'];?> &times; RP.<?= number_format($q['hargaSponati'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['biayaSponati'],2,',','.');?></td>
		<td colspan="2" class="text-right"><label class="text-uppercase">Devided</label></td>
		<td>= RP.<?= number_format($q['Devided'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Plastic</label></td>
		<td><?= $q['PanjangPlastik'];?> MTR &times; RP.<?= number_format($q['HrgPlastik'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaPlastik'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">Fisher</label></td>
		<td><?= $q['jmlFisher'];?> &times; RP.<?= number_format($q['hargaFisher'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['biayaFisher'],2,',','.');?></td>
		<td colspan="2" class="text-right"><label class="text-uppercase">USD Price</label></td>
		<td>= $ <?= number_format($q['USDPrice'],2);?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Moulding Foam Size</label></td>
		<td><?= $q['MoldingP'];?> &times; <?= $q['MoldingL'];?> &times; <?= $q['MoldingT'];?> CM = <?= $q['MoldingCBM'];?> CBM</td>
		<td></td>
		<td class="text-right"><label class="text-uppercase">Screw</label></td>
		<td><?= $q['jmlFisher'];?> &times; RP.<?= number_format($q['hargaFisher'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['biayaFisher'],2,',','.');?></td>
		<td colspan="2" class="text-right"><label class="text-uppercase">Quote</label></td>
		<td>= $ <?= number_format($q['Quote'],2,'.',',');?></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Moulding Foam Price</label></td>
		<td><?= $q['MoldingCBM'];?> CBM &times; RP.<?= number_format($q['HrgMolding'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaModing'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">Kunci Pas</label></td>
		<td><?= $q['jmlKuncipas'];?> &times; RP.<?= number_format($q['hargaKuncipas'],2,',','.');?></td>
		<td>= RP. <?= number_format($q['biayaKuncipas'],2,',','.');?></td>
		<td colspan="3"></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Inner Box Price</label></td>
		<td></td>
		<td>= RP.<?= number_format($q['BiayaInnerBox'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">Babat</label></td>
		<td><?= $q['jmlBabat'];?> &times; RP.<?= number_format($q['hargaBabat'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['biayaBabat'],2,',','.');?></td>
		<td colspan="3"></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Styrofoam</label></td>
		<td><?= $q['lbrStyrofoam'];?> LBR &times; RP.<?= number_format($q['HrgStyrofoam'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaStrofoam'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">J.Hook</label></td>
		<td><?= $q['JmlHook'];?> &times; RP.<?= number_format($q['HrgHook'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaHook'],2,',','.');?></td>
		<td colspan="3"></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Corner</label></td>
		<td><?= $q['JmlConer'];?> PCS &times; RP.<?= number_format($q['HrgConer'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaConer'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">Ring</label></td>
		<td><?= $q['JmlRing'];?> &times; RP.<?= number_format($q['HrgRing'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaRing'],2,',','.');?></td>
		<td colspan="3"></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Ctn. box size</label></td>
		<td><?= $q['CartonP'];?> &times; <?= $q['CartonL'];?> &times; <?= $q['CartonT'];?>&nbsp;=&nbsp;<?= $q['CBMCarton'];?> CBM</td>
		<td></td>
		<td class="text-right"><label class="text-uppercase">Hanger</label></td>
		<td><?= $q['JmlHanger'];?> &times; RP.<?= number_format($q['HrgHanger'],2,',','.');?></td>
		<td>= RP. <?= number_format($q['BiayaHanger'],2,',','.');?></td>
		<td colspan="3"></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Ctn. box price</label></td>
		<td><?= $q['SubCarton'];?> &times; RP.<?= number_format($q['HrgCarton'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaCarton'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">Key Hole</label></td>
		<td><?= $q['JmlKeyHole'];?> &times; RP.<?= number_format($q['HrgKeyHole'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaKeyHole'],2,',','.');?></td>
		<td colspan="3"></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Crate Size</label></td>
		<td><?= $q['CrateP'];?> &times; <?= $q['CrateL'];?> &times; <?= $q['CrateT'];?>&nbsp;=&nbsp;<?php echo $q['CrateCBM'];?> CBM</td>
		<td></td>
		<td colspan="2" class="text-right"><label class="text-uppercase">Sub Total</label></td>
		<td>= RP.<?= number_format($q['SubTotal2'],2,',','.');?></td>
		<td colspan="3"></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Crate price</label></td>
		<td><?= $q['JmlPapan'];?> &times; RP.<?= number_format($q['HrgPapan'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['BiayaCrate'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">FOB Price</label></td>
		<td>RP.<?= number_format($q['FOB1'],2,',','.');?> + RP. <?= number_format($q['FOB2'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['TolFOB'],2,',','.');?></td>
		<td colspan="3"></td>
	</tr>
	<tr>
		<td class="text-right"><label class="text-uppercase">Man Power</label></td>
		<td></td>
		<td>= RP.<?= number_format($q['ManPower'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">Over Head</label></td>
		<td><?= number_format($q['OverHeadPersen'],0);?> %</td>
		<td>= RP.<?= number_format($q['BiayaOverHead'],2,',','.');?></td>
		<td colspan="3"></td>
	</tr>
</table>

</div>

</div>
</div>

<script type="text/javascript">
function close_window() {
  if (confirm("Are you sure to leave this page ?")) {
    close();
    location.href="<?= site_url('main');?>";
  }
}

function printAction(id){
	var div=$(id).html();
	var print=window.open('');
  	print.document.write('<html>');
  	print.document.write('<head>');
  	print.document.write('<title>Quotation</title>');
  	//print.document.write('<link rel="icon" href="<?php echo base_url();?>img/AP.png">');
  	print.document.write('<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/qt.css">');
  	print.document.write('<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plugin/bootstrap/dist/css/bootstrap.min.css">');
  	print.document.write('<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plugin/font-awesome/css/font-awesome.min.css">');
  	//print.document.write('<div id="icon"><span><img src="<?php echo base_url();?>img/AP.png" style="margin-top:2px;margin-left:2px;width:50px;height:auto;background-color:#FFFFFF;"></img></span><span><img src="<?php echo base_url();?>img/apcust.png" style="margin-left:5px;width:200px;height:auto;></img></span></div>');
  	print.document.write('</head><body>');
  	print.document.write(div);
  	print.document.write('</body></html>');
  	print.document.close();
  	print.onload=function(){
    	print.focus();
    	print.print();
    	print.close();
  	}
}

/*function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}*/

$('#printarea').ready(function(){
	printAction('#printarea');
});

$('#btnprint').click(function(){
	printAction('#printarea');
});

$(document).ready(function(){
	printAction('#printarea');
});
</script>
</body>
</html>