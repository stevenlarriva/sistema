
{{--  <div style="margin: 40px 200px; padding: 10px;">  --}}
<h1> {{ $modo }} empleado </h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach ($errors->all() as $error )
        <li> {{ $error}} </li>   
        @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="Nombre"> Nombre </label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
    <br>
</div>

<div class="form-group">
    <label for="ApellidoPaterno"> Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
    <br>
</div>

<div class="form-group">
    <label for="ApellidoMaterno"> Apellido Materno </label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
    <br>
</div>
 
<div class="form-group">
    <label for="Correo"> Correo </label>
    <input type="email" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
    <br>
</div>
    
<div class="form-group">
    <label for="Foto"> Foto </label>
    @if(isset($empleado->Foto))
    <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" style="width: 100px;" class="img-thumbnail img-fluid">
    @endif
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
    <br>
</div>

<input type="submit" value="{{ $modo }} datos" class="btn btn-success">

<a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>
{{--  </div>  --}}
<br>