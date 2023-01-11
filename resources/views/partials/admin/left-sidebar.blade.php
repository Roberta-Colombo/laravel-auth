<section class="sidebar">
    <header class="d-flex d-flex align-items-start">
        <div class="fw-bold d-flex align-items-center">
            <i class="fa-solid fa-unlock-keyhole"></i>
            <div class="ms-2">My Projects</div>
        </div>
    </header>

    <nav>
        <ul class="nav flex-column">
            <li class="nav-item"> <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'my-active' : '' }}" href="{{route('admin.dashboard')}}">
                <i class="fa-solid fa-chart-line me-2"></i> Dashboard
            </a></li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'admin.projects.index' ? 'my-active' : '' }}" href="{{route('admin.projects.index')}}">
                    <i class="fa-regular fa-window-restore me-2"></i> Works
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-laptop-code me-2"></i> Stacks
                </a>
            </li>
        </ul>
    </nav>
   
</section>