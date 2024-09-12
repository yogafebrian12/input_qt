<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Detail Quotation</title>
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
/* style sheet for “letter” printing */
@media print and (width: 5.83in) and (height: 8.27in) {
 	@page {
 		margin: 1in !important;
 	}
}
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
    	<!--<li><a id="btnprint" href="#"><i class="glyphicon glyphicon-print"></i> Print</a></li>-->
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

<!--Main-->
<div class="container-fluid">
	<div id="printarea">
	<?php foreach($q as $prt):?>
	<div class="row">
	<div class="col-lg-12">
		<!--LEFT-->
		<div class="col-xs-6">
			<div class="row">
			<div class="col-lg-12">
				<!--<div class="col-xs-6">-->
				<?php if($prt->Foto!=''):?>
				<a href="<?php echo base_url();?>assets/photo_items/<?php echo $prt->Foto;?>" target="_blank"><img class="img-thumbnail" src="<?php echo base_url();?>assets/photo_items/<?php echo $prt->Foto;?>" style="width:250px;height:150px;" /></a>
				<?php else:?>
				<a href="<?php echo base_url();?>assets/photo_items/<?php echo $prt->Foto;?>" target="_blank"><img class="img-thumbnail" src="<?php echo base_url();?>assets/photo_items/null.png" style="width:300px;height:200px;" /></a>
				<?php endif;?>
				<!--</div>-->
			</div>
			</div>
			<div class="row">
			<div class="col-lg-12">
				<div class="col-md-4">
					<label class="text-uppercase small">Code</label>
				</div>
				<div class="col-md-8">
					<p class="small"><?php echo $prt->Kode;?></p>
				</div>	
			</div>
			</div>

			<div class="row">
			<div class="col-lg-12">
				<div class="col-md-4">
					<label class="text-uppercase small">Name</label>
				</div>
				<div class="col-md-8">
					<p class="text-uppercase small"><?php echo $prt->Nama;?></p>
				</div>	
			</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Size L</label>
					</div>
					<div class="col-md-8">
						<p class="small"><?php echo $prt->DimP;?> <i class="fa fa-times"></i> <?php echo $prt->DimL;?> <i class="fa fa-times"></i> <?php echo $prt->DimT;?> CM </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Size M</label>
					</div>
					<div class="col-md-8">
						<p class="small"><?php echo $prt->DimP_M;?> <i class="fa fa-times"></i> <?php echo $prt->DimL_M;?> <i class="fa fa-times"></i> <?php echo $prt->DimT_M;?> CM </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Size S</label>
					</div>
					<div class="col-md-8">
						<p class="small"><?php echo $prt->DimP_S;?> <i class="fa fa-times"></i> <?php echo $prt->DimL_S;?> <i class="fa fa-times"></i> <?php echo $prt->DimT_S;?> CM </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Weight</label>
					</div>
					<div class="col-md-8">
						<p class="small"><?php echo $prt->Weight;?> KG</p>
					</div>
				</div>
			</div>
		</div>
		<!--RIGHT-->
		<div class="col-xs-6">
			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">SP Price</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->SPPrice,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">Fin / Cleen / Send</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->Finishing,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">Glass</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->Glass,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">Mirror</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->Mirror,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">Metal</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->Metal,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">Brass</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->Brass,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">Aluminium</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->Aluminium,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">Candle</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->Candle,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">Stone</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->Stone,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">Base</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->Base,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">Backing</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->Backing,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small"><?php echo $prt->BiayaLainStr1;?></label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->BiayaLainNum1,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small"><?php echo $prt->BiayaLainStr2;?></label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->BiayaLainNum2,2,',','.');?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="solid-line"></div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-6">
						<label class="text-uppercase small">Sub Total 1</label>
					</div>
					<div class="col-md-6">
						<p class="small"><b>RP</b>&nbsp;&nbsp;<?php echo number_format($prt->SubTotal1,2,',','.');?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="col-xs-12">
			<div class="solid-line"></div>
			<h5 class="text-uppercase"><b><ins>Packing</ins></b></h5>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<!--LEFT-->
			<div class="col-xs-6">
				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Foam Sheet</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->PanjangFoam;?> MTR <i class="fa fa-times"></i> <?php echo number_format($prt->HrgFoam,2,',','.');?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaFoam,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Bubble Sheet</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->PanjangBubble;?> MTR <i class="fa fa-times"></i> <?php echo number_format($prt->HrgBubble,2,',','.');?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaBubble,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Shredded Paper</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->BeratPaper;?> KG <i class="fa fa-times"></i> <?php echo number_format($prt->HrgPaper,2,',','.');?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaPaper,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Single Face</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->PanjangFace;?> MTR <i class="fa fa-times"></i> <?php echo number_format($prt->HrgFace,2,',','.');?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaFace,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Plastik</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->PanjangPlastik;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgPlastik,2,',','.');?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaPlastik,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Molding Foam Size</label>
					</div>
					<div class="col-md-8">
						<p class="small"><?php echo $prt->MoldingP;?> <i class="fa fa-times"></i> <?php echo $prt->MoldingL;?> <i class="fa fa-times"></i> <?php echo $prt->MoldingT;?>&nbsp;=&nbsp;<?php echo $prt->MoldingCBM;?> <b style="font-size: 8px;">CBM</b></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Molding Foam Price</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->MoldingCBM;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgMolding,2,',','.');?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaModing,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Inner Box Price</label>
					</div>
					<div class="col-md-5"></div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaInnerBox,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Styrofoam 2 CM</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->lbrStyrofoam;?> LBR <i class="fa fa-times"></i> <?php echo number_format($prt->HrgStyrofoam,2,',','.');?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaStrofoam,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Corner</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->JmlConer;?> PCS <i class="fa fa-times"></i> <?php echo number_format($prt->HrgConer,2,',','.');?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaConer,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Ctn. Box Size</label>
					</div>
					<div class="col-md-8">
					<p class="small"><?php echo $prt->CartonP;?> <i class="fa fa-times"></i> <?php echo $prt->CartonL;?> <i class="fa fa-times"></i> <?php echo $prt->CartonT;?>&nbsp;=&nbsp;<?php echo $prt->CBMCarton;?> <b style="font-size: 8px;">CBM</b></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Ctn. Box Price</label>
					</div>
					<div class="col-md-5">
					<p class="small"><?php echo $prt->SubCarton;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgCarton,2,',','.');?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaCarton,2,',','.');?></p>
					</div>
				</div>
				</div>

				

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Crate Size</label>
					</div>
					<div class="col-md-8">
					<p class="small"><?php echo $prt->CrateP;?> <i class="fa fa-times"></i> <?php echo $prt->CrateL;?> <i class="fa fa-times"></i> <?php echo $prt->CrateT;?>&nbsp;=&nbsp;<?php echo $prt->CrateCBM;?> <b style="font-size: 8px;">CBM</b></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Crate Price</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->JmlPapan;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgPapan,2,',','.');?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaInnerBox,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Man Power</label>
					</div>
					<div class="col-md-5"></div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->ManPower,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Trucking Cost</label>
					</div>
					<div class="col-md-5">
						<p class="small">(<?php echo number_format($prt->HrgTrucking,2,',','.');?> <b>/</b> <?php echo $prt->CBMTrucking;?>) <i class="fa fa-times"></i> <?php echo $prt->CBMTot;?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaTrucking,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4">
						<label class="text-uppercase small">Conteiner Cost</label>
					</div>
					<div class="col-md-5">
						<p class="small">(<?php echo number_format($prt->HrgContainer,2,',','.');?> <b>/</b> <?php echo $prt->CBMContainer;?>) <i class="fa fa-times"></i> <?php echo $prt->CBMItemCon;?></p>
					</div>
					<div class="col-md-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaContainer,2,',','.');?></p>
					</div>
				</div>
				</div>

				<!--<div class="row">
				<div class="col-lg-12">
					<div class="col-xs-4">
						<label class="text-uppercase small">ISPN</label>
					</div>
					<div class="col-xs-5">
						<p class="small"><?php echo $prt->JmlISPN;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgISPN,2,',','.');?></p>
					</div>
					<div class="col-xs-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaISPN,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-xs-4">
						<label class="text-uppercase small">J. Hook</label>
					</div>
					<div class="col-xs-5">
						<p class="small"><?php echo $prt->JmlHook;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgHook,2,',','.');?></p>
					</div>
					<div class="col-xs-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaHook,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-xs-4">
						<label class="text-uppercase small">D. Ring</label>
					</div>
					<div class="col-xs-5">
						<p class="small"><?php echo $prt->JmlRing;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgRing,2,',','.');?></p>
					</div>
					<div class="col-xs-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaRing,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-xs-4">
						<label class="text-uppercase small">Ring Hanger</label>
					</div>
					<div class="col-xs-5">
						<p class="small"><?php echo $prt->JmlHanger;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgHanger,2,',','.');?></p>
					</div>
					<div class="col-xs-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaHanger,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-xs-4">
						<label class="text-uppercase small">Key Hole</label>
					</div>
					<div class="col-xs-5">
						<p class="small"><?php echo $prt->JmlKeyHole;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgKeyHole,2,',','.');?></p>
					</div>
					<div class="col-xs-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaKeyHole,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="solid-line"></div>
					</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-xs-4">
						<label class="text-uppercase small">Sub Total 2</label>
					</div>
					<div class="col-xs-5"></div>
					<div class="col-xs-3">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->SubTotal2,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="solid-line"></div>
				</div>
				</div>-->
			</div>
			<!--RIGHT-->
			<div class="col-xs-6">

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-2">
						<label class="text-uppercase small">ISPN</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->JmlISPN;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgISPN,2,',','.');?></p>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaISPN,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-2">
						<label class="text-uppercase small">J. Hook</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->JmlHook;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgHook,2,',','.');?></p>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaHook,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-2">
						<label class="text-uppercase small">D. Ring</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->JmlRing;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgRing,2,',','.');?></p>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaRing,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-2">
						<label class="text-uppercase small">Ring Hanger</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->JmlHanger;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgHanger,2,',','.');?></p>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaHanger,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-2">
						<label class="text-uppercase small">Key Hole</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->JmlKeyHole;?> <i class="fa fa-times"></i> <?php echo number_format($prt->HrgKeyHole,2,',','.');?></p>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaKeyHole,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="solid-line"></div>
					</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-7">
						<label class="text-uppercase small">Sub Total 2</label>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->SubTotal2,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="solid-line"></div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-2">
						<label class="text-uppercase small">FOB Price</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo number_format($prt->FOB1,2,',','.');?> <i class="fa fa-plus"></i> <?php echo number_format($prt->FOB2,2,',','.');?></p>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->TolFOB,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-2">
						<label class="text-uppercase small">Over Head</label>
					</div>
					<div class="col-md-5">
						<p class="small"><?php echo $prt->OverHeadPersen;?> <i class="fa fa-percent"></i></p>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaOverHead,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="solid-line"></div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-7">
						<label class="text-uppercase small">Sub Total Over Head</label>
					</div>
					<!--<div class="col-xs-5"></div>-->
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->SubTotalOverHead,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-3">
						<label class="text-uppercase small">TAX</label>
					</div>
					<div class="col-md-4">
						<p class="small"><?php echo $prt->TAXPersen;?> <i class="fa fa-percent"></i></p>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->BiayaTAX,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="solid-line"></div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-3"></div>
					<div class="col-md-4">
						<label class="text-uppercase small">Total</label>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->Total,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="solid-line"></div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-3"></div>
					<div class="col-md-4">
						<label class="text-uppercase small">Devided</label>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;RP&nbsp;<?php echo number_format($prt->Devided,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-3"></div>
					<div class="col-md-4">
						<label class="text-uppercase small">USD Price</label>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;$&nbsp;<?php echo number_format($prt->USDPrice,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="solid-line"></div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="col-md-3"></div>
					<div class="col-md-4">
						<label class="text-uppercase small">Quote</label>
					</div>
					<div class="col-md-5">
						<p class="small">=&nbsp;<i class="fa fa-usd"></i>&nbsp;<?php echo number_format($prt->Quote,2,',','.');?></p>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
					<div class="solid-line"></div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach;?>
	</div>
</div>
<!--Main-->
<script type="text/javascript">
function close_window() {
  if (confirm("Are you sure to leave this page ?")) {
    close();
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

// $('#printarea').ready(function(){
// 	printAction('#printarea');
// });

// $('#btnprint').click(function(){
// 	printAction('#printarea');
// });
</script>
</body>
</html>