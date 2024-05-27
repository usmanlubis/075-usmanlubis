@extends("layouts.app")

@section("title")
  @if(session()->get('role_id') == 1)
    Transactions - eRent
  @else
    My Transactions - eRent
  @endif
@endsection

@section("content")
  @include("partials.transactions")
@endsection