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
            <img class="course-img" src="../images/linux.jpg" alt="">
            <div class="course-head">
                <div class="c-name">
                    <h2>Linux Beginner Course</h2>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>Linux Mastery Course - Become a Master of Linux Operating System</p>
                </div>
                <span>IDR 320.000</span>
            </div>
            <h3>Intructor</h3>
            <div class="tutor">
                <img src="../images/c4.jpg" alt="">
                <div class="tutuor-det">
                    <h5>Nadhif, Pohan</h5>
                    <p>Student At IDNBS</p>
                </div>
            </div>
            <hr>
            <h3>Course Overview</h3>
            <p>This Linux Mastery Course is designed for both beginners and experienced users who want to improve their Linux skills and become experts in the Linux operating system. In this course, you will learn the fundamentals of Linux, including basic commands, file system structure, and user management. <br><br>
            You will also explore advanced Linux topics, such as system administration, networking, shell scripting, and security. Additionally, you will learn how to customize your Linux environment and optimize your system for performance. <br><br>
            Throughout the course, you will work with real-world examples and projects to deepen your understanding of Linux. You will also learn how to troubleshoot and debug common Linux issues, and how to use Linux for both desktop and server environments. <br><br>
            By the end of this course, you will have a deep understanding of Linux, and be equipped with the skills and knowledge necessary to become a Linux master.

            </p>
        
            <h3>What You'll Learn</h3>
            <div class="learn">Master the Linux command line interface, including basic commands and file system structure.</p>
                <p><i class="fa-regular fa-circle-check"></i>Learn how to manage users and groups, set permissions, and secure your Linux system.</p>
                <p><i class="fa-regular fa-circle-check"></i>Develop expertise in system administration, including managing services, storage, and backup.</p>
                <p><i class="fa-regular fa-circle-check"></i>Understand Linux networking, including configuring network interfaces, setting up DHCP, and managing firewall rules.</p>
                <p><i class="fa-regular fa-circle-check"></i>Learn shell scripting and automation to automate common tasks and increase your efficiency.</p>
                <p><i class="fa-regular fa-circle-check"></i>Optimize your Linux system for performance, including tuning the kernel, optimizing disk I/O, and managing memory.</p>
            </div>
        </div>

        <div class="enroll">
            <h3>This Course Include:</h3>
            <p><i class="fa-solid fa-video"></i>19 Hours Video</p>
            <p><i class="fa-solid fa-newspaper"></i>10 articles</p>
            <p><i class="fa-solid fa-cloud-arrow-down"></i>Download Resource</p>
            <p><i class="fa-solid fa-infinity"></i>Lifrtime Access</p>
            <p><i class="fa-solid fa-mobile"></i>Access on Mobile and TV</p>
            <p><i class="fa-sharp fa-solid fa-paperclip"></i>Assignments</p>
            <p><i class="fa-solid fa-trophy"></i>Certification</p>
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