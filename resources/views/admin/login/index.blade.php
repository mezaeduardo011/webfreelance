<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
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
    <a href="../../index2.html"><b>Vairo</b>Work</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar sesión</p>

    <form>
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
          <a type="submit" class="btn btn-primary btn-block btn-flat" onclick="logear();">Ingresar</a>
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

  function logear(){
              $.ajax({
                  type: 'GET',
                  url : 'https://apiwebfreelance-em645jn.c9users.io/public/proyectos/login/'+$('#correo').val()+'/'+$('#contrasena').val(),
                  dataType : "json",    
                  success: function(msg){
                      if(msg['error']==0){
                        location.reload();   
                        window.location.replace("/blank");                     
                      }else{
                        shoeMessage('Error!','Los datos ingresados no son correctos.');
                      }
                  }
              });    
  }

  function shoeMessage(type,msg){
      $.alert({
          title: type,
          content: msg,
      });   
  }  
</script>
</body>
</html>
