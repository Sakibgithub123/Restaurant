
@extends('admin.master');
@section('title')

    Client Contact

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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $i=1;
                            @endphp
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->subject}}</td>
                                    <td>{{$contact->message}}</td>
                                    <td>
                                        <form action="{{route('dlt.contact')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="contact_id" value="{{$contact->id}}">
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






