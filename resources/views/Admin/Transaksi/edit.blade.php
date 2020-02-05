@extends(('layouts/rental/adminmenu'))
{{-- Page title --}}
@section('title')
    Edit Transaction
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
              <form method="POST" action="/transaction/{{$transaction->id}}/update">
                    {{csrf_field()}}
                    <input type="hidden" name="car_id" value="{{$transaction->car_id}}">
                    <input type="hidden" name="totall" value="{{$transaction->total}}">
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Name</label>
                        <div class="input-group input-group-prepend">
                            <input type="text" class="form-control  form-control-md" required name="name" placeholder="Name" value="{{$transaction->name_user}}" disabled="disabled">
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="email" class="col-form-label"> Email</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control  form-control-md" required name="type" placeholder="Type" value="{{$transaction->email}}" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Car Name</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control  form-control-md" required name="year" placeholder="Year" value="{{$transaction->car_name}}" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Rent Length</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control  form-control-md" required name="no" placeholder="No" value="{{$transaction->qty}}" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Price</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control  form-control-md" required name="price" placeholder="Price" value="{{$transaction->price}}" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Total</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control  form-control-md" required name="Seat" placeholder="Price" value="{{$transaction->total}}" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Rent For</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control  form-control-md" required name="Seat" placeholder="Price" value="{{$transaction->rent_date}}" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" name="status" id="exampleFormControlSelect1" value="{{$transaction->status}}">
                            <option>Belum Bayar</option>
                            <option>Lunas</option>
                            </select>
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
