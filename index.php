<?php 

@session_start();
  if (isset($_SESSION["tipo"])){ 
      if ($_SESSION["tipo"] == "administrados") {
        header("Location: WebContent/administrador/inicio.php");
      }else{
        header("Location: WebContent/usuario/inicio.php");
      }
      
  }
  if (!isset($_SESSION["mensaje"])) {
  }else{
    echo '<input type="hidden" id="mensaje" value="'.$_SESSION["mensaje"].'">';
      session_destroy();
  }

 ?>
<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
    <title>
	   tuAGRO 
    </title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"
      media="screen,projection" />
    <link rel="stylesheet" type="text/css" rel="stylesheet" href="css/estilo.css">  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
        
				
</head>  
     
<body class="font-cover" id="main">
  
  <!-- MENU DE NAVEGACION 
  <div class="navbar-fixed">--> 
    <nav class="teal">
      <div class="container">
        <div class="nav-wrapper ">
          <div class="row">
            <div class="col s12">
                <a href="../index.html" class="brand-logo"><h1>tuAGRO</h1></a> 
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>     
                
                <!--Menu escritorio-->
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li class="active"><a href="index.html">Inicio</a></li>
                  <li><a href="WebContent/registro.php">Registrarse</a></li>
                </ul>  
                 <!--Menu movile-->      
                <ul class="side-nav" id="mobile-demo">
                  <li>
                    <div class="user-view">
                      <div class="background teal">
                        
                      </div>
                      <a href="#"><span class="white-text name"><h1>tuAGRO</h1><br></span></a>
                    </div>
                  </li>
                  <li class="active"><a href="index.php">Inicio</a></li>
                  <li><div class="divider"></div></li>
                  <li><a href="WebContent/registro.php">Registrarse</a></li>
                </ul>              
            </div>
          </div>

        </div>
      </div>  
    </nav>    
    
  <!--</div>-->




<div class="contenedor-principal">
    <div class="banner" style="visibility: visible; width: 100%; height: 400px; position: relative; overflow: hidden;">

          <img class="z-depth-3 responsive-img img-banner" src="imagenes/banner1.jpg">

    </div>
  
    <div class="white banner">
      <div class="row">
        <div class="bienvenida black-text col s12">
          <h2>¿Quienes Somos?</h2>
          <h3></h3>
        </div>
      </div>
    </div>  

    <div class="row center">
      <div class="col s0 l2 m2">
      </div>
      <div class="col s12 l8 m8">
        <div class="login center-align">
          <div style="margin:15px 0;">
            <i class="large material-icons">account_circle</i>
            <p>Inicia sesión</p>
            <p>con tu cuenta</p>   
          </div>
          <form action="WebContent/servidor/login.php" method="POST">
            <div class="container">
              <div class="row">
                <div class="container">
                  <div class="input-field col s12">
                    <input id="username" name="username"  type="text" class="validate">
                    <label for="user">Usuario</label>
                  </div>                   
                </div>                
              </div>
              <div class="row">
                <div class="container">
                  <div class="input-field col s12">
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Password</label>
                  </div>                  
                </div>               
              </div>
              <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name = "iniciar" id="acceder">Entrar
                  <i class="material-icons right">send</i>
                </button>                
              </div>
            </div>
          </form>            
        </div>     
      </div>
    </div>

</div>

        <footer class="page-footer teal">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">tuAGRO</h5>
                <p class="grey-text text-lighten-4">Proyecto de Actualizacion tecnologica 10mo Semestre, Ingenieria de Sistemas, Corporacion Universitaria de Caribe CECAR</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Desarrolladores</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Jose Alberto Martinez Villegas</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Luis Fernando Navaz Sierra</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Jahir Jose Estrada</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright Text
            </div>
          </div>
        </footer>




  <script type="text/javascript"
    src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.button-collapse').sideNav();
    });
  </script>

  <script type="text/javascript">  
   $(document).ready(function(){
    $('.tooltipped').tooltip({delay:10});

     var mensaje = $("#mensaje").val();

     if (mensaje != ""){
        Materialize.toast(mensaje, 3000,'',function(){            
        });      
     }

   }); 

  </script> 

</body>
</html>