<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->        
    <!-- Main content -->
    <section class="content">
    <!-- Small boxes (Stat box) -->
	<!-- Content Wrapper. Contains page content -->	  
        <!-- Main content -->
	<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
		    <div class="col-md-10">  
			<h3 class="box-title">Expense Table</h3>
		    </div> 
		    <div class="col-md-2">  
			<a class="btn btn-primary" href="<?=  site_url();?>expense/create_expense">Create New Expense</a>
		    </div>
		    <div id="some_message">
			    <?php 
				//print_r($result);die(); 
			    ?>
		    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover"> 
		    <thead>
			<tr>		 
			    <th>Date</th>
			    <th>Paid To</th>
			    <th>Reason</th>
			    <th>Amount</th>
			    <th>Edit</th>
			    <th>Delete</th>
			</tr>	  
                    </thead>
                    <tbody>
			<?php
			    $total_amount = 0;
			    foreach ( $result as $array ) :
			    $total_amount += $array->amount;
			?>
			    <tr>
			      <td><?=$array->date_added?></td>
			      <td><?=$array->paid_to?></td>
			      <td><?=$array->reason?></td>
			      <td><?=$array->amount?></td>
			      <td><a class="btn btn-warning" href="<?=  site_url()?>expense/edit_expense/<?=$array->expense_id?>">Edit </a></td>
			      <td><a class="btn btn-danger purchase_delete" href="<?=  site_url()?>expense/delete_expense/<?=$array->expense_id?>">Delete</a></td>
			    </tr>
			<?php endforeach; ?>
                    </tbody>
		    <thead>
			<tr>		 
			    <th></th>
			    <th></th>
			    <th>Total</th>
			    <th><?= $total_amount ?></th>
			    <th></th>
			    <th></th>
			</tr>	  
                    </thead>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
	</section><!-- /.content -->
    </section>
</div>
