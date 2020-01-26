@extends('layout.main')

@section('content')

<body>
<div class="container">
    <h2>Add New Meal</h2>

    <form action="{{ url('/meals/' . $meal->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row form-group">
            <label class="col-2 col-form-label">Name</label>

            <div class="col-10">
            <input  value="{{$meal->name}}" type="text" name="name" class="form-control">
            </div>
        </div>

        <div class="row form-group">
            <label class="col-2 col-form-label">Price</label>

            <div class="col-10">
                <input type="number" name="price" value={{$meal->price}} class="form-control">
            </div>
        </div>

        <div class="row form-group">
            <label class="col-2 col-form-label">Description</label>

            <div class="col-10">
                <textarea name="details" class="form-control" >{{$meal->details}}</textarea>
            </div>
        </div>

        <div class="row form-group">
            <label class="col-2 col-form-label">Category</label>

            <div class="col-10">
                <select name="category" class="form-control">
                    @foreach ($categories as $category)
                        <option {{ $category->id == $meal->category_id ? 'selected' : '' }}  value="{{ $category->id }}"> {{ $category->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-10">
                صورة
                              <input type="file" name="image" class="form-control">
                          </div>
        </div>

        <div class="row form-group">
            <input type="submit" value="Add" class="btn btn-primary offset-2">
        </div>
    </form>
</div>
</body>

    @endsection
