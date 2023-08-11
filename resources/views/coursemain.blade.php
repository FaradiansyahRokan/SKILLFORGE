<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    {{-- Home --}}

     <section id="about-home">
        <h2>Courses</h2>
    </section> 

    {{-- courses --}}
        <section id="course">
            <h1>Our Popular Course</h1>
            <p>Replenish man have thi gafsbdsbisbiub</p>
            <div class="course-box">
                
                <div class="courses">
                    <a class="linkcourse" href="{{ url('course/javascript')}}">
                    <img src="images/JS.jpg" alt="">
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
    
                <div class="courses">
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
                            IDR 150.000
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
                            IDR 280.000
                        </div>
                    </a>
                </div>
    
                <div class="courses">
                    <a class="linkcourse" href="{{ url('course/figma')}}">
                        <img src="images/figma.jpg" alt="">
                        <div class="details">
                            <span>Updated 10/3/23</span>
                            <h6>Let's become Expert on Figma </h6>
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
                        IDR 200.000
                    </div>
                </a>
                </div>

                <div class="courses">
                    <a class="linkcourse" href="{{ url('course/golang')}}">
                        <img src="images/c5.jpg" alt="">
                        <div class="details">
                            <span>Updated 10/3/23</span>
                            <h6>GoLang Beginners Course</h6>
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
                        IDR 250.000
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
                    <a class="linkcourse" href="{{ url('course/vue')}}">
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
                        IDR 250.000
                    </div>
                </a>
                </div>

                <div class="courses">
                    <a class="linkcourse" href="{{ url('course/react')}}">
                        <img src="{{ asset('../images/react.jpg')}}" alt="">
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
                    <a class="linkcourse" href="{{ url('course/linux')}}">
                        <img src="images/linux.jpg" alt="">
                        <div class="details">
                            <span>Updated 10/3/23</span>
                            <h6>Linux Beginners Course</h6>
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
                            IDR 320.000
                        </div>
                    </a>
                    </div>

                <div class="courses">
                    <a class="linkcourse" href="{{ url('course/inner')}}">
                        <img src="images/b4.png" alt="">
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