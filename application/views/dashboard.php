<div class="content-wrapper" style="min-height: 916px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Dashboard<small>Control panel</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo $count_m; ?></h3>
            <p>Male Employee</p>
          </div>
          <div class="icon">
            <i class="ion ion-male"></i>
          </div>
          <a href="#" class="small-box-footer">  <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $count_f; ?></h3>
            <p>Female Employee</p>
          </div>
          <div class="icon">
            <i class="ion ion-female"></i>
          </div>
          <a href="#" class="small-box-footer">  <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
     
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $count_contract; ?></h3>
            <p>Contract Employee</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-time-outline"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?php echo $count_fulltime; ?></h3>
            <p>Full Time Employee</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-time"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->  
  </section>
  <!-- /.content -->
</div>