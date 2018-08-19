@extends('layouts.topmenu')

@section('content')

<h3>Selecione a foto de perfil</h3>
<form action="{{route('myphoto.save',['id' => Auth::user()->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <br>
    <div class="form-group">
        <input type="file" name="photo">
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-info btn-menu-custom">Salvar Foto</button>
    </div>

</form>

@endsection
