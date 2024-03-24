<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">kimcil rebel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">KR</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ Request::is('home') || Request::is('users*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('home') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="{{ Request::is('users*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('users.index') }}">User Management</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ Request::is('doctor*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-users"></i>
                    Doctors
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('doctor') || Request::is('doctor/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('doctor.index') }}">Doctors</a>
                    </li>
                    <li class="{{ Request::is('doctor-schedule*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('doctor-schedule.index') }}">Schedule</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ Request::is('patient*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-users"></i>
                    Patients
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('patient') || Request::is('patient/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('patient.index') }}">Patient</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
