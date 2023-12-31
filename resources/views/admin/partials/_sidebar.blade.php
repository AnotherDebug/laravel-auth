<aside>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">
            <i style="color: greenyellow" class="fa-solid fa-layer-group"></i>
            Boolfolio</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="{{ route('admin.home') }}" class="nav-link {{ Route::currentRouteName() == 'admin.home' ? 'active' : 'text-white' }}" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              <i class="fa-solid fa-chart-line me-1 {{ Route::currentRouteName() == 'admin.home' ? 'ad-green' : '' }}"></i>
               Dashboard
            </a>
          </li>
          <li>
            <a href="{{ route('admin.projects.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.projects.index' ? 'active' : 'text-white' }}">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              <i class="fa-solid fa-table-list me-1 {{ Route::currentRouteName() == 'admin.projects.index' ? 'ad-green' : '' }}"></i>
              Projects list
            </a>
          </li>
          <li>
            <a href="{{ route('admin.projects.create') }}" class="nav-link {{ Route::currentRouteName() == 'admin.projects.create' ? 'active' : 'text-white' }}">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              <i class="fa-solid fa-file-circle-plus me-1 {{ Route::currentRouteName() == 'admin.projects.create' ? 'ad-green' : '' }}"></i>
              Add new Project
            </a>
          </li>
          <li>
            <a href="{{ route('admin.technologies.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.technologies.index' ? 'active' : 'text-white' }}">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              <i class="fa-solid fa-table-list me-1 {{ Route::currentRouteName() == 'admin.technologies.index' ? 'ad-green' : '' }}"></i>
              Technologies List
            </a>
          </li>
          <li>
            <a href="{{ route('admin.type.index') }}" class="nav-link {{ Route::currentRouteName() == 'admin.type.index' ? 'active' : 'text-white' }}">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
              <i class="fa-solid fa-table-list me-1 {{ Route::currentRouteName() == 'admin.type.index' ? 'ad-green' : '' }}"></i>
              Types List
            </a>
          </li>
        </ul>
        {{-- <hr>
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
        </div> --}}
      </div>
</aside>
