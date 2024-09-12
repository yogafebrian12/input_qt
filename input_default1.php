<!-- Content Header (Page header) -->
<section class="content-header">
<h1>Default Setting
<small>Input Default Setting</small></h1>
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
	<h3 class="box-title">Harga</h3>
	<div class="pull-right">
		<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	</div>
</div>
<div class="box-body">

<div class="row">
<div class="col-md-12">

<div class="col-md-4">

	<div class="form-group">
		<label>Carton Box</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>
		<input class="form-control inputs qprice" type="text" name="cartonbox" value="<?php echo $d['CartonBox'];?>" required>
		</div>
	</div>

	<div class="form-group">
		<label>Kayu Crate / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="crate" value="<?php echo $d['Craten'];?>" required>
		</div>
	</div>

	<div class="form-group">
		<label>Molding Foam / CBM</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="moldingfoam" value="<?php echo $d['MoldingFoam'];?>" required>
		</div>
	</div>

	<div class="form-group">
		<label>Brown Paper / Lembar</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="brownpaper" value="<?php echo $d['BrownPaper'];?>" required>
		</div>
	</div>

	<div class="form-group">
		<label>Foam Sheet / Meter</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="foamsheet" value="<?php echo $d['FoamSheet'];?>" required>
		</div>
	</div>

	<div class="form-group">
		<label>Bubble Sheet / Meter</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="bubblesheet" value="<?php echo $d['BubleSheet'];?>" required>
		</div>
	</div>

	<div class="form-group">
		<label>Shredded Paper / KG</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="shreddedpaper" value="<?php echo $d['ShreddedPaper'];?>" required>
		</div>
	</div>

	<div class="form-group">
		<label>Single Face / Meter</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="singleface" value="<?php echo $d['SingleFace'];?>" required>
		</div>
	</div>

	<div class="form-group">
		<label>Absorb Dry (5 GR) / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP</span>
		<input type="text" class="form-control inputs qprice" name="babat5" value="<?= $d['babat_5'];?>">
		</div>
	</div>

</div>

<div class="col-md-4">

	<div class="form-group">
		<label>Styrofoam / Lebar</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="styrofoam" value="<?php echo $d['Styrofoam2mm'];?>" required>
		</div>
	</div>

	<div class="form-group">
		<label>Corner / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="corner" value="<?php echo $d['Corner'];?>" required>
		</div>
	</div>

	<div class="form-group">
		<label>Plastic / Meter</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="plastic" value="<?php echo $d['Plastik'];?>" required></input>
		</div>
	</div>

	<div class="form-group">
		<label>Harga Truck</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="hargatruck" value="<?php echo $d['Trucking'];?>" required></input>
		</div>
	</div>

	<div class="form-group">
		<label>Harga Container</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="hargacontainer" value="<?php echo $d['Conteiner'];?>" required></input>
		</div>
	</div>

	<div class="form-group">
		<label>ISPN</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="ispn" value="<?php echo $d['ISPN'];?>" required>
		</div>
	</div>

	<div class="form-group">
		<label>Spon Ati / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP</span>
		<input type="text" class="form-control inputs qprice" name="sponati" value="<?= $d['sponati'];?>">
		</div>
	</div>

	<div class="form-group">
		<label>Absorb Dry (25 GR) / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP</span>
		<input type="text" class="form-control inputs qprice" name="babat25" value="<?= $d['babat_25'];?>">
		</div>
	</div>

</div>

<div class="col-md-4">

	<div class="form-group">
		<label>J. Hook / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="jhook" value="<?php echo $d['JHook'];?>" required>
		</div>
	</div>
	
	<div class="form-group">
		<label>D Ring / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="dring" value="<?php echo $d['Dring'];?>" required></input>
		</div>
	</div>

	<div class="form-group">
		<label>Ring Hanger / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="ringhanger" value="<?php echo $d['Hanger'];?>" required></input>
		</div>
	</div>

	<div class="form-group">
		<label>KeyHole / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP.</span>	
		<input class="form-control inputs qprice" type="text" name="keyhole" value="<?php echo $d['Keyhole'];?>" required></input>
		</div>
	</div>

	<div class="form-group">
		<label>Fisher / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP</span>
		<input type="text" class="form-control inputs qprice" name="fisher" value="<?= $d['fisher'];?>">
		</div>
	</div>

	<div class="form-group">
		<label>Screw / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP</span>
		<input type="text" class="form-control inputs qprice" name="screw" value="<?= $d['screw'];?>">
		</div>
	</div>

	<div class="form-group">
		<label>Kunci Pas / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP</span>
		<input type="text" class="form-control inputs qprice" name="kuncipas" value="<?= $d['kuncipas'];?>">
		</div>
	</div>

	<div class="form-group">
		<label>Absorb Dry (50 GR) / PCS</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon">RP</span>
		<input type="text" class="form-control inputs qprice" name="babat" value="<?= $d['babat'];?>">
		</div>
	</div>

</div>

</div>
</div>

<div class="row">
<div class="col-md-12">

<div class="col-md-3">
	<div class="form-group">
		<label>Over Head</label>
		<div class="input-group input-group-sm">
		<input class="form-control inputs" type="number" name="overhead" placeholder="" value="<?php echo $d['OverHead'];?>" required></input>
		<span class="input-group-addon">%</span>
		</div>
	</div>
</div>

<div class="col-md-3">
	<div class="form-group">
		<label>Tax</label>
		<div class="input-group input-group-sm">	
		<input class="form-control inputs" type="number" name="tax" value="<?php echo $d['Tax'];?>" required></input>
		<span class="input-group-addon">%</span>
		</div>
	</div>
</div>

<div class="col-md-3">
	<div class="form-group">
		<label>CBM Truck</label>
		<div class="input-group input-group-sm">	
		<span class="input-group-addon"><i class="fa fa-truck"></i></span>
		<input class="form-control inputs" type="number" name="cbmtruck" value="<?php echo $d['KapasitaTruck'];?>" required>
		</div>
	</div>
</div>

<div class="col-md-3">
	<div class="form-group">
		<label>CBM Container</label>
		<div class="input-group input-group-sm">
		<span class="input-group-addon"><i class="fa fa-truck"></i></span>
		<input class="form-control inputs" type="number" name="cbmcontainer" value="<?php echo $d['KapasitasContainer'];?>" required>
		</div>
	</div>
</div>

</div>
</div>

</div>
</div>
</div>
</div>

<div class="box box-default">
<div class="box-header with-bordered">
	<h3 class="box-title">Ketebalan</h3>
	<div class="pull-right">
		<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	</div>
</div>
<div class="box-body">
<div class="row">

<div class="col-md-12">

<div class="col-md-3">

<div class="form-group">
	<label>Moulding Foam</label>
	<div class="input-group input-group-sm">
		<input type="number" class="form-control inputs" name="k_mf" value="<?= $d['k_mf'];?>">
	</div>
</div>

</div>

<div class="col-md-3">

<div class="form-group">
	<label>Carton Box</label>
	<div class="input-group input-group-sm">
		<input type="number" class="form-control inputs" name="k_ctn" value="<?= $d['k_ctn'];?>">
	</div>
</div>

</div>

<div class="col-md-3">
	
<div class="form-group">
	<label>Crate</label>
	<div class="input-group input-group-sm">
		<input type="number" class="form-control inputs" name="k_crt" value="<?= $d['k_crt'];?>">
	</div>
</div>

</div>

<div class="col-md-3">

<div class="form-group">
	<label>Styrofoam</label>
	<input type="number" class="form-control inputs" name="k_sr" value="<?= $d['k_sr'];?>">
</div>

</div>

</div>

</div>
</div>
</div>

<div class="box box-default">
<div class="box-body">
	<div class="row">
		<div class="col-md-12">
		<div class="text-center">
			<a class="btn btn-default inputs" href="<?= site_url('main');?>">Kembali ke daftar quotation</a>
			<button class="btn btn-primary inputs" onclick="presave();"><span id="btnsave_icon"></span> Simpan</button>
		</div>
		</div>
	</div>
</div>
</div>

</section>

<script type="text/javascript" src="<?= base_url();?>plugin/jquery-mask/dist/jquery.mask.min.js"></script>

<script type="text/javascript">
$('.inputs').keydown(function (e) {
    if (e.which === 13) {
        var index = $('.inputs').index(this) + 1;
        $('.inputs').eq(index).focus();
    }
});

$('.qprice').inputmask({
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

function presave(){
	$.confirm({
    title: 'Confirm!',
    content: 'Anda yakin ingin menyimpan ini ?',
    icon: 'fa fa-warning',
    animation: 'scale',
    closeAnimation: 'zoom',
      buttons: {
            Save: {
                text: 'Yes',
                btnClass: 'btn-blue',
              	action: function(){
                	saveData();      
              	}
            },
            No: function(){
                
            }
        }
  	});
}

function saveData(){
	var d={
		h_ctnbox:$('input[name="cartonbox"]').val(),
		h_crate:$('input[name="crate"]').val(),
		h_mf:$('input[name="moldingfoam"]').val(),
		h_bp:$('input[name="brownpaper"]').val(),
		h_fs:$('input[name="foamsheet"]').val(),
		h_bs:$('input[name="bubblesheet"]').val(),
		h_sp:$('input[name="shreddedpaper"]').val(),
		h_sf:$('input[name="singleface"]').val(),
		h_styrofoam:$('input[name="styrofoam"]').val(),
		h_corner:$('input[name="corner"]').val(),
		h_plastic:$('input[name="plastic"]').val(),
		h_truck:$('input[name="hargatruck"]').val(),
		h_cont:$('input[name="hargacontainer"]').val(),
		h_ispn:$('input[name="ispn"]').val(),
		h_jhook:$('input[name="jhook"]').val(),
		h_dring:$('input[name="dring"]').val(),
		h_ringhanger:$('input[name="ringhanger"]').val(),
		h_keyhole:$('input[name="keyhole"]').val(),
		h_sponati:$('input[name="sponati"]').val(),
		h_fisher:$('input[name="fisher"]').val(),
		h_screw:$('input[name="screw"]').val(),
		h_kuncipas:$('input[name="kuncipas"]').val(),
		h_Babat:$('input[name="babat"]').val(),
		h_Babat25:$('input[name="babat25"]').val(),
		h_Babat5:$('input[name="babat5"]').val(),
		h_overhead:$('input[name="overhead"]').val(),
		h_tax:$('input[name="tax"]').val(),
		h_cbmtruck:$('input[name="cbmtruck"]').val(),
		h_cbmcontainer:$('input[name="cbmcontainer"]').val(),
		k_mf:$('input[name="k_mf"]').val(),
		k_ctn:$('input[name="k_ctn"]').val(),
		k_crt:$('input[name="k_crt"]').val(),
		k_sr:$('input[name="k_sr"]').val()
	};

	$.ajax({
		url:'<?= site_url('default_savedata');?>',
		type:'POST',
		data:d,
		dataType:'JSON',
		beforeSend:function(){
			$('#btnsave_icon').html('<i class="fa fa-spinner fa-spin"></i>');
		},success:function(result){
			if(result.code==0){
				$('#btnsave_icon').html('<i class="fa fa-check-circle"></i>');
				confirmNext(result.message);
			}else{
				$('#btnsave_icon').html('<i class="fa fa-times-circle"></i>');
			}
			setTimeout(function(){
				$('#btnsave_icon').html('<i class="fa fa-save"></i>');
			},3000);
		},error:function(xhr){
			$.alert(xhr.responseText);
		}
	});
}

function confirmNext(text){
	$.confirm({
    title: 'Confirm!',
    content: 'Anda mau ke mana setelah ini ?',
    icon: 'fa fa-warning',
    animation: 'scale',
    closeAnimation: 'zoom',
      buttons: {
            Kembali: {
                text: 'Kembali ke quotation',
                btnClass: 'btn-blue',
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

$(document).ready(function(){

$('#btnsave_icon').html('<i class="fa fa-save"></i>');

});
</script>