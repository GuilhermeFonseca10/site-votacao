@extends('layouts.main')

@section('title', $candidato->nome)

@section('content')

<div class="col-md-10 offset-md-1">
<div class="row">
<div id="image-container" class="col-md-6">
    <img src="/img/candidatos/{{ $candidato->image }}" class="img-fluid" alt="{{ $candidato->nome }}">
</div>
<div id="info-container" class="col-md-6">
<h1>{{ $candidato->nome }}</h1>
<p class="candidato-numero">{{ $candidato->numero }}</p>
</div>
</div>
</div>


@endsection
