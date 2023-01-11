
@extends('admin.master');
@section('title')

    Add Event

@endsection

@section('content')

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Food Category</h3></div>
                        <div class="card-body">
                            <form action="{{route('save.event')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="event_name" type="text" placeholder="Enter Event Name" />
                                            <label for="inputFirstName">Event Name</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="event_price" type="text" placeholder="Enter Event Price" />
                                            <label for="inputFirstName">Event Price</label>
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
                                            <textarea class="form-control" name="event_description" id="" cols="30" rows="10"></textarea>
                                            <label for="inputFirstName">Event Description</label>
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



    <br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Events Organize</h3></div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Events_Name</th>
                                <th>Event_price</th>
                                <th>Image</th>
                                <th>Event_Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $i=1;
                            @endphp
                            @foreach($events as $event)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$event->event_name}}</td>
                                    <td>{{$event->event_price}}</td>
                                    <td><img src="{{asset($event->image)}}" width="100" alt=""></td>
                                    <td>{{$event->event_description}}</td>
                                    <td>{{$event->status==1?'Publish':'UnPublish'}}</td>
                                    <td>
                                        <form action="{{route('dlt.event')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="event_id" value="{{$event->id}}">
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






