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
			<h3 class="box-title">Purchase Table</h3>
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
			<a class="btn btn-primary" href="<?=  site_url();?>home/create_invoice">Make New Purchase</a>
		    </div>
		    <div id="some_message">
			    
		    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="table" class="table table-bordered table-hover"> 
		    <thead>
                     <tr>		 
                       <th>Date</th>
                       <th>Vecle no</th>
                       <th>Maining</th>
                       <th>Type</th>
                       <th>Weight in ton</th>
		       <th>Rate</th>
		       <th>Price of stone</th>
                       <th>Maan</th>
                       <th>Rent per maan</th>
                       <th>Rent price</th>
                       <th>Tax</th>
		       <th>Bonius</th>
		       <th>Edit</th>
		       <th>Delete</th>
                      </tr>	  
                    </thead>
                    <tbody>
			<?php 
			    
			    $total_weight_in_ton        = 0;
			    $total_rate                 = 0;
			    $total_rate_price_of_stone  = 0;
			    $total_weight_in_man        = 0;
			    $rent_per_maan              = 0;
			    $total_rent_price           = 0;
			    $total_tax                  = 0;
			    $total_bonius               = 0;
			?>
			<?php foreach ( $result as $array ) :?>
			    <tr>
			      <td><?=$array->date_added?></td>
			      <td><?=$array->vehicle_no?></td>
			      <td><?=$array->mining?></td>
			      <td><?=$array->type?></td>
			      <td><?=$array->weight_ton?></td>
			      <td><?=$array->price?></td>
			      <td><?=$array->weight_ton * $array->price; ?></td>
			      <td><?=$array->weight_man?></td>
			      <td><?=$array->car_rent_man?></td>
			      <td><?=$array->weight_man * $array->car_rent_man?></td>
			      <td><?=$array->tax?></td>
			      <td><?=$array->bonus?></td>
			      <td><a class="btn btn-warning" href="<?=  site_url()?>home/edit_invoice/<?=$array->purchase_id?>">Edit </a></td>
			      <td><a class="btn btn-danger purchase_delete" href="<?=  site_url()?>home/delete_invoice/<?=$array->purchase_id?>">Delete</a></td>
			    </tr>
			<?php 
			    $total_weight_in_ton        += $array->weight_ton;
			    $total_rate                 += $array->price;
			    $total_rate_price_of_stone  += $array->weight_ton * $array->price;
			    $total_weight_in_man        += $array->weight_man;
			    $rent_per_maan              += $array->car_rent_man;
			    $total_rent_price           += $array->weight_man * $array->car_rent_man;
			    $total_tax                  += $array->tax;
			    $total_bonius               += $array->bonus;
			    endforeach;     
			?>
                    </tbody>
		    <thead>
			<tr>
			    <th><strong>Total:</strong></th>
			    <th></th>
			    <th></th>
			    <th></th>
			    <th>Tons <?=$total_weight_in_ton?></th>
			    <th>Rs <?=$total_rate?></th>
			    <th>Rs <?=$total_rate_price_of_stone?></th>
			    <th>Rs <?=$total_weight_in_man?></th>
			    <th>Rs <?=$rent_per_maan?></th>
			    <th>Rs <?=$total_rent_price?></th>
			    <th>Rs <?=$total_tax?></th>
			    <th>Rs <?=$total_bonius?></th>
			    <th></th>
			    <th></th>
			    <th></th>
			</tr>
		    </thead>
                  </table>
		    <nav style="float:right;">
			<?=$links; ?>
<!--			<ul class="pagination">
			  <li>
			    <a href="#" aria-label="Previous">
			      <span aria-hidden="true">&laquo;</span>
			    </a>
			  </li>
			  <li><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li>
			    <a href="#" aria-label="Next">
			      <span aria-hidden="true">&raquo;</span>
			    </a>
			  </li>
			</ul>-->
		      </nav>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
	</section><!-- /.content -->
    </section>
</div>