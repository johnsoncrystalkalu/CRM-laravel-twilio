 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Dashboard
                            </a>


                            <a class="nav-link" href="{{ route('admin.leads.category', 'recovery') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Recovery Leads
                            </a>

                            <a class="nav-link" href="{{ route('admin.leads.category', 'trading') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-user"></i></div>
                                Trading Leads
                            </a>

                            <a class="nav-link" href="{{ route('admin.calendar') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-calendar-alt"></i></div>
                                Calendar
                            </a>

                            <a class="nav-link" href="{{ route('admin.dialer') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-phone-alt"></i></div>
                                Dailer
                            </a>

                            <a class="nav-link" href="{{ route('admin.calls') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-phone-alt"></i></div>
                                Calls
                            </a>

                            <a class="nav-link" href="{{ route('admin.calendar') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-user-alt"></i></div>
                                Profile
                            </a>





                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
