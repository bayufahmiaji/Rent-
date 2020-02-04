@extends(('layouts/rental/adminmenu'))
{{-- Page title --}}
@section('title')
    Rent A Car
@stop
{{-- page level styles --}}
@section('header_styles')
   <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/circliful/css/jquery.circliful.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/index.css')}}">
     
     <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/inputlimiter/css/jquery.inputlimiter.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/jquery-tagsinput/css/jquery.tagsinput.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/daterangepicker/css/daterangepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datepicker/css/bootstrap-datepicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datetimepicker/css/DateTimePicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/j_timepicker/css/jquery.timepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/clockpicker/css/jquery-clockpicker.css')}}" />
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/colorpicker_hack.css')}}" />
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
            <img width="200px" src="{{ url('/public/uploads/'.$cars->image) }}">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif
              <form method="POST" action="/transaction/add" enctype="multipart/form-data" name="hitung">
                    {{csrf_field()}}
                    <input type="hidden" name="cars_name" value="{{$cars->name}}">
                    <input type="hidden" name="price" onchange="proses()" value="{{$cars->price}}">
                    <input type="hidden" name="totall">
                    <input type="hidden" name="status" value="Belum Dibayar">
                    <input type="hidden" name="car_id" value="{{$cars->id}}">
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Name</label>
                        <div class="input-group input-group-prepend">
                            <input type="text" class="form-control  disabled_input" required  placeholder="Name" value="{{$cars->name}}" disabled="disabled">
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="email" class="col-form-label"> Type</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control  disabled_input" required name="type" placeholder="Type"disabled="disabled" value="{{$cars->type}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Year</label>
                            <div class="input-group input-group-prepend">
                                <input type="number" class="form-control  disabled_input" required name="year" placeholder="Year"disabled="disabled" value="{{$cars->year}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> No</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control  disabled_input" required name="no" placeholder="No"disabled="disabled" value="{{$cars->No}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Price /day</label>
                            <div class="input-group input-group-prepend">
                                <input type="number" class="form-control  disabled_input" value="{{$cars->price}}"   disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Name</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control " required name="name" placeholder="status" value="{{auth()->user()->name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Email</label>
                            <div class="input-group input-group-prepend">
                                <input type="text" class="form-control " required name="email" placeholder="Price" value="{{auth()->user()->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> How Long You Rent (day)?</label>
                            <div class="input-group input-group-prepend">
                                <input type="number" class="form-control " required id="qty" name="qty" placeholder="Input Number Example '1'"  onchange="proses()" > 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"> Total</label>
                            <div class="input-group input-group-prepend">
                                <input type="number" class="form-control "required name="total" placeholder="0" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Rent From</label>
                            <div class="input-group input-append date input-group-append" id="dp3"
                                 data-date-format="yyyy-mm-dd">
                                <input class="form-control" type="text" placeholder="yyyy-mm-dd" name="rent_date" required>
                                <span class="input-group-text add-on border-left-0 rounded-right">
                                        <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Rent Expired</label>
                            <div class="input-group input-append date input-group-append" id="dp2"
                                 data-date-format="yyyy-mm-dd">
                                <input class="form-control" type="text" placeholder="yyyy-mm-dd" name="rent_expired" >
                                <span class="input-group-text add-on border-left-0 rounded-right">
                                        <i class="fa fa-calendar"></i>
                                </span>
                            </div>
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
    <!-- plugin level scripts -->
  <!-- plugin scripts -->
    <script type="text/javascript" src="{{asset('assets/vendors/jquery.uniform/js/jquery.uniform.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/inputlimiter/js/jquery.inputlimiter.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/jquery-tagsinput/js/jquery.tagsinput.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/jquery.validVal.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/inputmask/js/jquery.inputmask.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/daterangepicker/js/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/autosize/js/jquery.autosize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/jasny-bootstrap/js/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datetimepicker/js/DateTimePicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/j_timepicker/js/jquery.timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/clockpicker/js/jquery-clockpicker.min.js')}}"></script>
    <!--end of plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/js/form.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/datetime_piker.js')}}"></script>
    <!-- end of global scripts-->
    <!--end of plugin scripts-->
   <script type="text/javascript">
    function HargaTotal() {
    var myForm = document.hitung;
    var total;
    var qty;
    var price;
    var total = parseFloat(myForm.total.value);
    var price = parseFloat(myForm.price.value);
    var qty = parseFloat(myForm.qty.value);
    if(myForm.price.value == "") price=0;
    if(myForm.qty.value == "") qty=0;
    if(myForm.total.value == "") total=0;
    myForm.total.value = qty * price;
    myForm.totall.value = qty * price;
    }
    function proses() {
    HargaTotal();
    }
    
    </script>
@stop
