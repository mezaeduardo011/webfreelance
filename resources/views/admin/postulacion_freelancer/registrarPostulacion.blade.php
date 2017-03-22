<link rel="stylesheet" href="admin/plugins/iCheck/all.css">
<!-- Ion Slider -->
<link rel="stylesheet" href="admin/plugins/ionslider/ion.rangeSlider.css">
<!-- ion slider Nice -->
<link rel="stylesheet" href="admin/plugins/ionslider/ion.rangeSlider.skinNice.css">
<!-- Bootstrap validator -->
<link rel="stylesheet" href="css/bootstrapValidator.min.css">


<form class="form-horizontal" id="formularioPostulacion"  role="form" data-toggle="validator">
  <div class="box-body">
    
  <div class="col-md-12">
    <!-- P. SIMPLE -->
      <div class="form-group col-md-6">
        <label for="" class="control-label">Propuesta Simple</label>
          <textarea type="text" class="form-control" id="propuesta_simple" name="propuesta_simple" placeholder="Descripción..."></textarea>
      </div>
    <!-- P. EXTENSA -->
      <div class="form-group col-md-6" style="margin-left: 4%">
        <label for="" class="control-label">Propuesta Extensa</label>
          <textarea type="text" class="form-control" id="propuesta_extensa" name="propuesta_extensa" placeholder="Descripción..."></textarea>
      </div>
  </div>

  <div class="col-md-12">
    <!-- RECURSOS NECESARIOS -->
      <div class=" form-group col-md-6">    
        <label for="" class="control-label">Recursos Necesarios</label>
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" id="recursos" name="recursos">
            <span class="input-group-btn">
              <button type="button" class="btn btn-info btn-flat" onclick="addItemRec('.divRecursos','#setRec','#recursos');">Agregar</button>
            </span>
        </div><br>
        <div class="box box-default collapsed-box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Ver recursos</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="box-body divRecursos">
            <input type="hidden" name="recursos" id="recursos">
          </div>
        </div>
      </div>
    <!-- VALOR AGREGADO -->
      <div class="form-group col-md-6" style="margin-left: 4%"> 
          <label for="" class="control-label">Valor Agregado al Proyecto</label>
            <textarea type="text" class="form-control" id="valor_agregado" name="valor_agregado" placeholder=""></textarea>
      </div>
  </div>
        
  <div class="col-md-12">    
    <!-- SERVICIOS ADICIONALES -->
      <div class="form-group col-md-6">
        <label for="" class="control-label">Servicios Adicionales</label>
          <textarea type="text" class="form-control" id="servicios_adicionales" name="servicios_adicionales" placeholder=""></textarea>
      </div>
    <!-- TIEMPO -->
      <div class="form-group col-md-6" style="margin-left: 4%">
        <label class="control-label">Estimación de Tiempo</label>
        <div class=" input-group" style="margin-top: 5%">
            <input id="tiempo" type="text" name="tiempo" value="" > 
            <div class="input-group-btn">
              <select class="form-control btn btn-default dropdown-toggle" style="width: 100px;margin-left:10%" name="select_tiempo" id="select_tiempo">
                <option selected="Dias" value="Dias">Días</option> 
                <option value="Semanas">Semanas</option>
                <option value="Meses">Meses</option>
              </select> 
          </div>
        </div>          
      </div>
  </div>

  <div class="col-md-12">
    <!-- PRECIO -->
      <div class="form-group col-md-6">
        <label class="control-label">Precio</label>
        <div class="form-group" style="margin-top: 5%; margin-right:2%; margin-left: 2%">
            <input id="precio"  type="text" name="precio" value="" >     
        </div>          
      </div>
  </div>

</form>

<script src="admin/plugins/iCheck/icheck.min.js"></script>
<script src="admin/js/validator.js"></script>
<!-- Ion Slider -->
<script src="admin/plugins/ionslider/ion.rangeSlider.min.js"></script>
<script src="js/bootstrapValidator.min.js"></script>

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

   $(function () {
       $("#precio").ionRangeSlider({
      min: 0,
      max: 10,
      type: 'single',
      step: 0.1,
      postfix: " mm",
      prettify: false,
      hasGrid: true
    });
 });    

   $(function () {
       $("#tiempo").ionRangeSlider({
      min: 0,
      max: 10,
      type: 'single',
      step: 0.1,
      postfix: " mm",
      prettify: false,
      hasGrid: true
    });
 });    

   $('#formularioPostulacion').bootstrapValidator({

   
     fields: {
   
       propuesta_simple: {
   
         validators: {
   
           notEmpty: {
   
             message: 'Este campo es requerido.'
   
           }
   
         }
   
       },propuesta_extensa: {
   
         validators: {
   
           notEmpty: {
   
             message: 'Este campo es requerido.'
   
           }
   
         }
   
       },recursos: {
   
         validators: {
   
           notEmpty: {
   
             message: 'Ingrese al menos un recurso.'
   
           }
   
         }
   
       },valor_agregado: {
   
         validators: {
   
           notEmpty: {
   
             message: 'Este campo es requerido.'
   
           }
   
         }
   
       },servicios_adicionales: {
   
         validators: {
   
           notEmpty: {
   
             message: 'Este campo es requerido.'
   
           }
   
         }
   
       },precio: {
   
         validators: {
   
           notEmpty: {
   
             message: 'Ingrese un precio estimado.'
   
           }
   
         }
   
       },tiempo: {
   
         validators: {
   
           notEmpty: {
   
             message: 'Ingrese un lapso de tiempo.'
   
           }
   
         }
   
       }
   
     }
 
});   

   $('#formularioPostulacion').on('status.field.bv', function(e, data) {
        formIsValid = true;
        $('.form-group',$(this)).each( function() {
            formIsValid = formIsValid && $(this).hasClass('has-success');
        });
        if(formIsValid) {
            $('.submit-button', $(this)).attr('disabled', false);
        } else {
            $('.submit-button', $(this)).attr('disabled', true);
        }
    });


</script>