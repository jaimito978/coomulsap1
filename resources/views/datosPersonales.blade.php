@extends('layouts.app')

@section('content')



<div class="container">
	<form action="{{ route('guardandoForm') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2 class="text-center mt-4">1. Datos personales.</h2>
<!--primer doble-->

<div class="row mt-3">

<div class="col-md-6 form-group row">
    <label for="inputFEC" class="col-sm-2 col-form-label">Fecha:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="start" min="2015-01-01" max="<?php echo $time ?? ''; ?>" value="<?php echo $time ?? ''; ?>" placeholder="Fecha" name="fecha">
  </div>
</div>


<div class="col-md-6 form-group row">
    <label for="inputHC" class="col-sm-4 col-form-label">Hora citado:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputHC" placeholder="Hora citado" name="hc">
    </div>
  </div>
<!--solo-->

<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Nombre del aspirante:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputNAA" placeholder=" aspirante" name="NAA">
    </div>
  </div>
  <legend class="col-form-label col-sm-4 pt-0">sexo:</legend>
      
      <div class="col-sm-2">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="refper" id="refper1" value="mujer">
          <label class="form-check-label" for="refper1">
            mujer
          </label>
        </div>
</div>
<div class="col-sm-1">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="refper" id="refper1" value="hombre">
          <label class="form-check-label" for="refper1">
            hombre
          </label>
        </div>
</div>


            
<!--segundo doble-->

<div class="col-md-6 form-group row">
    <label for="inputCAR" class="col-sm-2 col-form-label">Cargo:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputCAR" placeholder="Cargo" name="car">
    </div>
  </div>



<div class="col-md-6 form-group row">
    <label for="inputED" class="col-sm-2 col-form-label">Edad:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputED" placeholder="Edad" name="ed">
    </div>
  </div>



  <!--tercer doble-->

  <legend class="col-form-label col-sm-4 pt-0">estado civil:</legend>
      
      <div class="col-sm-1">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="refper1" id="refper1" value="soltero">
          <label class="form-check-label" for="refper1">
            soltero
          </label>
        </div>
</div>
<div class="col-sm-1">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="refper1" id="refper1" value="casado">
          <label class="form-check-label" for="refper1">
            casado
          </label>
        </div>
</div>
<div class="col-sm-1">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="refper1" id="refper1" value="union libre">
          <label class="form-check-label" for="refper1">
            union libre
          </label>
        </div>
</div>
    	
    <!--termina tercer doble-->

<div class="col-md-12 form-group row">
    <label for="inputTIO" class="col-sm-2 col-form-label">Titulo otorgado:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputTIO" placeholder="Titulo otorgado" name="tio">
    </div>
  </div>
    <!--termina tercer doble-->


  <!--cuarto doble-->

<div class="col-md-6 form-group row">
    <label for="inputCC" class="col-sm-3 col-form-label">Cédula:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputCC" placeholder="Cédula" name="CC">
    </div>
  </div>



<div class="col-md-6 form-group row">
    <label for="inputDIR" class="col-sm-4 col-form-label">Dirección:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputDIR" placeholder="Dirección" name="dir">
    </div>
  </div>
  

  <!--quinto doble-->


  <div class="col-md-6 form-group row">
    <label for="inputTEL" class="col-sm-3 col-form-label">Teléfono:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputTEL" placeholder="Teléfono" name="tel">
    </div>
  </div>



<div class="col-md-6 form-group row">
    <label for="inputUAM" class="col-sm-7 col-form-label">Ubicación área metropolitana:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputUAM" placeholder="municipio área metropolitana" name="uam">
    </div>
  </div>

   <!--sexto doble-->


 <legend class="col-form-label col-sm-2 pt-0">Referencia personal:</legend>
      
      <div class="col-sm-2">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="refper2" id="refper1" value="interna">
          <label class="form-check-label" for="refper1">
            Interna
          </label>
        </div>
</div>
<div class="col-sm-1">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="refper2" id="refper1" value="externa">
          <label class="form-check-label" for="refper1">
            Externa
          </label>
        </div>
</div>

<!--septimo doble checkbox-->

 <legend class="col-form-label col-sm-2 pt-0"></legend>
      <div class="col-sm-1">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="vivienda" id="vivienda1" value="propia">
          <label class="form-check-label" for="vivienda1">
            Propia
          </label>
        </div>
</div>
<div class="col-sm-1">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="vivienda" id="vivienda1" value="familiar">
          <label class="form-check-label" for="vivienda1">
            Familiar
          </label>
        </div>
</div>
      <div class="col-sm-1">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="vivienda" id="vivienda1" value="hipoteca">
          <label class="form-check-label" for="vivienda1">
            Hipoteca
          </label>
        </div>
</div>
<div class="col-sm-1">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="vivienda" id="vivienda1" value="arrendada">
          <label class="form-check-label" for="vivienda1">
            Arrendada
          </label>
        </div>
</div>

<!--octavo doble triple-->

<div class="col-md-6 form-group row">
    <label for="inputNDR" class="col-sm-5 col-form-label">Nombre de referencia:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputNDR" placeholder="Nombre de referencia" name="ndr">
    </div>
  </div>




<div class="col-md-3 form-group row">
    <label for="inputva" class="col-sm-7 col-form-label">Valor arriendo:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputva" placeholder="Valor arriendo" name="va">
    </div>
  </div>


<div class="col-md-3 form-group row">
    <label for="inputVE" class="col-sm-7 col-form-label">Valor egresos:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputVE" placeholder="Valor egresos" name="ve">
    </div>
  </div>
</div>
<br>

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
              	
              	<td><input type="text" class="form-control" id="inputNOM" placeholder="nombre1" name="nom1"></td>
              	<td><input type="text" class="form-control" id="inputPAR" placeholder="parentesco1" name="par1"></td>
              	<td><input type="text" class="form-control" id="inputEDA" placeholder="edad1" name="eda1"></td>
              		<td><input type="text" class="form-control" id="inputNE" placeholder="nivel educativo1" name="niv1"></td>
              			<td><input type="text" class="form-control" id="inputOCU" placeholder="ocupacion1" name="ocu1"></td>
                </tr>
                <tr>
              	
              	<td><input type="text" class="form-control" id="inputNOM" placeholder="nombre2" name="nom2"></td>
              	<td><input type="text" class="form-control" id="inputPAR" placeholder="parentesco2" name="par2"></td>
              	<td><input type="text" class="form-control" id="inputEDA" placeholder="edad2" name="eda2"></td>
              		<td><input type="text" class="form-control" id="inputNE" placeholder="nivel educativo2" name="niv2"></td>
              			<td><input type="text" class="form-control" id="inputOCU" placeholder="ocupacion2" name="ocu2"></td>
                </tr>
                <tr>
              	
              	<td><input type="text" class="form-control" id="inputNOM" placeholder="nombre3" name="nom3"></td>
              	<td><input type="text" class="form-control" id="inputPAR" placeholder="parentesco3" name="par3"></td>
              	<td><input type="text" class="form-control" id="inputEDA" placeholder="edad3" name="eda3"></td>
              		<td><input type="text" class="form-control" id="inputNE" placeholder="nivel educativo3" name="niv3"></td>
              			<td><input type="text" class="form-control" id="inputOCU" placeholder="ocupacion3" name="ocu3"></td>
                </tr>
                <tr>
              	
              	<td><input type="text" class="form-control" id="inputNOM" placeholder="nombre4" name="nom4"></td>
              	<td><input type="text" class="form-control" id="inputPAR" placeholder="parentesco4" name="par4"></td>
              	<td><input type="text" class="form-control" id="inputEDA" placeholder="edad4" name="eda4"></td>
              		<td><input type="text" class="form-control" id="inputNE" placeholder="nivel educativo4" name="niv4"></td>
              			<td><input type="text" class="form-control" id="inputOCU" placeholder="ocupacion4" name="ocu4"></td>
                </tr>
                <tr>
              	
              	<td><input type="text" class="form-control" id="inputNOM" placeholder="nombre5" name="nom5"></td>
              	<td><input type="text" class="form-control" id="inputPAR" placeholder="parentesco5" name="par5"></td>
              	<td><input type="text" class="form-control" id="inputEDA" placeholder="edad5" name="eda5"></td>
              		<td><input type="text" class="form-control" id="inputNE" placeholder="nivel educativo5" name="niv5"></td>
              			<td><input type="text" class="form-control" id="inputOCU" placeholder="ocupacion5" name="ocu5"></td>
                </tr>
                <tr>
              	
              	<td><input type="text" class="form-control" id="inputNOM" placeholder="nombre6" name="nom6"></td>
              	<td><input type="text" class="form-control" id="inputPAR" placeholder="parentesco6" name="par6"></td>
              	<td><input type="text" class="form-control" id="inputEDA" placeholder="edad6" name="eda6"></td>
              		<td><input type="text" class="form-control" id="inputNE" placeholder="nivel educativo6" name="niv6"></td>
              			<td><input type="text" class="form-control" id="inputOCU" placeholder="ocupacion6" name="ocu6"></td>
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
              	<td><input type="text" class="form-control" id="inputINS" placeholder="institucion educativa" name="ins"></td>
              	<td><input type="text" class="form-control" id="inputAÑF" placeholder="año finalizacion" name="añof"></td>
              	<td><input type="text" class="form-control" id="inputTTO" placeholder="titulo obtenido" name="titul1"></td>
              
              </tr>
              <tr>
                <td>Secundaria</td>
               <td><input type="text" class="form-control" id="inputINS2" placeholder="institucion educativa" name="ins2"></td>
              	<td><input type="text" class="form-control" id="inputAÑF2" placeholder="año finalizacion" name="añof2"></td>
              	<td><input type="text" class="form-control" id="inputTTO2" placeholder="titulo obtenido" name="titul2"></td>
              </tr>
              <tr>
                <td>Tecnica</td>
                <td><input type="text" class="form-control" id="inputINS3" placeholder="institucion educativa" name="ins3"></td>
              	<td><input type="text" class="form-control" id="inputAÑF3" placeholder="año finalizacion" name="añof3"></td>
              	<td><input type="text" class="form-control" id="inputTTO3" placeholder="titulo obtenido" name="titul3"></td>
              </tr>
              <tr>
                <td>Pregrado</td>
                <td><input type="text" class="form-control" id="inputINS4" placeholder="institucion educativa" name="ins4"></td>
              	<td><input type="text" class="form-control" id="inputAÑF4" placeholder="año finalizacion" name="añof4"></td>
              	<td><input type="text" class="form-control" id="inputTTO4" placeholder="titulo obtenido" name="titul4"></td>
              </tr>
              <tr>
                <td>Postgrado</td>
                <td><input type="text" class="form-control" id="inputINS5" placeholder="institucion educativa" name="ins5"></td>
              	<td><input type="text" class="form-control" id="inputAÑF5" placeholder="año finalizacion" name="añof5"></td>
              	<td><input type="text" class="form-control" id="inputTTO5" placeholder="titulo obtenido" name="titul5"></td>
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
             <td><input type="text" class="form-control" id="inputNep" placeholder="nombre de la empresa" name="nomemp"></td>
              	<td><input type="text" class="form-control" id="inputIEM" placeholder="tiempo" name="tiemp"></td>
              	<td><input type="text" class="form-control" id="inputMTR" placeholder="motivo retiro" name="mot"></td>
              	<td><input type="text" class="form-control" id="inputOBSER" placeholder="observaciones y funciones" name="obser"></td>
              </tr>
              <tr>
             <td><input type="text" class="form-control" id="inputNep" placeholder="nombre de la empresa" name="nomemp1"></td>
              	<td><input type="text" class="form-control" id="inputIEM" placeholder="tiempo" name="tiemp1"></td>
              	<td><input type="text" class="form-control" id="inputMTR" placeholder="motivo retiro" name="mot1"></td>
              	<td><input type="text" class="form-control" id="inputOBSER" placeholder="observaciones y funciones" name="obser1"></td>
              </tr>
              <tr>
             <td><input type="text" class="form-control" id="inputNep" placeholder="nombre de la empresa" name="nomemp2"></td>
              	<td><input type="text" class="form-control" id="inputIEM" placeholder="tiempo" name="tiemp2"></td>
              	<td><input type="text" class="form-control" id="inputMTR" placeholder="motivo retiro" name="mot2"></td>
             <td><input type="text" class="form-control" id="inputOBSER" placeholder="observaciones y funciones" name="obser2"></td>
             </tr>
              <tr>
             <td><input type="text" class="form-control" id="inputNep" placeholder="nombre de la empresa" name="nomemp3"></td>
              	<td><input type="text" class="form-control" id="inputIEM" placeholder="tiempo" name="tiemp3"></td>
              	<td><input type="text" class="form-control" id="inputMTR" placeholder="motivo retiro" name="mot3"></td>
              	<td><input type="text" class="form-control" id="inputOBSER" placeholder="observaciones y funciones" name="obser3"></td>
              </tr>
              <tr>
             <td><input type="text" class="form-control" id="inputNep" placeholder="nombre de la empresa" name="nomemp4"></td>
              	<td><input type="text" class="form-control" id="inputIEM" placeholder="tiempo" name="tiemp4"></td>
              	<td><input type="text" class="form-control" id="inputMTR" placeholder="motivo retiro" name="mot4"></td>
              	<td><input type="text" class="form-control" id="inputOBSER" placeholder="observaciones y funciones" name="obser4"></td>
             </tr>
             <tr>
             <td><input type="text" class="form-control" id="inputNep" placeholder="nombre de la empresa" name="nomemp5"></td>
              	<td><input type="text" class="form-control" id="inputIEM" placeholder="tiempo" name="tiemp5"></td>
              	<td><input type="text" class="form-control" id="inputMTR" placeholder="motivo retiro" name="mot5"></td>
              	<td><input type="text" class="form-control" id="inputOBSER" placeholder="observaciones y funciones" name="obser5"></td>
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
             	 <td><input type="text" class="form-control" id="inputFCA" placeholder="Frecuencia" name="fre"></td>
               	<td><input type="text" class="form-control" id="inputNIV" placeholder="nivel de consumo" name="ni"></td>
              	<td><input type="text" class="form-control" id="inputOBSER" placeholder="observaciones" name="o"></td>
              </tr>
              <tr>
             	 <td>Alcohol</td>
             	 <td><input type="text" class="form-control" id="inputFCA" placeholder="Frecuencia1" name="fre1"></td>
               	<td><input type="text" class="form-control" id="inputNIV" placeholder="nivel de consumo" name="ni1"></td>
              	<td><input type="text" class="form-control" id="inputOBSER" placeholder="observaciones" name="o1"></td>
              </tr>
              <tr>
             	 <td>Marihuana</td>
             	 <td><input type="text" class="form-control" id="inputFCA" placeholder="Frecuencia" name="fre2"></td>
               	<td><input type="text" class="form-control" id="inputNIV" placeholder="nivel de consumo" name="ni2"></td>
              	<td><input type="text" class="form-control" id="inputOBSER" placeholder="observaciones" name="o2"></td>
              </tr>
              <tr>
             	 <td>Otras</td>
             	 <td><input type="text" class="form-control" id="inputFCA" placeholder="Frecuencia" name="fre3"></td>
               	<td><input type="text" class="form-control" id="inputNIV" placeholder="nivel de consumo" name="ni3"></td>
              	<td><input type="text" class="form-control" id="inputOBSER" placeholder="observaciones" name="o3"></td>
              </tr>
               </tbody>
            </thead>
           </table>
           <button type="submit" class="btn btn-primary">enviar</button>    
    </form>
    
</div>

@endsection