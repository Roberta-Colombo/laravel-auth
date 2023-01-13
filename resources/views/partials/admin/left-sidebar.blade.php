<section class="sidebar">
    <header>
        <div class="fw-bold d-flex justify-content-start  align-items-center mt-2">
            <i class="fa-solid fa-unlock-keyhole"></i>
            <div class="ms-2">My Projects</div>
        </div>
    </header>

    <nav>
        <ul class="nav flex-column mt-5">
            <li class="nav-item"> <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'my-active' : '' }}" href="{{route('admin.dashboard')}}">
                <i class="fa-solid fa-chart-line me-2"></i> Dashboard
            </a></li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'admin.projects.index' ? 'my-active' : '' }}" href="{{route('admin.projects.index')}}">
                    <i class="fa-regular fa-window-restore me-2"></i> Works
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'admin.project-types.index' ? 'my-active' : '' }}" href="{{route('admin.project-types.index')}}">
                    <i class="fa-solid fa-gears me-2"></i> Types
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'admin.technologies.index' ? 'my-active' : '' }}" href="{{route('admin.technologies.index')}}">
                    <i class="fa-solid fa-laptop-code me-2"></i> Stacks
                </a>
            </li>
        </ul>
    </nav>
</section>