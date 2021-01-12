@extends('layouts.app')

@section('content')
<div class="container">
	<form action="{{ route('evaluacion') }}" method="POST" enctype="multipart/form-data">
    @csrf
<body>
  <div class="container">
	<form>
		 <h2 class="text-center mt-4">9. Evaluacion de Candidato por Gerencia.</h2>
		 <!--primer doble-->

<div class="row mt-4">
<input type="hidden" class="form-control" value="{{ $id ?? '' }}"  name="evaluacionId">
<div class="col-md-6 form-group row">
    <label for="inputFEC" class="col-sm-3 col-form-label">Fecha:</label>
    <div class="col-sm-9">
      <input type="date" class="form-control" id="start" min="2015-01-01" max="<?php echo $time ?? ''; ?>" value="<?php echo $time ?? ''; ?>" placeholder="Fecha" name="fechaa">
  </div>
</div>


<div class="col-md-6 form-group row">
    <label for="inputHC" class="col-sm-3 col-form-label">Hora citado:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputHC" placeholder="Hora citado" name="hoci">
    </div>
  </div>
  <!--solo-->


<!--solo-->

<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Nombre del proyecto:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNPR" placeholder="Nombre del proyecto" name="NPR">
    </div>
  </div>

<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Director del proyecto:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputDPR" placeholder="Director del proyecto" name="DPR">
    </div>
  </div>
  
<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Nombres y apellidos del aspirante:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNPR" placeholder="Nombre y apellidos del aspirante" name="NAP">
    </div>
  </div>

<div class="col-md-12 form-group row">
    <label for="inputNAA" class="col-sm-2 col-form-label">Profesion y cargo al que aspira:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPCA" placeholder="Profesion y cargo al que aspira" name="PCA">
    </div>
  </div>
  </div>
  </div>

<table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th colspan="12" scope="col"><h4 class="text-center">11.Habilidades Comunicativa del Candidato</h4></th>
              </tr>
            </thead>
            <tbody>
             <tr>
                <th scope="row">descripcion</th>
                <th>pobre</th>
                <th>medio</th>
                <th>bueno</th>
                <th>muy bueno</th>
                <th>excelente</th>
              </tr>
             <tr>
                <td>Articula ideas de forma eficaz</td>
                <td><br></td>
                <td><input class="form-check-input" type="radio" name="refper1" id="refper1" value="pobre">
          <label class="form-check-label" for="refper1"></td>
          <td><input class="form-check-input" type="radio" name="refper1" id="refper1" value="medio">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper1" id="refper1" value="bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper1" id="refper1" value="muy bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper1" id="refper1" value="excelente">
          <label class="form-check-label" for="refper1"></td>
              </tr>
              </tbody>
              <tbody>
             <tr>
                <td>Se expresa correctamente</td>
                <td><br></td>
              	<td><input class="form-check-input" type="radio" name="refper2" id="refper1" value="pobre">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper2" id="refper1" value="medio">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper2" id="refper1" value="bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper2" id="refper1" value="muy bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper2" id="refper1" value="excelente">
          <label class="form-check-label" for="refper1"></td>
              </tr>
               <tr>
                <td>Posee capacidad de escucha</td>
                <td><br></td>
              	<td><input class="form-check-input" type="radio" name="refper3" id="refper1" value="pobre">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper3" id="refper1" value="medio">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper3" id="refper1" value="bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper3" id="refper1" value="muy bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper3" id="refper1" value="excelente">
          <label class="form-check-label" for="refper1"></td>
              </tr>
               </tbody>
          </table>
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th colspan="12" scope="col"><h4 class="text-center">12.Impresion General</h4></th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">descripcion</th>
                <th>pobre</th>
                <th>medio</th>
                <th>bueno</th>
                <th>muy bueno</th>
                <th>excelente</th>
              </tr>
              <td>ideas generales sobre pedagogia educacion y didactica</td>
                <td><br></td>
              	<td><input class="form-check-input" type="radio" name="refper4" id="refper1" value="pobre">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper4" id="refper1" value="medio">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper4" id="refper1" value="bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper4" id="refper1" value="muy bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper4" id="refper1" value="excelente">
          <label class="form-check-label" for="refper1"></td>
              </tr>
             <tr>
                <td>Entorno social y fisico en el que vive</td>
              	<td><br></td>
              	<td><input class="form-check-input" type="radio" name="refper5" id="refper1" value="pobre">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper5" id="refper1" value="medio">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper5" id="refper1" value="bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper5" id="refper1" value="muy bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper5" id="refper1" value="excelente">
          <label class="form-check-label" for="refper1"></td>
              </tr>
               <tr>
                <td>Administracion del tiempo libre</td>
                <td><br></td>
              	<td><input class="form-check-input" type="radio" name="refper6" id="refper1" value="pobre">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper6" id="refper1" value="medio">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper6" id="refper1" value="bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper6" id="refper1" value="muy bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper6" id="refper1" value="excelente">
          <label class="form-check-label" for="refper1"></td>
              </tr>
              <tr>
                <td>Conocimiento sobre legislacion educativa</td>
              	<td><br></td>
              	<td><input class="form-check-input" type="radio" name="refper7" id="refper1" value="pobre">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper7" id="refper1" value="medio">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper7" id="refper1" value="bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper7" id="refper1" value="muy bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper7" id="refper1" value="excelente">
          <label class="form-check-label" for="refper1"></td>
              </tr>
              <tr>
                <td>Metodologia de enseñanza educativa</td>
              	<td><br></td>
              	<td><input class="form-check-input" type="radio" name="refper8" id="refper1" value="pobre">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper8" id="refper1" value="medio">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper8" id="refper1" value="bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper8" id="refper1" value="muy bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper8" id="refper1" value="excelente">
          <label class="form-check-label" for="refper1"></td>
              </tr>
              <tr>
                <td>Manejo de la disciplina y control del grupo</td>
              	<td><br></td>
              	<td><input class="form-check-input" type="radio" name="refper9" id="refper1" value="pobre">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper9" id="refper1" value="medio">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper9" id="refper1" value="bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper9" id="refper1" value="muy bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper9" id="refper1" value="excelente">
          <label class="form-check-label" for="refper1"></td>
              </tr>
              <tr>
                <td>Presentacion personal</td>
              	<td><br></td>
              	<td><input class="form-check-input" type="radio" name="refper0" id="refper1" value="pobre">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper0" id="refper1" value="medio">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper0" id="refper1" value="bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper0" id="refper1" value="muy bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper0" id="refper1" value="excelente">
          <label class="form-check-label" for="refper1"></td>
              </tr>
              <tr>
                <td>Actitud y aptitud reflejada en la entrevista</td>
              	<td><br></td>
              	<td><input class="form-check-input" type="radio" name="refper00" id="refper1" value="pobre">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper00" id="refper1" value="medio">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper00" id="refper1" value="bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper00" id="refper1" value="muy bueno">
          <label class="form-check-label" for="refper1"></td>
              	<td><input class="form-check-input" type="radio" name="refper00" id="refper1" value="excelente">
          <label class="form-check-label" for="refper1"></td>
              </tr>
               </tbody>
          </table>
          <thead>
              <tr>
                <th colspan="12" scope="col"><h4 class="text-center">13.Observaciones Generales</h4></th>
              </tr>
            </thead>
            <tr>
            <td><input type="text" class="form-control" id="inputInfgp" placeholder="observaciones generales" name="inputInfg"></td>

            <button type="submit" class="btn btn-primary">enviar</button>
            </div>
@endsection