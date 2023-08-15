<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>BPSDMP Kominfo Surabaya</title>
  <link rel="icon" type="image/x-icon" href="{{asset("assets/dist/img/logo.png")}}">
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/dist/css/adminlte.min.css")}}">
</head>
<body>
<!-- Site wrapper -->
  <!-- Navbar -->
  @include('layouts.navbar')
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content mt-5 pt-4">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color:rgb(21, 53, 160); color:white;">
      {{-- <div class="container-fluid"> --}}
        <div class="row">
          <div class="col-sm-6">
            <h1>BPSDMP KOMINFO SURABAYA</h1>
          </div>
        </div>
      {{-- </div><!-- /.container-fluid --> --}}
    </section>
    
    <!-- Main content -->
      @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</div>

@include('layouts.footer')
<!-- ./wrapper -->

@stack('alert')

<!-- jQuery -->
<script src={{asset("assets/plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>

<!-- DataTables  & Plugins -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src={{asset("assets/dist/js/adminlte.min.js")}}></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src={{asset("assets/dist/js/demo.js")}}></script> --}}

<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': '{{csrf_token()}}'
      }
  });
</script>

@stack('js')

</body>
</html>
