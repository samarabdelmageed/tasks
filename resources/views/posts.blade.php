<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

@include('includes.nav')
<div class="container">
  <h2>Posts List</h2>
  <table class="table table-hover">
    <thead>
    <tr>
        <th>Post Title</th>
        <th>Author</th>
        <th>Description</th>
        <th>Published</th>
        <th>Created at</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>

    @foreach($posts as $post)  
    <tbody>
      <tr>
        <td>{{$post->postTitle}}</td>
        <td>{{$post->author}}</td>
        <td>{{$post->description}}</td>
        <td>{{$post->published ? 'yes':'no'}}</td>
        <td>{{$post->created_at}}</td>
        <td><a href="showPost/{{ $post->id }}">Show</a></td>
        <td><a href="updatePost/{{ $post->id }}">Edit</a></td>
        <td><a href="deletePost/{{ $post->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
      </tr>
    @endforeach
   
    </tbody>
  </table>
</div>

</body>
</html>
