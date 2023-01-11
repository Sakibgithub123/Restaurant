
@extends('admin.master');
@section('title')

   Edit Admin

@endsection

@section('content')

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Food Category</h3></div>
                        <div class="card-body">

                            <form action="{{route('update.user')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$user->id}}" name="user_id">

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="name" type="text" value="{{$user->name}}" placeholder="Enter  name" />
                                            <label for="inputFirstName">Name</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="email" type="email" value="{{$user->email}}" placeholder="Enter Email" readonly />
                                            <label for="inputFirstName">Email</label>
                                        </div>
                                    </div>


{{--                                    <input type="hidden" value="{{$user->password}}" name="old_pass">--}}

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="old_pass" type="password" placeholder="Enter password" />
                                            <label for="inputFirstName">old password</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="password" type="password" placeholder=" password" />
                                            <label for="inputFirstName"> Password</label>
                                        </div>
                                    </div>


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






