@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

    <!-- Home -->

    <main class="main main-inner bg-about" data-stellar-background-ratio="0.6">
      <div class="container">
        <header class="main-header">
          <h1>About Arch</h1>
        </header>
      </div>

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
    </main>

    <div class="content">

      <!-- About  -->

      <section id="about" class="about">
        <div class="container">
          <div class="entry">
            <h3 class="entry-title">We turn ideas into works of art<span class="text-primary">.</span></h3>
            <p class="entry-text">We specialize in delivering exceptional custom audio and video solutions, along with advanced automation technologies, to cater to the diverse needs of our clients. With a relentless focus on innovation, craftsmanship, and client satisfaction, we strive to create immersive and transformative experiences that elevate the way people interact with their living spaces, work environments, and leisure pursuits.</p>
          </div>
        </div>
      </section>

      <!-- Services -->

      <section id="services" class="services section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Commitment <span class="text-primary">and Future</span></h2>
          </header>
          <div class="section-content">
            <div class="row-services row-base row">
              <div class="col-base col-service col-sm-6 wow fadeInUp">
                <div class="service-item">
                  <img alt="" src="img/img-icon/icon-architecture.png">
                  <h4>Mission</h4>
                  <p>Our mission is to transform spaces through innovative audio, video, and automation solutions, enhancing lifestyles, productivity, and leisure experiences.</p>
                </div>
              </div>

              <div class="clearfix visible-sm"></div>
              <div class="col-base col-service col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                  <img alt="" src="img/img-icon/icon-planing.png">
                  <h4>Vision</h4>
                  <p>Our vision is to be the leading provider of custom audio and video solutions and automation, setting new standards of excellence in the industry.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Objects -->

      <section id="objects" class="objects section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">We are <span class="text-primary">worldwide</span></h2>
          </header>
          <div class="section-content">
            <div class="objects">
              <img alt="" class="img-responsive" src="img/map.png">

              <!-- Objects -->

              <div class="object-label" style="left:12.6%; top:42%;">
                <div class="object-info">
                  <h3 class="object-title">New York</h3>
                  <div class="object-content">
                    +0 595-510-1352<br>
                    flatley.don@weissnat.me<br>
                    713 Dibbert Bridge
                  </div>
                </div>
              </div>

              <div class="object-label" style="left: 25.7%; top: 39.1%;">
                <div class="object-info in">
                  <h3 class="object-title">New York</h3>
                  <div class="object-content">
                    +0 595-510-1352<br>
                    flatley.don@weissnat.me<br>
                    713 Dibbert Bridge
                  </div>
                </div>
              </div>

              <div class="object-label" style="left: 32.2%; top: 80.6%;">
                <div class="object-info">
                  <h3 class="object-title">New York</h3>
                  <div class="object-content">
                    +0 595-510-1352<br>
                    flatley.don@weissnat.me<br>
                    713 Dibbert Bridge
                  </div>
                </div>
              </div>

              <div class="object-label" style="left: 47.3%; top: 34.5%;">
                <div class="object-info">
                  <h3 class="object-title">New York</h3>
                  <div class="object-content">
                    +0 595-510-1352<br>
                    flatley.don@weissnat.me<br>
                    713 Dibbert Bridge
                  </div>
                </div>
              </div>

              <div class="object-label" style="left: 50.7%; top: 20.4%;">
                <div class="object-info">
                  <h3 class="object-title">New York</h3>
                  <div class="object-content">
                    +0 595-510-1352<br>
                    flatley.don@weissnat.me<br>
                    713 Dibbert Bridge
                  </div>
                </div>
              </div>

              <div class="object-label" style="left: 64.4%; top: 22.4%;">
                <div class="object-info">
                  <h3 class="object-title">New York</h3>
                  <div class="object-content">
                    +0 595-510-1352<br>
                    flatley.don@weissnat.me<br>
                    713 Dibbert Bridge
                  </div>
                </div>
              </div>

              <div class="object-label" style="left: 82.2%; top: 32.6%;">
                <div class="object-info">
                  <h3 class="object-title">New York</h3>
                  <div class="object-content">
                    +0 595-510-1352<br>
                    flatley.don@weissnat.me<br>
                    713 Dibbert Bridge
                  </div>
                </div>
              </div>

              <div class="object-label" style="left: 84.4%; top: 82.3%;">
                <div class="object-info">
                  <h3 class="object-title">New York</h3>
                  <div class="object-content">
                    +0 595-510-1352<br>
                    flatley.don@weissnat.me<br>
                    713 Dibbert Bridge
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Contacts -->

      <section class="contacts section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-address col-base col-md-4">
                +7 (212) 654-33-35<br>
                +7 (212) 287-85-22<br>
                info@goarch.com<br>
                USA, New York, 57 Quigley Bridge
              </div>
              <div class="col-base  col-md-8">
                <form class="js-ajax-form">
                  <div class="row-field row">
                    <div class="col-field col-sm-6 col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" required placeholder="Email *">
                      </div>
                    </div>
                    <div class="col-field col-sm-6 col-md-6">
                      <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-message col-field col-sm-12">
                      <div class="form-group">
                        <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                        <div class="error-message">We're sorry, but something went wrong</div>
                      </div>
                    </div>
                  </div>
                  <div class="form-submit text-right"><button class="btn btn-shadow-2 wow swing">Send <i class="icon-next"></i></button></div>
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
