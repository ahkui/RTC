<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IOS CLUB</title>
    <link type="image/png" href="img/iosclub-logo.png" rel="icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/iosclub.css') }}" rel="stylesheet"> @stack('css')
    {{-- Modernizr JS --}}
    <script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body>
    <div id="app">
        <div id="fh5co-wrapper">
            <div id="fh5co-page">
                <div id="fh5co-header">
                    <header id="fh5co-header-section">
                        <div class="container h-100">
                            <div class="nav-header h-100">
                                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                                <div id="fh5co-logo">
                                    <div><img src="img/iosclub.png" alt="IOS Club" height="50px"><a href="{{route('iosclub.home')}}"> <span>IOS Club</span></a></div>
                                </div>
                                <nav id="fh5co-menu-wrap" role="navigation">
                                    <ul class="sf-menu" id="fh5co-primary-menu">
                                        <li>
                                            <a href="{{route('rtc.home')}}">RTC官網</a>
                                        </li>
                                        <li class="active">
                                            <a href="{{route('iosclub.home')}}">首頁</a>
                                        </li>
                                        {{--
                                        <li>
                                            <a href="portfolio.html" class="fh5co-sub-ddown">Projects</a>
                                            <ul class="fh5co-sub-menu">
                                                <li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="services.html" class="fh5co-sub-ddown">Services</a>
                                            <ul class="fh5co-sub-menu">
                                                <li><a href="left-sidebar.html">Web Development</a></li>
                                                <li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
                                                <li>
                                                    <a href="#" class="fh5co-sub-ddown">Free HTML5</a>
                                                    <ul class="fh5co-sub-menu">
                                                        <li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
                                                        <li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
                                                        <li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
                                                        <li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
                                                        <li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
                                                        <li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">UI Animation</a></li>
                                                <li><a href="#">Copywriting</a></li>
                                                <li><a href="#">Photography</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Contact</a></li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="fh5co-hero">
                    <div class="fh5co-overlay"></div>
                    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(img/home-image.jpg);">
                        <div class="desc animate-box">
                            <h2>想要了解我們嗎？</h2>
                            <span>繼續往下看</span>
                            <span><a class="btn btn-primary js-scroll-trigger" href="#fh5co-services-section">GO！</a></span>
                        </div>
                    </div>
                </div>
                {{-- end:header-top --}}
                <div id="fh5co-services-section" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h3>一個在課堂之外<br>促進學習和實踐的iOS開發者社團</h3>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row text-center justify-content-center">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    <span><i class="icon-browser"></i></span>
                                    <h3>學習開發技巧</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    <span><i class="icon-mobile"></i></span>
                                    <h3>分享開發資源</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    <span><i class="icon-tools"></i></span>
                                    <h3>交流開發經驗</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    <span><i class="icon-video"></i></span>
                                    <h3>聆聽新鮮理念</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    <span><i class="icon-search"></i></span>
                                    <h3>參與開發實踐</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fh5co-services-section --}}
                <div id="fh5co-work-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h3>介紹</h3>
                                <p>逢甲大學 iOS Club 為台灣第一個與蘋果合作之社團，希望能透過逢甲 RTC 區域教育培訓中心，讓本社團之學生能夠充分利用學校資源，培養程式設計的基本能力與邏輯觀念。本社團將會規劃許多程式開發課程，從基本的邏輯觀念，到讓同學自行創意發想 App。希冀100%的社員都對 App 有基礎概念，並能熟練程式設計，甚至精熟這項領域。</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-sm-8">
                                <div class="fh5co-grid animate-box" style="background-image: url(img/work-1.jpg);">
                                    {{--
                                    <a class="image-popup text-center" href="#">
                                        <div class="prod-title">
                                            <h3>Don’t Just Stand There</h3>
                                            <span>Illustration, Print</span>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="fh5co-grid animate-box" style="background-image: url(img/work-2.jpg);">
                                    {{--
                                    <a class="image-popup text-center" href="#">
                                        <div class="prod-title">
                                            <h3>Don’t Just Stand There</h3>
                                            <span>Illustration, Print</span>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="fh5co-grid animate-box" style="background-image: url(img/work-3.jpg);">
                                    {{--
                                    <a class="image-popup text-center" href="#">
                                        <div class="prod-title">
                                            <h3>Don’t Just Stand There</h3>
                                            <span>Illustration, Print</span>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="fh5co-grid animate-box" style="background-image: url(img/work-4.jpg);">
                                    {{--
                                    <a class="image-popup text-center" href="#">
                                        <div class="prod-title">
                                            <h3>Don’t Just Stand There</h3>
                                            <span>Illustration, Print</span>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fh5co-work-section --}}
                <div id="fh5co-content-section" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h3>在社團活動中<br>打開通往iOS開發世界的大門</h3>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row text-center justify-content-center">
                            <div class="col-12">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-browser"></i></span> --}}
                                    <h3>鞏固興趣</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-mobile"></i></span> --}}
                                    <figure>
                                        <img src="img/wwdc17.png" width="100%">
                                    </figure>
                                    <h3>一起看WWDC</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-tools"></i></span> --}}
                                    <figure>
                                        <img src="img/bestiosapp.png" width="100%">
                                    </figure>
                                    <h3>評選年度最受歡迎 iOS App</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-video"></i></span> --}}
                                    <figure>
                                        <img src="img/straighta.png" width="100%">
                                    </figure>
                                    <h3>學期末與校園體驗店聯合舉辦晚會</h3>{{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fh5co-services-section --}}
                <div id="fh5co-content-section">
                    <div class="container">
                        <div class="row text-center justify-content-center">
                            <div class="col-12">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-browser"></i></span> --}}
                                    <h3>內部交流</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-mobile"></i></span> --}}
                                    <figure>
                                        <img src="img/wwdc17.png" width="100%">
                                    </figure>
                                    <h3>iOS 開發資源、書籍分享會</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-tools"></i></span> --}}
                                    <figure>
                                        <img src="img/bestiosapp.png" width="100%">
                                    </figure>
                                    <h3>iOS 開發技巧、經驗交流會</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-video"></i></span> --}}
                                    <figure>
                                        <img src="img/straighta.png" width="100%">
                                    </figure>
                                    <h3>App 創意討論會</h3>{{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fh5co-services-section --}}
                <div id="fh5co-content-section" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row text-center justify-content-center">
                            <div class="col-12">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-browser"></i></span> --}}
                                    <h3>借鑒學習</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-mobile"></i></span> --}}
                                    <figure>
                                        <img src="img/wwdc17.png" width="100%">
                                    </figure>
                                    <h3>iOS 技術專家講座</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-tools"></i></span> --}}
                                    <figure>
                                        <img src="img/bestiosapp.png" width="100%">
                                    </figure>
                                    <h3>App 設計團隊交流</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-video"></i></span> --}}
                                    <figure>
                                        <img src="img/straighta.png" width="100%">
                                    </figure>
                                    <h3>分析優秀的 iOS App</h3>{{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fh5co-services-section --}}
                <div id="fh5co-content-section">
                    <div class="container">
                        <div class="row text-center justify-content-center">
                            <div class="col-12">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-browser"></i></span> --}}
                                    <h3>動手實踐</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-mobile"></i></span> --}}
                                    <figure>
                                        <img src="img/wwdc17.png" width="100%">
                                    </figure>
                                    <h3>編寫一段 iOS 代碼</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-tools"></i></span> --}}
                                    <figure>
                                        <img src="img/bestiosapp.png" width="100%">
                                    </figure>
                                    <h3>iOS 開發主題競賽</h3> {{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="services animate-box">
                                    {{-- <span><i class="icon-video"></i></span> --}}
                                    <figure>
                                        <img src="img/straighta.png" width="100%">
                                    </figure>
                                    <h3>完成一個 iOS App</h3>{{--
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fh5co-services-section --}}
                <div id="fh5co-content-section" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h2>創造目標和挑戰</h2>
                                <h1>創造，人生第一個iOS App</h1>
                                <p>Create your First iOS App</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="fh5co-testimonial text-center animate-box">
                                    <figure>
                                        <img src="img/SteveJobs.png" alt="user">
                                    </figure>
                                    <blockquote>
                                        <p>「Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while. 創意不外乎就是在不同事件之間搭建橋樑。如果你問那些有創意的人他們如何做事，他們或許會感到些許罪惡，因為他們沒有真的在『創造』一個東西，他們只是善於觀察不同事物，而想到每件事之間的可能性。」</p>
                                    </blockquote>
                                    <span>Steve Jobs, Apple Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fh5co-content-section -->{{--
                <div id="fh5co-blog-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h3>Recent From Blog</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
                                    <div class="image-popup" href="#">
                                        <div class="prod-title">
                                            <h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                                            <span class="posted_by">Posted by: Admin</span>
                                            <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog-2.jpg" alt=""></a>
                                    <div class="image-popup" href="#">
                                        <div class="prod-title">
                                            <h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                                            <span class="posted_by">Posted by: Admin</span>
                                            <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/blog-3.jpg" alt=""></a>
                                    <div class="image-popup" href="#">
                                        <div class="prod-title">
                                            <h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                                            <span class="posted_by">Posted by: Admin</span>
                                            <span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fh5co-blog-section -->--}}
                <footer>
                    <div id="footer">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <p class="fh5co-social-icons">
                                        <a href="#"><i class="icon-twitter2"></i></a>
                                        <a href="#"><i class="icon-facebook2"></i></a>
                                        <a href="#"><i class="icon-instagram"></i></a>
                                        <a href="#"><i class="icon-dribbble2"></i></a>
                                        <a href="#"><i class="icon-youtube"></i></a>
                                    </p>
                                    <p>Copyright © 逢甲大學Feng Chia University All Rights Reserved.
                                        <br>Made with <i class="icon-heart3"></i> by iOS Club AhKui</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="{{asset('js/iosclub.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    
    <script src="js/jquery.stellar.min.js"></script> 
    <script>
    CLUB.run()
    $.stellar();
    </script>
</body>

</html>