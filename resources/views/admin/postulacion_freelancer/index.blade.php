@extends('admin.layouts.master')
@section('contentCss')
 <link rel="stylesheet" href="admin/plugins/datatables/dataTables.bootstrap.css">
 <link rel="stylesheet" href="admin/css/jquery-confirm.min.css">
  

@stop
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <br>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Proyectos</a></li>
                <li class="active">Proyectos Disponibles</li>
            </ol>
        </section> 

        <!-- Main content -->
        <section class="content">
     
            <!-- Default box -->
            <div class="box">

                <div style="width:30%; margin-left: 30%;margin-top:3%">
                </div>

                <div class="box-body">
                    <div class="box">
			            <div class="box-header">
			              <h3 class="box-title">Proyectos Disponibles</h3>
			            </div>                 
			            <div class="box-body">
			              <table id="datatable" class="table table-bordered table-striped">
			                <thead>
				                <tr>
				                  <th>Título</th>
				                  <th>Descripción</th>
				                  <th>Rango de presupuesto</th>
				                  <th>Plazo del proyecto</th>
				                  <th>Acciones</th>
				                </tr>
			                </thead>
			                <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td class="text-center">
                            <button type="button" class="btn btn-info"><i class="fa fa-search-plus"></i></button>
                          </td>
                        </tr>
			                </tbody>
			                <tfoot>
				                <tr>
				                  <th>Título</th>
				                  <th>Descripción</th>
				                  <th>Rango de presupuesto</th>
				                  <th>Plazo del proyecto</th>
				                  <th>Acciones</th>
				                </tr>
			                </tfoot>
			              </table>
			            </div>   
			        </div>
                </div>              
                <div class="box-footer">
                    
                </div>       
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@stop

@section('contentJs')
<!-- AdminLTE for demo purposes -->
<script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="admin/js/jquery-confirm.min.js"></script>


<script type="text/javascript">


$(document).ready(function() {
    $('#datatable').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    });
} );

$.ajax({
 		method: 'GET',
        url: "https://apiwebfreelance-em645jn.c9users.io/public/proyectos/getProyectosXPostulaciones/2",
        async: false,
    dataType : "json",       
}).done(function (result) {
	var tbody='<tr>';
	var acciones='';
		$.each(result.data, function( i, value ) {
			acciones=' <span class="btn btn-info" onclick="postular(\''+result.data[i].id+'\',\''+result.data[i].titulo+'\')"><i class="fa fa-check-square-o"></i></span>';
	  			tbody+='<td>'+result.data[i].titulo+'</td>';
                tbody+='<td>'+result.data[i].descripcion+'</td>';
                tbody+='<td>'+result.data[i].rango+'</td>';
                tbody+='<td>'+result.data[i].plazo+'</td>';
                tbody+='<td class="text-center">'+acciones+'</td>';
                tbody+='</tr>';
		});		

    	$('#datatable > tbody').append(tbody);

});   	
	function postular(id,titulo){
		    $.confirm({
			    title: 'Postularme para el proyecto ' +titulo.toUpperCase(),
			    content: 'url: registrarPostulacion',
			    confirmButton: false,
			    cancelButton: false,
			    columnClass: 'col-md-12',
			    buttons: {
			        specialKey: {
			            text: 'Cancelar',
			            keys: ['shift', 'alt'],
			            action: function(){
				            }
			        },
			        somethingElse: {
			            text: 'Registrar',
			            btnClass: 'btn-blue',
			            keys: ['enter'],
			            action: function(){
			                sendDataPostulacion(id);
			            }
			        }
			    }
			});
	} 
	

	function sendDataPostulacion(id){
              var propuesta_simple = $('#propuesta_simple').val();
              var precio = $('#precio').val();
              var propuesta_extensa = $('#propuesta_extensa').val();
              var arrayRec = $('#recursos').val().substr(0,$('#recursos').val().length-1);
              var recursos = arrayRec.split(',');    
              var valor_agregado = $('#valor_agregado').val();
              var servicios_adicionales = $('#servicios_adicionales').val();
              var tiempo_estimado = $('#cantidad_tiempo').val()+' '+$('#select_tiempo').val();

              $.ajax({
                  type: 'POST',
                  url : 'https://apiwebfreelance-em645jn.c9users.io/public/proyectos/insertPostulacion',
                  dataType : "json",    
                  data: { 
                      'propuesta_simple': propuesta_simple, 
                      'precio': precio, 
                      'propuesta_extensa': propuesta_extensa, 
                      'recursos': recursos,
                      'valor_agregado': valor_agregado,
                      'servicios_adicionales': servicios_adicionales,
                      'tiempo_estimado': tiempo_estimado,
                      'id_proyecto': id,
                      'id_freelance': 2
                  },
                  success: function(msg){
                      if(msg['result']==true){
                      	window.location.replace("/postulaciones");       
                      	shoeMessage('Exito!','Se ha registrado con exito');
                      }else{
                      	shoeMessage('Error!','Ha ocurrido un error al registrar');
                      }
                  }
              });	              
	
	}

	function shoeMessage(type,msg){
	    $.alert({
	        title: type,
	        content: msg,
	    });		
	}		
</script>

@stop