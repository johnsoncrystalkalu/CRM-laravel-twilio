@extends('admin.layouts.main')

@section('content')
<div class="container-fluid px-4 py-4" style="background-color: #f8f9fa; min-height: 100vh;">

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center py-3">
            <div class="d-flex align-items-center">
                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center shadow-sm"
                     style="width: 50px; height: 50px; font-size: 20px; font-weight: 600;">
                    {{ strtoupper(substr($lead->first_name, 0, 1) . substr($lead->last_name, 0, 1)) }}
                </div>
                <div class="ms-3">
                    <h4 class="mb-0 fw-bold">{{ $lead->first_name }} {{ $lead->last_name }}</h4>
                    <span class="badge rounded-pill bg-light text-primary border border-primary">{{ $lead->status }}</span>
                    <span class="text-muted ms-2 small"><i class="bi bi-clock me-1"></i>Interacted with {{ $lead->updated_at?->diffForHumans() }}</span>
                </div>
            </div>
            <div class="d-flex gap-2">
                <form action="{{ route('admin.leads.call', $lead) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success px-4 shadow-sm">
                        <i class="bi bi-telephone-outbound-fill me-2"></i>Call Now
                    </button>
                </form>

                <button type="button" class="btn btn-white border shadow-sm" data-bs-toggle="modal" data-bs-target="#editLeadModal{{ $lead->id }}">
                    <i class="bi bi-pencil-square me-1"></i> Edit
                </button>

                <form action="{{ route('admin.lead.destroy', $lead) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger shadow-sm">
                         <i class="bi bi-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-bottom py-3">
                    <h5 class="mb-0 fw-bold text-dark">Lead Overview</h5>
                </div>
                <div class="card-body p-4">
                    <div class="row mb-4">
                        <div class="col-sm-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold mb-1">Email Address</label>
                            <div class="d-flex align-items-center">
                                <span class="text-dark fw-medium">{{ $lead->email ?? 'N/A' }}</span>
                                @if($lead->email)
                                    <a href="mailto:{{ $lead->email }}" class="ms-2 text-primary"><i class="bi bi-envelope"></i></a>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold mb-1">Phone Number</label>
                            <div class="d-flex align-items-center">
                                <span class="text-dark fw-medium">{{ $lead->phone_number }}</span>
                                <i class="bi bi-patch-check-fill text-success ms-2" title="Verified"></i>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold mb-1">Lead Type</label>
                            <div><span class="badge bg-soft-primary text-primary">{{ $lead->lead_type }}</span></div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="text-muted small text-uppercase fw-bold mb-1">Category</label>
                            <div><span class="badge bg-soft-info text-info">{{ $lead->category }}</span></div>
                        </div>
                    </div>

                    <hr class="opacity-10">

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <h6 class="fw-bold mb-3"><i class="bi bi-geo-alt me-2 text-primary"></i>Location</h6>
                            <p class="text-dark mb-1">{{ $lead->address ?? 'No address' }}</p>
                            <p class="text-muted small">{{ $lead->city }}, {{ $lead->state }} {{ $lead->zip_code }}</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h6 class="fw-bold mb-3"><i class="bi bi-person me-2 text-primary"></i>Demographics</h6>
                            <p class="text-dark mb-1"><strong>Age:</strong> {{ $lead->age }} years old</p>
                            <p class="text-dark"><strong>DOB:</strong> {{ $lead->dob }}</p>
                        </div>
                    </div>

                    @if($lead->notes)
                    <div class="bg-light p-3 rounded border-start border-primary border-4">
                        <h6 class="fw-bold small text-uppercase">Internal Notes</h6>
                        <p class="mb-0 text-secondary italic">"{{ $lead->notes }}"</p>
                    </div>
                    @endif
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-bottom py-3">
                    <h5 class="mb-0 fw-bold text-dark">Recent Activity</h5>
                </div>
                <div class="card-body p-4">
                    <div class="text-center py-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/5058/5058379.png" width="60" class="mb-3 opacity-50" alt="empty">
                        <p class="text-muted">No interactions logged for this lead yet.</p>
                        <button class="btn btn-sm btn-outline-primary">Log Activity</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4 text-white" style="background: linear-gradient(45deg, #0d6efd, #00d2ff);">
                <div class="card-body p-4 text-center">
                    <div class="small text-uppercase opacity-75 mb-1">Lead</div>
                    <h2 class="fw-bold mb-0">Profile</h2>
                    <div class="mt-3 small">Created {{ $lead->created_at?->format('F d, Y') }}</div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Quick Actions</h6>
                    <div class="d-grid gap-2">
                        <button class="btn btn-light text-start border"><i class="bi bi-envelope me-2 text-primary"></i> Send Email</button>
                        <button class="btn btn-light text-start border"><i class="bi bi-calendar-event me-2 text-primary"></i> Schedule Follow-up</button>
                        <button class="btn btn-light text-start border"><i class="bi bi-send me-2 text-primary"></i> SMS Message</button>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Ownership</h6>
                    <div class="d-flex align-items-center">
                        <div class="bg-soft-secondary rounded p-2 me-3">
                            <i class="bi bi-shield-check text-secondary fs-4"></i>
                        </div>
                        <div>
                            <p class="mb-0 fw-bold">{{ $lead->owner }}</p>
                            <p class="mb-0 small text-muted">Assigned Account Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.components.edit_lead_modal')

<style>
    /* Custom Badge Styles */
    .bg-soft-primary { background-color: #e7f0ff; color: #0d6efd; }
    .bg-soft-info { background-color: #e0f7fa; color: #00acc1; }
    .bg-soft-secondary { background-color: #f1f3f5; color: #6c757d; }

    .btn-white { background: #fff; color: #333; }
    .btn-white:hover { background: #f8f9fa; }

    .card { border-radius: 12px; }
    label { letter-spacing: 0.5px; }

    /* Subtle Hover Effects */
    .btn { border-radius: 8px; font-weight: 500; }
</style>

@endsection
