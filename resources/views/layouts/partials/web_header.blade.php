<header>
  <nav class="navbar navbar-expand-lg header fixed-top ">
      <div class="container-lg">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset($content->logo) }}" alt="" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{@($pageName == 'home')? 'active' : ''}} px-3 text-uppercase" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{@($pageName == 'product')? 'active' : ''}} px-3 text-uppercase" href="{{ route('product') }}">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{@($pageName == 'about')? 'active':''}} px-3 text-uppercase" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{@($pageName == 'management')? 'active':''}} px-3 text-uppercase" href="{{ route('management') }}">Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{@($pageName == 'gallery')? 'active':''}} px-3 text-uppercase" href="{{ route('gallery') }}">Photos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{@($pageName == 'video')? 'active':''}} px-3 text-uppercase" href="{{ route('video') }}">Videos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ @($pageName == 'news')? 'active' : '' }} px-3 text-uppercase" href="{{ route('news') }}">News & Offers</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link px-3 text-uppercase" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
            </li> --}}
          </ul>
        </div>
      </div>
  </nav>
</header>