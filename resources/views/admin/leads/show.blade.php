@extends('admin.layouts.main')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1">Lead Details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Leads</a></li>
                    <li class="breadcrumb-item active">{{ $lead->first_name }} {{ $lead->last_name }}</li>
                </ol>
            </nav>
        </div>
        <div>

            <form action="{{ route('admin.leads.call', $lead) }}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="btn btn-sm btn-info">Call</button>
</form>

    <button type="button" class="btn btn-outline-secondary me-2" data-bs-toggle="modal"
            data-bs-target="#editLeadModal{{ $lead->id }}">
        Edit
    </button>

<form action="{{ route('admin.lead.destroy', $lead) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this lead?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger">
         <i class="bi bi-trash"></i> Delete
    </button>
</form>


        </div>
    </div>

    <div class="row">
        <!-- Main Lead Information -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                             style="width: 60px; height: 60px; font-size: 24px; font-weight: 600;">
                            {{ strtoupper(substr($lead->first_name, 0, 1) . substr($lead->last_name, 0, 1)) }}
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="mb-1">{{ $lead->first_name }} {{ $lead->last_name }}</h3>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-primary">{{ $lead->lead_type }}</span>
                                <span class="badge bg-success">{{ $lead->status }}</span>
                                <span class="badge bg-info text-dark">{{ $lead->category }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="mb-4">
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-person-lines-fill me-2"></i>Contact Information
                        </h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center p-3 bg-light rounded">
                                    <i class="bi bi-telephone-fill text-primary fs-4 me-3"></i>
                                    <div>
                                        <small class="text-muted d-block">Phone Number</small>
                                        <strong>{{ $lead->phone_number }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center p-3 bg-light rounded">
                                    <i class="bi bi-envelope-fill text-primary fs-4 me-3"></i>
                                    <div>
                                        <small class="text-muted d-block">Email Address</small>
                                        <strong>{{ $lead->email ?? 'Not provided' }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location Information -->
                    <div class="mb-4">
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-geo-alt-fill me-2"></i>Location Details
                        </h5>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="p-3 bg-light rounded">
                                    <small class="text-muted d-block mb-1">Address</small>
                                    <strong>{{ $lead->address ?? 'No address provided' }}</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-light rounded">
                                    <small class="text-muted d-block mb-1">State</small>
                                    <strong>{{ $lead->state }}</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-light rounded">
                                    <small class="text-muted d-block mb-1">City</small>
                                    <strong>{{ $lead->city }}</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-light rounded">
                                    <small class="text-muted d-block mb-1">Zip Code</small>
                                    <strong>{{ $lead->zip_code }}</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="mb-4">
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-person-badge-fill me-2"></i>Personal Information
                        </h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded">
                                    <small class="text-muted d-block mb-1">Age</small>
                                    <strong>{{ $lead->age }} years old</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded">
                                    <small class="text-muted d-block mb-1">Date of Birth</small>
                                    <strong>{{ $lead->dob }}</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notes Section -->
                    @if($lead->notes)
                    <div>
                        <h5 class="text-primary mb-3">
                            <i class="bi bi-sticky-fill me-2"></i>Notes
                        </h5>
                        <div class="p-3 bg-light rounded">
                            <p class="mb-0">{{ $lead->notes }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Activity Timeline (Optional Enhancement) -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="text-primary mb-3">
                        <i class="bi bi-clock-history me-2"></i>Activity Timeline
                    </h5>
                    <div class="text-muted text-center py-4">
                        <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                        <p>No activities recorded yet</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Owner Information -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <h5 class="text-primary mb-3">
                        <i class="bi bi-person-check-fill me-2"></i>Lead Owner
                    </h5>
                    <div class="d-flex align-items-center p-3 bg-light rounded">
                        <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                             style="width: 45px; height: 45px;">
                            <i class="bi bi-person-fill fs-5"></i>
                        </div>
                        <div>
                            <strong class="d-block">{{ $lead->owner }}</strong>
                            <small class="text-muted">Account Owner</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <h5 class="text-primary mb-3">
                        <i class="bi bi-bar-chart-fill me-2"></i>Quick Stats
                    </h5>
                    <div class="mb-3 pb-3 border-bottom">
                        {{-- <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Lead Score</span>
                            <strong class="text-success">Hot</strong>
                        </div> --}}
                    </div>
                    <div class="mb-3 pb-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Interacted with</span>
                            <strong>{{ $lead->updated_at?->format('M d, Y') }}</strong>

                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-muted">Created</span>
                            <strong>{{ $lead->created_at?->format('M d, Y') }}</strong>
                        </div>
                        <small class="text-muted d-block mt-1">
                            {{ $lead->created_at?->diffForHumans() }}
                        </small>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="text-primary mb-3">
                        <i class="bi bi-lightning-fill me-2"></i>Quick Actions
                    </h5>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary text-start">
                            <i class="bi bi-telephone-fill me-2"></i>Call Lead
                        </button>
                        <button class="btn btn-outline-primary text-start">
                            <i class="bi bi-envelope-fill me-2"></i>Send Email
                        </button>
                        <button class="btn btn-outline-primary text-start">
                            <i class="bi bi-calendar-check-fill me-2"></i>Schedule Meeting
                        </button>
                        <button class="btn btn-outline-primary text-start">
                            <i class="bi bi-arrow-right-circle-fill me-2"></i>Convert to Client
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.components.edit_lead_modal')

<!-- Add Bootstrap Icons CDN to your layout if not already included -->
@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    .card {
        transition: transform 0.2s;
    }
    .card:hover {
        transform: translateY(-2px);
    }
    .badge {
        font-weight: 500;
        padding: 0.35em 0.65em;
    }
    .btn {
        transition: all 0.2s;
    }
</style>
@endpush
@endsection
