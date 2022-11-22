<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Editar</title>
</head>
<div class="container mt-5">
        <div class="row">
            <h2 class="text-center text-black mt-4">Formulario prenda</h2>
        </div>
        @if(count($errors)>0)
        <div class="alert alert-danger" role ="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    
        <div class="p-5 bg-white rounded shadow-lg">
            <form method="POST" action="{{ route ( 'prendas.store' ) }} ">
                @csrf
                <div class="form-group">
                    <label class="label">descripcion</label>
                    <input name="descripcion" class="form-control"
                           type="text" placeholder="descripcion" value="{{old('descripcion')}}">
                  
                    <label class="label">tipo tela</label>
                    <input  name="tipo_tela" class="form-control"
                           type="text" placeholder="tipo_tela" value="{{old('tipo_tela')}}">

                    <label class="label">color</label>
                    <input  name="color" class="form-control"
                    type="text" placeholder="color" value="{{old('color')}}">
                    
                    
                </div>
                <br>
              
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route ('prendas.index') }}" >Volver al listado</a>
            </form>
        </div>
    
</div>