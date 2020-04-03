@extends ('layouts.layout')
@section ('contenido')
<div class="container-sm-6">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nuevo Vehiculo</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {{Form::Open(array('action'=>array('VehiculoController@update',$vehiculo->id),'method'=>'update'))}}
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PATCH">

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="placa" id="placa" class="form-control inputsm" value="{{$vehiculo->placa}}">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="tipo" id="tipo" class="form-control inputsm" value="{{$vehiculo->tipo}}">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="modelo" id="modelo" class="form-control inputsm" value="{{$vehiculo->modelo}}">
                </div>
            </div>


            
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <input type="submit" value="Actualizar" class="btn btn-success btn-block">
                    </br>
                    </br>
                    <a href="{{ route('vehiculo.index') }}" class="btn btn-info btnblock">Atrás</a>
                </div>
            
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</section>
@endsection