<style>
.hov:hover {

    color: #F1C40F;
}

</style>

<div class="superNav border-bottom py-2 bg-light">
    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="home"><i class="fa-solid fa-shop me-2"></i> <strong>Dr.meat</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
                <div class="input-group">
                    <span class="border-warning input-group-text bg-warning text-white"><i
                            class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                    <button class="btn btn-warning text-white">Search</button>
                </div>
            </div>
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <div class="ms-auto d-none d-lg-block">
                    <div class="input-group">
                        <span class="border-warning input-group-text bg-warning text-white"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                        <button class="btn btn-warning text-white">Search</button>
                    </div>
                </div>
                <ul class="icon navbar-nav ms-auto  ">
                    <li class="nav-item">
                        <a class=" hov nav-link mx-2 text-uppercase active" aria-current="page" href="#">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class=" hov nav-link mx-2 text-uppercase" href="pro">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class=" hov nav-link mx-2 text-uppercase" href="contactus">contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class=" hov nav-link mx-2 text-uppercase" href="aboutus">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="Meat"><i
                            class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class=" hov nav-link mx-2 text-uppercase" href="loginForm">login</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="registerForm"><i
                                class="fa-solid fa-circle-user me-1"></i> signup</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>














    <!-- Navbar -->
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <!-- Container wrapper -->
    <div class="container ">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2" href="/">
        <img
          src="asset\img\regs.jpg"
          height="50"
          alt="The Doc"
          loading="lazy"
          style="margin-top: -1px;"
        />
      </a>

      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link text-light" href="aboutus">about us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="contactus">contact us</a>
                </li>
            </ul>
            <!-- Left links -->

            @guest
            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-link px-3 me-2 text-light">
                    <a class="nav-link text-light" href="login">login</a>
                </button>
                <button type="button" class="btn btn-primary me-3">
                    <a class="nav-link text-light" href="registration">Sign up for free</a>

                </button>
            </div>
            @else
            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-link px-3 me-2 text-light">
                    <a class="nav-link text-light" href="/">logout</a>
                </button>
        </div>

        @endguest
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar --> --}}
