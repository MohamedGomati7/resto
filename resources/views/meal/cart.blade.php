      
      @extends('layout.footer')

@section('content')
<br/>
<strong class="text-center heading"><h3>السلة</h3></strong>
<div class="container">
        <table class="table">
            <tr>
                <th>اسم الوجبة</th>
                <th>السعر</th>
                <th>الكمية</th>
            </tr>
            @foreach ($cart_items as $cart_item)
                <tr>
                    <td>{{ $cart_item->meal->name }}</td>
                    <td>{{ $cart_item->meal->price }}</td>
                    <td>{{ $cart_item->quantity }}</td>
                </tr>
            @endforeach
        </table>
                    <a class="btn btn-success btn-lg"  style="margin:30px 10px" href="{{url("/cart-items/checkout")}}" >طلب</a>

</div><div><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>
        @endsection