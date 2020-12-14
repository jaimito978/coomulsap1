@extends('layouts.app')

@section('content')

<div class="container">

    <form method="POST" action="{{ route('GuardandoFormController.update',$usuario[0]->id) }}"
        enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <h2 class="text-center mt-4"> Datos personales de: {{ $usuario[0]->nombre_aspirante}} </h2>
        <br>
  
          <!--primer doble-->

          <div class="row mt-3">

            <div class="col-md-6 form-group row">
            <label for="inputFEC" class="col-sm-2 col-form-label">Fecha:</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" name="fecha"  value="{{$usuario[0]->fecha}}" >
            </div>
            </div>


            <div class="col-md-6 form-group row">
              <label for="inputHC" class="col-sm-4 col-form-label">Hora citado:</label>
              <div class="col-sm-8">
              <input type="text" name="hora" value="{{$usuario[0]->hora_citado}}" class="form-control">
              </div>
              </div>
            <!--solo-->

          <div class="col-md-12 form-group row">
            <label for="inputNAA" class="col-sm-2 col-form-label">Nombre del aspirante:</label>
            <div class="col-sm-9">
            <input type="text" name="nombreAspirante" value="{{$usuario[0]->nombre_aspirante}}" class="form-control">
            </div>
            </div>
            <!--segundo doble-->
            <legend class="col-form-label col-sm-4 pt-0">sexo:</legend>
            <div class="col-sm-2">
            <input type="text" name="sexo" value="{{$usuario[0]->sexo}}" class="form-control">
                
          </div>

          <div class="col-md-6 form-group row">
            <label for="inputCAR" class="col-sm-2 col-form-label">Cargo:</label>
            <div class="col-sm-10">
            <input type="text" name="cargo" value="{{$usuario[0]->cargo}}" class="form-control">
            </div>
            </div>

          <!--finaliza segundo doble-->
          <!--inicia tercer doble-->


          <legend class="col-form-label col-sm-4 pt-0">edad:</legend>
            <div class="col-sm-2">
            <input type="text" name="edad" value="{{$usuario[0]->edad}}" class="form-control">
            </div>
            

            <div class="col-md-6 form-group row">
            <label for="inputCAR" class="col-sm-2 col-form-label">estado civil:</label>
            <div class="col-sm-10">
                
            <input type="text" name="estadocivil" value="{{$usuario[0]->estado_civil}}" class="form-control">
            </div>
            </div>  


                
              <!--termina tercer doble-->

          <div class="col-md-12 form-group row">
            <label for="inputTIO" class="col-sm-2 col-form-label">Titulo otorgado:</label>
            <div class="col-sm-9">
            <input type="text" name="titulootorgado" value="{{$usuario[0]->titulo_otorgado}}" class="form-control">
              
            </div>
            </div>
              <!--termina tercer doble-->


            <!--cuarto doble-->

          <div class="col-md-6 form-group row">
            <label for="inputCC" class="col-sm-3 col-form-label">Cédula:</label>
            <div class="col-sm-9">
            <input type="text" name="cedula" value="{{$usuario[0]->cedula}}" class="form-control">
            </div>
            </div>



          <div class="col-md-6 form-group row">
              <label for="inputDIR" class="col-sm-4 col-form-label">Dirección:</label>
              <div class="col-sm-8">
              <input type="text" name="direccion" value="{{$usuario[0]->direccion}}" class="form-control">
              </div>
            </div>
            

            <!--quinto doble-->


            <div class="col-md-6 form-group row">
              <label for="inputTEL" class="col-sm-3 col-form-label">Teléfono:</label>
              <div class="col-sm-9">
              <input type="text" name="telefono" value="{{$usuario[0]->telefono}}" class="form-control">
              </div>
            </div>



            <div class="col-md-6 form-group row">
            <label for="inputUAM" class="col-sm-7 col-form-label">Ubicación área metropolitana:</label>
                <div class="col-sm-5">
                <input type="text" name="ubiareametro" value="{{$usuario[0]->municipio}}" class="form-control">
                </div>
            </div>

            <!--sexto doble-->

            <div class="col-md-6 form-group row">
            <label for="inputTEL" class="col-sm-3 col-form-label">referencia personal:</label>
            <div class="col-sm-9">  
            <input type="text"  name="referenciapersonal" value="{{$usuario[0]->ref_personal}}" class="form-control">
            </div>
            </div>
            <div class="col-md-6 form-group row">
            <label for="inputUAM" class="col-sm-7 col-form-label">vivienda:</label>
            <div class="col-sm-5">
            <input type="text"name="vivienda" value="{{$usuario[0]->vivienda}}" class="form-control">
            </div>
            </div>



                <!--octavo doble triple-->
                <div class="col-md-6 form-group row">
                  <label for="inputTEL" class="col-sm-3 col-form-label">nombre referencia:</label>
                  <div class="col-sm-9">  
                  <input type="text" name="nombrereferencia" value="{{$usuario[0]->nombre_de_ref}}" class="form-control">
                  </div>
                </div>
              <div class="col-md-6 form-group row">
                <label for="inputUAM" class="col-sm-7 col-form-label">valor arriendo:</label>
                <div class="col-sm-5">
                <input type="text" name="valorarriendo" value="{{$usuario[0]->valor_arriendo}}" class="form-control">
                </div>
              </div>
              <!--individual-->
              <div class="col-md-12 form-group row">
                <label for="inputNAA" class="col-sm-2 col-form-label">valor egresos:</label>
                <div class="col-sm-9">
                <input type="text" name="valoregresos" value="{{$usuario[0]->valor_egresos}}" class="form-control">
                </div>
              </div>



                <table class="table table-bordered table-sm">
                      <thead>
                        <tr>
                          <th colspan="5	" scope="col"><h4 class="text-center">2.DATOS NUCLEO FAMILIAR</h4></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><p class="text-center">Nombre</p></th>
                          <th scope="row"><p class="text-center">Parentesco</p></th>
                          <th scope="row"><p class="text-center">Edad</p></th>
                          <th scope="row"><p class="text-center">Nivel educativo</p></th>
                          <th scope="row"><p class="text-center">Ocupacion</p></th>
                        </tr>
                        <tr>
                          
                          <td><input type="text" name="nombre1"value="{{$usuario[0]->nombre1}}" class="form-control"></td>
                          <td><input type="text" name="parentesco1"value="{{$usuario[0]->parentesco1}}" class="form-control"></td>
                          <td><input type="text" name="edad1" value="{{$usuario[0]->edad1}}" class="form-control"></td>
                          <td><input type="text" name="niveleducativo1" value="{{$usuario[0]->nivel_educativo1}}" class="form-control"></td>
                          <td><input type="text" name="ocupacion1" value="{{$usuario[0]->ocupacion1}}" class="form-control"></td>
                          </tr>
                          <tr>
                          
                          <td><input type="text" name="nombe2" value="{{$usuario[0]->nombre2}}" class="form-control"></td>
                          <td><input type="text" name="parentesco2" value="{{$usuario[0]->parentesco2}}" class="form-control"></td>
                          <td><input type="text" name="edad2" value="{{$usuario[0]->edad2}}" class="form-control"></td>
                          <td><input type="text" name="niveleducativo2" value="{{$usuario[0]->nivel_educativo2}}" class="form-control"></td>
                          <td><input type="text" name="ocupacion2" value="{{$usuario[0]->ocupacion2}}" class="form-control"></td>
                          </tr>
                          <tr>
                          
                          <td><input type="text" name="nombre3" value="{{$usuario[0]->nombre3}}" class="form-control"></td>
                          <td><input type="text" name="parentesco3" value="{{$usuario[0]->parentesco3}}" class="form-control"></td>
                          <td><input type="text" name="edad3" value="{{$usuario[0]->edad3}}" class="form-control"></td>
                          <td><input type="text" name="niveleducativo3" value="{{$usuario[0]->nivel_educativo3}}" class="form-control"></td>
                          <td><input type="text" name="ocupacio3" value="{{$usuario[0]->ocupacion3}}" class="form-control"></td>
                          </tr>
                          <tr>
                          
                          <td><input type="text" name="nombre4" value="{{$usuario[0]->nombre4}}" class="form-control"></td>
                          <td><input type="text" name="parentesco4" value="{{$usuario[0]->parentesco4}}" class="form-control"></td>
                          <td><input type="text" name="edad4" value="{{$usuario[0]->edad4}}" class="form-control"></td>
                          <td><input type="text" name="niveleducativo4" value="{{$usuario[0]->nivel_educativo4}}" class="form-control"></td>
                          <td><input type="text" name="nombreAspirante" value="{{$usuario[0]->ocupacion4}}" class="form-control"></td>
                          </tr>
                          <tr>
                          
                          <td><input type="text" name="nombre5" value="{{$usuario[0]->nombre5}}" class="form-control"></td>
                          <td><input type="text" name="parentesco5" value="{{$usuario[0]->parentesco5}}" class="form-control"></td>
                          <td><input type="text" name="edad5" value="{{$usuario[0]->edad5}}" class="form-control"></td>
                          <td><input type="text" name="niveleducativo5" value="{{$usuario[0]->nivel_educativo5}}" class="form-control"></td>
                          <td><input type="text" name="ocupacion5" value="{{$usuario[0]->ocupacion5}}" class="form-control"></td>
                          </tr>
                          <tr>
                          
                          <td><input type="text" name="nombre6" value="{{$usuario[0]->nombre6}}" class="form-control"></td>
                          <td><input type="text"name="parentesco6" value="{{$usuario[0]->parentesco6}}" class="form-control"></td>
                          <td><input type="text" name="edad6" value="{{$usuario[0]->edad6}}" class="form-control"></td>
                          <td><input type="text" name="niveleducativo6" value="{{$usuario[0]->nivel_educativo6}}" class="form-control"></td>
                          <td><input type="text" name="ocupacion6" value="{{$usuario[0]->ocupacion6}}" class="form-control"></td>
                          </tr>
                          </tbody>
                    </table>
          <!--finaliza tablas nucleo familiar-->
          <!--inicia tabla informacion academica-->



        <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th colspan="6" scope="col"><h4 class="text-center">3. INFORMACION ACADEMICA</h4></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><p class="text-center">Titulo</p></th>
                <th scope="row"><p class="text-center">Institucion educativa</p></th>
                <th scope="row"><p class="text-center">Año de finalización</p></th>
                <th scope="row"><p class="text-center">Titulo obtenido</p></th>
              </tr>
              <tr>
              	<td>primaria</td>
              	<td><input type="text" name="institucion1" value="{{$usuario[0]->institucion_edu1}}" class="form-control"></td>
              	<td><input type="text" name="añofinalizado1" value="{{$usuario[0]->año_finalizado1}}" class="form-control"></td>
              	<td><input type="text" name="titulooptenido1" value="{{$usuario[0]->titulo_obtenido1}}" class="form-control"></td>
              
              </tr>
              <tr>
                <td>Secundaria</td>
                <td><input type="text" name="institucioedu2" value="{{$usuario[0]->institucion_edu2}}" class="form-control"></td>
              	<td><input type="text" name="añofinalizado2" value="{{$usuario[0]->año_finalizado2}}" class="form-control"></td>
              	<td><input type="text" name="titulooptenido2" value="{{$usuario[0]->titulo_obtenido2}}" class="form-control"></td>
              </tr>
              <tr>
                <td>Tecnica</td>
                <td><input type="text" name="instiedu3" value="{{$usuario[0]->institucion_edu3}}" class="form-control"></td>
              	<td><input type="text" name="añofinalizado3"value="{{$usuario[0]->año_finalizado3}}" class="form-control"></td>
              	<td><input type="text" name="titulooptenido3"value="{{$usuario[0]->titulo_obtenido3}}" class="form-control"></td>
              </tr>
              <tr>
                <td>Pregrado</td>
                <td><input type="text" name="instiedu4" value="{{$usuario[0]->institucion_edu4}}" class="form-control"></td>
              	<td><input type="text" name="añofinalizado4" value="{{$usuario[0]->año_finalizado4}}" class="form-control"></td>
              	<td><input type="text" name="titulooptenido4" value="{{$usuario[0]->titulo_obtenido4}}" class="form-control"></td>
              </tr>
              <tr>
                <td>Postgrado</td>
                <td><input type="text" name="instiedu5" value="{{$usuario[0]->institucion_edu5}}" class="form-control"></td>
              	<td><input type="text" name="añofinalizado5" value="{{$usuario[0]->año_finalizado5}}" class="form-control"></td>
              	<td><input type="text" name="titulooptenido5" value="{{$usuario[0]->titulo_obtenido5}}" class="form-control"></td>
              </tr>
             	
            </tbody>
        </table>
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th colspan="6" scope="col"><h4 class="text-center">4. INFORMACION LABORAL</h4></th>
               </tr>
              </thead>
              <tbody>
              <tr>
                <th scope="row"><p class="text-center">Nombre de la empresa</p></th>
                <th scope="row"><p class="text-center">Tiempo</p></th>
                <th scope="row"><p class="text-center">Motivo del retiro</p></th>
                <th scope="row"><p class="text-center">Observaciones/Funciones</p></th>
              </tr>
              <tr>
                <td><input type="text" name="nombreempr1" value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_emp1}}" class="form-control"></td>
              	<td><input type="text" name="tiempo1" value=" {{$usuario[0]->datospersonales2[0]->tiempo1}}" class="form-control"></td>
             	  <td><input type="text" name="motivoretiro1" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro1}}" class="form-control"></td>
                <td><input type="text" name="obserfuncio1" value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun1}}" class="form-control"></td> 
              </tr>
              <tr>
                <td><input type="text" name="nombreempresa2"value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_emp2}}" class="form-control"></td>
              	<td><input type="text" name="tiempo2"value=" {{$usuario[0]->datospersonales2[0]->tiempo2}}" class="form-control"></td>
             	  <td><input type="text" name="motivoretiro2" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro2}}" class="form-control"></td>
                <td><input type="text" name="obserfuncio2"value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun2}}" class="form-control"></td> 
              </tr>
              <tr>
                <td><input type="text" name="nombreempresa3" value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_empresa3}}" class="form-control"></td>
              	<td><input type="text" name="tiempo3" value=" {{$usuario[0]->datospersonales2[0]->tiempo3}}" class="form-control"></td>
             	  <td><input type="text" name="motivoretiro3" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro3}}" class="form-control"></td>
                <td><input type="text" name="obserfuncio3" value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun3}}" class="form-control"></td> 
             </tr>
             <tr>
                <td><input type="text" name="nombreempresa4" value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_empresa4}}" class="form-control"></td>
              	<td><input type="text" name="tiempo4" value=" {{$usuario[0]->datospersonales2[0]->tiempo4}}" class="form-control"></td>
             	  <td><input type="text" name="motivoretiro4" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro4}}" class="form-control"></td>
                <td><input type="text" name="obserfuncio4" value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun4}}" class="form-control"></td> 
              </tr>
              <tr>
                <td><input type="text" name="nombreempresa5" value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_empresa5}}" class="form-control"></td>
              	<td><input type="text" name="tiempo5" value=" {{$usuario[0]->datospersonales2[0]->tiempo5}}" class="form-control"></td>
             	  <td><input type="text" name="motivoretiro5" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro5}}" class="form-control"></td>
                <td><input type="text" name="obserfuncio5" value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun5}}" class="form-control"></td> 
             </tr>
             <tr>
                <td><input type="text" name="nombreempresa6" value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_empresa6 }}" class="form-control"></td>
              	<td><input type="text" name="tiempo6" value=" {{$usuario[0]->datospersonales2[0]->tiempo6}}" class="form-control"></td>
             	  <td><input type="text" name="motivoretiro6" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro6}}" class="form-control"></td>
                <td><input type="text" name="obserfuncio6" value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun6}}" class="form-control"></td> 
             </tr>
             </tbody>
             </table>
             <table class="table table-bordered table-sm">
             <thead>
             
             <tr>
             <th colspan="6" scope="col"><h4 class="text-center">5.SALUD</h4></th>
             </tr>
             <tr>
             <th colspan="6" scope="col"><h4 class="">5.1. Historia de consumo SPA</h4></th>
             </tr>
             <tbody>
             <tr>
                <th scope="row"><p class="text-center">Sustancia</p></th>
                <th scope="row"><p class="text-center">Frecuencia</p></th>
                <th scope="row"><p class="text-center">Nivel de consumo</p></th>
                <th scope="row"><p class="text-center">Observaciones</p></th>
             </tr>
             <tr>
             	 <td>Cigarrillo</td>
                <td><input type="text" name="frecuencia1" value="{{$usuario[0]->datospersonales2[0]->frecuencia1}}" class="form-control"></td>
                <td><input type="text" name="nivelconsumo1" value="{{$usuario[0]->datospersonales2[0]->nivel_de_consumo1}}" class="form-control"></td>
                <td><input type="text" name="observaciones1" value="{{$usuario[0]->datospersonales2[0]->observaciones1}}" class="form-control"></td>
              </tr>
              <tr>
             	 <td>Alcohol</td>
             	 <<td><input type="text" name="frecuencia2" value="{{$usuario[0]->datospersonales2[0]->frecuencia2}}" class="form-control"></td>
                <td><input type="text" name="nivelconsumo2" value="{{$usuario[0]->datospersonales2[0]->nivel_de_consumo2}}" class="form-control"></td>
                <td><input type="text" name="observaciones2" value="{{$usuario[0]->datospersonales2[0]->observaciones2}}" class="form-control"></td>
              </tr>
              <tr>
             	 <td>Marihuana</td>
             	 <td><input type="text"  name="frecuencia3" value="{{$usuario[0]->datospersonales2[0]->frecuencia3}}" class="form-control"></td>
                <td><input type="text" name="nivelconsumo3" value="{{$usuario[0]->datospersonales2[0]->nivel_de_consumo3}}" class="form-control"></td>
                <td><input type="text" name="observaciones3" value="{{$usuario[0]->datospersonales2[0]->observaciones3}}" class="form-control"></td>
              <tr>
             	 <td>Otras</td>
             	 <td><input type="text"  name="frecuencia4" value="{{$usuario[0]->datospersonales2[0]->frecuencia4}}" class="form-control"></td>
                <td><input type="text" name="nivelconsumo4" value="{{$usuario[0]->datospersonales2[0]->nivel_de_consumo4}}" class="form-control"></td>
                <td><input type="text" name="observaciones4" value="{{$usuario[0]->datospersonales2[0]->observaciones4}}" class="form-control"></td>
              </tr>
               </tbody>
            </thead>
           </table>



           <button type="submit" class="btn btn-primary">Actualizar</button>    
           
    </form>
    
</div>



   
  

@endsection