@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div><br />
@endif
<div class="card uper">
  <div class="card-header">
    <a href="/users/create">Create User</a>
  </div>
  <div class="card-body">
    <table class="table table-striped table-bordered table-hover">
      <caption>List of users</caption>
      <thead class="thead-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col" class="text-center" colspan="3">Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($list_user as $user)
        <tr>
          <td class="text-right">{{ $loop->index + 1 }}</td>
          <td><span>{{ $user->name }}</span></td>
          <td><span>{{ $user->email }}</span></td>
          <td><a href="{{ url('/users/'.$user->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
          <td><a href="{{ url('/users/'.$user->id)}}" class="btn btn-primary"><i class="fas fa-align-justify"></i></a></td>
          <td>
            <form action="{{ route('users.destroy', $user->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>
</div>


@endsection
