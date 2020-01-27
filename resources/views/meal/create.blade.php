@extends('layout.footer')

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style> 
#fonts {
  font-family: 'Tajawal', sans-serif;
}
</style> 
<div class="container mr-5 mt-5">
    <h2 id="fonts" class="ml-5">إضافة وجبة جديدة</h2>

    <form class="form-group col-md-4 col-form-label text-md-right" action="{{ url('/meals/store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row form-group">
            <label  id="fonts" class="col-2 col-form-label">الإسم</label>

            <div class="col-10">
                <input type="text" name="name" class="form-control">
            </div>
        </div>

        <div class="row form-group">
            <label  id="fonts" class="col-2 col-form-label">السعر</label>

            <div class="col-10">
                <input type="number" name="price" class="form-control">
            </div>
        </div>

        <div class="row form-group">
            <label id="fonts" class="col-2.5 col-form-label">التفاصيل</label>

            <div class="col-10">
                <textarea id="fonts" name="details" class="form-control"></textarea>
            </div>
        </div>

        <div class="row form-group">
            <label id="fonts" class="col-2 col-form-label">الصنف</label>

            <div id="fonts" class="col-10">
                <select name="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div id="fonts" class="row form-group">
            <label id="fonts" class="col-2.5 col-form-label ml-4">الصور</label>
            <input type="file" name="image" class="form-control col-9 ml-3">
        </div>

        </div>
        <div class="row form-group"> 
            <input id="fonts" type="submit" value="موافق" class="btn btn-success offset-2">
        </div>
    </form>
</div>
@endsection