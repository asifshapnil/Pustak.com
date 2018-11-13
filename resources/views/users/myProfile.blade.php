@extends('users.layouts.main')

@section('content')
  @include('users.layouts.hero')
  <a href="{{route('add-new-book')}}">ADD BOOK</a>
@endsection
