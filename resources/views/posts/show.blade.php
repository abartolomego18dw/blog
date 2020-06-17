@extends('layouts.app2')
@section('content')
<table class="table table-condensed">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Excerpt</th>
        <th>Body</th>
        <th>Published</th>
        <th>Category</th>
      </tr>
      </thead>
    <tbody>
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->excerpt}}</td>
        <td>{{$post->body}}</td>
        <td>{{date("j/m/Y H:i:s", strtotime($post->published_at))}}</td>
        <td>{{$post->category->name}}</td>
      </tr>
    </tbody>
    </table>
@endsection