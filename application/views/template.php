<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css');?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css');?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    ![endif]-->
    <!--
    <script type="text/javascript" src="<?php echo base_url('asset/js/calendar.js'); ?>"></script>
    -->
    <style type="text/css" media="screen">
            /*.main-footer {
                bottom: 0;
                left: 0;
                position: fixed;
                right: 0;
                z-index: 999;
            }*/
    </style>
</head>
<body id="<?php echo isset($modul) ? $modul : ''; ?>" class="hold-transition skin-blue sidebar-mini fixed">
    <div class="wrapper">
        <div id="masthead">
            <?php $this->load->view('masthead'); ?>
        </div>

        <div id="navigation">
            <?php $this->load->view('navigation'); ?>
        </div>

        <div id="main">
            <?php $this->load->view($main_view); ?>
        </div>

        <div id="footer">
            <?php $this->load->view('footer'); ?>
        </div>
    </div>

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js')?>"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js')?>"></script>
    <!-- bootstrap datepicker -->
    <script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js')?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/dist/js/app.min.js')?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/dist/js/demo.js')?>"></script>
    <script>
        $(function() {

            //Initialize Select2 Elements
            // $(".select2").select2();

            //Date picker
            $('#datepicker_datebirth').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('#datepicker_join_date').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('#datepicker_resign_date').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('#datepicker_prob_date').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('#datepicker_end_date').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('#datepicker_contract1_date').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('#datepicker_contract2_date').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('#datepicker_contract3_date').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });

            $("#alert").fadeTo(2000, 0).slideUp(500, function(){
                $("#alert").slideUp(500);
            });

            // $('#show_resigndate').hide();
            // $("#show_resigndate").hide();
            //         $("#show_contract").hide();
            $("#select_employee_status").change(function () {
                if ($(this).val() == '01') {
                    $("#show_resigndate").hide();
                    $("#show_contract").hide();
                } else if ($(this).val() == '02') {
                    $("#show_resigndate").hide();
                    $("#show_contract").show();
                } else if ($(this).val() == '03'){
                    $("#show_resigndate").show();
                    $("#show_contract").hide();
                }
            });
        });
    </script>
</body>
</html>