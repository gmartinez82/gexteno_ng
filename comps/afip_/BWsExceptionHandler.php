<?php

set_exception_handler('exception_handler');

/*
  Throwable::getMessage — Obtiene el mensaje
  Throwable::getCode — Obtener el código de la excepción
  Throwable::getFile — Obtiene el fichero en el que se creó la excepción
  Throwable::getLine — Obtiene la línea en la que el objeto fue instanciado
  Throwable::getTrace — Obtener la traza de la pila
  Throwable::getTraceAsString — Obtener la traza de la pila como un string
  Throwable::getPrevious — Devuelve el objeto Throwable previo
  Throwable::__toString — Obtiene un representación de string del objeto lanzado
 */

function exception_handler(Exception $ex) {
//function exception_handler(Throwable $ex) { // Desde php 7
    echo 'Error Exeption:<br> Archivo: ' . $ex->getFile() . ' <br>Linea: ' . $ex->getLine() . '  <br>Mensaje: ' . $ex->getMessage().'.';
}
