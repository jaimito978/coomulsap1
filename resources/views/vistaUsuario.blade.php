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

          
            
           <div class="container-fluid">
        <div class=”container”>
      
        <div>
           <h1 class="text-center mt-4"> FORMATO <h1>
            <h1 class="text-center mt-4"> ENTREVISTA DE SELECCION<h1>
            <h2 class="text-center mt-5">5.2. Antecedentes de salud.</h2>
            </div>
   <!--primer doble-->
   <div class="row mt-3">
  
<div class="col-md-6 form-group row">
    <label for="inputEPS" class="col-sm-2 col-form-label">EPS:</label>
    <div class="col-sm-10">
    <input type="text" name="Eps"  value="{{$usuario[0]->antecedentes[0]->eps}}"class="form-control">
    </div>
</div>

<div class="col-md-6 form-group row">
    <label for="inputAFP" class="col-sm-2 col-form-label">AFP:</label>
    <div class="col-sm-10">
    <input type="text" name="AFP" value="{{$usuario[0]->antecedentes[0]->afp}}" class="form-control" >
    </div>
</div>

<!--segundo doble-->

<div class="col-md-6 form-group row">
<label for="inputUM" class="col-sm-6 col-form-label">Última consulta médica:</label>
<div class="col-sm-6">
    <input type="date" name="ultima" value="{{$usuario[0]->antecedentes[0]->ultima_consulta_medica}}" class="form-control">
</div>
</div>

<div class="col-md-6 form-group row">
<label for="inputCIRU" class="col-sm-2 col-form-label">Cirugías</label>
<div class="col-sm-10">
    <input type="text" name="cirugias" value="{{$usuario[0]->antecedentes[0]->cirugias}}" class="form-control"  placeholder="Cirugías" >
</div>
</div>


<!--tercer doble-->

<div class="col-md-6 form-group row">
<label for="inputMC" class="col-sm-4 col-form-label">Motivo consulta:</label>
    <div class="col-sm-8">
    <input type="text" name="motivoconsulta" value="{{$usuario[0]->antecedentes[0]->motivo_consulta}}" class="form-control">
    </div>
</div>

<div class="col-md-6 form-group row">
    <label for="inputINTO" class="col-sm-3 col-form-label">Intoxicaciones:</label>
    <div class="col-sm-9">
    <input type="text" name="intoxicaciones" value="{{$usuario[0]->antecedentes[0]->intoxicaciones}}"class="form-control">
    </div>
</div>


<!--cuarto doble-->


<div class="col-md-6 form-group row">
<label for="inputAS" class="col-sm-4 col-form-label">Accidentes sufridos:</label>
<div class="col-sm-8">
    <input type="text" name="accidentessufridos" value="{{$usuario[0]->antecedentes[0]->accidentes_sufridos}}"class="form-control">
</div>
</div>

<div class="col-md-6 form-group row">
<label for="inputFRAC" class="col-sm-2 col-form-label">Fracturas:</label>
<div class="col-sm-10">
    <input type="text" name="fracturas" value="{{$usuario[0]->antecedentes[0]->fracturas}}"class="form-control">
</div>
</div>

<!--quinto doble en bloque-->

<div class="col-md-12 form-group row">
<label for="inputADE" class="col-sm-3 col-form-label">Antecedente de enfermedades:</label>
<div class="col-sm-8">
    <input type="text" name="antecedentesenfermedades" value="{{$usuario[0]->antecedentes[0]->antecedentes_enfermedades}}" class="form-control">
</div>
</div>

<div class="col-md-12 form-group row">
<label for="inputTPP" class="col-sm-4 col-form-label">Trastornos psicológicos o psiquiátricos:</label>
<div class="col-sm-7">
    <input type="text" name="trastornos" value="{{$usuario[0]->antecedentes[0]->trastornos_psicotricos}}" class="form-control">
</div>
</div>


<!--sexto doble en bloque-->
<div class="col-md-12 form-group row">
<label for="inputILUA" class="col-sm-4 col-form-label">Incapacidad más larga en el último año:</label>
    <div class="col-sm-7">
    <input type="text" name="incapacidadmaslarga" value="{{$usuario[0]->antecedentes[0]->incapacidad_mas_larga}}"class="form-control">
    </div>
</div>

<div class="col-md-12 form-group row">
    <label for="inputER" class="col-sm-3 col-form-label">Enfermedades respiratorias:</label>
    <div class="col-sm-8">
    <input type="text" name="enfermedadesrespiratorias" value="{{$usuario[0]->antecedentes[0]->enfermedades_respiratorias}}"class="form-control">
    </div>
</div>

<!--septimo doble-->

<div class="col-md-12 form-group row">
<label for="inputEQGI" class="col-sm-4 col-form-label">Enfermedades que han generado incapacidad:</label>
    <div class="col-sm-7">
    <input type="text" name="enfermedadegeneradoincapacidad" value="{{$usuario[0]->antecedentes[0]->enfermedades_incapacidad}}"class="form-control">
    </div>
</div>

<div class="col-md-12 form-group row">
    <label for="inputDC" class="col-sm-2 col-form-label">Dolores crónicos:</label>
    <div class="col-sm-9">
    <input type="text" name="dolorescronicos" value="{{$usuario[0]->antecedentes[0]->dolores_cronicos}}"class="form-control">
    </div>
</div>


<div class="col-md-12 form-group row">
<label for="inputOB" class="col-sm-2 col-form-label">Observaciones:</label>
<div class="col-sm-9">
<input type="text" name="observaciones" value="{{$usuario[0]->antecedentes[0]->observaciones}}"class="form-control">
</div>
</div>
</div>


<!--punto nuevo-->

<h2 class="text-center mt-3">6. COMPETENCIAS ESPECIFICAS</h2>

<div class="row mt-3">
<!--bloque 6.1-->
<div class="col-md-4">
<h5 class="text-center">6.1. Manejo de medios tecnológicos</h5>
<!--radio word-->
<div class="row">
<legend class="col-form-label col-sm-2 pt-0">WORD</legend>
 <input name="word" value="{{$usuario[0]->antecedentes[0]->word}}" class="form-control">
  <!--radio excel-->
<legend class="col-form-label col-sm-2 pt-0">EXCEL</legend>

<input name="excel" value="{{$usuario[0]->antecedentes[0]->excel}}" class="form-control">
 
<!--radio powerpoint-->
<legend class="col-form-label col-sm-2 pt-0">PPOINT</legend>
<input name="powerpoint" value="{{$usuario[0]->antecedentes[0]->ppoint}}" class="form-control">
 
<!--text otros-->
<div>
<label for="inputOTRO" class="col-sm-2 col-form-label">Otros:</label>
<div class="col-sm-10">
<input name="otros" value="{{$usuario[0]->antecedentes[0]->otros}}" class="form-control">
</div>

</div>
</div>
</div>
<!--fin 6.1-->
<!--inicio 6.2-->
<div class="col-md-5">
<h5 class="text-center">6.2. Habilidades comunicativas</h5>
<!--radio Riqueza del vocabulario-->
<div class="row">
<legend class="col-form-label col-sm-6 pt-0">Riqueza del vocabulario</legend>

<input name="riquesa" value="{{$usuario[0]->antecedentes[0]->riquesa_del_vocavulario}}" class="form-control">
 

<!--radio fluidez verbal-->
<legend class="col-form-label col-sm-6 pt-0">Fluidez verbal</legend>

<input name="fluidezverbal" value="{{$usuario[0]->antecedentes[0]->fluidez_verbal}}" class="form-control">
 


<!--radio precision-->
<legend class="col-form-label col-sm-6 pt-0">Precisión</legend>

<input name="presicion" value="{{$usuario[0]->antecedentes[0]->precision}}" class="form-control">



<!--valor global del lenguaje verbal-->
<legend class="col-form-label col-sm-6 pt-0">Valor global del lenguaje verbal</legend>

<input name="valorglobal" value="{{$usuario[0]->antecedentes[0]->valor_global}}" class="form-control">


</div>
</div>
<!--fin 6.2-->
<!--inicio 6.3-->
<div class="col-md-3">
<h5 class="text-center">6.3. Otros conocimientos</h5>
<div class="col-md-12 form-group row">
<label for="inputPEDA" class="col-sm-12 col-form-label">Pedagogía:</label>
<div class="col-sm-12">
<input name="pedagogia" value="{{$usuario[0]->antecedentes[0]->pedagogia}}" class="form-control">
</div>
</div>

<div class="col-md-12 form-group row">
<label for="inputLEGI" class="col-sm-12 col-form-label">Legislación:</label>
<div class="col-sm-12">
<input name="legislacion" value="{{$usuario[0]->antecedentes[0]->legislacion}}" class="form-control">
</div>
</div>
</div>
<div class="col-md-12 form-group row">
<label for="inputLEGI" class="col-sm-12 col-form-label">ver perfil y funciones:</label>
<div class="col-sm-12">
<input name="perfilesfunciones" value="{{$usuario[0]->antecedentes[0]->ver_perfil_y_funciones}}" class="form-control">
</div>
</div>
<div class="col-md-12 form-group row">
<label for="inputOBSE" class="col-sm-2 col-form-label">Observaciones:</label>
<div class="col-sm-12">
<input name="observaciones2" value="{{$usuario[0]->antecedentes[0]->observaciones2}}" class="form-control">
</div>
</div>
</div>
<!--fin 6.3-->

<!--inicio 7. motivacion-->

<h2 class="text-center mt-3">7. MOTIVACION</h2>

<div class="col-md-12 form-group row mt-3">
<label for="inputMPLC" class="col-sm-12 col-form-label">Motivacion para laborar en Coomulsap:</label>
<div class="col-sm-10">
<input name="motivacion" value="{{$usuario[0]->antecedentes[0]->motivacion_en_coomulsap}}" class="form-control">
</div>
</div>

<div class="col-md-12 form-group row">
<label for="inputPMCP" class="col-sm-12 col-form-label">Proyecto a mediano y corto plazo:</label>
<div class="col-sm-10">
<input name="proyectoamedianoylargoplazo" value="{{$usuario[0]->antecedentes[0]->proyecto_a_mediano}}" class="form-control">
</div>
</div>

<div class="col-md-12 form-group row">
<label for="inputDRP" class="col-sm-12 col-form-label">Disponibilidad a los requerimientos del puesto:</label>
<div class="col-sm-10">
<input name="disponibilidaddelpuesto" value="{{$usuario[0]->antecedentes[0]->disponibilidad_puesto}}" class="form-control">
</div>
</div>

<div class="col-md-12 form-group row">
<label for="inputECSO" class="col-sm-12 col-form-label">Retribucion: expectativas del candidato y comentarios sobre la oferta que se le hace:</label>
<div class="col-sm-10">
<input name="retribucion" value="{{$usuario[0]->antecedentes[0]->retribucion_expectativas}}" class="form-control">
</div>
</div>
<!--fin 7-->
<!--inicio 8. historia familiar-->
<h2 class="text-center mt-3">8. HISTORIA FAMILIAR</h2>
<div class="form-group mt-3">
<input name="historiafamiliar" value="{{$usuario[0]->antecedentes[0]->historia_familiar}}" class="form-control">
</div>

<div class="form-group mt-3">
<label for="conceptoentre1">Concepto segundo entrevistador:</label>
<input name="conceptoentrevistador" value="{{$usuario[0]->antecedentes[0]->concepto_segundo_entrevistador}}" class="form-control">
</div>

<div class="col-md-12 form-group row mt-3">
<label for="inputOUIT" class="col-sm-12 col-form-label">¿Oculto usted información para obtener este trabajo?</label>
<div class="col-sm-10">
<input name="oculto" value="{{$usuario[0]->antecedentes[0]->oculto_informacion}}" class="form-control">
</div>
</div>


<div class="col-md-12 form-group row mt-3">
<label for="inputRESP" class="col-sm-12 col-form-label">Responsable:</label>
<div class="col-sm-10">
<input name="responsable" value="{{$usuario[0]->antecedentes[0]->responsable}}" class="form-control">
</div>
</div>

</form>

</div>
</div>

<div class="container">
	    @csrf
<body>
  <div class="container">
	<form>
		 <h2 class="text-center mt-4">9. Evaluacion de Candidato por Gerencia.</h2>
		 <!--primer doble-->

<div class="row mt-4">

<div class="col-md-6 form-group row">
    <label for="inputFEC" class="col-sm-3 col-form-label">Fecha:</label>
    <div class="col-sm-9">
    <input name="fecha" value="{{$usuario[0]->evaluacion[0]->fecha}}" class="form-control">
  </div>
</div>


<div class="col-md-6 form-group row">
    <label for="inputHC" class="col-sm-3 col-form-label">Hora citado:</label>
    <div class="col-sm-9">
    <input name="horacitacion" value="{{$usuario[0]->evaluacion[0]->hora_citado}}" class="form-control">
    </div>
  </div>
  <!--solo-->


<!--solo-->

<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Nombre del proyecto:</label>
    <div class="col-sm-10">
    <input name="nombredelproyecto" value="{{$usuario[0]->evaluacion[0]->nombre_del_proyecto}}" class="form-control">
    </div>
  </div>

<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Director del proyecto:</label>
    <div class="col-sm-10">
    <input name="directordelproyecto" value="{{$usuario[0]->evaluacion[0]->director_del_proyecto}}" class="form-control">
    </div>
  </div>
  
<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Nombres y apellidos del aspirante:</label>
    <div class="col-sm-10">
    <input name="nombrecompletoaspirante" value="{{$usuario[0]->evaluacion[0]->nombre_y_apellido_del_aspirante}}" class="form-control">
    </div>
  </div>

<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Profesion y cargo al que aspira:</label>
    <div class="col-sm-10">
    <input name="profesionalqueaspira" value="{{$usuario[0]->evaluacion[0]->profesion_y_cargo_al_que_aspira}}" class="form-control">
    </div>
  </div>
  </div>
  </div>
<div class="container">
  <h2 class="text-center mt-4">10. Informacion Personal del Candidato.</h2>
  <div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-12 col-form-label">Que actividades realiza en el tiempo libre:</label>
    <div class="col-sm-12">
    <input name="actividadquerealizatiempolibre" value="{{$usuario[0]->evaluacion[0]->actividad}}" class="form-control">
    </div>
  </div>
  <div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-12 col-form-label">Metas y proyectos a corto y mediano plazo:</label>
    <div class="col-sm-12">
    <input name="metas" value="{{$usuario[0]->evaluacion[0]->metas}}" class="form-control">
    </div>
  </div>
</div>

           
                <th colspan="12" scope="col"><h4 class="text-center">11.Habilidades Comunicativa del Candidato</h4></th>
           
            <tbody>
                        
                <td>Articula ideas de forma eficaz</td>
                <td><br></td>
                <input name="articulaideas" value="{{$usuario[0]->evaluacion[0]->articula_ideas}}" class="form-control">
              </tbody>
              <tbody>
             <tr>
                <td>Se expresa correctamente</td>
                <td><br></td>
              	<input name="expresacorrectamente" value="{{$usuario[0]->evaluacion[0]->se_expresa}}" class="form-control">
          
              </tr>
               <tr>
                <td>Posee capacidad de escucha</td>
                <td><br></td>
                <input name="poseeescucha" value="{{$usuario[0]->evaluacion[0]->escucha}}" class="form-control">
       
              </tr>
               </tbody>
          </table>
        
            <thead>
              <tr>
                <th colspan="12" scope="col"><h4 class="text-center">12.Impresion General</h4></th>
              </tr>
            </thead>
            <tbody>
           
              <td>ideas generales sobre pedagogia educacion y didactica</td>
                <td><br></td>
              	<input name="ideasgenerales" value="{{$usuario[0]->evaluacion[0]->ideas}}" class="form-control">
          
              </tr>
             <tr>
                <td>Entorno social y fisico en el que vive</td>
              	<td><br></td>
                <input name="entorno" value="{{$usuario[0]->evaluacion[0]->entorno}}" class="form-control">
          
              </tr>
               <tr>
                <td>Administracion del tiempo libre</td>
                <td><br></td>
              	<input name="administracion" value="{{$usuario[0]->evaluacion[0]->administracion}}" class="form-control">
         
              </tr>
              <tr>
                <td>Conocimiento sobre legislacion educativa</td>
              	<td><br></td>
              	<input name="conocimiento" value="{{$usuario[0]->evaluacion[0]->conocimiento}}" class="form-control">
          
              </tr>
              <tr>
                <td>Metodologia de enseñanza educativa</td>
              	<td><br></td>
              	<input name="metodologia" value="{{$usuario[0]->evaluacion[0]->metodologia}}" class="form-control">
          
              </tr>
              <tr>
                <td>Manejo de la disciplina y control del grupo</td>
              	<td><br></td>
              	<input name="manejo" value="{{$usuario[0]->evaluacion[0]->manejo}}" class="form-control">
         
              </tr>
              <tr>
                <td>Presentacion personal</td>
              	<td><br></td>
                <input name="presentacion" value="{{$usuario[0]->evaluacion[0]->presentacion}}" class="form-control">
         
              </tr>
              <tr>
                <td>Actitud y aptitud reflejada en la entrevista</td>
              	<td><br></td>
                <input name="actitud" value="{{$usuario[0]->evaluacion[0]->actitud}}" class="form-control">
         
              </tr>
               </tbody>
         
          <thead>
              <tr>
                <th colspan="12" scope="col"><h4 class="text-center">13.Observaciones Generales</h4></th>
              </tr>
            </thead>
            <tr>
            <input name="observacionesgenerales" value="{{$usuario[0]->evaluacion[0]->observaciones_generales}}" class="form-control">

           
            </div>




           <button type="submit" class="btn btn-primary">Actualizar</button>    
           
    </form>
    
</div>



   
  

@endsection