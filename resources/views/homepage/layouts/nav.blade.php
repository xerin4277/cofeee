<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">DOPE KAFÉ</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#announce">Announcements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Products/Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#location"> Location</a></li>
                        <li class="nav-item"><a class="nav-link" href="#link"> Fblink</a></li>
                        <li class="nav-item"><a class="nav-link" href="#founders"> Founders</a></li>
                    </ul>
                    @auth
                    <a class="nav-link" href="/logout"><button type="button" class="btn btn-primary mx-5">Log Out</button></a>
                    @else
                    <a class="nav-link" href="/login"><button type="button" class="btn btn-primary mx-5">Log In</button></a>
                    @endauth
                </div>
            </div>
        </nav>