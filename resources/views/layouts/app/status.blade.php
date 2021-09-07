@if (session('status'))
    <div class="container">
        <div class="alert alert-success alert-dismissible fade show my-4" role="alert">
            <i class="fas fa-exclamation-triangle"></i> {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
