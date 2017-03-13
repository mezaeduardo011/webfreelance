<link rel="stylesheet" href="admin/plugins/iCheck/all.css">

<form class="form-horizontal" role="form" id="myForm">
  <div class="box-body">
    <!-- TITULO -->
      <div class="form-group col-md-12">
        <label for="" class="control-label">Título</label>
          <input type="email" class="form-control" id="titulo" name="titulo" placeholder="">
      </div>

    <!-- DESCRIPCIÓN -->
      <div class="form-group col-md-12">
        <label for="" class="control-label">Descripción</label>
          <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder=""></textarea>
      </div>

    <!-- RANGO -->
      <div class="form-group col-md-6">
        <label for="" class="control-label">Rango de presupuesto</label><br>
        <div class="form-group text-center col-md-12" style="margin-top: 5%">
            <label>
              <input type="radio" id="rango"  name="rango" class="flat-red" value="0 - 50 USD">
              0 - 50 USD
            </label>
            <label style="margin-left: 15px">
              <input type="radio" name="rango" id="rango" class="flat-red" value="50 - 100 USD">
              50 - 100 USD
            </label>
            <label style="margin-left: 15px">
              <input type="radio" name="rango" id="rango" class="flat-red" value="100 - 250 USD">
              100 - 250 USD
            </label>
            <label style="margin-left: 15px">
              <input type="radio" name="rango" id="rango" class="flat-red" value="250 - 500 USD">
              250 - 500 USD
            </label>
            <label style="margin-left: 15px; margin-top: 10px">
              <input type="radio" name="rango" id="rango" class="flat-red" value="1000 - 2000 USD">
              1000 - 2000 USD
            </label>
            <label style="margin-left: 15px">
              <input type="radio" name="rango" id="rango" class="flat-red" value="2000 - 3000 USD">
              2000 - 3000 USD
            </label>
            <label style="margin-left: 15px">
              <input type="radio" name="rango" id="rango" class="flat-red" value="3000 USD +">
              3000 USD +
            </label>
        </div>
      </div>

    <!-- HABILIDADES REQUERIDAS -->
      <div class="form-group col-md-6">
        <label for="" class="control-label">Habilidades Requeridas</label>
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" name="setHab" id="setHab">
            <span class="input-group-btn">
              <button type="button" class="btn btn-info btn-flat" onclick="addItem('.divHabilidades','#setHab','#habilidades','Habilidades');">Agregar</button>
            </span>
        </div>

        <div class="col-md-6" style="margin-top:2%">
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
            <div class="box-body divHabilidades">
             <input type="hidden" name="habilidades" id="habilidades">
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

      </div>

    <!-- WIDGET -->
     

    <!-- INFO ADICIONAL -->
      <div class="form-group col-md-6">
        <label for="" class="control-label">Información Adicional</label>
          <textarea type="text" class="form-control" name="informacion_adicional" id="informacion_adicional"  placeholder=""></textarea>
      </div>

    <!-- HERRAMIENTAS REQUERIDAS -->
      <div class="form-group col-md-6">    
        <label for="" class="control-label">Herramientas Requeridas</label>
        <div class="input-group input-group-sm">
          <input type="text" class="form-control"  name="setHerr" id="setHerr">
            <span class="input-group-btn">
              <button type="button" class="btn btn-info btn-flat" onclick="addItem('.divHerramientas','#setHerr','#herramientas','Herramientas');">Agregar</button>
            </span>
        </div>
      </div>

    <!-- WIDGET -->
      <div class="col-md-6" style="margin-top: 2%">
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
          <div class="box-body divHerramientas">
          <input type="hidden" name="herramientas" id="herramientas">
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

    <!-- PLAZO DEL PROYECTO -->
        <div class="form-group col-md-12">
          <label class="control-label">Plazo del proyecto</label>
          <div class=" input-group">
            <input autocomplete="off" type="text" class="form-control" aria-label="..." name="cantidad_plazo" id="cantidad_plazo">
            <div class="input-group-btn">
              <select class="form-control btn btn-default dropdown-toggle" style="width: 100px;" name="select_plazo" id="select_plazo">
                <option selected="Dias" value="Dias">Días</option> 
                <option value="Semanas">Semanas</option>
                <option value="Meses">Meses</option>>
                </select> 
            </div>
          </div>          
        </div>
  </div>  
</form>

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
   var arrayHab='';
   var arrayHerr='';
   function addItem(div,inputGet,inputSet,type){  
    if($(inputGet).val()!=''){
      $(div).append('<small class="label pull-left bg-yellow" style="margin-right: 5px;">'+$(inputGet).val()+'</small>');   
      if (type=='Habilidades') {
        arrayHab+= $(inputGet).val()+',';
        $(inputSet).val(arrayHab);
      } else{
        arrayHerr+= $(inputGet).val()+',';
        $(inputSet).val(arrayHerr);        
      }
      
      $(inputGet).val('');
    }
   } 
</script>