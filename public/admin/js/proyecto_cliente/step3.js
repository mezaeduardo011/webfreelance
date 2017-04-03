var contTab = 0;
var contadorActividad=0;
function mostrarDivActividad(ul){
    $("#actividad").val('') ;
    $("#actor").val('');
    $("#descripcion_actividad").val('');
    $("#divBotones").hide();
    $("#divActividad").show();
    $("#nombreProceso").empty();
    $("#nombreProceso").append(  $("#proceso").val()  );
    $("#divProcesosAccordion").show();
    $("#buttonRegresar1").show();
    if (ul==true) {agregarUl($("#proceso").val());}
}

function mostrarDivProcesos(){
$("#divProceso").show();
$("#divBotones").hide();
$("#divActividad").hide();
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
  var div='<div class="col-md-12"  data-toggle="collapse"  data-parent="#accordion" href="#collapse'+contTab +'" style="cursor: pointer;">';
  var div1 = '<div class="panel box box-primary" id="tab_'+contTab +'" >'; 
  var div2 = '<div class="box-header with-border text-center" onclick="setContent($(this))">';
  var h4  = '<h4  style="text-transform: uppercase">';
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
  var th5 = '<th class="col-md-2 text-center">Acciones</th>';
  var trCierre = '</tr>';
  var trTitulos = tr+th1+th2+th3+th4+th5+trCierre;
  var tablaCierre = '</table>';
  var contenidoTabla = tabla+trTitulos+tablaCierre;
  var contenido = div1+div2+div+h4+titulo+h4Cierre+divCierre+div3+div4+divCierre+contenidoTabla+divCierre+divCierre;
  $("#accordion").append(contenido);
 }

 function agregarContenido () {
  var proceso = $("#proceso").val().replace(/\s/g, '');
  contadorActividad = document.getElementById(proceso).rows.length;
  var editar = '<span class="btn btn-success" style="margin-right: 5px;"><i class="fa fa-edit"></i></span>';
  var eliminar = '<span class="btn btn-danger"  onclick="eliminarActividad(\''+proceso+'\',\''+$("#actividad").val()+'\','+contadorActividad+')"><i class="fa fa-trash"></i></span>';
  var acciones = editar+eliminar;
  var tr = '<tr id="'+proceso+contadorActividad+'">';
  var td1 = '<td id="td'+proceso+contadorActividad+'">'+contadorActividad+'.</td>';
  var td2 = '<td>'+ $("#actividad").val() +'</td>';
  var td3 = ' <td>'+ $("#actor").val()+'</td>';
  var td4 = '<td>'+ $("#descripcion_actividad").val()+'</td>';
  var td5 = ' <td class="text-center">'+acciones+'</td>';
  var trCierre = '</tr>';

  var contenido = tr+td1+td2+td3+td4+td5+trCierre;
  $("#"+proceso).append(contenido);
  $("#divActividad").hide();
  $("#divBotones").show();
 }

 function eliminarActividad(proceso,actividadName,contadorActividad){      
      $.confirm({
          title: 'Eliminar la actividad?',
          content: actividadName.toUpperCase(),
          buttons: {
              confirm: function () {
                 $("#"+proceso+contadorActividad).remove();
                 changeValueTd(proceso);
              },
              cancel: function () {
                 
              }
          }
      });           
 }

 function changeValueTd(proceso){
    var j=1;
      for (var i = 1; i <= contadorActividad; i++) {
          if ($("#td"+proceso+i).length>0) {
             $("#td"+proceso+i).html(j+'.');
             $("#td"+proceso+i).attr("id","-");      
             $("#-").attr("id","td"+proceso+j);       
             j++;    
          }
      }     
 }

 function insertProceso(){
    $("#divProceso").hide();
    $("#divBotones").hide();
    $("#infoRequerimientos").hide();
    $("#divLoadingStep3").show();

                $.ajax({
                  type: 'POST',
                  url : 'https://apiwebfreelance-em645jn.c9users.io/public/proyectos/insertProceso',
                  dataType : "json",    
                  data: {'proceso': $('#proceso').val()},
                  success: function(msg){
                      if(msg['result']==true){
                        $('#divLoadingStep3').fadeOut( "slow", function() {
                            $('#divMensajeSuccessStep3').fadeIn( "slow", function() {                             
                                setTimeout('hiddenMsg3()', 2000);
                            });                                                    
                        });
                      }else{
                        shoeMessage('Error!','Ha ocurrido un error al registrar');
                      }
                  },error: function(msg){
                        shoeMessage('Error!','Ha ocurrido un error al conectar con el servidor');                   
                  }
              });
 }

 function hiddenMsg3(){
          $('#divMensajeSuccessStep3').fadeOut( "slow", function() {
              setTimeout('mostrarDivActividad(true)', 500);                                      
          });   
 }