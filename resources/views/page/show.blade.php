@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <a href="/users/create">Detail User</a>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-2">
        Name:
      </div>
      <div class="col-md-8">
        <span>{{ $user->name }}</span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-2">
        Email:
      </div>
      <div class="col-md-8">
        <span>{{ $user->email }}</span>
      </div>
    </div>

  </div>
</div>


@endsection
