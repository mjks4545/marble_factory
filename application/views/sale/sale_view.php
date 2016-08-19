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
			<h3 class="box-title">Sales Table</h3>
		    </div>
		    <div class="col-md-5">
			<div class="input-group" style="width: 150px;">
			    <input id="search-box" name="table_search" class="form-control input-sm pull-right" placeholder="Search" type="text">
			    <div class="input-group-btn">
				<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
			    </div>
			</div>
		    </div>
		    <?php 
			//print_r( $size );
		    ?>
		    <div class="col-md-2">  
			<a class="btn btn-primary" href="<?=  site_url();?>sale/create_sale">Make New Sale</a>
		    </div>
		    <div id="some_message">
			    
		    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="table" class="table table-bordered table-hover"> 
		    <thead>
                     <tr>		 
                       <th>Date</th>
                       <th>Buyer Name</th>
                       <th>Marble Type</th>
                       <th>Quantity</th>
                       <th>Price</th>
		       <th>Total</th>
		       <th>Details</th>
		       <th>Edit</th>
		       <th>Delete</th>
                      </tr>	  
                    </thead>
                    <tbody>
			<?php 
			    
			    
			?>
			<?php 
			    $total_quntity = 0;
			    $total_price   = 0;
			    $total_total   = 0;
			    foreach ( $result as $array ) :
			?>
			    <tr>
			      <td><?=$array->date_added?></td>
			      <td><?=$array->buyer_name?></td>
			      <td><?=$array->marble_type?></td>
			      <?php 
			        $quantity = 0;
				$price    = 0;
				$total    = 0;
				foreach ( $size as $array_size ) :
				
				if( $array_size->sale_id == $array->sale_id ){
				    $quantity += $array_size->quantity;
				    $price    += $array_size->price;   
				    $total    += $array_size->price * $array_size->quantity;   
				}
			      ?>
			      <?php 
				endforeach;
				$total_quntity += $quantity;
				$total_price += $price;
				$total_total += $total;
			      ?>
			      <td><?=$quantity?></td>
			      <td><?=$price?></td>
			      <td><?=$total?></td>
			      <td><a class="btn btn-success" href="<?=  site_url()?>sale/single_sale/<?=$array->sale_id?>">View </a></td>
			      <td><a class="btn btn-warning" href="<?=  site_url()?>sale/edit_sale/<?=$array->sale_id?>">Edit </a></td>
			      <td><a class="btn btn-danger purchase_delete" href="<?=  site_url()?>sale/delete_sale/<?=$array->sale_id?>">Delete</a></td>
			    </tr>
			<?php 
			    endforeach;     
			?>
                    </tbody>
		    <thead>
                     <tr>		 
                       <th></th>
                       <th></th>
                       <th>Total</th>
                       <th><?=$total_quntity?></th>
                       <th><?=$total_price?></th>
		       <th><?=$total_total?></th>
		       <th></th>
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