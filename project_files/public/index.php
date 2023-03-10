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
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
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
<!-- Question Accordion -->
<section id="questions" class="p-5">
    <div class="container">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="questions">
            <!-- Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#question-one"
                            aria-expanded="false"
                            aria-controls="flush-collapseOne">
                        Where exactly are you located?
                    </button>
                </h2>
                <div id="question-one"
                     class="accordion-collapse collapse"
                     aria-labelledby="flush-headingOne"
                     data-bs-parent="#questions">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores assumenda beatae
                        consequatur debitis dignissimos ea earum eos est et eum explicabo id, illum inventore iure
                        magni maiores maxime minus natus necessitatibus nemo nostrum odio officia perferendis quaerat
                        qui reiciendis repellendus suscipit totam veniam veritatis vitae voluptatibus, voluptatum. Deleniti, molestias?
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#question-two"
                            aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                        How much does it cost to attend?
                    </button>
                </h2>
                <div id="question-two"
                     class="accordion-collapse collapse"
                     aria-labelledby="flush-headingTwo"
                     data-bs-parent="#questions">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores assumenda beatae
                        consequatur debitis dignissimos ea earum eos est et eum explicabo id, illum inventore iure
                        magni maiores maxime minus natus necessitatibus nemo nostrum odio officia perferendis quaerat
                        qui reiciendis repellendus suscipit totam veniam veritatis vitae voluptatibus, voluptatum. Deleniti, molestias?
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#question-three"
                            aria-expanded="false"
                            aria-controls="flush-collapseThree">
                        What do I need to know?
                    </button>
                </h2>
                <div id="question-three"
                     class="accordion-collapse collapse"
                     aria-labelledby="flush-headingThree"
                     data-bs-parent="#questions">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores assumenda beatae
                        consequatur debitis dignissimos ea earum eos est et eum explicabo id, illum inventore iure
                        magni maiores maxime minus natus necessitatibus nemo nostrum odio officia perferendis quaerat
                        qui reiciendis repellendus suscipit totam veniam veritatis vitae voluptatibus, voluptatum. Deleniti, molestias?
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#question-four"
                            aria-expanded="false"
                            aria-controls="flush-collapseFour">
                        What do I sign up?
                    </button>
                </h2>
                <div id="question-four"
                     class="accordion-collapse collapse"
                     aria-labelledby="flush-headingFour"
                     data-bs-parent="#questions">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores assumenda beatae
                        consequatur debitis dignissimos ea earum eos est et eum explicabo id, illum inventore iure
                        magni maiores maxime minus natus necessitatibus nemo nostrum odio officia perferendis quaerat
                        qui reiciendis repellendus suscipit totam veniam veritatis vitae voluptatibus, voluptatum. Deleniti, molestias?
                    </div>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#question-five"
                            aria-expanded="false"
                            aria-controls="flush-collapseFive">
                        Will you help me find a job?
                    </button>
                </h2>
                <div id="question-five"
                     class="accordion-collapse collapse"
                     aria-labelledby="flush-headingFive"
                     data-bs-parent="#questions">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores assumenda beatae
                        consequatur debitis dignissimos ea earum eos est et eum explicabo id, illum inventore iure
                        magni maiores maxime minus natus necessitatibus nemo nostrum odio officia perferendis quaerat
                        qui reiciendis repellendus suscipit totam veniam veritatis vitae voluptatibus, voluptatum. Deleniti, molestias?
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Information -->
<section id="instructors" class="p-5 bg-primary">
    <div class="container">
        <h2 class="text-center text-white">Our Instructors</h2>
        <p class="lead text-center text-white mb-5">
            Our instructors all have 5+ years working as a web developer
        </p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/11.jpg"
                             class="rounded-circle mb-3"
                             alt="Profile Picture">
                        <h3 class="card-title mb-3">John Doe</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolor dolore ea eum
                            exercitationem in ipsa iure, quam reiciendis repudiandae.
                        </p>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/women/11.jpg"
                             class="rounded-circle mb-3"
                             alt="Profile Picture">
                        <h3 class="card-title mb-3">Jane Doe</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolor dolore ea eum
                            exercitationem in ipsa iure, quam reiciendis repudiandae.
                        </p>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/12.jpg"
                             class="rounded-circle mb-3"
                             alt="Profile Picture">
                        <h3 class="card-title mb-3">Steve Smith</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolor dolore ea eum
                            exercitationem in ipsa iure, quam reiciendis repudiandae.
                        </p>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/women/12.jpg"
                             class="rounded-circle mb-3"
                             alt="Profile Picture">
                        <h3 class="card-title mb-3">Sarah Smith</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolor dolore ea eum
                            exercitationem in ipsa iure, quam reiciendis repudiandae.
                        </p>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">Copyright &copy; 2023 Kostas Ereksonas</p>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>
<!-- Bootstrap Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>
</html>