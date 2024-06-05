    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/dist/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          Selamat Datang, {{ auth()->user()->name }}
          </a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-header">MASTER DATA</li>
          <li class="nav-item">
            <a href="/admin/kamar" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Data Kamar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/user" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Data User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/fasilitashotel" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Fasilitas Hotel</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
