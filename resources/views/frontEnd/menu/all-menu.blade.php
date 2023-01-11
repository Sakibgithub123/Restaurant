@extends('frontEnd.master')
@section('title')
    Menu page
@endsection

@section('content')

    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Menu</h2>
                <p>Check Our Tasty Menu</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">

                    <ul class="list-group list-group-flush d-flex flex-row bd-highlight "  style="list-style-type: none;">
                        <li class="m-2" data-filter="*" class="filter-active"><a href="{{route('all.menu')}}">All</a></li>
                        {{--                        <li data-filter=".filter-starters">Starters</li>--}}
                        @foreach($categories as $category)
                            <li class="list-item m-2" data-filter=".filter-salads"><a href="{{route('menu.2',['id'=>$category->id])}}">{{$category->food_category}}</a></li>
                        @endforeach
                        {{--                        <li data-filter=".filter-specialty">Specialty</li>--}}
                    </ul>

                </div>
            </div>

            @foreach($alls as $all)
            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">



                <div class="col-lg-6 menu-item filter-starters">
                    <img src="{{asset('frontEnd')}}/assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">{{$all->food_name}}</a><span>$5.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>

                </div>
                @endforeach

                {{--                <div class="col-lg-6 menu-item filter-specialty">--}}
                {{--                    <img src="{{asset('frontEnd')}}/assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">--}}
                {{--                    <div class="menu-content">--}}
                {{--                        <a href="#">Bread Barrel</a><span>$6.95</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="menu-ingredients">--}}
                {{--                        Lorem, deren, trataro, filede, nerada--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-lg-6 menu-item filter-starters">--}}
                {{--                    <img src="{{asset('frontEnd')}}/assets/img/menu/cake.jpg" class="menu-img" alt="">--}}
                {{--                    <div class="menu-content">--}}
                {{--                        <a href="#">Crab Cake</a><span>$7.95</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="menu-ingredients">--}}
                {{--                        A delicate crab cake served on a toasted roll with lettuce and tartar sauce--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-lg-6 menu-item filter-salads">--}}
                {{--                    <img src="{{asset('frontEnd')}}/assets/img/menu/caesar.jpg" class="menu-img" alt="">--}}
                {{--                    <div class="menu-content">--}}
                {{--                        <a href="#">Caesar Selections</a><span>$8.95</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="menu-ingredients">--}}
                {{--                        Lorem, deren, trataro, filede, nerada--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-lg-6 menu-item filter-specialty">--}}
                {{--                    <img src="{{asset('frontEnd')}}/assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">--}}
                {{--                    <div class="menu-content">--}}
                {{--                        <a href="#">Tuscan Grilled</a><span>$9.95</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="menu-ingredients">--}}
                {{--                        Grilled chicken with provolone, artichoke hearts, and roasted red pesto--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-lg-6 menu-item filter-starters">--}}
                {{--                    <img src="{{asset('frontEnd')}}/assets/img/menu/mozzarella.jpg" class="menu-img" alt="">--}}
                {{--                    <div class="menu-content">--}}
                {{--                        <a href="#">Mozzarella Stick</a><span>$4.95</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="menu-ingredients">--}}
                {{--                        Lorem, deren, trataro, filede, nerada--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-lg-6 menu-item filter-salads">--}}
                {{--                    <img src="{{asset('frontEnd')}}/assets/img/menu/greek-salad.jpg" class="menu-img" alt="">--}}
                {{--                    <div class="menu-content">--}}
                {{--                        <a href="#">Greek Salad</a><span>$9.95</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="menu-ingredients">--}}
                {{--                        Fresh spinach, crisp romaine, tomatoes, and Greek olives--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-lg-6 menu-item filter-salads">--}}
                {{--                    <img src="{{asset('frontEnd')}}/assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">--}}
                {{--                    <div class="menu-content">--}}
                {{--                        <a href="#">Spinach Salad</a><span>$9.95</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="menu-ingredients">--}}
                {{--                        Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="col-lg-6 menu-item filter-specialty">--}}
                {{--                    <img src="{{asset('frontEnd')}}/assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">--}}
                {{--                    <div class="menu-content">--}}
                {{--                        <a href="#">Lobster Roll</a><span>$12.95</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="menu-ingredients">--}}
                {{--                        Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll--}}
                {{--                    </div>--}}
                {{--                </div>--}}

            </div>

        </div>
    </section>


@endsection

