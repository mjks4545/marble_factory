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
			<h3 class="box-title">Create New User</h3><br />
			<div id="some_message">
			    
			</div>
			<!--<?php print_r($result);?>-->
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?=  site_url() ?>user/user_add_after_post" id="create_expense_after_post">
			    <div class="box-body">
				<div class="form-group col-md-6">
				    <label for="paidto">Username</label>
				    <input type="text" name="paidto" id="paidto" class="form-control">
				</div>	
				<div class="form-group col-md-6">
				    <label for="paidto">Father</label>
				    <input type="text" name="fathername" id="fathername" class="form-control">
				</div>	
				<div class="form-group col-md-12">
				    <label for="paidto">&nbsp;</label>
				    <input type="submit" name="submit" value="Insert" class="btn btn-primary form-control">
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

