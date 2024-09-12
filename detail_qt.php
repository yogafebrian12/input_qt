<style type="text/css">
table, td, th {  
  border: 1px solid black !important;
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

.tbl-detil {
	width:100%;
}

@media screen and (max-width: 900px) {
   .tbl-detil {
      width: 850px;
   }
}

@media screen and (max-width: 600px) {
   .tbl-detil {
      width: 850px;
   }
}

</style>

<!-- Content Header (Page header) -->
<section class="content-header">
<h1>Detail
<small>Detail of Quotation</small></h1>
<!--<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
</ol>-->
</section>

<!-- Main content -->
<section class="content container-fluid">
<!--------------------------
  | Your Page Content Here |
-------------------------->

<div class="row">
<div class="col-md-12">
<div class="box box-default">
<div class="box-header with-bordered">
	<h3 class="box-title"></h3>
	<div class="pull-right">
		<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	</div>
</div>
<div class="box-body">

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10">

<div class="table-responsive">

<input type="hidden" id="id" value="<?php echo $id;?>">

<!--CONTENT-->
<div class="col-md-12">

<div style="width:100%;">
<table class="tbl-detil" style="width:820px;">
<tr>
<td style="vertical-align: top;">
<table class="table table-bordered" style="font-size: 12px;">
	<tr>
		<td colspan="5" class="text-center">
		<?php if($q['Foto']==null):?>
			<img src="<?php echo base_url();?>assets/null.jpg" class="img-thumbnail" style="height: 200px;" />
		<?php else:?>
			<img src="<?php echo base_url();?>assets/photo_items/<?= $q['Foto'];?>" class="img-thumbnail" style="width:auto;height:200px;" />
		<?php endif;?>
		</td>
	</tr>
	<tr>
		<td class="text-right"> <label class="text-uppercase" style="font-size: 12px;">CODE</label></td>
		<?php
			$rev = "";
			if($q['Rev'] > 0){
				$rev = "REV".$q['Rev'];
			}
		?>
		<td colspan="4" style="font-size: 12px;font-weight: 600;">= <?= $q['Kode'].$rev;?></td>
	</tr>
	<tr>
		<td class="text-right"> <label class="text-uppercase" style="font-size: 12px;">NAME</label></td>
		<td colspan="4" style="font-size: 12px;font-weight: 600;">= <?= $q['Nama'];?></td>
	</tr>
	<tr>
		<td class="text-right" style="font-size: 12px;"> <label class="text-uppercase">SIZE L</label></td>
		<td style="font-size: 12px;">= <?= $q['DimP'];?> &times; <?= $q['DimL'];?> &times; <?= $q['DimT'];?> CM</td>
		<td colspan="3" style="font-size: 12px;">= <?= $q['CBMDim'];?> CBM</td>
	</tr>
	<tr>
		<td class="text-right" style="font-size: 12px;"> <label class="text-uppercase">SIZE M</label></td>
		<td style="font-size: 12px;">= <?= $q['DimP_M'];?> &times; <?= $q['DimL_M'];?> &times; <?= $q['DimT_M'];?> CM</td>
		<td colspan="3" style="font-size: 12px;">= <?= $q['CBMDim_M'];?> CBM</td>
	</tr>
	<tr>
		<td class="text-right" style="font-size: 12px;"> <label class="text-uppercase">SIZE S</label></td>
		<td style="font-size: 12px;">= <?= $q['DimP_S'];?> &times; <?= $q['DimL_S'];?> &times; <?= $q['DimT_S'];?> CM</td>
		<td colspan="3" style="font-size: 12px;">= <?= $q['CBMDim_S'];?> CBM</td>
	</tr>
	<tr>
		<td class="text-right" style="font-size: 12px;"> <label class="text-uppercase">WEIGHT</label></td>
		<td colspan="4" style="font-size: 12px;">= <?= $q['Weight'];?> KG</td>
	</tr>
</table>
</td>
<td style="vertical-align: top;">
<table class="table table-bordered" style="font-size: 12px;">
	<tr <?php if($q['SPPrice']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"> <label class="text-uppercase">SP PRICE</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['SPPrice'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['biayaJasaOven']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"> <label class="text-uppercase">JASA OVEN</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['biayaJasaOven'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Finishing']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">Fin / Cleen / Send</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['Finishing'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Glass']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">Glass</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['Glass'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Mirror']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">Mirror</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['Mirror'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Metal']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">Metal</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['Metal'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Brass']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">Brass</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['Brass'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Aluminium']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">Aluminium</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['Aluminium'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Candle']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">Candle</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['Candle'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Stone']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">Stone</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['Stone'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Base']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">Base</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['Base'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['Backing']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">Backing</label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['Backing'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['BiayaLainStr1']!=null && $q['BiayaLainNum1']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase"><?= $q['BiayaLainStr1'];?></label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['BiayaLainNum1'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['BiayaLainStr2']!=null && $q['BiayaLainNum2']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase"><?= $q['BiayaLainStr2'];?></label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['BiayaLainNum2'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['BiayaLainStr3']!=null && $q['BiayaLainNum3']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase"><?= $q['BiayaLainStr3'];?></label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['BiayaLainNum3'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['BiayaLainStr4']!=null && $q['BiayaLainNum4']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase"><?= $q['BiayaLainStr4'];?></label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['BiayaLainNum4'],2,',','.');?></td>
	</tr>
	<tr <?php if($q['BiayaLainStr5']!=null && $q['BiayaLainNum5']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase"><?= $q['BiayaLainStr5'];?></label></td>
		<td style="font-size: 12px;">= RP <?= number_format($q['BiayaLainNum5'],2,',','.');?></td>
	</tr>
	<tr bgcolor="yellow">
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">SUB TOTAL MATERIAL DLL</label></td>
		<td style="font-size: 12px;">= RP 
			<?php 
				$total1 = ($q['SPPrice']+$q['biayaJasaOven']+$q['Finishing']+$q['Glass']+$q['Mirror']+$q['Metal']+$q['Brass']+$q['Aluminium']+$q['Candle']+$q['Stone']+$q['Base']+$q['Backing']+$q['BiayaLainNum1']+$q['BiayaLainNum2']+$q['BiayaLainNum3']+$q['BiayaLainNum4']+$q['BiayaLainNum5']);
				echo number_format($total1,2,',','.');
			?>
		</td>
	</tr>
</table>
</td>	
</tr>
<tr>
<td style="vertical-align: top;">
<table class="table table-bordered" style="font-size: 12px;">
	<tr>
		<td colspan="2" class="text-left" style="font-size: 12px;">
			<label class="text-uppercase">Pembahanan</label>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_cleaning']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Cleaning</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_cleaning'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_tenaga_cleaning']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. Cleaning</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_tenaga_cleaning'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_sikat']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Sikat</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_sikat'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_tenaga_sikat']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. Sikat</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_tenaga_sikat'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_amplas40']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Amplas 40</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_amplas40'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_tenaga_amplas40']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. Amplas 40</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_tenaga_amplas40'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_amplas80']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Amplas 80</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_amplas80'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_tenaga_amplas80']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. Amplas 80</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_tenaga_amplas80'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_amplas180']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Amplas 180</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_amplas180'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_tenaga_amplas180']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. Amplas 180</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_tenaga_amplas180'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_amplas400']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Amplas 400</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_amplas400'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_tenaga_amplas400']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. Amplas 400</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_tenaga_amplas400'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_dowel']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Dowel</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_dowel'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_tenaga_dowel']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. Dowel</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_tenaga_dowel'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['pembahanan_tenaga_pleting']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. Pleting</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['pembahanan_tenaga_pleting'],2,',','.');?>
		</td>
	</tr>
	<tr bgcolor="yellow">
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">SUB TOTAL PEMBAHANAN</label></td>
		<td class="text-right" style="font-size: 12px;">RP 
			<?php 
				$total12 = ($q['pembahanan_cleaning']+$q['pembahanan_tenaga_cleaning']+$q['pembahanan_sikat']+$q['pembahanan_tenaga_sikat']+$q['pembahanan_amplas40']+$q['pembahanan_tenaga_amplas40']+$q['pembahanan_amplas80']+$q['pembahanan_tenaga_amplas80']+$q['pembahanan_amplas180']+$q['pembahanan_tenaga_amplas180']+$q['pembahanan_amplas400']+$q['pembahanan_tenaga_amplas400']+$q['pembahanan_dowel']+$q['pembahanan_tenaga_dowel']+$q['pembahanan_tenaga_pleting']);
				echo number_format($total12,2,',','.');
			?>
		</td>
	</tr>
</table>
</td>
<td style="vertical-align: top;">
<table class="table table-bordered" style="font-size: 12px;">
	<tr>
		<td colspan="2">
			<label class="text-uppercase">FINISHING</label>
		</td>
	</tr>
	<tr <?php if($q['finishing_antigetah']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Anti Getah</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['finishing_antigetah'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['finishing_tenaga_antigetah']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. anti getah</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['finishing_tenaga_antigetah'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['finishing_sandingsealer']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">sanding sealer</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['finishing_sandingsealer'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['finishing_tenaga_sandingsealer']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">tng. sanding sealer</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['finishing_tenaga_sandingsealer'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['finishing_finishing']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Finishing</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['finishing_finishing'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['finishing_tenaga_finishing']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. Finishing</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['finishing_tenaga_finishing'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['finishing_topcoat']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Top coat</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['finishing_topcoat'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['finishing_tenaga_topcoat']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. Top coat</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['finishing_tenaga_topcoat'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['finishing_bleaching']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Bleaching</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['finishing_bleaching'],2,',','.');?>
		</td>
	</tr>
	<tr <?php if($q['finishing_tenaga_bleaching']>0){echo 'bgcolor="yellow"';}?>>
		<td class="text-right" style="font-size: 12px;">
			<label class="text-uppercase">Tng. Bleaching</label>
		</td>
		<td class="text-right" style="font-size: 12px;">RP <?= number_format($q['finishing_tenaga_bleaching'],2,',','.');?>
		</td>
	</tr>
	<tr bgcolor="yellow">
		<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">SUB TOTAL FINISHING</label></td>
		<td class="text-right" style="font-size: 12px;">RP 
			<?php 
				$total13 = ($q['finishing_antigetah']+$q['finishing_tenaga_antigetah']+$q['finishing_sandingsealer']+$q['finishing_tenaga_sandingsealer']+$q['finishing_finishing']+$q['finishing_tenaga_finishing']+$q['finishing_topcoat']+$q['finishing_tenaga_topcoat']+$q['finishing_bleaching']+$q['finishing_tenaga_bleaching']);
				echo number_format($total13,2,',','.');
			?>
		</td>
	</tr>

</table>
</td>
<!-- </tr>
<tr bgcolor="yellow">
	<td class="text-right" style="font-size: 12px;"><label class="text-uppercase">Sub Total 1 (SUB TOTAL MATERIAL DLL + SUB TOTAL PEMBAHANAN + SUB TOTAL FINISHING)</label></td>
	<td class="text-right" style="font-size: 12px;">RP <?php //echo number_format($q['SubTotal1'],2,',','.');?></td>
</tr> -->
</div>

</div>

<div class="col-md-12" style="margin-top:10px;">

<table class="tbl-detil" style="width:820px;font-size: 12px;">
	<tr>
		<td colspan="6" style="font-size: 18px;"><b>PACKING</b></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['LbrBrownPaper']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Brown Paper</label></td>
		<td><?= $q['LbrBrownPaper'];?> LBR &times; RP.<?= number_format($q['HrgBrownPaper'],2,',','.');?></td>
		<td <?php if($q['BiayaBrownPaper']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaBrownPaper'],2,',','.');?></td>
		<td class="text-right" <?php if($q['jmlSponati']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Spon Ati</label></td>
		<td><?= $q['jmlSponati'];?> PCS &times; RP.<?= number_format($q['hargaSponati'],2,',','.');?></td>
		<td <?php if($q['biayaSponati']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaSponati'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['PanjangFoam']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Foam Sheet</label></td>
		<td><?= $q['PanjangFoam'];?> MTR &times; RP.<?= number_format($q['HrgFoam'],2,',','.');?></td>
		<td <?php if($q['BiayaFoam']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaFoam'],2,',','.');?></td>

		<td class="text-right" <?php if($q['jmlFisher']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Fisher</label></td>
		<td><?= $q['jmlFisher'];?> PCS &times; RP.<?= number_format($q['hargaFisher'],2,',','.');?></td>
		<td <?php if($q['biayaFisher']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaFisher'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['PanjangBubble']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Bubble Sheet</label></td>
		<td><?= $q['PanjangBubble'];?> MTR &times; RP.<?= number_format($q['HrgBubble'],2,',','.');?></td>
		<td <?php if($q['BiayaBubble']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaBubble'],2,',','.');?></td>

		<td class="text-right" <?php if($q['jmlScrew']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Screw</label></td>
		<td><?= $q['jmlScrew'];?> PCS &times; RP.<?= number_format($q['hargaScrew'],2,',','.');?></td>
		<td <?php if($q['biayaScrew']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaScrew'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['BeratPaper']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Shredded Paper</label></td>
		<td><?= $q['BeratPaper'];?> KG &times; RP.<?= number_format($q['HrgPaper'],2,',','.');?></td>
		<td <?php if($q['BiayaPaper']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaPaper'],2,',','.');?></td>

		<td class="text-right" <?php if($q['jmlKuncipas']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Kunci Pas</label></td>
		<td><?= $q['jmlKuncipas'];?> PCS &times; RP.<?= number_format($q['hargaKuncipas'],2,',','.');?></td>
		<td <?php if($q['biayaKuncipas']>0){echo 'bgcolor="yellow"';}?>>= RP. <?= number_format($q['biayaKuncipas'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['PanjangFace']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Single Face</label></td>
		<td><?= $q['PanjangFace'];?> MTR &times; RP.<?= number_format($q['HrgFace'],2,',','.');?></td>
		<td <?php if($q['BiayaFace']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaFace'],2,',','.');?></td>

		<td class="text-right" <?php if($q['jmlBabat_5']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">ABSORB DRY <br> (5 GR)</label></td>
		<td><?= $q['jmlBabat_5'];?> PCS &times; RP.<?= number_format($q['hargaBabat_5'],2,',','.');?></td>
		<td <?php if($q['biayaBabat_5']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaBabat_5'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['PanjangPlastik']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Plastic</label></td>
		<td><?= $q['PanjangPlastik'];?> MTR &times; RP.<?= number_format($q['HrgPlastik'],2,',','.');?></td>
		<td <?php if($q['BiayaPlastik']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaPlastik'],2,',','.');?></td>

		<td class="text-right" <?php if($q['jmlBabat_25']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">ABSORB DRY <br> (25 GR)</label></td>
		<td><?= $q['jmlBabat_25'];?> PCS &times; RP.<?= number_format($q['hargaBabat_25'],2,',','.');?></td>
		<td <?php if($q['biayaBabat_25']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaBabat_25'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['MoldingP']>0 && $q['MoldingL']>0 && $q['MoldingT']){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Moulding Foam Size</label></td>
		<td><?= $q['MoldingP'];?> &times; <?= $q['MoldingL'];?> &times; <?= $q['MoldingT'];?> CM = <?= $q['MoldingCBM'];?> CBM</td>
		<td></td>

		<td class="text-right" <?php if($q['jmlBabat']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">ABSORB DRY <br> (50 GR)</label></td>
		<td><?= $q['jmlBabat'];?> PCS &times; RP.<?= number_format($q['hargaBabat'],2,',','.');?></td>
		<td <?php if($q['biayaBabat']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaBabat'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['MoldingCBM']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Moulding Foam Price</label></td>
		<td><?= $q['MoldingCBM'];?> CBM &times; RP.<?= number_format($q['HrgMolding'],2,',','.');?></td>
		<td <?php if($q['BiayaModing']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaModing'],2,',','.');?></td>
		<td class="text-right" <?php if($q['biayaBabat_250']>0){echo 'bgcolor="yellow"';}?>>
			<label class="text-uppercase">ABSORB DRY <br> (250 GR)</label>
		</td>
		<td >
			<?php echo $q['jmlBabat_250'];?> PCS &times; <?php echo 'RP. '.number_format($q['hrgBabat_250'],2,',','.');?> 
		</td>
		<td <?php if($q['biayaBabat_250']>0){echo 'bgcolor="yellow"';}?>>
			= RP. <?= number_format($q['biayaBabat_250'],2,',','.');?>
		</td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['BiayaInnerBox']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Inner Box Price</label></td>
		<td></td>
		<td <?php if($q['BiayaInnerBox']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaInnerBox'],2,',','.');?></td>
		<td class="text-right" <?php if($q['JmlHook']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">J.Hook</label></td>
		<td><?= $q['JmlHook'];?> PCS &times; RP.<?= number_format($q['HrgHook'],2,',','.');?></td>
		<td <?php if($q['BiayaHook']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaHook'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['lbrStyrofoam']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Styrofoam</label></td>
		<td><?= $q['lbrStyrofoam'];?> LBR &times; RP.<?= number_format($q['HrgStyrofoam'],2,',','.');?></td>
		<td <?php if($q['BiayaStrofoam']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaStrofoam'],2,',','.');?></td>

		<td class="text-right" <?php if($q['JmlRing']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Ring</label></td>
		<td><?= $q['JmlRing'];?> PCS &times; RP.<?= number_format($q['HrgRing'],2,',','.');?></td>
		<td <?php if($q['BiayaRing']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaRing'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['JmlConer']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Corner</label></td>
		<td><?= $q['JmlConer'];?> PCS &times; RP.<?= number_format($q['HrgConer'],2,',','.');?></td>
		<td <?php if($q['BiayaConer']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaConer'],2,',','.');?></td>

		<td class="text-right" <?php if($q['JmlHanger']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Hanger</label></td>
		<td><?= $q['JmlHanger'];?> PCS &times; RP.<?= number_format($q['HrgHanger'],2,',','.');?></td>
		<td <?php if($q['BiayaHanger']>0){echo 'bgcolor="yellow"';}?>>= RP. <?= number_format($q['BiayaHanger'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['CartonP']>0 && $q['CartonL']>0 && $q['CartonT']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Ctn. box size</label></td>
		<td><?= $q['CartonP'];?> &times; <?= $q['CartonL'];?> &times; <?= $q['CartonT'];?>&nbsp;=&nbsp;<?= $q['CBMCarton'];?> CBM</td>
		<td></td>

		<td class="text-right" <?php if($q['JmlKeyHole']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Key Hole</label></td>
		<td><?= $q['JmlKeyHole'];?> PCS &times; RP.<?= number_format($q['HrgKeyHole'],2,',','.');?></td>
		<td <?php if($q['BiayaKeyHole']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaKeyHole'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['SubCarton']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Ctn. box price</label><br>
		<?php if($q['kraf_cartonbox']!=null){
			echo '('.$q['kraf_cartonbox'].')';
		}?>
		</td>
		<td><?= $q['SubCarton'];?> &times; RP.<?= number_format($q['HrgCarton'],2,',','.');?></td>
		<td <?php if($q['BiayaCarton']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaCarton'],2,',','.');?></td>
		<td class="text-right" <?php if($q['biayaSawteeth']>0){echo 'bgcolor="yellow"';}?>>
			<label class="text-uppercase">Sawteeth</label>
		</td>
		<td>
			<?php echo $q['jmlSawteeth'];?> &times; <?php echo 'RP. '.number_format($q['hrgSawteeth'],2,',','.');?>
		</td>
		<td <?php if($q['biayaSawteeth']>0){echo 'bgcolor="yellow"';}?>>
			= RP. <?= number_format($q['biayaSawteeth'],2,',','.');?>
		</td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['SubtotCornerLuar']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Corner Luar</label><br>
		</td>
		<td><?= $q['JmlCornerLuar'];?> &times; RP.<?= number_format($q['HrgCornerLuar'],2,',','.');?></td>
		<td <?php if($q['SubtotCornerLuar']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['SubtotCornerLuar'],2,',','.');?></td>
		<td class="text-right" <?php if($q['biayaGlides']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">GLIDES</label></td>
		<td><?= $q['jmlGlides'];?> PCS &times; RP.<?= number_format($q['hargaGlides'],2,',','.');?></td>
		<td <?php if($q['biayaGlides']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['biayaGlides'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['FloatingCartonP']>0 && $q['FloatingCartonL']>0 && $q['FloatingCartonT']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Ctn. box Luar size</label>
		</td>
		<td><?= $q['FloatingCartonP'];?> &times; <?= $q['FloatingCartonL'];?> &times; <?= $q['FloatingCartonT'];?>&nbsp;=&nbsp;<?= $q['CBMFloatingCarton'];?> CBM</td>
		<td></td>
		<td colspan="3"></td>
	</tr>

	<tr>
		<td class="text-right" <?php if($q['SubFloatingCarton']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Ctn. box Luar price</label><br>
		<?php if($q['kraf_floatingbox']!=null){
			echo '('.$q['kraf_floatingbox'].')';
		}?>
		</td>
		<td><?= $q['SubFloatingCarton'];?> &times; RP.<?= number_format($q['HrgFloatingCarton'],2,',','.');?></td>
		<td <?php if($q['BiayaFloatingCarton']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaFloatingCarton'],2,',','.');?></td>
		<td colspan="2" class="text-right" <?php if($q['SubTotal2']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Sub Total Packing</label></td>
		<td <?php if($q['SubTotal2']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['SubTotal2'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['CrateP']>0 && $q['CrateL']>0 && $q['CrateT']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Crate Size</label></td>
		<td><?= $q['CrateP'];?> &times; <?= $q['CrateL'];?> &times; <?= $q['CrateT'];?>&nbsp;=&nbsp;<?php echo $q['CrateCBM'];?> CBM</td>
		<td></td>

		<td colspan="2" class="text-right"><label class="text-uppercase">Grand Total / FOB Price</label><br>RP. <?php echo number_format($total1,2,',','.'); //echo number_format($q['FOB1'],2,',','.');?> + RP. <?php echo number_format($total12,2,',','.'); //echo number_format($q['FOB1'],2,',','.');?> + RP. <?php echo number_format($total13,2,',','.'); //echo number_format($q['FOB1'],2,',','.');?> + RP. <?= number_format($q['FOB2'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['TolFOB'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['JmlPapan']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Crate price</label></td>
		<td><?= $q['JmlPapan'];?> PCS &times; RP.<?= number_format($q['HrgPapan'],2,',','.');?></td>
		<td <?php if($q['BiayaCrate']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaCrate'],2,',','.');?></td>

		<td class="text-right"><label class="text-uppercase">Over Head</label></td>
		<td><?= number_format($q['OverHeadPersen'],0);?> %</td>
		<td>= RP.<?= number_format($q['BiayaOverHead'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['ManPower']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Man Power</label></td>
		<td></td>
		<td <?php if($q['ManPower']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['ManPower'],2,',','.');?></td>

		<td class="text-right"><label class="text-uppercase">Tax</label></td>
		<td><?= number_format($q['TAXPersen'],0);?> %</td>
		<td>= RP.<?= number_format($q['BiayaTAX'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['CBMItemTru']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Truck. Cost</label></td>
		<td>(RP.<?= number_format($q['HrgTrucking'],2,',','.');?> <b>/</b> <?= $q['CBMTrucking'];?>) &times; <?= $q['CBMItemTru'];?></td>
		<td <?php if($q['BiayaTrucking']>0){echo 'bgcolor="yellow"';}?>>= RP. <?= number_format($q['BiayaTrucking'],2,',','.');?></td>

		<td colspan="3" class="text-right"></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['CBMItemCon']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">Cont. Cost</label></td>
		<td>(RP.<?= number_format($q['HrgContainer'],2,',','.');?> <b>/</b> <?= $q['CBMContainer'];?>) &times; <?= $q['CBMItemCon'];?></td>
		<td <?php if($q['BiayaContainer']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaContainer'],2,',','.');?></td>

		<td colspan="2" class="text-right"><label class="text-uppercase">Total</label></td>
		<td>= RP.<?= number_format($q['Total'],2,',','.');?></td>
	</tr>
	<tr>
		<td class="text-right" <?php if($q['JmlISPN']>0){echo 'bgcolor="yellow"';}?>><label class="text-uppercase">ISPN</label></td>
		<td><?= $q['JmlISPN'];?> PCS &times; RP.<?= number_format($q['HrgISPN'],2,',','.');?></td>
		<td <?php if($q['BiayaISPN']>0){echo 'bgcolor="yellow"';}?>>= RP.<?= number_format($q['BiayaISPN'],2,',','.');?></td>

		<td colspan="2" class="text-right"><label class="text-uppercase">Devided</label></td>
		<td>= RP.<?= number_format($q['Devided'],2,',','.');?></td>
	</tr>
	<tr>
		<td colspan="3"></td>
		
		<td colspan="2" class="text-right"><label class="text-uppercase">USD Price</label></td>
		<td>= $ <?= number_format($q['USDPrice'],2);?></td>
	</tr>
	<tr>
		<td colspan="3"></td>
		
		<td colspan="2" class="text-right" bgcolor="yellow"><label class="text-uppercase">Quote</label></td>
		<td bgcolor="yellow">= $ <?= number_format($q['Quote'],2,'.',',');?></td>
	</tr>
	<tr>
		<td colspan="6" style="font-size: 11px;" class="text-right">
			<b>PRINT DATE:</b> <?php echo date('Y-m-d H:i:s');?>
		</td>
	</tr>

	<!--<tr>
		<td class="text-right"><label class="text-uppercase">Fisher</label></td>
		<td><?= $q['jmlFisher'];?> PCS &times; RP.<?= number_format($q['hargaFisher'],2,',','.');?></td>
		<td>= RP.<?= number_format($q['biayaFisher'],2,',','.');?></td>
		<td colspan="3" class="text-right"></td>
	</tr>-->
</table>

<?php if($q['catatan']!=null):?>
<table class="tbl-detil" style="width:820px;font-size: 12px;">
<tr>
	<td><label class="text-uppercase">CATATAN</label></td>
</tr>
<tr>
	<td><?= $q['catatan'];?></td>
</tr>
</table>
<?php endif;?>

</div>
<!--CONTENT-->

</div>

</div>
<div class="col-md-1"></div>
</div>

<div class="col-md-12" style="margin-top:10px;">
<div class="text-center">
	<button class="btn btn-warning" onclick="preupdate();"><i class="fa fa-edit"></i> Update</button>
	<a class="btn btn-primary" href="<?php echo site_url('printQt').'/'.$id;?>" target="__blank"><i class="fa fa-print"></i> Print</a>
</div>
</div>

</div>
</div>
</div>
</div>

</section>

<script type="text/javascript">
function preupdate(){
	var id = $('#id').val();

	$.confirm({
        title: 'Konfirmasi!',
        content: 'Apakah anda yakin untuk update data ini ?',
        icon: 'fa fa-exclamation',
        animation: 'scale',
        closeAnimation: 'zoom',
        buttons: {
            Ya: {
                btnClass: 'btn-blue',
                action: function(){
                    location.href="<?php echo site_url('updateQt');?>/"+id;
                }
            },
            Tidak:{
            	text:'Tidak',
            	btnClass:'btn-default',
            	action: function(){
            		//Do nothing

            	}
            }
        }
    });
}
</script>