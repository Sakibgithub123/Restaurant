@extends('frontEnd.master')
@section('title')
   Gallery
@endsection

@section('content')

    <section id="gallery" class="gallery">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Gallery</h2>
                <p>Some photos from Our Restaurant</p>
            </div>
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">
               @foreach($galleries as $gallery)
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{asset($gallery->gallery_image)}}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{asset($gallery->gallery_image)}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                @endforeach

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="{{asset('frontEnd')}}/assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="{{asset('frontEnd')}}/assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="{{asset('frontEnd')}}/assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="{{asset('frontEnd')}}/assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="{{asset('frontEnd')}}/assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="{{asset('frontEnd')}}/assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="{{asset('frontEnd')}}/assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="{{asset('frontEnd')}}/assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="{{asset('frontEnd')}}/assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="{{asset('frontEnd')}}/assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="{{asset('frontEnd')}}/assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="{{asset('frontEnd')}}/assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="gallery-item">--}}
{{--                        <a href="{{asset('frontEnd')}}/assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">--}}
{{--                            <img src="{{asset('frontEnd')}}/assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

        </div>
    </section>


{{--    //cheifs--}}


    <section id="chefs" class="chefs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Chefs</h2>
                <p>Our Proffesional Chefs</p>
            </div>

            <div class="row">
                @foreach($cheifs as $cheif)

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{asset($cheif->image)}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>{{$cheif->cheifs_name}}</h4>
                                <span>{{$cheif->cheifs_designation}}</span>
                            </div>
                            <div class="social">
                                <a href="{{$cheif->twitter}}"><i class="bi bi-twitter"></i></a>
                                <a href="{{$cheif->fb}}"><i class="bi bi-facebook"></i></a>
                                <a href="{{$cheif->insta}}"><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="member" data-aos="zoom-in" data-aos-delay="200">--}}
{{--                        <img src="{{asset('frontEnd')}}/assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="member-info">--}}
{{--                            <div class="member-info-content">--}}
{{--                                <h4>Sarah Jhonson</h4>--}}
{{--                                <span>Patissier</span>--}}
{{--                            </div>--}}
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="member" data-aos="zoom-in" data-aos-delay="300">--}}
{{--                        <img src="{{asset('frontEnd')}}/assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">--}}
{{--                        <div class="member-info">--}}
{{--                            <div class="member-info-content">--}}
{{--                                <h4>William Anderson</h4>--}}
{{--                                <span>Cook</span>--}}
{{--                            </div>--}}
{{--                            <div class="social">--}}
{{--                                <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

        </div>
    </section>



@endsection
