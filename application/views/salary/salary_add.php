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
			<h3 class="box-title">Give Salary</h3><br />
			<div id="some_message">
			    
			</div>
			<?php 
//			print_r($result);
			?>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?=  site_url() ?>salary/salary_add_post" id="create_expense_after_post">
			    <div class="box-body">
				<div class="form-group col-md-6">
				    <label for="paidto">Username</label>
				    <select name="user" class="form-control" >
					<?php
					    foreach( $data as $data ){
						echo '<option value="' . $data->user_id . '">' . $data->username . '</option>';
					    }
					?>
				    </select>
				</div>
				<div class="form-group col-md-6">
				    <label for="reason">Amount</label>
				    <input type="text" name="amount" id="reason" class="form-control" value="">
				</div>
				<div class="form-group col-md-6">
				    <label for="reason">Reason</label>
				    <input type="text" name="reason" class="form-control" placeholder="Reason">
				</div>
				<div class="form-group col-md-6">
				    <label for="reason">&nbsp;</label>
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

