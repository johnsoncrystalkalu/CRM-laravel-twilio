@extends('admin.layouts.main')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $category }} Leads</h1>

<form method="POST" action="{{ route('admin.leads.bulk-delete') }}">
@csrf

<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>
            <i class="fas fa-table me-1"></i>
            {{ $category }} Leads
        </div>

        <div class="d-flex gap-3">
             <!-- Add Lead Button -->
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addLeadModal">
            Add New Lead
        </button>

            <!-- Import Button -->
            <button type="button"
                    class="btn btn-success btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#importModal">
                Import XLSX
            </button>

            <!-- Bulk Delete -->
            <button type="submit"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Delete selected leads?')">
                Delete Selected
            </button>
        </div>
    </div>

    <div class="card-body">
        <table id="datatablesSimple" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th><input type="checkbox" id="select-all"></th>
                    <th>#No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Zip</th>
                    <th>Age</th>
                    <th>DOB</th>
                    <th>Lead Type</th>
                    <th>Status</th>
                    <th>Owner</th>
                    <th>Category</th>
                    <th>Notes</th>
                    <th>Created</th>
                    <th>Actions</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($leads as $lead)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $lead->id }}"></td>
                    <td>{{ $lead->id }}</td>
                    <td>{{ $lead->first_name }}</td>
                    <td>{{ $lead->last_name }}</td>
                    <td>{{ $lead->phone_number }}</td>
                    <td>{{ $lead->state }}</td>
                    <td>{{ $lead->city }}</td>
                    <td>{{ $lead->zip_code }}</td>
                    <td>{{ $lead->age }}</td>
                    <td>{{ $lead->dob }}</td>
                    <td>{{ $lead->lead_type }}</td>
                    <td>{{ $lead->status }}</td>
                    <td>{{ $lead->owner }}</td>
                    <td>{{ $lead->category }}</td>
                    <td>{{ $lead->notes }}</td>
                    <td>{{ $lead->created_at?->format('Y-m-d') }}</td>
                    <td>
    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
            data-bs-target="#editLeadModal{{ $lead->id }}">
        Edit
    </button><br/>

     <a href="{{ route('admin.leads.show', $lead) }}" class="btn btn-sm btn-success">
        View
    </a>
</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</form>
</div>

<!-- Import Modal -->
<div class="modal fade" id="importModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST"
              action="{{ route('admin.leads.import') }}"
              enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="category" value="{{ $category }}">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import {{ $category }} Leads</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="file"
                           name="file"
                           class="form-control"
                           accept=".xlsx,.xls,.csv"
                           required>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Upload & Import
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
document.getElementById('select-all').addEventListener('change', function () {
    document.querySelectorAll('input[name="ids[]"]').forEach(cb => {
        cb.checked = this.checked;
    });
});
</script>

<!-- Add Lead Modal -->
<div class="modal fade" id="addLeadModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('admin.leads.store') }}">
            @csrf
            <input type="hidden" name="category" value="{{ $category }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Lead</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label>Phone</label>
                        <input type="text" name="phone_number" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label>State</label>
                        <input type="text" name="state" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label>City</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label>Zip Code</label>
                        <input type="text" name="zip_code" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label>D.O.B</label>
                        <input type="date" name="dob" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label>Lead Type</label>
                        <select name="lead_type" class="form-control">
                            <option value="Trading">Trading</option>
                            <option value="Recovery">Recovery</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control" value="new">
                    </div>
                    <div class="mb-2">
                        <label>Notes</label>
                        <textarea name="notes" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Lead</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Scripts -->
<script>
document.getElementById('select-all')?.addEventListener('change', function () {
    document.querySelectorAll('input[name="ids[]"]').forEach(cb => cb.checked = this.checked);
});
</script>


@foreach($leads as $lead)
@include('admin.components.edit_lead_modal')
@endforeach

@endsection
