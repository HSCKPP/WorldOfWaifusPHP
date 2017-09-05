<?php


function miheader()
{
   $var = '<h1>Temas Selectos de Programación</h1>
           <h1>Sistemas</h1>
             <p class="lead">
              Usar los lenguajes de programación de alto nivel para la creación de sistemas y servicios basados en tecnologías de red, <b>considerando los criterios de fiabilidad, seguridad y calidad</b>.
            </p>';

   return $var;
}

function about()
{
   $var = "About";
   return $var;
}

function contact()
{
   $var = "Contact:";
   return $var;
}

function php()
{
   $var = 'Cuando PHP analiza un fichero, busca las etiquetas de apertura y cierre, que son <?php y ?>, y que indican a PHP dónde empezar y finalizar la interpretación del código. Este mecanismo permite embeber a PHP en todo tipo de documentos, ya que todo lo que esté fuera de las etiquetas de apertura y cierre de PHP será ignorado por el analizador.';
   
   $var .= "<code><pre> echo ;
             
            </pre>
           </code>";
   return $var;
}

?>

