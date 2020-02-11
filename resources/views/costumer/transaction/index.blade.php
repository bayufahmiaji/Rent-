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
            @foreach($transaction as $trans)
            <div class="media list-group-item list-group-item-action">
              <table>
                  <tr>
                    <td  align="left">
                        <ul>
                            <li style="list-style-type: none; "><h4>Nama        :     {{$trans->name_user}}</h4></li>
                            <li style="list-style-type: none; "><h5>Email       :     {{$trans->email}}</h5></li>
                            <li style="list-style-type: none; "><h5>Car Name    :     {{$trans->car_name}}</h5></li>
                            <li style="list-style-type: none; "><h5>Lama Rental :     {{$trans->qty}}</h5></li>
                            <li style="list-style-type: none; ">Harga           :  @currency($trans->price)</li>
                            <li style="list-style-type: none; ">Total           :  @currency($trans->total)</li>
                            @if($trans->status == "Lunas")
                            <li class="btn btn-success" style="list-style-type: none; "> {{$trans->status}}</li>
                            @else
                            <li class="btn btn-danger" style="list-style-type: none; "> {{$trans->status}}</li>
                            @endif
                            <a href="/transaction/{{$trans->id}}/delete"  class="btn btn-warning">Cancel</a>
                                        
                        </ul>
                    </td>
                    <td align="right">
                    </td>

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
