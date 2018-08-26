@extends('layouts.topmenu')

@section('content')


<h3>Adicionar Matéria</h3>

<br>

<form action="myclasses.store" name="formdata" method="POST">
    @csrf
    <div class="container">
        <div class="form-group row">
            <label class="col-form-label form-control-label col-6 col-md-4 col-lg-4">Nome da Matéria</label>
            <div class="col-8 col-md-4 col-lg-4">
                <input type="text" id="name" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" style="text-transform:uppercase" value="{{old('name')}}">
                @if($errors->has('name'))
                <span class="invalid-feedback">
                    {{$errors->first('name')}}
                </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label form-control-label col-6 col-md-4 col-lg-4" >Nome do Professor</label>
            <div class="col-8 col-md-4 col-lg-4">
                <input type="text" id="teacher" name="teacher" class="form-control @if($errors->has('teacher')) is-invalid @endif" value="{{old('teacher')}}">
                @if($errors->has('teacher'))
                <span class="invalid-feedback">
                    {{$errors->first('teacher')}}
                </span>
                @endif
            </div>
        </div>
    </div>
    <br>
    <button name="enviar" type="submit" value="salva" class="btn btn-info btn-menu-custom">Salvar</button>
    <a class="btn btn-warning" href="{{route('myclasses')}}">Cancelar</a>

</form>

@endsection
