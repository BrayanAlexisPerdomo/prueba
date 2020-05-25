{!! Form::open(array('url'=>'vehiculo','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
    <a href="#"><i id="ojo" class="fa fa-eye" aria-hidden="true" style="color: black"></i></a>
    <div id="busqueda" class="input-group">
        <input type="text" class="form-control" name="searchText" id="searchText" placeholder="Buscar..." value="{{$searchText}}"
        style="background-color: lightgray;">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </span>
    </div>
</div>
{{Form::close()}}