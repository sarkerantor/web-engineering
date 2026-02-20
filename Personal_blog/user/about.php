<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
     integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header Start -->
    <header>
        <div class="head">
            <div class="first">
                <img class="sobi" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScX9bs3BsDOKgTZ9sO4-vGtd1U9bbkcxWIjw&s" alt="">
                <div class="blog"><h2>Website Blog</h2><h5>Author By Antor Sarker</h5></div>
            </div>
            <div class="second">
                <div>
                    <form class="d-flex" action="search.php" method="GET">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search">
                        <button class="btn btn-success">Search</button>
                    </form>
                </div>
                <div class="name"><i class="fa-solid fa-circle-user"></i> <?php if(isset($_SESSION['name']))echo $_SESSION['name']; ?>
                </div>
                <h2 class="dvde">|</h2>
                <div class="logout"><a href="logout.php">Logout</a></div>
            </div>
        </div>
        <div class="line">
            <div class="line-1"><a href="forsql.php">Home</a></div>
            <div class="line-1"><a href="contact.php">Contact</a></div>
            <div class="line-1"><a href="about.php">About Us</a></div>
            <div class="line-1"><a href="help.php">Help</a></div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Carousel Start -->
        <div id="cei" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#cei" data-bs-slide-to="0" 
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#cei" data-bs-slide-to="1" 
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#cei" data-bs-slide-to="2" 
                        aria-label="Slide 3"></button>
            </div>
            <!-- slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoUzaJXwpIoWavorAReomSpC0Yp0GCgGyIZw&s" class="d-block w-100" alt="First Slide">
                </div>
                <div class="carousel-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpA27B7vgpKx2qfdN8UOHy1MMAYw87h8m1JA&s" class="d-block w-100" alt="Second Slide">
                </div>
                <div class="carousel-item">
                    <img src="https://academy.vertabelo.com/blog/18-best-online-resources-for-learning-sql-and-database-concepts/generated__learn-sql-and-databases.png.jpg" class="d-block w-100" alt="Third Slide">
                </div>
            </div>
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#cei" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cei" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!-- about section start -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">About Our Website</h2>
                <p class="text-muted">Learn Web Development Easily & Effectively</p>
                <hr class="w-25 mx-auto">
            </div>
            <div class="row align-items-center">
                <!-- Image Side -->
                <div class="col-md-6 mb-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNlxPV2LKROxuxO_LIXE8Ob0bBvDfiAW87cQ&s" 
                        class="img-fluid rounded shadow" alt="About Image">
                </div>
                <!-- Content Side -->
                <div class="col-md-6">
                    <h4 class="fw-bold mb-3">Why Choose Our Platform?</h4>
                    <p class="text-secondary">
                        Our website is designed to provide a smooth and user-friendly learning experience 
                        for everyone who wants to master web development. We offer structured tutorials 
                        on HTML, CSS, JavaScript, PHP, Bootstrap, and SQL.
                    </p>
                    <div class="row mt-4">
                        <div class="col-6 mb-3">
                            <div class="card border-0 shadow-sm text-center p-3">
                                <i class="fa-solid fa-code fa-2x text-primary mb-2"></i>
                                <h6 class="fw-bold">Practical Projects</h6>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="card border-0 shadow-sm text-center p-3">
                                <i class="fa-solid fa-laptop fa-2x text-success mb-2"></i>
                                <h6 class="fw-bold">Responsive Design</h6>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="card border-0 shadow-sm text-center p-3">
                                <i class="fa-solid fa-book-open fa-2x text-warning mb-2"></i>
                                <h6 class="fw-bold">Structured Lessons</h6>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="card border-0 shadow-sm text-center p-3">
                                <i class="fa-solid fa-user-graduate fa-2x text-danger mb-2"></i>
                                <h6 class="fw-bold">Beginner Friendly</h6>
                            </div>
                        </div>
                    </div>
                    <a href="about.php" class="btn btn-primary mt-3 px-4">Learn More</a>
                </div>
            </div>
        </div>
    </section>
        <!-- about section end -->
        <footer>
            <div class="foot">
                <div class="social">
                    <div><a style="color: white; margin-left: 7px;" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a></div>
                    <div><a style="color: white;margin-left: 7px;" href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></div>
                    <div><a style="color: white;margin-left: 7px;" href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></div>
                </div>
                <div class="copy">
                    <p>&copy; Antor Sarker 2026</p>
                </div>
            </div>
        </footer>
        <!-- main body part end -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
