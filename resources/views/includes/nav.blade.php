<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('posts')}}">Posts</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('posts')}}">Home</a></li>
      <li><a href="{{route('createPost')}}">Insert Post</a></li>
      <li><a href="{{route('trashed')}}">Trashed Posts</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>