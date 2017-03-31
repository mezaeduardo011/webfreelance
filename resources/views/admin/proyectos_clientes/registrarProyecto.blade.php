<link rel="stylesheet" href="admin/plugins/iCheck/all.css">
<!-- Ion Slider -->
<link rel="stylesheet" href="admin/plugins/ionslider/ion.rangeSlider.css">
<!-- ion slider Nice -->
<link rel="stylesheet" href="admin/plugins/ionslider/ion.rangeSlider.skinNice.css">
<!-- Bootstrap validator -->
<link rel="stylesheet" href="css/bootstrapValidator.min.css">
<!-- Wizard -->
<link rel="stylesheet" href="admin/css/wizard.css">
<!-- Dropzone -->
<link rel="stylesheet" href="admin/css/dropzone.css">
<link rel="stylesheet" href="admin/css/basicDropzone.css">
 
<div class="wizard">
    <div class="wizard-inner">
        <div class="connecting-line"></div>
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                    <span class="round-tab">
                        <i class="glyphicon glyphicon-folder-open"></i>
                    </span>
                </a>
            </li>

            <li role="presentation" class="disabled">
                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                    <span class="round-tab">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </span>
                </a>
            </li>
            <li role="presentation" class="disabled">
                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                    <span class="round-tab">
                        <i class="glyphicon glyphicon-picture"></i>
                    </span>
                </a>
            </li>

            <li role="presentation" class="disabled">
                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                    <span class="round-tab">
                        <i class="glyphicon glyphicon-ok"></i>
                    </span>
                </a>
            </li>
        </ul>
    </div>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="step1">
                <form class="form-horizontal col-md-12" id="formularioProyecto">    
                    <div class="col-md-12"> 
                      <!-- TITULO -->                  
                        <div class="form-group MiValidador">
                          <label for="" class="control-label">Título</label>
                          <input type="text" class="form-control col-md-12" id="titulo" name="titulo" placeholder="Título del proyecto">        
                        </div>
                    </div>     
                    
                    <div class="col-md-12">
                      <!-- DESCRIPCIÓN -->                     
                        <div class="form-group col-md-6 MiValidador">
                          <label for="" class="control-label">Descripción</label>
                            <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción completa del proyecto"></textarea>
                        </div>
                      <!-- INFO ADICIONAL -->
                        <div class="form-group col-md-6 MiValidador" style="margin-left: 4%">
                          <label for="" class="control-label">Información Adicional</label>
                          <textarea type="text" class="form-control" id="informacion_adicional" name="informacion_adicional" placeholder=""></textarea>
                        </div>
                    </div>  

                    <div class="col-md-12">
                      <!-- HABILIDADES REQUERIDAS -->
                        <div class="form-group col-md-6 divHabilidadesForm">
                          <label for="" class="control-label">Habilidades Requeridas</label>
                          <div class="input-group input-group-sm">
                            <input type="text" class="form-control" name="setHab" id="setHab">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat" onclick="addItem('.divHabilidades','#setHab','#habilidades','Habilidades');">Agregar</button>
                              </span>
                          </div><br>
                          <!-- WIDGET -->
                              <div class="box box-default collapsed-box box-solid" style="margin-top: -3%" >
                                <div class="box-header with-border" style="height: 35px; background: #00ACD6">
                                  <h3 class="box-title" style="color: white;font-size: 12px">Ver habilidades</h3>
                                  <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body divHabilidades" style="display: block">
                                 <input type="hidden" name="habilidades" id="habilidades">
                                </div>
                                <!-- /.box-body -->
                              </div>
                              <!-- /.box -->
                        </div>
                      <!-- HERRAMIENTAS REQUERIDAS -->
                        <div class="form-group col-md-6 divHerramientasForm" style="margin-left: 4%">    
                          <label for="" class="control-label">Herramientas Requeridas</label>
                          <div class="input-group input-group-sm">
                            <input type="text" class="form-control"  name="setHerr" id="setHerr">
                              <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat" onclick="addItem('.divHerramientas','#setHerr','#herramientas','Herramientas');">Agregar</button>
                              </span>
                          </div><br>
                          <!-- WIDGET -->
                          <div class="box box-default collapsed-box box-solid" style="margin-top: -3%">
                            <div class="box-header with-border" style="height: 35px; background: #00ACD6">
                              <h3 class="box-title" style="color: white;font-size: 12px">Ver herramientas</h3>
                            </div>
                            <div class="box-body divHerramientas" style="display: block">
                            <input type="hidden" name="herramientas" id="herramientas">
                            </div>
                          </div>
                        </div>
                    </div>   
                    
                    <div class="col-md-12">   
                      <!-- RANGO -->                    
                      <div class="form-group col-md-6 has-success">
                        <label for="" class="control-label text-center">Rango de presupuesto</label><br>
                        <div class="text-center" style="margin-top: 1%">
                          <label>
                            <input type="radio" name="rango" id="rango" checked class="flat-red" value="0 - 50 USD">
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
                      <!-- PLAZO DEL PROYECTO -->
                      <div class="form-group MiValidador col-md-6" style="margin-left: 4%">
                        <label class="control-label">Plazo del proyecto</label>
                        <div class=" input-group" style="margin-top: 5%">
                            <input id="cantidad_plazo" type="text" name="cantidad_plazo" value="" > 
                            <div class="input-group-btn">
                              <select class="form-control btn btn-default dropdown-toggle" style="width: 100px;margin-left:10%" name="select_plazo" id="select_plazo">
                                <option selected="Dias" value="Dias">Días</option> 
                                <option value="Semanas">Semanas</option>
                                <option value="Meses">Meses</option>
                              </select> 
                          </div>
                        </div>          
                      </div>
                    </div>                                                          
                </form>
                <ul class="list-inline pull-right">
                    <li><button type="button" class="btn btn-primary next-step">Guardar y continuar</button></li>
                    <br><br><br>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="step2">
                    <form action= "/file-upload" class= "dropzone" id= "filesDrop" >
                      <div class="dz-message" data-dz-message><span>Click para seleccionar los archivos</span></div>
                    </form>
                    <br>
                <ul class="list-inline pull-right">
                    <li><button type="button" class="btn btn-default prev-step">Regresar</button></li>
                    <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                    <br><br><br>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="step3">
              <div>
<form class="form-horizontal" id="formularioRequerimientos" role="form" data-toggle="validator">
  <div class="box-body">
    <!-- PROCESO --> 
    <div id="divProceso">
      <div class="form-group col-md-12">    
        <label for="" class="control-label">Proceso</label>
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" name="proceso" id="proceso">
            <span class="input-group-btn">
              <button type="button" class="btn btn-info btn-flat" onclick="mostrarDivActividad(true)">Agregar</button>
            </span>
        </div>
      </div>
    </div>

    <div id="divActividad" hidden="">
      <div class="form-group col-md-12"> 
        <h3>Actividad para el proceso:<span id="nombreProceso"></span> </h3>
      <!-- ACTIVIDAD -->
        <div class="form-group col-md-6">    
          <label for="" class="control-label">Actividad</label>
          <div class="input-group input-group-sm col-md-12">
            <input type="text" class="form-control" name="actividad" id="actividad">
          </div>
        </div>
      <!-- ACTOR -->
        <div class="form-group col-md-6" style="margin-left: 4%">    
          <label for="" class="control-label">Actor</label>
          <div class="input-group input-group-sm col-md-12">
            <input type="text" class="form-control" name="actor" id="actor">
          </div>
        </div>
      </div>
      <!-- DESCRIPCIÓN -->     
        <div class="form-group col-md-12">
          <label for="" class="control-label">Descripción</label>
            <textarea type="text" class="form-control" id="descripcion_actividad" name="descripcion_actividad" placeholder="Descripción completa de la actividad"></textarea> <br> 
        </div>

        <div class="form-group col-md-12" style="width:30%; margin-left: 30%;margin-top:1%">
          <button type="button" class="btn btn-block btn-primary btn-sm" onclick="agregarContenido()">Registrar actividad</button>
        </div>
    </div>   
  </div>
</form>

  <div id="divBotones" class="form-group col-md-12" hidden="">
    <div class="col-md-6"><button type="button" class="btn btn-block btn-primary btn-sm" onclick="mostrarDivActividad(false)">Registrar otra actividad</button></div>
    <div class="col-md-6"><button type="button" class="btn btn-block btn-primary btn-sm" onclick="mostrarDivProcesos()">Registrar otro proceso</button></div>
  </div>


                <section class="content">     
                  <!-- START ACCORDION -->
                    <div class="row">
                      <div class="col-md-12" >
                        <div class="box box-solid">
                          <div class="box-header with-border">
                            <h4 class="box-title">Procesos agregados</h4>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <div class="box-group" id="accordion">
                               <!-- /.contenido de los procesos -->
                            </div>
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                      </div>
                    </div>
                  <!-- END ACCORDION -->  
                </section>
              </div>
                <ul class="list-inline pull-right">
                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                    <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                    <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                    <br><br>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="complete">
                <h3>Complete</h3>
                <p>You have successfully completed all steps.</p>
            </div>
            <div class="clearfix"></div>
        </div>
</div>
    


<script src="admin/plugins/iCheck/icheck.min.js"></script>
<script src="admin/js/validator.js"></script>
<!-- Ion Slider -->
<script src="admin/plugins/ionslider/ion.rangeSlider.min.js"></script>
<!-- Wizard -->
<script src="js/wizard.js"></script>
<!-- Dropzone -->
<script src="admin/js/dropzone.js"></script>
<script src="admin/js/dropzone-amd-module.js"></script>

<script src="js/bootstrapValidator.min.js"></script>

<script type="text/javascript">

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
  $(function () {
         $("#cantidad_plazo").ionRangeSlider({
        min: 1,
        max: 31,
        type: 'single',
        step: 1,
        postfix: "",
        prettify: false,
        hasGrid: true
      });
   });    


   $('#formularioProyecto').bootstrapValidator({

     
     fields: {
   
       titulo: {
   
         validators: {
   
           notEmpty: {
   
             message: 'El título es requerido.'
   
           }
   
         }
   
       },descripcion: {
   
         validators: {
   
           notEmpty: {
   
             message: 'La descripción es requerida.'
   
           }
   
         }
   
       },informacion_adicional: {
   
         validators: {
   
           notEmpty: {
   
             message: 'La información adicional es requerida'
   
           }
   
         }
   
       },select_plazo: {
   
         validators: {
   
           notEmpty: {
   
             message: 'Seleccione un plazo'
   
           }
   
         }
   
       }
   
     }
   
  });   

     $('#formularioProyecto').on('status.field.bv', function(e, data) {
          formIsValid = true;
          $('.MiValidador',$(this)).each( function() {
                formIsValid = formIsValid && $(this).hasClass('has-success');
          });
            
          if($("#habilidades").val()=="" || $("#herramientas").val()==""){
                formIsValid = formIsValid && false;
          }else{
            
            $( ".divHabilidadesForm" ).addClass( "has-success" );
            $( ".divHerramientasForm" ).addClass( "has-success" );
          }

          if(formIsValid) {
            $('#buttonSave1').prop("disabled", false);

          } else {
            $('#buttonSave1').prop("disabled", true);
          }
      });


  $("#filesDrop").dropzone({
      url: "my-upload-url",
  });   
</script>

<script type="text/javascript">
//script de step 3
var contTab = 0;
function mostrarDivActividad(ul){

$("#divActividad").show();
$("#divProceso").hide();
$("#divBotones").hide();
$("#nombreProceso").empty();
$("#nombreProceso").append(  $("#proceso").val()  );
if (ul==true) {agregarUl($("#proceso").val());}

}

function mostrarDivProcesos(){
$("#divProceso").show();
$("#divBotones").hide();
$("#proceso").val("");
}
function registrarActividad(){
  var nombreProceso = $("#proceso").val();
  agregarDiv();
}

function agregarUl(nombreProceso){
    contTab = contTab+1;
    agregarDiv(nombreProceso,contTab);
 }   

 function setValueProceso(value){
   $('#proceso').val("");
   $('#proceso').val(value.replace(/\s/g, ''));
 }


 function agregarDiv (nombreProceso,contTab) {
  var div1 = '<div class="panel box box-primary" id="tab_'+contTab +'">'; 
  var div2 = '<div class="box-header with-border" onclick="setContent($(this))" data-toggle="collapse"  data-parent="#accordion" href="#collapse'+contTab +'">';
  var h4  = '<h4 class="box-title">';
  var titulo = '<a  >'+nombreProceso+'</a>';
  var h4Cierre = '</h4>';
  var div3 = '<div id="collapse'+contTab +'" class="panel-collapse collapse">';
  var div4 = '<div class="box-body">';
  var divCierre = '</div>';
  var tabla = '<table class="table table-bordered" id="'+ nombreProceso.replace(/\s/g, '') +'" >';
  var tr = '<tr>';
  var th1 = '<th style="width: 10px">#</th>';
  var th2 = '<th>Actividad</th>';
  var th3 = '<th>Actor</th>';
  var th4 = '<th>Descripción</th>';
  var th5 = '<th>Acciones</th>';
  var trCierre = '</tr>';
  var trTitulos = tr+th1+th2+th3+th4+th5+trCierre;
  var tablaCierre = '</table>';
  var contenidoTabla = tabla+trTitulos+tablaCierre;
  var contenido = div1+div2+h4+titulo+h4Cierre+div3+div4+divCierre+contenidoTabla+divCierre+divCierre;
  $("#accordion").append(contenido);
 }

 function agregarContenido () {
  var tr = '<tr>';
  var td1 = '<td>1.</td>';
  var td2 = '<td>'+ $("#actividad").val() +'</td>';
  var td3 = ' <td>'+ $("#actor").val()+'</td>';
  var td4 = '<td>'+ $("#descripcion_actividad").val()+'</td>';
  var td5 = ' <td></td>';
  var trCierre = '</tr>';
  var contenido = tr+td1+td2+td3+td4+td5+trCierre;
  $("#"+$("#proceso").val().replace(/\s/g, '')).append(contenido);
  $("#divActividad").hide();
  $("#divBotones").show();
 }


//  function getEventTarget(e) {
//     e = e || window.event;
//     return e.target || e.srcElement; 
// }

// var divTitle = document.getElementsByClassName('box-header');
// divTitle.onclick = function(event) {
//     var target = getEventTarget(event);
//     alert(target.innerHTML);
//     setValueProceso(target.innerHTML)
// };

function setContent(t){
   setValueProceso(t.find("a").text());
}

</script>