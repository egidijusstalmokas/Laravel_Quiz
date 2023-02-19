    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="xl-show mr-3 border border-light rounded p-2" data-toggle="modal" data-target="#leftmenu">
            <span class="navbar-toggler-icon "></span>
        </a>
        <a class="xl-show navbar-brand waves-effect" href="" target="_blank">
          <strong style="color:#71A894;">{{ $title->value }}</strong>
        </a>
         <a class="lg-show mr-3 border border-light rounded" data-toggle="modal" data-target="">
            <span class="fas fa-user-alt p-3"></span>
        </a>
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left -->
          <ul class="navbar-nav mr-auto">
          </ul>
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item mr-1">
              <a href="https://github.com/egidijusstalmokas/Laravel_Quiz" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fa-solid fa-circle-info mr-2"></i>GitHub
              </a>
            </li>
             <li class="nav-item">
              <a data-toggle="modal" data-target="#userMenu" class="nav-link border border-light rounded waves-effect">
                <i class="fas fa-user-alt p-1"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @include('admin.layouts.modals.user_menu')
    <!-- Navbar -->