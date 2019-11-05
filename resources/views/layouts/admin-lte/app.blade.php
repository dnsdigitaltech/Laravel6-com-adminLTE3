<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('theme/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('theme/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('theme/admin-lte/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('theme/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('theme/admin-lte/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('theme/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('theme/admin-lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Styles -->
  <style>
      .content-load {
              display:none;
      }

      .preload {
              margin:0;
              position:absolute;
              top:50%;
              left:50%;
              margin-right: -50%;
              transform:translate(-50%, -50%);
              font-weight: bolder;
      }
      .button-image{
          position:relative;
          bottom:-50px;
          left: -190px;
          width:100px;
          height:30px;
      }
      .images{
          padding-bottom: 10px;
      }
  </style>
  <script type="text/javascript">
    function ShowLoading(e) {
        document.getElementById('hidenBoton').setAttribute("disabled","disabled");
        var div = document.createElement('div');
        //var img = document.createElement('img');
        //var button = document.createElement('button');
        //img.src = 'http://ladima.tuseon.com.br/images/loading.gif';
        div.innerHTML = "Aguarde Carregando... <i class='fa fa-spinner fa-pulse fa-0x fa-fw'></i>";
        div.style.cssText = 'position: fixed; top: 5%; left: 40%; z-index: 5000; padding:10px; color:#fff; text-align: center; background: #3c8dbc; border: 1px solid #fff';
        //button.style.cssBoton = 'display: none;';
        //div.appendChild(img);
        document.body.appendChild(div);
        //document.body.appendChild(button);
        return true;
        // These 2 lines cancel form submission, so only use if needed.
        window.event.cancelBubble = true;
        e.stopPropagation();
    }
</script>

</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-open">
<!-- Site wrapper -->
<div class="wrapper">
    @include('layouts.admin-lte.nav-login')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      @include('layouts.admin-lte.logo')
    <!-- Sidebar -->
    <div class="sidebar">
      @include('layouts.admin-lte.user')
      @include('layouts.app')
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('layouts.admin-lte.section-crumb')
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"> Corporativo</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Deslizar a página">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
            @yield('content')
            <div class="preload">
                <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Olá <b>{{ auth()->user()->name }}</b> você está logado em {{ date('d/m/Y') }} às {{ date('H:i') }}
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.admin-lte.footer')
  @include('layouts.admin-lte.profile')
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('theme/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('theme/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('theme/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('theme/admin-lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('theme/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('theme/admin-lte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('theme/admin-lte/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('theme/admin-lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('theme/admin-lte/dist/js/adminlte.min.js') }}"></script>
<script>
  //preload
  $(function() {
    $(".preload").fadeOut(1000, function() {
      $(".content-load").fadeIn(1000);
    });
  });
  //Datatable
  $(function () {
      $('#tableRequests').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
      $('#tableRequestsTranspFiscal').DataTable({
        'paging'      : false,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      });
  });

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({ width: '100%' });

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

    //Initialize Select2 Elements
    //$('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
    //Money Euro
    $('[data-mask]').inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
      locale: 'pt-br',

    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    });

    //Colorpicker
    $('.my-colorpicker1').colorpicker();
    //color picker with addon
    $('.my-colorpicker2').colorpicker();

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: true,
      timeFormat: 'H:i',
      showMeridian: false
    });


  });
</script>
</body>
</html>
