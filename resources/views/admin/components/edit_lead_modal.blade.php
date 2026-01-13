<div class="modal fade" id="editLeadModal{{ $lead->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('admin.leads.update', $lead->id) }}">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Lead</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" value="{{ $lead->first_name }}" required>
                    </div>
                    <div class="mb-2">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="{{ $lead->last_name }}" required>
                    </div>
                    <div class="mb-2">
                        <label>Phone</label>
                        <input type="text" name="phone_number" class="form-control" value="{{ $lead->phone_number }}" required>
                    </div>
                    <div class="mb-2">
                        <label>State</label>
                        <input type="text" name="state" class="form-control" value="{{ $lead->state }}">
                    </div>
                    <div class="mb-2">
                        <label>City</label>
                        <input type="text" name="city" class="form-control" value="{{ $lead->city }}">
                    </div>
                    <div class="mb-2">
                        <label>Zip Code</label>
                        <input type="text" name="zip_code" class="form-control" value="{{ $lead->zip_code }}">
                    </div>
                    <div class="mb-2">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control" value="{{ $lead->age }}">
                    </div>
                    <div class="mb-2">
                        <label>D.O.B</label>
                        <input type="date" name="dob" class="form-control" value="{{ $lead->dob }}">
                    </div>
                    <div class="mb-2">
                        <label>Lead Type</label>
                        <select name="lead_type" class="form-control">
                            <option value="Trading" {{ $lead->lead_type == 'Trading' ? 'selected' : '' }}>Trading</option>
                            <option value="Recovery" {{ $lead->lead_type == 'Recovery' ? 'selected' : '' }}>Recovery</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control" value="{{ $lead->status }}">
                    </div>
                    <div class="mb-2">
                        <label>Notes</label>
                        <textarea name="notes" class="form-control">{{ $lead->notes }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update Lead</button>
                </div>
            </div>
        </form>
    </div>
</div>
