@extends('layouts.admin')


@section('content')

<h1>Posts</h1>

<table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>User</th>
        <th>Category</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>

    @if($posts)
    	@foreach($posts as $post)


      <tr>
        <td>{{$post->id}}</td>
         <td>
          @if ($post->photo)
            <img height=50 src="http://localhost:8888/codehacking2/public/images/{{$post->photo->file}}">
          @else

             <img height=50 src="http://placehold.it/400x400">
            
          @endif
        <td>{{$post->user->name}}</td>
        <td>{{$post->category_id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
      </tr>

      	@endforeach
      @endif

      
    </tbody>
  </table>
</div>

</body>
</html>



@stop
