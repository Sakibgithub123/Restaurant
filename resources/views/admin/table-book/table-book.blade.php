
@extends('admin.master');
@section('title')

    Client Book Table

@endsection

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card  shadow-lg border-0 rounded-lg mt-5" >
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Book Table</h3></div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>People</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $i=1;
                            @endphp
                            @foreach($books as $book)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$book->name}}</td>
                                    <td>{{$book->email}}</td>
                                    <td>{{$book->phone}}</td>
                                    <td>{{$book->date}}</td>
                                    <td>{{$book->time}}</td>
                                    <td>{{$book->people}}</td>
                                    <td>{{$book->message}}</td>
                                    <td>{{$book->status==1?'Book':'UnBook'}}</td>
                                    <td>
                                                                                <form action="{{route('dlt.booking')}}" method="post">
                                                                                    @csrf
                                                                                    <input type="hidden" name="book_id" value="{{$book->id}}">
                                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                                </form>
                                        @if($book->status==1)
                                            <a href="{{route('status',['id'=>$book->id])}}" class="btn btn-success">Booked</a>
                                        @else
                                            <a href="{{route('status',['id'=>$book->id])}}" class="btn btn-warning">Book Now</a>
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







