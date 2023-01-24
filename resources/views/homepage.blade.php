@extends('homepage.layouts.app')
 
<!-- @section('title', 'Page Title') -->
 
@section('content')

        @include('homepage.layouts.nav')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">A fine cup of coffee for all the good people.</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75"> It doesn't matter where you're from - or how you feel. There's always peace in a strong cup of coffee.</p>
                        <p class="text-white-75 ml-20">- Gabriel Bá, Daytripper</p>
                        <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Announcements</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                        <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section bg-thirdary" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">About Us</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="text-center ">
                        <p>Taste and Dope Kofé and Gallery offers a unique coffee house environment unlike any other in Butuan City. We are not only a place to drop in and get 
                            your morning cup of coffee (although you are more than welcome to do that), we are a place where you can sit down and enjoy that tailor-made cup of 
                            coffee. If you need to work, we have a seating area created specifically for you. If you need to rest, we have a soft-seating area in front of a 
                            stone fire place that is perfect for your weary mind and body. We offer a delicious variety of coffee from Dope Kofé made by our professionally 
                            trained baristas. We have everything from classic coffee to our house made specialty beverages.  All of our sauces & syrups are made in-house with all 
                            natural ingredients (no chemicals or preservatives) ensuring you the highest quality in taste & health.  You can complete your coffee with one of our 
                            delicious sweet treats made by our very own baker. We look forward to serving you at Taste & See Coffee Shop and Gallery!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Americano</div>
                                <div class="project-category text-black-50">S-₱100 | M-₱120 | L-₱150</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Espresso</div>
                                <div class="project-category text-black-50">S-₱110 | M-₱130 | L-₱150</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Latte</div>
                                <div class="project-category text-black-50">S-₱99 | M-₱115 | L-₱130</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Red Eye</div>
                                <div class="project-category text-black-50">S-₱100 | M-₱125 | L-₱150</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-name">Mocha</div>
                                <div class="project-category text-black-50">S-₱90 | M-₱110 | L-₱130</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-name">Irish</div>
                                <div class="project-category text-black-50">S-₱110 | M-₱125 | L-₱155</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/7.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/7.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-name">Lungo</div>
                                <div class="project-category text-black-50">S-₱100 | M-₱120 | L-₱150</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/8.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/8.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-name">Cappuccino</div>
                                <div class="project-category text-black-50">S-₱105 | M-₱125 | L-₱155</div>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/9.jpg" title="Project Name">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/9.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-name">Affogato</div>
                                <div class="project-category text-black-50">S-₱120 | M-₱140 | L-₱165</div>
                                
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="page-section bg-thirdary" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">About Us</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="text-center ">
                        <p>Taste and Dope Kofé and Gallery offers a unique coffee house environment unlike any other in Butuan City. We are not only a place to drop in and get 
                            your morning cup of coffee (although you are more than welcome to do that), we are a place where you can sit down and enjoy that tailor-made cup of 
                            coffee. If you need to work, we have a seating area created specifically for you. If you need to rest, we have a soft-seating area in front of a 
                            stone fire place that is perfect for your weary mind and body. We offer a delicious variety of coffee from Dope Kofé made by our professionally 
                            trained baristas. We have everything from classic coffee to our house made specialty beverages.  All of our sauces & syrups are made in-house with all 
                            natural ingredients (no chemicals or preservatives) ensuring you the highest quality in taste & health.  You can complete your coffee with one of our 
                            delicious sweet treats made by our very own baker. We look forward to serving you at Taste & See Coffee Shop and Gallery!</p>
                    </div>
                </div>
            </div>
        </section>       
       @include('homepage.layouts.footer')

@endsection
