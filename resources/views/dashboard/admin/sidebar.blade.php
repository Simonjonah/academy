<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/home') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/logo.jpeg') }}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light"><br>PRISCOR ADMIN </span>
    </a>
    
     
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/public/../'.Auth::guard('admin')->user()->images)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('admin/profile') }}" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/profile') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
      

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Courses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ url('admin/addcourses') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Courses</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('admin/viewcourses') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Courses</p>
                  </a>
                </li>

              </li>
            </ul>
          </li>
          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               

                <li class="nav-item">
                  <a href="{{ url('admin/addblog') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Blog</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('admin/viewblog') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Blog</p>
                  </a>
                </li>



                <li class="nav-item">
                  <a href="{{ url('admin/addtestimony') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Testimony</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('admin/viewtestimony') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Vieew Testimony</p>
                  </a>
                </li>

              </li>
            </ul>
          </li>
          


          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Students
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               

                <!-- <li class="nav-item">
                  <a href="{{ url('admin/addteam') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Team</p>
                  </a>
                </li> -->

                <li class="nav-item">
                  <a href="{{ url('admin/viewteam') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Students</p>
                  </a>
                </li>

              </li>
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Contact Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
            

              <li class="nav-item">
                <a href="{{ url('admin/viewcontact') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact</p>
                </a>
              </li>

              
              <li class="nav-item">
                <a href="{{ url('admin/viewcontactme') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Enquires</p>
                </a>
              </li>
            </li>
            </ul>
          </li>

      
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Logout
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
           
            </ul>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
