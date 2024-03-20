<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{asset('./admin/style/main.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    @stack('css')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="{{asset('img/logo.svg')}}" alt="" class="my-4" style="max-width: 150px;" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="{{route('dashboard')}}"
              class="list-group-item list-group-item-action {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }} "
            >
              Dashboard
            </a>
            <a
              href="{{route('user')}}"
              class="list-group-item list-group-item-action {{ Route::currentRouteNamed('user') ? 'active' : '' }} "
            >
              Manajemen User
            </a>
            <a
            href="{{route('product')}}"
            class="list-group-item list-group-item-action {{ Route::currentRouteNamed('product') ? 'active' : '' }} "
          >
            Manajemen Produk
          </a>
          </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
                 Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                    >
                      <img
                        src="/images/icon-user.png"
                        alt=""
                        class="rounded-circle mr-2 profile-picture"
                      />
                      Selamat Datang,
                      {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="padding: 25px;">
                      <!-- Foto profil -->
                      <div style="text-align: center;">
                          <img src="{{asset('img/logo.svg')}}" alt="Profile Picture" style="width: 80px; height: 80px; border-radius: 50%; margin-bottom: 10px;  border: 2px solid #ccc;">
                          <div><p style="font-size: 14px">{{ Auth::user()->name }}</p> <p style="font-size: 10px">{{ Auth::user()->email }}</p></div>
                      </div>
                      <div class="dropdown-divider"></div>
                      <!-- Tombol Logout -->
                      <a href="{{route('logout')}}" class="dropdown-item text-danger text-center"><img src="{{asset('img/power.svg')}}" alt="">Logout</a>
                  </div>
                  
                  </li>
                </ul>

                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Hi, Admin
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          {{-- Content --}}
          @yield('content')

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('./admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('./admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
    <script>
      $("#datatable").DataTable();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    @stack('js')
  </body>
</html>
