      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url();?>public/img/IMG_0403.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Habib Ullah</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
	  <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>-->
	<!-- /.search form -->
	<!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="<?=site_url();?>">
		    <i class="fa fa-dashboard"></i> <span>Purchase</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		    <li class="active"><a href="<?=  site_url() ?>"><i class="fa fa-circle-o"></i> View Purchase</a></li>
		</ul>
            </li>
            <li class="treeview">
                <a href="<?=site_url();?>">
		    <i class="fa fa-dashboard"></i> <span>Sale</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		    <li class="active"><a href="<?=  site_url() ?>sale"><i class="fa fa-circle-o"></i> View Sale</a></li>
		</ul>
            </li>
            <li class="treeview">
                <a href="<?=site_url();?>">
		    <i class="fa fa-dashboard"></i> <span>Expense</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		    <li class="active"><a href="<?=  site_url() ?>expense"><i class="fa fa-circle-o"></i> View Expense</a></li>
		</ul>
            </li>
            <li class="treeview">
                <a href="<?=site_url();?>">
		    <i class="fa fa-dashboard"></i> <span>User</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		    <li class="active"><a href="<?=  site_url() ?>user/user_add"><i class="fa fa-circle-o"></i> User Add</a></li>
		</ul>
            </li>
            <!--<li class="treeview">
                <a href="<?=site_url();?>">
		    <i class="fa fa-dashboard"></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		    <li class="active"><a href="<?=  site_url() ?>reports/"><i class="fa fa-circle-o"></i> View Reports</a></li>
		</ul>
            </li>-->
            <li class="treeview">
                <a href="<?=site_url();?>">
		    <i class="fa fa-dashboard"></i> <span>Salary</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		    <li class="active"><a href="<?=  site_url() ?>salary/salary_add"><i class="fa fa-circle-o"></i> Add Salary</a></li>
		    <li class="active"><a href="<?=  site_url() ?>salary/"><i class="fa fa-circle-o"></i> View Salary</a></li>
		</ul>
            </li>
        </ul>
        </section>
        <!-- /.sidebar -->
      </aside>