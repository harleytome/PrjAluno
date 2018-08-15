@extends('layouts.topmenu')

@section('content')

<div class="container">
    <h3>Meus Dados</h3>
    <div class="form-group row">
        <label class="col-form-label form-control-label col-md-3">Qual escola você estuda ?</label>
        <br>
        <div class="col-md-7">
            <select name="selescola" id="selescola" class="form-control">
                <option value="">Opção 1</option>
                <option value="">Opção 1</option>
                <option value="">Opção 1</option>
                <option value="">Opção 1</option>
                <option value="">Opção 1</option>
            </select>
        </div>
    </div>
    <div class="form-group row borda">
            <label class="col-form-label form-control-label col-md-3 borda">Qual escola você estuda ?</label>
            <br>
            <div class="col-md-7">
                <select name="selescola" id="selescola" class="form-control">
                    <option value="">Opção 1</option>
                    <option value="">Opção 1</option>
                    <option value="">Opção 1</option>
                    <option value="">Opção 1</option>
                    <option value="">Opção 1</option>
                </select>
            </div>
        </div>

</div>

@endsection
