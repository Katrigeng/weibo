@extends('layouts.default')
@section('title',$user->name)

@section('content')
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <section class="section_info">
        @include('shared._user_info',['user' => $user])
      </section>
    </div>
  </div>
@endsection
