<?php
$login = $this->session->userdata('logged_in');
$level = $this->session->userdata('level');
$username = $this->session->userdata('name_user');
$photo    = $this->session->userdata('photo');

?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <!-- <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image"> -->
        <img src="<?php echo base_url('assets/uploads/employee/thumbs/'. $photo);?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $username ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $level ?></a>
      </div>
    </div>
    <!-- search form -->
    <!-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form> -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <?php if ($level == "Admin") {?>
      <li class="treeview <?php if (!empty($tree_menu_master)): echo $tree_menu_master; elseif (empty($tree_menu_master)): echo ''; endif ?>">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">  
          <li class="<?php if (!empty($nav_department)): echo $nav_department; elseif (empty($nav_department)): echo ''; endif ?>">
            <a href="<?php echo base_url('department'); ?>"><i class="fa fa-circle-o text-red"></i> Department</a>
          </li>
          <li class="<?php if (!empty($nav_education)): echo $nav_education; elseif (empty($nav_education)): echo ''; endif ?>">
            <a href="<?php echo base_url('education'); ?>"><i class="fa fa-circle-o text-red"></i> Education</a>
          </li>
          <li class="<?php if (!empty($nav_employment)): echo $nav_employment; elseif (empty($nav_employment)): echo ''; endif ?>">
            <a href="<?php echo base_url('employment'); ?>"><i class="fa fa-circle-o text-red"></i> Employment</a>
          </li>
          <li class="<?php if (!empty($nav_employee_status)): echo $nav_employee_status; elseif (empty($nav_employee_status)): echo ''; endif ?>">
            <a href="<?php echo base_url('employee_status'); ?>"><i class="fa fa-circle-o text-red"></i> Employee Status</a>
          </li>
          <li class="<?php if (!empty($nav_marital)): echo $nav_marital; elseif (empty($nav_marital)): echo ''; endif ?>">
            <a href="<?php echo base_url('marital_status'); ?>"><i class="fa fa-circle-o text-red"></i> Marital Status</a>
          </li>
          <li class="<?php if (!empty($nav_religion)): echo $nav_religion; elseif (empty($nav_religion)): echo ''; endif ?>">
            <a href="<?php echo base_url('religion'); ?>"><i class="fa fa-circle-o text-red"></i> Religion</a>
          </li>
        </ul>
      </li>

      <li class="treeview <?php if (!empty($tree_menu_employee)): echo $tree_menu_employee; elseif (empty($tree_menu_employee)): echo ''; endif ?>">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Employee</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if (!empty($nav_employee)): echo $nav_employee; elseif (empty($nav_employee)): echo ''; endif ?>">
            <a href="<?php echo base_url('employee'); ?>"><i class="fa fa-circle-o text-aqua"></i> Employee</a>
          </li>
        </ul>
      </li>


      <?php  }
      elseif ($level == "Staff") { ?>
      <li class="treeview <?php if (!empty($tree_menu_master)): echo $tree_menu_master; elseif (empty($tree_menu_master)): echo ''; endif ?>">
        <a href="#">
          <i class="fa fa-edit"></i> <span>User Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">  
          <li class="<?php if (!empty($nav_user_management)): echo $nav_user_management; elseif (empty($nav_user_management)): echo ''; endif ?>">
            <a href="<?php echo base_url('user_management'); ?>"><i class="fa fa-circle-o text-aqua"></i> User</a>
          </li>
        </ul>
      </li>
      <!-- <li class="treeview <?php if (!empty($tree_menu_employee)): echo $tree_menu_employee; elseif (empty($tree_menu_employee)): echo ''; endif ?>">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Belum Ada</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if (!empty($nav_employee)): echo $nav_employee; elseif (empty($nav_employee)): echo ''; endif ?>">
            <a href=""></i> Belum Ada</a>
          </li>
        </ul>
      </li> -->
      <?php  } ?>

      <!-- CADANGAN NAVIGASI ORIGINAL -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="../mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->

        <!-- CADANGAN NAVIGASI ORIGINAL -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>