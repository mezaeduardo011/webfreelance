var contTab = 0;
function mostrarDivActividad(ul){

$("#divActividad").show();
$("#divProceso").hide();
$("#divBotones").hide();
$("#nombreProceso").empty();
$("#nombreProceso").append(  $("#proceso").val()  );
$("#divProcesosAccordion").show();
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

