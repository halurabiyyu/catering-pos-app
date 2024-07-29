<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.dashboard')}}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="{{route('level.index')}}" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Daftar Level</span>
        {{-- <i class="menu-arrow"></i> --}}
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="{{route('user.index')}}" aria-expanded="false" aria-controls="form-elements">
        {{-- <i class="icon-columns menu-icon"></i> --}}
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">Daftar Users</span>
        {{-- <i class="menu-arrow"></i> --}}
      </a>
      {{-- <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="../pages/forms/basic_elements.html">Basic Elements</a></li>
        </ul>
      </div> --}}
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="{{route('kategori.index')}}" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Daftar Kategori</span>
        {{-- <i class="menu-arrow"></i> --}}
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="{{route('food.index')}}" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Daftar Makanan</span>
        {{-- <i class="menu-arrow"></i> --}}
      </a>
    </li>
  </ul>
</nav>