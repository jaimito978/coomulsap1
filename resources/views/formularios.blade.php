@extends('layouts.app')

@section('content')

        <div class="container">
               
        <h1 class="text-center mt-5"> FORMATO <h1>
            <h1 class="text-center mt-5"> ENTREVISTA DE SELECCION<h1>
        <h2 class="text-center mt-5">DATOS GENERALES DEL ENTREVISTADO</h2>
        <!--primer doble-->
        <div class="row mt-3">

            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">fecha</th>
                <th scope="col">hora_citado</th>
                <th scope="col">nombre_aspirante</th>
                <th scope="col">cargo</th>
                <th scope="col">edad</th>
                <th scope="col">cedula</th>
                <th scope="col">Accion</th>
                <th scope="col">modificar</th>
                <th scope="col">eliminar</th>
               
                </tr>
            </thead>
            <tbody> 
          
            @foreach($datos as $nombre)
                <tr>
                <th scope="row">{{$nombre->id}}</th>
                <td>{{$nombre->fecha}}</td>
                <td>{{$nombre->hora_citado}} </td>
                <td>{{$nombre->nombre_aspirante}}</td>
                <td>{{$nombre->cargo}}</td>
                <td>{{$nombre->edad}}</td>
                <td>{{$nombre->cedula}}</td>
                <!-- <td><a type="button" href="/usuario/{{ $nombre->id }}" class="btn btn-primary">Ver</a></td> -->
                <td><a type="button" href="/usuario/{{ $nombre->id }}" class="btn btn-primary">Ver y  Modificar</a></td>
                <td><a type="button" href="/borrar/{{ $nombre->id }}" class="btn btn-primary">eliminar</a></td>
                
       
                </tr>
            @endforeach
            </tbody>
            </table>

        </div>
@endsection

