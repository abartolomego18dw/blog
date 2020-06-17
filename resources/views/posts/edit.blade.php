@extends('layouts.app2')

@section('content')
<br>
<div class="container">
  <form method="POST" action="{{route('post.update', $post->id)}}">
    @method("PUT")
    @csrf
    Title: <input type="text" name="title" value="{{$post->title}}"><br>
    Excerpt: <input type="text" name="excerpt" value="{{$post->excerpt}}"><br>
    Body: <input type="text" name="body" value="{{$post->body}}"><br>
    Image: <input type="file" name="imagen" value="{{$post->image}}"><br>
    Category: <select name="category">
    @foreach ($categories as $category)
        <option value="{{$category->id}}" {{ old('category',$post->category_id) == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
    @endforeach    
    </select><br>
    <button type="submit">Crear Post</button>
  </form><br>
</div>
@endsection