@extends(('layouts/rental/usermenu'))
{{-- Page title --}}
@section('title')
    Rent Car JB
@stop
{{-- page level styles --}}
@section('header_styles')
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
            <div class="list-group">
            @foreach($car as $cars)
            <div class="media list-group-item list-group-item-action">
              <table>
                  <tr>
                    <td width="150px"><img width="150px" src="{{ url('/public/uploads/'.$cars->image) }}"></td>
                    <td  align="left">
                        <ul>
                            <li style="list-style-type: none; "><h4>    {{$cars->name}}</h4></li>
                            <li style="list-style-type: none; "><h5>    {{$cars->type}}</h5></li>
                            <li style="list-style-type: none; "> @currency($cars->price) /1 Day</li>
                            @if($cars->status == "available")
                            <li class="btn btn-success" style="list-style-type: none; "> {{$cars->status}}</li>
                            @else
                            <li class="btn btn-danger" style="list-style-type: none; "> {{$cars->status}}</li>
                            @endif
                                        
                    </ul>
                </td>
                  </tr>
                  <tr>
                    @if($cars->status == "available")
                      <td colspan="2"><a href="/cars/{{$cars->id}}/rent" class="btn btn-success">Rent</a></td>
                    @endif
                  </tr>
              </table>  
              </div>
            @endforeach
            </div>
        </div>
        </div>
    </div>
    @endsection                
@section('footer_scripts')
@stop
