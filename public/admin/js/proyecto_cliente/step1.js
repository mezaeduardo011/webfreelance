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



  function sendDataProyecto(actualizar){
              var titulo = $('#titulo').val();
              var descripcion = $('#descripcion').val();
              var id_cliente = 1;
              var rango = $('#rango').val();
              var arrayHab = $('#habilidades').val().substr(0,$('#habilidades').val().length-1);
              var habilidades = arrayHab.split(',');     
              var informacion_adicional = $('#informacion_adicional').val();
              var arrayHerr = $('#herramientas').val().substr(0,$('#herramientas').val().length-1);
              var herramientas = arrayHerr.split(',');   
              var plazo = $('#cantidad_plazo').val()+' '+$('#select_plazo').val();
              $.ajax({
                  type: 'POST',
                  url : 'https://apiwebfreelance-em645jn.c9users.io/public/proyectos/insertProyecto',
                  dataType : "json",    
                  data: { 
                      'titulo': titulo, 
                      'id_cliente': id_cliente, 
                      'descripcion': descripcion, 
                      'rango': rango, 
                      'habilidades': habilidades,
                      'informacion_adicional': informacion_adicional,
                      'herramientas': herramientas,
                      'plazo': plazo,
                      'requerimientos': ''
                  },
                  success: function(msg){
                      if(msg['result']==true){
                        $('#divLoadingStep2').fadeOut( "slow", function() {
                          $( "#divMensajeSuccessStep2" ).fadeIn( "slow" );
                        });
                      }else{
                        shoeMessage('Error!','Ha ocurrido un error al registrar');
                      }
                  },error: function(msg){
                        shoeMessage('Error!','Ha ocurrido un error al conectar con el servidor');                   
                  }
              });               
  }  




    function shoeMessage(type,msg){
      $.alert({
          title: type,
          content: msg,
      });   
  }

   function showUl(){
      $('#divMensajeSuccessStep2').fadeOut( "slow", function() {
        $( "#divStep2" ).fadeIn( "slow" );
      });  
 }

 function showAll(){
  $("#conL").attr("disabled", "disabled");
  $("#reg").attr("disabled", "disabled");

  location.reload();
 }

 function editData(){
    $("#buttonSave1").hide();
    $("#divStep2").css('display','none');
    $("#divLoadingStep2").show();
    $('#buttonSave2').css('display','block');
 }