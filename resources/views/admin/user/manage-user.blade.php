
@extends('admin.master');
@section('title')

    Food Category

@endsection

@section('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Food Category</h3></div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>User_Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $i=1;
                            @endphp
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>user_{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>


                                    <td>
{{--                                        <form action="{{route('dlt.category')}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            <input type="hidden" name="dlt_category" value="{{$category->id}}">--}}
{{--                                            <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                        </form>--}}
                                        @if(Auth::user()->id==$user->id)

                                        <a href="{{route('edit',['id'=>$user->id])}}" class="btn btn-success">EDIT</a>
                                        @endif


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






