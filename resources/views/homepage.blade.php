@extends('homepage.layouts.app')
 
<!-- @section('title', 'Page Title') -->
 
@section('content')

        @include('homepage.layouts.nav')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold ">Bee’s Pizza</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75">Yummy, affordable, homemade pizza the whole family will love!.</p>
                        <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Announcement-->
        <section class="page-section bg-primary" id="announce">
        <h2 class="text-white mt-0 text-center">Announcements</h2>
        <div id="carouselExampleCaptions" class="carousel slide relative text-center" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
               @php
                $count =0;
               @endphp
               @foreach ($announcement as $announce)
                <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="{{$count}}"
                class="active"
                ></button>
                @php
                $count++;
               @endphp
               @endforeach

            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
            @php
                $count =0;
                $class = "active";
                @endphp
                @foreach ($announcement as $announce)
                @if($count==1)
                @php
                $class = "relative";
               @endphp
                   
                @endif
                <div class="carousel-item {{$class}} relative float-left w-full">
                    <img
                        src="{{$announce->image ? asset('storage/' . $announce->image) : asset('/images/no-image.png')}}" alt=""
                    />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">{{$announce->title}}</h5>
                        <p>{{$announce->description}}</p>
                    </div>
                </div>
                @php
                $count++;
               @endphp
            @endforeach
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
            
        </section>

        
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0 text-center ">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.png" title="Vegetarian">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Vegetarian</div>
                                <div class="project-category text-black-50">₱145.00</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.png" title="Beef n Mushroom">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Beef n Mushroom</div>
                                <div class="project-category text-black-50">₱170.00</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.png" title="Pepperoni">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Pepperoni</div>
                                <div class="project-category text-black-50">₱150.00</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.png" title="Spicy Chorizo">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Spicy Chorizo</div>
                                <div class="project-category text-black-50">₱155.00</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.png" title="Ham and Cheese">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Ham and Cheese</div>
                                <div class="project-category text-black-50">₱125.00</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.png" title="3-Cheese">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-name">3-Cheese</div>
                                <div class="project-category text-black-50">₱155.00</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/7.png" title="Bacon n Mushroom">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/7.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-name">Bacon n Mushroom</div>
                                <div class="project-category text-black-50">₱160.00</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/8.png" title="Hawaiian">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/8.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-name">Hawaiian</div>
                                <div class="project-category text-black-50">₱135.00</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/9.png" title="Spinach Garlic">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/9.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-name">Spinach Garlic</div>
                                <div class="project-category text-black-50">₱170.00</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/new.png" title="Smores">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/new.png" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-name">Smores</div>
                                <div class="project-category text-black-50">₱160.00</div>
                                
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us-->
        <section class="page-section bg-thirdary" id="about">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0 text-white">About Us</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="text-center text-white">
                    <p>CONTACT NUMBER: 0951 467 0000</p>
                    <img class="img-about" src="assets/img/abo.png">
                    </div>
                </div>
            </div>
        </section>
        <!-- Location-->
        <section class="page-section bg-loc" id="location">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0 text-white">Location</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="text-center text-white">
                        <p>If you would like to pick-up your orders at our place, hope this map helps. Thank you. 🐝🍕</p>
                         <a href="https://www.google.com/maps/place/Bee's+Pizza/@8.9374967,125.527056,18z/data=!4m5!3m4!1s0x3301c1ea10ddce1d:0xacea294a91c6dab4!8m2!3d8.9375063!4d125.5264971" target="_blank">
                            B4 L7 Cinderella Crownvilla, Luz Village, Brgy Bayanihan, Butuan City, Philippines</a>
                        <img class="img-loc" src="assets/img/map.png">
                    </div>
                </div>
            </div>
        </section>

        <!-- Founder-->
        <section class="page-section bg-found" id="founders">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="text-center text-white mt-0">Founder</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                <h5 class="text-white">Ferl Macalit-Hernandez </h5>
                </div>
                <div class="text-center text-white"><img class="img-found" src="assets/img/founder.jpg"><h6>Social Links</h6></div>
                
                <a href="https://www.facebook.com/ferl.macalithernandez" target="_blank"><img src="assets/img/fb.png" class="img-fb"></a>
                <a href="https://www.facebook.com/beespizza" target="_blank"><img src="assets/img/logoo.png" class="img-log"></a>
            </div>
        </section>
       
       @include('homepage.layouts.footer')

@endsection
