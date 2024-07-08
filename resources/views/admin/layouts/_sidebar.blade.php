  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ url('public/frontend/images/ilogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Home Site</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('public/frontend/images/ilogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Applight</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="{{ url('admin/dashboard') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

              <li class="nav-item">
                <a href="{{ url('admin/dashboard') }}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/home') }}" class="nav-link @if(Request::segment(2) == 'home') active @endif">
                  <i class="nav-icon fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/about') }}" class="nav-link @if(Request::segment(2) == 'about') active @endif">
                  <i class="nav-icon fas fa-info-circle"></i>
                  <p>About</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/watch') }}" class="nav-link @if(Request::segment(2) == 'watch') active @endif">
                  <i class="nav-icon fas fa-video"></i>
                  <p>Watch Now</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/features') }}" class="nav-link @if(Request::segment(2) == 'features') active @endif">
                  <i class="nav-icon fas fa-key"></i>
                  <p>Features</p>
                </a>
              </li>
              {{-- Team Section Dropdown --}}
              <li class="nav-item">
                <a href="javascript:;" class="nav-link @if(Request::segment(2) == 'ourteam') active @endif">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Our Team<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/ourteam/sectioninfo') }}" class="nav-link @if(Request::segment(3) == 'sectioninfo') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Section Info</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('admin/ourteam/member/list') }}" class="nav-link @if(Request::segment(3) == 'member') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Team Members</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- Testimonials Section Dropdown --}}
              <li class="nav-item">
                <a href="javascript:;" class="nav-link @if(Request::segment(2) == 'testimonial') active @endif">
                  <i class="nav-icon fas fa-quote-left"></i>
                  <p>Testimonials<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/testimonial/tstsectioninfo') }}" class="nav-link @if(Request::segment(3) == 'tstsectioninfo') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Section Info</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('admin/testimonial/message/list') }}" class="nav-link @if(Request::segment(3) == 'message') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Testimonials</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- FAQ Section Dropdown --}}
              <li class="nav-item">
                <a href="javascript:;" class="nav-link @if(Request::segment(2) == 'faq') active @endif">
                  <i class="nav-icon fas fa-question"></i>
                  <p>FAQ<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/faq/faqsectioninfo') }}" class="nav-link @if(Request::segment(3) == 'faqsectioninfo') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Section Info</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('admin/faq/faqbodyinfo/list') }}" class="nav-link @if(Request::segment(3) == 'faqbodyinfo') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Faq</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- Contact-US Section Dropdown --}}
              <li class="nav-item">
                <a href="javascript:;" class="nav-link @if(Request::segment(2) == 'contact') active @endif">
                  <i class="nav-icon fa fa-address-card"></i> 
                  <p>Contact<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/contact/contactsec') }}" class="nav-link @if(Request::segment(3) == 'contactsec') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Section Info</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('admin/contact/mail') }}" class="nav-link @if(Request::segment(3) == 'mail') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Mail List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('admin/contact/address') }}" class="nav-link @if(Request::segment(3) == 'address') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Address</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- Download Our App Dropdown --}}
              <li class="nav-item">
                <a href="javascript:;" class="nav-link @if(Request::segment(2) == 'download') active @endif">
                  <i class="nav-icon fas fa-download"></i>  
                  <p>Download App<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/download/dlsectioninfo') }}" class="nav-link @if(Request::segment(3) == 'dlsectioninfo') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Section Info</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('admin/download/applist') }}" class="nav-link @if(Request::segment(3) == 'applist') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Download List</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- Logo/Faveicon Dropdown --}}
              <li class="nav-item">
                <a href="javascript:;" class="nav-link @if(Request::segment(2) == 'mainlogo') active @endif">
                  <i class="nav-icon fa fa-image"></i>  
                  <p>Logo-Favicon<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('admin/mainlogo/logo') }}" class="nav-link @if(Request::segment(3) == 'logo') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Logo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('admin/mainlogo/favicon') }}" class="nav-link @if(Request::segment(3) == 'favicon') active @endif">
                      <i class="fas fa-caret-right nav-icon"></i>
                      <p>Favicon</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- Seo Section --}}
              <li class="nav-item">
                <a href="{{ url('admin/seo') }}" class="nav-link @if(Request::segment(2) == 'seo') active @endif">
                  <i class="nav-icon fa fa-book"></i>
                  <p>Seo</p>
                </a>
              </li>
              {{-- Footer Section --}}
              <li class="nav-item">
                <a href="{{ url('admin/footer') }}" class="nav-link @if(Request::segment(2) == 'footer') active @endif">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Footer</p>
                </a>
              </li>
              {{-- My UserAccount Section --}}
              <li class="nav-item">
                <a href="{{ url('admin/my_account') }}" class="nav-link @if(Request::segment(2) == 'my_account') active @endif">
                  <i class="nav-icon fas fa-user"></i> 
                  <p>User</p>
                </a>
              </li>
              {{-- Logout --}}
              <li class="nav-item">
                <a href="{{ url('logout') }}" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>