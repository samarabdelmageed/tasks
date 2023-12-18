<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
@include('includes.nav')
<body>
<div class="container">
  <h2>Update Posts Data</h2>
  <form action="{{route('update',$post->id)}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">Post Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="postTitle" value="{{$post->postTitle}}">
      @error('postTitle')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="title">Author:</label>
      <input type="text" class="form-control" id="author" placeholder="Enter author" name="author" value="{{$post->author}}">
      @error('author')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" name="description" id="" cols="60" rows="3">{{$post->description}}</textarea>
      @error('description')
      {{$message}}
      @enderror
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($post->published)> Published </label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>