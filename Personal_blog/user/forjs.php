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
            <div class="line-1"><a href="forjs.php">Home</a></div>
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
            $title = "javascript";
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
        <!-- main body part start -->
        <div id="tmain">
            <div class="mfirst">
                <!-- history -->
                <div class="md-1">
                    <div class="md11">
                    <img class="md1img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRss-86vRuxOArrVRmMgerLZ5pi8yCs6U7zsQ&s" alt="">
                    </div>
                    <div class="md12">
                        <h2>History of JavaScript</h2>
                        <p>JavaScript was created in 1995 by Brendan Eich at Netscape to make web pages interactive. Originally called Mocha, it was soon renamed LiveScript, then JavaScript 
                            to ride Java’s popularity. It started as a client-side scripting language for browsers but quickly gained features for dynamic content. In 1997, ECMAScript standardized it, allowing broader adoption. Over time, JavaScript evolved with frameworks like jQuery, Angular, React, and Node.js, 
                            expanding from browsers to servers.</p>
                    </div>
                </div>
                <!-- why use -->
                <div class="md-2">
                    <div class="md21">
                    <img class="md2img" src="https://icon-icons.com/download-file?file=https%3A%2F%2Fimages.icon-icons.com%2F2699%2FPNG%2F512%2Fjavascript_vertical_logo_icon_168606.png&id=168606&pack_or_individual=pack" alt="">
                    </div>
                    <div class="md22">
                        <h2>Why using JavaScript ?</h2>
                        <p>JavaScript is used to make websites interactive and dynamic. It lets developers create features like sliders, pop-ups, form validation, and animations that
                             run in the browser without refreshing the page. JS works on both client and server sides, making it versatile. It’s easy to learn, widely supported, and works with HTML and CSS. Frameworks like React and Node.
                            js speed up development. Overall, JavaScript enhances user experience, makes websites responsive, and allows building full applications efficiently.</p>
                    </div>
                </div>
                <!-- website link -->
                <div class="md-3">
                    <div class="md31">
                    <img class="md3img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlMxMnnMZEKVXVOmZKRLKYnuU6cSizg0ZAVA&s" alt="">
                    </div>
                    <div class="md32">
                        <h2>Learn JavaScript From Here</h2>
                        <p>JavaScript (JS) is a versatile, high-level programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. It is primarily known for making web pages interactive and dynamic.  </p>
                        <p>Link 1 :<a style="text-decoration: none;color: blue;" href="https://www.w3schools.com/js/" target="_blank"> W3 School</a></p>
                        <p>Link 2 :<a style="text-decoration: none;color: blue;" href="https://www.geeksforgeeks.org/javascript/javascript-tutorial/" target="_blank"> Geeksforgeeks</a></p><br>
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
                    <h3>Latest Article About JS</h3>
                    <p>JavaScript (JS)[a] is a programming language and core technology of the Web, alongside HTML and CSS. It was created by Brendan
                         Eich in 1995.[6] As of 2025, the overwhelming majority of websites (98.9%) uses JavaScript for client side webpage behavior.</p>
                        <h5>---Source : Wikipedia</h5>
                    <p>JavaScript (JS) is a lightweight interpreted (or just-in-time compiled) programming language with first-class functions. While it is most
                         well-known as the scripting language for Web pages, many non-browser environments also use it, such as Node.js, Apache CouchDB and Adobe Acrobat. </p>
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