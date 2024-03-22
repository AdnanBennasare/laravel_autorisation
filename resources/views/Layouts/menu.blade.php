<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('projects.index') }}" class="nav-link {{ Request::is('projects') ? 'active' : '' }}">
        <i class="fa-solid fa-bars-progress mx-2"></i>
        <p>
            Projets
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('tasks.index') }}"
        class="nav-link {{ Request::is('tasks') || Request::is('task/*') ? 'active' : '' }}">
        <i class="fa-solid fa-list-check mx-2"></i>
        <p>
            Tâches
        </p>
    </a>
</li>
