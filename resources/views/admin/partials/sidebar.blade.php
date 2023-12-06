<aside class="bg-dark">
    <nav>
        <ul>
            <li >
                <a href="{{route('admin.home')}}" @class(['active'=> Route::is('admin.home') ])>Dashboard</a>
            </li>
            <li>
                <a href="{{route('admin.technologies.index')}}" @class(['active'=>Route::is('admin.technologies.index') ])>Lista Technologie</a>
            </li>
            <li >
                <a href="{{route('admin.technologies.create')}}" @class(['active'=> Route::is('admin.technologies.create') ])>Crea Technologie</a>
            </li>
            <li >
                <a href="{{route('admin.projects.index')}}" @class(['active'=> Route::is('admin.projects.index') ])>Lista Progetti</a>
            </li>
            <li >
                <a href="{{route('admin.projects.create')}}" @class(['active'=> Route::is('admin.projects.create') ])>Crea Progetti</a>
            </li>
        </ul>
    </nav>
</aside>
