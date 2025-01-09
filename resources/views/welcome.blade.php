@extends('layouts.app')

@section('content')
       <!-- Carousel Start -->
       <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image" />
              <div class="carousel-caption d-flex align-items-center">
                <div class="container">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-10 text-center text-lg-start">
                      <h6
                        class="text-white text-uppercase mb-3 animated slideInDown text-center"
                      >
                        // Car Servicing //
                      </h6>
                      <h1
                        class="display-3 text-white mb-4 pb-3 animated slideInDown text-center"
                      >
                        Qualified Car Repair Service Center
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="w-100" src="img/carousel-bg-2.jpg" alt="Image" />
              <div class="carousel-caption d-flex align-items-center">
                <div class="container">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-10 text-center text-lg-start">
                      <h6
                        class="text-white text-uppercase mb-3 animated slideInDown text-center"
                      >
                        // Car Wash //
                      </h6>
                      <h1
                        class="display-3 text-white mb-4 pb-3 animated slideInDown text-center"
                      >
                        Qualified Car Wash Service Center
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- Carousel End -->
  
      <!-- Service Start -->
      <div class="iklan">
        <div class="container-xxl py-5">
          <div class="container">
            <div class="row g-4">
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex py-5 px-4">
                  <i
                    class="fa fa-certificate fa-3x text-primary flex-shrink-0"
                  ></i>
                  <div class="ps-4">
                    <h5 class="mb-3">Quality Servicing</h5>
                    <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex py-5 px-4">
                  <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                  <div class="ps-4">
                    <h5 class="mb-3">Expert Workers</h5>
                    <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex py-5 px-4">
                  <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                  <div class="ps-4">
                    <h5 class="mb-3">Modern Equipment</h5>
                    <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Service End -->
  
      <!-- About Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px">
              <div
                class="position-relative h-100 wow fadeIn"
                data-wow-delay="0.1s"
              >
                <img
                  class="position-absolute img-fluid w-100 h-100"
                  src="img/about.jpg"
                  style="object-fit: cover"
                  alt=""
                />
                <div
                  class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                  style="background: rgba(0, 0, 0, 0.08)"
                >
                  <h1 class="display-4 text-white mb-0">
                    15 <span class="fs-4">Years</span>
                  </h1>
                  <h4 class="text-white">Experience</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <h6 class="text-primary text-uppercase">// About Us //</h6>
              <h1 class="mb-4">
                <span class="text-primary">CarServ :</span>Tempat Terbaik untuk
                Perawatan Mobil Anda.
              </h1>
              <p class="mb-4">
                Solusi terbaik untuk semua kebutuhan perawatan mobil Anda. Dengan
                layanan profesional, harga terjangkau, dan kualitas yang terjamin.
              </p>
              <div class="row g-4 mb-3 pb-3">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="d-flex">
                    <div
                      class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                      style="width: 45px; height: 45px"
                    >
                      <span class="fw-bold text-secondary">01</span>
                    </div>
                    <div class="ps-3">
                      <h6>Professional & Expert</h6>
                      <span>Diam dolor diam ipsum sit amet diam et eos</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                  <div class="d-flex">
                    <div
                      class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                      style="width: 45px; height: 45px"
                    >
                      <span class="fw-bold text-secondary">02</span>
                    </div>
                    <div class="ps-3">
                      <h6>Quality Servicing Center</h6>
                      <span>Diam dolor diam ipsum sit amet diam et eos</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                  <div class="d-flex">
                    <div
                      class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                      style="width: 45px; height: 45px"
                    >
                      <span class="fw-bold text-secondary">03</span>
                    </div>
                    <div class="ps-3">
                      <h6>Awards Winning Workers</h6>
                      <span>Diam dolor diam ipsum sit amet diam et eos</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->
  
      <!-- Fact Start -->
      <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
          <div class="row g-4">
            <div
              class="col-md-6 col-lg-3 text-center wow fadeIn"
              data-wow-delay="0.1s"
            >
              <i class="fa fa-check fa-2x text-white mb-3"></i>
              <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
              <p class="text-white mb-0">Years Experience</p>
            </div>
            <div
              class="col-md-6 col-lg-3 text-center wow fadeIn"
              data-wow-delay="0.3s"
            >
              <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
              <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
              <p class="text-white mb-0">Expert Technicians</p>
            </div>
            <div
              class="col-md-6 col-lg-3 text-center wow fadeIn"
              data-wow-delay="0.5s"
            >
              <i class="fa fa-users fa-2x text-white mb-3"></i>
              <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
              <p class="text-white mb-0">Satisfied Clients</p>
            </div>
            <div
              class="col-md-6 col-lg-3 text-center wow fadeIn"
              data-wow-delay="0.7s"
            >
              <i class="fa fa-car fa-2x text-white mb-3"></i>
              <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
              <p class="text-white mb-0">Compleate Projects</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Fact End -->
  
      <!-- Service Start -->
      <div class="container-xxl service py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Our Services //</h6>
            <h1 class="mb-5">Explore Our Services</h1>
          </div>
          <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
              <div class="nav w-100 nav-pills me-4">
                <button
                  class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                  data-bs-toggle="pill"
                  data-bs-target="#tab-pane-1"
                  type="button"
                >
                  <i class="fa fa-car-side fa-2x me-3"></i>
                  <h4 class="m-0">Diagnostic Mobil</h4>
                </button>
                <button
                  class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                  data-bs-toggle="pill"
                  data-bs-target="#tab-pane-2"
                  type="button"
                >
                  <i class="fa fa-car fa-2x me-3"></i>
                  <h4 class="m-0">Servis Mesin</h4>
                </button>
                <button
                  class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                  data-bs-toggle="pill"
                  data-bs-target="#tab-pane-3"
                  type="button"
                >
                  <i class="fa fa-cog fa-2x me-3"></i>
                  <h4 class="m-0">Ganti Ban</h4>
                </button>
                <button
                  class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0"
                  data-bs-toggle="pill"
                  data-bs-target="#tab-pane-4"
                  type="button"
                >
                  <i class="fa fa-oil-can fa-2x me-3"></i>
                  <h4 class="m-0">Ganti Oli</h4>
                </button>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="tab-content w-100">
                <div class="tab-pane fade show active" id="tab-pane-1">
                  <div class="row g-4">
                    <div class="col-md-6" style="min-height: 350px">
                      <div class="position-relative h-100">
                        <img
                          class="position-absolute img-fluid w-100 h-100"
                          src="img/service-1.jpg"
                          style="object-fit: cover"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3 class="mb-3">
                        15 Years Of Experience In Auto Servicing
                      </h3>
                      <p class="mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum
                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et
                        lorem et sit, sed stet lorem sit clita duo justo magna
                        dolore erat amet
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Quality
                        Servicing
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Expert
                        Workers
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Modern
                        Equipment
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                  <div class="row g-4">
                    <div class="col-md-6" style="min-height: 350px">
                      <div class="position-relative h-100">
                        <img
                          class="position-absolute img-fluid w-100 h-100"
                          src="img/service-2.jpg"
                          style="object-fit: cover"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3 class="mb-3">
                        15 Years Of Experience In Auto Servicing
                      </h3>
                      <p class="mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum
                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et
                        lorem et sit, sed stet lorem sit clita duo justo magna
                        dolore erat amet
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Quality
                        Servicing
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Expert
                        Workers
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Modern
                        Equipment
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-3">
                  <div class="row g-4">
                    <div class="col-md-6" style="min-height: 350px">
                      <div class="position-relative h-100">
                        <img
                          class="position-absolute img-fluid w-100 h-100"
                          src="img/service-3.jpg"
                          style="object-fit: cover"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3 class="mb-3">
                        15 Years Of Experience In Auto Servicing
                      </h3>
                      <p class="mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum
                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et
                        lorem et sit, sed stet lorem sit clita duo justo magna
                        dolore erat amet
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Quality
                        Servicing
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Expert
                        Workers
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Modern
                        Equipment
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-4">
                  <div class="row g-4">
                    <div class="col-md-6" style="min-height: 350px">
                      <div class="position-relative h-100">
                        <img
                          class="position-absolute img-fluid w-100 h-100"
                          src="img/service-4.jpg"
                          style="object-fit: cover"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3 class="mb-3">
                        15 Years Of Experience In Auto Servicing
                      </h3>
                      <p class="mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum
                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et
                        lorem et sit, sed stet lorem sit clita duo justo magna
                        dolore erat amet
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Quality
                        Servicing
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Expert
                        Workers
                      </p>
                      <p>
                        <i class="fa fa-check text-success me-3"></i>Modern
                        Equipment
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Service End -->
  
      <!-- Booking Start -->
  
      <!-- Booking End -->
  
      <!-- Team Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
            <h1 class="mb-5">Our Expert Technicians</h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="img/team-1.jpg" alt="" />
                  <div
                    class="team-overlay position-absolute start-0 top-0 w-100 h-100"
                  >
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="bg-light text-center p-4">
                  <h5 class="fw-bold mb-0">Full Name</h5>
                  <small>Designation</small>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="img/team-2.jpg" alt="" />
                  <div
                    class="team-overlay position-absolute start-0 top-0 w-100 h-100"
                  >
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="bg-light text-center p-4">
                  <h5 class="fw-bold mb-0">Full Name</h5>
                  <small>Designation</small>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="img/team-3.jpg" alt="" />
                  <div
                    class="team-overlay position-absolute start-0 top-0 w-100 h-100"
                  >
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="bg-light text-center p-4">
                  <h5 class="fw-bold mb-0">Full Name</h5>
                  <small>Designation</small>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item">
                <div class="position-relative overflow-hidden">
                  <img class="img-fluid" src="img/team-4.jpg" alt="" />
                  <div
                    class="team-overlay position-absolute start-0 top-0 w-100 h-100"
                  >
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-square mx-1" href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <div class="bg-light text-center p-4">
                  <h5 class="fw-bold mb-0">Full Name</h5>
                  <small>Designation</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->
  
      <!-- Testimonial Start -->
      <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
          <div class="text-center">
            <h6 class="text-primary text-uppercase">// Testimonial //</h6>
            <h1 class="mb-5">Our Clients Say!</h1>
          </div>
          <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
              <img
                class="bg-light rounded-circle p-2 mx-auto mb-3"
                src="img/testimonial-1.jpg"
                style="width: 80px; height: 80px"
              />
              <h5 class="mb-0">Client Name</h5>
              <p>Profession</p>
              <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">
                  Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
                  amet diam et eos. Clita erat ipsum et lorem et sit.
                </p>
              </div>
            </div>
            <div class="testimonial-item text-center">
              <img
                class="bg-light rounded-circle p-2 mx-auto mb-3"
                src="img/testimonial-2.jpg"
                style="width: 80px; height: 80px"
              />
              <h5 class="mb-0">Client Name</h5>
              <p>Profession</p>
              <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">
                  Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
                  amet diam et eos. Clita erat ipsum et lorem et sit.
                </p>
              </div>
            </div>
            <div class="testimonial-item text-center">
              <img
                class="bg-light rounded-circle p-2 mx-auto mb-3"
                src="img/testimonial-3.jpg"
                style="width: 80px; height: 80px"
              />
              <h5 class="mb-0">Client Name</h5>
              <p>Profession</p>
              <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">
                  Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
                  amet diam et eos. Clita erat ipsum et lorem et sit.
                </p>
              </div>
            </div>
            <div class="testimonial-item text-center">
              <img
                class="bg-light rounded-circle p-2 mx-auto mb-3"
                src="img/testimonial-4.jpg"
                style="width: 80px; height: 80px"
              />
              <h5 class="mb-0">Client Name</h5>
              <p>Profession</p>
              <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">
                  Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam
                  amet diam et eos. Clita erat ipsum et lorem et sit.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->
  
     
@endsection