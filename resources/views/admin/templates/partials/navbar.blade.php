<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"> 
              {{ auth()->user()->name }}
              </span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="btn btn-block btn-defult btn-flat">Sign out</a>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
                </form>
              </li>
            </ul>
            
      </li>
    
    </ul>
  </nav>