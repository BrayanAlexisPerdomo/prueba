<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$ticket->id}}">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Ticket Generado</h4>
            </div>
            <div class="modal-body">
           
            @foreach ($tickete as $tickete)
                
                <p>Ref Ticket: {{$tickete->id}}</p>
                <p>Fecha Salida: {{$tickete->fecha_salida}}</p>
                <p>Valor A Pagar: {{$tickete->total}}</p>
                <p>Ref Vehiculo: {{$tickete->ingreso_vehiculo_id}}</p>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Imprimir</button>
            </div>
        </div>
    </div>
    
</div>