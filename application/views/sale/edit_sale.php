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
			<h3 class="box-title">Edit Sale</h3><br />
			<div id="some_message">
			    
			</div>
			<?php 
			
			    //print_r($sale);
			
			?>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="<?=  site_url() ?>sale/edit_sale_after_post/<?=$sale->sale_id?>" id="create_sale_after_post">
			    <div class="box-body">
				<div class="row">
				    <div class="form-group col-md-6">
					<label for="name_of_buyer">Name Of Buyer</label>
					<input type="text" name="name_of_buyer" id="name_of_buyer" class="form-control" value="<?=$sale->buyer_name?>">
				    </div>
				    <div class="form-group col-md-6">
				       <label for="marble_patty">Marble Type</label>
					<input type="text" name="marble_patty" id="marble_patty" class="form-control" value="<?=$sale->marble_type?>">
				    </div>
				</div>
				<div class="form-group col-md-12">
				    <input type="submit" name="submit" class="btn btn-primary form-control" value="Submit" />
				</div>	
			    </div>
			</form>
			<table id="example2" class="table table-bordered table-hover"> 
			<thead>
			 <tr>		 
			   <th>Date</th>
			   <th>Size</th>
			   <th>Quantity</th>
			   <th>Price</th>
			   <th>Total</th>
			   <th>Edit</th>
			   <th>Delete</th>
			  </tr>	  
			</thead>
			<tbody>
			    <?php 
				$tota_quantity = 0;
				$tota_price = 0;
				$tota_total = 0;
			    foreach ( $size as $array ) : 
				    $tota_quantity += $array->quantity;
				    $tota_price    += $array->price;
				    $tota_total    += $array->price * $array->quantity;
			    ?>
			    <tr>
				<td><?=$array->date_added?></td>
				<td><?=$array->size?></td>
				<td><?=$array->quantity?></td>
				<td><?=$array->price?></td>
				<td><?=$array->price * $array->quantity ?></td>
				<td><a href="<?=  site_url()?>sale/edit_single_sale/<?=$array->size_id?>" class="btn btn-warning">Edit</a></td>
				<td><a href="<?=  site_url()?>sale/delete_single_sale/<?=$array->size_id?>" class="btn btn-danger purchase_delete">Delete</a></td>
			    </tr>
			    <?php endforeach; ?>
			</tbody>
			<thead>
			    <tr>
				<th></th>
				<th>Total</th>
				<th><?=$tota_quantity?></th>
				<th><?=$tota_price?></th>
				<th><?=$tota_total?></th>
				<th></th>
				<th></th>
			    </tr>
			</thead>
		      </table>
		    </div>
		</div>  
	    </div>
	    <!-- /.box -->
        </section><!-- /.content -->
    </section>
    <!-- /.content-wrapper -->
</div> 

