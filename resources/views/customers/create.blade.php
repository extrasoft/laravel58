@extends('layout')
@section('title','Create Customer')

@section('content')
  <div class="row">
      <div class="col-8 d-flex">
          <i class="material-icons md-36">person_outline</i>
          <h4 class="ml-2">Create Customer</h4>
      </div>
  </div>
  <hr/>
  <div class="row mt-3">
    <div class="col">
      <form action="{{ route('customer.store')}}" method="POST" enctype="multipart/form-data">
        @include('customers.form')
        @csrf
        <button type="submit" class="btn btn-block btn-primary">Add Customer</button>
      </form>
    <div>
  </div> 
@endsection