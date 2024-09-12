<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $title;?></title>
<!--Icon-->
<link rel="shortcut icon" href="<?php echo base_url();?>assets/icon/lb.jpg" />
<!--Bootstrap-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plugin/bootstrap/dist/css/bootstrap.min.css">
<!--Font Awesome-->
<style type="text/css">
html,body{
	margin:10px;
	font-family: 'Arial', sans-serif;
}

table, td, th {  
  border: 1px solid #ddd;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 5px;
}

.text-uppercase{
	text-transform: uppercase;
	font-weight: 600;
}

.text-right{
	text-align:right;
}

.text-center{
	text-align:center;
}

.page-break { page-break-before: always; }

</style>
</head>

<body>

<div class="container">
<div class="row">
<div class="col-md-12">

<div style="width:100%;">
<table style="width:100%;">
<tr>
<td>
<table class="table table-bordered" style="font-size: 10px;">
	<tr>
		<td colspan="5" class="text-center">
		<?php if($q['Foto']==null):?>
			<img src="./assets/null.jpg" class="img-thumbnail" style="height: 200px;" />
		<?php else:?>
			<img src="./assets/photo_items/<?= $q['Foto'];?>" class="img-thumbnail" style="width:200px;height:auto;" />
		<?php endif;?>
		</td>
	</tr>
	<tr>
		<td class="text-right"> <label class="text-uppercase" style="font-size: 15px;">CODE</label></td>
		<td colspan="4" style="font-size: 15px;font-weight: 600;">= <?= $q['Kode'];?></td>
	</tr>
	<tr>
		<td class="text-right"> <label class="text-uppercase" style="font-size: 15px;">NAME</label></td>
		<td colspan="4" style="font-size: 15px;font-weight: 600;">= <?= $q['Nama'];?></td>
	</tr>
	<tr>
		<td class="text-right"> <label class="text-uppercase">SIZE L</label></td>
		<td>= <?= $q['DimP'];?> &times; <?= $q['DimL'];?> &times; <?= $q['DimT'];?> CM</td>
		<td colspan="3">= <?= $q['CBMDim'];?> CBM</td>
	</tr>
	<tr>
		<td class="text-right"> <label class="text-uppercase">SIZE M</label></td>
		<td>= <?= $q['DimP_M'];?> &times; <?= $q['DimL_M'];?> &times; <?= $q['DimT_M'];?> CM</td>
		<td colspan="3">= <?= $q['CBMDim_M'];?> CBM</td>
	</tr>
	<tr>
		<td class="text-right"> <label class="text-uppercase">SIZE S</label></td>
		<td>= <?= $q['DimP_S'];?> &times; <?= $q['DimL_S'];?> &times; <?= $q['DimT_S'];?> CM</td>
		<td colspan="3">= <?= $q['CBMDim_S'];?> CBM</td>
	</tr>
	<tr>
		<td class="text-right"> <label class="text-uppercase">WEIGHT</label></td>
		<td colspan="4">= <?= $q['Weight'];?> KG</td>
	</tr>
</table>
</td>
<td>
<table class="table table-bordered" style="font-size: 10px;">
	<tr <?php if($q['SPPrice']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"> <label class="text-uppercase">SP PRICE</label></td>
		<td>= RP <?= number_format($q['SPPrice'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['biayaJasaOven']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"> <label class="text-uppercase">JASA OVEN</label></td>
		<td>= RP <?= number_format($q['biayaJasaOven'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Finishing']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase">Fin / Cleen / Send</label></td>
		<td>= RP <?= number_format($q['Finishing'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Glass']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase">Glass</label></td>
		<td>= RP <?= number_format($q['Glass'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Mirror']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase">Mirror</label></td>
		<td>= RP <?= number_format($q['Mirror'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Metal']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase">Metal</label></td>
		<td>= RP <?= number_format($q['Metal'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Brass']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase">Brass</label></td>
		<td>= RP <?= number_format($q['Brass'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Aluminium']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase">Aluminium</label></td>
		<td>= RP <?= number_format($q['Aluminium'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Candle']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase">Candle</label></td>
		<td>= RP <?= number_format($q['Candle'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Stone']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase">Stone</label></td>
		<td>= RP <?= number_format($q['Stone'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Base']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase">Base</label></td>
		<td>= RP <?= number_format($q['Base'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Backing']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase">Backing</label></td>
		<td>= RP <?= number_format($q['Backing'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['BiayaLainStr1']!=null && $q['BiayaLainNum1']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase"><?= $q['BiayaLainStr1'];?></label></td>
		<td>= RP <?= number_format($q['BiayaLainNum1'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['BiayaLainStr2']!=null && $q['BiayaLainNum2']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right"><label class="text-uppercase"><?= $q['BiayaLainStr2'];?></label></td>
		<td>= RP <?= number_format($q['BiayaLainNum2'],2,',','.');?></td>
	</tr>
	<tr bgcolor="yellow">
		<td class="text-right"><label class="text-uppercase">Sub Total 1</label></td>
		<td>= RP <?= number_format($q['SubTotal1'],2,',','.');?></td>
	</tr>
</table>
</td>	
</tr>
</div>

</div>

<div class="col-md-12" style="margin-top:10px;">

<table class="table table-bordered" style="font-size: 10px;">
	<tr>
		<td colspan="6" style="font-size: 12px;"><b>PACKING</b></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['LbrBrownPaper']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Brown Paper</label></td>
		<td><?= $q['LbrBrownPaper'];?> LBR &times; RP.<?= number_format($q['HrgBrownPaper'],2,',','.');?></td>
		<td <?php if($q['BiayaBrownPaper']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaBrownPaper'],2,',','.');?></td>
		<td class="text-right" <?php if($q['jmlFisher']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Fisher</label></td>
		<td><?= $q['jmlFisher'];?> PCS &times; RP.<?= number_format($q['hargaFisher'],2,',','.');?></td>
		<td <?php if($q['biayaFisher']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaFisher'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['PanjangFoam']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Foam Sheet</label></td>
		<td><?= $q['PanjangFoam'];?> MTR &times; RP.<?= number_format($q['HrgFoam'],2,',','.');?></td>
		<td <?php if($q['BiayaFoam']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaFoam'],2,',','.');?></td>
		<td class="text-right" <?php if($q['jmlScrew']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Screw</label></td>
		<td><?= $q['jmlScrew'];?> PCS &times; RP.<?= number_format($q['hargaScrew'],2,',','.');?></td>
		<td <?php if($q['biayaScrew']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaScrew'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['PanjangBubble']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Bubble Sheet</label></td>
		<td><?= $q['PanjangBubble'];?> MTR &times; RP.<?= number_format($q['HrgBubble'],2,',','.');?></td>
		<td <?php if($q['BiayaBubble']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaBubble'],2,',','.');?></td>
		<td class="text-right" <?php if($q['jmlKuncipas']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Kunci Pas</label></td>
		<td><?= $q['jmlKuncipas'];?> PCS &times; RP.<?= number_format($q['hargaKuncipas'],2,',','.');?></td>
		<td <?php if($q['biayaKuncipas']>0){echo 'bgcolor="yellow"';}?>>= RP. <?= number_format($q['biayaKuncipas'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['BeratPaper']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Shredded Paper</label></td>
		<td><?= $q['BeratPaper'];?> KG &times; RP.<?= number_format($q['HrgPaper'],2,',','.');?></td>
		<td <?php if($q['BiayaPaper']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaPaper'],2,',','.');?></td>
		<td class="text-right" <?php if($q['jmlBabat_5']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">ABSORB DRY <br> (5 GR)</label></td>
		<td><?= $q['jmlBabat_5'];?> PCS &times; RP.<?= number_format($q['hargaBabat_5'],2,',','.');?></td>
		<td <?php if($q['biayaBabat_5']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaBabat_5'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['PanjangFace']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Single Face</label></td>
		<td><?= $q['PanjangFace'];?> MTR &times; RP.<?= number_format($q['HrgFace'],2,',','.');?></td>
		<td <?php if($q['BiayaFace']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaFace'],2,',','.');?></td>
		<td class="text-right" <?php if($q['jmlBabat_25']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">ABSORB DRY <br> (25 GR)</label></td>
		<td><?= $q['jmlBabat_25'];?> PCS &times; RP.<?= number_format($q['hargaBabat_25'],2,',','.');?></td>
		<td <?php if($q['biayaBabat_25']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaBabat_25'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['PanjangPlastik']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Plastic</label></td>
		<td><?= $q['PanjangPlastik'];?> MTR &times; RP.<?= number_format($q['HrgPlastik'],2,',','.');?></td>
		<td <?php if($q['BiayaPlastik']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaPlastik'],2,',','.');?></td>
		<td class="text-right" <?php if($q['jmlBabat']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">ABSORB DRY <br> (50 GR)</label></td>
		<td><?= $q['jmlBabat'];?> PCS &times; RP.<?= number_format($q['hargaBabat'],2,',','.');?></td>
		<td <?php if($q['biayaBabat']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaBabat'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['MoldingP']>0 && $q['MoldingL']>0 && $q['MoldingT']){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Moulding Foam Size</label></td>
		<td><?= $q['MoldingP'];?> &times; <?= $q['MoldingL'];?> &times; <?= $q['MoldingT'];?> CM = <?= $q['MoldingCBM'];?> CBM</td>
		<td></td>
		<td class="text-right" <?php if($q['JmlHook']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">J.Hook</label></td>
		<td><?= $q['JmlHook'];?> SET &times; RP.<?= number_format($q['HrgHook'],2,',','.');?></td>
		<td <?php if($q['BiayaHook']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaHook'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['MoldingCBM']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Moulding Foam Price</label></td>
		<td><?= $q['MoldingCBM'];?> CBM &times; RP.<?= number_format($q['HrgMolding'],2,',','.');?></td>
		<td <?php if($q['BiayaModing']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaModing'],2,',','.');?></td>
		<td class="text-right" <?php if($q['JmlRing']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Ring</label></td>
		<td><?= $q['JmlRing'];?> PCS &times; RP.<?= number_format($q['HrgRing'],2,',','.');?></td>
		<td <?php if($q['BiayaRing']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaRing'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['BiayaInnerBox']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Inner Box Price</label></td>
		<td></td>
		<td <?php if($q['BiayaInnerBox']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaInnerBox'],2,',','.');?></td>
		<td class="text-right" <?php if($q['JmlHanger']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Hanger</label></td>
		<td><?= $q['JmlHanger'];?> PCS &times; RP.<?= number_format($q['HrgHanger'],2,',','.');?></td>
		<td <?php if($q['BiayaHanger']>0){echo 'bgcolor="yellow"';}?>>= RP. <?= number_format($q['BiayaHanger'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['lbrStyrofoam']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Styrofoam</label></td>
		<td><?= $q['lbrStyrofoam'];?> LBR &times; RP.<?= number_format($q['HrgStyrofoam'],2,',','.');?></td>
		<td <?php if($q['BiayaStrofoam']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaStrofoam'],2,',','.');?></td>
		<td class="text-right" <?php if($q['JmlKeyHole']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Key Hole</label></td>
		<td><?= $q['JmlKeyHole'];?> PCS &times; RP.<?= number_format($q['HrgKeyHole'],2,',','.');?></td>
		<td <?php if($q['BiayaKeyHole']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaKeyHole'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['JmlConer']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Corner</label></td>
		<td><?= $q['JmlConer'];?> PCS &times; RP.<?= number_format($q['HrgConer'],2,',','.');?></td>
		<td <?php if($q['BiayaConer']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaConer'],2,',','.');?></td>
		<td colspan="2" class="text-right" <?php if($q['SubTotal2']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Sub Total 2</label></td>
		<td <?php if($q['SubTotal2']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['SubTotal2'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['CartonP']>0 && $q['CartonL']>0 && $q['CartonT']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Ctn. box size</label></td>
		<td><?= $q['CartonP'];?> &times; <?= $q['CartonL'];?> &times; <?= $q['CartonT'];?>&nbsp;=&nbsp;<?= $q['CBMCarton'];?> CBM</td>
		<td></td>
		<td colspan="2" class="text-right"><label class="text-uppercase">FOB Price</label><br>RP.<?= number_format($q['FOB1'],2,',','.');?> + RP. <?= number_format($q['FOB2'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['TolFOB'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['SubCarton']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Ctn. box price</label></td>
		<td><?= $q['SubCarton'];?> &times; RP.<?= number_format($q['HrgCarton'],2,',','.');?></td>
		<td <?php if($q['BiayaCarton']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaCarton'],2,',','.');?></td>
		<td class="text-right"><label class="text-uppercase">Over Head</label></td>
		<td><?= number_format($q['OverHeadPersen'],0);?> %</td>
		<td>= RP.<?= number_format($q['BiayaOverHead'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['CrateP']>0 && $q['CrateL']>0 && $q['CrateT']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Crate Size</label></td>
		<td><?= $q['CrateP'];?> &times; <?= $q['CrateL'];?> &times; <?= $q['CrateT'];?>&nbsp;=&nbsp;<?php echo $q['CrateCBM'];?> CBM</td>
		<td></td>
		<td class="text-right"><label class="text-uppercase">Tax</label></td>
		<td><?= number_format($q['TAXPersen'],0);?> %</td>
		<td>= RP.<?= number_format($q['BiayaTAX'],2,',','.');?></td>
		 
	</tr>
	<tr>
		<td class="text-right" <?php if($q['JmlPapan']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Crate price</label></td>
		<td><?= $q['JmlPapan'];?> PCS &times; RP.<?= number_format($q['HrgPapan'],2,',','.');?></td>
		<td <?php if($q['BiayaCrate']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaCrate'],2,',','.');?></td>
		<td colspan="2" class="text-right"><label class="text-uppercase">Sub Total Over Head</label></td>
		<td>= RP.<?= number_format($q['SubTotalOverHead'],2,',','.');?></td> 
	</tr>
	<tr>
		<td class="text-right" <?php if($q['ManPower']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Man Power</label></td>
		<td></td>
		<td <?php if($q['ManPower']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['ManPower'],2,',','.');?></td>
		<td colspan="3" class="text-right"></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['CBMItemTru']>0.1){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Truck. Cost</label></td>
		<td>(RP.<?= number_format($q['HrgTrucking'],2,',','.');?> <b>/</b> <?= $q['CBMTrucking'];?>) &times; <?= $q['CBMItemTru'];?></td>
		<td <?php if($q['BiayaTrucking']>1){echo 'bgcolor="yellow"';}?>>= RP. <?= number_format($q['BiayaTrucking'],2,',','.');?></td>
		<td colspan="2" class="text-right"><label class="text-uppercase">Total</label></td>
		<td>= RP.<?= number_format($q['Total'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['CBMItemCon']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Cont. Cost</label></td>
		<td>(RP.<?= number_format($q['HrgContainer'],2,',','.');?> <b>/</b> <?= $q['CBMContainer'];?>) &times; <?= $q['CBMItemCon'];?></td>
		<td <?php if($q['BiayaContainer']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaContainer'],2,',','.');?></td>
		<td colspan="2" class="text-right"><label class="text-uppercase">Devided</label></td>
		<td>= RP.<?= number_format($q['Devided'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['JmlISPN']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">ISPN</label></td>
		<td><?= $q['JmlISPN'];?> PCS &times; RP.<?= number_format($q['HrgISPN'],2,',','.');?></td>
		<td <?php if($q['BiayaISPN']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaISPN'],2,',','.');?></td>
		<td colspan="2" class="text-right"><label class="text-uppercase">USD Price</label></td>
		<td>= $ <?= number_format($q['USDPrice'],2);?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['jmlSponati']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Spon Ati</label></td>
		<td><?= $q['jmlSponati'];?> PCS &times; RP.<?= number_format($q['hargaSponati'],2,',','.');?></td>
		<td <?php if($q['biayaSponati']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaSponati'],2,',','.');?></td>
		<td colspan="2" class="text-right" bgcolor="yellow"><label class="text-uppercase">Quote</label></td>
		<td bgcolor="yellow">= $ <?= number_format($q['Quote'],2,'.',',');?></td>
	</tr>
	<!--<tr>
		<td class="text-right"><label class="text-uppercase">Fisher</label></td>
		<td><?= $q['jmlFisher'];?> PCS &times; RP.<?= number_format($q['hargaFisher'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['biayaFisher'],2,',','.');?></td>
		<td colspan="3" class="text-right"></td>
	</tr>-->
</table>

<?php if($q['catatan']!=null):?>
<table class="table table-bordered page-break" style="font-size: 12px;">
<tr>
	<td><label class="text-uppercase">CATATAN</label></td>
</tr>
<tr>
	<td><?= $q['catatan'];?></td>
</tr>
</table>
<?php endif;?>

</div>

</div>
</div>
</body>
</html>