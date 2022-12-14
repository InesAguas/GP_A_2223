@extends('master')

@section('content')
<div>
    @foreach($produtos as $data)
    <tr>    
      <th>{{$data->p_id}}</th>               
    </tr>
@endforeach</div>
<div><a href="{{ url('/logout')}}" ><button type="button">Logout</button></a></div>
@endsection
