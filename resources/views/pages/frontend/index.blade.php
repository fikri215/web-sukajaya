<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $setting->title ?? 'Bengkel Las Suka Jaya Tangerang' }}</title>
    <meta name="description" content="Bengkel Las Profesional Menawarkan Jasa Pembuatan Pagar, Kanopi, dan Layanan Las Lainnya. Kami ahli dalam pembuatan pagar besi, pagar rumah, pagar tembok, kanopi baja ringan, kanopi polycarbonate, dan produk las lainnya. Dapatkan layanan berkualitas dengan harga terjangkau. Hubungi kami sekarang untuk konsultasi gratis!">
    <meta name="description" content="Bengkel Las Profesional Menawarkan Jasa Pembuatan Pagar, Kanopi, dan Layanan Las di Jugga. Kami ahli dalam pembuatan pagar besi, pagar rumah, pagar tembok, kanopi baja ringan, kanopi polycarbonate, dan produk las lainnya di Jugga. Dapatkan layanan berkualitas dengan harga terjangkau. Hubungi kami sekarang untuk konsultasi gratis!">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon/favicon.ico') }}" /> --}}

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>SukaJaya<span>.</span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#projects">Gallery</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center">
                        <h2 data-aos="fade-down">Bengkel Las <span class="orange">Suka Jaya</span></h2>
                        <h1 data-aos="fade-up">{{ $hero->title2 }}</h1>
                        <h3 data-aos="fade-up">{{ $hero->title3 }}</h3>
                        <a data-aos="fade-up" data-aos-delay="200" href="https://wa.me/6282249040305" target="_blank"
                            class="btn-get-started" aria-label="Hubungi kami">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active" style="background-image: url({{ asset('storage/uploads/images/banner/'.$hero->image) }})"></div>
        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Alt Services Section ======= -->
        <section id="about" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2><span>Tentang</span> Kami</h2>
                </div>

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('storage/uploads/images/profile/'. $about->image) }}" alt="About">
                    </div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>{{ $about->title }}</h3>
                        <p>
                            {!! $about->desc !!}
                        </p>
                        <a data-aos="fade-up" data-aos-delay="200" href="https://wa.me/6282249040305" target="_blank"
                            class="btn-get-started" aria-label="Hubungi kami">Hubungi Kami</a>

                    </div>
                </div>

            </div>
        </section><!-- End Alt Services Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Layanan <span>Kami</span></h2>
                </div>

                <div class="row gy-4">
                    @foreach ($services as $item)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <img src="{{ asset('storage/uploads/images/service/'. $item->image) }}" class="card-img-top" alt="Pagar">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                                </div>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= choose Section ======= -->
        <section id="choose" class="choose section-blue">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2><span>Mengapa</span> Memilih Kami</h2>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-clipboard2-check"></i>
                            <div>
                                <h4>Gratis Survei</h4>
                                <p>Kami siap datang ke lokasi anda untuk melakukan survei tanpa dipungut biaya</p>
                            </div>
                        </div><!-- End Icon Box -->
                    </div><!-- End Card Item -->

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-tags"></i>
                            <div>
                                <h4>Harga Terjangkau</h4>
                                <p>Kami menawarkan harga yang terjangkau dan bersaing</p>
                            </div>
                        </div><!-- End Icon Box -->
                    </div><!-- End Card Item -->

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-hand-thumbs-up"></i>
                            <div>
                                <h4>Material Berkualitas</h4>
                                <p>Menggunakan material premium dan berkualitas agar hasil lebih maksimal</p>
                            </div>
                        </div><!-- End Icon Box -->
                    </div><!-- End Card Item -->

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-people"></i>
                            <div>
                                <h4>Pekerja Profesional</h4>
                                <p>Dikerjakan oleh tenaga profesional dan berpengelaman sehingga hasil pekerjaan rapi
                                </p>
                            </div>
                        </div><!-- End Icon Box -->
                    </div><!-- End Card Item -->


                </div>

            </div>
        </section><!-- End choose Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2><span>Gallery</span></h2>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($categories as $item)
                            <li data-filter=".filter-{{ $item->slug }}">{{ $item->name }}</li>
                        @endforeach
                    </ul><!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($galleries as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->category->slug }}">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset('storage/uploads/images/gallery/'. $item->image) }}" class="img-fluid" alt="gallery">
                                    <div class="portfolio-info">
                                        <h4>{{ $item->category->name }}</h4>
                                        <p>{{ $item->desc ?? '' }}</p>
                                        <a href="{{ asset('storage/uploads/images/gallery/'. $item->image) }}" data-title="{{ $item->category->name }}"
                                            data-gallery="portfolio-gallery-{{ $item->category->name }}"
                                            class="glightbox preview-link text-center"><i class="bi bi-zoom-in"></i></a>
                                        <a href="#gallery" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Projects Item -->
                        @endforeach
                    </div><!-- End Projects Container -->

                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
    
            <div class="section-header">
                <h2><span>Testimoni</span> Customer</h2>
            </div>
    
            <div class="slides-2 swiper">
                <div class="swiper-wrapper">
    
                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>Saul Goodman</h3>
                        <h4>Direktur RS Sari Asih</h4>
                        <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                    </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>Sara Wilsson</h3>
                        <h4>Owner Simpati Furniture</h4>
                        <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                    </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                    </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                    </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                    </div>
                </div><!-- End testimonial item -->
    
                </div>
                <div class="swiper-pagination"></div>
            </div>
    
            </div>
        </section><!-- End Testimonials Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact section-blue">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2><span>Kontak</span></h2>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">

                        <div class="col-lg-6 ">
                            <iframe class="mb-4 mb-lg-0"
                                title="location"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.499879959982!2d106.6517486742328!3d-6.1975860607137525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f90219d5b5f1%3A0x506ebeac411a5940!2sBengkel%20Las%20SukaJaya!5e0!3m2!1sid!2sid!4v1685730679531!5m2!1sid!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 420px;" allowfullscreen></iframe>
                        </div>

                        <div class="col-lg-6">
                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="info-box mb-4">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Alamat</h3>
                                        <p>{{ $setting->address }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="info-box mb-4">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Telepon</h3>
                                        <p>{{ $setting->phone }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="info-box mb-4">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email</h3>
                                        <p>{{ $setting->email }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="info-box mb-4">
                                        <i class="bi bi-instagram"></i>
                                        <h3>Instagram</h3>
                                        <p><span>@</span>{{ $setting->instagram }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Suka Jaya</h3>
                            <p>
                                {{ $setting->address ?? 'Jl. Danau, Cipete (Belakang Perumahan Banjar Wijaya)' }} <br>
                                {{ $setting->city ?? 'Pinang, Tangerang' }}<br><br>
                                <strong>Phone:</strong> {{ $setting->phone ?? '0822-4904-0305' }}<br>
                                <strong>Email:</strong> {{ $setting->email ?? 'Fauzanbashar8@gmail.com' }}<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                <a href="https://wa.me/6282249040305" target="_blank"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-whatsapp" aria-label="Link ke whatsapp kami"></i></a>
                                <a href="https://www.instagram.com/{{ $setting->instagram }}/" target="_blank"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram" aria-label="Link ke instagram kami"></i></a>
                                <a href="mailto:{{ $setting->email }}" target="_blank"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-envelope" aria-label="Link ke email kami"></i></a>
                            </div>
                        </div>
                    </div><!-- End footer info column-->

                    <div class="col-lg-4 col-md-3 footer-links">
                        <h4>Navigasi</h4>
                        <ul>
                            <li><a href="#hero">Home</a></li>
                            <li><a href="#alt-services">Tentang Kami</a></li>
                            <li><a href="#services">Layanan</a></li>
                            <li><a href="#projects">Gallery</a></li>
                            <li><a href="#contact">Kontak</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-4 col-md-3 footer-links">
                        <h4>Layanan Kami</h4>
                        <ul>
                            <li><a href="#">Pembuatan Kanopi</a></li>
                            <li><a href="#">Pembuatan Railing</a></li>
                            <li><a href="#">Pembangunan Gudang</a></li>
                            <li><a href="#">Pembuatan Pagar</a></li>
                            <li><a href="#">Pembuatan Tralis</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Suka Jaya</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="https://wa.me/6282249040305" target="_blank"
        class="scroll-top d-flex align-items-center justify-content-center" aria-label="Hubungi kami"><i class="bi bi-whatsapp"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>