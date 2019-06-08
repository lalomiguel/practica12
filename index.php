!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Cálcular la densidad de la Tierra</h2>
  <p>Descripción:</p>
  <p>Si la estacion espacial internacional se encuentra sometida a una aceleracion de la gravedad de 8.68 m/s al cuadrad <br>
   A una altura de 396 km sobre la superficie de la tierra <br>
  ¿A que velocidad se desplazara dicha estacion en orbita aalrededor de la Tierra?<br>
   Toma en cuenta que el radio de la tierra es igual a 6378<p>
</section>
<section class="formulas">

<h2>Fórmulas</h2>
  Velocidad =Math.pwd((gravedad)(Radio de la tierra)+altura))<br>
</section>
<section class="datos">
<h2>Datos:</h2>
gravedad=8.68 m/seg al cuadrado<br>
altura=396 km <br>
radioT=6378 km


</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)La densidad de la Tierra es:<br>
    Velocidad =Math.pwd((gravedad)(Radio de la tierra)+altura))<br>
</section>
<?php
     function calcula_densidad(){
        $altura=396;
        $gravedad= 8.68;
        $radioT= 6378;
        $v1= $radioT+$altura;
         $v2= $v1*$gravedad;
        $densidad=$Math.sqrt($v2);

        return $densidad;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: densidad = ".calcula_densidad(). " km*(metro/seg al cuadrado)</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
