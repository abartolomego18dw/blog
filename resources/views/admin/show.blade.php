@extends('layouts.admin')
@section('content')
<table class="table">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Descripcion del role</th>
        <th>Creado</th>
    </tr>
    <tr>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$role['name']}}</td>
        <td>{{$role['description']}}</td>
        <td>{{$user['created_at']}}</td>
    </tr>
</table>

@endsection