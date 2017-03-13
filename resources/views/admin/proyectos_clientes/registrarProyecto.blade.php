<link rel="stylesheet" href="admin/plugins/iCheck/all.css">

<form class="form-horizontal" role="form" id="myForm">
  <div class="box-body">
    <!-- TITULO -->
      <div class="form-group col-md-12">
        <label for="" class="control-label">Título</label>
          <input type="email" class="form-control" id="inputtitulo3" placeholder="">
      </div>

    <!-- DESCRIPCIÓN -->
      <div class="form-group col-md-12">
        <label for="" class="control-label">Descripción</label>
          <textarea type="text" class="form-control" id="inputDescripcion3" placeholder=""></textarea>
      </div>

    <!-- RANGO -->
      <div class="form-group col-md-12">
        <label for="" class="col-sm-8 control-label">Rango de presupuesto</label><br>
      </div>

      <div class="form-group text-center col-md-12">
          <label>
            <input type="radio" name="r3" class="flat-red">
            0 - 50 USD
          </label>
          <label style="margin-left: 15px">
            <input type="radio" name="r3" class="flat-red">
            50 - 100 USD
          </label>
          <label style="margin-left: 15px">
            <input type="radio" name="r3" class="flat-red">
            100 - $250 USD
          </label>
          <label style="margin-left: 15px">
            <input type="radio" name="r3" class="flat-red" >
            250 - 500 USD
          </label><br>

          <label style="margin-left: 15px; margin-top: 10px">
            <input type="radio" name="r3" class="flat-red" >
            1000 - 2000 USD
          </label>
          <label style="margin-left: 15px">
            <input type="radio" name="r3" class="flat-red">
            2000 - 3000 USD
          </label>
          <label style="margin-left: 15px">
            <input type="radio" name="r3" class="flat-red">
            3000 USD +
          </label>
      </div>

    <!-- HABILIDADES REQUERIDAS -->
      <div class="form-group col-md-12">
        <label for="" class="control-label">Habilidades Requeridas</label>
        <div class="input-group input-group-sm">
          <input type="text" class="form-control">
            <span class="input-group-btn">
              <button type="button" class="btn btn-info btn-flat">Agregar</button>
            </span>
        </div>
      </div>

    <!-- WIDGET -->
      <div class="form-group col-md-12">
        <div class="box box-default collapsed-box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Ver habilidades</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            The body of the box
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

    <!-- INFO ADICIONAL -->
      <div class="form-group col-md-12">
        <label for="" class="control-label">Información Adicional</label>
          <textarea type="text" class="form-control" id="inputDescripcion3" placeholder=""></textarea>
      </div>

    <!-- HERRAMIENTAS REQUERIDAS -->
      <div class="form-group col-md-12">    
        <label for="" class="control-label">Herramientas Requeridas</label>
        <div class="input-group input-group-sm">
          <input type="text" class="form-control">
            <span class="input-group-btn">
              <button type="button" class="btn btn-info btn-flat">Agregar</button>
            </span>
        </div>
      </div>

    <!-- WIDGET -->
      <div class="form-group col-md-12">
        <div class="box box-default collapsed-box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Ver herramientas</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            The body of the box
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

    <!-- PLAZO DEL PROYECTO -->
        <div class="form-group col-md-12">
          <label class="control-label">Plazo del proyecto</label>
          <div class=" input-group">
            <input autocomplete="off" type="text" class="form-control" aria-label="..." >
            <div class="input-group-btn">
              <select class="form-control btn btn-default dropdown-toggle" style="width: 100px;">
                <option selected="" value="value1">Días</option> 
                <option value="value2">Semanas</option>
                <option value="value3">Meses</option>>
                </select> 
            </div>
          </div>          
        </div>
  </div>  
</form>

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