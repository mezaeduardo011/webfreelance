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
                <li><a href="#" class="active">Mis proyectos</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
     
            <!-- Default box -->
            <div class="box">
    
                <div style="width:30%; margin-left: 30%;margin-top:1%">
                <button type="button" class="btn btn-block btn-primary btn-sm" onclick="registrar()">Registrar nuevo proyecto</button>
                </div>

                <div class="box-body">
                    <div class="box">
			            <div class="box-header">
			              <h3 class="box-title">Proyectos registrados</h3>
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
    } );
} );


$.ajax({
 		method: 'GET',
        url: "https://apiwebfreelance-em645jn.c9users.io/public/proyectos/getProyectos/1",
        async: false,
    dataType : "json",       
}).done(function (result) {
	var tbody='<tr>';
	var acciones='';
		$.each(result.data, function( i, value ) {

      acciones='<span style="margin-right: 5px;" class="btn btn-success" ><i class="fa fa-edit"></i></span>';
      acciones+='<span style="margin-right: 5px;" class="btn btn-warning" onclick="verPostulaciones('+result.data[i].id_proyecto+')"><i class="fa fa-eye"></i></span>';
      acciones+='<span class="btn btn-danger" onclick="verPostulaciones('+result.data[i].id_proyecto+')"><i class="fa fa-exclamation-circle"></i></span>';

	  			tbody+='<td>'+result.data[i].titulo+'</td>';
                tbody+='<td>'+result.data[i].descripcion+'</td>';
                tbody+='<td>'+result.data[i].rango+'</td>';
                tbody+='<td>'+result.data[i].plazo+'</td>';
                tbody+='<td class="text-center">'+acciones+'</td>';
                tbody+='</tr>';
		});		

    	$('#datatable > tbody').append(tbody);

});


	function registrar(){

		    $.dialog({
			    title: false,
			    content: 'url: registrarProyecto',
          closeIcon: true,
          closeIconClass: 'fa fa-close',
			    confirmButton: false,
			    cancelButton: false,
			    columnClass: 'col-md-12',
			});
	} 

  function verPostulaciones(id_proyecto){

        $.confirm({
          title: false,
          content: 'url: verPostulaciones/'+id_proyecto,
          confirmButton: false,
          cancelButton: false,
          columnClass: 'col-md-12 ',
          buttons: {
              specialKey: {
                  text: 'Cerrar',
                  keys: ['shift', 'alt'],
                  action: function(){
                    }
              }
          }
      });
  } 	




</script>

@stop