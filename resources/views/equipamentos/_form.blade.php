<form action={{ route('equipamento.store')}} method="post">
   @csrf
   <input type="hidden" id="redirect_to" name="redirect_to" value="{{URL::previous()}}">
   <div>
       <label for="tipo">Tipo Equipamento</label>
       <input type="text" id="tipo" name="tipo">
   </div>
   <div>
       <label for="modelo">Modelo</label>
       <input type="text" id="modelo" name="modelo">
   </div>
   <div>
       <label for="fabricante">Fabicante</label>
       <input type="text" id="fabricante" name="fabricante">
   </div>

