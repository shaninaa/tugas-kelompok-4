<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
      </ul>
      <div class="search-element">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="450">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        <div class="search-backdrop"></div>
        <div class="search-result">
          <div class="search-header">
            Histories
          </div>
          <div class="search-item">
            <a href="#">How to hack NASA using CSS</a>
            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
          </div>
          <div class="search-item">
            <a href="#">Kodinger.com</a>
            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
          </div>
          <div class="search-item">
            <a href="#">#Stisla</a>
            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
          </div>
          <div class="search-header">
            Result
          </div>
          <div class="search-item">
            <a href="#">
              <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
              oPhone S9 Limited Edition
            </a>
          </div>
          <div class="search-item">
            <a href="#">
              <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
              Drone X2 New Gen-7
            </a>
          </div>
          <div class="search-item">
            <a href="#">
              <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
              Headphone Blitz
            </a>
          </div>
          <div class="search-header">
            Projects
          </div>
          <div class="search-item">
            <a href="#">
              <div class="search-icon bg-danger text-white mr-3">
                <i class="fas fa-code"></i>
              </div>
              Stisla Admin Template
            </a>
          </div>
          <div class="search-item">
            <a href="#">
              <div class="search-icon bg-primary text-white mr-3">
                <i class="fas fa-laptop"></i>
              </div>
              Create a new Homepage Design
            </a>
          </div>
        </div>
      </div>
    </form>
    <ul class="navbar-nav navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="/tentang">Tentang Kami</a>
      </li>
      {{-- <li class="nav-item active">
        <a class="nav-link" href="#">Produk</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Kategori</a>
      </li> --}}
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hi! Admin</div> </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-title">Logged in 5 min ago</div>
          <a href="features-profile.html" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
          </a>
          <a href="features-activities.html" class="dropdown-item has-icon">
            <i class="fas fa-bolt"></i> Activities
          </a>
          <a href="features-settings.html" class="dropdown-item has-icon">
            <i class="fas fa-cog"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item has-icon text-danger">
            <form id="logout-form" action="" method="POST" >
              @csrf
              <button type="submit" class="fas fa-sign-out-alt">Logout</button> 
          </form>
          </a>
        </div>
      </li>
    </ul>
</nav>