<!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->

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
                    <a href="{{ route('product') }}" class="nav-link">
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