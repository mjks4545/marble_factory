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
			<h3 class="box-title">Create New Purchase</h3><br />
			<div id="some_message">
			    
			</div>
			<!--<?php print_r($result);?>-->
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?=  site_url() ?>home/create_invoice_after_post" id="create_invoice_after_post">
			    <div class="box-body">
				<div class="form-group col-md-6">
				    <label for="exampleInputPassword1">Vehicle no</label>
				    <input type="text" name="Vehicle_no" class="form-control">
				</div>
				<div class="form-group col-md-6">
				   <label for="exampleInputPassword1">Mining</label>
				    <input type="text" name="Mining" class="form-control">
				</div> 
				<div class="form-group col-md-6">
				    <label for="exampleInputPassword1">Type</label>
				    <input type="text" name="type" class="form-control">
				</div>
				<div class="form-group col-md-6">
				    <label for="exampleInputPassword1">Weight in Ton</label>
				    <input type="text" name="weight_ton" class="form-control">
				</div>
				<div class="form-group col-md-6">
				    <label for="exampleInputPassword1">price</label>
				    <input type="text" name="price" class="form-control">
				</div>
				<div class="form-group col-md-6">
				    <label for="exampleInputPassword1">Weight in Man</label>
				    <input type="text" name="Weight_man" class="form-control">
				</div>
				<div class="form-group col-md-6">
				    <label for="exampleInputPassword1">Car rent per man</label>
				    <input type="text" name="Car_rent_man" class="form-control">
				</div> 
				<div class="form-group col-md-6">
				    <label for="exampleInputPassword1">Tax</label>
				    <input type="text" name="tax" class="form-control">
				</div>
				<div class="form-group col-md-12">
				    <label for="exampleInputPassword1">Bonus</label>
				    <input type="text" name="bonus" class="form-control">
				</div>
				<div class="form-group col-md-12">
				    <input type="submit" name="submit" class="btn btn-primary form-control" value="Submit">
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

