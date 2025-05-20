<!DOCTYPE html>
<html>
  <head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>Prefix</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href={{ asset('css/ETS/css/bootstrap.min.css') }} />
    <!-- style css -->
    <link rel="stylesheet" type={{ asset('css/ETS/css/style.css') }}/>
    <!-- Responsive-->
    <link rel="stylesheet" href={{ asset('css/ETS/css/responsive.css' )}}/>
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif"/>
    <!-- font css -->
    <link
      href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href={{ asset('css/ETS/css/jquery.mCustomScrollbar.min.css') }}/>
    <!-- Tweaks for older IEs-->
    <link
      rel="stylesheet"
      href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
    />
  </head>
  <body>
    <div class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.html"
            ><img src={{ asset('img/ETS/assets/logo_coffee_toffee_favicon_1x.png') }} width="230"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link text-warning font-weight-bold" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Kopi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pricing.html">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">Peluang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Kampanye</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <div class="login_bt">
                <ul>
                  <li class="active"><a href="#">Buy Now</a></li>
                  <li><a href="#">Login</a></li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-search" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </nav>
      </div>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="banner_taital">
                SELL EVERY OLD THINGS &
                <span style="color: #2b2b2b">BUY NEW</span>
              </h1>
              <p class="banner_text">
                from the best indonesian specialty coffee to heart-warming foods
              </p>
              <div class="started_text"><a href="#">Read More</a></div>
              <div class="play_icon"><img src={{ asset('img/ETS/images/play-icon.png') }}/></div>
            </div>
            <div class="col-md-6">
              <div
                id="banner_slider"
                class="carousel slide"
                data-ride="carousel"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div>
                      <img
                        src={{ asset('img/ETS/assets/news-coffee-toffee-01.jpg') }}
                        class="rounded-lg banner_img"
                      />
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div>
                      <img
                        src={{ asset('img/ETS/assets/news-coffee-toffee-02.jpg') }}
                        class="rounded-lg banner_img"
                      />
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div>
                      <img
                        src={{ asset('img/ETS/assets/news-coffee-toffee-03.jpg') }}
                        class="rounded-lg banner_img"
                      />
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div>
                      <img
                        src={{ asset('img/ETS/assets/news-coffee-toffee-04.jpg') }}
                        class="rounded-lg banner_img"
                      />
                    </div>
                  </div>
                </div>
                <a
                  class="carousel-control-prev"
                  href="#banner_slider"
                  role="button"
                  data-slide="prev"
                >
                  <i class="fa fa-angle-left"></i>
                </a>
                <a
                  class="carousel-control-next"
                  href="#banner_slider"
                  role="button"
                  data-slide="next"
                >
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- select box section start -->
    <div class="container">
      <div class="select_box_section">
        <div class="select_box_main">
          <div class="row">
            <div class="col-md-4 select-outline">
              <input
                type="text"
                class="enter_bt"
                placeholder="Enter Keywords"
                name="Enter Keywords"
              />
            </div>
            <div class="col-md-4 select-outline">
              <select
                class="mdb-select md-form md-outline colorful-select dropdown-primary"
              >
                <option value="" disabled selected>All Categoris</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
            </div>
            <div class="col-md-4 select-outline">
              <select
                class="mdb-select md-form md-outline colorful-select dropdown-primary"
              >
                <option value="" disabled selected>Your Lucation</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
            </div>
          </div>
        </div>
        <div class="search_btn"><a href="#">Search Now</a></div>
      </div>
    </div>
    <!-- services section start -->
    <div class="services_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-4 d-flex align-items-center">
            <h1 class="services_taital">Our Menu</h1>
            <p class="services_text">
              from the best indonesian specialty coffee to heart-warming foods
            </p>
          </div>
          <div class="col-md-8">
            <h1 class="services_taital">
              <div class="services_box">
                <div class="services_box_left">
                  <h5 class="fashion_text pb-4">Our Beans</h5>
                  <div>
                    <img
                      src={{ asset('img/ETS/assets/01-coffee-toffee.jpg') }}
                      class="service_img rounded"
                    />
                  </div>
                </div>
                <div class="services_box_right">
                  <h5 class="fashion_text pb-4">Coffee-Based Drinks</h5>
                  <div>
                    <img
                      src={{ asset('img/ETS/assets/02-coffee-toffee.jpg') }}
                      class="service_img rounded"
                    />
                  </div>
                </div>
              </div>
              <div class="services_box_2">
                <div class="services_box_left">
                  <h5 class="fashion_text pb-4">None Coffee</h5>
                  <div>
                    <img
                      src={{ asset('img/ETS/assets/03-coffee-toffee.jpg') }}
                      class="service_img rounded"
                    />
                  </div>
                </div>
                <div class="services_box_right">
                  <h5 class="fashion_text pb-4">Food & Snack</h5>
                  <div>
                    <img
                      src={{ asset('img/ETS/assets/news-coffee-toffee-04.jpg') }}
                      class="service_img rounded"
                    />
                  </div>
                </div>
              </div>
            </h1>
          </div>
        </div>
      </div>
    </div>
    <!-- services section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 padding_left0">
            <div class="about_taital_main">
              <h1 class="about_taital">Cerita Kami</h1>
              <h6 class="about_text">
                Dimulai dari satu outlet kecil di depan satu minimarket di kota
                Surabaya, kami berkembang menjadi jaringan kedai kopi nasional
                dengan cabang tersebar di banyak kota di Indonesia. Di tahun
                2012, kami adalah pionir dan penggagas dalam gerakan bangga
                terhadap kopi Indonesia dengan kampanye "Yes I Drink Indonesian
                Coffee." Di tahun 2017, kami mendapatkan Penghargaan Indonesia
                Franchise Award dari kementerian Perdagangan sebagai Pemenang
                Nasional. Penghargaan ini serta diserahkan langsung oleh bapak
                Presiden RI Joko Widodo.Read more...
              </h6>
              <div class="btn_main">
                <div class="started_bt"><a href="#">Awal Mula</a></div>
                <div class="buy_bt active"><a href="#">Kampanye</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <div class="about_img d-flex justify-content-center">
              <img src={{ asset('img/ETS/assets/story-coffee-toffee.png') }}/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- about section end -->
    <!-- shop section start -->
    <div class="blog_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="blog_taital">galery</h1>
          </div>
        </div>
        <div class="blog_section_2">
          <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4">
                    <div class="blog_img">
                      <img src={{ asset('img/ETS/assets/galery-coffee-toffee-01b.jpg') }} />
                    </div>
                    <h6 class="number_text">01</h6>
                  </div>
                  <div class="col-md-4">
                    <div class="blog_img">
                      <img src={{ asset('img/ETS/assets/galery-coffee-toffee-02b.jpg') }} />
                    </div>
                    <h6 class="number_text">02</h6>
                    
                  </div>
                  <div class="col-md-4">
                    <div class="blog_img">
                      <img src={{ asset('img/ETS/assets/galery-coffee-toffee-03b.jpg') }}/>
                    </div>
                    <h6 class="number_text">03</h6>
                    
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4">
                    <div class="blog_img">
                      <img src={{ asset('img/ETS/assets/galery-coffee-toffee-04b.jpg') }} />
                    </div>
                    <h6 class="number_text">01</h6>
                    
                  </div>
                  <div class="col-md-4">
                    <div class="blog_img">
                      <img src={{ asset('img/ETS/assets/galery-coffee-toffee-05b.jpg') }} />
                    </div>
                    <h6 class="number_text">02</h6>
                    
                  </div>
                  <div class="col-md-4">
                    <div class="blog_img">
                      <img src={{ asset('img/ETS/assets/galery-coffee-toffee-06b.jpg') }} />
                    </div>
                    <h6 class="number_text">03</h6>
                    
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4">
                    <div class="blog_img">
                      <img src={{ asset('img/ETS/assets/galery-coffee-toffee-07b.jpg') }} />
                    </div>
                    <h6 class="number_text">01</h6>
                    
                  </div>
                  <div class="col-md-4">
                    <div class="blog_img">
                      <img src={{ asset('img/ETS/assets/galery-coffee-toffee-08b.jpg') }} />
                    </div>
                    <h6 class="number_text">02</h6>
                    
                  </div>
                  <div class="col-md-4">
                    <div class="blog_img">
                      <img src={{ asset('img/ETS/assets/galery-coffee-toffee-09b.jpg') }} />
                    </div>
                    <h6 class="number_text">03</h6>
                    
                  </div>
                </div>
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#main_slider"
              role="button"
              data-slide="prev"
            >
              <i class="fa fa-angle-left"></i>
            </a>
            <a
              class="carousel-control-next"
              href="#main_slider"
              role="button"
              data-slide="next"
            >
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- shop section end -->
    <!-- pricing section start -->
    <div class="pricing_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="pricing_taital">Bawa kami dalam keseharian kamu</h1>
          </div>
        </div>
        <div class="pricing_section_2">
          <div class="row">
            <div class="col-md-4">
              <div class="pricing_box">
                <h6 class="regular_text">catering</h6>
                <p class="using_text">
                  Kamu bisa membawa Coffee Toffee dalam acara kantor atau selebrasi pribadi kamu
                </p>
                <div class="readmore_bt"><a href="#">Read More</a></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing_box active">
                <h6 class="regular_text">Coffee Pack</h6>
                <p class="using_text">
                  Dalam kemasan 200gr, kamu bisa menikmati kopi specialty arabika Coffee Toffee di rumah.
                </p>
                <div class="readmore_bt active"><a href="#">Read More</a></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="pricing_box">
                <h6 class="regular_text">Merchandise</h6>
                <p class="using_text">
                  Berbagai pilihan merchandise utk menunjukkan kecintaan (atau kegilaan) kamu ke dunia kopi
                </p>
                <div class="readmore_bt"><a href="#">Read More</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- pricing section end -->
    <!-- customer section end -->
    <div class="customer_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="customer_taital">Contact US</h1>
          </div>
        </div>
      </div>
      <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="customer_section_2">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_main">
                      <div class="customer_main">
                        <p class="enim_text">
                          has a more-or-less normal distribution of letters, as
                          opposed to using 'Content here, content here', making
                          it look like readable English. Many desktop publishing
                          packages and web page editors has a more-or-less
                          normal distribution of letters, as opposed to using
                          'Content here, content here', making it look like
                          readable English. Many desktop publishing packages and
                          web page editors
                        </p>
                        <div class="customer_left">
                          <div class="customer_img">
                            <img src={{ asset('img/ETS/assets/slider-01-icon.jpg') }} height="200" width="200"/>
                          </div>
                        </div>
                        <div class="customer_right">
                          <h3 class="customer_name">Content</h3>
                          <p class="web_text text-light">And web page</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="customer_section_2">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_main">
                      <div class="customer_main">
                        <p class="enim_text">
                          has a more-or-less normal distribution of letters, as
                          opposed to using 'Content here, content here', making
                          it look like readable English. Many desktop publishing
                          packages and web page editors has a more-or-less
                          normal distribution of letters, as opposed to using
                          'Content here, content here', making it look like
                          readable English. Many desktop publishing packages and
                          web page editors
                        </p>
                        <div class="customer_left">
                          <div class="customer_img">
                            <img src={{ asset('img/ETS/assets/slider-02-icon.jpg') }}  height="200" width="200" />
                          </div>
                        </div>
                        <div class="customer_right">
                          <h3 class="customer_name">Content</h3>
                          <p class="web_text">And web page</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="customer_section_2">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_main">
                      <div class="customer_main">
                        <p class="enim_text">
                          has a more-or-less normal distribution of letters, as
                          opposed to using 'Content here, content here', making
                          it look like readable English. Many desktop publishing
                          packages and web page editors has a more-or-less
                          normal distribution of letters, as opposed to using
                          'Content here, content here', making it look like
                          readable English. Many desktop publishing packages and
                          web page editors
                        </p>
                        <div class="customer_left">
                          <div class="customer_img">
                            <img src={{ asset('img/ETS/assets/slider-03-icon.jpg') }}  height="200" width="200" />
                          </div>
                        </div>
                        <div class="customer_right">
                          <h3 class="customer_name">Content</h3>
                          <p class="web_text">And web page</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#my_slider"
          role="button"
          data-slide="prev"
        >
          <i class="fa fa-angle-left"></i>
        </a>
        <a
          class="carousel-control-next"
          href="#my_slider"
          role="button"
          data-slide="next"
        >
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
    <!-- customer section end -->
    <!-- contact section start -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer_logo"><img src={{ asset('img/ETS/assets/logo_coffee_toffee_favicon_1x.png') }}  /></div>
          </div>
        </div>
        <div class="footer_section_2">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <h2 class="useful_text">Useful link</h2>
              <div class="footer_menu">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="sell.html">Sell</a></li>
                  <li><a href="products.html">Products</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h2 class="useful_text">Portfolio</h2>
              <div class="footer_menu">
                <ul>
                  <li><a href="#">LIodeno</a></li>
                  <li><a href="jokri.html">Jokri</a></li>
                  <li><a href="begana.html">Begana</a></li>
                  <li><a href="sell.html">Sell</a></li>
                  <li><a href="products.html">Products</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h2 class="useful_text">Contact Us</h2>
              <div class="location_text">
                <img src={{ asset('img/ETS/images/call-icon.png') }}  /><span class="padding_left_15"
                  ><a href="#">+01 1234567</a></span
                >
              </div>
              <div class="location_text">
                <img src={{ asset('img/ETS/images/mail-icon.png') }}  /><span class="padding_left_15"
                  ><a href="#">coffeetoffeeidn@gmail.com</a></span
                >
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h2 class="useful_text">Social Link</h2>
              <p class="footer_text">
                It is a long established fact that a reader will be
              </p>
              <div class="social_icon">
                <ul>
                  <li>
                    <a href="#"
                      ><i class="fa fa-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-linkedin" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-instagram" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="input_main">
          <input
            type="text"
            class="email_text"
            placeholder="Enter your email"
            name="Enter your email"
          />
          <div class="subscribe_bt"><a href="#">Subscribe</a></div>
        </div>
      </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">
          2020 All Rights Reserved. Design by
          <a href="https://html.design">Free Html Templates</a> Distribution by
          <a href="https://themewagon.com">ThemeWagon</a>
        </p>
      </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src={{ asset('js/ETS/js/jquery.min.js') }}></script>
    <script src={{ asset('js/ETS/js/popper.min.js') }}></script>
    <script src={{ asset('js/ETS/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('js/ETS/js/jquery-3.0.0.min.js') }}></script>
    <script src={{ asset('js/ETS/js/plugin.js') }}></script>
    <!-- sidebar -->
    <script src={{ asset('js/ETS/js/jquery.mCustomScrollbar.concat.min.js') }}></script>
    <script src={{ asset('js/ETS/js/custom.js') }}></script>
    <!-- javascript -->
    <script>
      // Material Select Initialization
      $(document).ready(function () {
        $(".mdb-select").materialSelect();
        $(".select-wrapper.md-form.md-outline input.select-dropdown").bind(
          "focus blur",
          function () {
            $(this)
              .closest(".select-outline")
              .find("label")
              .toggleClass("active");
            $(this)
              .closest(".select-outline")
              .find(".caret")
              .toggleClass("active");
          }
        );
      });
    </script>
  </body>
</html>
