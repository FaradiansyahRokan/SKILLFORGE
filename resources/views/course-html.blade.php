<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tech2 etc Tutorial</title>

        <link rel="stylesheet" href="https://kit.fontawesome.com/766f35d2e9.css" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('cssfile/style.css')}}">

        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    </head>
<body>
    {{-- navigation --}}
    <nav>
        <img src="../images/SKILLFORGE.jpg" alt="">
        <div class="navigation">
            <ul>
                <i id="menu-close" class="fa-solid fa-xmark"></i>
                <li><a href="{{ url('/home')}}">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="{{ url('course')}}">Course</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <img id="menu" src="{{ asset('../images/menu.png')}}" alt="">
        </div>
    </nav> 
    {{-- home --}}
    <section id="about-home">
        <h2>Enroll Our Popular Courses And Skill up</h2>
    </section>

    <section id="course-inner">
        <div class="overview">
            <img class="course-img" src="../images/c2.jpg" alt="">
            <div class="course-head">
                <div class="c-name">
                    <h2>HTML and CSS Beginner Course</h2>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>HTML and CSS from the Beginning - Build Modern Websites with HTML and CSS and Become a Front-End Web Developer</p>
                </div>
                <span>IDR 150.000</span>
            </div>
            <h3>Intructor</h3>
            <div class="tutor">
                <img src="../images/c4.jpg" alt="">
                <div class="tutuor-det">
                    <h5>Tubagus Athallah N.I</h5>
                    <p>Student At IDNBS</p>
                </div>
            </div>
            <hr>
            <h3>Course Overview</h3>
            <p>This comprehensive course covers the fundamentals of HTML and CSS, taking you from beginner level to becoming a front-end web developer. You'll start by learning the basics of HTML, including tags, attributes, and elements. You will then move on to more advanced topics such as HTML5, responsive web design, and semantic markup. <br><br>
            In addition, you will also learn the basics of CSS, including selectors, properties, and values. You will then explore more advanced concepts such as CSS3, flexbox, and grid layout. <br><br>
            Throughout the course, you will build real-world websites and learn best practices for coding, debugging, and optimizing web pages. By the end of this course, you will have a deep understanding of HTML and CSS and be able to build modern, responsive websites with confidence. Whether you are new to web development or have experience, this course will take your skills to the next level and make you a front-end web developer.
            </p>
        
            <h3>What You'll Learn</h3>
            <div class="learn">
                <p><i class="fa-regular fa-circle-check"></i>Learn the basics of HTML, including tags, attributes, and elements.</p>
                <p><i class="fa-regular fa-circle-check"></i>Understand the fundamentals of CSS, including selectors, properties, and values.</p>
                <p><i class="fa-regular fa-circle-check"></i>Explore HTML5 and learn how to use new elements such as video and canvas.</p>
                <p><i class="fa-regular fa-circle-check"></i>Build responsive websites that adapt to different screen sizes using CSS.</p>
                <p><i class="fa-regular fa-circle-check"></i>Master advanced CSS concepts such as flexbox and grid layouts for creating complex web designs.</p>
                <p><i class="fa-regular fa-circle-check"></i>Use best practices for coding, debugging, and optimizing web pages to improve website performance.</p>
            </div>
        </div>

        <div class="enroll">
            <h3>This Course Include:</h3>
            <p><i class="fa-solid fa-video"></i>17 Hours Video</p>
            <p><i class="fa-solid fa-newspaper"></i>45 articles</p>
            <p><i class="fa-solid fa-cloud-arrow-down"></i>Download Resource</p>
            <p><i class="fa-solid fa-infinity"></i>Lifrtime Access</p>
            <p><i class="fa-solid fa-mobile"></i>Access on Mobile and TV</p>
            <p><i class="fa-sharp fa-solid fa-paperclip"></i>Assignments</p>
            <p><i class="fa-solid fa-trophy"></i>Cetificate</p>
            <div class="enroll-btn">
                <a href="{{ url('course/payment')}}" class="blue">Enroll Course</a>
            </div>
        </div>
            </section>

    {{-- footer --}}
    <footer>
        <div class="footer-col">
            <h3>Top Products</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Manage Website</li>
            <li>Marketing Service</li>
            <li>Jobs</li>
        </div>
    
        <div class="footer-col">
            <h3>Top Products</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Manage Website</li>
            <li>Marketing Service</li>
        </div>
    
        <div class="footer-col">
            <h3>Top Products</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Manage Website</li>
            <li>Marketing Service</li>
        </div>
    
        <div class="footer-col">
            <h3>Guides</h3>
            <li>Research</li>
            <li>Experts</li>
            <li>Manage Website</li>
            <li>Marketing Service</li>
        </div>
    
        <div class="footer-col">
            <h3>Newsletter</h3>
            <p>You can Trust us. we only promo offres</p>
            <div class="subscribe">
                <input type="text" placeholder="Your Email Here">
                <a href="" class="yellow">SUBCSRIBE</a>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright @2023 All rights reserved | This website is made by Rokan</p>
            <div class="pro-links">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
        </div>
    
    </footer>

    <script src="https://kit.fontawesome.com/766f35d2e9.js" crossorigin="anonymous"></script>

</body>
</html>