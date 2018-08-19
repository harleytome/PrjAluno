@extends('layouts.topmenu')

@section('content')


<h3>Meus Dados</h3>

<br>
<!-- Upload Image -->
<form action="myphoto.select" class="form-control" enctype="multipart/form-data" method="post">
    @csrf

    <div class="form-group row">
        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
            <a class="thumbnail fancybox" rel="ligthbox">
                @if($image)
                <img class="img-responsive" alt="" src="images/{{$image}}" width=150  />
                @else
                <img class="img-responsive" alt="" src="http://placehold.it/150x150" />
                @endif
            </a>
            <button name="btnimg" value="atualizar" type="submit" class="btn btn-info btn-menu-custom">Alterar Imagem</button>
        </div>
    </div>
</form>

<form name="formdata" method="POST" action="myinfo.store">
    @csrf
    <hr>
    <div class="form-group row">
        <label class="col-form-label form-control-label col-md-12 col-lg-5">Qual escola você estuda ?</label>
        <br>
        <div class="col-md-10 col-lg-6">
            <select name="id_school" id="id_school" class="form-control @if($errors->has('id_school')) is-invalid @endif">
                <option value=""></option>
                @foreach($schools as $r)
                <option value="{{$r->id}}"
                    @if($r->id == old('id_school'))
                    selected
                    @endif
                    >{{$r->name}}
                </option>
                @endforeach
            </select>
            @if($errors->has('id_school'))
            <span class="invalid-feedback">
                {{$errors->first('id_school')}}
            </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label form-control-label col-md-12 col-lg-5">Possui algum apelido ?</label>
        <div class="col-md-5 col-lg-4">
            <input name="alias" id="alias" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label form-control-label col-md-12 col-lg-5">Gostaria de ser chamado pelo apelido ?</label>
        <div class="col-md-2 col-lg-2">
            <select name="use_alias" id="use_alias" class="form-control">
                <option value="N"
                @if(old('use_alias') == 'N')
                selected
                @endif
                >Não</option>
                <option value="S"
                @if(old('use_alias') == 'S')
                selected
                @endif
                >Sim</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label form-control-label col-md-12 col-lg-5">Data de nascimento</label>
        <div class="col-md-4 col-lg-3">
            <input name="birthdate" id="birthdate" type="date" value="{{old('birthdate')}}" class="form-control @if($errors->has('birthdate')) is-invalid @endif">
            @if($errors->has('birthdate'))
            <span class="invalid-feedback">
                {{$errors->first('birthdate')}}
            </span>
            @endif

        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label form-control-label col-md-12 col-lg-5">Nome da sua turma</label>
        <div class="col-md-2 col-lg-1">
            <input name="class_name" id="class_name" type="text" value="{{old('class_name')}}" class="form-control @if($errors->has('class_name')) is-invalid @endif" maxlength="2" style="text-transform:uppercase">
            @if($errors->has('class_name'))
            <span class="invalid-feedback">
                <div class="row col-md-8 col-lg-8">
                    {{$errors->first('class_name')}}
                </div>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label form-control-label col-md-12 col-lg-5">Ano letivo atual</label>
        <div class="col-md-2 col-lg-2">
            <input name="current_year" id="current_year" type="number" maxlength="4" value="{{old('current_year')}}" class="form-control @if($errors->has('current_year')) is-invalid @endif">
            @if($errors->has('current_year'))
            <span class="invalid-feedback">
                {{$errors->first('current_year')}}
            </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label form-control-label col-md-12 col-lg-5">Email cadastrado</label>
        <div class="col-md-5 col-lg-5">
            <input name="email" id="email" type="email" value="{{Auth::user()->email}}" class="form-control @if($errors->has('email')) is-invalid @endif">
            @if($errors->has('email'))
            <span class="invalid-feedback">
                {{$errors->first('email')}}
            </span>
            @endif
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <label class="col-form-label form-control-label col-md-12 col-lg-5">Senha</label>
        <div class="col-md-4 col-lg-4">
            <input name="password" id="password" type="password" class="form-control">
        </div>
    </div>
    <button name="enviar" type="submit" class="btn btn-info btn-menu-custom">Atualizar Dados</button>
</form>

@endsection
