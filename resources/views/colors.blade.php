
@extends("template/template")
@section('title')
Dashboard
@endSection()
@section('content')
@section('bodyclass')
class="c-app"
@endsection
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="index.html">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard<span class="badge badge-info">NEW</span></a></li>
        <li class="c-sidebar-nav-title">Theme</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="colors.html">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
            </svg> Colors</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="typography.html">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Typography</a></li>
        <li class="c-sidebar-nav-title">Components</li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
            </svg> Base</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/breadcrumb.html"><span class="c-sidebar-nav-icon"></span> Breadcrumb</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/cards.html"><span class="c-sidebar-nav-icon"></span> Cards</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/carousel.html"><span class="c-sidebar-nav-icon"></span> Carousel</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/collapse.html"><span class="c-sidebar-nav-icon"></span> Collapse</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/forms.html"><span class="c-sidebar-nav-icon"></span> Forms</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/jumbotron.html"><span class="c-sidebar-nav-icon"></span> Jumbotron</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/list-group.html"><span class="c-sidebar-nav-icon"></span> List group</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/navs.html"><span class="c-sidebar-nav-icon"></span> Navs</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/pagination.html"><span class="c-sidebar-nav-icon"></span> Pagination</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/popovers.html"><span class="c-sidebar-nav-icon"></span> Popovers</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/progress.html"><span class="c-sidebar-nav-icon"></span> Progress</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/scrollspy.html"><span class="c-sidebar-nav-icon"></span> Scrollspy</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/switches.html"><span class="c-sidebar-nav-icon"></span> Switches</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tables.html"><span class="c-sidebar-nav-icon"></span> Tables</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tabs.html"><span class="c-sidebar-nav-icon"></span> Tabs</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tooltips.html"><span class="c-sidebar-nav-icon"></span> Tooltips</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
            </svg> Buttons</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span class="c-sidebar-nav-icon"></span> Buttons</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/button-group.html"><span class="c-sidebar-nav-icon"></span> Buttons Group</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/dropdowns.html"><span class="c-sidebar-nav-icon"></span> Dropdowns</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/brand-buttons.html"><span class="c-sidebar-nav-icon"></span> Brand Buttons</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="charts.html">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
            </svg> Charts</a></li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
            </svg> Icons</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-success">Free</span></a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg> Notifications</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/alerts.html"><span class="c-sidebar-nav-icon"></span> Alerts</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/badge.html"><span class="c-sidebar-nav-icon"></span> Badge</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/modals.html"><span class="c-sidebar-nav-icon"></span> Modals</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="widgets.html">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
            </svg> Widgets<span class="badge badge-info">NEW</span></a></li>
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">Extras</li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
            </svg> Pages</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="login.html" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Login</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="register.html" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Register</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="404.html" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                </svg> Error 404</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="500.html" target="_top">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                </svg> Error 500</a></li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item mt-auto"><a class="c-sidebar-nav-link c-sidebar-nav-link-success" href="https://coreui.io" target="_top">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
            </svg> Download CoreUI</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="https://coreui.io/pro/" target="_top">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
            </svg> Try CoreUI<strong>PRO</strong></a></li>
      </ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
    <div class="c-wrapper c-fixed-components">
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
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
              </svg></a></li>
          <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
              <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg> Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg> Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                </svg> Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                </svg> Comments<span class="badge badge-warning ml-auto">42</span></a>
              <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                </svg> Profile</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                </svg> Settings</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                </svg> Projects<span class="badge badge-primary ml-auto">42</span></a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                </svg> Lock Account</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Logout</a>
            </div>
          </li>
        </ul>
        <div class="c-subheader px-3">
          <!-- Breadcrumb-->
          <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            <!-- Breadcrumb Menu-->
          </ol>
        </div>
      </header>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
              <div class="card">
                <div class="card-header"> Theme colors</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-primary theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Primary Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-secondary theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Secondary Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-success theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Success Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-danger theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Danger Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-warning theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Warning Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-info theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Info Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-light theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Light Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-dark theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Brand Dark Color</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header"> Grays</div>
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-100 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 100 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-200 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 200 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-300 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 300 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-400 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 400 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-500 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 500 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-600 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 600 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-700 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 700 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-800 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 800 Color</h6>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-4">
                      <div class="bg-gray-900 theme-color w-75 rounded mb-2" style="padding-top:75%"></div>
                      <h6>Gray 900 Color</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <footer class="c-footer">
          <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
          <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
      </div>
    </div>
@endsection