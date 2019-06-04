@extends('layouts.app')
@section('title','Customers')

@section('content')
  <div class="row">
      <div class="col-8 d-flex">
          <i class="material-icons md-36">person_outline</i>
          <h4 class="ml-2">Customer List</h4>
      </div>
      <div class="col-4 text-right">
        <a href="{{route('customer.create')}}"><i class="material-icons md-36">add_circle</i></a>
      </div>
  </div>
  {{-- <hr/> --}}
  <div class="table-responsive table-hover">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Company</th>
          <th scope="col">Status</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($customers as $customer)
          <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->company->name }}</td>
            <td>{{ $customer->active }}</td>
            <td class="d-flex">
              {{-- View --}}
              <a href="{{route('customer.show',['customer'=>$customer->id ])}}" class="mr-2">
                  <i class="material-icons md-dark">remove_red_eye</i>
              </a>

              {{-- Edit --}}
              <a href="{{route('customer.edit',['customer'=>$customer->id ])}}" class="mr-1">
                  <i class="material-icons md-dark">edit</i>
              </a>

              {{-- DELETE --}}
              <form action="{{ route('customer.destroy', ['customer'=>$customer->id ]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-sm btn-link btn-no-padding">
                  <i class="material-icons md-dark">delete</i>
                </button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="6" class="text-center">Data Not Found</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
@endsection