<link rel="stylesheet" href="admin/plugins/iCheck/all.css">

<form class="form-horizontal" role="form" id="myForm">
  <div class="box-body">
    

    <!-- P. SIMPLE -->
      <div class="form-group col-md-12">
        <label for="" class="control-label">Propuesta Simple</label>
          <textarea type="text" class="form-control" id="propuesta_simple" placeholder="Descripción..."></textarea>
      </div>

    <!-- PRECIO -->
      <div class="form-group col-md-12">
        <label for="" class="control-label">Precio</label>
          <input type="text" class="form-control" id="precio" placeholder="">
      </div>

    <!-- P. EXTENSA -->
      <div class="form-group col-md-12">
        <label for="" class="control-label">Propuesta Extensa</label>
          <textarea type="text" class="form-control" id="propuesta_extensa" placeholder="Descripción..."></textarea>
      </div>

    <!-- HABILIDADES REQUERIDAS -->
      <div class=" form-group col-md-12">    
        <label for="" class="control-label">Recursos Necesarios</label>
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" id="setRec">
            <span class="input-group-btn">
              <button type="button" class="btn btn-info btn-flat" onclick="addItemRec('.divRecursos','#setRec','#recursos');">Agregar</button>
            </span>
        </div>
      </div>

    <!-- WIDGET -->
      <div class="form-group col-md-12">
        <div class="box box-default collapsed-box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Ver recursos</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body divRecursos">
          <input type="hidden" name="recursos" id="recursos">
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

    <!-- VALOR AGREGADO -->
      <div class="form-group col-md-12"> 
          <label for="" class="control-label">Valor Agregado al Proyecto</label>
            <textarea type="text" class="form-control" id="valor_agregado" placeholder=""></textarea>
      </div>

    <!-- SERVICIOS ADICIONALES -->
      <div class="form-group col-md-12">
        <label for="" class="control-label">Servicios Adicionales</label>
          <input type="text" class="form-control" id="servicios_adicionales" placeholder="">
      </div>


    <!-- TIEMPO -->
      <div class="form-group col-md-12">
        <label class="control-label">Estimación de Tiempo</label>
          <div class=" input-group">
            <input autocomplete="off" type="text" class="form-control" aria-label="..." id="cantidad_tiempo">
            <div class="input-group-btn">
              <select class="form-control btn btn-default dropdown-toggle" style="width: 100px;" id="select_tiempo">
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

   var recursosArray='';
   function addItemRec(div,inputGet,inputSet){  
    if($(inputGet).val()!=''){
      $(div).append('<small class="label pull-left bg-yellow" style="margin-right: 5px;">'+$(inputGet).val()+'</small>');   
        recursosArray+= $(inputGet).val()+',';
        $(inputSet).val(recursosArray);     
        $(inputGet).val('');
    }
   }
</script>