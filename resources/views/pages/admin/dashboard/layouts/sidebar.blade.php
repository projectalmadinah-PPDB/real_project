{{-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="icon-columns menu-icon"></i>
        <span class="menu-title">Form elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="icon-bar-graph menu-icon"></i>
        <span class="menu-title">Charts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Tables</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="icon-contract menu-icon"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
        <i class="icon-ban menu-icon"></i>
        <span class="menu-title">Error pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="error">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/documentation/documentation.html">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
  </ul>
</nav>--}}
<div class="sidebar">
  <div class="scrollbar-inner sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="assets/img/profile.jpg">
      </div>
      <div class="info">
        <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
          <span>
            {{Auth::user()->name}}
            <span class="user-level">{{Auth::user()->role}}</span>
            <span class="caret"></span>
          </span>
        </a>
        <div class="clearfix"></div>

        <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
          <ul class="nav">
            <li>
              <a href="#profile">
                <span class="link-collapse">My Profile</span>
              </a>
            </li>
            <li>
              <a href="#edit">
                <span class="link-collapse">Edit Profile</span>
              </a>
            </li>
            <li>
              <a href="#settings">
                <span class="link-collapse">Settings</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="nav">
      <li class="nav-item {{Route::is('admin.admin.dashboard') ? 'active' : '' }}">
        <a href="{{route('admin.admin.dashboard')}}">
          <i class="bi bi-bar-chart"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{Route::is('admin.biodata.*') ? 'active' : '' }}">
        <a href="{{route('admin.biodata.index')}}">
          <i class="bi bi-server"></i>
          <p>Pendaftaran</p>
        </a>
      </li>
      <li class="nav-item {{Route::is('admin.pendaftaran.*') ? 'active' : '' }}">
        <a href="{{route('admin.pendaftaran.index')}}">
          <i class="bi bi-receipt-cutoff"></i>
          <p>Data Valid</p>
        </a>
      </li>
      <li class="nav-item {{Route::is('admin.lolos.index') ? 'active' : '' }}">
        <a href="{{route('admin.lolos.index')}}">
          <i class="bi bi-reply-all"></i>
          <p>Lolos</p>
        </a>
      </li>
      <li class="nav-item {{Route::is('admin.document.*') ? 'active' : '' }}">
        <a href="{{route('admin.document.index')}}">
          <i class="bi bi-files"></i>
          <p>Document</p>
        </a>
      </li>
      <li class="nav-item {{Route::is('admin.article.index') ? 'active' : '' }}">
        <a href="{{route('admin.article.index')}}">
          <i class="bi bi-file-earmark-text"></i>
          <p>Article</p>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a href="tables.html">
          <i class="la la-th"></i>
          <p>Tables</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="notifications.html">
          <i class="la la-bell"></i>
          <p>Notifications</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="typography.html">
          <i class="la la-font"></i>
          <p>Typography</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="icons.html">
          <i class="la la-fonticons"></i>
          <p>Icons</p>
        </a>
      </li>
      <li class="nav-item update-pro">
        <button  data-toggle="modal" data-target="#modalUpdate">
          <i class="la la-hand-pointer-o"></i>
          <p>Update To Pro</p>
        </button>
      </li> --}}
    </ul>
  </div>
</div>
            