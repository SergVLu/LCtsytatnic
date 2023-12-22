<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="{{ route('admin.main.index') }}" class="nav-link">
        <i class="nav-icon fas fa-chart-pie text-default"></i>
        <p>
          Админка
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('admin.category') }}" class="nav-link">
        <i class="nav-icon far fa-images text-success"></i>
        <p>
          Categories
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('admin.tag') }}" class="nav-link">
        <i class="nav-icon fas fa-tags text-warning"></i>
        <p>
          Tags
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy text-info"></i>
        <p>Tsytates</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-comments text-danger"></i>
        <p>Comments</p>
      </a>
    </li>
  </ul>
</nav>