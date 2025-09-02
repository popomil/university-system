  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">
     <a class="navbar-brand fw-bold" href="#">System University</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          
          <!-- Doctors -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Doctors
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('doctors.create') }}">Add Doctor</a></li>
              <li><a class="dropdown-item" href="{{ route('doctors.index') }}">List Doctors</a></li>
              <li><a class="dropdown-item" href="#">Update Doctors</a></li>
            </ul>
          </li>

          <!-- Students -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Students
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Add Student</a></li>
              <li><a class="dropdown-item" href="#">List Students</a></li>
              <li><a class="dropdown-item" href="#">Update Students</a></li>
            </ul>
          </li>

          <!-- Courses -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Courses
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('courses.create') }}">Add Course</a></li>
              <li><a class="dropdown-item" href="{{ route('courses.index') }}">List Courses</a></li>
              <li><a class="dropdown-item" href="#">Update Courses</a></li>
            </ul>
          </li>

          <!-- Departments -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Departments
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Add Department</a></li>
              <li><a class="dropdown-item" href="#">List Departments</a></li>
              <li><a class="dropdown-item" href="#">Update Departments</a></li>
            </ul>
          </li>

          <!-- Employees -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Employees
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Add Employee</a></li>
              <li><a class="dropdown-item" href="#">List Employees</a></li>
              <li><a class="dropdown-item" href="#">Update Employees</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>