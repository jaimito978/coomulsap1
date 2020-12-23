<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\GuardandoForm;
use App\DatosPersonales;
use App\datospersonales2;
use App\Evaluacion;





class GuardandoFormController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function guardandoform(Request $request){

        // dd($request->all());
    
        $aspirante = new DatosPersonales;
        $aspirante->fecha =$request->fecha;
        $aspirante->hora_citado=$request->hc;
        $aspirante->nombre_aspirante =$request->NAA;
        $aspirante->cargo =$request->car;
        $aspirante->edad =$request->ed;
        $aspirante->cedula =$request->CC;
        $aspirante->titulo_otorgado = $request->tio;
        $aspirante->direccion =$request->dir;
        $aspirante->telefono =$request->tel;
        $aspirante->estado_civil =$request->refper1;
        $aspirante->sexo = $request->refper;
        $aspirante->municipio =$request->uam;
        $aspirante->vivienda =$request->vivienda;
        $aspirante->valor_arriendo =$request->va;
        $aspirante->valor_egresos =$request->ve;
        $aspirante->ref_personal = $request->refper2;
        $aspirante->nombre_de_ref = $request->ndr;
        $aspirante->nombre1 =$request->nom1;
        $aspirante->parentesco1 =$request->par1;
        $aspirante->edad1 = $request->eda1;
        $aspirante->nivel_educativo1 =$request->niv1;
        $aspirante->ocupacion1 =$request->ocu1;
        $aspirante->nombre2 =$request->nom2;
        $aspirante->parentesco2 =$request->par2;
        $aspirante->edad2 = $request->eda2;
        $aspirante->nivel_educativo2 =$request->niv2;
        $aspirante->ocupacion2 =$request->ocu2;
        $aspirante->nombre3 =$request->nom3;
        $aspirante->parentesco3 =$request->par3;
        $aspirante->edad3 = $request->eda3;
        $aspirante->nivel_educativo3 =$request->niv3;
        $aspirante->ocupacion3 =$request->ocu3;
        $aspirante->nombre4 =$request->nom4;
        $aspirante->parentesco4 =$request->par4;
        $aspirante->edad4 = $request->eda4;
        $aspirante->nivel_educativo4 =$request->niv4;
        $aspirante->ocupacion4 =$request->ocu4;
        $aspirante->nombre5 =$request->nom5;
        $aspirante->parentesco5 =$request->par5;
        $aspirante->edad5 = $request->eda5;
        $aspirante->nivel_educativo5 =$request->niv5;
        $aspirante->ocupacion5 =$request->ocu5;
        $aspirante->nombre6 =$request->nom6;
        $aspirante->parentesco6 =$request->par6;
        $aspirante->edad6 = $request->eda6;
        $aspirante->nivel_educativo6 =$request->niv6;
        $aspirante->ocupacion6 =$request->ocu6;
        $aspirante->institucion_edu1 = $request->ins;
        $aspirante->año_finalizado1 = $request->añof;
        $aspirante->titulo_obtenido1 = $request->titul1;
        $aspirante->institucion_edu2 = $request->ins2;
        $aspirante->año_finalizado2= $request->añof2;
        $aspirante->titulo_obtenido2 = $request->titul2;
        $aspirante->institucion_edu3 = $request->ins3;
        $aspirante->año_finalizado3= $request->añof3;
        $aspirante->titulo_obtenido3 = $request->titul3;
        $aspirante->institucion_edu4 = $request->ins4;
        $aspirante->año_finalizado4= $request->añof4;
        $aspirante->titulo_obtenido4 = $request->titul4;
        $aspirante->institucion_edu5 = $request->ins5;
        $aspirante->año_finalizado5= $request->añof5;
        $aspirante->titulo_obtenido5 = $request->titul5;
        $aspirante->save();

        $aspirante2 = new datospersonales2;
        $aspirante2->aspirante_id = $aspirante->id;
        $aspirante2->nombre_de_la_emp1 =$request->nomemp;
        $aspirante2->tiempo1 =$request->tiemp;
        $aspirante2->motivo_retiro1= $request->mot;
        $aspirante2->observaciones_y_fun1= $request->obser;
        $aspirante2->nombre_de_la_emp2=$request->nomemp1;
        $aspirante2->tiempo2 =$request->tiemp1;
        $aspirante2->motivo_retiro2= $request->mot1;
        $aspirante2->observaciones_y_fun2= $request->obser1;
        $aspirante2->nombre_de_la_empresa3=$request->nomemp2;
        $aspirante2->tiempo3 =$request->tiemp2;
        $aspirante2->motivo_retiro3= $request->mot2;
        $aspirante2->observaciones_y_fun3= $request->obser2;
        $aspirante2->nombre_de_la_empresa4=$request->nomemp3;
        $aspirante2->tiempo4 =$request->tiemp3;
        $aspirante2->motivo_retiro4= $request->mot3;
        $aspirante2->observaciones_y_fun4= $request->obser3;
        $aspirante2->nombre_de_la_empresa5=$request->nomemp4;
        $aspirante2->tiempo5 =$request->tiemp4;
        $aspirante2->motivo_retiro5= $request->mot4;
        $aspirante2->observaciones_y_fun5= $request->obser4;
        $aspirante2->nombre_de_la_empresa6=$request->nomemp5;
        $aspirante2->tiempo6 =$request->tiemp5;
        $aspirante2->motivo_retiro6= $request->mot5;
        $aspirante2->observaciones_y_fun6= $request->obser5;
        $aspirante2->frecuencia1= $request->fre;
        $aspirante2->nivel_de_consumo1= $request->ni;
        $aspirante2->observaciones1= $request->o;
        $aspirante2->frecuencia2= $request->fre1;
        $aspirante2->nivel_de_consumo2= $request->ni1;
        $aspirante2->observaciones2= $request->o1;
        $aspirante2->frecuencia3= $request->fre2;
        $aspirante2->nivel_de_consumo3= $request->ni2;
        $aspirante2->observaciones3= $request->o2;
        $aspirante2->frecuencia4= $request->fre3;
        $aspirante2->nivel_de_consumo4= $request->ni3;
        $aspirante2->observaciones4= $request->o3;
        $aspirante2->save(); 
        
        $antecedentes = new GuardandoForm;
        $antecedentes->aspirante_id = $aspirante->id;
        $antecedentes->save();
        $id = $antecedentes->id;

        return view('antecedentes',compact('id'));

       
    }
    

    public function antecedentes(Request $request) 
    {
        //dd($request->all());
        $form = GuardandoForm::findOrFail($request->antecedenteId);
    
        $form->afp = $request->afp;
        $form->eps = $request->eps;
        $form->ultima_consulta_medica = $request->ucm;
        $form->cirugias = $request->ciru;
        $form->accidentes_sufridos = $request->as;
        $form->antecedentes_enfermedades = $request->ade;
        $form->trastornos_psicotricos = $request->tpp;
        $form->incapacidad_mas_larga = $request->ilua;
        $form->enfermedades_respiratorias = $request->er;
        $form->enfermedades_incapacidad = $request->eqgi;
        $form->dolores_cronicos = $request->dc;
        $form->observaciones = $request->obser1;
        $form->motivo_consulta = $request->mc;
        $form->intoxicaciones = $request->into;
        $form->fracturas = $request->frac;
        $form->word = $request->word;
        $form->excel = $request->excel;
        $form->ppoint = $request->powerp;
        $form->otros = $request->otros;
        $form->riquesa_del_vocavulario = $request->rivoca;
        $form->fluidez_verbal = $request->fluver;
        $form->precision = $request->preci;
        $form->valor_global = $request->vglv;
        $form->pedagogia = $request->pedagogia;
        $form->legislacion = $request->legislacion;
        $form->ver_perfil_y_funciones = $request->ver;
        $form->observaciones2 = $request->obser;
        $form->motivacion_en_coomulsap = $request->mplc;
        $form->proyecto_a_mediano = $request->pmcp;
        $form->disponibilidad_puesto = $request->drp;
        $form->retribucion_expectativas = $request->ecso;
        $form->historia_familiar = $request->historiafamiliar;
        $form->concepto_segundo_entrevistador = $request->csentre;
        $form->oculto_informacion =$request->ouit;
        $form->responsable = $request->responsable;
        $form->save();

        $evaluacion = new Evaluacion;
        $evaluacion->aspirante_id = $form->aspirante_id;
        $evaluacion->save();
        $id = $evaluacion->id;

        return view('evaluaciongerencia',compact('id'));


    }
    public function evaluacion(Request $request){
    

        $evaluacion = Evaluacion::findOrFail($request->evaluacionId);
        $evaluacion->fecha =$request->fechaa;
        $evaluacion->hora_citado=$request->hoci;
        $evaluacion->nombre_del_proyecto = $request->NPR;
        $evaluacion->director_del_proyecto = $request->DPR;
        $evaluacion->nombres_y_apellido_del_aspirante = $request->NAP;
        $evaluacion->profesion_y_cargo_al_que_aspira = $request->PCA;
        $evaluacion->actividad = $request->inputQZR;
        $evaluacion->metas = $request->inputMPP;
        $evaluacion->articula_ideas = $request->refper1;
        $evaluacion->se_expresa =$request->refper2;
        $evaluacion->escucha =$request->refper3;
        $evaluacion->ideas =$request->refper4;
        $evaluacion->entorno =$request->refper5;
        $evaluacion->administracion = $request->refper6;
        $evaluacion->conocimiento =$request->refper7;
        $evaluacion->metodologia =$request->refper8;
        $evaluacion->manejo =$request->refper9;
        $evaluacion->presentacion=$request->refper0;
        $evaluacion->actitud=$request->refper00;
        $evaluacion->observaciones_generales=$request->inputInfg;
        $evaluacion->save();


        return view('home');

    }

    public function usuario($id) {
       //$usuario = DatosPersonales::findOrFail($id);
      $usuario = DatosPersonales::where('id', $id)->with('datospersonales2','antecedentes','evaluacion')->get();
       return view('vistaUsuario',compact('usuario'));

    }

    public function borrar($id) {
        $usuario = DatosPersonales::findOrFail($id)->delete();
        return view('home');
 
     }

    public function update(Request $request, $id) {
        //dd($request->all());
        $datos = DatosPersonales::findOrFail($id);
        
        $datos->fecha = $request->fecha;
        $datos->hora_citado = $request->hora;
        $datos->nombre_aspirante =$request->nombreAspirante;
        $datos->cargo =$request->cargo;
        $datos->edad =$request->edad;
        $datos->cedula =$request->cedula;
        $datos->titulo_otorgado = $request->titulootorgado;
        $datos->direccion =$request->direccion;
        $datos->telefono =$request->telefono;
        $datos->estado_civil =$request->estadocivil;
        $datos->sexo = $request->sexo;
        $datos->municipio =$request->ubiareametro;
        $datos->vivienda =$request->vivienda;
        $datos->valor_arriendo =$request->valorarriendo;
        $datos->valor_egresos =$request->valoregresos;
        $datos->ref_personal = $request->referenciapersonal;
        $datos->nombre_de_ref = $request->nombrereferencia;
        $datos->nombre1 =$request->nombre1;
        $datos->parentesco1 =$request->parentesco1;
        $datos->edad1 = $request->edad1;
        $datos->nivel_educativo1 =$request->niveleducativo1;
        $datos->ocupacion1 =$request->ocupacion1;
        $datos->nombre2 =$request->nombre2;
        $datos->parentesco2 =$request->parentesco2;
        $datos->edad2 = $request->edad2;
        $datos->nivel_educativo2 =$request->niveleducativo2;
        $datos->ocupacion2 =$request->ocupacion2;
        $datos->nombre3 =$request->nombre3;
        $datos->parentesco3 =$request->parentesco3;
        $datos->edad3 = $request->edad3;
        $datos->nivel_educativo3 =$request->niveleducativo3;
        $datos->ocupacion3 =$request->ocupacion3;
        $datos->nombre4 =$request->nombre4;
        $datos->parentesco4 =$request->parentesco4;
        $datos->edad4 = $request->edad4;
        $datos->nivel_educativo4 =$request->niveleducativo4;
        $datos->ocupacion4 =$request->ocupacion4;
        $datos->nombre5 =$request->nombre5;
        $datos->parentesco5 =$request->parentesco5;
        $datos->edad5 = $request->edad5;
        $datos->nivel_educativo5 =$request->niveleducativo5;
        $datos->ocupacion5 =$request->ocupacion5;
        $datos->nombre6 =$request->nombre6;
        $datos->parentesco6 =$request->parentesco6;
        $datos->edad6 = $request->edad6;
        $datos->nivel_educativo6 =$request->niveleducativo6;
        $datos->ocupacion6 =$request->ocupacion6;
        $datos->institucion_edu1 = $request->institucion1;
        $datos->año_finalizado1 = $request->añofinalizado1;
        $datos->titulo_obtenido1 = $request->titulooptenido1;
        $datos->institucion_edu2 = $request->institucioedu2;
        $datos->año_finalizado2= $request->añofinalizado2;
        $datos->titulo_obtenido2 = $request->titulooptenido2;
        $datos->institucion_edu3 = $request->instiedu3;
        $datos->año_finalizado3= $request->añofinalizado3;
        $datos->titulo_obtenido3 = $request->titulooptenido3;
        $datos->institucion_edu4 = $request->instiedu4;
        $datos->año_finalizado4= $request->añofinalizado4;
        $datos->titulo_obtenido4 = $request->titulooptenido4;
        $datos->institucion_edu5 = $request->instiedu5;
        $datos->año_finalizado5= $request->añofinalizado5;
        $datos->titulo_obtenido5 = $request->titulooptenido5;
        $datos->save;

        $datos2 =  datospersonales2::where('aspirante_id',$id)->first();
        //dd($datos2);
        
        
        $datos2->nombre_de_la_emp1 =$request->nombreempr1;
        $datos2->tiempo1 =$request->tiempo1;
        $datos2->motivo_retiro1= $request->motivoretiro1;
        $datos2->observaciones_y_fun1= $request->obserfuncio1;
        $datos2->nombre_de_la_emp2=$request->nombreempresa2;
        $datos2->tiempo2 =$request->tiempo2;
        $datos2->motivo_retiro2= $request->motivoretiro2;
        $datos2->observaciones_y_fun2= $request->obserfuncio2;
        $datos2->nombre_de_la_empresa3=$request->nombreempresa3;
        $datos2->tiempo3 =$request->tiempo3;
        $datos2->motivo_retiro3= $request->motivoretiro3;
        $datos2->observaciones_y_fun3= $request->obserfuncio3;
        $datos2->nombre_de_la_empresa4=$request->nombreempresa4;
        $datos2->tiempo4 =$request->tiempo4;
        $datos2->motivo_retiro4= $request->motivoretiro4;
        $datos2->observaciones_y_fun4= $request->obserfuncio4;
        $datos2->nombre_de_la_empresa5=$request->nombreempresa5;
        $datos2->tiempo5 =$request->tiempo5;
        $datos2->motivo_retiro5= $request->motivoretiro5;
        $datos2->observaciones_y_fun5= $request->obserfuncio5;
        $datos2->nombre_de_la_empresa6=$request->nombreempresa6;
        $datos2->tiempo6 =$request->tiempo6;
        $datos2->motivo_retiro6= $request->motivoretiro6;
        $datos2->observaciones_y_fun6= $request->obserfuncio6;
        $datos2->frecuencia1= $request->frecuencia1;
        $datos2->nivel_de_consumo1= $request->nivelconsumo1;
        $datos2->observaciones1= $request->observaciones1;
        $datos2->frecuencia2= $request->frecuencia2;
        $datos2->nivel_de_consumo2= $request->nivelconsumo2;
        $datos2->observaciones2= $request->observaciones2;
        $datos2->frecuencia3= $request->frecuencia3;
        $datos2->nivel_de_consumo3= $request->nivelconsumo3;
        $datos2->observaciones3= $request->observaciones3;
        $datos2->frecuencia4= $request->frecuencia4;
        $datos2->nivel_de_consumo4= $request->nivelconsumo4;
        $datos2->observaciones4= $request->observaciones4;
        $datos2->save();


        
        return view('home');
        
    }

      
  
   
 }
