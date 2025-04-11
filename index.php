<?php
session_start();
$loggedIn = isset($_SESSION["user_id"]);
$username = $loggedIn ? $_SESSION["username"] : "";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css ">
    <meta name="description" content="Student EduHub is a platform for learning new skills and advancing your career. We offer a wide range of courses to help you achieve your personal and professional goals.">

    <meta name="keywords" content="Student EduHub, online courses, learning, skills, career advancement, personal development, professional growth">

    <meta name="author" content="Student Thanage">
    <meta name="robots" content="index, follow">
    <title>Student EduHub</title>
</head>
<body>
<!-- start Navbar -->
<header class="section-navbar">
    <div class="container">
        <div class="navbar-brand">
            <a href="index.php">
                <img src="./images/student eduhub logo.png" alt="Student EduHub" width="20%" height="auto">
            </a>
        </div>
        <div class="navbar"> <!-- Added a wrapper div for better styling -->
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="service.html">Courses</a></li>

                    <?php if ($loggedIn): ?>
                        <li><a href="#">Welcome, <?php echo htmlspecialchars($username); ?>!</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.html">Login</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>

        
<!-- end Navbar -->

<!-- /* start hero Section */ -->

    <main>
        <div class="section-hero">
            <div class="container grid grid-two--cols">
                <div class="section-hero--content">
                    <p class="hero-subheading">EMPOWERING LIFELONG LEARNING</p>
                    <h1 class="hero-heading">Learn Anything, Anytime, Anywhere</h1>
                    <p class="hero-para">
                        Welcome to Student EduHub, your gateway to knowledge and skill development. We offer a wide range of courses to help you learn new skills, advance your career, and achieve your personal and professional goals.
                    </p>
                    <div class="hero-btn">
                        <a href="service.html" class="btn btn-white">Learn with us</a>
                        <a href="login.html" class="btn btn-blue">Student Login</a>
                    </div>
                </div>
                <div class="section-hero--image">
                    <figure>
                        <img src="./images/main-hero1.webp" alt="Hero Image" >
                    </figure>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1735470884">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </main>

<!-- /* end hero Section */ -->


<!-- /* start about Section */ -->

    <section class="section-about">
        <div class="container">
            <h2 class="section-common-heading">About Student EduHub</h2>
            <p class="section-common-subheading">
                Guiding Your Learning Journey Through Research, Design, and Develpment Excellence.
            </p>
        </div>
        
        <div class="container grid grid-three--cols">
            <div class="about-div">
                <div class="icon">
                    <img src="./images/research.png" alt="Student eduHub research team">
                </div>
                <h3 class="section-common--title">Research</h3>
                <p>
                    We start by leaarning what you need. We look at what's new and exciting in learning and choose topics that much what you want to learn.
                </p>
            </div>

            <div class="about-div">
                <div class="icon">
                    <img src="./images/design.png" alt="Student eduHub design">
                </div>
                <h3 class="section-common--title">Design</h3>
                <p>
                    Next, we make the lessons. We make them fun and interesting for you. We make sure they work for different ways people like to learn.
                </p>
            </div>

            <div class="about-div">
                <div class="icon">
                    <img src="./images/Coding.png" alt="Student eduHub coding icon">
                </div>
                <h3 class="section-common--title">Development</h3>
                <p>
                    After that we turn the lessons into things you can use online. We use the latest tools to make sure they work well and make you happy.
                </p>
            </div>
        </div>

    </section>

<!-- /* end about section */ -->


<!-- start courses section -->

<!-- Course Details Modal -->
<div class="course-modal" id="courseModal">
    <div class="modal-content">
      <span class="close-modal">&times;</span>
      <h2 id="modalCourseTitle"></h2>
      <div class="course-details">
        <p id="modalCourseDescription"></p>
        <div class="course-meta">
          <span><i class="fas fa-clock"></i> <span id="modalCourseDuration"></span></span>
          <span><i class="fas fa-certificate"></i> Free Certificate</span>
        </div>
        <button class="btn enroll-btn">Enroll for Free</button>
      </div>
    </div>
  </div>

    <section class="section-course">
        <div class="container">
            <h2 class="section-common-heading">Explore Our Courses</h2>
            <p class="section-common-subheading">
                Discover a variety of courses accross different categories.
            </p>
        </div>

        <div class="container grid grid-four--cols">
            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">JS Development</h3>
                <p>
                    Creating dynamic interactive web applications for user engagement.
                </p>
            </div>

            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">Python</h3>
                <p>
                Versatile language for problem-solving and application development.
                </p>
            </div>

            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">C++ Development</h3>
                <p>
                    Powerful language for system programming and game development.
                </p>
            </div>

            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">Java Development</h3>
                <p>
                    Popular language for enterprise application development.
                </p>
            </div>

            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">SQL Development</h3>
                <p>
                    Managing and querying databases for data-driven applications.
                </p>
            </div>

            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">Html Development</h3>
                <p>
                    Building the structure of web applications for better user experience.
                </p>
            </div>

            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">CSS Development</h3>
                <p>
                    Styling web applications for better user experience.
                </p>
            </div>
        </div>
        <!-- Right before </body> -->
<script src="js/course.js"></script>
</section>

<!-- End courses section -->

<!-- start why choose section -->

    <section class="section-why--choose">
        <div class="container">
            <h2 class="section-common-heading">Why Choose Student EduHub</h2>
            <p class="section-common-subheading">
                We are committed to providing the best learning experience for our students.
            </p>
        </div>

        <div class="container grid grid-three--cols">
            <div class="choose-left--div text-align--right">

                <div class="why-choose--div">
                    <p class="common-text--highlight">1</p>
                    <h3 class="section-common--title">Expert Instructors</h3>
                    <p>
                        Our instructors are experts in their fields and have years of experience in teaching and industry.
                    </p>
                </div>

                <div class="why-choose--div">
                    <p class="common-text--highlight">2</p>
                    <h3 class="section-common--title">Interactive Lessons</h3>
                    <p>
                        Our lessons are interactive and engaging. We use the latest tools and technologies to make learning fun and interesting.
                    </p>
                </div>

                <div class="why-choose--div">
                    <p class="common-text--highlight">3</p>
                    <h3 class="section-common--title">Lifelong Learning Support</h3>
                    <p>
                        Our lessons are interactive and engaging. We use the latest tools and technologies to make learning fun and interesting.
                    </p>
                </div>


            </div>

            <!-- center part of image -->

            <div class="choose-center--div">
                <figure>
                    <img src="./images/app.png" alt="Student EduHub new website">
                </figure>
            </div>

            <!-- right side of the content -->
            <div class="choose-right--div text-align--left">

                <div class="why-choose--div">
                    <p class="common-text--highlight">4</p>
                    <h3 class="section-common--title">Expert Instructors</h3>
                    <p>
                        Our instructors are experts in their fields and have years of experience in teaching and industry.
                    </p>
                </div>

                <div class="why-choose--div">
                    <p class="common-text--highlight">5</p>
                    <h3 class="section-common--title">Lifelong Learning Support</h3>
                    <p>
                        We provide life long support to our students. We are always here to help you with your learning journey.
                    </p>
                </div>
                <div class="why-choose--div">
                    <p class="common-text--highlight">6</p>
                    <h3 class="section-common--title">Lifelong Learning Support</h3>
                    <p>
                        Our instructors are experts in their fields and have years of experience in teaching and industry.
                    </p>
                </div>
            </div>

        </div>
    </section>

<!-- End why choose section -->

<!-- start contact home section -->

    <div class="section-contact--homepage" id="section-contact--homepage">
        <div class="container grid grid-two--cols">
            <div class="contact-content">
                <h2 class="contact-title">Let's revolutionaize the way you study</h2>
                <p>Join our free bootcapms to know us better</p>
                <div class="btn">
                    <a href="login.html">Start now <i class="fa-solid fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="contact-image">
                <img src="./images/main.png" alt="A guy doing html coding">
            </div>
        </div>
    </div>

<!-- End contact home section -->


<!-- start footer section -->

    <footer>
        <div class="container grid grid-four--cols">
            <div class="footer-1--div">
                <div class="logo brand">
                    <a href="index.html" class="footer-subheading">Student EduHub</a>
                        <p>Let's revolutionize the way you study with Student Eduhub</p>
                </div>
                <div class="social-footer--icons">
                    <a href="https://www.linkedin.com/in/suyash-thanage-01432b33b/" target="_blank"><i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://studio.youtube.com/channel/UCE94S3_AUSEWUZKc8ZH78Jg/videos/upload?filter=%5B%5D&sort=%7B%22columnType%22%3A%22date%22%2C%22sortOrder%22%3A%22DESCENDING%22%7D" target="_blank"><i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://www.instagram.com/suyashh_t18/" target="_blank"><i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="footer-2--div">
                <p class="footer-subheading"> Courses </p>
                    <ul>
                        <li><a href="https://www.w3schools.com/java/default.asp" target="_blank">Java</a></li>
                        <li><a href="https://www.w3schools.com/python/default.asp" target="_blank">Python</a></li>
                        <li><a href="https://www.w3schools.com/cpp/default.asp" target="_blank">C++</a></li>
                        <li><a href="https://www.w3schools.com/css/default.asp" target="_blank">CSS</a></li>
                        <li><a href="https://www.w3schools.com/html/default.asp" target="_blank">HTML</a></li>
                    </ul>
            
            </div>

            <div class="footer-3--div">
                <p class="footer-subheading"> Links</p>
                    <ul>
                    <li><a href="https://www.w3schools.com/java/default.asp" target="_blank">Java</a></li>
                        <li><a href="https://www.w3schools.com/python/default.asp" target="_blank">Python</a></li>
                        <li><a href="https://www.w3schools.com/cpp/default.asp" target="_blank">C++</a></li>
                        <li><a href="https://www.w3schools.com/css/default.asp" target="_blank">CSS</a></li>
                        <li><a href="https://www.w3schools.com/html/default.asp" target="_blank">HTML</a></li>
                    </ul>
            
            </div>

            

        </div>
    </footer>

<!-- End footer section -->
</body>
</html>