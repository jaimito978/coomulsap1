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