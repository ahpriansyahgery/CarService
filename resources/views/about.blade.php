@extends('layouts.app')

@section('content')
<div
      class="container-fluid page-header mb-5 p-0"
      style="background-image: url(img/carousel-bg-1.jpg)"
    >
      <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
          <h1 class="display-3 text-white mb-3 animated slideInDown">
            About Us
          </h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Pages</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">
                About
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
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
@endsection