<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">

    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    @can('ver-usuario')
        <a class="nav-link" href="/usuarios">
            <i class=" fas fa-users"></i><span>Usuarios</span>
        </a>
    @endcan

    @can('ver-rol')
        <a class="nav-link" href="/roles">
            <i class=" fas fa-user-lock"></i><span>Roles</span>
        </a>
    @endcan

    @can('ver-slider')
        <a class="nav-link" href="/slider">
            <i class="fas  fa-images"></i><span>Carrusel</span>
        </a>
    @endcan
</li>
