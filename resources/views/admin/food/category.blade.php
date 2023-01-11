
@extends('admin.master');
@section('title')

    Food Category

@endsection

@section('content')

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Food Category</h3></div>
                        <div class="card-body">
                            <form action="{{route('food.category')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="food_category" type="text" placeholder="Enter Food Category name" />
                                            <label for="inputFirstName">Food Category</label>
                                        </div>
                                    </div>

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



    <br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Food Category</h3></div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Category_Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @php
                            $i=1;
                            @endphp
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category->food_category}}</td>
                                <td>{{$category->status}}</td>
                                <td>
                                    <form action="{{route('dlt.category')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="dlt_category" value="{{$category->id}}">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>




@endsection





