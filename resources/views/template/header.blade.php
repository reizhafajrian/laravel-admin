<?php
$data = Auth::user()

?>
<link rel="stylesheet" href="css/bar.css">

<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
  <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
    <svg class="c-icon c-icon-lg">
      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
    </svg>
  </button><a class="c-header-brand d-lg-none" href="#">
    <svg width="118" height="46" alt="CoreUI Logo">
      <use xlink:href="assets/brand/coreui.svg#full"></use>
    </svg></a>
  <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
    <svg class="c-icon c-icon-lg">
      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
    </svg>
  </button>
  <ul class="c-header-nav d-md-down-none">
    <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">{{$titleBar}}</a></li>
  </ul>
  <ul class="c-header-nav ml-auto mr-4">

    <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <div class="c-avatar"> {{ Auth::user()->email }}</div>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>

    </li>
  </ul>

</header>