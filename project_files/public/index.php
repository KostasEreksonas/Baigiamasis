<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio Transcriber</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container">
        <a href="#" class="navbar-brand">Audio Transcriber</a>
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#learn" class="nav-link">What You'll Learn</a>
                </li>
                <li class="nav-item">
                    <a href="#questions" class="nav-link">Questions</a>
                </li>
                <li class="nav-item">
                    <a href="#instructors" class="nav-link">Instructors</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Showcase -->
<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h1>
                    Become a <span class="text-warning">web developer</span>
                </h1>
                <p class="lead my-4">
                    We focus on teaching our students the fundamentals of the latest
                    and greatest technologies to prepare them for their first dev role
                </p>
                <button class="btn btn-primary btn-lg">Start The Enrollment</button>
            </div>
            <img class="img-fluid w-50 d-none d-sm-block" src="img/showcase.svg" alt="">
        </div>
    </div>
</section>
<!-- Newsletter -->
<section class="bg-primary text-light p-5">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>
            <div class="input-group news-input">
                <input type="text"
                       class="form-control"
                       placeholder="Recipient's username"
                <div class="input-group-append">
                    <button class="btn btn-dark btn-lg"
                            type="button">Button</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Boxes -->
<section class="p-5">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h3 class="card-title mb3">
                            Virtual
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, culpa eligendi iure odio quae sapiente?
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-secondary text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-person-square"></i>
                        </div>
                        <h3 class="card-title mb3">
                            Hybrid
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, culpa eligendi iure odio quae sapiente?
                        </p>
                        <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-people"></i>
                        </div>
                        <h3 class="card-title mb3">
                            In Person
                        </h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, culpa eligendi iure odio quae sapiente?
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Learn sections -->
<section id="learn" class="p-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="img/fundamentals.svg" class="img-fluid" alt="Fundamental">
            </div>
            <div class="col-md p-5">
                <h2>Learn The Fundamentals</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam inventore, nobis! Hic incidunt maxime nihil.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at delectus eos error et explicabo facere
                    obcaecati odio temporibus? Amet atque delectus dicta doloremque earum ipsam natus necessitatibus omnis velit.
                </p>
                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right"></i>
                    Read More
                </a>
            </div>
        </div>
    </div>
</section>
<section id="learn" class="p-5 bg-dark text-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
                <h2>Learn React</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam inventore, nobis! Hic incidunt maxime nihil.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at delectus eos error et explicabo facere
                    obcaecati odio temporibus? Amet atque delectus dicta doloremque earum ipsam natus necessitatibus omnis velit.
                </p>
                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right"></i>
                    Read More
                </a>
            </div>
            <div class="col-md">
                <img src="img/react.svg" class="img-fluid" alt="Fundamental">
            </div>
        </div>
    </div>
</section>
<!-- Bootstrap Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>
</html>