@extends('layouts.app')

@section('content')
<div class="container-fluid">
 <div class=”container”>
   
<form action="{{ route('antecedentes') }}" method="POST" enctype="multipart/form-data">
@csrf
<h1 class="text-center mt-5"> FORMATO <h1>
    <h1 class="text-center mt-5"> ENTREVISTA DE SELECCION<h1>
<h2 class="text-center mt-5">5.2. Antecedentes de salud.</h2>
   <!--primer doble-->
   <div class="row mt-3">
   <input type="hidden" class="form-control" value="{{ $id ?? '' }}"  name="antecedenteId">
<div class="col-md-6 form-group row">
    <label for="inputEPS" class="col-sm-2 col-form-label">EPS:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputEPS" placeholder="EPS" name="eps">
    </div>
</div>

<div class="col-md-6 form-group row">
    <label for="inputAFP" class="col-sm-2 col-form-label">AFP:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputAFP" placeholder="AFP" name="afp">
    </div>
</div>

<!--segundo doble-->

<div class="col-md-6 form-group row">
<label for="inputUM" class="col-sm-6 col-form-label">Última consulta médica:</label>
<div class="col-sm-6">
    <input type="date" class="form-control" id="start" min="2015-01-01" max="<?php echo $time ?? ''; ?>" value="<?php echo $time ?? ''; ?>" placeholder="Última consulta médica" name="ucm">
</div>
</div>

<div class="col-md-6 form-group row">
<label for="inputCIRU" class="col-sm-2 col-form-label">Cirugías</label>
<div class="col-sm-10">
    <input type="text" class="form-control" id="inputCIRU" placeholder="Cirugías" name="ciru">
</div>
</div>


<!--tercer doble-->

<div class="col-md-6 form-group row">
<label for="inputMC" class="col-sm-4 col-form-label">Motivo consulta:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputMC" placeholder="Motivo consulta" name="mc">
    </div>
</div>

<div class="col-md-6 form-group row">
    <label for="inputINTO" class="col-sm-3 col-form-label">Intoxicaciones:</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="inputINTO" placeholder="Intoxicaciones" name="into">
    </div>
</div>


<!--cuarto doble-->


<div class="col-md-6 form-group row">
<label for="inputAS" class="col-sm-4 col-form-label">Accidentes sufridos:</label>
<div class="col-sm-8">
    <input type="text" class="form-control" id="inputAS" placeholder="Accidentes sufridos" name="as">
</div>
</div>

<div class="col-md-6 form-group row">
<label for="inputFRAC" class="col-sm-2 col-form-label">Fracturas:</label>
<div class="col-sm-10">
    <input type="text" class="form-control" id="inputFRAC" placeholder="Fracturas" name="frac">
</div>
</div>

<!--quinto doble en bloque-->

<div class="col-md-12 form-group row">
<label for="inputADE" class="col-sm-3 col-form-label">Antecedente de enfermedades:</label>
<div class="col-sm-8">
    <input type="text" class="form-control" id="inputADE" placeholder="Antecedente de enfermedades" name="ade">
</div>
</div>

<div class="col-md-12 form-group row">
<label for="inputTPP" class="col-sm-4 col-form-label">Trastornos psicológicos o psiquiátricos:</label>
<div class="col-sm-7">
    <input type="text" class="form-control" id="inputTPP" placeholder="Trastornos psicológicos o psiquiátricos" name="tpp">
</div>
</div>


<!--sexto doble en bloque-->
<div class="col-md-12 form-group row">
<label for="inputILUA" class="col-sm-4 col-form-label">Incapacidad más larga en el último año:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="inputILUA" placeholder="Incapacidad más larga en el último año" name="ilua">
    </div>
</div>

<div class="col-md-12 form-group row">
    <label for="inputER" class="col-sm-3 col-form-label">Enfermedades respiratorias:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputER" placeholder="Enfermedades respiratorias" name="er">
    </div>
</div>

<!--septimo doble-->

<div class="col-md-12 form-group row">
<label for="inputEQGI" class="col-sm-4 col-form-label">Enfermedades que han generado incapacidad:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="inputEQGI" placeholder="Enfermedades que han generado incapacidad" name="eqgi">
    </div>
</div>

<div class="col-md-12 form-group row">
    <label for="inputDC" class="col-sm-2 col-form-label">Dolores crónicos:</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="inputDC" placeholder="Dolores Crónicos" name="dc">
    </div>
</div>


<div class="col-md-12 form-group row">
<label for="inputOB" class="col-sm-2 col-form-label">Observaciones:</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="inputOB" placeholder="Observaciones" name="obser1">
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
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="word" id="word1" value="d">
  <label class="form-check-label" for="word1">
    D
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="word" id="word1" value="r">
  <label class="form-check-label" for="word1">
    R
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="word" id="word1" value="b">
  <label class="form-check-label" for="word1">
    B
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="word" id="word1" value="s">
  <label class="form-check-label" for="word1">
    S
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="word" id="word1" value="e">
  <label class="form-check-label" for="word1">
    E
  </label>
</div>
</div>
<!--radio excel-->
<legend class="col-form-label col-sm-2 pt-0">EXCEL</legend>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="excel" id="excel1" value="d">
  <label class="form-check-label" for="excel1">
    D
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="excel" id="excel1" value="r">
  <label class="form-check-label" for="excel1">
    R
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="excel" id="excel1" value="b">
  <label class="form-check-label" for="excel1">
    B
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="excel" id="excel1" value="s">
  <label class="form-check-label" for="excel1">
    S
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="excel" id="excel1" value="e">
  <label class="form-check-label" for="excel1">
    E
  </label>
</div>
</div>
<!--radio powerpoint-->
<legend class="col-form-label col-sm-2 pt-0">PPOINT</legend>


<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="powerp" id="powerp1" value="d">
  <label class="form-check-label" for="powerp1">
    D
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="powerp" id="powerp1" value="r">
  <label class="form-check-label" for="powerp1">
    R
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="powerp" id="powerp1" value="b">
  <label class="form-check-label" for="powerp1">
    B
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="powerp" id="powerp1" value="s">
  <label class="form-check-label" for="powerp1">
    S
  </label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="powerp" id="powerp1" value="e">
  <label class="form-check-label" for="powerp1">
    E
  </label>
</div>
</div>

<!--text otros-->
<div class="col-md-12 form-group row">
<label for="inputOTRO" class="col-sm-2 col-form-label">Otros:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputOTRO" placeholder="Otros" name="otros">
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
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="rivoca" id="rivoca1" value="d">
  <label class="form-check-label" for="rivoca1">
    D
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="rivoca" id="rivoca1" value="r">
  <label class="form-check-label" for="rivoca1">
    R
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="rivoca" id="rivoca1" value="b">
  <label class="form-check-label" for="rivoca1">
    B
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="rivoca" id="rivoca1" value="s">
  <label class="form-check-label" for="rivoca1">
    S
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="rivoca" id="rivoca1" value="e">
  <label class="form-check-label" for="rivoca1">
    E
  </label>
</div>
</div>
<!--radio fluidez verbal-->
<legend class="col-form-label col-sm-6 pt-0">Fluidez verbal</legend>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="fluver" id="fluver1" value="d">
  <label class="form-check-label" for="fluver1">
    D
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="fluver" id="fluver1" value="r">
  <label class="form-check-label" for="fluver1">
    R
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="fluver" id="fluver1" value="b">
  <label class="form-check-label" for="fluver1">
    B
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="fluver" id="fluver1" value="s">
  <label class="form-check-label" for="fluver1">
    S
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="fluver" id="fluver1" value="e">
  <label class="form-check-label" for="fluver1">
    E
  </label>
</div>
</div>
<!--radio precision-->
<legend class="col-form-label col-sm-6 pt-0">Precisión</legend>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="preci" id="preci1" value="d">
  <label class="form-check-label" for="preci1">
    D
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="preci" id="preci1" value="r">
  <label class="form-check-label" for="preci1">
    R
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="preci" id="preci1" value="b">
  <label class="form-check-label" for="preci1">
    B
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="preci" id="preci1" value="s">
  <label class="form-check-label" for="preci1">
    S
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="preci" id="preci1" value="e">
  <label class="form-check-label" for="preci1">
    E
  </label>
</div>
</div>
<!--valor global del lenguaje verbal-->
<legend class="col-form-label col-sm-6 pt-0">Valor global del lenguaje verbal</legend>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="vglv" id="vglv1" value="d">
  <label class="form-check-label" for="vglv1">
    D
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="vglv" id="vglv1" value="r">
  <label class="form-check-label" for="vglv1">
    R
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="vglv" id="vglv1" value="b">
  <label class="form-check-label" for="vglv1">
    B
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="vglv" id="vglv1" value="s">
  <label class="form-check-label" for="vglv1">
    S
  </label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check">
  <input class="form-check-input" type="radio" name="vglv" id="vglv1" value="e">
  <label class="form-check-label" for="vglv1">
    E
  </label>
</div>
</div>
</div>
</div>
<!--fin 6.2-->
<!--inicio 6.3-->
<div class="col-md-3">
<h5 class="text-center">6.3. Otros conocimientos</h5>
<div class="col-md-12 form-group row">
<label for="inputPEDA" class="col-sm-12 col-form-label">Pedagogía:</label>
<div class="col-sm-12">
<input type="text" class="form-control" id="inputPEDA" placeholder="Pedagogía" name="pedagogia">
</div>
</div>

<div class="col-md-12 form-group row">
<label for="inputLEGI" class="col-sm-12 col-form-label">Legislación:</label>
<div class="col-sm-12">
<input type="text" class="form-control" id="inputLEGI" placeholder="Legislación" name="legislacion">
</div>
</div>
</div>
<div class="col-md-12 form-group row">
<label for="inputLEGI" class="col-sm-12 col-form-label">ver perfil y funciones:</label>
<div class="col-sm-12">
<input type="text" class="form-control" id="inputLEGI" placeholder="ver perfil y funciones" name="ver">
</div>
</div>
<div class="col-md-12 form-group row">
<label for="inputOBSE" class="col-sm-2 col-form-label">Observaciones:</label>
<div class="col-sm-12">
<input type="text" class="form-control" id="inputOBSE" placeholder="Observaciones" name="obser">
</div>
</div>
</div>
<!--fin 6.3-->

<!--inicio 7. motivacion-->

<h2 class="text-center mt-3">7. MOTIVACION</h2>

<div class="col-md-12 form-group row mt-3">
<label for="inputMPLC" class="col-sm-12 col-form-label">Motivacion para laborar en Coomulsap:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputMPLC" placeholder="Motivacion para laborar en Coomulsap" name="mplc">
</div>
</div>

<div class="col-md-12 form-group row">
<label for="inputPMCP" class="col-sm-12 col-form-label">Proyecto a mediano y corto plazo:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputPMCP" placeholder="Proyecto a mediano y corto plazo" name="pmcp">
</div>
</div>

<div class="col-md-12 form-group row">
<label for="inputDRP" class="col-sm-12 col-form-label">Disponibilidad a los requerimientos del puesto:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputDRP" placeholder="Disponibilidad a los requerimientops del puesto" name="drp">
</div>
</div>

<div class="col-md-12 form-group row">
<label for="inputECSO" class="col-sm-12 col-form-label">Retribucion: expectativas del candidato y comentarios sobre la oferta que se le hace:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputECSO" placeholder="Retribucion: expectativas del candidato y comentarios sobre la oferta que se le hace" name="ecso">
</div>
</div>
<!--fin 7-->
<!--inicio 8. historia familiar-->
<h2 class="text-center mt-3">8. HISTORIA FAMILIAR</h2>
<div class="form-group mt-3">
<textarea class="form-control" id="histoafamiliar1" rows="3" name="historiafamiliar" placeholder="Historia familiar..."></textarea>
</div>

<div class="form-group mt-3">
<label for="conceptoentre1">Concepto segundo entrevistador:</label>
<textarea class="form-control" id="conceptoentre1" rows="3" name="csentre" placeholder="Concepto segundo entrevistador..."></textarea>
</div>

<div class="col-md-12 form-group row mt-3">
<label for="inputOUIT" class="col-sm-12 col-form-label">¿Oculto usted información para obtener este trabajo?</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputOUIT" placeholder="¿Oculto usted información para obtener este trabajo?" name="ouit">
</div>
</div>


<div class="col-md-12 form-group row mt-3">
<label for="inputRESP" class="col-sm-12 col-form-label">Responsable:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputRESP" placeholder="Responsable" name="responsable">
</div>
</div>



<button type="submit" class="btn btn-primary">enviar</button>
</form>


</div>
</div>





@endsection