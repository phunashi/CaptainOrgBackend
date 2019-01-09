<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CO.com</title>

    <!-- Page level plugin CSS-->
    {{-- <link href="{{asset("sbtheme/vendor/datatables/dataTables.bootstrap4.css")}}" rel="stylesheet">
 --}}

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('sbtheme/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbtheme/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset ('sbtheme/css/sb-admin.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

@include('layouts.navbarlayout')

    <div id="wrapper">

    @include('layouts.sidebarlayout')

      <div id="content-wrapper">

        <div class="container-fluid">

            @yield('content')
        </div>

@include('layouts.footerlayout')

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
         
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sbtheme/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sbtheme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sbtheme/vendor/jquery-easing/jquery.easing.min.js')}}"></script>


     <!-- Page level plugin JavaScript-->
    {{-- <script src="{{asset("sbtheme/vendor/chart.js/Chart.min.js")}}"></script>
    <script src="{{asset("sbtheme/vendor/datatables/jquery.dataTables.js")}}"></script>
    <script src="{{asset("sbtheme/vendor/datatables/dataTables.bootstrap4.js")}}"></script>  --}}

    <!-- Custom scripts for all pages-->
    <script src="{{asset ('sbtheme/js/sb-admin.min.js')}}"></script>
       <!-- CK Editor scripts for all pages-->
       <script src="{{asset ('sbtheme/vendor/ckeditor/ckeditor.js')}}"></script>

    {{--  <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>  --}}

  </body>

</html>
