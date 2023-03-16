<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CIA</title>

        <link rel="stylesheet" href="https://kit.fontawesome.com/766f35d2e9.css" crossorigin="anonymous">


        <link rel="stylesheet" href="{{ asset('cssfile/style.css')}}">


        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    </head>

    <body>

        <!-- Navigation -->
        <nav>
            <img src="images/SKILLFORGE.jpg" alt="">
            <div class="navigation">
                <ul>
                    <i id="menu-close" class="fa-solid fa-xmark"></i>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="{{ url('course')}}">Course</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <img id="menu" src="{{ asset('../images/menu.png')}}" alt="">
            </div>
        </nav>

        <!-- Home -->
        <section id="home">
            <h2>Enhance Your Future With SKILLFORGE</h2><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vitae necessitatibus est eveniet. Voluptates doloremque vitae est. Labore, id voluptatibus! Assumenda tenetur beatae quos accusantium ratione nobis illo ducimus quas!</p>
            <div class="btn">
                <a href="#featured" class="blue">Learn More</a>
                <a href="{{ url('course')}}" class="yellow">Visit Course</a>
            </div>
        </section>
        
        <!-- features -->
        <section id="featured">
        <h1>Awesome Features</h1>
        <p>Replenish Man have thing Gathering lights yielding shall You</p>
        <div class="fea-base">
            <div class="fea-box">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Scholarship Facility</h3>
                <p> Enhancing IT Skills through Scholarship Opportunities</p>
            </div>
            <div class="fea-box">
                <i class="fa-solid fa-certificate"></i>
                <h3>Online Course</h3>
                <p>Convenient and Flexible Learning for Today's Busy Learners</p>
            </div>
            <div class="fea-box">
                <i class="fa-solid fa-award"></i>
                <h3>Global Certification</h3>
                <p>The Power of Global Certification for Professionals Worldwide</p>
            </div>
        </div>
    </section>

        <!-- Courses -->
    <section id="course">
        <h1>Our Popular Course</h1>
        <p> Unlocking Your Potential with Highly Engaging and Effective Learning</p>
        <div class="course-box ">
            
            <div class="courses">
              <a class="linkcourse" href="{{ url('course/javascript')}}">
                <img src="images/JS.jpg" alt="" >
                <div class="details">
                    <span>Updated 10/3/23</span>
                    <h6>Javascript Beginners Course</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(254)</span>
                    </div>
                </div>
                    <div class="cost">
                        IDR 300.000
                    </div>
                  </a>
            </div>

            <div class="courses" >
                <a class="linkcourse" href="{{ url('course/html-css')}}">
                    <img src="images/c2.jpg" alt="">
                    <div class="details">
                    <span>Updated 10/3/23</span>
                    <h6>HTML and CSS Beginners Course</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(254)</span>
                    </div>
                </div>
                <div class="cost">
                    IDR 300.000
                </div>
            </a>
            </div>
            
            <div class="courses">
                <a class="linkcourse" href="{{ url('course/python')}}">
                    <img src="images/c3.jpg" alt="">
                    <div class="details">
                        <span>Updated 10/3/23</span>
                        <h6>Advanced Python Course</h6>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(254)</span>
                        </div>
                    </div>
                    <div class="cost">
                        IDR 300.000
                    </div>
                </a>
                </div>
                
            <div class="courses">
                <a class="linkcourse" href="{{ url('course/react')}}">
                    <img src="images/react.jpg" alt="">
                    <div class="details">
                        <span>Updated 10/3/23</span>
                        <h6>React.js Advanced Course</h6>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(254)</span>
                    </div>
                </div>
                <div class="cost">
                    IDR 300.000
                </div>
            </a>
            </div>
            <div class="courses">
                <a class="linkcourse" href="{{ url('course/ccna')}}">
                    <img src="images/server.jpg" alt="">
                    <div class="details">
                        <span>Updated 10/3/23</span>
                        <h6>Road to CCNA Course</h6>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(254)</span>
                        </div>
                    </div>
                    <div class="cost">
                        IDR 2.500.000
                    </div>
                </a>
                </div>
                <div class="courses">
                    <img src="images/b1.jpg" alt="">
                <div class="details">
                    <span>Updated 10/3/23</span>
                    <h6>Vue.js Intermediate Course</h6>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(254)</span>
                    </div>
                </div>
                    <div class="cost">
                        IDR 300.000
                    </div>
            </div>
        </div>
    </section>

        <!-- Registration -->
    <section id="registration">
        <div class="reminder">
            <p>Get 100 Online Course for Free</p>
                <h1>Register to get it</h1>
                    <div class="time">
                        <div class="date">
                            23 <br> Hours
                        </div>
                        <div class="date">
                            12 <br> Minutes
                        </div>
                        <div class="date">
                            06 <br> Seconds
                        </div>
                    </div>
                </div>

                <div class="form">
                    <h3>Create Free Account NOW!</h3>
                    <input type="text" placeholder="Name" name="" id="">
                    <input type="text" placeholder="Email Address" name="" id="">
                    <input type="text" placeholder="Phone Number" name="" id="">
                    <div class="btn">
                        <a href="" class="yellow">Submit Form</a>
                    </div>
                </div>

    </section>
        <!-- Profiles -->
    <section id="experts">
        <h1>Community Expert</h1>
        <p>reovhfovhfuhviduhni uihinuvoniuhvf</p>
        <div class="expert-box">
            <div class="profile">
                <img src="images/pro1.webp" alt="">
                <h6>Ema irnik</h6>
                <div class="pro-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>
            <div class="profile">
                <img src="images/pro2.webp" alt="">
                <h6>Ema irnik</h6>
                <div class="pro-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>

            <div class="profile">
                <img src="images/pro3.webp" alt="">
                <h6>Ema irnik</h6>
                <div class="pro-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>

            <div class="profile">
                <img src="images/pro4.webp" alt="">
                <h6>Ema irnik</h6>
                <div class="pro-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>
        </div>
    </section>


        <!-- Footer -->
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


        <script>
            // Navaigation Bar
            $('#menu').click(function(){
                $('nav .navigation ul').addClass('active')
            });
            $('#menu-close').click(function(){
                $('nav .navigation ul').removeClass('active')
            });
        </script>


    </body>
    <script src="https://kit.fontawesome.com/766f35d2e9.js" crossorigin="anonymous"></script>
</html>