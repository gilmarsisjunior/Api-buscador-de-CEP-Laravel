@extends('layouts.layout')

@section('title','ConCEP')
    

@section('content')
<form class="row g-3">
    @if ($cep != '')

    <div class="col-md-3">
        <label for="inputEmail4" class="form-label">CEP</label>
        <input type="email" class="form-control" id="inputEmail4" value="{{$cep}}">
      </div>
    @endif

    @if ($logradouro != '')
    <div class="col-md-3">
        <label for="inputPassword4" class="form-label">Logradouro</label>
        <input type="text" class="form-control" id="inputPassword4" value="{{$logradouro}}">
      </div>
   
    @endif

    @if ($bairro != '')
    <div class="col-3">
        <label for="inputAddress2" class="form-label">Bairro</label>
        <input type="text" class="form-control" id="inputAddress2" value="{{$bairro}}">
      </div>
    @endif

      @if ($localidade != '')
      <div class="col-md-3">
        <label for="inputCity" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="inputCity" value="{{$localidade}}">
      </div>
      @endif

      @if ($ddd != '')
      <div class="col-md-3">
        <label for="inputZip" class="form-label">DDD</label>
        <input type="text" class="form-control" id="inputZip" value="{{$ddd}}">
      </div>
      @endif

    <div class="col-3">
    <div class="col-3">
      <input type="submit" class="btn btn-primary" href="http:://www.google.com">
    </div>
  </form>
@endsection