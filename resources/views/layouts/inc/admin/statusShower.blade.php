@if (session('status'))
<div class="alert alert-success alert-dismissible fade show position-fixed" style="top: 20px; right: 20px;"
  role="alert">
  <strong>{{ session('status') }}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif