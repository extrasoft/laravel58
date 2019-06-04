@extends('layouts.app')
@section('title','Edit Customer')

@section('content')
  <div class="row">
      <div class="col-8 d-flex">
          <i class="material-icons md-36">person_outline</i>
          <h4 class="ml-2">Edit Customer</h4>
      </div>
  </div>
  <hr/>
  <div class="row mt-3">
    <div class="col">
      <form action="{{ route('customer.update', ['id'=>$customer->id])}}" method="POST" enctype="multipart/form-data">
        @include('customers.form')
        @method('PUT')
        @csrf
        <button type="submit" class="btn btn-block btn-primary">Edit Customer</button>
      </form>
    <div>
  </div> 
@endsection