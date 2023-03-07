<!DOCTYPE html>
<html lang="en">

@includeIf('layouts.header')

<body id="page-top">

    <!-- Page Wrapper -->
    @yield('content')
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('Sb/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Sb/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('Sb/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('Sb/js/sb-admin-2.min.js')}}"></script>


    <!-- Page level plugins -->
    <script src="{{asset('Sb/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('Sb/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('Sb/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('Sb/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('Sb/js/demo/chart-pie-demo.js')}}"></script>
    <script src="{{asset('Sb/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('js/validator.min.js')}}"></script>
    @stack('scripts')
</body>

</html>
