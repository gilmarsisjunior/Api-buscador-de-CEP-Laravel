@extends('layouts.layout')

@section('title','Consulte seu CEP');

@section('content')

    <form class="row g-3" action="{{asset('/api')}}" method="GET">
        @csrf
        <div class="col-auto">
        <input for="inputPassword2" class="visually-hidden" name="cep">
        <input type="text" class="form-control" id="inputPassword2" placeholder="Digite seu CEP" name="cep">
        </div>
        <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Consultar</button>

    </form>
    </div>
@endsection