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
			<h3 class="hidden-class box-title">Sales Table</h3>
		    </div>
		    <div class="col-md-2">  
			<!--<a class="hidden-class btn btn-primary" href="<?=  site_url();?>sale/"><i class="fa fa-user"></i>&nbsp;&nbsp;Go Back</a>-->
			<!--<a class="hidden-class btn btn-primary" href="<?=  site_url();?>sale/print_view/"><i class="fa fa-print"></i>&nbsp;&nbsp;Print</a>-->
		    </div>
		    <div id="some_message">
			    
		    </div>
		    <br>
		    <br>
		    <form action="<?= site_url(); ?>reports/pro" method="post">
			<div class="col-md-6">
			<div class="form-group">
			    <input type="date" name="from" class="form-control" >
			</div>
			</div>
			<div class="col-md-6">
			    <div class="form-group">
				<input type="date" name="to" class="form-control" >
			    </div>
			</div>
			<div class="col-md-12">
			    <div class="form-group">
				<input type="submit" class="btn btn-primary form-control" value="Submit">
			    </div>
			</div>
		    </form>
                </div><!-- /.box-header -->
		
              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
	</section><!-- /.content -->
    </section>
</div>