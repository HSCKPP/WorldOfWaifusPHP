<?php
function headerPage(){?>
{
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" href="favicon.ico">

    <title>WorldOfWaifus</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet"> 

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--    <script src="assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<?php }
function menu(){?>

  <div class="container" style="padding-top: 1em;">
     <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" 
                  data-toggle="collapse" data-target="#navbar" 
                  aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
             <img src="cursologo.gif" alt="Bootstrap" height="32">
          </a>
        </div>

        <!-- Agrupar los enlaces de navegación, los formularios y cualquier
            otro elemento que se pueda ocultar al minimizar la barra -->
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">PHP<b class="caret"></b>
               </a>
               
               <ul class="dropdown-menu">
                 <li><a href="index.php?case=php">PHP</a></li>
                 
                 <li><a href="index.php?case=clase">Class</a></li>
                 <li><a href="#">Acción #3</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Acción #4</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Acción #5</a></li>
               </ul>
            </li>
 
            <li><a href="index.php?case=bootstrap">Bootstrap</a></li>
            <li><a href="index.php?case=contact">Contact</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
             <div class="form-group">
                <input type="text" class="form-control" placeholder="Buscar">
             </div>
             <button type="submit" class="btn btn-default">Enviar</button>
          </form>
          

          <ul class="nav navbar-nav" navbar-right>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               ADA's<b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
               <li><a href="adas.php?ada=1">ADA #1</a></li>
               <li><a href="adas.php?ada=2">ADA #2</a></li>
               <li><a href="adas.php?ada=3">ADA #3</a></li>
               <li class="divider"></li>
               <li><a href="#">Acción #4</a></li>
              </ul>
            </li>
          </ul>

        </div>

     </nav>
  </div>
<?php } 
function pie(){ ?>
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php }
function propiedad(){

$ada =$_GET['ada'];?>


<center><p>Actividades de Aprendizaje</p></center>
<center><p>ADA <?=$ada?></p></center>
<center><p>Peniche Pacheco Cristhian Kevin</p></center>
<center><p>Facultad de Matemáticas</p></center>
<center><p>kevin.peniche@gmail.com</p></center>
<?php }

?>