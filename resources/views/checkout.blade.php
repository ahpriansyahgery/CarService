@extends('layouts.app')

@section('content')
     <!-- Page Header Start -->
     <div
     class="container-fluid page-header mb-5 p-0"
     style="background-image: url(img/carousel-bg-1.jpg)"
   >
     <div class="container-fluid page-header-inner py-5">
       <div class="container text-center">
         <h1 class="display-3 text-white mb-3 animated slideInDown">
           Booking
         </h1>
         <nav aria-label="breadcrumb">
           <ol class="breadcrumb justify-content-center text-uppercase">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item"><a href="#">Pages</a></li>
             <li class="breadcrumb-item text-white active" aria-current="page">
               Booking
             </li>
           </ol>
         </nav>
       </div>
     </div>
   </div>
   <!-- Page Header End -->

   <!-- Service Start -->
   <div class="container-xxl py-5">
     <div class="container">
       <div class="row g-4">
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
           <div class="d-flex py-5 px-4">
             <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
             <div class="ps-4">
               <h5 class="mb-3">Quality Servicing</h5>
               <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
               <a class="text-secondary border-bottom" href="">Read More</a>
             </div>
           </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
           <div class="d-flex bg-light py-5 px-4">
             <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
             <div class="ps-4">
               <h5 class="mb-3">Expert Workers</h5>
               <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
               <a class="text-secondary border-bottom" href="">Read More</a>
             </div>
           </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
           <div class="d-flex py-5 px-4">
             <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
             <div class="ps-4">
               <h5 class="mb-3">Modern Equipment</h5>
               <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
               <a class="text-secondary border-bottom" href="">Read More</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Service End -->

   <!-- Booking Start -->
   <div
     class="container-fluid bg-secondary booking my-5 wow fadeInUp"
     data-wow-delay="0.1s"
   >
     <div class="container">
       <div class="row gx-5">
         <div class="col-lg-12">
           <div
             class="h-100 d-flex flex-column justify-content-center p-5 wow zoomIn"
             data-wow-delay="0.6s"
           >
             <h1 class="text-white mb-4 text-center">Booking Untuk Service</h1>
             <form>
               <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label"
                   >Nama</label
                 >
                 <input
                   type="text"
                   class="form-control"
                   id="name"
                   name="name"
                 />
               </div>
               <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label"
                   >Email
                 </label>
                 <input
                   type="email"
                   class="form-control"
                   id="exampleInputEmail1"
                   name="email"
                 />
               </div>

               <div class="mb-3">
                 <label for="phone" class="form-label">No Hp</label>
                 <input
                   type="number"
                   class="form-control"
                   id="phone"
                   name="phone"
                 />
               </div>
               <div class="mb-3 text-area">
                 <label for="alamat" class="form-label">Alamat</label>
                 <textarea name="alamat" id="alamat" class="px-2"></textarea>
               </div>
               <div class="mb-3">
                 <label for="service" class="form-label"> Service</label>
                 <select
                   class="form-select"
                   aria-label="Default select example"
                   name="service"
                 >
                   <option selected>Jenis Service</option>
                   <option value="1">One</option>
                   <option value="2">Two</option>
                   <option value="3">Three</option>
                 </select>
               </div>
               <div class="mb-3">
                 <label for="car" class="form-label">Mobil</label>
                 <select
                   class="form-select"
                   aria-label="Default select example"
                   name="car"
                 >
                   <option selected>Jenis Mobil</option>
                   <option value="1">One</option>
                   <option value="2">Two</option>
                   <option value="3">Three</option>
                 </select>
               </div>
               <div class="mb-3">
                 <label for="mechanic" class="form-label">Mekanik</label>
                 <select
                   class="form-select"
                   aria-label="Default select example"
                   name="mechanic"
                 >
                   <option selected>Mekanik</option>
                   <option value="1">One</option>
                   <option value="2">Two</option>
                   <option value="3">Three</option>
                 </select>
               </div>

               <div class="mb-3">
                 <label for="booking_date" class="form-label"
                   >Tanggal Booking</label
                 >
                 <input
                   type="date"
                   class="form-control"
                   id="booking_date"
                   name="booking_date"
                 />
               </div>
               <div class="mb-3">
                 <label for="booking_hour" class="form-label"
                   >Jam Service</label
                 >
                 <input
                   type="time"
                   class="form-control"
                   id="booking_hour"
                   name="booking_hour"
                 />
               </div>

               <button type="submit" class="btn btn-primary">Submit</button>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Booking End -->
@endsection