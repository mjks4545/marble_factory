<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
    <!-- Small boxes (Stat box) -->
	<!-- Main row -->
        <section class="content">
            <div class="row">
            <!-- left column -->
	        <div class="col-md-12">
              <!-- general form elements -->
		    <div class="box box-primary">
			<div class="box-header with-border">
			<h3 class="box-title">Edit Sale</h3><br />
			<div id="some_message">
			    
			</div>
			<?php 
			    
			    //echo '<pre>';
			    //print_r($size);
			
			?>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?=  site_url() ?>sale/edit_single_sale_after_post/<?=$size->size_id?>" id="create_sale_after_post">
			    <div class="box-body">
				<div class="row">
				    <div class="form-group col-md-6">
					<label for="size">Size</label>
					<input type="text" name="size" id="size" class="form-control" value="<?=$size->size?>">
				    </div>
				    <div class="form-group col-md-6">
				       <label for="quantity">Quantity</label>
					<input type="text" name="quantity" id="quantity" class="form-control" value="<?=$size->quantity?>">
				    </div>
				    <div class="form-group col-md-12">
				        <label for="price">Price</label>
					<input type="text" name="price" id="price" class="form-control" value="<?=$size->price?>">
				    </div>
				</div>
				<div class="form-group col-md-12">
				    <input type="submit" name="submit" class="btn btn-primary form-control" value="Submit" />
				</div>	
			    </div>
			</form>
		    </div>
		</div>  
	    </div>
	    <!-- /.box -->
        </section><!-- /.content -->
    </section>
    <!-- /.content-wrapper -->
</div> 

