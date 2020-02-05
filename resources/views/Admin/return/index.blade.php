@extends(('layouts/rental/adminmenu'))
{{-- Page title --}}
@section('title')
    
   Transaction List
@stop
{{-- page level styles --}}
@section('header_styles')
   <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/select2/css/select2.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datatables/css/scroller.bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datatables/css/colReorder.bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/dataTables.bootstrap.css')}}" />
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/tables.css')}}" />
    <!--End of page level styles-->
@stop


    
@section('content')
<header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-home"></i>
                        JB Rent
                    </h4>
                </div>
                
            </div>
        </div>
    </header>
    
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-12 data_tables">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> List Of Return
                        </div>
                        <div class="card-body m-t-35">
                            <a href="/car/add" class="btn btn-success">Add Car</a>
                            <table id="example1" class="display table table-stripped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Car Name</th>
                                    <th>Rent Start</th>
                                    <th>Rent Expired</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($return as $ret)
                                    <tr>
                                    <td>{{$ret->cos_name}}</td>
                                    <td>{{$ret->car_name}}</td>
                                    <td>{{$ret->rent_date}}</td>
                                    <td>{{$ret->rent_expired}}</td>
                                    
                                    
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Car Name</th>
                                    <th>Rent Start</th>
                                    <th>Rent Expired</th>
                                    <th>Status</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
    @endsection                
@section('footer_scripts')
   <!--plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/dataTables.tableTools.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.colReorder.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.responsive.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.rowReorder.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.scroller.min.js')}}"></script>
    <!-- end of plugin scripts -->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/simple_datatables.js')}}"></script>
    <!-- end of global scripts-->
@stop
