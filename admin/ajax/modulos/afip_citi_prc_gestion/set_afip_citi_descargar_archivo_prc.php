<?php

include "_autoload.php";

$afip_citi_cabecera_prc_id = Gral::getVars(Gral::VARS_GET, "afip_citi_cabecera_prc_id", 0);


$afip_citi_cabecera = AfipCitiCabecera::getOxId($afip_citi_cabecera_prc_id);
if ($afip_citi_cabecera) {
    $afip_citi_prc = $afip_citi_cabecera->getAfipCitiPrc();

    $afip_citi_prc_id = $afip_citi_prc->getId();

    $array = array(array("campo" => "afip_citi_prc_id", "valor" => $afip_citi_prc_id),
        array("campo" => "afip_citi_cabecera_id", "valor" => $afip_citi_cabecera_prc_id)
    );

    $afip_citi_ventas_cbte = $afip_citi_cabecera->getAfipCitiVentasCbtes(null, null, null, array(array("campo"=>"id", "orden"=>"ASC")));
    $afip_citi_ventas_alicuotas = $afip_citi_cabecera->getAfipCitiVentasAlicuotass(null, null, null, array(array("campo"=>"id", "orden"=>"ASC")));
    $afip_citi_compras_cbte = $afip_citi_cabecera->getAfipCitiComprasCbtes(null, null, null, array(array("campo"=>"id", "orden"=>"ASC")));
    $afip_citi_compras_alicuotas = $afip_citi_cabecera->getAfipCitiComprasAlicuotass(null, null, null, array(array("campo"=>"id", "orden"=>"ASC")));
    $afip_citi_compras_importaciones = $afip_citi_cabecera->getAfipCitiComprasImportacioness(null, null, null, array(array("campo"=>"id", "orden"=>"ASC")));

    // --------------------------------------------------------------------------------
    // se genera archivo txt cabecera
    // --------------------------------------------------------------------------------
    $file_nombre_afip_citi_cabecera = "REGINFO_CV_CABECERA.txt";
    include "set_afip_citi_descargar_archivo_prc_cabecera.php";

    // --------------------------------------------------------------------------------
    // se genera archivo txt ventas cbte
    // --------------------------------------------------------------------------------
    $file_nombre_afip_citi_ventas_cbte = "REGINFO_CV_VENTAS_CBTE.txt";
    include "set_afip_citi_descargar_archivo_prc_ventas_cbte.php";


    // --------------------------------------------------------------------------------
    // se genera archivo txt ventas alicuotas
    // --------------------------------------------------------------------------------
    $file_nombre_afip_citi_ventas_alicuotas = "REGINFO_CV_VENTAS_ALICUOTAS.txt";
    include "set_afip_citi_descargar_archivo_prc_ventas_alicuotas.php";


    // --------------------------------------------------------------------------------
    // se genera archivo txt compras cbte
    // --------------------------------------------------------------------------------
    $file_nombre_afip_citi_compras_cbte = "REGINFO_CV_COMPRAS_CBTE.txt";
    include "set_afip_citi_descargar_archivo_prc_compras_cbte.php";


    // --------------------------------------------------------------------------------
    // se genera archivo txt compras alicuotas
    // --------------------------------------------------------------------------------
    $file_nombre_afip_citi_compras_alicuotas = "REGINFO_CV_COMPRAS_ALICUOTAS.txt";
    include "set_afip_citi_descargar_archivo_prc_compras_alicuotas.php";


    // --------------------------------------------------------------------------------
    // se genera archivo txt compras importaciones
    // --------------------------------------------------------------------------------
    $file_nombre_afip_citi_compras_importanciones = "REGINFO_CV_COMPRAS_IMPORTACIONES.txt";
    include "set_afip_citi_descargar_archivo_prc_compras_importaciones.php";


    $zipfile = new DbZipFile();
    $zipfile->add_file($texto_afip_citi_cabecera, $file_nombre_afip_citi_cabecera);
    $zipfile->add_file($texto_afip_citi_ventas_cbte, $file_nombre_afip_citi_ventas_cbte);
    $zipfile->add_file($texto_afip_citi_ventas_alicuotas, $file_nombre_afip_citi_ventas_alicuotas);
    $zipfile->add_file($texto_afip_citi_compras_cbte, $file_nombre_afip_citi_compras_cbte);
    $zipfile->add_file($texto_afip_citi_compras_alicuotas, $file_nombre_afip_citi_compras_alicuotas);
    $zipfile->add_file($texto_afip_citi_compras_importaciones, $file_nombre_afip_citi_compras_importanciones);

    header("Content-type: application/octet-stream");
    header("Content-disposition: attachment; filename=afip_citi.zip");
    echo $zipfile->file();
}
?>