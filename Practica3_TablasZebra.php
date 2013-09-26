<html>
 <head>
 <link rel="stylesheet" href="EstiloCSS_P3.CSS"/>
 <?php

  $filas = 10;
  $columnas = 10;
  $texto = 1;
  
  ?>                                                   
 </head>                                                                 
 <body>      
 

<table border="1">
 <?php
 
 for($t=0;$t<$filas;$t++){
  echo "<tr>";
  
  $clase='';
  if($t%2==0){
  $clase = 'class = "par"';
  }
  
  for($y=0;$y<$columnas;$y++){
   
    //Pintamos el cuadro
    echo "<td ".$clase.">".$texto."</td>";
    
    
   
    $texto++;
    
   }
   //Cerramos columna
   echo "</tr>";
  }
 ?>
 <!-- Cerramos tabla -->
 </table>
 </body>                                                                 
 </html>