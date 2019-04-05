@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add User
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" />
        </div>
        <div class="form-group">
          <label for="name">Password:</label>
          <input type="password" class="form-control" name="password" />
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="text" class="form-control" name="email" />
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
