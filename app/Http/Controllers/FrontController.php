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


}
