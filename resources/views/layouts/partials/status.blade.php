@if (session('status'))
    <div id="status" class="alert alert-success text-center font-weight-bold" style="margin-top: 5rem; margin-bottom: 0rem; z-index: 100;">
        {{ session('status') }}
    </div>
@endif
