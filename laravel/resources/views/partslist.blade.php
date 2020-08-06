<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ url('res/css/style.css') }}">

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ url('res/css/page/partslist.css') }}">
    <link rel="stylesheet" href="{{ url('src/node_modules/font-awesome/css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">

    <!-- Splide slider -->
    <link rel="stylesheet"
        href="{{ url('src/node_modules/@splidejs/splide/dist/css/themes/splide-sea-green.min.css')}}">

    <!-- script -->
    <script src="{{ url('/res/js/vendor.bundle.js') }}"></script>
    <script src="{{ url('/src/node_modules/@splidejs/splide/dist/js/splide.js') }}"></script>
    <script src="{{ url('/res/js/app.bundle.js') }}"></script>

</head>

<body class="page-partslist">
    <!-- Main Header -->
    <div class="header-content">
        <!-- Header -->
        <header class="l-header p-header">
            <div class="l-header__inner l-header__inner--flex p-header__main">
                <div class="l-header__left p-header__branding">
                    <h1>
                        <img class="logo" src="{{ url('/res/img/logo_hipe.png') }}">
                    </h1>
                </div>
                <div class="l-header__right p-header__navigation">
                    <div class="l-navigation u-d-none-sp">
                        <ul class="p-navigation">
                            <li class="p-navigation__link">
                                <a href="#" class="items">Home</a>
                            </li>
                            <li class="p-navigation__link">
                                <a href="#" class="items">About</a>
                            </li>
                            <li class="p-navigation__link">
                                <a href="#" class="items">Service</a>
                            </li>
                            <li class="p-navigation__link">
                                <a href="#" class="btn c-button c-button--main c-button--l">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->
        <!-- Introduction -->
        <section class="l-wrap p-introduction">
            <div class="l-container is-column2 p-introduction__inner">
                <div class="l-container__left">
                    <div class="p-introduction__intro">
                        <h1 class="headline">
                            <span class="headline__text">Your Offshore</span>
                            <span class="headline__text">Your Offshore</span>
                            <span class="headline__text">experts.</span>
                        </h1>
                        <p class="description">
                            Helping your business grow by creating a well-structured and awesome website that suits your
                            business and customer needs.
                        </p>
                        <div class="btn-wrapper">
                            <a href="#" class="btn c-button c-button--main c-button--l">{{ "let's talk" }}</a>
                        </div>
                    </div>
                </div>
                <div class="l-container__right">
                    <div class=" p-introduction__showcase">
                        <img class="pic" src="{{ url('/res/img/img_introduction.png') }}">
                    </div>
                </div>
            </div>
            <div class="l-container p-carousel">
                <ul class="l-content p-carousel__slider">
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_angular.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_bootstrap.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_codeigniter.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_css3.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_gulp.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_html5.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_java.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_jquery.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_js.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_laravel.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_nodejs.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_php.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_react.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_wordpress.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_XD.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_AI.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_PS.png') }}">
                    </li>
                    <!--duplicate-->
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_angular.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_bootstrap.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_codeigniter.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_css3.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_gulp.png') }}">
                    </li>
                    <li class="p-carousel__frames">
                        <img src="{{ url('/res/img/img_slider_html5.png') }}">
                    </li>
                    <!--duplicate-->
                </ul>
            </div>
        </section>
        <!-- End of Introduction -->
    </div>
    <!-- End of Main Header -->

    <!-- Introduction -->
    <section class="about">
        <div class="l-wrap">
            <div class="l-container about__inner">
                <div class="l-content about__info">
                    <h2 class="about__title u-mb-30"> ABOUT US</h2>
                    <div class="l-container">
                        <p class="about__description">
                            Founded in November 2019, HiPE Inc. is an IT Company that offers lab-type offshore software
                            development to our clients. Our office building is located in Cebu Business Park, a walking
                            distance to one of the most popular malls in Cebu City, Ayala Center Cebu. This place is one
                            of the most comfortable, secure, and safest locations in the Island of Cebu, Philippines.
                            <br><br>
                            We are a team of developers and designers that craft quality and awesome IT-related services
                            across various platforms to our clients’ budget with our Filipino engineer’s various skill
                            set – web and mobile development, UI/UX design, graphic design, image and video editing,
                            website maintenance.
                        </p>
                    </div>
                </div>
                <div class="l-container about__frame">
                    <img class="about__pic" src="{{ url('/res/img/img_hipe_members.jpg') }}">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Introduction -->

    <!-- testimonial -->
    <section class="testimonial">
        <div class="l-wrap testimonial__main">
            <div class="l-container testimonial__inner">
                <div class="l-content">
                    <div class="testimonial__top">
                        <h2 class="testimonial__icon u-mb-20"><i class="fa fa-quote-right"></i></h2>
                        <p class="testimonial__speech">
                            We are currently working with a team of six engineers, and before we started using the
                            service,
                            we were concerned about the management of the work from a long distance and whether or not
                            we
                            could communicate in English with each other in the company. However, since we started, we
                            have
                            been able to make improvements every day, and in particular, we have achieved our initial
                            goals
                            for the creation of property floor plans, which we have been asked to perform, and the work
                            is
                            still going well. The minimum number of engineers assigned to a project is five, but if you
                            want
                            to add a member to the team, you can do so one at a time. increase the number of points, and
                            to
                            be able to support English when communicating with local engineers I especially liked the
                            environment and the fact that we could interview and then decide on members before
                            officially
                            assigning them. Yes. I {{ "can't" }} wait to go back to Cebu again and deepen our
                            communication
                            while
                            having a nice dinner together.
                        </p>
                    </div>
                    <div class="testimonial__bottom">
                        <div class="testimonial__frame">
                            <img src="{{ url('/res/img/img_testimonial_client.png') }}" class="testimonial__person">
                            <p class="testimonial__name u-mt-20">Masaya Nakamura</p>
                            <p class="testimonial__job">Senior Managing Director, Bukken-Oh Co., Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of testimonial -->

    <!-- Service -->
    <section class="service u-mt-120">
        <div class="service__overlay">
        </div>
        <div class="l-wrap">
            <div class="l-container service__inner">
                <div class="l-content service__top">
                    <h2 class="service__title">SERVICES</h2>
                </div>
                <div class="l-content service__bottom">
                    <div class="c-card01 c-card01--md">
                        <div class="c-card01__top">
                            <img class="c-card01__pic" src="{{ url('/res/img/img_services_1.png') }}">
                        </div>
                        <div class="c-card01__center">
                            <h2 class="c-card01__title">Web Development</h2>
                        </div>
                        <div class="c-card01__bottom">
                            <p class="c-card01__desc">Showcase a reliable and well-structured website to your users with
                                our web development services.</p>
                        </div>
                    </div>

                    <div class="c-card01 c-card01--md">
                        <div class="c-card01__top">
                            <img class="c-card01__pic" src="{{ url('/res/img/img_services_2.png') }}">
                        </div>
                        <div class="c-card01__center">
                            <h2 class="c-card01__title">Mobile Development</h2>
                        </div>
                        <div class="c-card01__bottom">
                            <p class="c-card01__desc">Let your customers interact with your business and create deals of
                                products with a responsive mobile application.</p>
                        </div>
                    </div>

                    <div class="c-card01 c-card01--md">
                        <div class="c-card01__top">
                            <img class="c-card01__pic" src="{{ url('/res/img/img_services_3.png') }}">
                        </div>
                        <div class="c-card01__center">
                            <h2 class="c-card01__title">UI/UX Design</h2>
                        </div>
                        <div class="c-card01__bottom">
                            <p class="c-card01__desc">Get an aesthetic, responsive, efficient, and accessible design for
                                your web and mobile applications.</p>
                        </div>
                    </div>

                    <div class="c-card01 c-card01--md">
                        <div class="c-card01__top">
                            <img class="c-card01__pic" src="{{ url('/res/img/img_services_4.png') }}">
                        </div>
                        <div class="c-card01__center">
                            <h2 class="c-card01__title">Graphic Design</h2>
                        </div>
                        <div class="c-card01__bottom">
                            <p class="c-card01__desc">Make a positive first impression from your customers with a good
                                business and meaningful illustrations.</p>
                        </div>
                    </div>

                    <div class="c-card01 c-card01--md">
                        <div class="c-card01__top">
                            <img class="c-card01__pic" src="{{ url('/res/img/img_services_5.png') }}">
                        </div>
                        <div class="c-card01__center">
                            <h2 class="c-card01__title">Image & Video Editing</h2>
                        </div>
                        <div class="c-card01__bottom">
                            <p class="c-card01__desc">Present a timely visuals, graphics, and photos to your social
                                media and web platforms with our image and video editing services.</p>
                        </div>
                    </div>

                    <div class="c-card01 c-card01--md">
                        <div class="c-card01__top">
                            <img class="c-card01__pic" src="{{ url('/res/img/img_services_6.png') }}">
                        </div>
                        <div class="c-card01__center">
                            <h2 class="c-card01__title">Website Maintenance</h2>
                        </div>
                        <div class="c-card01__bottom">
                            <p class="c-card01__desc">Get a safe and secure environment for your customers by regularly
                                maintaining your website.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service -->

    <!-- Technology -->
    <section class="technology">
        <div class="l-wrap">
            <div class="l-container technology__inner">
                <div class="l-content technology__top u-mb-60">
                    <h2 class="technology__title">
                        ONLY THE BEST DEVELOPMENT TECHNOLOGIES
                    </h2>
                </div>
                <div class="l-content technology__bottom">
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_wordpress.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_php.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_react.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_nodejs.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_jquery.png') }}">
                        </div>
                    </div>

                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_laravel.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_js.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_html5.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_css3.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_bootstrap.png') }}">
                        </div>
                    </div>

                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_java.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_codeigniter.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_angular.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_sass.png') }}">
                        </div>
                    </div>
                    <div class="c-card02">
                        <div class="c-card02__pic">
                            <img src="{{ url('/res/img/img_slider_gulp.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Technology -->

    <!-- Merit -->
    <section class="merit">
        <div class="merit__overlay">
        </div>
        <div class="l-wrap">
            <div class="l-container merit__inner">
                <div class="l-content merit__top">
                    <h2 class="merit__title">BENEFITS OF USING HIPE</h2>
                </div>
                <div class="l-container merit__bottom">
                    <div class="l-container__left merit__left">
                        <div class="l-content merit__content">
                            <p class="merit__text">
                                Focus more on your core business activities – sales, marketing, finance, or accounting,
                                while we focus on product development.
                            </p>
                            <div class="merit__mascot">
                                <img class="merit__pic" src="{{ url('/res/img/img_whale_full.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="l-container__right merit__right">
                        <div class="l-content merit__contentCont">
                            <div class="c-bullet">
                                <h2 class="c-bullet__title">
                                    <i class="fa fa-check-circle"></i>
                                    Cost Efficient
                                </h2>
                                <p class="c-bullet__description">
                                    You can save for up to 50% of labo usage fee because Philippine labor costs are much
                                    lower compared to some European and Asian countries.
                                </p>
                            </div>
                            <div class="c-bullet">
                                <h2 class="c-bullet__title">
                                    <i class="fa fa-check-circle"></i>
                                    No Labo Preparation Required
                                </h2>
                                <p class="c-bullet__description">
                                    Filipino engineers are already provided with a development equipment depending on
                                    their job requirements.
                                </p>
                            </div>
                            <div class="c-bullet">
                                <h2 class="c-bullet__title">
                                    <i class="fa fa-check-circle"></i>
                                    Diversified Engineers Skill Set
                                </h2>
                                <p class="c-bullet__description">
                                    You can get an increased productivity and competitive edge with our Filipino
                                    engineers who can perform multiple duties in a project.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Merit -->

    <!-- Member -->
    <section class="member">
        <div class="l-wrap">
            <div class="l-container member__inner">
                <div class="l-content member__top">
                    <h2 class="member__title">OUR MEMBERS</h2>
                </div>
                <div class="l-content member__bottom">
                    <div class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Beverly.jpg') }}"
                                        src="{{ url('/res/img/img_member_Beverly.jpg') }}" alt="Beverly">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Charisse.jpg') }}"
                                        src="{{ url('/res/img/img_member_Charisse.jpg') }}" alt="Charisse">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Chino.jpg') }}"
                                        src="{{ url('/res/img/img_member_Chino.jpg') }}" alt="Chino">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Denver.jpg') }}"
                                        src="{{ url('/res/img/img_member_Denver.jpg') }}" alt="Denver">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_EJ.jpg') }}"
                                        src="{{ url('/res/img/img_member_EJ.jpg') }}" alt="EJ">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Girly.jpg') }}"
                                        src="{{ url('/res/img/img_member_Girly.jpg') }}" alt="Girly">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Greg.jpg') }}"
                                        src="{{ url('/res/img/img_member_Greg.jpg') }}" alt="Greg">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Hubert.jpg') }}"
                                        src="{{ url('/res/img/img_member_Hubert.jpg') }}" alt="Hubert">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_James.jpg') }}"
                                        src="{{ url('/res/img/img_member_James.jpg') }}" alt="James">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Jasper.jpg') }}"
                                        src="{{ url('/res/img/img_member_Jasper.jpg') }}" alt="Jasper">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_June.jpg') }}"
                                        src="{{ url('/res/img/img_member_June.jpg') }}" alt="June">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Karl.jpg') }}"
                                        src="{{ url('/res/img/img_member_Karl.jpg') }}" alt="Karl">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Kevin.jpg') }}"
                                        src="{{ url('/res/img/img_member_Kevin.jpg') }}" alt="Kevin">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Maila.jpg') }}"
                                        src="{{ url('/res/img/img_member_Maila.jpg') }}" alt="Maila">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Mark.jpg') }}"
                                        src="{{ url('/res/img/img_member_Mark.jpg') }}" alt="Mark">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Matias.jpg') }}"
                                        src="{{ url('/res/img/img_member_Matias.jpg') }}" alt="Matias">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Mayol.jpg') }}"
                                        src="{{ url('/res/img/img_member_Mayol.jpg') }}" alt="Mayol">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Naythan.jpg') }}"
                                        src="{{ url('/res/img/img_member_Naythan.jpg') }}" alt="Naythan">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Nicole.jpg') }}"
                                        src="{{ url('/res/img/img_member_Nicole.jpg') }}" alt="Nicole">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Nina.jpg') }}"
                                        src="{{ url('/res/img/img_member_Nina.jpg') }}" alt="Nina">
                                </li>
                                <li class="splide__slide">
                                    <img data-splide-lazy="{{ url('/res/img/img_member_Russel.jpg') }}"
                                        src="{{ url('/res/img/img_member_Russel.jpg') }}" alt="Russel">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Member -->

    <!-- Owner testimonial -->
    <section class="testimonial">
        <div class="l-wrap testimonial__main">
            <div class="l-container testimonial__inner">
                <div class="l-content">
                    <div class="testimonial__top">
                        <h2 class="testimonial__icon u-mb-20"><i class="fa fa-quote-right"></i></h2>
                        <p class="testimonial__speech">
                            I first came to Cebu in the summer of 2016. Beautiful sea. Cebu's charming personality. At
                            the time, it was for tourism purposes, but I strongly felt that I would like to come again!
                            From there, I visited about four times a year and became more and more fond of Cebu. The
                            HiPE project started in 2019. From there, I met an engineer in the Philippines and saw a
                            high level of skill and sense. In the past, we often hear that there are cases where even if
                            a request is made to the Asian region over the sea because it is cheap in the form of
                            offshore, it fails due to communication difficulties, but how to approach projects and
                            development environment that is easy to communicate We are keenly aware that if we can
                            provide it, we can still contribute to product development in Japan and English-speaking
                            countries. All HiPE employees will provide and support “LABO that can contribute” to the
                            client's product development.
                        </p>
                    </div>
                    <div class="testimonial__bottom">
                        <div class="testimonial__frame">
                            <img src="{{ url('/res/img/img_testimonial_owner.png') }}" class="testimonial__person">
                            <p class="testimonial__name u-mt-20">Hideki Takakubo</p>
                            <p class="testimonial__job">CEO, HiPE Inc., Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Owner testimonial -->

    <!-- Company Affliated -->
    <section class="company">
        <div class="l-wrap">
            <div class="l-container company__inner">
                <div class="l-content company__showcase">
                    <div class="c-card03">
                        <div class="c-card03__pic">
                            <img src="{{ url('/res/img/img_company_bukkenoh.png') }}">
                        </div>
                    </div>
                    <div class="c-card03">
                        <div class="c-card03__pic">
                            <img src="{{ url('/res/img/img_company_adlive.png') }}">
                        </div>
                    </div>
                    <div class="c-card03">
                        <div class="c-card03__pic">
                            <img src="{{ url('/res/img/img_company_alis.png') }}">
                        </div>
                    </div>
                    <div class="c-card03">
                        <div class="c-card03__pic">
                            <img src="{{ url('/res/img/img_company_hnbo.png') }}">
                        </div>
                    </div>
                    <div class="c-card03">
                        <div class="c-card03__pic">
                            <img src="{{ url('/res/img/img_company_goodlife.png') }}">
                        </div>
                    </div>
                    <div class="c-card03">
                        <div class="c-card03__pic">
                            <img src="{{ url('/res/img/img_company_na.png') }}">
                        </div>
                    </div>
                    <div class="c-card03">
                        <div class="c-card03__pic">
                            <img src="{{ url('/res/img/img_company_hts.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Company Affliated -->

    <!-- FAQ -->
    <section class="faq">
        <div class="l-wrap">
            <div class="l-container faq__inner">
                <div class="l-content faq__top">
                    <h2 class="faq__title">FREQUENTLY ASKED QUESTIONS</h2>
                </div>
                <div class="l-container faq__bottom">
                    <div class="l-container__left faq__left">
                        <div class="l-content faq__content">

                            <div class="p-faq">
                                <h2 class="p-faq__question">What is your communication language?
                                    <div class="p-faq__action">
                                        +
                                    </div>
                                </h2>
                                <p class="p-faq__answer hidden">
                                    Mainly in English. Although some accents
                                    are depending on the person, Filipinos are known to speak English so well.
                                </p>
                            </div>

                            <div class="p-faq">
                                <h2 class="p-faq__question">Can I choose an engineer of my choice?
                                    <div class="p-faq__action">
                                        +
                                    </div>
                                </h2>
                                <p class="p-faq__answer hidden">
                                    Yes, you can.
                                </p>
                            </div>

                            <div class="p-faq">
                                <h2 class="p-faq__question">Is it possible to conduct a skills test before assigning an
                                    engineer?
                                    <div class="p-faq__action">
                                        +
                                    </div>
                                </h2>
                                <p class="p-faq__answer hidden">
                                    Yes, it is possible.
                                    A skills test for your selected Filipino Engineers and an education period for
                                    up to 1 month will be provided, so you can build a team with ease and
                                    confidence.
                                </p>
                            </div>

                            <div class="p-faq">
                                <h2 class="p-faq__question">How do you manage change requests during the development?
                                    <div class="p-faq__action">
                                        +
                                    </div>
                                </h2>
                                <p class="p-faq__answer hidden">
                                    We keep a record of the information/data/requests
                                    that our client sends to us (via Email or Slack, depending on your choice of
                                    communication tools) and respond to the change requests whenever possible
                                    and discuss it with the team.
                                </p>
                            </div>

                            <div class="p-faq">

                                <h2 class="p-faq__question">What is your exit policy?
                                    <div class="p-faq__action">
                                        +
                                    </div>
                                </h2>
                                <p class="p-faq__answer hidden">
                                    We understand that termination is
                                    unavoidable, with or without a cause. However, clients who wish to terminate or
                                    no longer want to renew the contract will have to inform us at least 1 month
                                    before the expiration or termination of the contract.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="l-container__right faq__right">
                        <div class="l-content faq__contentCont">
                            <div class="faq__mascot">
                                <img class="faq__pic" src="{{ url('/res/img/img_mascot_question.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq__overlay">
        </div>
    </section>
    <!-- End of FAQ -->

    <!-- Contact -->
    <section class="contact">
        <div class="l-wrap">
            <div class="l-container contact__inner">
                <div class="l-container contact__bottom">
                    <div class="l-container__left contact__left">
                        <div class="l-content contact__content">
                            <div class="contact__location">
                                <p class="highlight"> Cebu, Philippines Office </p>
                                <p>Unit 606, Keppel Center, Cebu Business Park,</p>
                                <p>Cebu City, Philippines, 6000</p>

                                <p class="email"><i class></i> Cebu, Philippines Office </p>
                            </div>
                            <div class="contact__mascot">
                                <img class="contact__pic" src="{{ url('/res/img/img_mascot_calling.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="l-container__right contact__right">
                        <div class="l-content contact__contentCont">
                            <form class="form">
                                <div class="form__top">
                                    <h2 class="form__title">How can we help you?</h2>
                                    <p class="form__description">For your inquiries, please feel free to leave us a
                                        message
                                        through our contact form below. We’ll get back to you as soon as possible.
                                    </p>
                                </div>
                                <div class="form__center">
                                    <input type="text" class="form__text" placeholder="First Name">
                                    <input type="text" class="form__text" placeholder="Last Name">
                                    <input type="text" class="form__text" placeholder="Company Name">
                                    <input type="text" class="form__text" placeholder="Email">
                                    <textarea type="text" class="form__textarea" placeholder="Message"></textarea>
                                    <input type="checkbox" class="form__checkbox"> I agree to the <a
                                        href="http://en.hipe.asia/privacy-policy/">Privacy Policy</a> and
                                    <a href="http://en.hipe.asia/privacy-policy/">Terms &amp; Condition</a></input>
                                </div>
                                <div class="form__bottom">
                                    <button class="c-button c-button--main c-button--l">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact -->
</body>

</html>
