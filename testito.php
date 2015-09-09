<?php

error_reporting(0);
$base_dir = "/home/at003/Descargas"; // pon la ruta relativa

if ( file_exists($base_dir) && is_dir($base_dir) ) {
   $opened_dir = opendir( $base_dir );
   if ( $opened_dir ) {
       while ( $file = readdir( $opened_dir ) ) {
           if ( $file !== '.' && $file !== '..' ) {
               // se verifica que sea directorio
               if ( is_dir ( $base_dir . '/' . $file ) ) {
                   echo '<strong>is_dir: ' . $file . '</strong><br />';
               // en caso de no ser directorio se pinta sin negritas
               } else {
                   echo 'no_is_dir: ' . $file . '<br />';
               }
           }
       }
       closedir( $opened_dir );
   }
}

/*
       var_dump(is_dir("C:\Users\crodriguez\Documents"));
       var_dump(is_dir("C:\Users\crodriguez\Documents\beatriz"));        
       var_dump(is_dir('..')); //un directorio arriba
*/
?>
