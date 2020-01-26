@extends('layout.main')

@section('content')


{{-- <form action="{{url('/categories')}}" method="POST"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style> 
#fonts {
  font-family:'Tajawal', sans-serif;
}
</style>
<div style="padding: 50px 0"></div>  
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-5 "> 
<div style="padding:60px">
<div id="fonts" class="mt-5">

 <form action="{{url('/categories')}}" method="POST">
 @csrf

  <div class="form-group row col-md-12">
     
        <label for="category" class="col-md-2 col-form-label text-md-right mr-5">إسم الصنف </label>
        <input id="fonts" type="text" class="form-control col-2 col-md-5 mr-5 " id="category" aria-describedby="emailHelp" placeholder="إسم الصنف" name="name">
        <button id="fonts" type="submit" class="btn btn-success col-md-2 ml-5" >موافق</button>

  </div>
 
       
</form>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection