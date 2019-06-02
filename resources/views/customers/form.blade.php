<div class="form-group">
  <label for="name">Name</label>
  <input type="text" class="form-control @error('name') is-invalid @enderror" 
    name="name" placeholder="Enter name" value="{{ old('name') ?? $customer->name }}">
  @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
<div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control @error('email') is-invalid @enderror" 
    name="email" placeholder="Enter Email" value="{{ old('email') ?? $customer->email }}">
  @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
<div class="form-group">
  <label for="company_id">Company</label>
  <select class="custom-select @error('company_id') is-invalid @enderror" name="company_id">
      <option value="" disabled>Select company</option>
      @foreach($companies as $company)
        <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
      @endforeach
  </select>
  @error('company_id')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
<div class="form-group">
  <label for="active">Status</label>
  <select class="custom-select @error('active') is-invalid @enderror" name="active">
    <option value="" disabled>Select customer status</option>
    @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
      <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
    @endforeach
  </select>
  @error('active')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
{{-- <div class="form-group">
  <label for="image">Image</label>
  <div class="custom-file">
    <input type="file" class="custom-file-input" multiple name="image" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
</div> --}}
@section('scripts')
  <script>
    $(document).ready(function () {
      // bsCustomFileInput.init()
      console.log('asdasdasd')
    })
  </script>
@endsection

