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
			<h3 class="box-title">Sales Table</h3>
		    </div>
		    <div class="col-md-2">  
			<a class="btn btn-primary" href="<?=  site_url();?>sale/"><i class="fa fa-user"></i>   Go Back</a>
		    </div>
		    <div id="some_message">
			    
		    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
		    <div class="col-md-9">  
			<strong>Buyer name : </strong>  <?=$sale[0]->buyer_name?>
		    </div>
		    <div class="col-md-3">
			<strong> Marble Type : </strong>  <?=$sale[0]->marble_type?>
		    </div>
                  <table id="example2" class="table table-bordered table-hover"> 
		    <thead>
                     <tr>		 
                       <th>Date</th>
                       <th>Size</th>
                       <th>Quantity</th>
                       <th>Price</th>
                       <th>Total</th>
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