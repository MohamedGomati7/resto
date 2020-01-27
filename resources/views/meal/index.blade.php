@extends('layout.main')

@section('content')

<body>

 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread" style="font-size: 80px;">مطعمنا</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html"> <b
                                    style="font-size: 20px; color: lightgray;"> الرئيسية </b><i
                                    class="ion-ios-arrow-forward"></i></a></span> <span><b
                                style="font-size: 20px; color: lightgray;"> القائمة </b><i
                                class="ion-ios-arrow-forward"></i></span></p>

                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="ftco-search">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">

                            @foreach ( $categories as $category )
                              
                            <a  class="nav-link ftco-animate  @if ($loop->first) active @endif"  id="v-pills-{{ $category->id }}-tab" data-toggle="pill" href="#v-pills-{{ $category->id }}" {{ $category->name }}
  role="tab" aria-controls="v-pills-{{ $category->id }} "aria-selected="true"   ><b>{{$category->name}}</b></a> 

                            @endforeach

                        </div>
                    </div>


{{-- @if ($loop->first){ aria-selected="true"} @endif --}}


                    <div class="col-md-12 tab-wrap">

                        <div class="tab-content" id="v-pills-tabContent">

                            @foreach($categories as $category)
                        <div class="tab-pane fade @if ($loop->first) active  show active @endif" id="v-pills-{{ $category->id }}" role="tabpanel"
                                aria-labelledby="day-1-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($category->meals as $meal )
                                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                        <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                            <div class="menu-img img"
                                                style="background-image: url({{asset('storage/'.$meal->image)}});"></div>
                                            <div class="text d-flex align-items-center">
                                                <div>
                                                    <div class="d-flex">
                                                        <div class="one-half">
                                                            <h3>{{$meal->name}}
                                                            </h3>
                                                        </div>
                                                        <div class="one-forth">
                                                            <span class="price">{{$meal->price}}</span>
                                                        </div>
                                                    </div>
                                                    <p>{{$meal->details}}
                                                    </p> <br>
                                                        
                                                           
                                                    <form >
                                                        <div class="input-group input-number-group">
                                                            @guest
                                                              
                                                            <input class="input-number text-center m-0 p-0" type="number" name="quantity"
                                                                value="0" min="1" max="12" >
                                                           @endguest
                                                            <br>
                                                            </form>
                                                            @auth
                                                            <form action="{{ url("/meals/$meal->id") }}" method="post" style="display: inline;">

                                                             <a href="{{ url("/meals/$meal->id/edit") }}" class="btn btn-info mr-3 ml-3">Edit</a>
                                                            
                                                            </form>@endauth
                                                            
                                                            @auth
                                                            <form action="{{ url("/meals/$meal->id") }}" method="post" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                
                                                                <input type="submit" value="Delete" class="btn btn-danger" >
                                                            </form>
                                                            @endauth
                                                        </div>

                                                    
                                                     

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

            
            
            
               @guest


    <!-- button Done    -->
    


    <div class="buttondone">

        <a  class="btn btn-success btn-lg" style="margin:30px 10px" href="/checkout">موافق</a>

    </div>


    <!--  End button done   -->
    @endguest

    </section>
    @endsection
