 <nav class="navbar navbar-expand-lg bg-white shadow">
     <div class="container-fluid py-2">
         <a class="navbar-brand" href="/">Car Garage</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/cars">Cars</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/about">About</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/services">Services</a>
                 </li>



                 @guest
                     <li class="nav-item">
                         <a class="nav-link" href="/login">Login</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/register">Register</a>
                     </li>
                 @endguest

                 @auth
                     <form action="{{ route('login.destroy') }}" method="post">
                         @csrf
                         @method('delete')
                         <li class="nav-item">
                             <button type="submit" class="nav-link text-danger" href="/register">Logout</button>
                         </li>
                     </form>
                 @endauth

                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('admin.cars.index') }}">
                         Admin
                     </a>
                 </li>
             </ul>

             <!-- Search -->
             <div class="d-flex">
                 <input class="form-control me-2" type="search" id="navbar-search-input" placeholder="Search" />
                 <a href="/cars" id="navbar-search-button" class="btn btn-primary">Search</a>
             </div>
         </div>
     </div>
 </nav>
