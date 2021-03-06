<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Easy Driver Score App</title>
  </head>
  <body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.ico">
      <div class="row">
        <div class="col s12 m3 l3 header">
          <img src="media/logodriverscore.png" class="logo"/>
        </div>
      </div>


    <div class="valign-wrapper contenedor" >
        <div class="valign" style="width:100%;">
            <div class="container">
               <div class="row">
                  <div class="col s12 m6 offset-m3">
                    <form method="post" action="checklogin.php">
                       <div class="card">
                          <div class="card-content">
                             <span class="card-title black-text">Ingreso</span>
                                <div class="row">
                                   <div class="input-field col s12">
                                      <input placeholder="Ingrese su usuario" name="myusername"  id="myusername" type="text" class="validate" required>
                                      <label for="firstname" class="active">Usuario</label>
                                   </div>
                                </div>
                                <div class="row">
                                   <div class="input-field col s12">
                                      <input placeholder="Ingrese su contraseña" name="mypassword"  id="mypassword" type="password" class="validate" required>
                                      <label for="lastname" class="active">Password</label>
                                   </div>
                                </div>
                          </div>
                          <div class="card-action">
                             <input type="submit" class="btn  blue lighten-2 waves-effect" value="Login">
                          </div>
                       </div>
                     </form>
                  </div>
               </div>
            </div>
        </div>
    </div>



  </body>
</html>
