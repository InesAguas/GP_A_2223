@extends('master')

@section('content')
    <div>
        <p>Teste</p>
        <table>
            <thead style="font-size: 12px">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tbody>
               @foreach($users as $user)
                    <tr>
                    <td>{{ $user->u_id}}</td>
                    <td>{{ $user->u_nome}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->u_tipo}}</td>
                    <td>{{ $user->u_estado}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    <div>
@endsection