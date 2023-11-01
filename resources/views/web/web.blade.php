
@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->

    @include('web.layout.loading')

    <!-- Header -->

    @include('web.layout.navigation')

    <!-- Layout -->

    <div class="layout">

        <!-- Home -->

        <main class="main">

            <!-- Start revolution slider -->

            <div class="rev_slider_wrapper">
                <div id="rev_slider" class="rev_slider fullscreenbanner">
                    <ul>

                        <!-- Slide 1 -->

                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                            data-fsmasterspeed="1000">

                            <!-- Main image-->

                            <img src="{{ asset('img/slider/slider1.png') }}" alt="carousel1" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg">

                            <!-- Layer 1 -->

                            <div class="slide-title tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0','0,'0','0]"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-25','-20', '-25']"
                                data-fontsize="['40','40', '55']"
                                data-lineheight="['70','70', '75']"
                                data-width="['1100','700','550']"
                                data-height="none"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05">TRANSFORMING SPACES ELEVATING EXPERIENCES
                            </div>

                            <!-- Layer 2 -->

                            <div class="slide-subtitle tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['20', '150', '250']"
                                data-fontsize="['18', '18', '30']"
                                data-width="['1100','700','550']"
                                data-lineheight="['10','30','50']"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                                data-transform_out="opacity:0;s:1000;s:1000;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none">
                                We specialize in delivering <br>cutting-edge custom
                                audio and <br>video solutions
                            </div>

                            <!-- Layer 3 -->

                            <div class="tp-caption" data-x="['middle','middle','middle','middle']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['195', '240','390']"
                                data-width="none" data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none" data-responsive_offset="on"><a href="#about"
                                    class="btn js-target-scroll">Look more <i class="icon-next"></i></a>
                            </div>
                        </li>

                        <!-- Slide 2 -->

                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                            data-easeout="Power3.easeInOut" data-masterspeed="1000">

                            <!-- Main image -->

                            <img src="{{ asset('img/slider/slider2.png') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg">

                            <!-- Layer 1 -->

                            <div class="slide-title tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0','0,'0','0]"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-25','-20', '-25']"
                                data-fontsize="['40','40', '55']"
                                data-lineheight="['70','70', '75']"
                                data-width="['1100','700','500']" data-height="none" data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05">SMART HOME SYSTEMS, LIGHT &
                                CLIMATE CONTROL
                            </div>


                            <!-- Layer 2 -->

                            <div class="slide-subtitle tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['20','150','290']"
                                data-fontsize="['18', '18', '30']"
                                data-width="['1100','700','550']"
                                data-lineheight="['10', '30', '50']"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                                data-transform_out="opacity:0;s:1000;s:1000;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none">
                                Transform your home into a smart <br>and comfortable
                                space with ASG. <br>Get started today!
                            </div>

                            <!-- Layer 3 -->

                            <div class="tp-caption tp-resizeme" data-x="['middle','middle','middle','middle']"
                                data-hoffset="['0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['195', '240','430']"
                                data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a
                                    href="#residential" class="btn js-target-scroll">Look more
                                    <i class="icon-next"></i></a>
                            </div>
                        </li>

                        <!-- Slide 3 -->

                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                            data-easeout="Power3.easeInOut" data-masterspeed="1000">

                            <!-- Main image-->

                            <img src="{{ asset('img/slider/slider3.png')}}" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                            <!-- Layer 1 -->

                            <div class="slide-title tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0','0,'0','0]"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-25','-10', '-25']"
                                data-fontsize="['40','40', '55']"
                                data-lineheight="['70','70', '75']"
                                data-width="['1000','700','550']" data-height="none" data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05">
                                CORPORATE AUDIO VIDEO SYSTEMS & AUTOMATION
                            </div>


                            <!-- Layer 2 -->

                            <div class="slide-subtitle tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['20','140','290']"
                                data-fontsize="['18', '18', '30']"
                                data-width="['1100','700','550']"
                                data-lineheight="['10','30','50']"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                                data-transform_out="opacity:0;s:1000;s:1000;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none">
                                Elevate your company with our<br> audiovisual and corporate <br>automation with us. Quote
                                now!
                            </div>

                            <!-- Layer 3 -->

                            <div class="tp-caption tp-resizeme" data-x="['middle','middle','middle','middle']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['195','250','430']"
                                data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a
                                    href="#comercial" class="btn js-target-scroll">Look more
                                    <i class="icon-next"></i></a>
                            </div>
                        </li>

                        <!-- Slide 4s -->

                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                            data-easeout="Power3.easeInOut" data-masterspeed="1000">

                            <!-- Main image-->

                            <img src="{{ asset('img/slider/slider4.png') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg">

                            <!-- Layer 1 -->

                            <div class="slide-title tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0','0,'0','0]"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-25','-20', '-25']"
                                data-fontsize="['40','40', '55']"
                                data-lineheight="['70','70', '75']"
                                data-width="['1000','700','550']" data-height="none" data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05">MARINE AUDIO VIDEO AUTOMATION
                            </div>


                            <!-- Layer 2 -->

                            <div class="slide-subtitle tp-caption tp-resizeme"
                                data-x="['middle','middle','middle','middle']" data-hoffset="['0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['20','140','290']"
                                data-fontsize="['18', '18', '30']"
                                data-width="['1100','700','550']"
                                data-lineheight="['10','30','50']"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                                data-transform_out="opacity:0;s:1000;s:1000;"
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none">
                                Modernize your boat with <br>the best marine automation. <br>
                                Discover our solutions!
                            </div>

                            <!-- Layer 3 -->

                            <div class="tp-caption tp-resizeme" data-x="['middle','middle','middle','middle']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['195','250','370']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                                data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#marine"
                                    class="btn js-target-scroll">Look more
                                    <i class="icon-next"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>

        <div class="content">

            <!-- About  -->

            <section id="about" class="about section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">TAKE CONTROL WITH<span class="text-primary"> ADVANCE SYSTEMS
                                GROUP</span></h2>
                        <strong class="fade-title-left">About</strong>
                    </header>
                    <div class="section-content">
                        <div class="row-base row">
                            <div class="col-base col-sm-6 col-md-4">
                                <h3 class="col-about-title">Exemplary Professionalism and Unwavering Reliability in
                                    Every Project<span class="text-primary">.</span></h3>
                                <div class="col-about-info">
                                    <p>At our core, we embody the values of professionalism and reliability in every
                                        endeavor. Our
                                        commitment to serving each customer with unwavering respect and a steadfast
                                        dedication to delivering
                                        top-tier quality remains consistent, regardless of the project's scale. Be it a
                                        small task or a
                                        monumental undertaking, rest assured that our meticulous attention to detail and
                                        expert
                                        craftsmanship are your guarantee of excellence.</p>
                                </div>
                            </div>
                            <div class="col-base col-about-spec col-sm-6 col-md-4">
                                <h3 class="col-about-title">Our<br> specialization<span class="text-primary">:</span>
                                </h3>
                                <div class="service-item">
                                    <img alt="" width="58" src="img/iconos/home.png">
                                    <h4>Residential</h4>
                                </div>
                                <div class="service-item">
                                    <img alt="" width="58" src="img/iconos/building.png">
                                    <h4>Comercial</h4>
                                </div>
                                <div class="service-item">
                                    <img alt="" width="58" src="img/iconos/bote.png">
                                    <h4>Marine</h4>
                                </div>
                            </div>
                            <div class="clearfix visible-sm"></div>
                            <div class="col-base col-about-img col-sm-6 col-md-4">
                                <img alt="" class="img-responsive" src="img/smarthome-phone.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experience -->

            <section class="experience section">
                <div class="container">
                    <div class="text-parallax" data-stellar-background-ratio="0.85"
                        style="background-image: url('img/bg/text-1.jpg');">
                        <div class="text-parallax-content">23</div>
                    </div>
                    <h4 class="experience-info wow fadeInRight"><span class="text-primary">We have over 23 years of
                            experience on
                            telecommunications, </span><br>hospitality industry networking, home automation, structured
                        cabling.</h4>
                </div>
            </section>

            <!-- Residential Detail -->
            <section class="project-details" id="residential">
                <div class="container">
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info wow fadeInLeft">
                                <h3 class="project-details-title">
                                    Residential
                                </h3>
                                <p class="project-details-descr">Experience the ultimate convenience and energy
                                    efficiency with our
                                    cutting-edge lights and sound solutions for homes, allowing you to effortlessly
                                    control and customize
                                    your lighting and speaker preferences at the touch of a button.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/residential-detail.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="projects section">
                <div class="section-content">
                    <div class="projects-carousel js-projects-carousel">
                        <div class="project project-light">
                            <a href="residential-home-entertainment.html" title="Home Entertainment">
                                <figure>
                                    <img alt="" src="img/home-enter.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Home <br>
                                            Entertainment
                                        </h3>
                                        <h4 class="project-category">
                                            Residential
                                        </h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project project-light">
                            <a href="residential-smart-home-automation.html" title="project 2">
                                <figure>
                                    <img alt="" src="img/smart-home-auto.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Smart Home <br>
                                            Automation
                                        </h3>
                                        <h4 class="project-category">
                                            Residential
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="residential-lighting-energy-control.html" title="project 3">
                                <figure>
                                    <img alt="" src="img/lithing-energy.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Lighting <br>
                                            Energy Control
                                        </h3>
                                        <h4 class="project-category">
                                            Residential
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="residential-security-installation.html" title="project 3">
                                <figure>
                                    <img alt="" src="img/security-home.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Security <br>
                                            and Installation
                                        </h3>
                                        <h4 class="project-category">
                                            Residential
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Comercial Detail -->
            <section class="project-details" id="comercial">
                <div class="container">
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info wow fadeInLeft">
                                <h3 class="project-details-title">
                                    Comercial
                                </h3>
                                <p class="project-details-descr">Transform your corporate environment into a
                                    cutting-edge,
                                    multimedia-rich space with our tailored audio and video solutions. From boardrooms
                                    to auditoriums, our
                                    expertise in customizing professional-grade AV systems ensures seamless
                                    collaboration, immersive
                                    presentations, and unparalleled communication experiences.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/comercial.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="projects section">
                <div class="section-content">
                    <div class="projects-carousel js-projects-carousel">
                        <div class="project project-light">
                            <a href="comercial-integrated-security.html" title="Home Entertainment">
                                <figure>
                                    <img alt="" src="img/integrated-security.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Integrated <br>
                                            Security
                                        </h3>
                                        <h4 class="project-category">
                                            Comercial
                                        </h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project project-light">
                            <a href="comercial-integrated-security.html" title="Home Entertainment">
                                <figure>
                                    <img alt="" src="img/av-system.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Professional <br>
                                            AV System
                                        </h3>
                                        <h4 class="project-category">
                                            Comercial
                                        </h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="residential-lighting-energy-control.html" title="project 3">
                                <figure>
                                    <img alt="" src="img/IT-Structured-Wiring.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            IT & <br>
                                            Structured Wiring
                                        </h3>
                                        <h4 class="project-category">
                                            Comercial
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="comercial-integrated-security.html" title="Home Entertainment">
                                <figure>
                                    <img alt="" src="img/integrated-security.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Integrated <br>
                                            Security
                                        </h3>
                                        <h4 class="project-category">
                                            Comercial
                                        </h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Marine Detail -->
            <section class="project-details" id="marine">
                <div class="container">
                    <div class="project-details-item">
                        <div class="row">
                            <div class="project-details-info wow fadeInLeft">
                                <h3 class="project-details-title">
                                    Marine
                                </h3>
                                <p class="project-details-descr">Embark on a journey of luxury and entertainment with
                                    our bespoke audio and video solutions tailored specifically for marine ships like
                                    yachts. Elevate your onboard experience with cutting-edge technology, immersive
                                    sound systems, and stunning visual displays.</p>
                            </div>
                            <div class="project-details-img col-md-8 col-md-offset-4">
                                <img alt="" class="img-responsive" src="img/yate.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="projects section">
                <div class="section-content">
                    <div class="projects-carousel js-projects-carousel">
                        <div class="project project-light">
                            <a href="marine-professional-starlink-installation.html" title="Home Entertainment">
                                <figure>
                                    <img alt="" src="img/starklink.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Starlink <br>
                                            Installations
                                        </h3>
                                        <h4 class="project-category">
                                            Marine
                                        </h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project project-light">
                            <a href="marine-kvh-partners.html" title="project 2">
                                <figure>
                                    <img alt="" src="img/kvh.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            KVH <br>
                                            Partners
                                        </h3>
                                        <h4 class="project-category">
                                            Marine
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="marine-audio-video-systems.html" title="project 3">
                                <figure>
                                    <img alt="" src="img/audio-system.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Audio Video <br>
                                            Systems
                                        </h3>
                                        <h4 class="project-category">
                                            Marine
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="marine-video-surveillance.html" title="project 3">
                                <figure>
                                    <img alt="" src="img/integrated-security.jpg">
                                    <figcaption>
                                        <h3 class="project-title">
                                            Video <br>
                                            Surveillance
                                        </h3>
                                        <h4 class="project-category">
                                            Marine
                                        </h4>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </section>



            <!-- Clients  -->

            <section class="clients section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">Companies we <span class="text-primary">Worked With</span></h2>
                        <strong class="fade-title-left">Customers</strong>
                    </header>
                    <div class="section-content">
                        <ul class="clients-list">
                            <li class="client">
                                <img alt="" src="{{ asset('img/clients/ferretti.png') }}">
                            </li>
                            <li class="client">
                                <img alt="" src="{{ asset('img/clients/bike-tech.png') }}">
                            </li>
                            <li class="client">
                                <img alt="" src="{{ asset('img/clients/country-marriot.png') }}">
                            </li>
                            <li class="client">
                                <img alt="" src="{{ asset('img/clients/marquis.png') }}">
                            </li>
                            <li class="client">
                                <img alt="" src="{{ asset('img/clients/marriot.png') }}">
                            </li>
                            <li class="client">
                                <img alt="" src="{{ asset('img/clients/imeca.png') }}">
                            </li>
                            <li class="client">
                                <img alt="" src="{{ asset('img/clients/mdm.png') }}">
                            </li>
                            <li class="client">
                                <img alt="" src="{{ asset('img/clients/captiva.png') }}">
                            </li>
                        </ul>
                    </div>
                    <div class="section-content">
                        <a href="#" class="btn btn-shadow-2">Work together <i class="icon-next"></i></a>
                    </div>
                </div>
            </section>

            <!-- Contacts -->

            <section class="contacts section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
                        <strong class="fade-title-right">Contacts</strong>
                    </header>
                    <div class="section-content">
                        <div class="row-base row">
                            <div class="col-address col-base col-md-4">
                                South Florida Leaders <br>
                                in Cutting-Edge Home <br>
                                Automation Solutions
                            </div>
                            <div class="col-base  col-md-8">
                                <form class="js-ajax-form">
                                    <div class="row-field row">
                                        <div class="col-field col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" required
                                                    placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="col-field col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message"
                                                    placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-message col-field col-sm-12">
                                            <div class="form-group">
                                                <div class="success-message"><i class="fa fa-check text-primary"></i>
                                                    Thank you!. Your message
                                                    is successfully sent...</div>
                                                <div class="error-message">We're sorry, but something went wrong</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-submit text-right"><button type="submit"
                                            class="btn btn-shadow-2 wow swing">Send <i class="icon-next"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->

            @include('web.layout.footer')

            <!-- Lines -->

            <div class="page-lines">
                <div class="container">
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

