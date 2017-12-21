@extends('layouts.admin')
 
@section('content')

<h1>Users</h1>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>

    @if($users)	

    	@foreach($users as $user)

      <tr>
        <td>{{$user->id}}</td>

        <td>
          @if ($user->photo)
            <img height=50 src="http://localhost:8888/codehacking2/public/images/{{$user->photo->file}}">
          @else

             <img height=50 src="http://placehold.it/400x400">
            
          @endif
        </td>

        <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <td>

          @if($user->role_id) 
            {{$user->role->name}}
          @endif

        </td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
      </tr>

      @endforeach

    @endif

      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
 
@stop