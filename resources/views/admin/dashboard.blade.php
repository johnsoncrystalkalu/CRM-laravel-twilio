@extends('admin.layouts.main')

@section('content')
<div class="container-fluid px-4 py-5">
    <div class="mb-5 d-flex justify-content-between align-items-end">
        <div>
            <h1 class="fw-extrabold text-dark tracking-tight mb-1" style="font-size: 2rem;">Welcome Back, <span class="text-primary">{{ Auth::user()->name }}</span></h1>
            <p class="text-muted mb-0">Overview of your lead performance and user metrics.</p>
        </div>
        <div class="d-none d-md-block">
            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill shadow-sm">
                <i class="far fa-calendar-alt me-2"></i>{{ date('M d, Y') }}
            </span>
        </div>
    </div>

<style>
    /* Premium Light Theme Overhaul */
    .stat-card {
        border-radius: 24px !important;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: 1px solid rgba(0,0,0,0.05) !important;
        overflow: hidden;
    }

    .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08) !important;
    }

    /* Soft Glass Accents */
    .glass-icon {
        width: 56px;
        height: 56px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 16px;
        margin-bottom: 1.5rem;
    }

    .recovery-light { 
        background-color: #f0fdf4; 
        color: #16a34a; 
    }
    .trading-light { 
        background-color: #eff6ff; 
        color: #2563eb; 
    }
    .profile-light { 
        background-color: #f8fafc; 
        color: #334155; 
    }

    /* Subtle Pattern Backgrounds */
    .card-pattern {
        position: absolute;
        top: -10%;
        right: -5%;
        font-size: 9rem;
        opacity: 0.04;
        transform: rotate(-10deg);
        pointer-events: none;
        transition: all 0.4s ease;
    }

    .stat-card:hover .card-pattern {
        transform: rotate(0deg) scale(1.1);
        opacity: 0.08;
    }

    .footer-link {
        transition: all 0.3s ease;
        font-weight: 600;
        letter-spacing: 0.3px;
    }

    .footer-link:hover {
        padding-right: 5px;
    }

    .count-text {
        letter-spacing: -1px;
        color: #1e293b;
    }
</style>

    <div class="row">
       

        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card stat-card border-0 shadow-sm bg-white h-100">
                <div class="card-body p-4 position-relative">
                    <i class="fas fa-chart-line card-pattern text-primary"></i>
                    
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="glass-icon trading-light">
                            <i class="fas fa-exchange-alt fs-4"></i>
                        </div>
                        <span class="badge rounded-pill text-primary bg-primary bg-opacity-10 px-3 py-2">Trading</span>
                    </div>

                    <h6 class="text-uppercase text-muted small fw-bolder mb-1">Trading Leads</h6>
                    <h2 class="display-5 fw-bold count-text mb-0">{{ $tradingLeadsCount }}</h2>
                </div>
                <div class="card-footer bg-light bg-opacity-50 border-0 py-3 px-4">
                    <a class="footer-link small text-primary text-decoration-none d-flex align-items-center justify-content-between stretched-link"
                        href="{{ route('admin.leads.category', ['category' => 'Trading']) }}">
                        <span>View Details</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card stat-card border-0 shadow-sm bg-white h-100">
                <div class="card-body p-4 position-relative">
                    <i class="fas fa-users card-pattern text-dark"></i>
                    
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="glass-icon profile-light">
                            <i class="fas fa-user-friends fs-4"></i>
                        </div>
                        <span class="badge rounded-pill text-dark bg-dark bg-opacity-10 px-3 py-2">System</span>
                    </div>

                    <h6 class="text-uppercase text-muted small fw-bolder mb-1">Total Profiles</h6>
                    <h2 class="display-5 fw-bold count-text mb-0">{{ $userCount }}</h2>
                </div>
                <div class="card-footer bg-light bg-opacity-50 border-0 py-3 px-4">
                    <a class="footer-link small text-dark text-decoration-none d-flex align-items-center justify-content-between stretched-link"
                     href="{{ route('admin.users.index') }}">
                        <span>Manage User Base</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection