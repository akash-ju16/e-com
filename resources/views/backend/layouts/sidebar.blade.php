<!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('logout') }}" class="d-block">Pierce/Logout</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!--setting section -->
          <li class="nav-header">SETTINGS</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Banner
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
              Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('category') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('subcategory') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sub category</p>
                    </a>
                  </li>
                </ul>
          </li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
              Attributes
              </p>
            </a>
          </li> 



          <!--product section -->
          <li class="nav-header">PRODUCT SECTION</li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('newproduct') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add New</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/profile.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/e-commerce.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Bulk import</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/projects.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Bulk export</p>
                    </a>
                  </li>
                </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Order
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/examples/invoice.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/profile.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pending</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/e-commerce.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Confirm</p>
                      </a>
                    </li>
                  </ul>
          </li>


          <!--customer section -->
          <li class="nav-header">CUSTOMER SECTION</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Customer List
              </p>
            </a>
          </li> 

          <!--report section -->
          <li class="nav-header">REPORT AND ANALYTICS</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Report</p>
            </a>
          </li> 



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->