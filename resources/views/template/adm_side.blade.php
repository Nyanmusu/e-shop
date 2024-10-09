<div class="sidebarr d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="admin" class="nav-link text-white {{ Request::is('admin') ? 'active' : ''}}">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Users
        </a>
      </li>
      <li>
        <a href="Aproduct" class="nav-link text-white {{ Request::is('Aproduct') ? 'active' : ''}}">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Produk
        </a>
      </li>
      <li>
        <a href="Akategori" class="nav-link text-white {{ Request::is('Akategori') ? 'active' : ''}}">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Kategori
        </a>
      </li>
      <li>
        <a href="Aorder" class="nav-link text-white {{ Request::is('Aorder','AorderD') ? 'active' : ''}}">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Order
        </a>
      </li>
      <li>
        <a href="Logout" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Logout
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>

  </div>