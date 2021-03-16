@php
    $form_mode = !isset($form_mode) ? 'default' :$form_mode;
    switch($form_mode){
        case "delete":
            $action=route('equipamento.destroy', ['equipamento' => $eqp->id]);
            $bot_label="Deletar equipamento";
            break;
        case "edit":
            $action=route('equipamento.update', ['equipamento' => $eqp]);
            $bot_label="Atualizar equipamento";
            break;
        default:
            $action=route("equipamento.store");
            $bot_label="Salvar equipamento";
            break;
    }
@endphp


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

