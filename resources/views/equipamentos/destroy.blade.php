@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h3>Deletar</h3>
        <form action={{route('equipamento.destroy', ['equipamento' => $eqp->id]}} method="post">
        @csrf
        @method('DELETE')
        <input type="hidden" id="redirect_to" name="redirect_to" value="{{URL::previous()}}">
        <div>
            <label for="tipo">Tipo</label>
            <input type="text" id="tipo" name="tipo" value="{{$eqp->tipo}}" disable>
        </div>
        <div>
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" value="{{$eqp->modelo}}" disable>
        </div>
        <div>
             <label for="fabricante">Fabricante</label>
             <input type="text" id="fabricante" name="fabricante" value="{{$eqp->fabricante}}" disable>
        </div>
        <div class="alert alert-danger" role="alert">Está operação não poderá ser disfeita! Confirma a exclusão do equipamento?</div>
        <div class="form-group">
             <input type="submit" name="delete_eqp" value="Deletar">
             <input type="submit" name="cancel" value="Cancelar">
        </div>
    </div>
    </form>
</div>
@endsection
