<!-- Content Header (Page header) -->
<section class="content-header">
<h1>List
<small>List of Quotation</small></h1>
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

<div class="row">
<div class="col-md-12">
<!--<button class="btn btn-primary btn-sm"><i class="fa fa-refresh fa-spin" id="r_tbl"></i> Reload</button>-->
<a class="btn btn-default" href="<?= site_url('main');?>">Reload</a>
</div>
</div>

<div class="row" style="margin-top:15px;">
<div class="col-md-12">

<div id="alert"></div>
<div class="table-responsive">
	<table id="data" class="table table-bordered table-striped display" style="width:100%;">
		<thead>
			<tr>
				<th class="text-uppercase">No.</th>
				<th class="text-uppercase">Item's Code</th>
				<th class="text-uppercase">Item's Name</th>
				<th class="text-uppercase">Item's Photo</th>
				<th class="text-uppercase">Item's CBM</th>
				<th class="text-uppercase">Quote</th>
				<th>#</th>
			</tr>
		</thead>
	</table>
</div>

</div>
</div>

</div>
</div>
</div>
</div>

<!-- <?php if($this->session->userdata('init')=='su'):?>
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
		<div class="table-responsive">
		<table id="data1" class="table table-bordered table-striped display" style="width:100%;">
		<thead>
			<tr>
				<th class="text-uppercase">No.</th>
				<th class="text-uppercase">Item's Code</th>
				<th class="text-uppercase">Item's Name</th>
				<th class="text-uppercase">Item's Photo</th>
				<th class="text-uppercase">Item's CBM</th>
				<th class="text-uppercase">Quote</th>
				<th class="text-uppercase">User Input</th>
				<th class="text-uppercase">User Update</th>
				<th>#</th>
			</tr>
		</thead>
		</table>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
<?php endif;?> -->

</section>

<script type="text/javascript">
function tData(){
	$('#data').DataTable({
		"processing":true,
		//"serverSide":true,
		"order":[],
		"ajax":{
			"url":"<?= site_url('listQt');?>",
			"type":"POST"
		},
		"columnDefs":[{
			"targets":[0,3,6],
			"orderable":false
		}]
	});

	// Setup - add a text input to each footer cell
    /*$('#data thead th').each( function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search '+title+'" />');
    });*/

	// DataTable
    var table = $('#data').DataTable();
 
    //table.search('x').draw();
    // Apply the search
    $('#data input').on('keyup',function(){
    	table.search(this.value).draw();
    });
}

function tData1(){
	$('#data1').DataTable({
		"processing":true,
		//"serverSide":true,
		"order":[],
		"ajax":{
			"url":"<?= site_url('listQt1');?>",
			"type":"POST"
		},
		"columnDefs":[{
			"targets":[0,3,6],
			"orderable":false
		}]
	});

	// Setup - add a text input to each footer cell
    /*$('#data thead th').each( function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search '+title+'" />');
    });*/

	// DataTable
    var table = $('#data1').DataTable();
 
    //table.search('x').draw();
    // Apply the search
    $('#data1 input').on('keyup',function(){
    	table.search(this.value).draw();
    });
}

function reload_table(id){
    $(id).DataTable().ajax.reload();
}

function preDelData(id){
	$.confirm({
        title: 'Konfirmasi!',
        content: 'Apakah Anda yakin ingin menghapus ini ?',
        icon: 'fa fa-exclamation',
        animation: 'scale',
        closeAnimation: 'zoom',
        buttons: {
            Ya: {
                //text: '',
                btnClass: 'btn-blue',
                action: function(){
                    delData(id);
                }
            },
            Tidak: function(){
                
            }
        }
    });
}

function delData(id){
	$.ajax({
		url:'<?= site_url('deleteQt');?>/'+id,
		success:function(data){
			$.alert(data);
			reload_table('#data');
		},error:function(xhr){
			$.alert(xhr.responseText);
		}
	});
}

$(document).ready(function(){

tData();
//tData1();

});

$('#r_tbl').click(function(){
	//$('#data').DataTable().ajax.reload();
	//tData();
	location.reload();
});
</script>