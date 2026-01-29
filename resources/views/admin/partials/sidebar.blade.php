 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                       <div class="nav">
    <div class="sb-sidenav-menu-heading">Menu</div>

    <!-- Dashboard -->
    <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Dashboard
    </a>
   

    <!-- Trading Leads -->
    <a class="nav-link" href="{{ route('admin.leads.category', 'trading') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
      Trading Leads
    </a>

       

    <!-- Trading Leads -->
    <a class="nav-link" href="{{ route('admin.leads.category', 'referral') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
      Referral Leads
    </a>

    <!-- Calendar / Events -->
    <a class="nav-link" href="{{ route('admin.events') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
        Calendar
    </a>

    <!-- Dialer -->
    <a class="nav-link" href="{{ route('admin.dialer') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-phone"></i></div>
        Dialer
    </a>

    <!-- Calls -->
    <a class="nav-link" href="{{ route('admin.calls') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-phone-square-alt"></i></div>
        Calls
    </a>

    <!-- Profile -->
    <a class="nav-link" href="{{ route('admin.users.index', Auth::user()->id) }}">
        <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
        Profile
    </a>
</div>

                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
