@extends('frontEnd.master')
@section('title')
    Event
@endsection

@section('content')
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Events</h2>
                <p>Organize Your Events in our Restaurant</p>
            </div>

            <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach($events as $event)

                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="{{asset($event->image)}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>{{$event->event_name}}</h3>
                                <div class="price">
                                    <p><span>${{$event->event_price}}</span></p>
                                </div>
                                <p class="fst-italic">
                                    {{substr($event->event_description,0,120)}}
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circled"></i> {{substr($event->event_description,121,51)}}.</li>
                                    <li><i class="bi bi-check-circled"></i> {{substr($event->event_description,151,181)}}.</li>
                                    <li><i class="bi bi-check-circled"></i> {{substr($event->event_description,182,211)}}.</li>
                                </ul>
                                <p>
                                    {{substr($event->event_description,212,256)}}
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                    @endforeach

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="row event-item">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <img src="{{asset('frontEnd')}}/assets/img/event-private.jpg" class="img-fluid" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 pt-4 pt-lg-0 content">--}}
{{--                                <h3>Private Parties</h3>--}}
{{--                                <div class="price">--}}
{{--                                    <p><span>$290</span></p>--}}
{{--                                </div>--}}
{{--                                <p class="fst-italic">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                                    magna aliqua.--}}
{{--                                </p>--}}
{{--                                <ul>--}}
{{--                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>--}}
{{--                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                                </ul>--}}
{{--                                <p>--}}
{{--                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate--}}
{{--                                    velit esse cillum dolore eu fugiat nulla pariatur--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="row event-item">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <img src="{{asset('frontEnd')}}/assets/img/event-custom.jpg" class="img-fluid" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 pt-4 pt-lg-0 content">--}}
{{--                                <h3>Custom Parties</h3>--}}
{{--                                <div class="price">--}}
{{--                                    <p><span>$99</span></p>--}}
{{--                                </div>--}}
{{--                                <p class="fst-italic">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                                    magna aliqua.--}}
{{--                                </p>--}}
{{--                                <ul>--}}
{{--                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>--}}
{{--                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
{{--                                </ul>--}}
{{--                                <p>--}}
{{--                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate--}}
{{--                                    velit esse cillum dolore eu fugiat nulla pariatur--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

@endsection
