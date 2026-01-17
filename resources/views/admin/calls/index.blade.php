@extends('admin.layouts.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Call Status</h1>
    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Lead Name</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Called At</th>
                        <th>Twilio SID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($calls as $call)
                        <tr>
     <td>
    {{ $call->lead ? 'Lead Call' : 'Dialer Call' }}
</td>

                      <td>
                        @if($call->lead_id!="")
                        {{ $call->lead->first_name }} {{ $call->lead->last_name }}
                        @endif
                            </td>
                            <td>{{ $call->phone }}</td>
                            <td>
                                <span class="badge bg-secondary">
                                    {{ ucfirst($call->status ?? 'pending') }}
                                </span>
                            </td>

                            <td>{{ $call->called_at }}</td>
                            <td>{{ $call->twilio_sid }}</td>
                            <td>
                                <form method="POST" action="{{ route('admin.calls.delete', $call->id) }}" onsubmit="return confirm('Are you sure you want to delete this call record?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{ $calls->links() }} <!-- pagination -->
            </div>
        </div>
    </div>
</div>
@endsection
