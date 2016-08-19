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
		    <div class="col-md-5">  
			<h3 class="box-title">Salary Table</h3>
		    </div>
		    <div class="col-md-5">
			<div class="input-group" style="width: 150px;">
			    <input id="search-box" name="table_search" class="form-control input-sm pull-right" placeholder="Search" type="text">
			    <div class="input-group-btn">
				<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
			    </div>
			</div>
		    </div>
		    <div class="col-md-2">  
			<!--<a class="btn btn-primary" href="<?=  site_url();?>salary/salary_add">Pay Salary</a>-->
		    </div>
		    <div id="some_message">
			    <?php 
				//print_r($data);die(); 
			    ?>
		    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="table" class="table table-bordered table-hover"> 
		    <thead>
			<tr>		 
			    <th>S.No</th>
			    <th>Amount</th>
			    <th>Reason</th>
			    <th>Date</th>
			</tr>	  
                    </thead>
                    <tbody>
			<?php
			    $total = 0;
			    foreach ( $data as $array ) :
			
			?>
			    <tr>
			      <td><?= $array->salary_id; ?></td>
			      <td><?= $array->amount; ?></td>
			      <td><?= $array->reason; ?></td>
			      <td><?= $array->created_date; ?></td>
			    </tr>
			<?php 
			
			$total += $array->amount;
			endforeach; 
			
			?>
                    </tbody>
		    <thead>
			<tr>		 
			    <th>Total</th>
			    <th><?= $total; ?></th>
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
