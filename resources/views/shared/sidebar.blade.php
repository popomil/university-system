<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
<a href="/" class="brand-link">
  <img src="/images/logo-png.webp" alt="Logo" class="brand-image img-circle elevation-3"
       style="opacity: .8; background: white; padding: 2px;">
  <span class="brand-text font-weight-bold text-light"><span class="text-primary">System University</span></span>
</a>


  <!-- Sidebar -->
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Dashboard -->
        <li class="nav-item">
          <a href="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Doctors -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-md"></i>
            <p>
              Doctors
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/doctors/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Doctor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('doctors.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Doctors</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Students -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-graduate"></i>
            <p>
              Students
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/students/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Student</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/students" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Students</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Departments -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-building"></i>
            <p>
              Departments
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/departments/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Department</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/departments" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Departments</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Courses -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Courses
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/courses/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Course</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/courses" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Courses</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Employees -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Employees
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/employees/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Employee</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/employees" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Employees</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
  </div>
</aside>

