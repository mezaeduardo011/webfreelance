<link rel="stylesheet" href="admin/plugins/iCheck/all.css">

<div class="col-md-12"></div>
  <div class="box-body">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Tabla de Postulaciones</h3>
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
</div>   

<script src="admin/plugins/iCheck/icheck.min.js"></script>
<script src="admin/js/validator.js"></script>

<script type="text/javascript">
$('#myForm').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    alert('1');
  } else {
    alert('2');
  }
});
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
</script>