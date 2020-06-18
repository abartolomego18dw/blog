@extends('layouts.admin')
@section('content')
<div class="container">
    <form method="POST" action="{{route('admin.update', $user->id)}}">
      @method("PUT")
      @csrf
      Role: <select name="roles">
      @foreach ($roles as $rol)
          <option value="{{$rol->id}}">{{$rol->name}}</option>
      @endforeach
      </select><br>
      <button type="submit">Editar Role</button>
    </form><br>
  </div>
@endsection