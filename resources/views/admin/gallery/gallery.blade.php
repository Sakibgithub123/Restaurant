
@extends('admin.master');
@section('title')

    Food Gallery

@endsection

@section('content')

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">OUR CHEIFS</h3></div>
                        <div class="card-body">
                            <form action="{{route('save.cheifs')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="cheifs_name" type="text" placeholder="Enter Cheifs name" />
                                            <label for="inputFirstName">Cheifs Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="cheifs_designation" type="text" placeholder="Enter Cheifs Designations" />
                                            <label for="inputFirstName">Cheifs Degisnation</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="image" type="file"  />

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="twitter" type="text" placeholder="Enter Twitter Links" />
                                            <label for="inputFirstName">Twitter Links</label>
                                        </div>
                                    </div>

                                </div>


                                <div class="row mb-3">

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="fb" type="text" placeholder="Enter Facebook Links" />
                                            <label for="inputFirstName">Facebook Links</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="insta" type="text" placeholder="Enter Instagram Links" />
                                            <label for="inputFirstName">Instagram Links</label>
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

    <br> <br>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Restaurent Gallery</h3></div>
                        <div class="card-body">
                            <form action="{{route('save.gallery')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="gallery_image" type="file" />
                                            <label for="inputFirstName">Gallery Image</label>
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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Cheifs</h3></div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Cheifs_name</th>
                                <th>Cheifs_designation</th>
                                <th>Image</th>
                                <th>Twitter</th>
                                <th>Fb</th>
                                <th>Instagram</th>
                                <th>Status</th>

                                <th>Action</th>
                            </tr>
                            @php
                                $i=1;
                            @endphp
                            @foreach($cheifs as $chief)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$chief->cheifs_name}}</td>
                                    <td>{{$chief->cheifs_designation}}</td>
                                    <td><img src="{{asset($chief->image)}}" class="img-fluid" alt=""></td>
                                    <td>{{$chief->twitter}}</td>
                                    <td>{{$chief->fb}}</td>
                                    <td>{{$chief->insta}}</td>
                                    <td>{{$chief->status==1?'Publish':'UnPublish'}}</td>

                                    <td>
{{--                                        <form action="{{route('dlt.category')}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            <input type="hidden" name="dlt_category" value="{{$category->id}}">--}}
{{--                                            <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                        </form>--}}

                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <br> <br>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Gallery</h3></div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Gallery_Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $i=1;
                            @endphp
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img src="{{asset($gallery->gallery_image)}}" width="50" class="img-fluid" alt=""></td>
                                    <td>{{$gallery->status==1?'Publish':'UnPublish'}}</td>

                                    <td>
                                        {{--                                        <form action="{{route('dlt.category')}}" method="post">--}}
                                        {{--                                            @csrf--}}
                                        {{--                                            <input type="hidden" name="dlt_category" value="{{$category->id}}">--}}
                                        {{--                                            <button type="submit" class="btn btn-danger">Delete</button>--}}
                                        {{--                                        </form>--}}

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






