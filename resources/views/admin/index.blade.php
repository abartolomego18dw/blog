@extends('layouts.admin')
@section('content')

<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Fecha de registro</th>
        <th>Role</th>
        <th style="width:15px"></th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td>
            @foreach($user->role as $rol)
            {{$rol->name}}  
          @endforeach
        </td>
        <td>
            <a title="Editar" href="{{route ('admin.edit',$user->id)}}"><i class="fa fa-pencil" style="color:black"></i></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection