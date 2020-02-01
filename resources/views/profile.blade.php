@extends('layout.footer')

@section('content')

<body>

{{-- admin --}}

<div>
<h3></h3>
</div>
<table class="table">
   <tr>
               
                <th>الاسم</th>
                <th>السعر الاجمالي</th>
                <th>وقت الطلبية</th>
                <th>خيارات</th>
            </tr>

              {{-- @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer->name }}</td>
                    <td>{{ $order->order_items()->sum(\DB::raw('sold_price * quantity')) }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <a href="{{ url('orders/' . $order->id) }}" class="btn btn-info">View</a>
                    </td>
                </tr>
            @endforeach--}}
        </table> 

</body>

    @endsection
