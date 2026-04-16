<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Gestion Hôtelière</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('vendor/adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Gestion des Clients -->
                <li class="nav-item {{ request()->routeIs('clients.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('clients.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Clients
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('clients.index') }}" class="nav-link {{ request()->routeIs('clients.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Liste des clients</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('clients.create') }}" class="nav-link {{ request()->routeIs('clients.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nouveau client</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Gestion des Chambres -->
                <li class="nav-item {{ request()->routeIs('chambres.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('chambres.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Chambres
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('chambres.index') }}" class="nav-link {{ request()->routeIs('chambres.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Liste des chambres</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('chambres.create') }}" class="nav-link {{ request()->routeIs('chambres.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nouvelle chambre</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Réservations -->
                <li class="nav-item {{ request()->routeIs('reservations.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('reservations.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>
                            Réservations
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('reservations.index') }}" class="nav-link {{ request()->routeIs('reservations.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Toutes les réservations</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('reservations.create') }}" class="nav-link {{ request()->routeIs('reservations.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nouvelle réservation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('reservations.calendar') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Calendrier</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Paiements -->
                <li class="nav-item">
                    <a href="{{ route('paiements.index') }}" class="nav-link {{ request()->routeIs('paiements.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>Paiements</p>
                    </a>
                </li>

                <!-- Facturation -->
                <li class="nav-item">
                    <a href="{{ route('factures.index') }}" class="nav-link {{ request()->routeIs('factures.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>Facturation</p>
                    </a>
                </li>

                <!-- Restauration -->
                <li class="nav-item">
                    <a href="{{ route('restaurations.index') }}" class="nav-link {{ request()->routeIs('restaurations.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-utensils"></i>
                        <p>Restauration</p>
                    </a>
                </li>

                <!-- Rapports -->
                <li class="nav-item {{ request()->routeIs('rapports.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Rapports
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('rapports.occupation') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Taux d'occupation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rapports.financier') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Financier</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>