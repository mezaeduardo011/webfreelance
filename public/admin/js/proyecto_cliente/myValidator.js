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