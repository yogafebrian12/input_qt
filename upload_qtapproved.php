<link href="<?php echo base_url();?>plugin/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url();?>plugin/bower_components/select2/dist/js/select2.full.min.js"></script>

<style>
    /*ATUR STYLE SELECT2 AGAR SESUAI*/
    .select2-container .select2-selection--single
    {
        height: 46px!important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered
    {
        line-height: 45px!important;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow
    {
        height: 46px!important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice
    {
        background-color: rgba(0,0,0,0.41);
        color: whitesmoke;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove
    {
        color: whitesmoke;
    }
    span.select2-selection.select2-selection--single {
        outline: none;
    }
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
<h1>Upload Quotation Approved
<small>Upload your fix quotation data</small></h1>
<!--<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
</ol>-->
</section>

<!-- Main content -->
<section class="content container-fluid">

<div class="row">
	<div class="col-md-12">
		<div class="box box-default">
			<div class="box-body">
				<div id="alert-uploadqt"></div>
				<form id="form-uploadqt" method="POST" enctype="multipart/form-data">
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="form-group">
								<label>Kode Item</label>
								<select class="form-control select2-container" name="item">
									<?php foreach($item as $i):?>
										<option value="<?php echo $i->id;?>"><?php echo $i->Kode;?> | <?php echo $i->Nama;?></option>
									<?php endforeach;?>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Gambar Quotation yang sudah di Approved</label>
								<input type="file" class="form-control" name="qtapproved" accept="image/*" required>
							</div>
						</div>
						<div class="col-md-4">
							<div style="margin-top: 25px;">
								<button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-plus"></i> Upload</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="box box-default">
			<div class="box-body">
				<div class="col-md-12">
					<button class="btn btn-default" onclick="loadData();">Refresh data</button>
				</div>
				<div class="col-md-12" style="margin-top:10px;">
					<div id="data"></div>
				</div>
			</div>
		</div>
	</div>
</div>

</section>

<script type="text/javascript">
function loadData(){
	$.ajax({
		url:'<?php echo base_url();?>quotationapproved/loadData',
		beforeSend:function(){
			$('#data').html('<div class="text-center"><i class="fa fa-spinner fa-spin"></i> Memuat data...</div>');
		},success:function(data){
			$('#data').html(data);
		},error:function(xhr){
			$('#data').html(xhr.responseText);
		}
	});
}

$(function(){
	loadData();
	$('.select2-container').select2();
});

$('#form-uploadqt').submit(function(e){
	var form = $('#form-uploadqt');
	var formData = new FormData(form[0]);

	$.ajax({
		url:'<?php echo base_url();?>quotationapproved/uploaddata',
		type:'POST',
		data:formData,
		contentType: false,
        processData: false,
        dataType:'JSON',
        beforeSend:function(){
        	$('#alert-uploadqt').html('<div class="alert alert-warning"><i class="fa fa-spinner fa-spin"></i> Sedang menyimpan...</div');
        },success:function(result){
        	if(result.code == 0){
        		$('#alert-uploadqt').html('<div class="alert alert-success"><i class="fa fa-check"></i> '+result.message+'</div');
        		loadData();
        	}else{
        		$('#alert-uploadqt').html('<div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> '+result.message+'</div');
        		loadData();
        	}
        },error:function(xhr){
        	$('#alert-uploadqt').html('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> '+xhr.responseText+'</div');
        }
	});
});
</script>