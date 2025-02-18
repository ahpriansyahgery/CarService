   <!-- Navbar Start -->
   <nav
   class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0"
 >
   <a
     href="index.html"
     class="navbar-brand d-flex align-items-center px-4 px-lg-5"
   >
     <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2>
   </a>
   <button
     type="button"
     class="navbar-toggler me-4"
     data-bs-toggle="collapse"
     data-bs-target="#navbarCollapse"
   >
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarCollapse">
     <div class="navbar-nav ms-auto p-4 p-lg-0">
       <a href="{{ route('welcome') }}" class="nav-item nav-link active">Home</a>
       <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
       <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
       <div class="nav-item dropdown">
         <a
           href="#"
           class="nav-link dropdown-toggle"
           data-bs-toggle="dropdown"
           >Menu</a
         >
         <div class="dropdown-menu fade-up m-0">
           <a href="{{ route('booking.create') }}" class="dropdown-item">Booking</a>
           <a href="{{ route('mechanic') }}" class="dropdown-item">Technicians</a>
           <a href="testimonial.html" class="dropdown-item">Testimonial</a>
         </div>
       </div>
       <a href="contact.html" class="nav-item nav-link">Contact</a>
     </div>
   </div>
 </nav>
 <!-- Navbar End -->