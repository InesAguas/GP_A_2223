@extends('master')
<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
@section('content')
    <div style="background-color: white;">
         <div class = "searchbar">
            <div id='container'>
                <div class="labels">
                    <label for = "nomeUser">Nome:</label>
                </div>
                <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="search"/>
                    <button type="submit">Search</button>
                    <div class = "dropdown" id = "tipoDropdown">
                        <div class="labels">
                            <label for = "tipoUser">Tipo:</label>
                        </div>
                        
                        <div class = "dropdown">
                            <select id = "tipo" name = "tipo">
                                <option value="0" selected>Todos</option>
                                <option value="1">Administrator</option>
                                <option value="2">Sócio</option>
                                <option value="3">Cliente</option>
                            </select>
                        </div>
                        <div class="labels">
                            <label for = "estadoUser">Estado:</label>
                        </div>
                        <div class = "dropdown">
                            <select id = "estado" name = "estado">
                                <option value="0" selected>Todos</option>
                                <option value="ativo">Ativo</option>
                                <option value="inativo">Inativo</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <table class="table table-bordered table-hover">
            <thead style="font-size: 18px; background-color:rgb(60, 60, 60)">
                <tr>
                    <th><a style="color: white;">ID</a>@sortablelink('u_id', "")</th>
                    <th><a style="color: white;">Nome</a>@sortablelink('u_nome', "")</th>
                    <th><a style="color: white;">Email</a>@sortablelink('email', "")</th>
                    <th><a style="color: white;">Tipo</a>@sortablelink('u_tipo', "")</th>
                    <th><a style="color: white;">Estado</a>@sortablelink('u_estado', "")</th>
                    <th><a style="color: white;">Ação</a></th>
                </tr>
                </thead>
                <tbody>
                    @if ($users->count() == 0)
                    <tr>
                        <td colspan="5">Não existem utilizadores com essas caracteristicas.</td>
                    </tr>
                    @endif
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->u_id}}</td>
                        <td>{{ $user->u_nome}}</td>
                        <td>{{ $user->email}}</td>
                        @if ($user->u_tipo == 1)
                            <td><span 
                                style="color: white; background-color: rgb(172, 92, 92); border-radius: 25px; 
                                        padding: 1px 10px 2px 10px;">Administrador</span></td>
                        @endif
                        @if ($user->u_tipo == 2)
                        <td><span 
                            style="color: white; background-color: rgb(0, 149, 255); border-radius: 25px; 
                                    padding: 1px 10px 2px 10px;">Sócio</span></td>
                        @endif
                        @if ($user->u_tipo == 3)
                        <td><span 
                            style="color: white; background-color: rgb(3, 172, 37); border-radius: 25px; 
                                    padding: 1px 10px 2px 10px;">Cliente</span></td>
                        @endif
                        @if ($user->u_estado == 'ativo')
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(3, 172, 37)" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                <circle cx="6" cy="6" r="6"/>
                              </svg>
                            Ativo</td>
                        @endif
                        @if ($user->u_estado == 'inativo')
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                    <circle cx="6" cy="6" r="6"/>
                                  </svg>
                                Inativo</td>
                        @endif
                        <td>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="grey" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
                                </svg>
                            </a>
                            &nbsp;&nbsp;
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="grey" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                </svg>
                            </a>
                        </td>        
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->appends(Request::only(['estado','filter','search']))->links('pagination::bootstrap-5')}}
    <div>
@endsection