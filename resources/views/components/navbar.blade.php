 <nav class="navbar navbar-expand-lg bg-white shadow">
     <div class="container-fluid py-2">
         <a class="navbar-brand" href="/">
             <img src="/storage/logo.png" height="40" alt="Logo">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="./">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('cars.index') }}">Cars</a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('services.index') }}">Services</a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('contact-us.index') }}">Contact us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('about.index') }}">About</a>
                 </li>
             </ul>

             <!-- Search -->
             <div class="d-flex align-items-center">
                 @guest
                     <a class="nav-link me-2" href="{{ route('login.index') }}">Login</a>
                     <a class="nav-link me-2" href="{{ route('register.index') }}">Register</a>
                 @endguest

                 <div class="d-flex gap-3 align-items-center">
                     @auth
                         <form action="{{ route('login.destroy') }}" method="post">
                             @csrf
                             @method('delete')
                             <button type="submit" class="nav-link text-danger" href="/register">Logout</button>
                         </form>

                         <a class="nav-link" href="{{ route('admin.cars.index') }}">
                             Admin
                         </a>
                     @endauth

                     <input class="form-control me-2" type="search" id="navbar-search-input" placeholder="Search" />
                 </div>
                 <a href="./cars.html" id="navbar-search-button" class="btn btn-primary">Search</a>
             </div>
         </div>
     </div>
 </nav>
