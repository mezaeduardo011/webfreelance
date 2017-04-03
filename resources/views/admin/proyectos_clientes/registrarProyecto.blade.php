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
                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Datos">
                    <span class="round-tab">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </span>
                </a>
            </li>

            <li role="presentation" class="disabled">
                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Documentos">
                    <span class="round-tab">
                        <i class="glyphicon glyphicon-folder-open"></i>
                    </span>
                </a>
            </li>
            <li role="presentation" class="disabled">
                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Requerimientos">
                    <span class="round-tab">
                        <i class="glyphicon glyphicon-file"></i>
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
                            <input id="cantidad_plazo" type="text" name="cantidad_plazo"> 
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
                    <li>
                        <button type="button" class="btn btn-primary next-step"  id="buttonSave1" hidden="" onclick="sendDataProyecto();"  >Guardar y continuar</button>
                        <button type="button" class="btn btn-primary next-step"  id="buttonSave2" style="display: none" onclick="sendDataProyecto()">Actualizar y continuar</button>
                    </li>
                    <br><br><br>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="step2" >
                    <div class="text-center" id="divLoadingStep2">
                      <img src="/admin/img/loading.gif" width="10%"> 
                      <p class="login-box-msg">Registrando datos de tu proyecto</p>   
                      <br><br><br><br>
                    </div>                 
                    <div class="text-center" id="divMensajeSuccessStep2" style="display: none">
                      <i class="fa fa-check-circle-o fa-5x" style="color:#5BC0DE"></i>
                      <h4 class="login-box-msg">El proyecto se ha registrado exitosamente.</h4>   
                      <p class="login-box-msg">Deseas continuar con el registro?</p>
                      <div class="col-md-12">
                          <div class="col-md-6">
                            <button class="btn bg-navy btn-sm pull-right" type="button"  onclick="showAll()" id="conL">Continuar despues</button>
                          </div>
                          <div class="col-md-6">
                            <button class="btn btn-primary btn-sm pull-left" type="button" onclick="showUl();" id="reg">Continuar registrando</button>
                          </div>                          
                      </div>
                      <br><br><br><br>
                    </div>   

                <div id="divStep2" style="display: none">
                    <h4 class="login-box-msg">Documentos</h4>
                    <p class="login-box-msg">Puedes subir archivos para mas documentación para tu proyecto </p>
                    <form action= "/file-upload" class= "dropzone" id= "filesDrop">
                      <div class="dz-message" data-dz-message><span>Click para seleccionar los archivos</span></div>
                                          
                    </form>

                    <br>
                    <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-default prev-step" onclick="editData()">Editar datos</button></li>
                        <li><button type="button" class="btn btn-primary next-step" >Continuar</button></li>
                        <br><br><br>
                    </ul>                  
                </div>                 
            </div>
            <div class="tab-pane" role="tabpanel" id="step3">
              <div>
<form class="form-horizontal" id="formularioRequerimientos" role="form" data-toggle="validator">
  <div class="box-body">
    <!-- PROCESO --> 
    <div class="alert alert-info alert-dismissible" id="infoRequerimientos">
        <h4>
        Registra los requerimientos de tu proyecto.
        </h4>        
        <p>Cada proceso y actividad que agregues se ira registrando en nuestra base de datos.</p>
        <p>El freelancer que consulte tu proyecto podra descargar un archivo excel con todos estos datos.</p>
        <p>Cada vez que edites estos datos, el freelancer lo vera reflejado en el documento.</p>
        <p>Los datos que registraras son procesos, actividades para cada proceso, participantes y descripcion de cada actividad.</p>
        <p>Ejemplo:</p>
        <ul>
          <li>
          Proceso 1
            <ul>
            <li>Actividad 1</li>
            <li>Actor de esta actividad</li>
            <li>Descripcion de la actividad</li>
            </ul>
          </li>
          <li>
          Proceso 2
            <ul>
            <li>Actividad 1</li>
            <li>Actor de esta actividad</li>
            <li>Descripcion de la actividad</li>
            </ul>
            <ul>
            <li>Actividad 2</li>
            <li>Actor de esta actividad</li>
            <li>Descripcion de la actividad</li>
            </ul>            
          </li>          
        </ul>        
    </div>    
    <div id="divProceso">
      <div class="form-group col-md-12">    
        <label for="" class="control-label">Proceso</label>
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" name="proceso" id="proceso">
            <span class="input-group-btn">
              <button type="button" class="btn btn-info btn-flat" onclick="insertProceso()">Agregar</button>
            </span>
        </div>
      </div>
    </div>
                    <div class="text-center" id="divLoadingStep3" style="display: none">
                      <img src="/admin/img/loading.gif" width="10%"> 
                      <p class="login-box-msg">Agregando proceso a tu proyecto</p>   
                      <br><br><br><br>
                    </div>   
                    <div class="text-center" id="divMensajeSuccessStep3" style="display: none">
                      <i class="fa fa-check-circle-o fa-5x" style="color:#5BC0DE"></i>
                      <h4 class="login-box-msg">El proceso se ha registrado exitosamente.</h4>   
                      <p class="login-box-msg">Ahora registra las actividades necesarias.</p>
                      <br><br><br><br>
                    </div>                      
    <div id="divActividad" hidden="">
      <div class="form-group col-md-12"> 
          <div class="alert bg-aqua-active alert-dismissible text-center">
          <h4>
          <i class="icon fa fa-list-ol"></i>
          Actividad para el proceso: <span id="nombreProceso" style="text-transform: uppercase;"></span>
          </h4>
          </div>      
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

        <div class="form-group col-md-12" style="width:30%; margin-left: 30%;">
          <button type="button" class="btn btn-block btn-primary btn-sm" onclick="agregarContenido()">Registrar actividad</button>
        </div>
    </div>   
  </div>
</form>

  <div id="divBotones" class="form-group col-md-12" hidden="">
    <div class="col-md-6"><button type="button" class="btn btn-block btn-primary btn-sm" onclick="mostrarDivActividad(false)">Registrar otra actividad</button></div>
    <div class="col-md-6"><button type="button" class="btn btn-block btn-primary btn-sm" onclick="mostrarDivProcesos()">Registrar otro proceso</button></div>
  </div>


                <section class="content" hidden="" id="divProcesosAccordion">     
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
                <ul class="list-inline pull-right"  >
                    <li><button type="button" class="btn btn-default prev-step" style="display: none" id="buttonRegresar1">Regresar</button></li>                  
                    <br><br><br>
                </ul>
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

<script src="admin/js/proyecto_cliente/step3.js"></script>
<script src="admin/js/proyecto_cliente/step1.js"></script>
<script src="admin/js/proyecto_cliente/myValidator.js"></script>

<script type="text/javascript">

    $("#filesDrop").dropzone({
        url: 'https://apiwebfreelance-em645jn.c9users.io/public/proyectos/uploadFile',
        addRemoveLinks: true,
        dictRemoveLinks: "Borrar archivo",
        init: function() {
            this.on("success", function(file) {
            });
            this.on("removedfile", function(file) {
                $.ajax({
                    type: "POST",
                    url: 'https://apiwebfreelance-em645jn.c9users.io/public/proyectos/deletedFile',
                    data: {'name':file.name},
                    success: function (data) {
                    }
                });                
            });
        }
    });

 
</script>

<script type="text/javascript">
//script de step 3



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