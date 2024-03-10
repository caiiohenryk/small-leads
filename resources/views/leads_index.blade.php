@extends('master')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>TA FUNCIONADNO</h1>
<div class="form-group">
   
    <input type="text" name="doido" id="doido" class="form-control" placeholder="Insira aqui">
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary">Enviar</button>
    </div>
</div>

@endsection