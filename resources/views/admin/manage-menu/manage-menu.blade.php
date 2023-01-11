@extends('admin.master');
@section('title')

   Manage Menu

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="bg-dark text-light text-center py-3">Manage Menus</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datastablesSample" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>sl</th>
                        <th>Food Category </th>
                        <th>Food Name</th>
                        <th>Title</th>
                        <th>Slug</th>

                        <th>Image</th>
                        <th>Description</th>
                        <th>Food Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach($menus as $menu)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$menu->food_category}}</td>
                            <td>{{$menu->food_name}}</td>
                            <td>{{$menu->title}}</td>
                            <td>{{$menu->slug}}</td>
                            <td><img src="{{asset($menu->image)}}" class="img-fluid" alt=""></td>
                            <td>{{$menu->description}}</td>
                            <td>{{$menu->food_type}}</td>
                            <td>{{$menu->status==1?'Publish':'UnPublish'}}</td>
                            <td>
                                @if($menu->status==1)
                                    <a class="btn btn-success" href="{{route('status',['id'=>$menu->id])}}">Publish</a>
                                @else
                                    <a class="btn btn-warning" href="{{route('status',['id'=>$menu->id])}}">UnPublish</a>
                                @endif

                                    <form action="{{route('delete.menu')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="menu_id" value="{{$menu->id}}" id="">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>


                            </td>

                        </tr>

                    @endforeach




                    </tbody>

                </table>
            </div>
        </div>
    </div>


@endsection
