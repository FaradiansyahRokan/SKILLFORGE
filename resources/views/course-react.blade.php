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
        <img src="images/SKILLFORGE.jpg" alt="">
        <div class="navigation">
            <ul>
                <i id="menu-close" class="fa-solid fa-xmark"></i>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="{{ url('course')}}">Course</a></li>
                <li><a href="">Contact</a></li>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-1 sm:block">
                    @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" class="img-thumbnail bulat" alt=""> {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline yellow">Log in</a>
                    @endauth
                </div>
            @endif
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
            <img class="course-img" src="../images/react.jpg" alt="">
            <div class="course-head">
                <div class="c-name">
                    <h2>React.js Advanced Course</h2>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>React.js from the Beginning - Build Modern Web Applications with React.js and Become a React.js Expert</p>
                </div>
                <span>IDR 280.000</span>
            </div>
            <h3>Intructor</h3>
            <div class="tutor">
                <img src="../images/c4.jpg" alt="">
                <div class="tutuor-det">
                    <h5>Fachry Fauzan F.</h5>
                    <p>Student At IDNBS</p>
                </div>
            </div>
            <hr>
            <h3>Course Overview</h3>
            <p>The React.js beginner course will take you through the basics of web development using React.js. In this course, you will learn the fundamental concepts of React such as components, state, props, JSX, and event handling. Moreover, you will also learn about React Hooks, which allow for easier and faster development. This course will help you build simple web applications with React.js, understand basic concepts like routing, and integrate React.js with RESTful APIs. After completing this course, you will be ready to move on to higher levels and explore more complex React.js capabilities.
            </p>
        
            <h3>What You'll Learn</h3>
            <div class="learn">
                <p><i class="fa-regular fa-circle-check"></i>Learn the basic concepts of React such as components, state, props, and JSX.
                </p>
                <p><i class="fa-regular fa-circle-check"></i>Understand event handling in React and develop applications that respond to user input.</p>
                <p><i class="fa-regular fa-circle-check"></i>Apply React Hooks to speed up application development and improve workflow efficiency.</p>
                <p><i class="fa-regular fa-circle-check"></i>Build a simple application with React.js, including using routing and integrating with RESTful APIs.</p>
                <p><i class="fa-regular fa-circle-check"></i>Understand and apply basic React testing concepts to improve code quality.</p>
                <p><i class="fa-regular fa-circle-check"></i>Explore more advanced React concepts, such as Redux and React Native, for developing more sophisticated applications.</p>
            </div>
        </div>

        <div class="enroll">
            <h3>This Course Include:</h3>
            <p><i class="fa-solid fa-video"></i>43 Hours Video</p>
            <p><i class="fa-solid fa-newspaper"></i>54 articles</p>
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