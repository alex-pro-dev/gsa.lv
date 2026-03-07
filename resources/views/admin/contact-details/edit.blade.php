@extends('admin.layouts.app')
@section('content')
<h1 class="h4 mb-3">Contact Details</h1>
<form method="POST" action="{{ route('admin.contact-details.update') }}" class="card card-body">@csrf @method('PUT')
<div class="mb-3"><label>Address</label><input class="form-control" name="address" value="{{ old('address', $contactDetail->address) }}"></div>
<div class="row g-3">
<div class="col-md-6"><label>Aluminum phone</label><input class="form-control" name="aluminum_phone" value="{{ old('aluminum_phone', $contactDetail->aluminum_phone) }}"></div>
<div class="col-md-6"><label>Aluminum email</label><input class="form-control" name="aluminum_email" value="{{ old('aluminum_email', $contactDetail->aluminum_email) }}"></div>
<div class="col-md-6"><label>PVC phone</label><input class="form-control" name="pvc_phone" value="{{ old('pvc_phone', $contactDetail->pvc_phone) }}"></div>
<div class="col-md-6"><label>PVC email</label><input class="form-control" name="pvc_email" value="{{ old('pvc_email', $contactDetail->pvc_email) }}"></div>
<div class="col-md-6"><label>Sales phone</label><input class="form-control" name="sales_phone" value="{{ old('sales_phone', $contactDetail->sales_phone) }}"></div>
<div class="col-md-6"><label>Sales email</label><input class="form-control" name="sales_email" value="{{ old('sales_email', $contactDetail->sales_email) }}"></div>
<div class="col-md-6"><label>Working hours weekdays</label><input class="form-control" name="working_hours_weekdays" value="{{ old('working_hours_weekdays', $contactDetail->working_hours_weekdays) }}"></div>
<div class="col-md-6"><label>Working hours weekend</label><input class="form-control" name="working_hours_weekend" value="{{ old('working_hours_weekend', $contactDetail->working_hours_weekend) }}"></div>
</div>
<div class="my-3"><label>Map embed URL</label><input class="form-control" name="map_embed_url" value="{{ old('map_embed_url', $contactDetail->map_embed_url) }}"></div>
<button class="btn btn-dark">Save contact details</button>
</form>
@endsection
