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
			<a class="btn btn-primary" href="<?=  site_url();?>salary/salary_add">Pay Salary</a>
		    </div>
		    <div id="some_message">
			    <?php 
				//print_r($result);die(); 
			    ?>
		    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="table" class="table table-bordered table-hover"> 
		    <thead>
			<tr>		 
			    <th>Name</th>
			    <th>Father Name</th>
			    <th colspan="2">View</th>
			    
			</tr>	  
                    </thead>
                    <tbody>
			<?php
			    
			    foreach ( $data as $array ) :
			
			?>
			    <tr>
			      <td><?= $array->username; ?></td>
			      <td><?= $array->fathername; ?></td>
			      <td><a class="btn btn-success" href="<?=  site_url()?>salary/salary_details/<?=$array->user_id?>">View</a></td>
			      <td><a class="btn btn-danger" href="<?=  site_url()?>salary/delete_user/<?=$array->user_id?>">Delete</a></td>
			    </tr>
			<?php endforeach; ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
	</section><!-- /.content -->
    </section>
</div>
