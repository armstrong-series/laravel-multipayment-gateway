<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if(Auth::user()->role === 'regular')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.dashboard') }}">

                    <span class="menu-title">Dashboard &nbsp;<i class="fas fa-layer-group"></i></span>
                </a>
            </li>
        @endif

        @if(Auth::user()->role === 'admin' || Auth::user()->role === 'support')
            <li class="nav-item {{ $page == 'admin-dasboard' ? 'active' : '' }}"">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <span class="menu-title">Admin&nbsp; <i class="fas fa-user-secret"></i></span>
                </a>
            </li>
        @endif
        <li class="nav-item {{ $page == 'store' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('user.store.items') }}">
                <span class="menu-title">Store &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="20">
                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M0 192H640V128L544 0H96L0 128v64zM64 384V512H384V384 224H320V384H128V224H64V384zM512 512h64V224H512V512z"/>
                    </svg>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#advanced" aria-expanded="false" aria-controls="advanced">

                <span class="menu-title">Integration &nbsp;<i class="fas fa-microchip"></i></span>

            </a>
            <div class="collapse" id="advanced">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item {{ $page == 'payment-integration' ? 'active' : '' }}"> <a class="nav-link" href="{{ route('user.integrations.payment') }}">Payment &nbsp;<i class="fas fa-credit-card-blank"></i></a></li>

                </ul>
            </div>
        </li>

        @if(Auth::user()->role === 'admin' || Auth::user()->role === 'support')
            <li class="nav-item {{ $page == 'usermanagement' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.usermanagement') }}">
                <span class="menu-title">UserManagement &nbsp; <i class="fas fa-users"></i></span>
                </a>
            </li>
        @endif
    </ul>
</nav>
