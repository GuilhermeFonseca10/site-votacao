@extends('layouts.main')

@section('title', 'Urna')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque seu candidato</h1>
    <form action="">
        <input type="text" id="search" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="candidatos-container" class="col-md-12">
<h2>Candidatos</h2>
<p class="subtitle">Lista de candidatos</p>
<div id="cards-container" class="row">
    @foreach ($candidatos as $candidato)
    <div class="card col-md-3">
<img src="/img/candidatos/{{ $candidato->image }}" alt="{{ $candidato->nome }}">
   <div class="card-body">
<p class="card-date">10/06/2022</p>
<h5 class="card-nome">{{$candidato->nome}}</h5>
<p class="card-numero">Número: {{$candidato->numero}}</p>
<a href="/candidatos/{{ $candidato->id }}" class="btn btn-primary">Votar</a>
</div>
    </div>

    @endforeach
</div>
</div>



@endsection
