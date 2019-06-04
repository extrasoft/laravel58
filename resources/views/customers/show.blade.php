@extends('layouts.app')
@section('title','Edit Customer')

@section('content')
  <div class="row">
      <div class="col-8 d-flex">
          <i class="material-icons md-36">person_outline</i>
          <h4 class="ml-2">Show Customer</h4>
      </div>
  </div>
  <hr/>
  <div class="row mt-3">
    <div class="col">
        <fieldset disabled>
          @include('customers.form')
        </fieldset>

        {{-- Back --}}
        <a href="{{route('customer.index')}}" class="btn btn-block btn-secondary mr-2">Back</a>
    <div>
  </div> 
@endsection