<?php if(count($map) > 0):?>
<div class="row">
	<div class="col-md-12">
		<input type="text" class="form-control" id="search" placeholder="(Cari sesuatu...)">
	</div>
</div>
<?php endif;?>

<div class="row" style="margin-top:10px;">
	<?php foreach($map as $map):?>
		<div class="col-md-3 foto-appr">
			<a href="<?php echo base_url();?>assets/quotationapproved/<?php echo $map;?>" target="__blank" style="text-decoration:none;color:black;">
			<div class="thumbnail">
				<img src="<?php echo base_url();?>assets/quotationapproved/<?php echo $map;?>" />
				<div class="caption text-center">
				<a href="<?php echo base_url();?>assets/quotationapproved/<?php echo $map;?>" target="__blank" style="text-decoration:none;color:black;">
				<?php
				$dir = './assets/quotationapproved/';
				if(is_dir($dir)){
					$loc = $_SERVER['DOCUMENT_ROOT'].'assets/quotationapproved/'.$map;
					$file = pathinfo($loc);
					$item = $KSys->getWhere('qt',array('id'=>$file['filename']))->row_array();
					echo $item['Kode'].' - '.strtoupper($item['Nama']);

					if(file_exists(getcwd().'/assets/quotationapproved/'.$map)){
						$file_lastmodif = filemtime(getcwd().'/assets/quotationapproved/'.$map);
						echo '<br>';
						echo 'Last Modified: '.date('d-m-Y H:i:s',$file_lastmodif);
					}
				}
				?>	
				</div>
			</div>
			</a>
		</div>
	<?php endforeach;?>
</div>

<script type="text/javascript">
$('#search').keyup(function(){
	var txt = $(this).val();
	$('.foto-appr').each(function(){
		if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
           	$(this).show();
       	}else{
       		$(this).hide();
       	}
	});
});
</script>