<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="nav-item nav-category">
            <span class="nav-link">GENERAL</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="icon-speedometer menu-icon"></i>
            </a>
        </li>

        <li class="nav-item nav-category">
            <span class="nav-link">MASTER DATA</span>
        </li>
        <li class="nav-item">
            <a class="nav-link"
               data-toggle="collapse"
               href="#ui-basic"
               aria-expanded="false"
               aria-controls="ui-basic">
                <span class="menu-title">Genres</span>
                <i class="icon-layers menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('genres.create') }}">Add new</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('genres.index') }}">Collection</a>
                    </li>
                </ul>
            </div>
        </li>


    </ul>
</nav>