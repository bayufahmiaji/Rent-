@extends(('layouts/rental/usermenu'))
{{-- Page title --}}
@section('title')
    
    Selamat Datang JB Rent 
@stop
{{-- page level styles --}}
@section('header_styles') <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/swiper/css/swiper.min.css')}}"/>
    <!-- end of page level styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages/widgets.css')}}">
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
               <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container widget_swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/img/T1.jpg')}}" alt="Image missing" class="img-fluid"/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/img/T2.jpg')}}" alt="Image missing" class="img-fluid"/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/img/T3.jpg')}}" alt="Image missing" class="img-fluid"/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/img/T4.jpg')}}" alt="Image missing" class="img-fluid"/>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/img/T5.jpg')}}" alt="Image missing" class="img-fluid"/>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                        </div>
                    </div>
                </div>
                <center><a href="/car" class="btn btn-success"><h2>Rental Mobil Sekarang!</h2></a></center>
	</div>
@stop
@section('footer_scripts')
    <!--  plugin scripts -->
    <script type="text/javascript" src="{{asset('assets/js/pages/index.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/slimscroll/js/jquery.slimscroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/widget2.js')}}"></script>

@stop
