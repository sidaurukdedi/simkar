<?php
$login    = $this->session->userdata('logged_in');
$level    = $this->session->userdata('level');
$username = $this->session->userdata('name_user');
$photo    = $this->session->userdata('photo');
// echo "<pre>";
// print_r ($login);
// print_r($level);
// print_r($username);
// echo "</pre>";
// die();
?>
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('dashboard'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>RM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIM</b>HR</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg');?>" class="user-image" alt="User Image"> -->
              <img src="<?php echo base_url('assets/uploads/employee/thumbs/'. $photo);?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $username ?></span> 
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/uploads/employee/thumbs/'. $photo);?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $username ?> - <?php echo $level ?>
                  <small><!-- Member since Nov. 2012 --><?php echo $level ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>