@extends(('layouts/rental/adminmenu'))
{{-- Page title --}}
@section('title')
    Add A Car JB Rent 
@stop
{{-- page level styles --}}
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/circliful/css/jquery.circliful.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/index.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/fullcalendar/css/fullcalendar.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/calendar_custom.css')}}"/>
    
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
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif
              <form method="POST" action="/cars/add" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Name</label>
                        <div class="input-group input-group-prepend">
                            <input type="text" class="form-control  form-control-md" required name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="email" class="col-form-label"> Type</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control  form-control-md" required name="type" placeholder="Type">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Year</label>
                            <div class="input-group input-group-prepend">
                                <input type="number" class="form-control  form-control-md" required name="year" placeholder="Year">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> No</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control  form-control-md" required name="no" placeholder="No">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Price</label>
                            <div class="input-group input-group-prepend">
                                <input type="number" class="form-control  form-control-md" required name="price" placeholder="Price">
                            </div>
                        </div>
                        <input type="hidden" name="status" value="available">
                        <div class="form-group">
                            <label for="image" class="col-form-label"> Image</label>
                            <input type="file" name="file">
                        </div>

                    
                     <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary"/>
                            <button type="reset" class="btn btn-danger">Reset</button>
                    </div>

              </form>
	    </div>       
	</div>
@stop
@section('footer_scripts')
    <!--  plugin scripts -->
    <script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/fullcalendar/js/fullcalendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/calendarcustom.js')}}" ></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/calendar.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flip/js/jquery.flip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/jquery.sparkline.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/chartist/js/chartist.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/chartist-tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/circliful/js/jquery.circliful.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.js')}}" ></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.resize.js')}}"></script>

    <!--end of plugin scripts-->

    <script type="text/javascript" src="{{asset('assets/js/pages/index.js')}}"></script>
@stop
