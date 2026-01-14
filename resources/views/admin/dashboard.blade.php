@extends('admin.layouts.main')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="mb-4">
        <h1 class="fw-bold text-dark">Welcome Back, {{ Auth::user()->name }}</h1>
        <p class="text-muted">Here is what's happening with your leads today.</p>
    </div>


<style>
    /* Gradient Color Palettes */
    .recovery-gradient {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    }

    .trading-gradient {
        background: linear-gradient(135deg, #4361ee 0%, #4cc9f0 100%);
    }

    /* Card Styling */
    .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 20px !important;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }

    /* Transparent Shapes */
    .bg-white-transparent {
        background-color: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(5px);
    }

    .icon-shape {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Large Background Graphics */
    .card-icon-bg {
        position: absolute;
        right: -20px;
        bottom: -10px;
        font-size: 8rem;
        opacity: 0.15;
        transform: rotate(-15deg);
        pointer-events: none;
    }

    .card-footer {
        background-color: rgba(0, 0, 0, 0.05) !important;
    }
</style>

    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card stat-card border-0 shadow-sm recovery-gradient text-white h-100">
                <div class="card-body position-relative overflow-hidden">
                    <i class="fas fa-hand-holding-usd card-icon-bg"></i>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="icon-shape bg-white-transparent rounded-circle">
                            <i class="fas fa-undo-alt text-white fs-4"></i>
                        </div>
                        <span class="badge bg-white-transparent text-white px-3">Category: Recovery</span>
                    </div>

                    <h6 class="text-uppercase opacity-75 small fw-bold">Recovery Leads</h6>
                    <h2 class="display-6 fw-bold mb-0">{{ number_format($recoveryLeadsCount) }}</h2>
                </div>
                <div class="card-footer bg-transparent border-0 py-3">
                    <a class="small text-white text-decoration-none d-flex align-items-center justify-content-between stretched-link"
                        href="{{ route('admin.leads.category', ['category' => 'Recovery']) }}">
                        <span>View All Recovery Leads</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card stat-card border-0 shadow-sm trading-gradient text-white h-100">
                <div class="card-body position-relative overflow-hidden">
                    <i class="fas fa-chart-line card-icon-bg"></i>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="icon-shape bg-white-transparent rounded-circle">
                            <i class="fas fa-exchange-alt text-white fs-4"></i>
                        </div>
                        <span class="badge bg-white-transparent text-white px-3">Category: Trading</span>
                    </div>

                    <h6 class="text-uppercase opacity-75 small fw-bold">Trading Leads</h6>
                    <h2 class="display-6 fw-bold mb-0">{{ $tradingLeadsCount }}</h2>
                </div>
                <div class="card-footer bg-transparent border-0 py-3">
                    <a class="small text-white text-decoration-none d-flex align-items-center justify-content-between stretched-link"
                        href="{{ route('admin.leads.category', ['category' => 'Trading']) }}">
                        <span>View All Trading Leads</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card stat-card border-0 shadow-sm bg-dark text-white h-100">
                <div class="card-body position-relative overflow-hidden">
                    <i class="fas fa-users card-icon-bg"></i>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="icon-shape bg-white-transparent rounded-circle">
                            <i class="fas fa-user-friends text-white fs-4"></i>
                        </div>
                    </div>
                    <h6 class="text-uppercase opacity-75 small fw-bold">Total Calls</h6>
                    <h2 class="display-6 fw-bold mb-0">{{ $callCount }}</h2>
                </div>
                <div class="card-footer bg-transparent border-0 py-3">
                    <a class="small text-white text-decoration-none d-flex align-items-center justify-content-between"
                     href="{{ route('admin.calls') }}">
                        <span>Manage Calls</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
