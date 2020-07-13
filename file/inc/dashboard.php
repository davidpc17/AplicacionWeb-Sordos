
<!-- begin of navbar -->
<nav class="navbar  is-transparent navbar-style is-capitalized is-fixed-top ">
       <div class="container is-fluid">
            <div class="navbar-brand">
                <a href="admin.php" class="navbar-item">
                    <img src="img/logo.png" alt="bulmin logo">
                </a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="sidebarNav">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="#" class="navbar-link is-arrowless">
                            <span class="icon is-medium">
                                <i class="far fa-bell fa-lg"></i>
                            </span>
                            <span class="has-badge">
                                <span class="badge">9999</span>
                            </span>
                        </a>
                        <div class="navbar-dropdown is-boxed">
                            <a href="#" class="dropdown-item">@from: Some One</a>
                            <a href="#" class="navbar-item">@from: Some One</a>
                            <a href="#" class="navbar-item">@from: Some One</a>
                            <a href="#" class="navbar-item">@from: Some One</a>
                            <a href="#" class="navbar-item">@from: Some One</a>
                            <hr class="dropdown-divider">
                            <a href="#" class="navbar-item">see all</a>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="#" class="navbar-link is-arrowless">
                            <span class="icon is-medium">
                                <i class="far fa-envelope fa-lg"></i>
                            </span>
                            <span>messages</span>
                            <span class="has-badge">
                                <span class="badge">9999</span>
                            </span> 
                        </a>
                        <div class="navbar-dropdown is-boxed">
                            <a href="#" class="dropdown-item">@from: Some One</a>
                            <a href="#" class="navbar-item">@from: Some One</a>
                            <a href="#" class="navbar-item">@from: Some One</a>
                            <a href="#" class="navbar-item">@from: Some One</a>
                            <a href="#" class="navbar-item">@from: Some One</a>
                            <hr class="dropdown-divider">
                            <a href="#" class="navbar-item">see all</a>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="#" class="navbar-link is-arrowless">
                            <img src="img/bg-01.jpg" class="image is-32x32 is-fit-image-rounded">
                        </a>
                        <div class="navbar-dropdown is-boxed is-right">
                            <div class="dropdown-item is-uppercase">
                                <p>User Setting</p>
                            </div>
                            <hr class="dropdown-divider">
                            <a href="#" class="navbar-item">profile</a>
                            <a href="#" class="navbar-item">biodata</a>
                            <hr class="dropdown-divider">
                            <div class="dropdown-item is-uppercase">
                                <p>account Setting</p>
                            </div>
                            <hr class="dropdown-divider">
                            <a href="#" class="navbar-item">change password</a>
                            <a href="#" class="navbar-item">verify account</a>
                            <hr class="dropdown-divider">
                            <a href="#" class="navbar-item">logout</a>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </nav>
    <!-- end of navbar -->
        <!-- end of navbar -->
     <!-- start of sidebar -->
     <div class="sidebar">
        <div class="sidebar-menu">
            <div class="menu">
                <ul class="menu-list">
                    <li>
                    <a href="admin.php">
                    <button class="button is-block is-danger is-fullwidth">
                    <span class="icon">
                                <i class="fab fa-slack"></i>
                            </span>
                            <span>
                                Dashboard
                            </span>
                        </button>
                    </a>                   
                    </li>
                </ul>
                <p class="menu-label">
                    Administracion
                </p>
                <hr class="dropdown-divider">
                <ul class="menu-list">
                    <li class="has-list-child">
                        <a>
                            <span class="icon">
                                <i class="fas fa-users"></i>
                            </span>
                            <span>Usuarios</span>
                            <span class="icon is-pulled-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                        <ul>
                            <li><a href="user.php">Insertar</a></li>
                            <li><a href="/register.html">Listar</a></li>
                        </ul>
                    </li>
                    <li class="has-list-child">
                        <a>
                            <span class="icon">
                                <i class="fas fa-list-ul"></i>
                            </span>
                            <span>Preguntas</span>
                            <span class="icon is-pulled-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                        <ul>
                            <li>
                                <a href="/widget.html">Widget</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end of sidebar -->