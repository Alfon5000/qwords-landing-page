<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link @yield('dashboard-active')" href="/dashboard">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @yield('bootcamps-active')" href="/bootcamps">
          <span data-feather="code" class="align-text-bottom"></span>
          Bootcamps
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @yield('memberships-active')" href="/memberships">
          <span data-feather="credit-card" class="align-text-bottom"></span>
          Memberships
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @yield('visitors-active')" href="/visitors">
          <span data-feather="users" class="align-text-bottom"></span>
          Visitors
        </a>
      </li>
    </ul>
  </div>
</nav>
