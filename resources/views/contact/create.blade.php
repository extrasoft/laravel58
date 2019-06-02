@extends('layout')
@section('title','Contact')

@section('content')
<div class="row">
  <div class="col-12 d-flex">
      <i class="material-icons md-36">perm_contact_calendar</i>
      <h4 class="ml-2">Contact Form</h4>
  </div>
</div>
<hr/>
@if( !session()->has('message') )
  <div class="row">
    <div class="col">
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" 
            name="name" placeholder="Enter name" value="{{ old('name') }}">
          @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" 
            name="email" placeholder="Enter Email" value="{{ old('email') }}">
          @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="" rows="5">{{ old('message') }}</textarea>
          @error('message')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-block btn-primary">Send Message</button>
      </form>
    </div>
  </div>
@endif

@endsection