@extends('layouts.topmenu')

@section('content')


<h3>Suas Matérias</h3>

<br>
@if($school_id == null)
<span class="alert-danger">
    Você ainda não registrou em qual escola estuda !!!
    <br>Click<a href="{{route('myinfo')}}"> Aqui</a> para corrigir isso.
</span>
@else
{{$school_name}}

    @if($myclasses->isEmpty())
    <span class="alert-danger">
        <br>Nenhuma aula cadastrada
    </span>

    @else
        <br>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Matéria</th>
                <th>Professor</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($myclasses as $r)
        <tr>
            <td>{{$r->name}}</td>
            <td>{{$r->teacher}}</td>
            <td><a href="{{route('myclasses.edit',['id'=> $r->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                <a href="{{route('myclasses.delete',['id'=> $r->id])}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$myclasses->links()}}
    @endif
@endif
<br>
<hr>
<form action="{{route('myclasses.add')}}">
    <button type="submit" class="btn btn-info btn-menu-custom">
            <i class="fas fa-plus"></i>
            <span>Adicionar Matéria</span>
    </button>
</form>

@endsection
