@extends('frontEnd.master')
@section('title')
    Contact page
@endsection

@section('content')

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>
        </div>

        <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="open-hours">
                            <i class="bi bi-clock"></i>
                            <h4>Open Hours:</h4>
                            <p>
                                Monday-Saturday:<br>
                                11:00 AM - 2300 PM
                            </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="{{route('save.contact')}}" method="post" role="form" class="php-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            @if(Session::has('fail'))
                            <div class="error-message"> {{Session::get('fail')}}</div>
                            @endif
                            @if(Session::has('success'))
                            <div class="sent-message"> {{Session::get('success')}} </div>
                            @endif
                        </div>
                        <div class="text-center"><button  type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>



@endsection

<style>
    .contact .php-form .validate {
        display: none;
        color: red;
        margin: 0 0 15px 0;
        font-weight: 400;
        font-size: 13px;
    }

    .contact .php-form .error-message {
        /*display: none;*/
        color: #fff;
        background: #ed3c0d;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .contact .php-form .sent-message {
        /*display: none;*/
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }


    .contact .php-form .loading {
        display: none;
        text-align: center;
        padding: 15px;
    }

    .contact .php-form .loading:before {
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

    .contact .php-form input,
    .contact .php-form textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
        background: #0c0b09;
        border-color: #625b4b;
        color: white;
    }

    .contact .php-form input::-moz-placeholder,
    .contact .php-form textarea::-moz-placeholder {
        color: #a49b89;
    }

    .contact .php-form input::placeholder,
    .contact .php-form textarea::placeholder {
        color: #a49b89;
    }

    .contact .php-form input:focus,
    .contact .php-form textarea:focus {
        border-color: #cda45e;
    }

    .contact .php-form input {
        height: 44px;
    }

    .contact .php-form textarea {
        padding: 10px 12px;
    }
    .contact .php-form button[type=submit] {
        background: #cda45e;
        border: 0;
        padding: 10px 35px;
        color: #fff;
        transition: 0.4s;
        border-radius: 50px;
    }
</style>
