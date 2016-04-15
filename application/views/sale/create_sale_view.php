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
			<h3 class="box-title">Create New Sale</h3><br />
			<div id="some_message">
			    
			</div>
			<!--<?php print_r($result);?>-->
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?=  site_url() ?>sale/create_sale_after_post" id="create_sale_after_post">
			    <div class="box-body">
				<div class="row">
				    <div class="form-group col-md-6">
					<label for="name_of_buyer">Name Of Buyer</label>
					<input type="text" name="name_of_buyer" id="name_of_buyer" class="form-control">
				    </div>
				    <div class="form-group col-md-6">
				       <label for="marble_patty">Marble Type</label>
					<input type="text" name="marble_patty" id="marble_patty" class="form-control">
				    </div>
				</div>
				<div  id="sale_view_add">
				    <input type="hidden" name="counter" id="counter" value="1">
				    <div class="form-group col-md-12">
					<a href="#" class="btn btn-success form-control" id="add_more_fields">Add More Items to Bill</a>
				    </div>
				    <div class="form-group col-md-6">
				        <label for="patty_size">Patty Size</label>
				        <input type="text" name="patty_size_1" id="patty_size" class="form-control">
				    </div>
				    <div class="form-group col-md-6">
				        <label for="number_of_items">Number Of Bundle</label>
				        <input type="text" name="number_of_items_1" class="form-control">
				    </div>
				    <div class="form-group col-md-12">
				        <label for="price">Price</label>
				        <input type="text" name="price_1" id="price_1" class="form-control">
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

