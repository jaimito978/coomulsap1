@extends('layouts.app')

@section('content')



<div class="container">

<form  method="POST" enctype="multipart/form-data">
  @csrf
    <h2 class="text-center mt-4"> Datos personales de: {{ $usuario[0]->nombre_aspirante}} </h2>
    <br>
   
<!--primer doble-->

<div class="row mt-3">

<div class="col-md-6 form-group row">
<label for="inputFEC" class="col-sm-2 col-form-label">Fecha:</label>
<div class="col-sm-10">
<input type="date" class="form-control"  value="{{$usuario[0]->fecha}}" >
</div>
</div>


<div class="col-md-6 form-group row">
  <label for="inputHC" class="col-sm-4 col-form-label">Hora citado:</label>
  <div class="col-sm-8">
  <input type="text" value="{{$usuario[0]->hora_citado}}" class="form-control">
  </div>
  </div>
<!--solo-->

<div class="col-md-12 form-group row">
  <label for="inputNAA" class="col-sm-2 col-form-label">Nombre del aspirante:</label>
  <div class="col-sm-9">
  <input type="text" value="{{$usuario[0]->nombre_aspirante}}" class="form-control">
  </div>
  </div>
  <!--segundo doble-->
  <legend class="col-form-label col-sm-4 pt-0">sexo:</legend>
  <div class="col-sm-2">
  <input type="text" value="{{$usuario[0]->sexo}}" class="form-control">
       
</div>

<div class="col-md-6 form-group row">
  <label for="inputCAR" class="col-sm-2 col-form-label">Cargo:</label>
  <div class="col-sm-10">
  <input type="text" value="{{$usuario[0]->cargo}}" class="form-control">
  </div>
  </div>

<!--finaliza segundo doble-->
<!--inicia tercer doble-->


<legend class="col-form-label col-sm-4 pt-0">edad:</legend>
  <div class="col-sm-2">
  <input type="text" value="{{$usuario[0]->edad}}" class="form-control">
  </div>
  

  <div class="col-md-6 form-group row">
  <label for="inputCAR" class="col-sm-2 col-form-label">estado civil:</label>
  <div class="col-sm-10">
      
  <input type="text" value="{{$usuario[0]->estado_civil}}" class="form-control">
  </div>
  </div>  


    	
    <!--termina tercer doble-->

<div class="col-md-12 form-group row">
  <label for="inputTIO" class="col-sm-2 col-form-label">Titulo otorgado:</label>
  <div class="col-sm-9">
  <input type="text" value="{{$usuario[0]->titulo_otorgado}}" class="form-control">
    
  </div>
  </div>
    <!--termina tercer doble-->


  <!--cuarto doble-->

<div class="col-md-6 form-group row">
  <label for="inputCC" class="col-sm-3 col-form-label">Cédula:</label>
  <div class="col-sm-9">
  <input type="text" value="{{$usuario[0]->cedula}}" class="form-control">
  </div>
  </div>



<div class="col-md-6 form-group row">
  <label for="inputDIR" class="col-sm-4 col-form-label">Dirección:</label>
  <div class="col-sm-8">
  <input type="text" value="{{$usuario[0]->direccion}}" class="form-control">
  </div>
  </div>
  

  <!--quinto doble-->


  <div class="col-md-6 form-group row">
  <label for="inputTEL" class="col-sm-3 col-form-label">Teléfono:</label>
  <div class="col-sm-9">
  <input type="text" value="{{$usuario[0]->telefono}}" class="form-control">
  </div>
  </div>



<div class="col-md-6 form-group row">
  <label for="inputUAM" class="col-sm-7 col-form-label">Ubicación área metropolitana:</label>
  <div class="col-sm-5">
  <input type="text" value="{{$usuario[0]->municipio}}" class="form-control">
  </div>
  </div>

   <!--sexto doble-->

  <div class="col-md-6 form-group row">
  <label for="inputTEL" class="col-sm-3 col-form-label">referencia personal:</label>
  <div class="col-sm-9">  
  <input type="text" value="{{$usuario[0]->ref_personal}}" class="form-control">
  </div>
  </div>
  <div class="col-md-6 form-group row">
  <label for="inputUAM" class="col-sm-7 col-form-label">vivienda:</label>
  <div class="col-sm-5">
  <input type="text" value="{{$usuario[0]->vivienda}}" class="form-control">
  </div>
  </div>



<!--octavo doble triple-->
<div class="col-md-6 form-group row">
  <label for="inputTEL" class="col-sm-3 col-form-label">nombre referencia:</label>
  <div class="col-sm-9">  
  <input type="text" value="{{$usuario[0]->nombre_de_ref}}" class="form-control">
  </div>
  </div>
  <div class="col-md-6 form-group row">
  <label for="inputUAM" class="col-sm-7 col-form-label">valor arriendo:</label>
  <div class="col-sm-5">
  <input type="text" value="{{$usuario[0]->valor_arriendo}}" class="form-control">
  </div>
  </div>
  <!--individual-->
  <div class="col-md-12 form-group row">
  <label for="inputNAA" class="col-sm-2 col-form-label">valor egresos:</label>
  <div class="col-sm-9">
  <input type="text" value="{{$usuario[0]->valor_egresos}}" class="form-control">
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
              	
              	<td><input type="text" value="{{$usuario[0]->nombre1}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->parentesco1}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->edad1}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->nivel_educativo1}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->ocupacion1}}" class="form-control"></td>
                </tr>
                <tr>
              	
                <td><input type="text" value="{{$usuario[0]->nombre2}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->parentesco2}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->edad2}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->nivel_educativo2}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->ocupacion2}}" class="form-control"></td>
                </tr>
                <tr>
              	
                <td><input type="text" value="{{$usuario[0]->nombre3}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->parentesco3}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->edad3}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->nivel_educativo3}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->ocupacion3}}" class="form-control"></td>
                </tr>
                <tr>
              	
                <td><input type="text" value="{{$usuario[0]->nombre4}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->parentesco4}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->edad4}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->nivel_educativo4}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->ocupacion4}}" class="form-control"></td>
                </tr>
                <tr>
              	
                <td><input type="text" value="{{$usuario[0]->nombre5}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->parentesco5}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->edad5}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->nivel_educativo5}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->ocupacion5}}" class="form-control"></td>
                </tr>
                <tr>
              	
                <td><input type="text" value="{{$usuario[0]->nombre6}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->parentesco6}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->edad6}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->nivel_educativo6}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->ocupacion6}}" class="form-control"></td>
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
              	<td><input type="text" value="{{$usuario[0]->institucion_edu1}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->año_finalizado1}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->titulo_obtenido1}}" class="form-control"></td>
              
              </tr>
              <tr>
                <td>Secundaria</td>
                <td><input type="text" value="{{$usuario[0]->institucion_edu2}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->año_finalizado2}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->titulo_obtenido2}}" class="form-control"></td>
              </tr>
              <tr>
                <td>Tecnica</td>
                <td><input type="text" value="{{$usuario[0]->institucion_edu3}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->año_finalizado3}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->titulo_obtenido3}}" class="form-control"></td>
              </tr>
              <tr>
                <td>Pregrado</td>
                <td><input type="text" value="{{$usuario[0]->institucion_edu4}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->año_finalizado4}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->titulo_obtenido4}}" class="form-control"></td>
              </tr>
              <tr>
                <td>Postgrado</td>
                <td><input type="text" value="{{$usuario[0]->institucion_edu5}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->año_finalizado5}}" class="form-control"></td>
              	<td><input type="text" value="{{$usuario[0]->titulo_obtenido5}}" class="form-control"></td>
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
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_emp1}}" class="form-control"></td>
              	<td><input type="text" value=" {{$usuario[0]->datospersonales2[0]->tiempo1}}" class="form-control"></td>
             	  <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro1}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun1}}" class="form-control"></td> 
              </tr>
              <tr>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_emp2}}" class="form-control"></td>
              	<td><input type="text" value=" {{$usuario[0]->datospersonales2[0]->tiempo2}}" class="form-control"></td>
             	  <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro2}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun2}}" class="form-control"></td> 
              </tr>
              <tr>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_empresa3}}" class="form-control"></td>
              	<td><input type="text" value=" {{$usuario[0]->datospersonales2[0]->tiempo3}}" class="form-control"></td>
             	  <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro3}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun3}}" class="form-control"></td> 
             </tr>
             <tr>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_empresa4}}" class="form-control"></td>
              	<td><input type="text" value=" {{$usuario[0]->datospersonales2[0]->tiempo4}}" class="form-control"></td>
             	  <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro4}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun4}}" class="form-control"></td> 
              </tr>
              <tr>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_empresa5}}" class="form-control"></td>
              	<td><input type="text" value=" {{$usuario[0]->datospersonales2[0]->tiempo5}}" class="form-control"></td>
             	  <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro5}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun5}}" class="form-control"></td> 
             </tr>
             <tr>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->nombre_de_la_empresa6 }}" class="form-control"></td>
              	<td><input type="text" value=" {{$usuario[0]->datospersonales2[0]->tiempo6}}" class="form-control"></td>
             	  <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->motivo_retiro6}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->observaciones_y_fun6}}" class="form-control"></td> 
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
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->frecuencia1}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->nivel_de_consumo1}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->observaciones1}}" class="form-control"></td>
              </tr>
              <tr>
             	 <td>Alcohol</td>
             	 <<td><input type="text" value="{{$usuario[0]->datospersonales2[0]->frecuencia2}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->nivel_de_consumo2}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->observaciones2}}" class="form-control"></td>
              </tr>
              <tr>
             	 <td>Marihuana</td>
             	 <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->frecuencia3}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->nivel_de_consumo3}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->observaciones3}}" class="form-control"></td>
              <tr>
             	 <td>Otras</td>
             	 <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->frecuencia4}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->nivel_de_consumo4}}" class="form-control"></td>
                <td><input type="text" value="{{$usuario[0]->datospersonales2[0]->observaciones4}}" class="form-control"></td>
              </tr>
               </tbody>
            </thead>
           </table>
           


      
    </form>
    
    </div>


    <div class=”container”>
      
    <form >
    

    <h2 class="text-center mt-5">5.2. Antecedentes de salud.</h2>
      <!--primer doble-->
      <div class="row mt-3">

    <div class="col-md-6 form-group row">
        <label for="inputEPS" class="col-sm-2 col-form-label">EPS:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->eps}}">
        </div>
    </div>

    <div class="col-md-6 form-group row">
        <label for="inputAFP" class="col-sm-2 col-form-label">AFP:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->afp}}">
        </div>
    </div>

    <!--segundo doble-->

    <div class="col-md-6 form-group row">
    <label for="inputUM" class="col-sm-6 col-form-label">Última consulta médica:</label>
    <div class="col-sm-6">
        <input type="date" class="form-control" value="{{$usuario[0]->antecedentes[0]->ultima_consulta_medica}}">
    </div>
    </div>

    <div class="col-md-6 form-group row">
    <label for="inputCIRU" class="col-sm-2 col-form-label">Cirugías</label>
    <div class="col-sm-10">
        <input type="text" class="form-control"value="{{$usuario[0]->antecedentes[0]->cirugias}}">
    </div>
    </div>


    <!--tercer doble-->

    <div class="col-md-6 form-group row">
    <label for="inputMC" class="col-sm-4 col-form-label">Motivo consulta:</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->motivo_consulta}}">
        </div>
    </div>

    <div class="col-md-6 form-group row">
        <label for="inputINTO" class="col-sm-3 col-form-label">Intoxicaciones:</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->intoxicaciones}}">
        </div>
    </div>


    <!--cuarto doble-->


    <div class="col-md-6 form-group row">
    <label for="inputAS" class="col-sm-4 col-form-label">Accidentes sufridos:</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->accidentes_sufridos}}">
    </div>
    </div>

    <div class="col-md-6 form-group row">
    <label for="inputFRAC" class="col-sm-2 col-form-label">Fracturas:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->fracturas}}">
    </div>
    </div>

    <!--quinto doble en bloque-->

    <div class="col-md-12 form-group row">
    <label for="inputADE" class="col-sm-3 col-form-label">Antecedente de enfermedades:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->antecedentes_enfermedades}}">
    </div>
    </div>

    <div class="col-md-12 form-group row">
    <label for="inputTPP" class="col-sm-3 col-form-label">Trastornos psicológicos o psiquiátricos:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->trastornos_psicotricos}}">
    </div>
    </div>

    <div class="col-md-12 form-group row">
    <label for="inputILUA" class="col-sm-3 col-form-label">Incapacidad más larga en el último año:</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->incapacidad_mas_larga}}">
    </div>
    
    <div class="col-md-12 form-group row">
        <label for="inputER" class="col-sm-3 col-form-label">Enfermedades respiratorias:</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->enfermedades_respiratorias}}">
        </div>
    </div>

    <!--septimo doble-->

    <div class="col-md-12 form-group row">
    <label for="inputEQGI" class="col-sm-4 col-form-label">Enfermedades que han generado incapacidad:</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->enfermedades_incapacidad}}">
        </div>
    </div>

    <div class="col-md-12 form-group row">
        <label for="inputDC" class="col-sm-3 col-form-label">Dolores crónicos:</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->dolores_cronicos}}">
        </div>
    </div>


    <div class="col-md-12 form-group row">
    <label for="inputOB" class="col-sm-3 col-form-label">Observaciones:</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->observaciones}}">
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
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->word}}">
     <!--radio excel-->
    <legend class="col-form-label col-sm-2 pt-0">EXCEL</legend>
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->excel}}">
    <!--radio powerpoint-->
    <legend class="col-form-label col-sm-2 pt-0">PPOINT</legend>
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->ppoint}}">
    <!--text otros-->
    <div class="col-md-12 form-group row">
    <label for="inputOTRO" class="col-sm-2 col-form-label">Otros:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->otros}}">
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
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->riquesa_del_vocavulario}}">
   
    
    <!--radio fluidez verbal-->
    <legend class="col-form-label col-sm-6 pt-0">Fluidez verbal</legend>
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->fluidez_verbal}}">
    
    
    <!--radio precision-->
    <legend class="col-form-label col-sm-6 pt-0">Precisión</legend>
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->precision}}">
   
    <!--valor global del lenguaje verbal-->
    <legend class="col-form-label col-sm-6 pt-0">Valor global del lenguaje verbal</legend>
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->valor_global}}">
        
    </div>
    </div>
    <!--fin 6.2-->
    <!--inicio 6.3-->
    <div class="col-md-3">
    <h5 class="text-center">6.3. Otros conocimientos</h5>
    <div class="col-md-12 form-group row">
    <label for="inputPEDA" class="col-sm-12 col-form-label">Pedagogía:</label>
    <div class="col-sm-12">
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->pedagogia}}">
    </div>
    </div>

    <div class="col-md-12 form-group row">
    <label for="inputLEGI" class="col-sm-12 col-form-label">Legislación:</label>
    <div class="col-sm-12">
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->legislacion}}">
    </div>
    </div>
    </div>
    <div class="col-md-12 form-group row">
    <label for="inputLEGI" class="col-sm-12 col-form-label">ver perfil y funciones:</label>
    <div class="col-sm-12">
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->ver_perfil_y_funciones}}">
    </div>
    </div>
    <div class="col-md-12 form-group row">
    <label for="inputOBSE" class="col-sm-2 col-form-label">Observaciones:</label>
    <div class="col-sm-12">
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->observaciones2}}">
    </div>
    </div>
    </div>
    <!--fin 6.3-->

    <!--inicio 7. motivacion-->

    <h2 class="text-center mt-3">7. MOTIVACION</h2>

    <div class="col-md-12 form-group row mt-3">
    <label for="inputMPLC" class="col-sm-12 col-form-label">Motivacion para laborar en Coomulsap:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->motivacion_en_coomulsap}}">
    </div>
    </div>

    <div class="col-md-12 form-group row">
    <label for="inputPMCP" class="col-sm-12 col-form-label">Proyecto a mediano y corto plazo:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->proyecto_a_mediano}}">
    </div>
    </div>

    <div class="col-md-12 form-group row">
    <label for="inputDRP" class="col-sm-12 col-form-label">Disponibilidad a los requerimientos del puesto:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control"value="{{$usuario[0]->antecedentes[0]->disponibilidad_puesto}}">
    </div>
    </div>

    <div class="col-md-12 form-group row">
    <label for="inputECSO" class="col-sm-12 col-form-label">Retribucion: expectativas del candidato y comentarios sobre la oferta que se le hace:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->retribucion_expectativas}}">
    </div>
    </div>
    <!--fin 7-->
    <!--inicio 8. historia familiar-->
    <div class="form-group mt-12">
    <h2 class="text-center mt-12">8. HISTORIA FAMILIAR</h2>
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->historia_familiar}}">
   </div>
    </div>
   

    <div class="form-group mt-3">
    <label for="conceptoentre1">Concepto segundo entrevistador:</label>
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->concepto_segundo_entrevistador}}"></input>
    </div>

    <div class="col-md-12 form-group row mt-3">
    <label for="inputOUIT" class="col-sm-12 col-form-label">¿Oculto usted información para obtener este trabajo?</label>
    <div class="col-sm-10">
    <input type="text" class="form-control"  value="{{$usuario[0]->antecedentes[0]->oculto_informacion}}">
    </div>
    </div>


    <div class="col-md-12 form-group row mt-3">
    <label for="inputRESP" class="col-sm-12 col-form-label">Responsable:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$usuario[0]->antecedentes[0]->responsable}}">
    </div>
    </div>
    

    </div>
    </div>

    <div class="container">

		 <h2 class="text-center mt-4">9. Evaluacion de Candidato por Gerencia.</h2>
		 <!--primer doble-->

<div class="row mt-4">
<div class="col-md-6 form-group row">
    <label for="inputFEC" class="col-sm-3 col-form-label">Fecha:</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->fecha}}">
  </div>
</div>


<div class="col-md-6 form-group row">
    <label for="inputHC" class="col-sm-3 col-form-label">Hora citado:</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->hora_citado}}">
    </div>
  </div>
  <!--solo-->


<!--solo-->

<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Nombre del proyecto:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->nombre_del_proyecto}}">
    </div>
  </div>

<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Director del proyecto:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->director_del_proyecto}}">
    </div>
  </div>
  
<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Nombres y apellidos del aspirante:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->nombres_y_apellido_del_aspirante}}">
    </div>
  </div>

<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Profesion y cargo al que aspira:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->profesion_y_cargo_al_que_aspira}}">
    </div>
  </div>
  </div>
  </div>
<div class="container">
  <h2 class="text-center mt-4">10. Informacion Personal del Candidato.</h2>
  <div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-12 col-form-label">Que actividades realiza en el tiempo libre:</label>
    <div class="col-sm-12">
    <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->actividad}}">
    </div>
  </div>
  <div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-12 col-form-label">Metas y proyectos a corto y mediano plazo:</label>
    <div class="col-sm-12">
    <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->metas}}">
    </div>
  </div>

              <tr>
                <th colspan="12" scope="col"><h4 class="text-center">11.Habilidades Comunicativa del Candidato</h4></th>
                <td>Articula ideas de forma eficaz</td>
                <td><br></td>
                <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->articula_ideas}}">
              </tr>
          
                <tr>
                <td>Se expresa correctamente</td>
                <td><br></td>
                <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->se_expresa}}">
              	          
               <tr>
                <td>Posee capacidad de escucha</td>
                <td><br></td>
                <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->escucha}}">
        
          
                <th colspan="12" scope="col"><h4 class="text-center">12.Impresion General</h4></th>
              </tr>
            </thead>
            <tbody>
           
              <td>ideas generales sobre pedagogia educacion y didactica</td>
                <td><br></td>
                <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->ideas}}">
               <tr>
                <td>Entorno social y fisico en el que vive</td>
              	<td><br></td>
                <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->entorno}}">
               </tr>
                <td>Administracion del tiempo libre</td>
                <td><br></td>
                <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->administracion}}">
              </tr>
              <tr>
                <td>Conocimiento sobre legislacion educativa</td>
              	<td><br></td>
                <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->conocimiento}}">
              </tr>
              <tr>
                <td>Metodologia de enseñanza educativa</td>
              	<td><br></td>
                <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->metodologia}}">
              </tr>
              <tr>
                <td>Manejo de la disciplina y control del grupo</td>
              	<td><br></td>
                <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->manejo}}">
               </tr>
              <tr>
                <td>Presentacion personal</td>
              	<td><br></td>
                <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->presentacion}}">
               </tr>
              <tr>
                <td>Actitud y aptitud reflejada en la entrevista</td>
              	<td><br></td>
                <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->actitud}}">
               </tr>
            
          <thead>
              <tr>
                <th colspan="12" scope="col"><h4 class="text-center">13.Observaciones Generales</h4></th>
              </tr>
              <input type="text" class="form-control" value="{{$usuario[0]->evaluacion[0]->observaciones_generales}}">
                
              <a type="submit" href="/actualizar/{{ $usuario[0]->id }}" class="btn btn-primary">Actualizar</a>    

            
            </div>

        

            </form>
            </div>   




@endsection