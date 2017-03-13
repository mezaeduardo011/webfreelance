@extends('admin.layouts.master')
@section('contentCss')
 <link rel="stylesheet" href="admin/plugins/datatables/dataTables.bootstrap.css">
 <link rel="stylesheet" href="admin/css/jquery-confirm.min.css">
  

@stop
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
     
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>
                </div>

                <div style="width:30%; margin-left: 30%;margin-top:1%">
                <button type="button" class="btn btn-block btn-primary btn-sm" onclick="registrar()">Registrar</button>
                </div>

                <div class="box-body">
                    <div class="box">
			            <div class="box-header">
			              <h3 class="box-title">Data Table With Full Features</h3>
			            </div>                 
			            <div class="box-body">
			              <table id="example1" class="table table-bordered table-striped">
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
				                  <td>Trident</td>
				                  <td>Internet
				                    Explorer 4.0
				                  </td>
				                  <td>Win 95+</td>
				                  <td> 4</td>
				                  <td>X</td>
				                </tr>
			                </tbody>
			                <tfoot>
				                <tr>
				                  <<th>Título</th>
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
                    Footer
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


   	$("#example1").DataTable();
	function registrar(){

		    $.confirm({
			    title: 'Registrar postulación',
			    content: 'url: registrarPostulacion',
			    confirmButton: false,
			    cancelButton: false,
			    columnClass: 'col-md-6 col-md-offset-3',
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
			                $.alert('Something else?');
			            }
			        }
			    }
			});
	} 
	
</script>

@stop