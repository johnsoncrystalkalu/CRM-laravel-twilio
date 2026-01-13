                <!-- Session Modal -->
@if(session('success') || session('error') || $errors->any())
<div class="modal fade" id="sessionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header
                @if(session('success')) bg-success text-white
                @elseif(session('error')) bg-danger text-white
                @else bg-warning text-dark @endif
            ">
                <h5 class="modal-title">
                    @if(session('success'))
                        Success
                    @elseif(session('error'))
                        Error
                    @else
                        Warning
                    @endif
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @if(session('success'))
                    <p>{{ session('success') }}</p>
                @elseif(session('error'))
                    <p>{{ session('error') }}</p>
                @elseif($errors->any())
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endif
