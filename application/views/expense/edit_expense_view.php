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
			<h3 class="box-title">Edit Expense</h3><br />
			<div id="some_message">
			    
			</div>
			<?php 
//			print_r($result);
			?>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?=  site_url() ?>expense/edit_expense_after_post/<?=$result->expense_id;?>" id="create_expense_after_post">
			    <div class="box-body">
				<div class="form-group col-md-6">
				    <label for="paidto">Paid To</label>
				    <input type="text" name="paidto" id="paidto" class="form-control" value="<?=$result->paid_to;?>">
				</div>
				<div class="form-group col-md-6">
				    <label for="reason">Reason</label>
				    <input type="text" name="reason" id="reason" class="form-control" value="<?=$result->reason;?>">
				</div>
				<div class="form-group col-md-12">
				   <label for="amount">Amount</label>
				    <input type="text" name="amount" id="amount" class="form-control" value="<?=$result->amount;?>">
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

