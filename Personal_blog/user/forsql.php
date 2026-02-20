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
        
        <!-- Carousel End -->
            <!--Post part start  -->
            <div class="post container mt-5">
            <?php
            include "../config/db.php";
            $title = "sql";
            $stmt = $con->prepare("SELECT topic, descr FROM posts WHERE title=?");
            $stmt->bind_param("s", $title);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                echo "<div class='card shadow p-4'>";
                echo "<h2 class='text-primary mb-3'>".$row["topic"]."</h2>";
                echo "<p class='text-muted'>".$row["descr"]."</p>";
                echo "</div>";
            }else{
                echo "<div class='alert alert-warning'>No Post Found!</div>";
            }
            ?>
            </div>
            <!--Post part end  -->
            <!-- Comment start  -->
            <div class="container mt-5">
            <?php
            include "../config/db.php";
            if(isset($_POST["submit"])){
                if(isset($_SESSION["email"])){
                    $email  = $_SESSION["email"];
                    $coment = $_POST["coment"];
                    $sql="INSERT INTO comments (email, coment) VALUES ('$email','$coment')";
                    if($con->query($sql)){
                        echo "<h3 style='color:green;'>Successfully submitted.</h3>";
                    } else {
                        echo "<div class='alert alert-danger'>Comment Failed!</div>";
                    }
                } 
            }
            ?>

            <div class="card shadow-lg border-0 rounded-4 p-4">
                <h4 class="mb-3 text-primary">Leave a Comment</h4>

                <form method="post">
                    <div class="mb-3">
                        <textarea name="coment" class="form-control" rows="4" 
                                placeholder="Write your comment..." required></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-success">
                            Submit Comment
                        </button>
                    </div>
                </form>
            </div>

            </div>
            <!-- Comment end -->

         <!-- Comment end -->
        <!-- main body part start -->
        <div id="tmain">
            <div class="mfirst">
                <!-- history -->
                <div class="md-1">
                    <div class="md11">
                    <img class="md1img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRM3VpCXe2YuZJjEKlLWgp2lP0nagqIRADhDQ&s" alt="">
                    </div>
                    <div class="md12">
                        <h2>History of MYSQL</h2>
                        <p>MySQL was created in 1995 by Michael Widenius and his team at MySQL AB. It was designed as a fast, open-source database system for web applications. 
                            MySQL quickly became popular because it was easy to use and worked well with PHP. In 2010, 
                            it was acquired by Oracle Corporation. Today, MySQL is one of the most widely used databases in the world for websites and applications.</p>
                    </div>
                </div>
                <!-- why use -->
                <div class="md-2">
                    <div class="md21">
                    <img class="md2img" src="https://rms.koenig-solutions.com/Sync_data/CCE_Logo/2327-Anewwaytoplay.(23).pngL.jpg" alt="">
                    </div>
                    <div class="md22">
                        <h2>Why using MYSQL ?</h2>
                        <p>MySQL is used to store and manage data for websites and applications in a fast and reliable way. It is open-source, easy to learn, and works smoothly 
                            with languages like PHP. MySQL handles large amounts of data efficiently while keeping information secure. It is widely supported by hosting services and developers 
                            around the world. After being acquired by Oracle Corporation, it continued to improve. Overall, MySQL is a trusted, powerful database for modern web development.</p>
                    </div>
                </div>
                <!-- website link -->
                <div class="md-3">
                    <div class="md31">
                    <img class="md3img" src="https://www.freepnglogos.com/uploads/logo-mysql-png/logo-mysql-securing-mysql-and-connecting-wso-servers-yasassri-blog-18.png" alt="">
                    </div>
                    <div class="md32">
                        <h2>Learn MYSQL From Here</h2>
                        <p>MySQL is a widely used, open-source relational database management system (RDBMS) that uses Structured Query Language (SQL) to store, manage, and retrieve structured data. It's a foundational
                             technology for many websites and applications due to its speed, reliability, and scalability. </p>
                        <p>Link 1 :<a style="text-decoration: none;color: blue;" href="https://www.w3schools.com/MySQL/default.asp" target="_blank"> W3 School</a></p>
                        <p>Link 2 :<a style="text-decoration: none;color: blue;" href="https://www.geeksforgeeks.org/mysql/mysql-tutorial/" target="_blank"> Geeksforgeeks</a></p><br>
                    </div>
                </div>
            </div>
            <div class="msecond">
                <div class="category">
                    <h2>Select Your Category</h2>
                    <div class="d-grid gap-2">
                        <a href="forhtml.php" class="btn btn-primary">HTML</a>
                        <a href="forcss.php" class="btn btn-primary">CSS</a>
                        <a href="forjs.php" class="btn btn-primary">JavaScript</a>
                        <a href="forphp.php" class="btn btn-primary">PHP</a>
                        <a href="forbootstrap.php" class="btn btn-primary">Bootstrap</a>
                        <a href="forsql.php" class="btn btn-primary">MySQL</a>
                    </div>

                </div>
                <div class="article">
                    <h3>Latest Article About MYSQL</h3>
                    <p>MySQL (/ˌmaɪˌɛsˌkjuːˈɛl/)[6] is an open-source relational database management system (RDBMS).[6][7] Its name is a combination of "My", the name of co-founder Michael Widenius' daughter My,[1] and "SQL", the acronym for Structured Query
                         Language. A relational database organizes data into one or more data tables in which data may be related to each other.</p>
                        <h5>---Source : Wikipedia</h5>
                    <p>In web development, most databases use the relational database management system (RDBMS) to organize data and programming in SQL.
                         Some databases, however, don't follow the former mechanism to organized data, which called NoSQL.</p>
                         <h5>---Source : MDN - Mozilla</h5>
                </div>
            </div>
        </div>
        <footer>
            <div class="foot">
                <div class="social"">
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