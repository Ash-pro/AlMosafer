<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset("landing_page/css/bootstrap.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("landing_page/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("landing_page/css/owl.theme.default.css")}}">
    <link rel="stylesheet" href="{{asset("landing_page/lightcase-2.5.0/src/css/lightcase.css")}}">
    <link rel="stylesheet" href="{{asset("landing_page/css/style.css")}}" type="text/css">
    <title>Almosafer</title>
    <link rel="shortcut icon" href="{{asset('landing_page/image/website_logo.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dashboard_files/plugin/noty/noty.css')}}">
    <script src="{{asset('dashboard_files/plugin/noty/noty.min.js')}}"></script>d
    <style>
        .images {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            /*width: 90px;*/
            /*height: 120px;*/
            max-width:30%;
           justify-content: center;
        }

        .images:hover {
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
        }

    </style>
</head>

<body>
<div class="container-fluid">
    <!-------------------------------------Start NavbAR----------------------------------------->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar top-nav-collapse navbar-light">
        <div class="container-fluid">
            <!--LOGO-->
            <a class="navbar-brand logo" href="#home">
                <img src="{{asset('landing_page/image/website_logo.png')}}">
            </a>
            <!--Mobile button-->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--nav-->
            <div class="navbar-collapse collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-item nav-link  active" href="#home">
                        <i class="fas fa-home "></i>
                        الرئيسية
                    </a>
                    <a class="nav-item nav-link" href="#services">
                        <i class="fas fa-user-clock"></i>
                        الخدمات
                    </a>
                    <a class="nav-item nav-link" href="#advertising">
                        <i class="far fa-paper-plane"></i>
                        الإعلانات
                    </a>
                    <a class="nav-item nav-link" href="#about-us">
                        <i class="far fa-question-circle"></i>
                        من نحن
                    </a>
                    <a class="nav-item nav-link " href="#contact_us">
                        <i class="fas fa-phone"></i>
                        تواصل معنا
                    </a>


                </div>
                <a class="nav-link watsapp" href="#">
                    <!--i class="fab fa-whatsapp"></i-->
                    <span class="_3cZ5X"><svg xmlns="http://www.w3.org/2000/svg" width="39" height="39"
                                              viewBox="0 0 39 39">
                <path fill="#00E676"
                      d="M10.7 32.8l.6.3c2.5 1.5 5.3 2.2 8.1 2.2 8.8 0 16-7.2 16-16 0-4.2-1.7-8.3-4.7-11.3s-7-4.7-11.3-4.7c-8.8 0-16 7.2-15.9 16.1 0 3 .9 5.9 2.4 8.4l.4.6-1.6 5.9 6-1.5z">
                </path>
                <path fill="#FFF"
                      d="M32.4 6.4C29 2.9 24.3 1 19.5 1 9.3 1 1.1 9.3 1.2 19.4c0 3.2.9 6.3 2.4 9.1L1 38l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2 10.1 0 18.3-8.3 18.3-18.4 0-4.9-1.9-9.5-5.3-12.9zM19.5 34.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L6.9 28l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9s16.5-2.3 20.9 4.9 2.3 16.5-4.9 20.9c-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1l-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2 0 0-.1.1-1.5 1.7-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6-.7.9-1.1 2-1.1 3.1 0 .8.2 1.6.5 2.3l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5s.4-.4.5-.6c.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z">
                </path>
              </svg>
            </span>

                </a>
            </div>
        </div>
    </nav>

    <!--------------------------------------End Navbar------------------------------------------------>
    <!--------------------------------------Hero section Start---------------------------------------->
    <div class="section hero-section" id="home">
        <div class="hero-image">
            <div class="overlay"></div>
            <!--Contact Form-->
            <div class="container">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            @include('dashboard.partials._session')

                            <form class="was-validated"  action="{{route('store')}}" method="post">
                                @csrf
                                @method('post')
                                <div class="col-12 form-header ">
                                    <p>المسافر للاستشارات العقارية و تأجير السيارات</p>
                                </div>
                                <!--Nama-->
                                <div class="form-group">
                                    <label for="uname">الاسم و الشهرة:</label>
                                    <input type="text" class="form-control" id="uname" placeholder="" name="name">

                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <!--Email-->
                                <div class="form-group">
                                    <label for="uname">البريد الالكتروني:</label>
                                    <input type="email" class="form-control" id="mail" placeholder="" name="email"
                                           required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">*</div>
                                </div>
                                <!--phone-->
                                <div class="form-group">
                                    <label for="uname">الرقم:</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="" name="number"
                                           required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">*</div>
                                </div>
                                <!---------------------------------------------phone--------------------------------->

                                <!--Submit-->
                                <button type="submit" class="btn " style="opacity: 1;">إرسال</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--------------------------------------Hero section End----------------------------------------->
    <!--------------------------------------Services Start-------------------------------------------->
    <div class="section services" id="services">
        <!-----------------header--------------------------->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content">
                        <h2 class="section-header">خــدماتنـــــا</h2>
                        <p>{{isset($general_Des_service->description)?$general_Des_service->description:''}}</p>
                    </div>
                </div>
            </div>
        </div>
        <!------------------image-------------------------->
        <div class="row">
            <div class="services-bg"></div>
            <!--img src="image/Services-bg.jpg" class=""-->
        </div>
        <div class="main-services">
            <div class="container ">
                <div class="row">
                    <div class="owl-carousel owl-services">

                        @foreach($item_service as $item_serviceOne)
                            <div class="services-item">
                                <span class="services-icon">
                                  <i ><img class="images" src="{{asset('storage/'.$item_serviceOne->icon)}}" alt=""></i>
                                </span>
                                <h3>{{isset($item_serviceOne->name)?$item_serviceOne->name:''}}</h3>
                                <p>
                                    {{isset($item_serviceOne->description)?$item_serviceOne->description:''}}
                                </p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------Services End---------------------------------------------->
    <!---------------------------------------advertising Start---------------------------------------->
    <div class="section advertising" id="advertising">
        <div class="container">
            <!--section header-->
            <div class="row">
                <div class="col-12">
                    <div class="section-content">
                        <h2 class="section-header">الإعــلانـات</h2>
{{--                        <p>{{$AdvertisementItems->description}}ا</p>--}}
                    </div>
                </div>
            </div>
        </div>
        <!------------------OWL START------------------------------------->
        <!--Start owl-->
        <div class="categoriesCarosel myOwl">
            <div class="container">
                <div class=" row justify-content-center  align-middle">
                    <div class="col-lg-10 col-md-12 col-xs-12 text-center">
                        <div class="categContainer">
                            <div class="owl-carousel categOwl">
                                @foreach( $AdvertisementItems as $AdvertisementItem )
                                    <div class="owl-content">
                                        <div class="owl-link">
                                            <a href="#">
                                                <div class="categBoximage">
                                                    <div class="imageItem">
                                                        <div class="image">
                                                            <a href="{{asset('storage/'.$AdvertisementItem->photo)}}"
                                                               data-rel="lightcase">
                                                                <img src="{{asset('storage/'.$AdvertisementItem->photo)}}"
                                                                     alt="adv1">
                                                            </a>
                                                        </div>
                                                        <div class="adv-content">
                                                            <h4 class="adv-titel">{{$AdvertisementItem->name}}</h4>
                                                            <p class="adv-info">{{$AdvertisementItem->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--End owl-->
        <!-------------------OWL END-------------------------------------->
    </div>
    <!---------------------------------------advertising End----------------------------------------->
    <!---------------------------------------Watsapp bar start--------------------------------------->
    <div class="section watsapp-bar" id="watsapp-bar">
        <div class="container">
            <div class="watsapp-content align-items-center">
                <div class="row">
                    <div class="col-sm-12 col-lg-8">
                        <div class="wats-icon">
                            <img src="{{asset("landing_page/image/logo-whatsapp.svg")}}" alt="wats icon">
                        </div>
                        <div class="wats-txt">
                            <h3>احصل الآن على استشارة مجانية</h3>
                            <p>تواصل معنا عبر الواتس اب مباشرة واحصل على المزيد من المعلومات.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-sm-2  test"></div>
                    <div class="col-sm-9 col-lg-4">
                        <a class="wats-num" href="#">
                            <span class="number_whats">905#########</span>
                            <span class="whats_icon"><i class="fab fa-whatsapp"></i></span>
                        </a>
                    </div>
                    <div class="col-sm-1 test"></div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------------Watsapp bar End---------------------------------------->
    <!--------------------------------------About US Start------------------------------------------->
    <div class="section abou-us" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-5">
                    <div class="section-content">
                        <h2 class="section-header"> مــن نحــن</h2>
                        <p>{{isset($WhoAreWes->general_description)?$WhoAreWes->general_description:''}}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-7">
                    <div class="vedio aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                        <a href="{{isset($WhoAreWes->youtube_link)?$WhoAreWes->youtube_link:''}}" data-fancybox="" class="vedio_main">
                            <img
                                src="https://www.mavirealty.com/landing/wp-content/themes/mavirealty/images/vedio_hm.jpg"
                                alt="">
                            <span class="vd_icon"><i class="fas fa-play"></i></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------About US END---------------------------------------------->
    <!---------------------------------------Our team start----------------------------------------->
    <div class="section our-team" id="our-team">
        <div class="main-ourTeam">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="team-info">
                            <!-----ICON----->
                            <span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1">
                  <i class="fas fa-rocket"></i>
                  <h4>فريق عمل المسافر</h4>
                  <p>{{isset($WhoAreWes->team_description)?$WhoAreWes->team_description:''}}</p>
                </span>
                        </div>
                    </div>
                    <!--Team member 1-->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="member1">
                            <img src="{{asset('storage/'.$WhoAreWes->photo1)}}" alt="member 1">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="member2">
                            <img src="{{asset('storage/'.$WhoAreWes->photo2)}}" alt="member 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------------Our team END------------------------------------------->
    <!---------------------------------------Countact US Start-------------------------------------->
    <div class="contact_us" id="contact_us">
        <div class="contact heading">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="section-content">
                            <h2 class="section-header"> تــواصل معنـــا</h2>
                            <p>{{isset($contact_us->contact_description)?$contact_us->contact_description:''}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="contact-information">
            <div class="container">
                <div class="contact-info">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                <span class="icon">
                  <i class="fas fa-map-marker-alt"></i>
                </span>
                            <h4>العنـوان</h4>
                            <a href="#">
                                <p>{{isset($contact_us->address)?$contact_us->address:''}}</p>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                <span class="icon">
                  <i class="fas fa-envelope"></i>
                </span>
                            <h4>البـريد الالكتروني</h4>
                            <p>
                                <a href="#" class="email">
                                    {{isset($contact_us->mail1)?$contact_us->mail1:''}}
                                </a>
                            </p>
                            <p>
                                <a href="#" class="email">
                                    {{isset($contact_us->mail2)?$contact_us->mail2:''}}
                                </a>
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                <span class="icon">
                  <i class="fas fa-phone"></i>
                </span>
                            <h4>اتصــل بنـا</h4>
                            <p> {{isset($contact_us->callUs1)?$contact_us->callUs1:''}}</p>
                            <p>{{isset($contact_us->callUs2)?$contact_us->callUs2:''}}</p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                <span class="icon">
                  <i class="fas fa-users"></i>
                </span>
                            <h4> التواصل الاجتماعي</h4>
                            <p>
                                <a target="_blank" href="{{ setting('facebook_link') }}">Facebook</a>
                            </p>
                            <p>
                                <a target="_blank" href="https://api.whatsapp.com/send?phone={{ setting('whatsUp_link') }}">Watsapp</a>
                            </p>
                            <p>
                                <a target="_blank" href="{{ setting('instagram_link') }}">Instegram</a>
                            </p>
                            <p>
                                <a target="_blank" href="{{ setting('snapChat_link') }}">Snap Chat</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <div id="map"></div>
        </div>
    </div>
    <!---------------------------------------Countact US END---------------------------------------->
    <!-----------------------------------------Footer Start------------------------------------------->
    <div class="footer">
        <div class="container">
            <ul class="social-media">
                <li class="social-item">
                    <a href="https://api.whatsapp.com/send?phone={{ setting('whatsUp_link') }}" id="watsapp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
                <li class="social-item">
                    <a target="_blank"href="{{ setting('instagram_link') }}" id="instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="social-item">
                    <a target="_blank" href="{{ setting('facebook_link') }}" id="facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="social-item">
                    <a target="_blank" href="{{ setting('snapChat_link') }}" id="snap">
                        <i class="fab fa-snapchat-ghost"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <!--Call Java Script Files-->
    <script src="{{asset("landing_page/js/jquery3.3.1.js")}}"></script>
    <script src="{{asset("landing_page/js/popper.min.js")}}"></script>
    <script src="{{asset("landing_page/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("landing_page/js/owl.carousel.min.js")}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" defer>
    </script>
    <!--MAP START-->
    <script>
        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8,
            });
        }
    </script>
    <!--MAP END-->
    <script src="{{asset("landing_page/lightcase-2.5.0/src/js/lightcase.js")}}"></script>

    <!--LIGHTCASE START-->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $("a[data-rel^=lightcase]").lightcase();
        });
    </script>
    {{--    <!--LIGHTCASE END-->--}}

        <script src="{{asset("landing_page/js/main.js")}}"></script>
</div>
</body>

</html>
