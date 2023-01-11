@extends('frontEnd.master')
@section('title')
    Book table
@endsection

@section('content')
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Reservation</h2>
                <p>Book a Table</p>
            </div>

            <form action="{{route('save.bookTable')}}" method="post" role="form" class="php-form" data-aos="fade-up" data-aos-delay="100">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    @if(Session::has('fail'))
                    <div class="error-message">{{Session::get('fail')}}</div>
                    @endif
                    @if(Session::has('success'))
                    <div class="sent-message">{{Session::get('success')}}</div>
                    @endif
                </div>
                <div class="text-center"><button type="submit">Book a Table</button></div>
            </form>

        </div>
    </section>


@endsection

<style>

    .book-a-table .php-form {
        width: 100%;
    }

    .book-a-table .php-form .form-group {
        padding-bottom: 8px;
    }

    .book-a-table .php-form .validate {
        /*display: none;*/
        color: red;
        margin: 0 0 15px 0;
        font-weight: 400;
        font-size: 13px;
    }

    .book-a-table .php-form .error-message {
        display: none;
        color: #fff;
        background: #ed3c0d;
        text-align: left;
        padding: 15px;
        font-weight: 600;
    }

    .book-a-table .php-form .error-message br+br {
        margin-top: 25px;
    }

    .book-a-table .php-form .sent-message {
        /*display: none;*/
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .book-a-table .php-form .loading {
        display: none;
        text-align: center;
        padding: 15px;
    }

    .book-a-table .php-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid #cda45e;
        border-top-color: #1a1814;
        -webkit-animation: animate-loading 1s linear infinite;
        animation: animate-loading 1s linear infinite;
    }

    .book-a-table .php-form input,
    .book-a-table .php-form textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
        background: #0c0b09;
        border-color: #625b4b;
        color: white;
    }

    .book-a-table .php-form input::-moz-placeholder,
    .book-a-table .php-form textarea::-moz-placeholder {
        color: #a49b89;
    }

    .book-a-table .php-form input::placeholder,
    .book-a-table .php-form textarea::placeholder {
        color: #a49b89;
    }

    .book-a-table .php-form input:focus,
    .book-a-table .php-form textarea:focus {
        border-color: #cda45e;
    }

    .book-a-table .php-form input {
        height: 44px;
    }

    .book-a-table .php-form textarea {
        padding: 10px 12px;
    }

    .book-a-table .php-form button[type=submit] {
        background: #cda45e;
        border: 0;
        padding: 10px 35px;
        color: #fff;
        transition: 0.4s;
        border-radius: 50px;
    }

    .book-a-table .php-form button[type=submit]:hover {
        background: #d3af71;
    }





</style>
