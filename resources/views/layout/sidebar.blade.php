<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/">UD. Sulfi Jaya</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/">SJ</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item">
            <a href="/" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="nav-item dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-archive"></i><span>Product</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ URL::to('/admin/jenis') }}" class="nav-link">Jenis Produk</a></li>
              <li><a href="{{ URL::to('/admin/produk') }}" class="nav-link">Produk</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-cash-register"></i><span>Transaksi</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ URL::to('/jenisproduk') }}" class="nav-link">Jenis Produk</a></li>
              <li><a href="{{ URL::to('/Produk') }}" class="nav-link">Produk</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-cash-register"></i><span>Data</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ URL::to('/admin/customer') }}" class="nav-link">customer</a></li>
              <li><a href="{{ URL::to('Produk') }}" class="nav-link">Produk</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-receipt"></i><span>History</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ URL::to('/jenisproduk') }}" class="nav-link">Jenis Produk</a></li>
              <li><a href="{{ URL::to('/Produk') }}" class="nav-link">Produk</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link"><i class="fa fa-power-off"></i><span>Sign Out</span></a>
          </li>
      </ul>
    </aside>
</div>