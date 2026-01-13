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
