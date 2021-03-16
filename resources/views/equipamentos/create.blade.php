@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
         <h3>Novo</h3>
         @include('equipamentos._form')
         <div class="form-group">
             <input type="submit" name="save_eqp" value="Salvar">
             <input type="submit" name="Cancel" value="Cancelar">
         </div>
    </div>
    </form>
</div>
@endsection
