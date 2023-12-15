<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
</head>
<body>
    <h1> Post Data </h1>
    <h2> Post Title: </h2>
    <h3 style="color:blue;"> {{$post->postTitle}} </h3>
    <h2> Author: </h2>
    <h3 style="color:blue;"> {{$post->author}} </h3>
    <h2> Description: </h2>
    <p> <h3 style="color:blue;"> {{$post->description}} </h3> </p>
    <h2> Published or Not Published: </h2>
    <h3 style="color:blue;"> {{ $post->published? "Published" : "Not Published" }} </h3>
    <h2> Created at: </h2>
    <p> <h3 style="color:blue;"> {{$post->created_at}} </h3> </p>
    <h2> Updated at: </h2>
    <p> <h3 style="color:blue;"> {{$post->updated_at}} </h3> </p>  
</body>
</html>