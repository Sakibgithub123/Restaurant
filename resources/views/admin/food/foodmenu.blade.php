
@extends('admin.master');
@section('title')

    Food Menu

@endsection

@section('content')

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Food Name</h3></div>
                        <div class="card-body">
                            <form action="{{route('food.menu')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">

                                            <select name="category_id" class="form-control"  id="">
                                                <option value="Select Food Category" disabled>Select Food Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->food_category}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-floating mb-3 mb-md-0">

                                        <select name="food_id" class="form-control"  id="">
                                            <option value="Select Food Name" disabled>Select Food Name</option>
                                            @foreach($foods as $food)

                                            <option value="{{$food->id}}">{{$food->food_name}}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="title" type="text" placeholder="Enter Food  Title" />
                                            <label for="inputFirstName">Food Title</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="slug" type="text" placeholder="Enter Food  Slug" />
                                            <label for="inputFirstName">Food Slug</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="price" type="text" placeholder="Enter Food  price" />
                                            <label for="inputFirstName">Food price</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="image" type="file"  />

                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                            <label for="inputFirstName">Description</label>
                                        </div>
                                    </div>

                                </div>




                                <div class="form-floating mb-3">

                                    <select class="form-control" name="food_type" id="">
                                        <option value="Latest">Latest</option>
                                        <option value="Popular">Popular</option>
                                    </select>

                                </div>




                                <div class="form-floating mb-3">

                                    <select class="form-control" name="status" id="">
                                        <option value="1">Publish</option>
                                        <option value="2">UnPublish</option>
                                    </select>

                                </div>



                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Submit</button></div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>



@endsection





