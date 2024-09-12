<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plugin/bootstrap-fileinput/css/fileinput.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>plugin/bootstrap-fileinput/css/fileinput-rtl.min.css">
<script type="text/javascript" src="<?php echo base_url();?>plugin/bootstrap-fileinput/js/fileinput.min.js"></script>-->

<!-- Content Header (Page header) -->
<section class="content-header">
<h1>QUOTATION
<small>Input Baru</small></h1>
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

<input type="hidden" id="username" value="<?php echo $this->session->userdata('username');?>">

<div class="row">
<div class="col-md-12">
  <div class="alert alert-info alert-dismissible">
    <button class="close" data-dismiss="alert" aria-label="close" style="text-decoration:none;">&times;</button>
    <strong>INFO!</strong> HARGA PACKING MENGIKUTI DEFAULT SETTING!
  </div>
</div>
</div>

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
<div class="row">
<div class="col-md-12">

<div class="col-md-6">
<div class="form-group">
<label>KODE ITEM</label>
<input type="text" class="form-control inputs text-uppercase" name="code" id="item_kode" onkeyup="validKode();">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label>NAMA ITEM</label>
<input type="text" class="form-control inputs text-uppercase" name="nama" id="item_nama">
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<div class="col-md-12">
<label>FOTO ITEM</label>
</div>

<input type="hidden" id="item_fotoold">
<div class="col-md-6">
<input type="file" class="form-control inputs" id="item_foto" name="photo" accept="image/*">
<small class="text-danger">* HANYA SATU GAMBAR</small>
</div>
<div class="col-md-6">
<img class="img-thumbnail" style="height:250px;" src="<?php echo base_url();?>assets/photo_items/null.png" id="photo_view" />
</div>
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<div class="col-md-12">
<label>DIMENSI L (CM)</label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><input type="text" class="form-control inputs item-dim-p decimal" id="item_diml_p" placeholder="(Panjang)" min="0" value="0" onchange="itemDimLCBM();"></td>
  <td><i class="fa fa-times"></i></td>
  <td><input type="text" class="form-control inputs item-dim-l decimal" id="item_diml_l" placeholder="(Lebar)" min="0" value="0" onchange="itemDimLCBM();"></td>
  <td><i class="fa fa-times"></i></td>
  <td><input type="text" class="form-control inputs item-dim-t decimal" id="item_diml_t" placeholder="(Tinggi)" min="0" value="0" onchange="itemDimLCBM();"></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs item-dim-cbm" id="item_diml_cbm" value="0" readonly>
  </td>
</tr>
</table>
</div>
</div>

<div class="form-group">
<div class="col-md-12">
<label>DIMENSI M (CM)</label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><input type="text" class="form-control inputs item-dim-p decimal" id="item_dimm_p" placeholder="(Panjang)" min="0" value="0" onchange="itemDimMCBM();"></td>
  <td><i class="fa fa-times"></i></td>
  <td><input type="text" class="form-control inputs item-dim-l decimal" id="item_dimm_l" placeholder="(Lebar)" min="0" value="0" onchange="itemDimMCBM();"></td>
  <td><i class="fa fa-times"></i></td>
  <td><input type="text" class="form-control inputs item-dim-t decimal" id="item_dimm_t" placeholder="(Tinggi)" min="0" value="0" onchange="itemDimMCBM();"></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs item-dim-cbm" id="item_dimm_cbm" value="0" readonly>
  </td>
</tr>
</table>
</div>
</div>

<div class="form-group">
<div class="col-md-12">
<label>DIMENSI S (CM)</label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><input type="text" class="form-control inputs item-dim-p decimal" id="item_dims_p" placeholder="(Panjang)" min="0" value="0" onchange="itemDimSCBM();"></td>
  <td><i class="fa fa-times"></i></td>
  <td><input type="text" class="form-control inputs item-dim-l decimal" id="item_dims_l" placeholder="(Lebar)" min="0" value="0" onchange="itemDimSCBM();"></td>
  <td><i class="fa fa-times"></i></td>
  <td><input type="text" class="form-control inputs item-dim-t decimal" id="item_dims_t" placeholder="(Tinggi)" min="0" value="0" onchange="itemDimSCBM();"></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs item-dim-cbm" id="item_dims_cbm" value="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<label>BERAT ITEM (KGS)</label>
<div class="form-group has-feedback" style="width:50%;">
<input type="text" class="form-control inputs decimal" id="item_berat" value="0" min="0">
<span class="form-control-feedback">KG</span>
</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div>

<div class="col-md-12">
<!-- <div class="col-md-12"> -->
<div class="box box-default">
<div class="box-header with-bordered">
  <h3 class="box-title"></h3>
  <div class="pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
  </div>
</div>
<div class="box-body">


<div class="col-md-12">

<div class="col-md-4">
  <label>SP PRICE</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_spprice" value="0" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label class="checkbox"><input type="checkbox" id="cb_jasaoven"> JASA OVEN</label>
</div>

<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="hidden" id="hrg_jasaoven" value="<?php echo $d['jasaoven'];?>">
    <input type="text" class="form-control inputs qtotprice stt1 tot1" id="h_jasaoven" value="0" min="0" readonly>
  </div>
  <small class="text-info" id="text-jasaoven"></small>
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label>FIN / CLEEN / SEND</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_fin" value="0" onkeypress="return OnlyNum(event)" min="0" readonly>
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label>GLASS</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_glass" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label>MIRROR</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_mirror" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label>METAL</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_metal" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label>BRASS</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_brass" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label>ALUMINIUM</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_aluminium" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label>CANDLE</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_candle" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label>STONE</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_stone" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label>BASE</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_base" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label>BACKING</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_backing" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label><input type="text" class="form-control inputs" id="h_jdllain1" placeholder="(Judul 1)"></label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_lain1" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label><input type="text" class="form-control inputs" id="h_jdllain2" placeholder="(Judul 2)"></label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_lain2" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>

<div class="col-md-12">

<div class="col-md-4">
  <label><input type="text" class="form-control inputs" id="h_jdllain3" placeholder="(Judul 3)"></label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_lain3" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>



<div class="col-md-12">

<div class="col-md-4">
  <label><input type="text" class="form-control inputs" id="h_jdllain4" placeholder="(Judul 4)"></label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_lain4" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>

<div class="col-md-12">

<div class="col-md-4">
  <label><input type="text" class="form-control inputs" id="h_jdllain5" placeholder="(Judul 5)"></label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span>
  <input type="text" class="form-control inputs qprice stt1 tot1" pattern="[0-9]*" id="h_lain5" value="0" onkeypress="return OnlyNum(event)" min="0">
</div>  
</div>

</div>


<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Total Suplier Price</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control inputs qtotprice qprice" id="tot1" readonly>
    </div>
  </div>
</div>



<div class="col-md-12">

  <hr style="margin-top:5px;margin-bottom:5px;" />
  
</div>

<div class="col-md-12 text-left">

  <label class="text-uppercase">PEMBAHANAN</label>
  
</div>

<div class="col-md-12">

  <hr style="margin-top:5px;margin-bottom:5px;" />
  
</div>

<!--Treatment-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Treatment</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_treatment" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>

<!--Tenaga Treatment-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Tenaga Treatment</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_tenaga_treatment" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>

<!--Cleaning-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Cleaning</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_cleaning" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Tenaga Cleaning-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Tenaga Cleaning</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_tenaga_cleaning" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Sikat-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Sikat</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_sikat" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Tenaga sikat-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Tenaga Sikat</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_tenaga_sikat" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Amplas 40-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Amplas 40</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_amplas40" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Amplas 40-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Tenaga Amplas 40</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_tenaga_amplas40" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Amplas 80-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Amplas 80</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_amplas80" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Amplas 80-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Tenaga Amplas 80</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_tenaga_amplas80" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Amplas 180-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Amplas 180</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_amplas180" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Amplas 180-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Tenaga Amplas 180</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_tenaga_amplas180" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Amplas 400-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Amplas 400</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_amplas400" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Amplas 400-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Tenaga Amplas 400</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_tenaga_amplas400" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Dowel-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Dowel</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_dowel" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Dowel-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Tenaga Dowel</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_tenaga_dowel" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>


<!--Plating-->
<div class="col-md-12">

<div class="col-md-4">
  <label class="text-uppercase">Tenaga Flatting</label>
</div>
<div class="col-md-8">
  <div class="input-group">
    <span class="input-group-addon">RP</span>
    <input type="text" class="form-control inputs qprice stt1 tot2" pattern="[0-9]*" id="pembahanan_tenaga_pleting" value="0" onkeypress="return OnlyNum(event)" min="0">
  </div>
  <!-- <hr style="margin-top:5px;margin-bottom:5px;" /> -->
</div>

</div>



<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Total Pembahananan</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control qtotprice inputs" id="tot2" readonly>
    </div>
  </div>
</div>



<div class="col-md-12">

  <hr style="margin-top:5px;margin-bottom:5px;" />
  
</div>

<div class="col-md-12 text-left">

  <label class="text-uppercase">FINISHING</label>
  
</div>

<div class="col-md-12">

  <hr style="margin-top:5px;margin-bottom:5px;" />
  
</div>


<!--Anti getah-->
<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Anti getah</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control inputs qprice stt1 tot3" pattern="[0-9]*" id="finishing_antigetah" value="0" onkeypress="return OnlyNum(event)" min="0">
    </div>
  </div>
</div>

<!--Anti getah-->
<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Tenaga Anti getah</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control inputs qprice stt1 tot3" pattern="[0-9]*" id="finishing_tenaga_antigetah" value="0" onkeypress="return OnlyNum(event)" min="0">
    </div>
  </div>
</div>

<!--Sanding sealer-->
<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Sanding sealer</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control inputs qprice stt1 tot3" pattern="[0-9]*" id="finishing_sandingsealer" value="0" onkeypress="return OnlyNum(event)" min="0">
    </div>
  </div>
</div>

<!--Sanding sealer-->
<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Tenaga SANDING SEALER</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control inputs qprice stt1 tot3" pattern="[0-9]*" id="finishing_tenaga_sandingsealer" value="0" onkeypress="return OnlyNum(event)" min="0">
    </div>
  </div>
</div>

<!--Finishing-->
<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Finishing / Warna</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control inputs qprice stt1 tot3" pattern="[0-9]*" id="finishing_finishing" value="0" onkeypress="return OnlyNum(event)" min="0">
    </div>
  </div>
</div>

<!--Finishing-->
<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Tenaga Finishing / Warna</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control inputs qprice stt1 tot3" pattern="[0-9]*" id="finishing_tenaga_finishing" value="0" onkeypress="return OnlyNum(event)" min="0">
    </div>
  </div>
</div>

<!--Topcoat-->
<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Top Coat</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control inputs qprice stt1 tot3" pattern="[0-9]*" id="finishing_topcoat" value="0" onkeypress="return OnlyNum(event)" min="0">
    </div>
  </div>
</div>

<!--Topcoat-->
<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Tenaga Top Coat</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control inputs qprice stt1 tot3" pattern="[0-9]*" id="finishing_tenaga_topcoat" value="0" onkeypress="return OnlyNum(event)" min="0">
    </div>
  </div>
</div>

<!--Bleaching-->
<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Bleaching</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control inputs qprice stt1 tot3" pattern="[0-9]*" id="finishing_bleaching" value="0" onkeypress="return OnlyNum(event)" min="0">
    </div>
  </div>
</div>

<!--Bleaching-->
<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Tenaga Bleaching</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control inputs qprice stt1 tot3" pattern="[0-9]*" id="finishing_tenaga_bleaching" value="0" onkeypress="return OnlyNum(event)" min="0">
    </div>
  </div>
</div>


<div class="col-md-12">
  <div class="col-md-4">
    <label class="text-uppercase">Total Finishing</label>
  </div>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">RP</span>
      <input type="text" class="form-control qtotprice inputs" id="tot3" readonly>
    </div>
  </div>
</div>


<!-- <div class="col-md-12">

<div class="col-md-4">
  <label>SUB TOTAL 1</label>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon">RP</span> -->
  <input type="hidden" class="form-control qtotprice" id="h_subtotal1" value="0" min="0" readonly>
<!-- </div>
</div>

</div> -->


</div>
</div>

</div>
<!-- </div> -->
</div>

<div class="row">
<div class="col-md-12">
<div class="box box-default">
<div class="box-header with-bordered">
  <h3 class="box-title">PACKING</h3>
  <div class="pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
  </div>
</div>
<div class="box-body">
<div class="row">
<div class="col-md-12">

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_brownpaper"> <b>BROWN PAPER</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
  <tr>
    <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_brownpaperbh" value="0" min="0" onkeyup="hitBrownPaper();" readonly><span class="form-control-feedback">LBR</span></div></td>
    <td class="text-center"><span class="fa fa-times"></span></td>
    <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_brownpaperprice" value="<?= $d['BrownPaper'];?>" readonly></td>
  </tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
  <tr>
    <td class="input-group">
      <span class="input-group-addon">=</span>
      <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_brownpapertotal" value="0" min="0" readonly>
    </td>
  </tr>
</table>
</div>

</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_fs"> <b>FOAM SHEET (2MM)</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
  <tr>
    <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_fsbh" value="0" min="0" onkeyup="hitFs();" readonly><span class="form-control-feedback">MTR</span></div></td>
    <td class="text-center"><span class="fa fa-times"></span></td>
    <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_fsprice" value="<?= $d['FoamSheet'];?>" readonly></td>
  </tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
  <tr>
    <td class="input-group">
      <span class="input-group-addon">=</span>
      <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_fstotal" value="0" min="0" readonly>
    </td>
  </tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_bs"> <b>BUBBLE SHEET</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_bsbh" value="0" min="0" onkeyup="hitBs();" readonly><span class="form-control-feedback">MTR</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_bsprice" value="<?= $d['BubleSheet'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_bstotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><input type="checkbox" class="inputs" id="cb_shreddedpaper"> <b>SHREDDED PAPER (KAWUL)</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="number" class="form-control inputs decimal" id="pk_shreddedpaper" value="0" min="0" onkeyup="hitShreddedPaper();" readonly><span class="form-control-feedback">KG</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_shreddedpaperprice" value="<?= $d['ShreddedPaper'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_shreddedpapertotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><input type="checkbox" class="inputs" id="cb_singleface"> <b>SINGLE FACE</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_singleface" value="0" min="0" onkeyup="hitSingleFace();" readonly><span class="form-control-feedback">MTR</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_singlefaceprice" value="<?= $d['SingleFace'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_singlefacetotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><input type="checkbox" class="inputs" id="cb_plastik"> <b>PLASTIK</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_plastik" value="0" min="0" onkeyup="hitPlastik();" readonly><span class="form-control-feedback">MTR</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_plastikprice" value="<?= $d['Plastik'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_plastiktotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><input type="checkbox" class="inputs" id="cb_mf"> <b>MOULDING FOAM SIZE (CM)</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
  <tr>
    <td><input type="text" class="form-control inputs decimal" id="pk_mfp" min="0" value="0" placeholder="(Panjang)" onchange="setSizeCtnbox();hitMfCBM();" readonly></td>
    <td class="text-center"><span class="fa fa-times"></span></td>
    <td><input type="text" class="form-control inputs decimal" id="pk_mfl" min="0" value="0" placeholder="(Lebar)" onchange="setSizeCtnbox();hitMfCBM();" readonly></td>
    <td class="text-center"><span class="fa fa-times"></span></td>
    <td><input type="text" class="form-control inputs decimal" id="pk_mft" min="0" value="0" placeholder="(Tinggi)" onchange="setSizeCtnbox();hitMfCBM();" readonly></td>
  </tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs stt2" id="pk_mfcbm" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
  <div class="checkbox"><label><b>MOULDING FOAM PRICE</b></label></div>
</div>
<div class="col-md-8">
<table class="table">
  <tr>
    <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_mfcbm1" value="0" min="0" onkeyup="hitMf();" readonly><span class="form-control-feedback"></span></div></td>
    <td class="text-center"><span class="fa fa-times"></span></td>
    <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_mfprice" value="<?= $d['MoldingFoam'];?>" readonly></td>
  </tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
  <tr>
    <td class="input-group">
      <span class="input-group-addon">=</span>
      <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_mftotal" value="0" min="0" readonly>
    </td>
  </tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><input type="checkbox" class="inputs" class="checkbox" id="cb_innerbox"> <b>INNER BOX PRICE</b></label>
</div>
</div>
<!--<div class="col-md-8">
<table class="table">
<tr>
  <td class="pull-right"><label>INNER BOX</label></td>
</tr>
</table>
</div>-->
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">= RP</span>
    <div class="form-group has-feedback">
    <input type="text" pattern="[0-9]*" class="form-control inputs qprice stt2" id="pk_innerboxprice" value="0" min="0" onkeypress="return OnlyNum(event);" onkeyup="subTotal2();" readonly>
    <span class="form-control-feedback"></span>
    </div>
  </td>
</tr>
</table>
</div>
<div class="col-md-4"></div>
<div class="col-md-4"></div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><input type="checkbox" class="inputs" id="cb_styrofoam"> <b>STYROFOAM</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_styrofoam" value="0" min="0" onkeyup="hitStyrofoam();/*setStyrofoam();*/" readonly><span class="form-control-feedback">LBR</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_styrofoamprice" value="<?= $d['Styrofoam2mm'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_styrofoamtotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><input type="checkbox" class="inputs" id="cb_corner"> <b>CORNER</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_corner" value="0" min="0" onkeyup="hitCorner();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice stt2" id="pk_cornerprice" value="<?= $d['Corner'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_cornertotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><input type="checkbox" class="inputs" class="checkbox" id="cb_ctnbox"> <b>CARTON BOX SIZE (CM)</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
  <tr>
    <td><input type="text" class="form-control inputs decimal" id="pk_ctnboxp" min="0" value="0" placeholder="(Panjang)" onchange="setSizeFloatingCtnbox();hitCtnboxCBM();" readonly></td>
    <td class="text-center"><span class="fa fa-times"></span></td>
    <td><input type="text" class="form-control inputs decimal" id="pk_ctnboxl" min="0" value="0" placeholder="(Lebar)" onchange="setSizeFloatingCtnbox();hitCtnboxCBM();" readonly></td>
    <td class="text-center"><span class="fa fa-times"></span></td>
    <td><input type="text" class="form-control inputs decimal" id="pk_ctnboxt" min="0" value="0" placeholder="(Tinggi)" onchange="setSizeFloatingCtnbox();hitCtnboxCBM();" readonly></td>
  </tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
  <tr>
    <td class="input-group">
      <span class="input-group-addon">=</span>
      <input type="text" pattern="[0-9]*" class="form-control inputs" id="pk_ctnboxcbm" value="0" min="0" readonly>
    </td>
  </tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label>
  <b>CARTON BOX PRICE</b> 
  <!-- <button onclick="setKraf('#kraf_cartonbox');krafCtnbox();">Muat ulang data Kraf</button> -->
  <select id="kraf_cartonbox" onchange="krafCtnbox();">
    <?php foreach($kraf as $k):?>
      <option value="<?php echo $k->id_kraf;?>"><?php echo $k->nama_kraf;?></option>
    <?php endforeach;?>
  </select>
</label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs" id="pk_ctnboxcbm1" value="0" min="0" readonly><span class="form-control-feedback"></span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_ctnboxprice" value="<?= $d['CartonBox'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
  <tr>
    <td class="input-group">
      <span class="input-group-addon">=</span>
      <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_ctnboxtotal" value="0" min="0" readonly>
    </td>
  </tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><input type="checkbox" class="inputs" id="cb_cornerluar"> <b>CORNER LUAR</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_cornerluar" value="0" min="0" onkeyup="hitCornerLuar();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_cornerluarprice" value="<?= $d['cornerluar'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_cornerluartotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><input type="checkbox" class="inputs" class="checkbox" id="cb_floatingctnbox"> <b>CARTON BOX LUAR SIZE (CM)</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
  <tr>
    <td><input type="text" class="form-control inputs decimal" id="pk_floatingctnboxp" min="0" value="0" placeholder="(Panjang)" onchange="setSizeCrt();hitFloatingCtnboxCBM();" readonly></td>
    <td class="text-center"><span class="fa fa-times"></span></td>
    <td><input type="text" class="form-control inputs decimal" id="pk_floatingctnboxl" min="0" value="0" placeholder="(Lebar)" onchange="setSizeCrt();hitFloatingCtnboxCBM();" readonly></td>
    <td class="text-center"><span class="fa fa-times"></span></td>
    <td><input type="text" class="form-control inputs decimal" id="pk_floatingctnboxt" min="0" value="0" placeholder="(Tinggi)" onchange="setSizeCrt();hitFloatingCtnboxCBM();" readonly></td>
  </tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
  <tr>
    <td class="input-group">
      <span class="input-group-addon">=</span>
      <input type="text" pattern="[0-9]*" class="form-control inputs" id="pk_floatingctnboxcbm" value="0" min="0" readonly>
    </td>
  </tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label>
  <b>CARTON BOX LUAR PRICE</b> 
  <!-- <button onclick="setKraf('#kraf_floatingcartonbox');krafFloatingCtnbox();">Muat ulang data Kraf</button> -->
  <select id="kraf_floatingcartonbox" onchange="krafFloatingCtnbox();">
    <?php foreach($kraf as $k0):?>
      <option value="<?php echo $k0->id_kraf;?>"><?php echo $k0->nama_kraf;?></option>
    <?php endforeach;?>
  </select>
</label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs" id="pk_floatingctnboxcbm1" value="0" min="0" readonly><span class="form-control-feedback"></span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_floatingctnboxprice" value="<?= $d['CartonBox'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
  <tr>
    <td class="input-group">
      <span class="input-group-addon">=</span>
      <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_floatingctnboxtotal" value="0" min="0" readonly>
    </td>
  </tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><input type="checkbox" class="inputs" id="cb_ukcrt"> <b>CRATE SIZE</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><input type="text" class="form-control inputs decimal" id="pk_crtp" placeholder="(Panjang)" oninput="hitCrtCBM();" min="0" value="0" readonly></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" class="form-control inputs decimal" id="pk_crtl" placeholder="(Lebar)" oninput="hitCrtCBM();" min="0" value="0" readonly></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" class="form-control inputs decimal" id="pk_crtt" placeholder="(Tinggi)" oninput="hitCrtCBM();" min="0" value="0" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs" id="pk_crtcbm" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
<label><b>CRATE PRICE (JML STICK & PAPAN)</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_crtcbm1" value="0" min="0" onkeyup="hitHargaCrt();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_crtprice" value="<?= $d['Craten'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_crttotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
  <label>MAN POWER</label>
</div>

<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">= RP</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qprice stt2" id="pk_manpowerprice" value="0" min="0" onkeypress="return OnlyNum(event);" onkeyup="subTotal2();">
  </td>
</tr>
</table>
</div>
<div class="col-md-4"></div>
<div class="col-md-4"></div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
  <label>TRUCK. COST</label>
</div>
<div class="col-md-8">
<table class="table">
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_truckingcostprice" value="<?= $d['Trucking'];?>" readonly></td>
  <td class="text-center">/</td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs" id="pk_truckingcostkap" value="<?= $d['KapasitaTruck'];?>" min="0" readonly></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" class="form-control inputs" id="pk_truckingcostcbm" value="0" min="0" oninput="hitTrucking();"></td>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_truckingtotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label>CONT. COST</label>
</div>
<div class="col-md-8">
<table class="table">
  <tr>
    <td><input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_containercostprice" value="<?= $d['Conteiner'];?>" readonly></td>
    <td class="text-center">/</td>
    <td><input type="text" pattern="[0-9]*" class="form-control inputs" id="pk_containercostkap" value="<?= $d['KapasitasContainer'];?>" readonly></td>
    <td class="text-center"><span class="fa fa-times"></span></td>
    <td><input type="text" class="form-control inputs decimal" id="pk_containercostcbm" value="0" min="0" oninput="hitContainer();"></td>
  </tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_containercosttotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_ispn"> <b>ISPN</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_ispn" value="0" min="0" onkeypress="return OnlyNum(event);" onkeyup="hitIspn();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_ispnprice" value="<?= $d['ISPN'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_ispntotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
  <div class="col-md-12">
    <div class="checkbox">
      <label><input type="checkbox" class="inputs" id="cb_sponati"> <b>SPON ATI</b></label>
    </div>
  </div>
  <div class="col-md-8">
    <table class="table">
      <tr>
        <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_sponati" value="0" min="0" onkeyup="hitSponati();" readonly><span class="form-control-feedback">PCS</span></div></td>
        <td class="text-center"><span class="fa fa-times"></span></td>
        <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_sponatiprice" value="<?= $d['sponati'];?>" readonly></td>
      </tr>
    </table>
  </div>
  <div class="col-md-4">
    <table class="table">
    <tr>
      <td class="input-group">
        <span class="input-group-addon">=</span>
        <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_sponatitotal" value="0" min="0" readonly>
      </td>
    </tr>
    </table>
  </div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
  <div class="form-group">
    <div class="col-md-12">
      <div class="checkbox">
        <label><input type="checkbox" class="inputs" id="cb_fisher"> <b>FISHER</b></label>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table">
        <tr>
          <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_fisher" value="0" min="0" onkeyup="hitFisher();" readonly><span class="form-control-feedback">PCS</span></div></td>
          <td class="text-center"><span class="fa fa-times"></span></td>
          <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_fisherprice" value="<?= $d['fisher'];?>" readonly></td>
        </tr>
      </table>
    </div>
    <div class="col-md-4">
      <table class="table">
        <td class="input-group">
          <span class="input-group-addon">=</span>
          <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_fishertotal" value="0" min="0" readonly>
        </td>
      </table>
    </div>
  </div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
  <div class="form-group">
    <div class="col-md-12">
      <div class="checkbox">
        <label><input type="checkbox" class="inputs" id="cb_screw"> <b>SCREW</b></label>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table">
        <tr>
          <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_screw" value="0" min="0" onkeyup="hitScrew();" readonly><span class="form-control-feedback">PCS</span></div></td>
          <td class="text-center"><span class="fa fa-times"></span></td>
          <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_screwprice" value="<?= $d['screw'];?>" readonly></td>
        </tr>
      </table>
    </div>
    <div class="col-md-4">
      <table class="table">
        <td class="input-group">
          <span class="input-group-addon">=</span>
          <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_screwtotal" value="0" min="0" readonly>
        </td>
      </table>
    </div>
  </div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
  <div class="form-group">
    <div class="col-md-12">
      <div class="checkbox">
        <label><input type="checkbox" class="inputs" id="cb_kuncipas"> <b>KUNCI PAS</b></label>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table">
        <tr>
          <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_kuncipas" value="0" min="0" onkeyup="hitKuncipas();" readonly><span class="form-control-feedback">PCS</span></div></td>
          <td class="text-center"><span class="fa fa-times"></span></td>
          <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_kuncipasprice" value="<?= $d['kuncipas'];?>" readonly></td>
        </tr>
      </table>
    </div>
    <div class="col-md-4">
      <table class="table">
        <td class="input-group">
          <span class="input-group-addon">=</span>
          <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_kuncipastotal" value="0" min="0" readonly>
        </td>
      </table>
    </div>
  </div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
  <div class="form-group">
    <div class="col-md-12">
      <div class="checkbox">
        <label><input type="checkbox" class="inputs" id="cb_babat5"> <b>ABSORB DRY (5 GR)</b></label>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table">
        <tr>
          <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_babat5" value="0" min="0" onkeyup="hitBabat5();" readonly><span class="form-control-feedback">PCS</span></div></td>
          <td class="text-center"><span class="fa fa-times"></span></td>
          <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_babatprice5" value="<?= $d['babat_5'];?>" readonly></td>
        </tr>
      </table>
    </div>
    <div class="col-md-4">
      <table class="table">
        <td class="input-group">
          <span class="input-group-addon">=</span>
          <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_babattotal5" value="0" min="0" readonly>
        </td>
      </table>
    </div>
  </div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
  <div class="form-group">
    <div class="col-md-12">
      <div class="checkbox">
        <label><input type="checkbox" class="inputs" id="cb_babat25"> <b>ABSORB DRY (25 GR)</b></label>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table">
        <tr>
          <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_babat25" value="0" min="0" onkeyup="hitBabat25();" readonly><span class="form-control-feedback">PCS</span></div></td>
          <td class="text-center"><span class="fa fa-times"></span></td>
          <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_babatprice25" value="<?= $d['babat_25'];?>" readonly></td>
        </tr>
      </table>
    </div>
    <div class="col-md-4">
      <table class="table">
        <td class="input-group">
          <span class="input-group-addon">=</span>
          <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_babattotal25" value="0" min="0" readonly>
        </td>
      </table>
    </div>
  </div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
  <div class="form-group">
    <div class="col-md-12">
      <div class="checkbox">
        <label><input type="checkbox" class="inputs" id="cb_babat"> <b>ABSORB DRY (50 GR)</b></label>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table">
        <tr>
          <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_babat" value="0" min="0" onkeyup="hitBabat();" readonly><span class="form-control-feedback">PCS</span></div></td>
          <td class="text-center"><span class="fa fa-times"></span></td>
          <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_babatprice" value="<?= $d['babat'];?>" readonly></td>
        </tr>
      </table>
    </div>
    <div class="col-md-4">
      <table class="table">
        <td class="input-group">
          <span class="input-group-addon">=</span>
          <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_babattotal" value="0" min="0" readonly>
        </td>
      </table>
    </div>
  </div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
  <div class="form-group">
    <div class="col-md-12">
      <div class="checkbox">
        <label><input type="checkbox" class="inputs" id="cb_babat250"> <b>ABSORB DRY (250 GR)</b></label>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table">
        <tr>
          <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_babat250" value="0" min="0" onkeyup="hitBabat250();" readonly><span class="form-control-feedback">PCS</span></div></td>
          <td class="text-center"><span class="fa fa-times"></span></td>
          <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_babatprice250" value="<?= $d['babat_250'];?>" readonly></td>
        </tr>
      </table>
    </div>
    <div class="col-md-4">
      <table class="table">
        <td class="input-group">
          <span class="input-group-addon">=</span>
          <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_babattotal250" value="0" min="0" readonly>
        </td>
      </table>
    </div>
  </div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_jhook"> <b>J.HOOK</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
  <tr>
    <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_jhook" value="0" min="0" onkeyup="hitJhook();" readonly><span class="form-control-feedback">PCS</span></div></td>
    <td class="text-center"><span class="fa fa-times"></span></td>
    <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_jhookprice" value="<?= $d['JHook'];?>" readonly></td>
  </tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_jhooktotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_dring"> <b>D.RING</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_dring" value="0" min="0" onkeyup="hitDring();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_dringprice" value="<?= $d['Dring'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_dringtotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_ringhanger"> <b>HANGER</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_ringhanger" value="0" min="0" onkeyup="hitRinghanger();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_ringhangerprice" value="<?= $d['Hanger'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_ringhangertotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_keyhole"> <b>KEY HOLE</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_keyhole" value="0" min="0" onkeyup="hitKeyhole();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_keyholeprice" value="<?= $d['Keyhole'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_keyholetotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_sawteeth"> <b class="text-uppercase">Sawteeth</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_sawteeth" value="0" min="0" onkeyup="hitSawteeth();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_sawteethprice" value="<?= $d['sawteeth'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_sawteethtotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_glides"> <b>GLIDES</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_glides" value="0" min="0" onkeyup="hitGlides();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_glidesprice" value="<?= $d['glides'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_glidestotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<!--BAUT JCBC-->
<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_bautjcbc"> <b>BAUT JCBC</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_bautjcbc" value="0" min="0" onkeyup="hitBautjcbc();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_bautjcbcprice" value="<?= $d['bautjcbc'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_bautjcbctotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<!--NANASAN-->
<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_nanasan"> <b>NANASAN</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_nanasan" value="0" min="0" onkeyup="hitNanasan();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_nanasanprice" value="<?= $d['nanasan'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_nanasantotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<!--KUNCI L-->
<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<div class="checkbox">
  <label><input type="checkbox" class="inputs" id="cb_kuncil"> <b>KUNCI L</b></label>
</div>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td><div class="form-group has-feedback"><input type="text" class="form-control inputs decimal" id="pk_kuncil" value="0" min="0" onkeyup="hitKuncil();" readonly><span class="form-control-feedback">PCS</span></div></td>
  <td class="text-center"><span class="fa fa-times"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qprice" id="pk_kuncilprice" value="<?= $d['kuncil'];?>" readonly></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice stt2" id="pk_kunciltotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
  <hr />
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label></label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td class="pull-right"><label>TOTAL PACKING</label></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_subtotal2" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>



</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="box box-default">
<div class="box-header with-bordered">
  <h3 class="box-title">PRICE</h3>
  <div class="pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
  </div>
</div>
<div class="box-body">

<div class="row">
<div class="col-md-12">

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label>FOB PRICE</label>
</div>
<div class="col-md-8">
<input type="hidden" pattern="[0-9]*" class="form-control qtotprice" id="pk_fob1" value="0" min="0" readonly>
<input type="hidden" pattern="[0-9]*" class="form-control qtotprice" id="pk_fob2" value="0" min="0" readonly>
<table class="table">
<tr>
  <!-- <td><input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_fob1" value="0" min="0" readonly></td>
  <td class="text-center"><span class="fa fa-plus"></span></td>
  <td><input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_fob2" value="0" min="0" readonly></td> -->
  <td>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="tot1_total" value="0" min="0" readonly>
  </td>
  <td class="text-center">
    <span class="fa fa-plus"></span>
  </td>
  <td>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="tot2_total" value="0" min="0" readonly>
  </td>
  <td class="text-center">
    <span class="fa fa-plus"></span>
  </td>
  <td>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="tot3_total" value="0" min="0" readonly>
  </td>
  <td class="text-center">
    <span class="fa fa-plus"></span>
  </td>
  <td>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_subtotal2_total" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_fobtotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label></label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td style="text-align: right;width:60%;"><label>OVER HEAD</label></td>
  <td class="pull-right">
    <div class="input-group">
    <input type="text" pattern="[0-9]*" class="form-control inputs" id="pk_overhead" value="<?= $d['OverHead'];?>" min="0" onkeyup="hitOverhead();">
    <span class="input-group-addon">%</span>
    </div>
  </td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_overheadtotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label></label>
</div>
<div class="col-md-8">

</div>
<div class="col-md-4">

  <hr style="margin-top:5px;margin-bottom:5px;" />
  
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label></label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td class="pull-right"><label>SUB TOTAL OVER HEAD</label></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_subtotaloverhead" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label></label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td style="text-align: right;width:60%;"><label class="text-uppercase">MARGIN</label></td>
  <td class="pull-right">
    <div class="input-group">
    <input type="text" pattern="[0-9]*" class="form-control inputs" id="pk_margin" value="<?= $d['Margin'];?>" min="0" onkeyup="hitMargin();">
    <span class="input-group-addon">%</span>
    </div>
  </td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_margintotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label></label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td class="pull-right"><label>SUB TOTAL MARGIN</label></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_subtotalmargin" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label></label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td style="text-align: right;width:60%;"><label>TAX</label></td>
  <td class="pull-right">
    <div class="input-group">
      <input type="text" pattern="[0-9]*" class="form-control inputs" id="pk_taxprice" value="<?= $d['Tax'];?>" min="0" onkeyup="hitTax()">
      <span class="input-group-addon">%</span>
    </div>
  </td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_taxtotal" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label></label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td class="pull-right"><label>TOTAL</label></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs qtotprice" id="pk_total" value="0" min="0" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label></label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td class="pull-right"><label>DEVIDED</label></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs" id="pk_devided" value="<?php echo $d['devided'];?>" oninput="hitDevided();">
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label></label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td class="pull-right"><label>USD PRICE</label></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs" id="pk_usdprice" readonly>
  </td>
</tr>
</table>
</div>
</div>
</div>

<div class="col-md-12" style="margin-top:-20px;">
<div class="form-group">
<div class="col-md-12">
<label></label>
</div>
<div class="col-md-8">
<table class="table">
<tr>
  <td class="pull-right"><label>QUOTE</label></td>
</tr>
</table>
</div>
<div class="col-md-4">
<table class="table">
<tr>
  <td class="input-group">
    <span class="input-group-addon">=</span>
    <input type="text" pattern="[0-9]*" class="form-control inputs" id="pk_quote">
  </td>
</tr>
</table>
</div>
</div>
</div>

</div>
</div>

</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="box box-default">
<div class="box-header with-bordered">
  <h3 class="box-title">Catatan Tambahan</h3>
  <div class="pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
  </div>
</div>
<div class="box-body">
  <div class="form-group">
    <label></label>
    <textarea class="form-control p-text inputs" id="catatan" style="height:350px;"></textarea>
  </div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="box box-default">
<div class="box-body">
<div class="text-center">
  <!-- <a class="btn btn-default inputs" href="<?= site_url('main');?>">KEMBALI KE QUOTATION</a> -->
  <button class="btn btn-primary inputs" onclick="presave();"><span id="btnsave_icon"></span> SIMPAN</button>
  <!-- <button class="btn btn-info inputs" onclick="preprintonly();"><i class="fa fa-print"></i> PRINT SAJA TANPA SIMPAN</button>
  <button class="btn btn-warning" onclick="prereload();">Buat baru</button> -->
</div>
</div>
</div>
</div>
</div>

</section>

<!--TEMP-->
<input type="hidden" id="item_dim_totcbm">
<input type="hidden" id="item_dimp_total">
<input type="hidden" id="jumlah_item">

<!--MAX DIM ITEM-->
<input type="hidden" id="item_dim_maxp">
<input type="hidden" id="item_dim_maxl">
<input type="hidden" id="item_dim_maxt">

<!--KETEBALAN-->
<input type="hidden" id="k_mf" value="<?= $d['k_mf'];?>">
<input type="hidden" id="k_ctn" value="<?= $d['k_ctn'];?>">
<input type="hidden" id="k_crt" value="<?= $d['k_crt'];?>">
<input type="hidden" id="k_sr" value="<?= $d['k_sr'];?>">
<input type="hidden" id="k_floatingctn" value="<?= $d['k_floatingctn'];?>">

<script type="text/javascript" src="<?= base_url();?>plugin/jquery-mask/dist/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

<script type="text/javascript">
/*function initPhoto(){
  //var n=$('#item_fotoold').val();
  //if(n==""){
    $('#item_foto').fileinput({
    overwriteInitial: false,
    showUpload: false, // hide upload button
    minFileCount: 0,
    maxFileCount: 1,
    autoReplace: true,
    showClose: false,
    //maxFileSize: 100, // 100kb
    browseOnZoneClick: true,
    //showBrowse: false,
    initialPreviewAsData: true // identify if you are sending preview data only and not the markup
    });
  //}
}*/

/*function setPhoto(n){
  var url='<?= base_url();?>assets/photo_items/'+n;
  $('#item_foto').fileinput({
    overwriteInitial: true,
    showUpload: false, // hide upload button
    minFileCount: 0,
    maxFileCount: 1,
    autoReplace: true,
    showClose: false,
    showUpload: false,
    showRemove: false,
    showDrag: false,
    showUploadedThumbs: false,
    //maxFileSize: 100, // 100kb
    browseOnZoneClick: true,
    //showBrowse: false,
    initialPreviewAsData: true, // identify if you are sending preview data only and not the markup
    initialPreview: [url],
  });
}*/

function setKraf(id){
  $.ajax({
    url:'<?php echo base_url();?>kraf/setkraf',
    dataType:'JSON',
    beforeSend:function(){
      $(id).empty().trigger('change');
      $(id).append('<option value="">Sedang memuat...</option>');
      $(id).prop('disabled',true);
    },success:function(result){
      $(id).empty().trigger('change');
      
      var option = '';
      for(var i=0;i<result.length;i++){
        option+='<option value="'+result[i].id_kraf+'">'+result[i].nama_kraf+'</option>';
      }

      $(id).append(option);

      $(id).prop('disabled',false);
    },error:function(xhr){
      $.alert(xhr.responseText);
    }
  });
}

function prereload(){
  $.confirm({
        title: 'Konfirmasi!',
        content: 'Apakah Anda yakin ingin membuat baru ?',
        icon: 'fa fa-exclamation',
        animation: 'scale',
        closeAnimation: 'zoom',
        buttons: {
            Ya: {
                //text: '',
                btnClass: 'btn-blue',
                action: function(){
                    location.href="<?= site_url('inputQuotation');?>";
                    //location.reload(1);
                }
            },
            Tidak: function(){
                
            }
        }
    });
}

function getKursBca(){
  $.ajax({
    url:'https://kurs.web.id/api/v1/bca',
    dataType:'JSON',
    success:function(result){
      var kbeli=parseInt(result.beli);
      var kjual=parseInt(result.jual);
      $('#pk_devided').val(formatRupiah((kbeli+kjual)/2));
    },error:function(xhr){
      $.alert(xhr.responseText);
    }
  });
}

function validKode(){
  var kode = $('#item_kode').val();
  var res = kode.replace(' ','');
  $('#item_kode').val(res);
}

function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
          $('#photo_view').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
}

function OnlyNum(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
 
  return false;
  return true;
}

function custom_bulat(nilai,pembulat,id)
{
    var hasil = (Math.ceil(parseInt(nilai))%parseInt(pembulat) == 0) ? Math.ceil(parseInt(nilai)) : Math.round((parseInt(nilai)+parseInt(pembulat)/2)/parseInt(pembulat))*parseInt(pembulat);
    $(id).val(hasil);
    //return hasil;
}

// Sub total 1
function subTotal1(){
  //var res=(parseFloat($('#h_spprice').unmask().val())+parseFloat($('#h_fin').unmask().val())+parseFloat($('#h_glass').unmask().val())+parseFloat($('#h_mirror').unmask().val())+parseFloat($('#h_metal').unmask().val())+parseFloat($('#h_brass').unmask().val())+parseFloat($('#h_aluminium').unmask().val())+parseFloat($('#h_candle').unmask().val())+parseFloat($('#h_stone').unmask().val())+parseFloat($('#h_base').unmask().val())+parseFloat($('#h_backing').unmask().val())+parseFloat($('#h_lain1').unmask().val())+parseFloat($('#h_lain2').unmask().val())+parseFloat($('#h_jasaoven').val()));
  
  t1=0;
  $('.tot1').each(function(){
    t1 += parseFloat($(this).unmask().val());
  });

  $('#tot1').val(parseFloat(t1));
  $('#tot1_total').val(parseFloat(t1));

  t2=0;
  $('.tot2').each(function(){
    t2 += parseFloat($(this).unmask().val());
  });

  $('#tot2').val(parseFloat(t2));
  $('#tot2_total').val(parseFloat(t2));

  t3=0;
  $('.tot3').each(function(){
    t3 += parseFloat($(this).unmask().val());
  });

  $('#tot3').val(parseFloat(t3));
  $('#tot3_total').val(parseFloat(t3));

  res=0;
  $('.stt1').each(function(){
    res += parseFloat($(this).unmask().val());
  });
  $('#h_subtotal1').val(parseFloat(res));
  $('#pk_fob1').val(parseFloat(res));
  hitFob();

  $('.qprice').mask('000.000.000.000',{reverse:true,optional:true});
}

function subTotal2(){
  var res=(parseFloat($('#pk_brownpapertotal').val())+parseFloat($('#pk_fstotal').val())+parseFloat($('#pk_bstotal').val())+parseFloat($('#pk_shreddedpapertotal').val())+parseFloat($('#pk_singlefacetotal').val())+parseFloat($('#pk_plastiktotal').val())+parseFloat($('#pk_mftotal').val())+parseFloat($('#pk_innerboxprice').val().replace('.',''))+parseFloat($('#pk_styrofoamtotal').val())+parseFloat($('#pk_cornertotal').val())+parseFloat($('#pk_ctnboxtotal').val())+parseFloat($('#pk_cornerluartotal').val())+parseFloat($('#pk_floatingctnboxtotal').val())+parseFloat($('#pk_crttotal').val())+parseFloat($('#pk_manpowerprice').val().replace('.',''))+parseFloat($('#pk_truckingtotal').val())+parseFloat($('#pk_containercosttotal').val())+parseFloat($('#pk_ispntotal').val())+parseFloat($('#pk_jhooktotal').val())+parseFloat($('#pk_dringtotal').val())+parseFloat($('#pk_ringhangertotal').val())+parseFloat($('#pk_keyholetotal').val())+parseFloat($('#pk_babattotal').val())+parseFloat($('#pk_babattotal25').val())+parseFloat($('#pk_babattotal5').val())+parseFloat($('#pk_sponatitotal').val())+parseFloat($('#pk_kuncipastotal').val())+parseFloat($('#pk_fishertotal').val())+parseFloat($('#pk_screwtotal').val())+parseFloat($('#pk_glidestotal').val())+parseFloat($('#pk_babattotal250').val())+parseFloat($('#pk_sawteethtotal').val())+parseFloat($('#pk_bautjcbctotal').val())+parseFloat($('#pk_nanasantotal').val())+parseFloat($('#pk_kunciltotal').val()));
  $('#pk_subtotal2').val(res);
  $('#pk_subtotal2_total').val(res);
  $('#pk_fob2').val(res);
  hitFob();
}

/* HITUNG CBM */

//HITUNG TOTAL ITEM P
function hitTotalItemP(){
  var tot = 0;
  var c = 0;
  $('.item-dim-p').each(function(){
    var v=$(this).val();
    if(v!=0){
      tot+=parseFloat(v);
      c++;
    }
  });

  $('#item_dimp_total').val(tot);
  $('#jumlah_item').val(c);
  //setSize();
}
//HITUNG TOTAL ITEM P

function itemDimSCBM(){
  var p=$('#item_dims_p').val();
  var l=$('#item_dims_l').val();
  var t=$('#item_dims_t').val();
  var res=(p*l*t)/1000000;
  $('#item_dims_cbm').val(res.toFixed(4));

  itemDimLMax();
  itemDimTMax();

  //setCtnboxMfP();
  //setCtnboxMfL();
  //setCtnboxMfT();
  hitTotalCBM();
  hitTotalItemP();
  setSize();
}

function itemDimMCBM(){
  var p=$('#item_dimm_p').val();
  var l=$('#item_dimm_l').val();
  var t=$('#item_dimm_t').val();
  var res=(p*l*t)/1000000;
  $('#item_dimm_cbm').val(res.toFixed(4));

  itemDimLMax();
  itemDimTMax();

  //setCtnboxMfP();
  //setCtnboxMfL();
  //setCtnboxMfT();
  hitTotalCBM();
  hitTotalItemP();
  setSize();
}

function itemDimLCBM(){
  var p=$('#item_diml_p').val();
  var l=$('#item_diml_l').val();
  var t=$('#item_diml_t').val();
  var res=(p*l*t)/1000000;
  $('#item_diml_cbm').val(res.toFixed(4));
  
  itemDimLMax();
  itemDimTMax();

  //setCtnboxMfP();
  //setCtnboxMfL();
  //setCtnboxMfT();
  hitTotalCBM();
  hitTotalItemP();
  setSize();
}

function itemDimPMax(){
  /*if($('.item-dim-p').val()!=0 || $('.item-dim-p').val()!=''){
    alert($('.item-dim-p').length);
  }else{
    alert($('.item-dim-p').length);
  }*/
  var max = 0;
  $('.item-dim-p').each(function() {
    var value = parseInt($(this).val());
    max = (value > max) ? value : max;
  });
  $('#item_dim_maxp').val(value);
  //alert(max);
}

function itemDimLMax(){
  var max = 0;
  var value=0;
  $('.item-dim-l').each(function() {
    value = parseFloat($(this).val());
    max = (value > max) ? value : max;
  });
  //console.log(max);
  $('#item_dim_maxl').val(max);
  //alert(max);
}

function itemDimTMax(){
  var max = 0;
  var value=0;
  $('.item-dim-t').each(function() {
    value = parseFloat($(this).val());
    max = (value > max) ? value : max;
  });
  $('#item_dim_maxt').val(max);
  //alert(max);
}

function krafCtnbox(){
  var d = {
    id:$('#kraf_cartonbox').val()
  };

  $.ajax({
    url:'<?php echo base_url();?>kraf/getkraf?id='+d.id,
    dataType:'JSON',
    success:function(result){
      $('#pk_ctnboxprice').val(result.harga_kraf);
      $('.qprice').mask('000.000.000.000',{reverse:true,optional:true});
      hitHargaCtnbox();
      setTrucking();
      setContainer();
    },error:function(xhr){
      $.alert(xhr.responseText);
    }
  });
}

function hitCtnboxCBM(){
  //var tebal=$('#k_ctn').val();
  var p=parseFloat($('#pk_ctnboxp').val());
  var l=parseFloat($('#pk_ctnboxl').val());
  var t=parseFloat($('#pk_ctnboxt').val());
  var res=(p*l*t)/1000000;
  var res1=parseFloat(res.toFixed(4));
  $('#pk_ctnboxcbm').val(res1.toFixed(4));
  //$('#pk_ctnboxcbm1').val(res1.toFixed(4));
  hitHargaCtnbox();
  setTrucking();
  setContainer();
}

function hitFloatingCtnboxCBM(){
  //var tebal=$('#k_ctn').val();
  var p=parseFloat($('#pk_floatingctnboxp').val());
  var l=parseFloat($('#pk_floatingctnboxl').val());
  var t=parseFloat($('#pk_floatingctnboxt').val());
  var res=(p*l*t)/1000000;
  var res1=parseFloat(res.toFixed(4));
  $('#pk_floatingctnboxcbm').val(res1.toFixed(4));
  //$('#pk_ctnboxcbm1').val(res1.toFixed(4));
  hitHargaFloatingCtnbox();
  setTrucking();
  setContainer();
}

function hitMfCBM(){
  var p=parseFloat($('#pk_mfp').val());
  var l=parseFloat($('#pk_mfl').val());
  var t=parseFloat($('#pk_mft').val());
  var res=(p*l*t)/1000000;
  var res1=parseFloat(res.toFixed(4));
  $('#pk_mfcbm').val(res1);
  $('#pk_mfcbm1').val(res1);
  hitMf();
}

function hitCrtCBM(){
  var p=parseFloat($('#pk_crtp').val());
  var l=parseFloat($('#pk_crtl').val());
  var t=parseFloat($('#pk_crtt').val());
  var res=(p*l*t)/1000000;
  $('#pk_crtcbm').val(res.toFixed(4));
  setTrucking();
  setContainer();
}

function hitTotalCBM(){
  var hit=0;
  var res=0;
  $('.item-dim-cbm').each(function(){
    var v=$(this).val();
    if(v!=''){
      if(v!=0){
        hit+=parseFloat(v);
        res=parseFloat(hit);
      }
    }
  });
  console.log('Total CBM: '+res);
  $('#item_dim_totcbm').val(res.toFixed(4));
  //$('#item_totcbm').val(res.toFixed(4));

  if($('#cb_jasaoven').is(':checked')){
    hitJasaoven();
  }
  
  updMf();
  updCtnbox();
  //updCrt();
  setTrucking();
  //setStyrofoam();
  setSize();
  subTotal2();
  setContainer();
}

/* HITUNG CBM */

/* HITUNG SIZE */
function setMfP(){
  var hit=0;
  var res=0;
  var t_mf=0;
  var k_ctn=parseFloat($('#k_ctn').val());
  var k_mf = parseFloat($('#k_mf').val());
  var c=0;
  //var c1=0;
  //res=k_ctn;
  $('.item-dim-p').each(function(){
    var v=$(this).val();
    if(v!=0){
      c++;
      //c1++;
      hit+=parseFloat(v);//Total pjg
      //res=parseFloat(hit)+(c*k_ctn);
      //res=parseFloat(hit)+(k_mf);
      //res=parseFloat(hit)+(c*k_mf)+((c-1)*k_ctn);
      console.log('aa index : '+c+', bb kali : '+k_ctn+', hasil p : '+hit+', res '+res);
    }

    
  });
  if(c>1){
    res=hit+(parseFloat(k_mf)*(c-1));
  }
  res=res+(k_ctn*2);

  var res1=res.toFixed(2).replace(',','.');
  $('#pk_mfp').val(res1);
  hitMfCBM();
}

function setMfL(){
  itemDimLMax();
  var k_ctn=parseFloat($('#k_ctn').val());
  var l=parseFloat($('#item_dim_maxl').val());
  var res=l+(2*k_ctn);

  /*var c=1;
  $('.item-dim-l').each(function(){
    var v=$(this).val();
    if(v!=0){
      c++;
      hit+=parseFloat(v);
      res=parseFloat(hit)+(c*k_ctn);
      console.log(res);
    }
  });*/

  $('#pk_mfl').val(Math.round(res));
  hitMfCBM();
}

function setMfT(){
  itemDimTMax();
  var k_ctn=parseFloat($('#k_ctn').val());
  var l=parseFloat($('#item_dim_maxt').val());
  var res=l+(2*k_ctn);

  /*var c=1;
  $('.item-dim-l').each(function(){
    var v=$(this).val();
    if(v!=0){
      c++;
      hit+=parseFloat(v);
      res=parseFloat(hit)+(c*k_ctn);
      console.log(res);
    }
  });*/

  $('#pk_mft').val(Math.round(res));
  hitMfCBM();
}

//ALGORITMA
function setSize(){
  var total_item_p = parseFloat($('#item_dimp_total').val());
  var jml_item = parseFloat($('#jumlah_item').val());
  var l = parseFloat($('#item_dim_maxl').val());
  var t = parseFloat($('#item_dim_maxt').val());

  //Panjang
  var p_item = 0;
  var p_mol = 0;
  var p_sf = 0;
  var p_box = 0;
  var p_crt = 0;

  //Lebar
  var l_item = 0;
  var l_mol = 0;
  var l_sf = 0;
  var l_box = 0;
  var l_crt = 0;

  //TInggi
  var t_item = 0;
  var t_mol = 0;
  var t_sf = 0;
  var t_box = 0;
  var t_crt = 0;

  //Set ketebalan
  var k_ctn = parseFloat($('#k_ctn').val());
  var k_crt = parseFloat($('#k_crt').val());
  var k_sf = parseFloat($('#k_sr').val());
  var k_mf = parseFloat($('#k_mf').val());

  p_item = total_item_p;

  if($('#cb_mf').is(':checked')){
    p_item = p_item + ((jml_item-1)*3) + (2*k_mf);
    l = l + (2*k_mf);
    t = t + (2*k_mf);
    $('#pk_mfp').val(p_item.toFixed(2));
    $('#pk_mfl').val(l.toFixed(2));
    $('#pk_mft').val(t.toFixed(2));
    hitMfCBM();
  }
   
  if($('#cb_styrofoam').is(':checked')){
    p_item = p_item + (2*k_sf);
    l = l + (2*k_sf);
    t = t + (2*k_sf);
  }

  if($('#cb_ctnbox').is(':checked')){
    //Sorting
    var ar_sort_desc = [p_item,l,t];

    ar_sort_desc.sort(function(a,b){
      return b-a;
    });

    if($('#cb_mf').is(':checked')){
      //Sorting, jika ada mf maka bentuk harus berdiri
      var set_p = ar_sort_desc[0];
      var set_l = 0;
      var set_t = 0;

      if(ar_sort_desc[1] <= ar_sort_desc[2]){
        set_l = ar_sort_desc[1];
        set_t = ar_sort_desc[2];
      }else{
        set_l = ar_sort_desc[2];
        set_t = ar_sort_desc[1];
      }

      p_item = set_p + (2*k_ctn);
      l = set_l + (2*k_ctn);
      t = set_t + (2*k_ctn);
      
    }else{
      //Sorting, jika tidak ada mf maka bentuk biasa tidur

      var set_p = ar_sort_desc[0];
      var set_l = ar_sort_desc[1];
      var set_t = ar_sort_desc[2];

      p_item = set_p + (2*k_ctn);
      l = set_l + (2*k_ctn);
      t = set_t + (2*k_ctn);
    }

    $('#pk_ctnboxp').val(p_item.toFixed(2));
    $('#pk_ctnboxl').val(l.toFixed(2));
    $('#pk_ctnboxt').val(t.toFixed(2));
    hitCtnboxCBM();
  }

  if($('#cb_ukcrt').is(':checked')){
    p_item = p_item + (2*k_crt);
    l = l + (2*k_crt);
    t = t + (2*k_crt);
    $('#pk_crtp').val(p_item.toFixed(2));
    $('#pk_crtl').val(l.toFixed(2));
    $('#pk_crtt').val(t.toFixed(2));
    hitCrtCBM();
  }

  setTrucking();
  setContainer();
}

//Atur ukuran moulding foam
function setSizeMf(){
  var total_item_p = parseFloat($('#item_dimp_total').val());
  var jml_item = parseFloat($('#jumlah_item').val());
  var l = parseFloat($('#item_dim_maxl').val());
  var t = parseFloat($('#item_dim_maxt').val());

  //Panjang
  var p_item = 0;
  var p_mol = 0;

  //Lebar
  var l_item = 0;
  var l_mol = 0;

  //TInggi
  var t_item = 0;
  var t_mol = 0;

  //Set ketebalan
  var k_mf = parseFloat($('#k_mf').val());

  p_item = total_item_p;

  if($('#cb_mf').is(':checked')){
    p_item = p_item + ((jml_item-1)*3) + (2*k_mf);
    l = l + (2*k_mf);
    t = t + (2*k_mf);
    $('#pk_mfp').val(p_item.toFixed(2));
    $('#pk_mfl').val(l.toFixed(2));
    $('#pk_mft').val(t.toFixed(2));
    hitMfCBM();
  }

  setTrucking();
  setContainer();
}

//Atur hitung ukuran carton box
function setSizeCtnbox(){
  var total_item_p = parseFloat($('#item_dimp_total').val());
  var jml_item = parseFloat($('#jumlah_item').val());
  var l = parseFloat($('#item_dim_maxl').val());
  var t = parseFloat($('#item_dim_maxt').val());

  if($('#cb_mf').is(':checked')){
    //Panjang
    var p_item = parseFloat($('#pk_mfp').val());
    var p_box = 0;

    //Lebar
    var l_item = parseFloat($('#pk_mfl').val());
    var l_box = 0;
    
    //Tinggi
    var t_item = parseFloat($('#pk_mft').val());
    var t_box = 0;
    
  }else{
    //Panjang
    var p_item = total_item_p;
    var p_box = 0;

    //Lebar
    var l_item = l;
    var l_box = 0;
    
    //Tinggi
    var t_item = t;
    var t_box = 0;
  }

  //Set ketebalan
  var k_ctn = parseFloat($('#k_ctn').val());
  var k_sf = parseFloat($('#k_sr').val());
  var k_floatingctn = parseFloat($('#k_floatingctn').val());

  //Check styrofoam
  if($('#cb_styrofoam').is(':checked')){
    p_item = p_item + (2*k_sf);
    l_item = l_item + (2*k_sf);
    t_item = t_item + (2*k_sf);
  }

  //Check ctn box
  if($('#cb_ctnbox').is(':checked')){
    //Sorting
    var ar_sort_desc = [p_item,l_item,t_item];

    ar_sort_desc.sort(function(a,b){
      return b-a;
    });

    if($('#cb_mf').is(':checked')){
      //Sorting, jika ada mf maka bentuk harus berdiri
      var set_p = ar_sort_desc[0];
      var set_l = 0;
      var set_t = 0;

      if(ar_sort_desc[1] <= ar_sort_desc[2]){
        set_l = ar_sort_desc[1];
        set_t = ar_sort_desc[2];
      }else{
        set_l = ar_sort_desc[2];
        set_t = ar_sort_desc[1];
      }

      p_item = set_p + (2*k_ctn);
      l_item = set_l + (2*k_ctn);
      t_item = set_t + (2*k_ctn);
      
    }else{
      //Sorting, jika tidak ada mf maka bentuk biasa tidur
      var set_p = ar_sort_desc[0];
      var set_l = ar_sort_desc[1];
      var set_t = ar_sort_desc[2];

      p_item = set_p + (2*k_ctn);
      l_item = set_l + (2*k_ctn);
      t_item = set_t + (2*k_ctn);
    }

    $('#pk_ctnboxp').val(p_item.toFixed(2));
    $('#pk_ctnboxl').val(l_item.toFixed(2));
    $('#pk_ctnboxt').val(t_item.toFixed(2));
    hitCtnboxCBM();
  }

  if($('#cb_floatingctnbox').is(':checked')){
    setSizeFloatingCtnbox();
  }

  if($('#cb_ukcrt').is(':checked')){
    setSizeCrt();
  }

  setTrucking();
  setContainer();
}

function disabledFloatingCtnbox(){
  if($('#cb_mf').is(':checked')){
    $('#cb_floatingctnbox').prop('disabled',true);
  }else if($('#cb_corner').is(':checked')){
    $('#cb_floatingctnbox').prop('disabled',false);
  }
}

function disabledMf(){
  if($('#cb_floatingctnbox').is(':checked')){
    $('#cb_mf').prop('disabled',true);
    $('#pk_mfp').val(0);
    $('#pk_mfl').val(0);
    $('#pk_mft').val(0);
    $('#pk_mfcbm').val(0);
    hitMfCBM();
  }else{
    $('#cb_mf').prop('disabled',false);
    hitMfCBM();
  }
}

function krafFloatingCtnbox(){
  var d = {
    id:$('#kraf_floatingcartonbox').val()
  };

  $.ajax({
    url:'<?php echo base_url();?>kraf/getkraf?id='+d.id,
    dataType:'JSON',
    success:function(result){
      $('#pk_floatingctnboxprice').val(result.harga_kraf);
      $('.qprice').mask('000.000.000.000',{reverse:true,optional:true});
      hitHargaFloatingCtnbox();
      setTrucking();
      setContainer();
    },error:function(xhr){
      $.alert(xhr.responseText);
    }
  });
}

function setSizeFloatingCtnbox(){
  var total_item_p = parseFloat($('#item_dimp_total').val());
  var jml_item = parseFloat($('#jumlah_item').val());
  var l = parseFloat($('#item_dim_maxl').val());
  var t = parseFloat($('#item_dim_maxt').val());

  if($('#cb_mf').is(':checked')){
    //Panjang
    var p_item = parseFloat($('#pk_mfp').val());
    var p_box = 0;

    //Lebar
    var l_item = parseFloat($('#pk_mfl').val());
    var l_box = 0;
    
    //Tinggi
    var t_item = parseFloat($('#pk_mft').val());
    var t_box = 0;
    
  }else{
    //Panjang
    var p_item = total_item_p;
    var p_box = 0;

    //Lebar
    var l_item = l;
    var l_box = 0;
    
    //Tinggi
    var t_item = t;
    var t_box = 0;
  }

  //Set ketebalan
  var k_ctn = parseFloat($('#k_ctn').val());
  var k_crt = parseFloat($('#k_crt').val());
  var k_sf = parseFloat($('#k_sr').val());
  var k_mf = parseFloat($('#k_mf').val());
  var k_floatingctn = parseFloat($('#k_floatingctn').val());

  //Check styrofoam
  if($('#cb_styrofoam').is(':checked')){
    p_item = p_item + (2*k_sf);
    l_item = l_item + (2*k_sf);
    t_item = t_item + (2*k_sf);
  }

  //Check ctn box
  if($('#cb_ctnbox').is(':checked')){
    p_item = parseFloat($('#pk_ctnboxp').val());
    l_item = parseFloat($('#pk_ctnboxl').val());
    t_item = parseFloat($('#pk_ctnboxt').val());
    // p_item = p_item + (2*k_ctn);
    // l_item = l_item + (2*k_ctn);
    // t_item = t_item + (2*k_ctn);
  }

  //Check floating carton box
  if($('#cb_floatingctnbox').is(':checked')){
    //p_item = p_item;//+ parseFloat($('#pk_ctnboxp').val());//+k_floatingctn;
    //l_item = p_item;//+ parseFloat($('#pk_ctnboxl').val());//k_floatingctn;
    //t_item = p_item;//+ parseFloat($('#pk_ctnboxt').val());//+k_floatingctn;

    if($('#cb_cornerluar').is(':checked')){
      p_item = p_item + 4;
      l_item = l_item + 4;
      t_item = t_item + 4;
    }else{
      p_item = p_item + 2;
      l_item = l_item + 2;
      t_item = t_item + 2;
    }

    $('#pk_floatingctnboxp').val(p_item.toFixed(2));
    $('#pk_floatingctnboxl').val(l_item.toFixed(2));
    $('#pk_floatingctnboxt').val(t_item.toFixed(2));
    hitFloatingCtnboxCBM();
  }

  //Check crate
  // if($('#cb_ukcrt').is(':checked')){
  //   p_item = p_item + (2*k_crt);
  //   l_item = l_item + (2*k_crt);
  //   t_item = t_item + (2*k_crt);
  //   $('#pk_crtp').val(p_item.toFixed(2));
  //   $('#pk_crtl').val(l_item.toFixed(2));
  //   $('#pk_crtt').val(t_item.toFixed(2));
  //   hitCrtCBM();
  // }
  setSizeCrt();
  setTrucking();
  setContainer();
  // var p = parseFloat($('#pk_ctnboxp').val());
  // var l = parseFloat($('#pk_ctnboxl').val());
  // var t = parseFloat($('#pk_ctnboxt').val());
  // var k_floatingctn = parseFloat($('#k_floatingctn').val());

  // if($('#cb_corner').is(':checked') && $('#cb_floatingctnbox').is(':checked')){
  //   //Set size P
  //   var set_p = p + k_floatingctn;
  //   $('#pk_floatingctnboxp').val(set_p.toFixed(2));

  //   //Set size l
  //   var set_l = l + k_floatingctn;
  //   $('#pk_floatingctnboxl').val(set_l.toFixed(2));

  //   //Set size t
  //   var set_t = t + k_floatingctn;
  //   $('#pk_floatingctnboxt').val(set_t.toFixed(2));
  // }

  // hitFloatingCtnboxCBM();
  // setTrucking();
  // setContainer();
}

//Atur ukuran crate
function setSizeCrt(){
  var total_item_p = parseFloat($('#item_dimp_total').val());
  var jml_item = parseFloat($('#jumlah_item').val());
  var l = parseFloat($('#item_dim_maxl').val());
  var t = parseFloat($('#item_dim_maxt').val());

  if($('#cb_mf').is(':checked')){
    //Panjang
    var p_item = parseFloat($('#pk_mfp').val());
    var p_box = 0;

    //Lebar
    var l_item = parseFloat($('#pk_mfl').val());
    var l_box = 0;
    
    //Tinggi
    var t_item = parseFloat($('#pk_mft').val());
    var t_box = 0;
    
  }else{
    //Panjang
    var p_item = total_item_p;
    var p_box = 0;

    //Lebar
    var l_item = l;
    var l_box = 0;
    
    //Tinggi
    var t_item = t;
    var t_box = 0;
  }

  //Set ketebalan
  var k_ctn = parseFloat($('#k_ctn').val());
  var k_crt = parseFloat($('#k_crt').val());
  var k_sf = parseFloat($('#k_sr').val());
  var k_mf = parseFloat($('#k_mf').val());

  //Check styrofoam
  if($('#cb_styrofoam').is(':checked')){
    p_item = p_item + (2*k_sf);
    l_item = l_item + (2*k_sf);
    t_item = t_item + (2*k_sf);
  }

  //Check ctn box
  if($('#cb_ctnbox').is(':checked')){
    p_item = parseFloat($('#pk_ctnboxp').val());
    l_item = parseFloat($('#pk_ctnboxl').val());
    t_item = parseFloat($('#pk_ctnboxt').val());
    // p_item = p_item + (2*k_ctn);
    // l_item = l_item + (2*k_ctn);
    // t_item = t_item + (2*k_ctn);
  }

  //Check floating carton box
  if($('#cb_floatingctnbox').is(':checked')){
    p_item = parseFloat($('#pk_floatingctnboxp').val());
    l_item = parseFloat($('#pk_floatingctnboxl').val());
    t_item = parseFloat($('#pk_floatingctnboxt').val());
  }

  //Check crate
  if($('#cb_ukcrt').is(':checked')){
    p_item = p_item + (2*k_crt);
    l_item = l_item + (2*k_crt);
    t_item = t_item + (2*k_crt);
    $('#pk_crtp').val(p_item.toFixed(2));
    $('#pk_crtl').val(l_item.toFixed(2));
    $('#pk_crtt').val(t_item.toFixed(2));
    hitCrtCBM();
  }

  setTrucking();
  setContainer();
}

//ALGORITMA

function setCtnboxP(){
  var hit=0;
  var res=0;
  var k_ctn=parseFloat($('#k_ctn').val());
  var c=1;
  var jml_data=parseFloat($('#jumlah_item').val());
  var total_data=parseFloat($('#item_dimp_total').val());

  // $('.item-dim-p').each(function(){
  //   var v=$(this).val();
  //   if(v!=0){
  //     c++;
  //     hit+=parseFloat(v);
  if($('#cb_mf').prop('checked') && $('#cb_ctnbox').prop('checked')){
    res = total_data + ((jml_data+1)*k_ctn);
    //res=parseFloat(hit)+(c*k_ctn);
  }else if($('#cb_ctnbox').prop('checked')){
    res = total_data;
    //res=parseFloat(hit);
  }
  //console.log('index : '+c+', kali : '+k_ctn+', hasil p : '+res);
  //   }
  // });

  var res1=res;
  $('#pk_ctnboxp').val(res1);
  hitCtnboxCBM();
  setContainer();
}

function setFloatingCtnboxP(){
  var hit=0;
  var res=0;
  var k_ctn=parseFloat($('#k_ctn').val());
  var c=1;
  var jml_data=parseFloat($('#jumlah_item').val());
  var total_data=parseFloat($('#item_dimp_total').val());

  // $('.item-dim-p').each(function(){
  //   var v=$(this).val();
  //   if(v!=0){
  //     c++;
  //     hit+=parseFloat(v);
  if($('#cb_mf').prop('checked') && $('#cb_ctnbox').prop('checked')){
    res = total_data + ((jml_data+1)*k_ctn);
    //res=parseFloat(hit)+(c*k_ctn);
  }else if($('#cb_ctnbox').prop('checked')){
    res = total_data;
    //res=parseFloat(hit);
  }
  //console.log('index : '+c+', kali : '+k_ctn+', hasil p : '+res);
  //   }
  // });

  var res1=res;
  $('#pk_ctnboxp').val(res1);
  hitCtnboxCBM();
  setContainer();
}

function setCtnboxL(){
  itemDimLMax();
  var k_ctn=parseFloat($('#k_ctn').val());
  var l=parseFloat($('#item_dim_maxl').val());
  var res=0;

  if($('#cb_mf').prop('checked') && $('#cb_ctnbox').prop('checked')){
    res=l+(2*k_ctn);
  }else if($('#cb_ctnbox').prop('checked')){
    res=l;
  }

  /*var c=1;
  $('.item-dim-l').each(function(){
    var v=$(this).val();
    if(v!=0){
      c++;
      hit+=parseFloat(v);
      res=parseFloat(hit)+(c*k_ctn);
      console.log(res);
    }
  });*/

  $('#pk_ctnboxl').val(res);
  hitCtnboxCBM();
  setContainer();
}

function setCtnboxT(){
  itemDimTMax();
  var k_ctn=parseFloat($('#k_ctn').val());
  var l=parseFloat($('#item_dim_maxt').val());
  var res=0;

  if($('#cb_mf').prop('checked') && $('#cb_ctnbox').prop('checked')){
    res=l+(2*k_ctn);
  }else if($('#cb_ctnbox').prop('checked')){
    res=l;
  }

  /*var c=1;
  $('.item-dim-l').each(function(){
    var v=$(this).val();
    if(v!=0){
      c++;
      hit+=parseFloat(v);
      res=parseFloat(hit)+(c*k_ctn);
      console.log(res);
    }
  });*/

  $('#pk_ctnboxt').val(res);
  hitCtnboxCBM();
  setContainer();
}

function setStyrofoam(){
  itemDimLMax();
  itemDimTMax();
  var hitp=0;
  var resp=0;
  
  var cp=1;
  var l=parseFloat($('#item_dim_maxl').val());
  var t=parseFloat($('#item_dim_maxt').val());
  var v=parseFloat($('#pk_styrofoam').val());
  var k_ctn=parseFloat($('#k_ctn').val());
  var k_sr=parseFloat($('#k_sr').val());
  var k_mf=parseFloat($('#k_mf').val());
  var res1=0;
  var res2=0;
  var res3=0;
  //if(v!=0 || v!=''){
  //if($('#cb_ctnbox').prop('checked')){
  if($('#cb_mf').prop('checked') && $('#cb_ctnbox').prop('checked') && $('#cb_styrofoam').prop('checked')){
  //P
  $('.item-dim-p').each(function(){
    var v=$(this).val();
    if(v!=0){
      cp++;
      hitp+=parseFloat(v);
      //resp=parseFloat(hitp)+(cp*k_ctn)+k_sr;
      console.log('index : '+cp+', kali : '+k_ctn+', hasil p : '+hitp);
    }
  });

  // if(cp > 1){
  //   hitp=hitp+((cp-1)*5);
  // }

  //hitp=hitp+(2*3);

  // if($('#cb_ctnbox').prop('checked')){
  //   hitp=hitp+(2*2);
  // }

  hitp=parseFloat($('#pk_mfp').val());

  hitp=hitp+8;

  res1=hitp/*resp*/;
  res2=parseFloat($('#pk_mfl').val())+8;
  res3=parseFloat($('#pk_mft').val())+8;
  //res2=l+(2*k_ctn)+k_sr;
  //res3=t+(2*k_ctn)+k_sr;
  
  }else if($('#cb_ctnbox').prop('checked') && $('#cb_styrofoam').prop('checked')){
  //P
  $('.item-dim-p').each(function(){
    var v=$(this).val();
    if(v!=0){
      cp++;
      hitp+=parseFloat(v);
      resp=parseFloat(hitp);
      console.log('index : '+cp+', kali : '+k_ctn+', hasil p : '+hitp);
    }
  });

  res1=hitp+8;
  res2=l+4;
  res3=t+4;
  // res2=l+k_sr;
  // res3=t+k_sr;
  
  }else if($('#cb_ctnbox').prop('checked') && $('#cb_mf').prop('checked')){
   //P
  $('.item-dim-p').each(function(){
    var v=$(this).val();
    if(v!=0){
      cp++;
      hitp+=parseFloat(v);
      resp=parseFloat(hitp)+(cp*k_mf)+k_ctn;
      console.log('index : '+cp+', kali : '+k_ctn+', hasil p : '+hitp);
    }
  });

  // if(cp > 1){
  //   hitp=hitp+((cp-1)*5);
  // }

  //hitp=hitp+(2*k_mf);

  res1=parseFloat($('#pk_mfp').val())+4;

  //res1=resp;
  res2=parseFloat($('#pk_mfl').val())+4;
  res3=parseFloat($('#pk_mft').val())+4;
  // res2=l+(2*k_mf)+k_ctn;
  // res3=t+(2*k_mf)+k_ctn;
  }else if($('#cb_ctnbox').prop('checked')){
    //P
  $('.item-dim-p').each(function(){
    var v=$(this).val();
    if(v!=0){
      cp++;
      hitp+=parseFloat(v);
      resp=parseFloat(hitp)/*+(cp*k_ctn)*/;
      console.log('index : '+cp+', kali : '+k_ctn+', hasil p : '+hitp);
    }
  });

  res1=resp+4;
  //res1=resp;
  res2=l;
  res3=t;
  }

  $('#pk_ctnboxp').val(res1.toFixed(2));
  $('#pk_ctnboxl').val(res2.toFixed(2));
  $('#pk_ctnboxt').val(res3.toFixed(2));
  hitCtnboxCBM();
  //updCrt();
  //}
  //}else{
  //if($('#cb_ctnbox').prop('checked')){
    //setCtnboxP();
    //setCtnboxL();
    //setCtnboxT();
  //}
  //}  
}

function setCrtP(){
  //Default 5
  var hit=0;
  var res=0;
  var k_sr=parseFloat($('#k_sr').val());
  var k_crt=parseFloat($('#k_crt').val());
  var c=1;
  if($('#cb_ctnbox').prop('checked')){
  res=parseFloat($('#pk_ctnboxp').val())+5/*(k_crt)*/;
  }else{
  $('.item-dim-p').each(function(){
    var v=$(this).val();
    if(v!=0){
      c++;
      hit+=parseFloat(v);
      //console.log('index : '+c+', kali : '+k_crt+', hasil p : '+hit);
    }
  });

  if($('#cb_mf').prop('checked')){
    res=parseFloat($('#pk_mfp').val())+5/*(k_crt)*/;  
  }
  
  if($('#cb_styrofoam').prop('checked')){
    res=parseFloat(hit)+4+5/*(k_crt)*/; 
  }

  if($('#cb_mf').prop('checked') && $('#cb_styrofoam').prop('checked')){
    res=parseFloat($('#pk_mfp').val())+4+5;
  }

  else
  {
    res=parseFloat(hit)+5;
  }
  }
  var res1=res.toFixed(2)/*.replace(',','.')*/;
  $('#pk_crtp').val(res1);
  hitCrtCBM();
  hitHargaCrt();
  setContainer();
}

function setCrtL(){
  //Default 5
  itemDimLMax();
  var k_crt=parseFloat($('#k_crt').val());
  var l=parseFloat($('#item_dim_maxl').val());
  var res=0;

  var c=1;
  if($('#cb_ctnbox').prop('checked')){
  res=parseFloat($('#pk_ctnboxl').val())+5/*(k_crt)*/;
  }else{
  if($('#cb_mf').prop('checked')){
    res=parseFloat($('#pk_mfl').val())+5/*(k_crt)*/;  
  }
  
  if($('#cb_styrofoam').prop('checked')){
    res=l+4+5/*(k_crt)*/; 
  }

  if($('#cb_mf').prop('checked') && $('#cb_styrofoam').prop('checked')){
    res=parseFloat($('#pk_mfl').val())+4+5;
  }

  else
  {
    res=l+5/*(k_crt)*/;
  }

  /*$('.item-dim-l').each(function(){
    var v=$(this).val();
    if(v!=0){
      c++;
      hit+=parseFloat(v);
      res=parseFloat(hit)+(c*k_ctn);
      console.log(res);
    }
  });*/
  }

  $('#pk_crtl').val(Math.round(res));
  hitCrtCBM();
  hitHargaCrt();
  setContainer();
}

function setCrtT(){
  //Default 5
  itemDimTMax();
  var k_crt=parseFloat($('#k_crt').val());
  var l=parseFloat($('#item_dim_maxt').val());
  var res=0;
  if($('#cb_ctnbox').prop('checked')){
  res=parseFloat($('#pk_ctnboxt').val())+5/*(k_crt)*/;
  }else{
  if($('#cb_mf').prop('checked')){
    res=parseFloat($('#pk_mft').val())+5/*(k_crt)*/;  
  }
  
  if($('#cb_styrofoam').prop('checked')){
    res=l+4+5/*(k_crt)*/; 
  }

  if($('#cb_mf').prop('checked') && $('#cb_styrofoam').prop('checked')){
    res=parseFloat($('#pk_mft').val())+4+5;
  }

  else
  {
    res=l+5/*(k_crt)*/;
  }
  }

  /*var c=1;
  $('.item-dim-l').each(function(){
    var v=$(this).val();
    if(v!=0){
      c++;
      hit+=parseFloat(v);
      res=parseFloat(hit)+(c*k_ctn);
      console.log(res);
    }
  });*/

  $('#pk_crtt').val(Math.round(res));
  hitCrtCBM();
  hitHargaCrt();
  setContainer();
}

function updMf(){
  if($('#cb_mf').prop('checked')){
    $('#pk_mfp').prop('readonly',false);
    $('#pk_mfl').prop('readonly',false);
    $('#pk_mft').prop('readonly',false);
    setMfP();
    setMfL();
    setMfT();
    hitMfCBM();
    //$('#pk_mfcbm1').prop('readonly',false);
    //var cbm=parseFloat($('#pk_mfcbm').val());
    //$('#pk_mfcbm1').val(cbm);
    hitMf();
  }else{
    $('#pk_mfp').prop('readonly',true);
    $('#pk_mfl').prop('readonly',true);
    $('#pk_mft').prop('readonly',true);
    $('#pk_mfp').val(0);
    $('#pk_mfl').val(0);
    $('#pk_mft').val(0);
    hitMfCBM();
    //$('#pk_mfcbm1').prop('readonly',true);
    //$('#pk_mfcbm1').val(0);
    hitMf();
  }
}

function updCtnbox(){
  if($('#cb_ctnbox').prop('checked')){
    $('#pk_ctnboxp').prop('readonly',false);
    $('#pk_ctnboxl').prop('readonly',false);
    $('#pk_ctnboxt').prop('readonly',false);
    setCtnboxP();
    setCtnboxL();
    setCtnboxT();
    setStyrofoam();
    hitCtnboxCBM();
  }else{
    $('#pk_ctnboxp').prop('readonly',true);
    $('#pk_ctnboxl').prop('readonly',true);
    $('#pk_ctnboxt').prop('readonly',true);
    $('#pk_ctnboxp').val(0);
    $('#pk_ctnboxl').val(0);
    $('#pk_ctnboxt').val(0);
    hitCtnboxCBM();
  }
}

function updCrt(){
  if($('#cb_ukcrt').prop('checked')){
    $('#pk_crtp').prop('readonly',false);
    $('#pk_crtl').prop('readonly',false);
    $('#pk_crtt').prop('readonly',false);

    setCrtP();
    setCrtL();
    setCrtT();
    
    hitCrtCBM();

    $('#pk_crtcbm1').prop('readonly',false);
    $('#pk_crtcbm1').val(1);
    hitHargaCrt();

    $('#pk_ispn').prop('checked',true);
    $('#pk_ispn').prop('readonly',false);
    $('#pk_ispn').val(1);
    hitIspn();
    
  }else{
    $('#pk_crtp').prop('readonly',true);
    $('#pk_crtl').prop('readonly',true);
    $('#pk_crtt').prop('readonly',true);

    $('#pk_crtp').val(0);
    $('#pk_crtl').val(0);
    $('#pk_crtt').val(0);
    hitCrtCBM();

    $('#pk_crtcbm1').prop('readonly',true);
    $('#pk_crtcbm1').val(0);
    hitHargaCrt();

    $('#pk_ispn').prop('checked',false);
    $('#pk_ispn').prop('readonly',true);
    $('#pk_ispn').val(0);
    hitIspn();
  }
}

function setHitCrt(){
  var mfp=parseFloat($('#pk_mfp').val());
  var mfl=parseFloat($('#pk_mfl').val());
  var mft=parseFloat($('#pk_mft').val());

  var ctnboxp=parseFloat($('#pk_ctnboxp').val());
  var ctnboxl=parseFloat($('#pk_ctnboxp').val());
  var ctnboxt=parseFloat($('#pk_ctnboxp').val());

  var mfcbm=parseFloat($('#pk_mfcbm').val());
  var ctnboxcbm=parseFloat($('#pk_ctnboxcbm').val());

  if(mfp==0 && mfl==0 && mft==0 && ctnboxp==0 && ctnboxl==0 && ctnboxt==0 && mfcbm==0 && ctnboxcbm==0){
    setCrtP();
    setCrtL();
    setCrtT();
  }/*else{
    $('#pk_crtp').val(0);
    $('#pk_crtl').val(0);
    $('#pk_crtt').val(0);
    $('#pk_crtcbm').val(0);
    $('#pk_crtcbm1').val(0);
    hitHargaCrt();
    hitTotalCBM();

  }*/
}

function setTrucking(){
  var ctnboxcbm=parseFloat($('#pk_ctnboxcbm').val());
  var crtcbm=parseFloat($('#pk_crtcbm').val());
  //var totcbm=parseFloat($('#item_dim_totcbm').val());
  var totcbm=parseFloat($('#pk_mfcbm').val());
  var floatingctnboxcbm=parseFloat($('#pk_floatingctnboxcbm').val());
  var cbm=0;

  var numbers = [ctnboxcbm,crtcbm,totcbm,floatingctnboxcbm];
  var maxnum = Math.max.apply(Math, numbers);
  cbm=maxnum;

  // if(ctnboxcbm>crtcbm){
  //   cbm=ctnboxcbm;
  // }else{
  //   if(crtcbm!=0){
  //     cbm=crtcbm;
  //   }else{
  //     cbm=totcbm;
  //   }
  // }

  /*if(ctnboxcbm!=0 || ctnboxcbm!=0.0000){
    cbm=ctnboxcbm;
  }else{
    cbm=crtcbm;
  }*/

  $('#pk_truckingcostcbm').val(cbm);
  //Ikut CBM total dari item
  //var totcbm=parseFloat($('#item_dim_totcbm').val());

  // var ctnboxcbm=parseFloat($('#pk_ctnboxcbm').val());
  // var crtcbm=parseFloat($('#pk_crtcbm').val());
  // var cbm = crtcbm;//cbm = 0;

  // if(ctnboxcbm > crtcbm){
  //   cbm = ctnboxcbm;
  // }//else{
  // //   cbm = crtcbm;
  // // }

  // //$('#pk_truckingcostcbm').val(totcbm);
  hitTrucking();
}

function setContainer(){
  var ctnboxcbm=parseFloat($('#pk_ctnboxcbm').val());
  var crtcbm=parseFloat($('#pk_crtcbm').val());
  //var totcbm=parseFloat($('#item_dim_totcbm').val());
  var totcbm=parseFloat($('#pk_mfcbm').val());
  var floatingctnboxcbm=parseFloat($('#pk_floatingctnboxcbm').val());
  var cbm=0;

  var numbers = [ctnboxcbm,crtcbm,totcbm,floatingctnboxcbm];
  var maxnum = Math.max.apply(Math,numbers);
  cbm = maxnum;

  // if(ctnboxcbm>crtcbm){
  //   cbm=ctnboxcbm;
  // }else{
  //   if(crtcbm!=0){
  //     cbm=crtcbm;
  //   }else{
  //     cbm=totcbm;
  //   }
  // }

  /*if(ctnboxcbm!=0 || ctnboxcbm!=0.0000){
    cbm=ctnboxcbm;
  }else{
    cbm=crtcbm;
  }*/

  $('#pk_containercostcbm').val(cbm.toFixed(4));
  hitContainer();
}

/* HITUNG HARGA */

function hitBrownPaper(){
  var bp=parseFloat($('#pk_brownpaperbh').val());
  var price=parseFloat($('#pk_brownpaperprice').val());
  var res=bp*price;
  $('#pk_brownpapertotal').val(Math.round(res));
  subTotal2();
}

function hitFs(){
  var fs=parseFloat($('#pk_fsbh').val());
  var price=parseFloat($('#pk_fsprice').val().replace('.',''));
  var res=fs*price;
  $('#pk_fstotal').val(Math.round(res));
  subTotal2();
}

function hitBs(){
  var bs=parseFloat($('#pk_bsbh').val());
  var price=parseFloat($('#pk_bsprice').val().replace('.',''));
  var res=bs*price;
  $('#pk_bstotal').val(Math.round(res));
  subTotal2();
}

function hitShreddedPaper(){
  var sp=parseFloat($('#pk_shreddedpaper').val());
  var price=parseFloat($('#pk_shreddedpaperprice').val().replace('.',''));
  var res=sp*price;
  $('#pk_shreddedpapertotal').val(Math.round(res));
  subTotal2();
}

function hitSingleFace(){
  var sf=parseFloat($('#pk_singleface').val());
  var price=parseFloat($('#pk_singlefaceprice').val().replace('.',''));
  var res=sf*price;
  $('#pk_singlefacetotal').val(Math.round(res));
  subTotal2();
}

function hitPlastik(){
  var pl=parseFloat($('#pk_plastik').val());
  var price=parseFloat($('#pk_plastikprice').val().replace('.',''));
  var res=pl*price;
  $('#pk_plastiktotal').val(Math.round(res));
  subTotal2();
}

function hitMf(){
  var cbm=parseFloat($('#pk_mfcbm1').val());
  var price=parseFloat($('#pk_mfprice').val().replace('.',''));
  var res=cbm*price;
  $('#pk_mftotal').val(Math.round(res));
  subTotal2();
}

function hitStyrofoam(){
  var v=parseFloat($('#pk_styrofoam').val());
  var price=parseFloat($('#pk_styrofoamprice').val().replace('.',''));
  var total=v*price;

  $('#pk_styrofoamtotal').val(Math.round(total));
  setContainer();
  subTotal2();
}

function hitCorner(){
  var c=parseFloat($('#pk_corner').val());
  var price=parseFloat($('#pk_cornerprice').val().replace('.',''));
  var res=c*price;
  $('#pk_cornertotal').val(Math.round(res));
  subTotal2();
}

function hitCornerLuar(){
  var c=parseFloat($('#pk_cornerluar').val());
  var price=parseFloat($('#pk_cornerluarprice').val().replace('.',''));
  var res=c*price;
  $('#pk_cornerluartotal').val(Math.round(res));
  subTotal2();
}

function hitHargaCtnbox(){
  //Rumus
  var p=parseFloat($('#pk_ctnboxp').val());
  var l=parseFloat($('#pk_ctnboxl').val());
  var t=parseFloat($('#pk_ctnboxt').val());
  var cbm=0;
  var price=parseFloat($('#pk_ctnboxprice').val().replace('.',''));

  if(p!=0 && l!=0 && t!=0){
    var b1=((p+l)*2)+parseFloat(5.8);
    var b2=(l+t)+parseFloat(3.7);
    cbm=(b1*b2)/parseFloat(10000);

    $('#pk_ctnboxcbm1').val(cbm.toFixed(4));
  }

  var res=cbm.toFixed(4)*price;
  $('#pk_ctnboxtotal').val(Math.round(res));
  subTotal2();
  setContainer();
}

function hitHargaFloatingCtnbox(){
  //Rumus
  var p=parseFloat($('#pk_floatingctnboxp').val());
  var l=parseFloat($('#pk_floatingctnboxl').val());
  var t=parseFloat($('#pk_floatingctnboxt').val());
  var cbm=0;
  var price=parseFloat($('#pk_floatingctnboxprice').val().replace('.',''));

  if(p!=0 && l!=0 && t!=0){
    var b1=((p+l)*2)+parseFloat(5.8);
    var b2=(l+t)+parseFloat(3.7);
    cbm=(b1*b2)/parseFloat(10000);

    $('#pk_floatingctnboxcbm1').val(cbm.toFixed(4));
  }

  var res=cbm.toFixed(4)*price;
  $('#pk_floatingctnboxtotal').val(Math.round(res));
  subTotal2();
  setContainer();
}

function hitHargaCrt(){
  var cbm=parseFloat($('#pk_crtcbm1').val());
  var price=parseFloat($('#pk_crtprice').val().replace('.',''));
  var res=cbm*price;
  $('#pk_crttotal').val(Math.round(res));
  subTotal2();
  setContainer();
}

function hitTrucking(){
  var price=parseFloat($('#pk_truckingcostprice').val().replace('.',''));
  var kap=parseFloat($('#pk_truckingcostkap').val());
  var cbm=parseFloat($('#pk_truckingcostcbm').val());

  var res=(price/kap)*cbm;
  $('#pk_truckingtotal').val(Math.round(res));
  setContainer();
  subTotal2();
}

function hitContainer(){
  var price=parseFloat($('#pk_containercostprice').val().replace('.',''));
  var kap=parseFloat($('#pk_containercostkap').val());
  var cbm=$('#pk_containercostcbm').val();
  var res=(price/kap)*cbm;
  $('#pk_containercosttotal').val(Math.round(res));
  subTotal2();
}

function hitIspn(){
  var ispn=parseFloat($('#pk_ispn').val());
  var price=parseFloat($('#pk_ispnprice').val().replace('.',''));
  var res=ispn*price;
  $('#pk_ispntotal').val(Math.round(res));
  subTotal2();
}

function hitSponati(){
  var sponati=parseFloat($('#pk_sponati').val());
  var price=parseFloat($('#pk_sponatiprice').val().replace('.',''));
  var res=sponati*price;
  $('#pk_sponatitotal').val(Math.round(res));
  subTotal2();
}

function hitFisher(){
  var fisher=parseFloat($('#pk_fisher').val());
  var price=parseFloat($('#pk_fisherprice').val().replace('.',''));
  var res=fisher*price;
  $('#pk_fishertotal').val(Math.round(res));
  subTotal2();
}

function hitScrew(){
  var screw=parseFloat($('#pk_screw').val());
  var price=parseFloat($('#pk_screwprice').val().replace('.',''));
  var res=screw*price;
  $('#pk_screwtotal').val(Math.round(res));
  subTotal2();
}

function hitKuncipas(){
  var kuncipas=parseFloat($('#pk_kuncipas').val());
  var price=parseFloat($('#pk_kuncipasprice').val().replace('.',''));
  var res=kuncipas*price;
  $('#pk_kuncipastotal').val(Math.round(res));
  subTotal2();
}

function hitBabat(){
  var babat=parseFloat($('#pk_babat').val());
  var price=parseFloat($('#pk_babatprice').val().replace('.',''));
  var res=babat*price;
  $('#pk_babattotal').val(Math.round(res));
  subTotal2();
}

function hitBabat25(){
  var babat=parseFloat($('#pk_babat25').val());
  var price=parseFloat($('#pk_babatprice25').val().replace('.',''));
  var res=babat*price;
  $('#pk_babattotal25').val(Math.round(res));
  subTotal2();
}

function hitBabat5(){
  var babat=parseFloat($('#pk_babat5').val());
  var price=parseFloat($('#pk_babatprice5').val().replace('.',''));
  var res=babat*price;
  $('#pk_babattotal5').val(Math.round(res));
  subTotal2();
}

function hitBabat250(){
  var babat = parseFloat($('#pk_babat250').val());
  var price = parseFloat($('#pk_babatprice250').val().replace('.',''));
  var res = babat*price;
  $('#pk_babattotal250').val(Math.round(res));
  subTotal2();
}

function hitJhook(){
  var jhook=parseFloat($('#pk_jhook').val());
  var price=parseFloat($('#pk_jhookprice').val().replace('.',''));
  var res=jhook*price;
  $('#pk_jhooktotal').val(Math.round(res));
  subTotal2();
}

function hitDring(){
  var dr=parseFloat($('#pk_dring').val());
  var price=parseFloat($('#pk_dringprice').val().replace('.',''));
  var res=dr*price;
  $('#pk_dringtotal').val(Math.round(res));
  subTotal2();
}

function hitRinghanger(){
  var rh=parseFloat($('#pk_ringhanger').val());
  var price=parseFloat($('#pk_ringhangerprice').val().replace('.',''));
  var res=rh*price;
  $('#pk_ringhangertotal').val(Math.round(res));
  subTotal2();
}

function hitKeyhole(){
  var kh=parseFloat($('#pk_keyhole').val());
  var price=parseFloat($('#pk_keyholeprice').val().replace('.',''));
  var res=kh*price;
  $('#pk_keyholetotal').val(Math.round(res));
  subTotal2();
}

function hitSawteeth(){
  var s = parseFloat($('#pk_sawteeth').val());
  var sp = parseFloat($('#pk_sawteethprice').val().replace('.',''));
  var res = s*sp;
  $('#pk_sawteethtotal').val(Math.round(res));
  subTotal2();
}

function hitGlides(){
  var g = parseFloat($('#pk_glides').val());
  var gh = parseFloat($('#pk_glidesprice').val());
  var res = g*gh;
  $('#pk_glidestotal').val(Math.round(res));
  subTotal2();
}

function hitBautjcbc(){
  var bj = parseFloat($('#pk_bautjcbc').val());
  var bjp = parseFloat($('#pk_bautjcbcprice').val());
  var res = bj*bjp;
  $('#pk_bautjcbctotal').val(Math.round(res));
  subTotal2();
}

function hitNanasan(){
  var bj = parseFloat($('#pk_nanasan').val());
  var bjp = parseFloat($('#pk_nanasanprice').val());
  var res = bj*bjp;
  $('#pk_nanasantotal').val(Math.round(res));
  subTotal2();
}

function hitKuncil(){
  var bj = parseFloat($('#pk_kuncil').val());
  var bjp = parseFloat($('#pk_kuncilprice').val());
  var res = bj*bjp;
  $('#pk_kunciltotal').val(Math.round(res));
  subTotal2();
}

//FOB

function hitFob(){
  var s1=parseFloat($('#h_subtotal1').val().replace('.',''));
  var s2=parseFloat($('#pk_subtotal2').val().replace('.',''));
  var res=s1+s2;
  $('#pk_fobtotal').val(Math.round(res));
  hitOverhead();
}

function hitOverhead(){
  var t1=parseFloat($('#pk_fobtotal').val().replace('.',''));
  var oh=parseFloat($('#pk_overhead').val());
  var res=(oh/100)*t1;
  $('#pk_overheadtotal').val(Math.round(res));
  hitSubTotalOverHead();
}

function hitSubTotalOverHead(){
  var t1=parseFloat($('#pk_fobtotal').val().replace('.',''));
  var t2=parseFloat($('#pk_overheadtotal').val().replace('.',''));
  var res=t1+t2;
  $('#pk_subtotaloverhead').val(Math.round(res));
  hitMargin();
}

function hitMargin(){
  var oh=parseFloat($('#pk_subtotaloverhead').val().replace('.',''));
  var mg=parseFloat($('#pk_margin').val());
  var res=(mg/100)*oh;
  $('#pk_margintotal').val(Math.round(res));
  hitSubTotalMargin();
}

function hitSubTotalMargin(){
  var t1=parseFloat($('#pk_subtotaloverhead').val().replace('.',''));
  var t2=parseFloat($('#pk_margintotal').val().replace('.',''));
  var res=t1+t2;
  $('#pk_subtotalmargin').val(Math.round(res));
  hitTax();
}

function hitTax(){
  var so=parseFloat($('#pk_subtotalmargin').val().replace('.',''));
  var tax=parseFloat($('#pk_taxprice').val().replace('.',''));
  var res=(tax/100)*so;
  $('#pk_taxtotal').val(Math.round(res));
  hitTotal();
}

function hitTotal(){
  var t1=parseFloat($('#pk_subtotalmargin').val().replace('.',''));
  var t2=parseFloat($('#pk_taxtotal').val().replace('.',''));
  var res=t1+t2;
  $('#pk_total').val(Math.round(res));
  hitDevided();
}

function hitDevided(){
  var total=parseFloat($('#pk_total').val().replace('.',''));
  var devided=parseFloat($('#pk_devided').val().replace('.',''));
  var res=total/devided;
  $('#pk_usdprice').val(res.toFixed(4));
  $('#pk_quote').val(res.toFixed(4));
}

/* HITUNG HARGA */

/* HITUNG JASA OVEN */
function hitJasaoven(){
  var hrg_jasaoven = parseFloat($('#hrg_jasaoven').val());
  if(isNaN(hrg_jasaoven)){
    hrg_jasaoven = 0;
  }

  var totcbm = parseFloat($('#item_dim_totcbm').val());
  if(isNaN(totcbm)){
    totcbm = 0;
  }

  var hit = totcbm*hrg_jasaoven;
  $('#h_jasaoven').val(parseFloat(hit));
  $('#text-jasaoven').html('Hitung: '+totcbm+' &times; RP. '+hrg_jasaoven);

  $('.qprice').mask('000.000.000.000',{reverse:true,optional:true});
  subTotal1();
}
/* HITUNG JASA OVEN */

/* 
Fungsi formatRupiah 
https://www.malasngoding.com/membuat-format-rupiah-dengan-javascript/
*/
/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? " " + rupiah : "";
}

function formatAngka(angka) {
  if (typeof(angka) != 'string') angka = angka.toString();
  var reg = new RegExp('([0-9]+)([0-9]{3})');
  while(reg.test(angka)) angka = angka.replace(reg, '$1.$2');
  return angka;
}

$(document).ready(function(){

subTotal1();

// Set kraf
krafCtnbox();
krafFloatingCtnbox();

//initPhoto();

//getKursBca();

$('#btnsave_icon').html('<i class="fa fa-save"></i>');

$('.qtotprice').inputmask({
  "alias":"numeric",
  "rightAlign":false,
  "prefix":"",
  "digits":0,
  "digitsOptional":false,
  "decimalProtect":false,
  "groupSeparator":".",
  "radixPoint":",",
  "radixFocus":true,
  "autoGroup":true,
  "autoUnmask":true,
  "removeMaskOnSubmit":true
});

$('.decimal').keydown(function(){
  $(this).inputFilter(function(value) {
  return /^-?\d*[.,]?\d*$/.test(value); });
});

$('.qprice').mask('000.000.000.000',{reverse:true,optional:true});

});

$('.inputs').keydown(function (e) {
    if (e.which === 13) {
        var index = $('.inputs').index(this) + 1;
        $('.inputs').eq(index).focus().select();
    }
});

$('.qprice').on('change',function(){
 if($(this).val()==""){
  $(this).val(0);
 }
});

$('.p-text').wysihtml5();

$('#item_kode').keydown(function(e){
  if(e.keyCode==190 || e.keyCode==110){
    e.preventDefault();
  }
});

/*$('.qprice').on('input',function(){
  var rp=formatRupiah($(this).val());
  $(this).val(rp);
});*/

/*$('#item_diml_p,#item_diml_l,#item_diml_t,#item_dimm_p,#item_dimm_l,#item_dimm_t,#item_dims_p,#item_dims_l,#item_dims_t').on('input',function(){
  itemDimLCBM();
  itemDimMCBM();
  itemDimSCBM();
});*/

/*$('.item-dim-p').on('input',function(){
  itemDimPMax();
});

$('.item-dim-l').on('input',function(){
  itemDimLMax();
});

$('.item-dim-t').on('input',function(){
  itemDimTMax();
});*/

$('#item_foto').change(function(){
  readURL(this);
});

/* FORMAT RP PRICE SUBTOT 1 */


//$('#h_spprice,#h_fin,#h_glass,#h_mirror,#h_metal,#h_brass,#h_aluminium,#h_candle,#h_stone,#h_base,#h_backing,#h_lain1,#h_lain2,#h_jasaoven').on('change',function(){
$('.stt1').on('change',function(){
  subTotal1();
});

/* FORMAT RP PRICE SUBTOT 1 */

/* CHECKBOX */
$('#cb_jasaoven').click(function(){
  if($(this).is(':checked')){
    hitJasaoven();
  }else{
    $('#h_jasaoven').val(0);
    $('#text-jasaoven').html('');
    subTotal1();
  }
});

$('#cb_brownpaper').click(function(){
  if($(this).prop('checked')){
    $('#pk_brownpaperbh').prop('readonly',false);
    hitBrownPaper();
  }else{
    $('#pk_brownpaperbh').prop('readonly',true);
    $('#pk_brownpaperbh').val(0);
    hitBrownPaper();
  }
});


$('#cb_fs').click(function(){
  if($(this).prop('checked')){
    $('#pk_fsbh').prop('readonly',false);
    hitFs();
  }else{
    $('#pk_fsbh').prop('readonly',true);
    $('#pk_fsbh').val(0);
    hitFs();
  }
});

$('#cb_bs').click(function(){
  if($(this).prop('checked')){
    $('#pk_bsbh').prop('readonly',false);
    hitBs();
  }else{
    $('#pk_bsbh').prop('readonly',true);
    $('#pk_bsbh').val(0);
    hitBs();
  }
});

$('#cb_shreddedpaper').click(function(){
  if($(this).prop('checked')){
    $('#pk_shreddedpaper').prop('readonly',false);
    hitShreddedPaper();
  }else{
    $('#pk_shreddedpaper').prop('readonly',true);
    $('#pk_shreddedpaper').val(0);
    hitShreddedPaper();
  }
});

$('#cb_singleface').click(function(){
  if($(this).prop('checked')){
    $('#pk_singleface').prop('readonly',false);
    hitSingleFace();
  }else{
    $('#pk_singleface').prop('readonly',true);
    $('#pk_singleface').val(0);
    hitSingleFace();
  }
});

$('#cb_plastik').click(function(){
  if($(this).prop('checked')){
    $('#pk_plastik').prop('readonly',false);
    hitPlastik();
  }else{
    $('#pk_plastik').prop('readonly',true);
    $('#pk_plastik').val(0);
    hitPlastik();
  }
});

$('#cb_mf').click(function(){
  disabledFloatingCtnbox();
  if($(this).is(':checked')){
    $('#pk_mfp').prop('readonly',false);
    $('#pk_mfl').prop('readonly',false);
    $('#pk_mft').prop('readonly',false);
    // $('#pk_mfp').prop('readonly',false);
    // $('#pk_mfl').prop('readonly',false);
    // $('#pk_mft').prop('readonly',false);
    setSizeMf();
    setSizeCtnbox();
    setSizeCrt();
    //setMfP();
    //setMfL();
    //setMfT();
    //hitMfCBM();
    //$('#pk_mfcbm1').prop('readonly',false);
    //var cbm=parseFloat($('#pk_mfcbm').val());
    //$('#pk_mfcbm1').val(cbm);
    //setStyrofoam();
    //hitMf();
  }else{
    $('#pk_mfp').prop('readonly',true);
    $('#pk_mfl').prop('readonly',true);
    $('#pk_mft').prop('readonly',true);
    $('#pk_mfp').val(0);
    $('#pk_mfl').val(0);
    $('#pk_mft').val(0);
    setSizeMf();
    setSizeCtnbox();
    setSizeCrt();
    //setStyrofoam();
    hitMfCBM();
    //$('#pk_mfcbm1').prop('readonly',true);
    //$('#pk_mfcbm1').val(0);
    //hitMf();
  }
});

$('#cb_innerbox').click(function(){
  if($(this).prop('checked')){
    $('#pk_innerboxprice').prop('readonly',false);
    subTotal2();
  }else{
    $('#pk_innerboxprice').prop('readonly',true);
    $('#pk_innerboxprice').val(0);
    subTotal2();
  }
});

$('#cb_styrofoam').click(function(){
  if($(this).is(':checked')){
    $('#pk_styrofoam').prop('readonly',false);
    $('#pk_styrofoam').val(1);
    setSizeCtnbox();
    setSizeFloatingCtnbox();
    setSizeCrt();
    //setStyrofoam();
    hitStyrofoam();
  }else{
    $('#pk_styrofoam').prop('readonly',true);
    $('#pk_styrofoam').val(0);
    setSizeCtnbox();
    setSizeFloatingCtnbox();
    setSizeCrt();
    //setStyrofoam();
    hitStyrofoam();
    //setCtnboxP();
    //setCtnboxL();
    //setCtnboxT();
  }
});

$('#cb_corner').click(function(){
  disabledFloatingCtnbox();
  if($(this).prop('checked')){
    $('#pk_corner').prop('readonly',false);
    $('#pk_corner').val(4);
    hitCorner();
    //setSizeFloatingCtnbox();
  }else{
    $('#pk_corner').prop('readonly',true);
    $('#pk_corner').val(0);
    hitCorner();
  }
});

$('#cb_cornerluar').click(function(){
  disabledFloatingCtnbox();
  if($(this).prop('checked')){
    $('#pk_cornerluar').prop('readonly',false);
    $('#pk_cornerluar').val(4);
    hitCornerLuar();
    setSizeFloatingCtnbox();
  }else{
    $('#pk_cornerluar').prop('readonly',true);
    $('#pk_cornerluar').val(0);
    hitCornerLuar();
    setSizeFloatingCtnbox();
  }
});

$('#cb_ctnbox').click(function(){
  if($(this).is(':checked')){
    $('#pk_ctnboxp').prop('readonly',false);
    $('#pk_ctnboxl').prop('readonly',false);
    $('#pk_ctnboxt').prop('readonly',false);
    // $('#pk_ctnboxp').prop('readonly',false);
    // $('#pk_ctnboxl').prop('readonly',false);
    // $('#pk_ctnboxt').prop('readonly',false);
    setSizeCtnbox();
    setSizeCrt();
    //setCtnboxP();
    //setCtnboxL();
    //setCtnboxT();
    //setStyrofoam();
    //hitCtnboxCBM();
  }else{
    $('#pk_ctnboxp').prop('readonly',true);
    $('#pk_ctnboxl').prop('readonly',true);
    $('#pk_ctnboxt').prop('readonly',true);
    $('#pk_ctnboxp').val(0);
    $('#pk_ctnboxl').val(0);
    $('#pk_ctnboxt').val(0);
    $('#pk_ctnboxcbm1').val(0);
    setSizeCtnbox();
    setSizeCrt();
    hitCtnboxCBM();
  }
});

$('#cb_floatingctnbox').click(function(){
  disabledMf();
  if($(this).is(':checked')){
    $('#pk_floatingctnboxp').prop('readonly',false);
    $('#pk_floatingctnboxl').prop('readonly',false);
    $('#pk_floatingctnboxt').prop('readonly',false);
    setSizeCtnbox();
    setSizeCrt();
    hitFloatingCtnboxCBM();
  }else{
    $('#pk_floatingctnboxp').prop('readonly',true);
    $('#pk_floatingctnboxl').prop('readonly',true);
    $('#pk_floatingctnboxt').prop('readonly',true);
    $('#pk_floatingctnboxp').val(0);
    $('#pk_floatingctnboxl').val(0);
    $('#pk_floatingctnboxt').val(0);
    $('#pk_floatingctnboxcbm1').val(0);
    setSizeCtnbox();
    setSizeCrt();
    hitFloatingCtnboxCBM();
  }
});

$('#cb_ukcrt').click(function(){
  if($(this).is(':checked')){
    $('#pk_crtp').prop('readonly',false);
    $('#pk_crtl').prop('readonly',false);
    $('#pk_crtt').prop('readonly',false);
    // $('#pk_crtp').prop('readonly',false);
    // $('#pk_crtl').prop('readonly',false);
    // $('#pk_crtt').prop('readonly',false);
    setSizeCrt();
    //setCrtP();
    //setCrtL();
    //setCrtT();
    
    //hitCrtCBM();

    $('#pk_crtcbm1').prop('readonly',false);
    //$('#pk_crtcbm1').val(1);
    hitHargaCrt();

    $('#cb_ispn').prop('checked',true);
    $('#pk_ispn').prop('readonly',false);
    $('#pk_ispn').val(1);
    hitIspn();
    
  }else{
    $('#pk_crtp').prop('readonly',true);
    $('#pk_crtl').prop('readonly',true);
    $('#pk_crtt').prop('readonly',true);

    $('#pk_crtp').val(0);
    $('#pk_crtl').val(0);
    $('#pk_crtt').val(0);
    hitCrtCBM();

    $('#pk_crtcbm1').prop('readonly',true);
    $('#pk_crtcbm1').val(0);
    hitHargaCrt();

    $('#cb_ispn').prop('checked',false);
    $('#pk_ispn').prop('readonly',true);
    $('#pk_ispn').val(0);
    hitIspn();
  }
});

/*$('#cb_crt').click(function(){
  if($(this).prop('checked')){
    var cbm=parseFloat($('#pk_crtcbm').val());
    $('#pk_crtcbm1').prop('readonly',false);
    $('#pk_crtcbm1').val(cbm);
    hitHargaCrt();
    $('#cb_ctnbox').prop('checked',false);
    $('#pk_ctnboxcbm1').val(0);
    $('#pk_ctnboxcbm1').prop('readonly',true);
    hitHargaCtnbox();
    $('#cb_ctnbox').prop('disabled',true);
    $('#cb_ispn').prop('checked',true);
    $('#cb_ispn').prop('disabled',false);
    $('#pk_ispn').prop('readonly',false);
    $('#pk_ispn').val(1);
    hitIspn();
  }else{
    $('#pk_crtcbm1').prop('readonly',true);
    $('#pk_crtcbm1').val(0);
    hitHargaCrt();
    $('#cb_ctnbox').prop('disabled',false);
    $('#cb_ispn').prop('checked',false);
    $('#cb_ispn').prop('disabled',true);
    $('#pk_ispn').prop('readonly',true);
    $('#pk_ispn').val(0);
    hitIspn();
  }
});*/

$('#cb_sponati').click(function(){
  if($(this).prop('checked')){
    $('#pk_sponati').prop('readonly',false);
    hitSponati();
  }else{
    $('#pk_sponati').val(0);
    $('#pk_sponati').prop('readonly',true);
    hitSponati();
  }
});

$('#cb_fisher').click(function(){
  if($(this).prop('checked')){
    $('#pk_fisher').prop('readonly',false);
    hitFisher();
  }else{
    $('#pk_fisher').val(0);
    $('#pk_fisher').prop('readonly',true);
    hitFisher();
  }
});

$('#cb_screw').click(function(){
  if($(this).prop('checked')){
    $('#pk_screw').prop('readonly',false);
    hitScrew();
  }else{
    $('#pk_screw').val(0);
    $('#pk_screw').prop('readonly',true);
    hitScrew();
  }
});

$('#cb_kuncipas').click(function(){
  if($(this).prop('checked')){
    $('#pk_kuncipas').prop('readonly',false);
    hitKuncipas();
  }else{
    $('#pk_kuncipas').val(0);
    $('#pk_kuncipas').prop('readonly',true);
    hitKuncipas();
  }
});

$('#cb_babat').click(function(){
  if($(this).prop('checked')){
    $('#pk_babat').prop('readonly',false);
    hitBabat();
  }else{
    $('#pk_babat').val(0);
    $('#pk_babat').prop('readonly',true);
    hitBabat();
  }
});

$('#cb_babat25').click(function(){
  if($(this).prop('checked')){
    $('#pk_babat25').prop('readonly',false);
    hitBaba25();
  }else{
    $('#pk_babat25').val(0);
    $('#pk_babat25').prop('readonly',true);
    hitBabat25();
  }
});

$('#cb_babat5').click(function(){
  if($(this).prop('checked')){
    $('#pk_babat5').prop('readonly',false);
    hitBabat5();
  }else{
    $('#pk_babat5').val(0);
    $('#pk_babat5').prop('readonly',true);
    hitBabat5();
  }
});

$('#cb_babat250').click(function(){
  if($(this).prop('checked')){
    $('#pk_babat250').prop('readonly',false);
    hitBabat250();
  }else{
    $('#pk_babat250').val(0);
    $('#pk_babat250').prop('readonly',true);
    hitBabat250();
  }
});

$('#cb_jhook').click(function(){
  if($(this).prop('checked')){
    $('#pk_jhook').prop('readonly',false);
    hitJhook();
  }else{
    $('#pk_jhook').val(0);
    $('#pk_jhook').prop('readonly',true);
    hitJhook();
  }
});

$('#cb_dring').click(function(){
  if($(this).prop('checked')){
    $('#pk_dring').prop('readonly',false);
    hitDring();
  }else{
    $('#pk_dring').val(0);
    $('#pk_dring').prop('readonly',true);
    hitDring();
  }
});

$('#cb_ringhanger').click(function(){
  if($(this).prop('checked')){
    $('#pk_ringhanger').prop('readonly',false);
    hitRinghanger();
  }else{
    $('#pk_ringhanger').val(0);
    $('#pk_ringhanger').prop('readonly',true);
    hitRinghanger();
  }
});

$('#cb_keyhole').click(function(){
  if($(this).prop('checked')){
    $('#pk_keyhole').prop('readonly',false);
    hitKeyhole();
  }else{
    $('#pk_keyhole').val(0);
    $('#pk_keyhole').prop('readonly',true);
    hitKeyhole();
  }
});

$('#cb_sawteeth').click(function(){
  if($(this).is(':checked')){
    $('#pk_sawteeth').prop('readonly',false);
    hitSawteeth();
  }else{
    $('#pk_sawteeth').prop('readonly',true);
    $('#pk_sawteeth').val(0);
    hitSawteeth();
  }
});

$('#cb_glides').click(function(){
  if($(this).is(':checked')){
    $('#pk_glides').prop('readonly',false);
    hitGlides();
  }else{
    $('#pk_glides').prop('readonly',true);
    $('#pk_glides').val(0);
    hitGlides();
  }
});

$('#cb_bautjcbc').click(function(){
  if($(this).is(':checked')){
    $('#pk_bautjcbc').prop('readonly',false);
    hitBautjcbc();
  }else{
    $('#pk_bautjcbc').prop('readonly',true);
    $('#pk_bautjcbc').val(0);
    hitBautjcbc();
  }
});

$('#cb_nanasan').click(function(){
  if($(this).is(':checked')){
    $('#pk_nanasan').prop('readonly',false);
    hitNanasan();
  }else{
    $('#pk_nanasan').prop('readonly',true);
    $('#pk_nanasan').val(0);
    hitNanasan();
  }
});

$('#cb_kuncil').click(function(){
  if($(this).is(':checked')){
    $('#pk_kuncil').prop('readonly',false);
    hitKuncil();
  }else{
    $('#pk_kuncil').prop('readonly',true);
    $('#pk_kuncil').val(0);
    hitKuncil();
  }
});
/* CHECKBOX */

$('#pk_manpowerprice').focusout(function(){
  if(this.value==0||this.value==''){
    $(this).focus();
  }
});


/* GET DATA UPDATE */

/*function getData(){
  var d={kode:$('#item_kode').val()};
  $.ajax({
    url:'<?php //echo site_url('getDataQt');?>',
    type:'POST',
    data:d,
    dataType:'JSON',
    success:function(result){
      console.log(result);
      $('#item_nama').val(result.Nama);
      $('#item_fotoold').val(result.Foto);

      $('#photo_view').attr('src','<?php //echo base_url();?>assets/photo_items/'+result.Foto);

      $('#item_diml_p').val(result.DimP);
      $('#item_diml_l').val(result.DimL);
      $('#item_diml_t').val(result.DimT);
      $('#item_diml_cbm').val(result.CBMDim);
      $('#item_dimm_p').val(result.DimP_M);
      $('#item_dimm_l').val(result.DimL_M);
      $('#item_dimm_t').val(result.DimT_M);
      $('#item_dimm_cbm').val(result.CBMDim_M);
      $('#item_dims_p').val(result.DimP_S);
      $('#item_dims_l').val(result.DimL_S);
      $('#item_dims_t').val(result.DimT_S);
      $('#item_dims_cbm').val(result.CBMDim_S);
      $('#item_dim_totcbm').val(result.CBMTot);
      $('#pk_truckingcostcbm').val(result.CBMTrucking);
      $('#item_berat').val(result.Weight);
      $('#h_spprice').val(result.SPPrice);
      $('#h_fin').val(result.Finishing);
      $('#h_glass').val(result.Glass);
      $('#h_mirror').val(result.Mirror);
      $('#h_metal').val(result.Metal);
      $('#h_brass').val(result.Brass);
      $('#h_aluminium').val(result.Aluminium);
      $('#h_candle').val(result.Candle);
      $('#h_stone').val(result.Stone);
      $('#h_base').val(result.Base);
      $('#h_backing').val(result.Base);
      $('#h_jdllain1').val(result.BiayaLainStr1);
      $('#h_lain1').val(result.BiayaLainNum1);
      $('#h_jdllain2').val(result.BiayaLainStr2);
      $('#h_lain2').val(result.BiayaLainNum2);
      $('#h_subtotal1').val(result.SubTotal1);
      //PACKAGING
      $('#pk_ctnboxp').val(result.CartonP);
      $('#pk_ctnboxl').val(result.CartonL);
      $('#pk_ctnboxt').val(result.CartonT);
      $('#pk_ctnboxcbm').val(result.CBMCarton);
      $('#pk_ctnboxcbm1').val(result.SubCarton);

      $('#pk_innerboxprice').val(result.BiayaInnerBox);

      $('#pk_crtp').val(result.CrateP);
      $('#pk_crtl').val(result.CrateL);
      $('#pk_crtt').val(result.CrateT);
      $('#pk_crtcbm').val(result.CrateCBM);
      $('#pk_crtcbm1').val(result.JmlPapan);

      $('#pk_mfp').val(result.MoldingP);
      $('#pk_mfl').val(result.MoldingL);
      $('#pk_mft').val(result.MoldingT);
      $('#pk_mfcbm').val(result.MoldingCBM);
      $('#pk_mfcbm1').val(result.MoldingCBM);

      $('#pk_fsbh').val(result.PanjangFoam);

      $('#pk_bsbh').val(result.PanjangBubble);

      $('#pk_shreddedpaper').val(result.BeratPaper);

      $('#pk_singleface').val(result.PanjangFace);

      $('#pk_styrofoam').val(result.lbrStyrofoam);

      $('#pk_corner').val(result.JmlConer);

      $('#pk_plastik').val(result.PanjangPlastik);

      $('#pk_manpowerprice').val(result.ManPower);

      $('#pk_ispn').val(result.JmlISPN);

      $('#pk_jhook').val(result.JmlHook);

      $('#pk_dring').val(result.JmlRing);

      $('#pk_ringhanger').val(result.JmlHanger);

      $('#pk_keyhole').val(result.JmlKeyHole);

      $('#pk_subtotal2').val(result.SubTotal2);

      $('#pk_fob1').val(result.SubTotal1);
      $('#pk_fob2').val(result.SubTotal2);
      $('#pk_devided').val(result.Devided);
      $('#pk_quote').val(result.Quote);

      subTotal1();

      hitFs();
      hitBs();
      hitShreddedPaper();
      hitSingleFace();
      hitPlastik();
      hitMf();
      hitCorner();
      hitHargaCtnbox();
      hitStyrofoam();
      hitHargaCrt();

      hitTrucking();
      setContainer();
      hitContainer();

      hitIspn();
      hitJhook();
      hitDring();
      hitKeyhole();

      subTotal2();*/

      /*hitOverhead();
      hitTax();
      hitTotal();
      hitDevided();*/
      
    //}
  //});
//}

/* GET DATA UPDATE */


/* SAVE */

function presave(){
  $.confirm({
        title: 'Konfirmasi!',
        content: 'Apakah Anda yakin ingin menyimpan ini ?',
        icon: 'fa fa-exclamation',
        animation: 'scale',
        closeAnimation: 'zoom',
        buttons: {
            Simpan: {
                //text: '',
                btnClass: 'btn-blue',
                action: function(){
                    saveData();
                }
            },
            Batal: function(){
                
            }
        }
    });
}

function saveData(){
  var foto=$('#item_foto')[0].files[0];
  var fotoold=$('#item_fotoold').val();
  var error='';
  //var errorManPower='';
  var fdata=new FormData();
  /*for(var i=0;i<foto.length;i++){
    var name = foto[i].name;
        var extension = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(extension,['gif','png','jpg','jpeg','bmp'])==-1){
      error+='Invalid '+i+' Image file';
    }else{
      fdata.append('photo',foto[i]);
    }
  }*/

  fdata.append('photo',foto);

  if($('#item_kode').val()==''){
    error+='Code can not be empty \n';
  }else{
    fdata.append('code',$('#item_kode').val()); 
  }
  
  if($('#item_nama').val()==''){
    error+='Name can not be empty \n';
  }else{
    fdata.append('name',$('#item_nama').val()); 
  }
  
  fdata.append('photo_old',fotoold);
  fdata.append('dimensionlw',$('#item_diml_p').val());
  fdata.append('dimensionll',$('#item_diml_l').val());
  fdata.append('dimensionld',$('#item_diml_t').val());
  fdata.append('dimensionlcbm',$('#item_diml_cbm').val());
  fdata.append('dimensionmw',$('#item_dimm_p').val());
  fdata.append('dimensionml',$('#item_dimm_l').val());
  fdata.append('dimensionmd',$('#item_dimm_t').val());
  fdata.append('dimensionmcbm',$('#item_dimm_cbm').val());
  fdata.append('dimensionsw',$('#item_dims_p').val());
  fdata.append('dimensionsl',$('#item_dims_l').val());
  fdata.append('dimensionsd',$('#item_dims_t').val());
  fdata.append('dimensionscbm',$('#item_dims_cbm').val());
  fdata.append('dimensiontotcbm',$('#item_dim_totcbm').val());
  fdata.append('weight',$('#item_berat').val());
  fdata.append('spprice',$('#h_spprice').unmask().val());
  fdata.append('fin',$('#h_fin').unmask().val());
  fdata.append('glass',$('#h_glass').unmask().val());
  fdata.append('mirror',$('#h_mirror').unmask().val());
  fdata.append('metal',$('#h_metal').unmask().val());
  fdata.append('brass',$('#h_brass').unmask().val());
  fdata.append('aluminium',$('#h_aluminium').unmask().val());
  fdata.append('candle',$('#h_candle').unmask().val());
  fdata.append('stone',$('#h_stone').unmask().val());
  fdata.append('base',$('#h_base').unmask().val());
  fdata.append('backing',$('#h_backing').unmask().val());
  fdata.append('strbiayalain1',$('#h_jdllain1').val());
  fdata.append('numbiayalain1',$('#h_lain1').unmask().val());
  fdata.append('strbiayalain2',$('#h_jdllain2').val());
  fdata.append('numbiayalain2',$('#h_lain2').unmask().val());
  fdata.append('strbiayalain3',$('#h_jdllain3').val());
  fdata.append('numbiayalain3',$('#h_lain3').unmask().val());
  fdata.append('strbiayalain4',$('#h_jdllain4').val());
  fdata.append('numbiayalain4',$('#h_lain4').unmask().val());
  fdata.append('strbiayalain5',$('#h_jdllain5').val());
  fdata.append('numbiayalain5',$('#h_lain5').unmask().val());

  if($('#h_subtotal1').val()=='' | $('#h_subtotal1').val()==0 && $('#h_subtotal1').val()==0.00 | $('#h_subtotal1').val()<0){
    error+='Sub Total 1 can not be 0 \n';
  }
  else{
    fdata.append('subtotal1',$('#h_subtotal1').val());
  }
  
  fdata.append('boxsizew',$('#pk_ctnboxp').val());
  fdata.append('boxsizel',$('#pk_ctnboxl').val());
  fdata.append('boxsized',$('#pk_ctnboxt').val());
  fdata.append('boxsizecbm',$('#pk_ctnboxcbm').val());
  fdata.append('boxprice1',$('#pk_ctnboxcbm1').val());
  fdata.append('boxprice2',$('#pk_ctnboxprice').unmask().val());
  fdata.append('boxpriceres',$('#pk_ctnboxtotal').val());
  fdata.append('innerboxpriceres',$('#pk_innerboxprice').unmask().val());
  fdata.append('cratesizew',$('#pk_crtp').val());
  fdata.append('cratesizel',$('#pk_crtl').val());
  fdata.append('cratesized',$('#pk_crtt').val());
  fdata.append('cratesizecbm',$('#pk_crtcbm').val());
  fdata.append('crateprice1',$('#pk_crtcbm1').val());
  fdata.append('crateprice2',$('#pk_crtprice').unmask().val());
  fdata.append('cratepriceres',$('#pk_crttotal').val());
  fdata.append('mfoamsizew',$('#pk_mfp').val());
  fdata.append('mfoamsizel',$('#pk_mfl').val());
  fdata.append('mfoamsized',$('#pk_mft').val());
  fdata.append('mfoamsizecbm',$('#pk_mfcbm').val());
  fdata.append('mfoamprice2',$('#pk_mfprice').unmask().val());
  fdata.append('mfoampriceres',$('#pk_mftotal').val());
  fdata.append('brownpaper',$('#pk_brownpaperbh').val());
  fdata.append('brownpaperprice',$('#pk_brownpaperprice').unmask().val());
  fdata.append('brownpapertotal',$('#pk_brownpapertotal').val());
  fdata.append('foamsheet1',$('#pk_fsbh').val());
  fdata.append('foamsheet2',$('#pk_fsprice').unmask().val());
  fdata.append('foamsheetres',$('#pk_fstotal').val());
  fdata.append('bubblesheet1',$('#pk_bsbh').val());
  fdata.append('bubblesheet2',$('#pk_bsprice').unmask().val());
  fdata.append('bubblesheetres',$('#pk_bstotal').val());
  fdata.append('shreddedpaper1',$('#pk_shreddedpaper').val());
  fdata.append('shreddedpaper2',$('#pk_shreddedpaperprice').unmask().val());
  fdata.append('shreddedpaperres',$('#pk_shreddedpapertotal').val());
  fdata.append('singleface1',$('#pk_singleface').val());
  fdata.append('singleface2',$('#pk_singlefaceprice').unmask().val());
  fdata.append('singlefaceres',$('#pk_singlefacetotal').val());
  fdata.append('styrofoam1',$('#pk_styrofoam').val());
  fdata.append('styrofoam2',$('#pk_styrofoamprice').unmask().val());
  fdata.append('styrofoamres',$('#pk_styrofoamtotal').val());
  fdata.append('corner1',$('#pk_corner').val());
  fdata.append('corner2',$('#pk_cornerprice').unmask().val());
  fdata.append('cornerres',$('#pk_cornertotal').val());
  fdata.append('plastic1',$('#pk_plastik').val());
  fdata.append('plastic2',$('#pk_plastikprice').unmask().val());
  fdata.append('plasticres',$('#pk_plastiktotal').val());

  if($('#pk_manpowerprice').val()=='' | $('#pk_manpowerprice').val()==0 | $('#pk_manpowerprice').val()==0.00 | $('#pk_manpowerprice').val()<0){
    error+='Man power can not be 0 \n';
  }else{
    fdata.append('manpower',$('#pk_manpowerprice').unmask().val());
  }

  fdata.append('truckingcost1',$('#pk_truckingcostprice').unmask().val());
  fdata.append('truckingcost2',$('#pk_truckingcostkap').val());
  fdata.append('truckingcost3',$('#pk_truckingcostcbm').val());

  if($('#pk_truckingtotal').val()=='' | $('#pk_truckingtotal').val()==0 | $('#pk_truckingtotal').val()==0.00 | $('#pk_truckingtotal').val()<0){
    error+='Trucking cost can not be 0 \n';
  }else{
    fdata.append('truckingcostres',$('#pk_truckingtotal').val());
  }

  fdata.append('conteinercost1',$('#pk_containercostprice').unmask().val());
  fdata.append('conteinercost2',$('#pk_containercostkap').val());
  fdata.append('conteinercost3',$('#pk_containercostcbm').val());
  
  if($('#pk_containercosttotal').val()=='' | $('#pk_containercosttotal').val()==0 | $('#pk_containercosttotal').val()==0.00 | $('#pk_containercosttotal').val()<0){
    error+='Container cost can not be 0 \n';
  }else{
    fdata.append('conteinercostres',$('#pk_containercosttotal').val());
  }
  
  fdata.append('ispn1',$('#pk_ispn').val());
  fdata.append('ispn2',$('#pk_ispnprice').unmask().val());
  fdata.append('ispnres',$('#pk_ispntotal').val());
  fdata.append('sponati1',$('#pk_sponati').val());
  fdata.append('sponati2',$('#pk_sponatiprice').unmask().val());
  fdata.append('sponatires',$('#pk_sponatitotal').val());
  fdata.append('fisher1',$('#pk_fisher').val());
  fdata.append('fisher2',$('#pk_fisherprice').unmask().val());
  fdata.append('fisherres',$('#pk_fishertotal').val());
  fdata.append('screw1',$('#pk_screw').val());
  fdata.append('screw2',$('#pk_screwprice').unmask().val());
  fdata.append('screwres',$('#pk_screwtotal').val());
  fdata.append('kuncipas1',$('#pk_kuncipas').val());
  fdata.append('kuncipas2',$('#pk_kuncipasprice').unmask().val());
  fdata.append('kuncipasres',$('#pk_kuncipastotal').val());
  fdata.append('babat1',$('#pk_babat').val());
  fdata.append('babat2',$('#pk_babatprice').unmask().val());
  fdata.append('babatres',$('#pk_babattotal').val());
  fdata.append('babat125',$('#pk_babat25').val());
  fdata.append('babat225',$('#pk_babatprice25').unmask().val());
  fdata.append('babatres25',$('#pk_babattotal25').val());
  fdata.append('babat15',$('#pk_babat5').val());
  fdata.append('babat25',$('#pk_babatprice5').unmask().val());
  fdata.append('babatres5',$('#pk_babattotal5').val());
  fdata.append('jhook1',$('#pk_jhook').val());
  fdata.append('jhook2',$('#pk_jhookprice').unmask().val());
  fdata.append('jhookres',$('#pk_jhooktotal').val());
  fdata.append('dring1',$('#pk_dring').val());
  fdata.append('dring2',$('#pk_dringprice').unmask().val());
  fdata.append('dringres',$('#pk_dringtotal').val());
  fdata.append('ringhanger1',$('#pk_ringhanger').val());
  fdata.append('ringhanger2',$('#pk_ringhangerprice').unmask().val());
  fdata.append('ringhangerres',$('#pk_ringhangertotal').val());
  fdata.append('keyhole1',$('#pk_keyhole').val());
  fdata.append('keyhole2',$('#pk_keyholeprice').unmask().val());
  fdata.append('keyholeres',$('#pk_keyholetotal').val());
  fdata.append('subtotal2',$('#pk_subtotal2').val());
  fdata.append('fobprice1',$('#pk_fob1').val());
  fdata.append('fobprice2',$('#pk_fob2').val());
  
  if($('#pk_fobtotal').val()=='' | $('#pk_fobtotal').val()==0 && $('#pk_fobtotal').val()==0.00 | $('#pk_fobtotal').val()<0){
    error+='FOB Price can not be 0 \n';
  }else{
    fdata.append('fobpriceres',$('#pk_fobtotal').val());
  }
  
  fdata.append('overhead1',$('#pk_overhead').val());
  fdata.append('overheadres',$('#pk_overheadtotal').val());
  fdata.append('subtotaloverhead',$('#pk_subtotaloverhead').val());
  fdata.append('tax1',$('#pk_taxprice').val());
  fdata.append('tax2',$('#pk_taxtotal').val());
  fdata.append('total',$('#pk_total').val());
  fdata.append('devided',$('#pk_devided').unmask().val());
  fdata.append('usdprice',$('#pk_usdprice').val());
  fdata.append('quote',$('#pk_quote').val());
  fdata.append('catatan',$('#catatan').val());
  fdata.append('hrg_jasaoven',$('#hrg_jasaoven').val());
  fdata.append('jasaoven',$('#h_jasaoven').val());
  fdata.append('glides',$('#pk_glides').val());
  fdata.append('glidesharga',$('#pk_glidesprice').val());
  fdata.append('glidestotal',$('#pk_glidestotal').val());
  fdata.append('floatingcartonp',$('#pk_floatingctnboxp').val());
  fdata.append('floatingcartonl',$('#pk_floatingctnboxl').val());
  fdata.append('floatingcartont',$('#pk_floatingctnboxt').val());
  fdata.append('cbmfloatingcarton',$('#pk_floatingctnboxcbm').val());
  fdata.append('subfloatingcarton',$('#pk_floatingctnboxcbm1').val());
  fdata.append('hrgfloatingcarton',$('#pk_floatingctnboxprice').unmask().val());
  fdata.append('biayafloatingcarton',$('#pk_floatingctnboxtotal').val());
  fdata.append('username',$('#username').val());
  fdata.append('kraf_cartonbox',$('#kraf_cartonbox').val());
  fdata.append('kraf_floatingcartonbox',$('#kraf_floatingcartonbox').val());
  fdata.append('cornerluar',$('#pk_cornerluar').val());
  fdata.append('cornerluarprice',$('#pk_cornerluarprice').unmask().val());
  fdata.append('cornerluarres',$('#pk_cornerluartotal').val());

  fdata.append('pembahanan_cleaning',$('#pembahanan_cleaning').unmask().val());
  fdata.append('pembahanan_tenaga_cleaning',$('#pembahanan_tenaga_cleaning').unmask().val());
  fdata.append('pembahanan_sikat',$('#pembahanan_sikat').unmask().val());
  fdata.append('pembahanan_tenaga_sikat',$('#pembahanan_tenaga_sikat').unmask().val());
  fdata.append('pembahanan_amplas40',$('#pembahanan_amplas40').unmask().val());
  fdata.append('pembahanan_tenaga_amplas40',$('#pembahanan_tenaga_amplas40').unmask().val());
  fdata.append('pembahanan_amplas80',$('#pembahanan_amplas80').unmask().val());
  fdata.append('pembahanan_tenaga_amplas80',$('#pembahanan_tenaga_amplas80').unmask().val());
  fdata.append('pembahanan_amplas180',$('#pembahanan_amplas180').unmask().val());
  fdata.append('pembahanan_tenaga_amplas180',$('#pembahanan_tenaga_amplas180').unmask().val());
  fdata.append('pembahanan_amplas400',$('#pembahanan_amplas400').unmask().val());
  fdata.append('pembahanan_tenaga_amplas400',$('#pembahanan_tenaga_amplas400').unmask().val());
  fdata.append('pembahanan_dowel',$('#pembahanan_dowel').unmask().val());
  fdata.append('pembahanan_tenaga_dowel',$('#pembahanan_tenaga_dowel').unmask().val());
  fdata.append('pembahanan_tenaga_pleting',$('#pembahanan_tenaga_pleting').unmask().val());

  fdata.append('finishing_antigetah',$('#finishing_antigetah').unmask().val());
  fdata.append('finishing_tenaga_antigetah',$('#finishing_tenaga_antigetah').unmask().val());
  fdata.append('finishing_sandingsealer',$('#finishing_sandingsealer').unmask().val());
  fdata.append('finishing_tenaga_sandingsealer',$('#finishing_tenaga_sandingsealer').unmask().val());
  fdata.append('finishing_finishing',$('#finishing_finishing').unmask().val());
  fdata.append('finishing_tenaga_finishing',$('#finishing_tenaga_finishing').unmask().val());
  fdata.append('finishing_topcoat',$('#finishing_topcoat').unmask().val());
  fdata.append('finishing_tenaga_topcoat',$('#finishing_tenaga_topcoat').unmask().val());
  fdata.append('finishing_bleaching',$('#finishing_bleaching').unmask().val());
  fdata.append('finishing_tenaga_bleaching',$('#finishing_tenaga_bleaching').unmask().val());
  fdata.append('babat250_qty',$('#pk_babat250').val());
  fdata.append('babat250_price',$('#pk_babatprice250').unmask().val());
  fdata.append('babat250_total',$('#pk_babattotal250').val());
  fdata.append('sawteeth_qty',$('#pk_sawteeth').val());
  fdata.append('sawteeth_price',$('#pk_sawteethprice').unmask().val());
  fdata.append('sawteeth_total',$('#pk_sawteethtotal').val());
  fdata.append('bautjcbc_qty',$('#pk_bautjcbc').val());
  fdata.append('bautjcbc_price',$('#pk_bautjcbcprice').unmask().val());
  fdata.append('bautjcbc_total',$('#pk_bautjcbctotal').val());
  fdata.append('nanasan_qty',$('#pk_nanasan').val());
  fdata.append('nanasan_price',$('#pk_nanasanprice').unmask().val());
  fdata.append('nanasan_total',$('#pk_nanasantotal').val());
  fdata.append('kuncil_qty',$('#pk_kuncil').val());
  fdata.append('kuncil_price',$('#pk_kuncilprice').unmask().val());
  fdata.append('kuncil_total',$('#pk_kunciltotal').val());
  fdata.append('pembahanan_treatment',$('#pembahanan_treatment').unmask().val());
  fdata.append('pembahanan_tenaga_treatment',$('#pembahanan_tenaga_treatment').unmask().val());
  fdata.append('margin',$('#pk_margin').val());
  fdata.append('margintotal',$('#pk_margintotal').val());
  fdata.append('subtotalmargin',$('#pk_subtotalmargin').val());

  if(error==''){
    $.ajax({
      url:'<?= site_url('submitQuotation');?>',
      data: fdata,
      method:'POST',
      dataType:'JSON',
      processData:false,
      contentType:false,
      //enctype:'multipart/form-data',
      beforeSend:function(){
        $('#btnsave_icon').html('<i class="fa fa-spinner fa-spin"></i>');
      },success:function(result){
        console.log(result);
        if(result.code==0){
          $('#btnsave_icon').html('<i class="fa fa-check-circle"></i>');
          setTimeout(function(){confirmNext(result.message,result.id);},3000);
        }else{
          $('#btnsave_icon').html('<i class="fa fa-times-circle"></i>');
                  $.alert(result.message);
        }
        
        setTimeout(function(){$('#btnsave_icon').html('<i class="fa fa-save"></i>');},3000);
        $('.qprice').mask('000.000.000.000',{reverse:true,optional:true});
      },error:function(xhr){
        $('#btnsave_icon').html('<i class="fa fa-times-circle"></i>');
        $.alert(xhr.responseText);
      }
    });
  }else{
    $.alert(error+'\n');
  }
}

function confirmNext(text,id){
  $.confirm({
        title: 'Konfirmasi!',
        content: text+', mau lanjut kemana ?',
        icon: 'fa fa-exclamation',
        animation: 'scale',
        closeAnimation: 'zoom',
        buttons: {
            Print: {
                //text: '',
                btnClass: 'btn-blue',
                action: function(){
                    //location.href="<?= site_url('printQt');?>/"+id;
                    window.open("<?= site_url('printQt');?>/"+id,"__blank");
                }
            },
            Kembali:{
              text:'Kembali',
              btnClass:'btn-orange',
              action: function(){
                location.href="<?= site_url('main');?>";
              }
            },
            Lanjut: function(){
                location.reload(1);
            }
        }
    });
}

/* SAVE */

/* PRINT ONLY */
function preprintonly(){
  $.confirm({
    title: 'Konfirmasi!',
    content: 'Apakah Anda yakin ingin print ini ?',
    icon: 'fa fa-exclamation',
    animation: 'scale',
    closeAnimation: 'zoom',
      buttons: {
        Print: {
          //text: '',
          btnClass: 'btn-blue',
            action: function(){
              printonly();
            }
        },
        Batal: function(){
                
        }
      }
  });
}

function printonly(){
  var foto=$('#item_foto')[0].files[0];
  var fotoold=$('#item_fotoold').val();
  var error='';
  //var errorManPower='';
  var fdata=new FormData();
  /*for(var i=0;i<foto.length;i++){
    var name = foto[i].name;
        var extension = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(extension,['gif','png','jpg','jpeg','bmp'])==-1){
      error+='Invalid '+i+' Image file';
    }else{
      fdata.append('photo',foto[i]);
    }
  }*/

  fdata.append('photo',foto);
  fdata.append('code',$('#item_kode').val()); 
  fdata.append('name',$('#item_nama').val()); 
  fdata.append('photo_old',fotoold);
  fdata.append('dimensionlw',$('#item_diml_p').val());
  fdata.append('dimensionll',$('#item_diml_l').val());
  fdata.append('dimensionld',$('#item_diml_t').val());
  fdata.append('dimensionlcbm',$('#item_diml_cbm').val());
  fdata.append('dimensionmw',$('#item_dimm_p').val());
  fdata.append('dimensionml',$('#item_dimm_l').val());
  fdata.append('dimensionmd',$('#item_dimm_t').val());
  fdata.append('dimensionmcbm',$('#item_dimm_cbm').val());
  fdata.append('dimensionsw',$('#item_dims_p').val());
  fdata.append('dimensionsl',$('#item_dims_l').val());
  fdata.append('dimensionsd',$('#item_dims_t').val());
  fdata.append('dimensionscbm',$('#item_dims_cbm').val());
  fdata.append('dimensiontotcbm',$('#item_dim_totcbm').val());
  fdata.append('weight',$('#item_berat').val());
  fdata.append('spprice',$('#h_spprice').unmask().val());
  fdata.append('fin',$('#h_fin').unmask().val());
  fdata.append('glass',$('#h_glass').unmask().val());
  fdata.append('mirror',$('#h_mirror').unmask().val());
  fdata.append('metal',$('#h_metal').unmask().val());
  fdata.append('brass',$('#h_brass').unmask().val());
  fdata.append('aluminium',$('#h_aluminium').unmask().val());
  fdata.append('candle',$('#h_candle').unmask().val());
  fdata.append('stone',$('#h_stone').unmask().val());
  fdata.append('base',$('#h_base').unmask().val());
  fdata.append('backing',$('#h_backing').unmask().val());
  fdata.append('strbiayalain1',$('#h_jdllain1').val());
  fdata.append('numbiayalain1',$('#h_lain1').unmask().val());
  fdata.append('strbiayalain2',$('#h_jdllain2').val());
  fdata.append('numbiayalain2',$('#h_lain2').unmask().val());
  fdata.append('subtotal1',$('#h_subtotal1').val());
  fdata.append('boxsizew',$('#pk_ctnboxp').val());
  fdata.append('boxsizel',$('#pk_ctnboxl').val());
  fdata.append('boxsized',$('#pk_ctnboxt').val());
  fdata.append('boxsizecbm',$('#pk_ctnboxcbm').val());
  fdata.append('boxprice1',$('#pk_ctnboxcbm1').val());
  fdata.append('boxprice2',$('#pk_ctnboxprice').unmask().val());
  fdata.append('boxpriceres',$('#pk_ctnboxtotal').val());
  fdata.append('innerboxpriceres',$('#pk_innerboxprice').unmask().val());
  fdata.append('cratesizew',$('#pk_crtp').val());
  fdata.append('cratesizel',$('#pk_crtl').val());
  fdata.append('cratesized',$('#pk_crtt').val());
  fdata.append('cratesizecbm',$('#pk_crtcbm').val());
  fdata.append('crateprice1',$('#pk_crtcbm1').val());
  fdata.append('crateprice2',$('#pk_crtprice').unmask().val());
  fdata.append('cratepriceres',$('#pk_crttotal').val());
  fdata.append('mfoamsizew',$('#pk_mfp').val());
  fdata.append('mfoamsizel',$('#pk_mfl').val());
  fdata.append('mfoamsized',$('#pk_mft').val());
  fdata.append('mfoamsizecbm',$('#pk_mfcbm').val());
  fdata.append('mfoamprice2',$('#pk_mfprice').unmask().val());
  fdata.append('mfoampriceres',$('#pk_mftotal').val());
  fdata.append('brownpaper',$('#pk_brownpaperbh').val());
  fdata.append('brownpaperprice',$('#pk_brownpaperprice').unmask().val());
  fdata.append('brownpapertotal',$('#pk_brownpapertotal').val());
  fdata.append('foamsheet1',$('#pk_fsbh').val());
  fdata.append('foamsheet2',$('#pk_fsprice').unmask().val());
  fdata.append('foamsheetres',$('#pk_fstotal').val());
  fdata.append('bubblesheet1',$('#pk_bsbh').val());
  fdata.append('bubblesheet2',$('#pk_bsprice').unmask().val());
  fdata.append('bubblesheetres',$('#pk_bstotal').val());
  fdata.append('shreddedpaper1',$('#pk_shreddedpaper').val());
  fdata.append('shreddedpaper2',$('#pk_shreddedpaperprice').unmask().val());
  fdata.append('shreddedpaperres',$('#pk_shreddedpapertotal').val());
  fdata.append('singleface1',$('#pk_singleface').val());
  fdata.append('singleface2',$('#pk_singlefaceprice').unmask().val());
  fdata.append('singlefaceres',$('#pk_singlefacetotal').val());
  fdata.append('styrofoam1',$('#pk_styrofoam').val());
  fdata.append('styrofoam2',$('#pk_styrofoamprice').unmask().val());
  fdata.append('styrofoamres',$('#pk_styrofoamtotal').val());
  fdata.append('corner1',$('#pk_corner').val());
  fdata.append('corner2',$('#pk_cornerprice').unmask().val());
  fdata.append('cornerres',$('#pk_cornertotal').val());
  fdata.append('plastic1',$('#pk_plastik').val());
  fdata.append('plastic2',$('#pk_plastikprice').unmask().val());
  fdata.append('plasticres',$('#pk_plastiktotal').val());
  fdata.append('manpower',$('#pk_manpowerprice').unmask().val());
  fdata.append('truckingcost1',$('#pk_truckingcostprice').unmask().val());
  fdata.append('truckingcost2',$('#pk_truckingcostkap').val());
  fdata.append('truckingcost3',$('#pk_truckingcostcbm').val());
  fdata.append('truckingcostres',$('#pk_truckingtotal').val());
  fdata.append('conteinercost1',$('#pk_containercostprice').unmask().val());
  fdata.append('conteinercost2',$('#pk_containercostkap').val());
  fdata.append('conteinercost3',$('#pk_containercostcbm').val());
  fdata.append('conteinercostres',$('#pk_containercosttotal').val());
  fdata.append('ispn1',$('#pk_ispn').val());
  fdata.append('ispn2',$('#pk_ispnprice').unmask().val());
  fdata.append('ispnres',$('#pk_ispntotal').val());
  fdata.append('sponati1',$('#pk_sponati').val());
  fdata.append('sponati2',$('#pk_sponatiprice').unmask().val());
  fdata.append('sponatires',$('#pk_sponatitotal').val());
  fdata.append('fisher1',$('#pk_fisher').val());
  fdata.append('fisher2',$('#pk_fisherprice').unmask().val());
  fdata.append('fisherres',$('#pk_fishertotal').val());
  fdata.append('screw1',$('#pk_screw').val());
  fdata.append('screw2',$('#pk_screwprice').unmask().val());
  fdata.append('screwres',$('#pk_screwtotal').val());
  fdata.append('kuncipas1',$('#pk_kuncipas').val());
  fdata.append('kuncipas2',$('#pk_kuncipasprice').unmask().val());
  fdata.append('kuncipasres',$('#pk_kuncipastotal').val());
  fdata.append('babat1',$('#pk_babat').val());
  fdata.append('babat2',$('#pk_babatprice').unmask().val());
  fdata.append('babatres',$('#pk_babattotal').val());
  fdata.append('jhook1',$('#pk_jhook').val());
  fdata.append('jhook2',$('#pk_jhookprice').unmask().val());
  fdata.append('jhookres',$('#pk_jhooktotal').val());
  fdata.append('dring1',$('#pk_dring').val());
  fdata.append('dring2',$('#pk_dringprice').unmask().val());
  fdata.append('dringres',$('#pk_dringtotal').val());
  fdata.append('ringhanger1',$('#pk_ringhanger').val());
  fdata.append('ringhanger2',$('#pk_ringhangerprice').unmask().val());
  fdata.append('ringhangerres',$('#pk_ringhangertotal').val());
  fdata.append('keyhole1',$('#pk_keyhole').val());
  fdata.append('keyhole2',$('#pk_keyholeprice').unmask().val());
  fdata.append('keyholeres',$('#pk_keyholetotal').val());
  fdata.append('subtotal2',$('#pk_subtotal2').val());
  fdata.append('fobprice1',$('#pk_fob1').val());
  fdata.append('fobprice2',$('#pk_fob2').val());
  fdata.append('fobpriceres',$('#pk_fobtotal').val());
  fdata.append('overhead1',$('#pk_overhead').val());
  fdata.append('overheadres',$('#pk_overheadtotal').val());
  fdata.append('subtotaloverhead',$('#pk_subtotaloverhead').val());
  fdata.append('tax1',$('#pk_taxprice').val());
  fdata.append('tax2',$('#pk_taxtotal').val());
  fdata.append('total',$('#pk_total').val());
  fdata.append('devided',$('#pk_devided').unmask().val());
  fdata.append('usdprice',$('#pk_usdprice').val());
  fdata.append('quote',$('#pk_quote').val());
  fdata.append('hrg_jasaoven',$('#hrg_jasaoven').val());
  fdata.append('jasaoven',$('#h_jasaoven').val());
  fdata.append('glides',$('#pk_glides').val());
  fdata.append('glidesharga',$('#pk_glidesprice').val());
  fdata.append('glidestotal',$('#pk_glidestotal').val());
  fdata.append('floatingcartonp',$('#pk_floatingctnboxp').val());
  fdata.append('floatingcartonl',$('#pk_floatingctnboxl').val());
  fdata.append('floatingcartont',$('#pk_floatingctnboxt').val());
  fdata.append('cbmfloatingcarton',$('#pk_floatingctnboxcbm').val());
  fdata.append('subfloatingcarton',$('#pk_floatingctnboxcbm1').val());
  fdata.append('hrgfloatingcarton',$('#pk_floatingctnboxprice').unmask().val());
  fdata.append('biayafloatingcarton',$('#pk_floatingctnboxtotal').val());
  fdata.append('username',$('#username').val());
  fdata.append('kraf_cartonbox',$('#kraf_cartonbox').val());
  fdata.append('kraf_floatingcartonbox',$('#kraf_floatingcartonbox').val());
  fdata.append('cornerluar',$('#pk_cornerluar').val());
  fdata.append('cornerluarprice',$('#pk_cornerluarprice').unmask().val());
  fdata.append('cornerluarres',$('#pk_cornerluartotal').val());

  fdata.append('pembahanan_cleaning',$('#pembahanan_cleaning').unmask().val());
  fdata.append('pembahanan_tenaga_cleaning',$('#pembahanan_tenaga_cleaning').unmask().val());
  fdata.append('pembahanan_sikat',$('#pembahanan_sikat').unmask().val());
  fdata.append('pembahanan_tenaga_sikat',$('#pembahanan_tenaga_sikat').unmask().val());
  fdata.append('pembahanan_amplas40',$('#pembahanan_amplas40').unmask().val());
  fdata.append('pembahanan_tenaga_amplas40',$('#pembahanan_tenaga_amplas40').unmask().val());
  fdata.append('pembahanan_amplas80',$('#pembahanan_amplas80').unmask().val());
  fdata.append('pembahanan_tenaga_amplas80',$('#pembahanan_tenaga_amplas80').unmask().val());
  fdata.append('pembahanan_amplas180',$('#pembahanan_amplas180').unmask().val());
  fdata.append('pembahanan_tenaga_amplas180',$('#pembahanan_tenaga_amplas180').unmask().val());
  fdata.append('pembahanan_amplas400',$('#pembahanan_amplas400').unmask().val());
  fdata.append('pembahanan_tenaga_amplas400',$('#pembahanan_tenaga_amplas400').unmask().val());
  fdata.append('pembahanan_dowel',$('#pembahanan_dowel').unmask().val());
  fdata.append('pembahanan_tenaga_dowel',$('#pembahanan_tenaga_dowel').unmask().val());
  fdata.append('pembahanan_tenaga_pleting',$('#pembahanan_tenaga_pleting').unmask().val());

  fdata.append('finishing_antigetah',$('#finishing_antigetah').unmask().val());
  fdata.append('finishing_tenaga_antigetah',$('#finishing_tenaga_antigetah').unmask().val());
  fdata.append('finishing_sandingsealer',$('#finishing_sandingsealer').unmask().val());
  fdata.append('finishing_tenaga_sandingsealer',$('#finishing_tenaga_sandingsealer').unmask().val());
  fdata.append('finishing_finishing',$('#finishing_finishing').unmask().val());
  fdata.append('finishing_tenaga_finishing',$('#finishing_tenaga_finishing').unmask().val());
  fdata.append('finishing_topcoat',$('#finishing_topcoat').unmask().val());
  fdata.append('finishing_tenaga_topcoat',$('#finishing_tenaga_topcoat').unmask().val());
  fdata.append('finishing_bleaching',$('#finishing_bleaching').unmask().val());
  fdata.append('finishing_tenaga_bleaching',$('#finishing_tenaga_bleaching').unmask().val());
  fdata.append('babat250_qty',$('#pk_babat250').val());
  fdata.append('babat250_price',$('#pk_babatprice250').unmask().val());
  fdata.append('babat250_total',$('#pk_babattotal250').val());
  fdata.append('sawteeth_qty',$('#pk_sawteeth').val());
  fdata.append('sawteeth_price',$('#pk_sawteethprice').unmask().val());
  fdata.append('sawteeth_total',$('#pk_sawteethtotal').val());

  /*if($('#pk_manpowerprice').val()==0||$('#pk_manpowerprice').val()==''){
    $('#pk_manpowerprice').focus();
    //$('#pk_manpowerprice').select();
  }else{*/
    $.ajax({
      url:'<?= site_url('printOnlyQt');?>',
      data: fdata,
      method:'POST',
      dataType:'JSON',
      processData:false,
      contentType:false,
      //enctype:'multipart/form-data',
      success:function(result){
        console.log(result);
        if(result.code==0){
          $.alert('Siap untuk di print, tunggu sebentar...');
          var id=result.id;
          setTimeout(function(){
            window.open("<?= site_url('printOnlyQtPrint');?>/"+id,"__blank");
          },3000);
        }else{
          $.alert(result.message);
        }
        $('.qprice').mask('000.000.000.000',{reverse:true,optional:true});
      },error:function(xhr){
        $.alert(xhr.responseText);
      }
    });
  //}
}
/* PRINT ONLY */
</script>
