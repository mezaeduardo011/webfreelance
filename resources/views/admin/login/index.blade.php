<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sitio web</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin/plugins/iCheck/square/blue.css">
 <link rel="stylesheet" href="admin/css/jquery-confirm.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="text-center" id="divLoadingLogin" hidden="">
    <img src="/admin/img/loading.gif" width="10%"> 
    <p class="login-box-msg">Ingresando...</p>   
  </div>
    <p class="login-box-msg loginP">Iniciar sesión</p>

    <form id="formLogin">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Correo" id="correo">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" id="contrasena">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recordar datos
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id="button">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <a href="#">Olvidé mi contraseña</a>
    <a href="#" style="margin-right: 0px;float:right;">Registrarme</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="admin/plugins/iCheck/icheck.min.js"></script>

<script src="admin/js/jquery-confirm.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });


$( "#formLogin" ).submit(function( event ) {
  event.preventDefault();
  logear();
});

  function logear(){
              $.ajax({
                  type: 'GET',
                  url : 'https://apiwebfreelance-em645jn.c9users.io/public/proyectos/login/'+$('#correo').val()+'/'+$('#contrasena').val(),
                  dataType : "json",
                     beforeSend: function(){
                   $('.loginP').hide();
                   $('#correo').prop('readonly', true);
                   $('#contrasena').prop('readonly', true);
                   $('#button').attr('disabled', true);
                   $('#divLoadingLogin').show();
                 },
                  success: function(data){
                      
                      if(data['error']==0){
                        setCookies(data);
                        window.location.replace("/blank");                     
                      }else{
                        mostrarElementos();
                        shoeMessage('Error!','Los datos ingresados no son correctos.');
                      }
                  },error : function(data){                      
                        mostrarElementos();
                        shoeMessage('Error!','Error al conectar con el servidor');                      
                  }
              });    
  }

  function shoeMessage(type,msg){
      $.alert({
          title: type,
          content: msg,
      });   
  }  

  function mostrarElementos(){
      $('#correo').prop('readonly', false);
      $('#contrasena').prop('readonly', false);
      $('#button').attr('disabled', false);                        
      $('.loginP').show();
      $('#divLoadingLogin').hide();    
  }

 function setCookies(data){
      document.cookie = "userId="+data['data'][0].id;
      document.cookie = "userName="+data['data'][0].nombre;
      document.cookie = "userCorreo="+data['data'][0].correo;
      document.cookie = "userPerfil="+data['data'][0].perfil;  
 }
</script>
</body>
</html>
