<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"><span class="btn btn-primary">CODE|5</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        @if( $pos == 'Home')
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="btn btn-primary" href="{{ url('/register') }}">DAFTAR SEKARANG !</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">TENTANG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">SERVIS KAMI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">PORTOFOLIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">KONTAK KAMI</a>
            </li>
          </ul>
        @endif
        </div>
    </div>
</nav>