<?php

use PhpOffice\PhpSpreadsheet\Style\Border;      //bordes

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_COLOR_ESTANDAR_FONDO_CABECERA', '666666');
define('DB_COLOR_ESTANDAR_LETRA_CABECERA', 'FFFFFF');
// ----------------------------------------------------------------------------

$borde_style = array(
    "borders" => array(
        "allBorders" => array(
            "borderStyle" => Border::BORDER_THIN,   //borde fino
            //"borderStyle" => Border::BORDER_THICK,  //borde grueso
            "color" => array("argb" => "000000"),
        ),
    ),
);