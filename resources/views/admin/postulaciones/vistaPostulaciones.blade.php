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
                <li><a href="#"><i class="fa fa-dashboard"></i> Postulaciones</a></li>
                <li class="active">Mis postulaciones</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
     
            <!-- Default box -->
            <div class="box">
              
                <div class="box-body">
                    <div class="box">
			            <div class="box-header">
			              <h3 class="box-title">Mis postulaciones</h3>
			            </div>                 
			            <div class="box-body">
			              <table id="datatable" class="table table-bordered table-striped">
			                <thead>
				                <tr>
				                  <th>Propuesta Simple</th>
                          <th>Precio</th>
                          <th>Propuesta Extensa</th>
                          <th>Recursos</th>
                          <th>Valor agregado</th>
                          <th>Servicios adicionales</th>
                          <th>Tiempo Estimado</th>
				                </tr>
			                </thead>
			                <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
			                </tbody>
			                <tfoot>
				                <tr>
				                  <th>Propuesta Simple</th>
                          <th>Precio</th>
                          <th>Propuesta Extensa</th>
                          <th>Recursos</th>
                          <th>Valor agregado</th>
                          <th>Servicios adicionales</th>
                          <th>Tiempo Estimado</th>
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
    $('#datatable').DataTable();
} );


$.ajax({
 		method: 'GET',
        url: "https://apiwebfreelance-em645jn.c9users.io/public/proyectos/getProyectos/1",
        async: false,
    dataType : "json",       
}).done(function (result) {
	var tbody='<tr>';
	var acciones='<span class="btn btn-info"><i class="fa fa-check-square-o"></i></span>';

	acciones+=' <span class="btn btn-info"><i class="fa fa-check-square-o"></i></span>';
		$.each(result.data, function( i, value ) {

	  			tbody+='<td>'+result.data[i].titulo+'</td>';

                tbody+='<td>'+result.data[i].descripcion+'</td>';
                tbody+='<td>'+result.data[i].rango+'</td>';
                tbody+='<td>'+result.data[i].descripcion+'</td>';
                tbody+='<td>'+result.data[i].rango+'</td>';
                tbody+='<td>'+result.data[i].plazo+'</td>';
                tbody+='<td class="text-center">'+acciones+'</td>';
                tbody+='</tr>';
		});		

    	$('#datatable > tbody').append(tbody);

});


	function registrar(){

		    $.confirm({
			    title: 'Registrar Proyecto',
			    content: 'url: registrarProyecto',
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
			               sendDataProyecto();
			            }
			        }
			    }
			});
	} 


	function sendDataProyecto(){
              var titulo = $('#titulo').val();
              var descripcion = $('#descripcion').val();
              var id_cliente = 1;
              var rango = $('#rango').val();
              var arrayHab = $('#habilidades').val().substr(0,$('#habilidades').val().length-1);
              var habilidades = arrayHab.split(',');     
              var informacion_adicional = $('#informacion_adicional').val();
              var arrayHerr = $('#herramientas').val().substr(0,$('#herramientas').val().length-1);
              var herramientas = arrayHerr.split(',');   
              var plazo = $('#cantidad_plazo').val()+' '+$('#select_plazo').val();

              $.ajax({
                  type: 'POST',
                  url : 'https://apiwebfreelance-em645jn.c9users.io/public/proyectos/insertProyecto',
                  dataType : "json",    
                  data: { 
                      'titulo': titulo, 
                      'id_cliente': id_cliente, 
                      'descripcion': descripcion, 
                      'rango': rango, 
                      'habilidades': habilidades,
                      'informacion_adicional': informacion_adicional,
                      'herramientas': herramientas,
                      'plazo': plazo,
                      'requerimientos': ''
                  },
                  success: function(msg){
                      if(msg['result']==true){
                      	location.reload();
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