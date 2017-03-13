<link rel="stylesheet" href="admin/plugins/iCheck/all.css">
<input type="hidden" id="id_proyecto" value="<?php echo $id_proyecto ?>">
<div class="col-md-12"></div>
  <div class="box-body">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Tabla de Postulaciones </h3>
      </div>                 
      <div class="box-body">
        <table id="datatablePostulaciones" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Propuesta Simple</th>
              <th>Precio</th>
              <th>Propuesta Extensa</th>
              <th>Recursos</th>
              <th>Valor agregado</th>
              <th>Servicios adicionales</th>
              <th>Tiempo Estimado</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
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
              <th>Acciones</th>
            </tr>
          </tfoot>
        </table>
      </div>   
    </div>
  </div>              
</div>   

<script src="admin/plugins/iCheck/icheck.min.js"></script>
<script src="admin/js/validator.js"></script>

<script type="text/javascript">
      //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
$(document).ready(function() {
//    $('#datatablePostulaciones').DataTable();


$.ajax({
    method: 'GET',
        url: "https://apiwebfreelance-em645jn.c9users.io/public/proyectos/getPostulacionesxProyecto/"+$('id_proyecto').val(),
        async: false,
    dataType : "json",       
}).done(function (result) {
  var tbody='<tr>';
  var acciones='';
    $.each(result.data, function( i, value ) {
      acciones='<span class="btn btn-info" onclick="aceptarPostulacion()"><i class="fa fa-check-square-o"></i></span>';
      acciones+='<span class="btn btn-info" onclick="recharaPostulacion()"><i class="fa fa-check-square-o"></i></span>';
          tbody+='<td>'+result.data[i].propuesta_simple+'</td>';
                tbody+='<td>'+result.data[i].precio+'</td>';
                tbody+='<td>'+result.data[i].propuesta_extensa+'</td>';
                tbody+='<td>';
                var obj =  jQuery.parseJSON(result.data[i].recursos);
                $.each(obj, function( i, value ) {
                  tbody+=  '<small class="label pull-left bg-yellow" style="margin-right: 5px;">'+value+'</small>';
                });                 
                tbody+= '</td>';
                tbody+='<td>'+result.data[i].valor_agregado+'</td>';
                tbody+='<td>'+result.data[i].servicios_adicionales+'</td>';
                tbody+='<td>'+result.data[i].tiempo_estimado+'</td>';
                tbody+='<td class="text-center">'+acciones+'</td>';
                tbody+='</tr>';
    });   

      $('#datatablePostulaciones > tbody').append(tbody);

});

} );


function aceptarPostulacion(){
        $.confirm({
          title: 'Aceptar postulacion',
          content: 'Desea aceptar?',
          confirmButton: false,
          cancelButton: false,
          columnClass: 'col-md-4 col-md-offset-4',
          buttons: {
              specialKey: {
                  text: 'Cancelar',
                  keys: ['shift', 'alt'],
                  action: function(){
                    }
              },
              somethingElse: {
                  text: 'Aceptar',
                  btnClass: 'btn-blue',
                  keys: ['enter'],
                  action: function(){
                     sendDataProyecto();
                  }
              }
          }
      });  
}

function recharaPostulacion(){
        $.confirm({
          title: 'Rechazar postulacion',
          content: 'Desea rechazar?',
          confirmButton: false,
          cancelButton: false,
          columnClass: 'col-md-4 col-md-offset-4',
          buttons: {
              specialKey: {
                  text: 'Cancelar',
                  keys: ['shift', 'alt'],
                  action: function(){
                    }
              },
              somethingElse: {
                  text: 'Rechazar',
                  btnClass: 'btn-red',
                  keys: ['enter'],
                  action: function(){
                     sendDataProyecto();
                  }
              }
          }
      });
}
</script>