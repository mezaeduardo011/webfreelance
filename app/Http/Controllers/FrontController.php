<?php

namespace web\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

  public function testExcel(){
    Excel::create('prueba',function($excel){

       $excel->getDefaultStyle()
        ->getAlignment()
        ->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
        ->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);     

        $excel->sheet('Sheetname',function($sheet){
          $this->setStylesExcel($sheet);
          $data = [];

          $proceso = 'Registro de usuario';
          $actividad = 'actividad 1 para el registro';
          $actores = 'Cliente';
          $nro = 'RF-01';
          $descricion='El sistema debe mostrar un registro de usuarios con los campos : nombre , apellido , telefono , direccion , email , contraseña y confirmar contraseña';

          

          $sheet->setWidth('A', intval(strlen($proceso))); 
          $sheet->setWidth('B', intval(strlen($actividad))); 
          $sheet->setWidth('C', intval(strlen($actores)+1)); 
          $sheet->setWidth('D', intval(strlen($nro)+1)); 
          $sheet->setWidth('E', intval(strlen($descricion)));
          $columns = array(
                            'Procesos' => $proceso, 
                            'Actividades' => $actividad, 
                            'Actores' => $actores, 
                            'Nro' => $nro,
                            'Descripción' => $descricion
                            );

        $columns = array(
                            'Procesos' => $proceso, 
                            'Actividades' => $actividad, 
                            'Actores' => $actores, 
                            'Nro' => $nro,
                            'Descripción' => $descricion
                            );

          array_push($data,$columns);
          array_push($data,$columns);
          array_push($data,$columns);
          array_push($data,$columns);
          array_push($data,$columns);
          
          $sheet->fromArray($data);
      });
    })->download('xlsx');  

            
  }


  public function setStylesExcel($sheet){  
        $sheet->setAllBorders('double');

        $sheet->setHeight(array(
            '2' => 50
          )); 

        $sheet->cell('A1:E1', function($cell) {
            $cell->setBackground('#8DB3E2');
            $cell->setFontSize(10);
            $cell->setFontWeight('bold');            
        });

        $sheet->cell('E2', function($cell) {
            $cell->setBackground('#DBE5F1');          
        });    
  }

}
