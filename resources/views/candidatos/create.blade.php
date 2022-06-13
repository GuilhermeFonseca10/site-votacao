@extends('layouts.main')

@section('title', 'Cadastrar candidato')

@section('content')

<div id="candidato-create-container" class="col-md-6 offset-md-3">
  <hr>
    <h1>Cadastrar candidato</h1>
   <form action="/candidatos" method="POST" enctype="multipart/form-data">
    @csrf
    <br>
<div class="form-group">
    <label for="image">Foto do candidato:</label>
    <input type="file" id="image" name="image" class="from-control-file" >
</div>
<br>
       <div class="form-group">
           <label for="title">Nome:</label>
           <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do candidato">
       </div>
       <br>
       <div class="form-group">
        <label for="title">CPF:</label>
        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite apenas números">
    </div>
    <br>
    <div class="form-group">
        <label for="title">Número do candidato:</label>
        <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o número">
    </div>
    <br>
    <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite sua cidade de origem">
    </div>
    <br>
    <div class="form-group">
        <label for="title">Estado:</label>
        <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite seu estado">
    </div>
    <br>
<input type="submit"class="btn btn-primary" value="Comfirmar">

</form>
</div>


@endsection
