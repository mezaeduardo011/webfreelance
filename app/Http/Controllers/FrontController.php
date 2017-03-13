<?php

namespace web\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function _construct(){
     $this->middleware('auth',['only' => 'blank']);
   }

   public function blank(){
       return view('admin.blank');
   }

   public function proyecto_cliente_index(){
       return view('admin.proyectos_clientes.index');
   }   

	public function registrarProyecto(){
	       return view('admin.proyectos_clientes.registrarProyecto');
	}  

  public function postulacion_freelancer_index(){
         return view('admin.postulacion_freelancer.index');
  }  

  public function registrarPostulacion(){
         return view('admin.postulacion_freelancer.registrarPostulacion');
  }  

  public function verPostulaciones($id_proyecto){
         return view('admin.proyectos_clientes.verPostulaciones',compact('id_proyecto'));
  }  

  public function vistaPostulaciones(){
         return view('admin.postulaciones.vistaPostulaciones');
  }  

  public function login(){
        return view('admin.login.index');
  }

}
