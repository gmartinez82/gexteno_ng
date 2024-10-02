<?php

include "_autoload.php";

$modulo = Gral::getVars(Gral::VARS_POST, 'modulo', '');
$atributo = Gral::getVars(Gral::VARS_POST, 'atributo', '');
$txa_texto_ayuda = Gral::getVars(Gral::VARS_POST, 'txa_texto_ayuda', '');
$txa_texto_comentario = Gral::getVars(Gral::VARS_POST, 'txa_texto_comentario', '');
$cmb_gral_lenguaje_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_lenguaje_id', 0);

//Gral::prr($_POST);

$codigo_ayuda = 'help_' . $modulo . '_' . $atributo;
$codigo_comentario = 'comentario_' . $modulo . '_' . $atributo;

$arr_codigos[] = array(
    'codigo' => $codigo_ayuda, 'valor' => $txa_texto_ayuda, 'tipo' => XmlLenguajeTipo::TIPO_AYUDA
);
$arr_codigos[] = array(
    'codigo' => $codigo_comentario, 'valor' => $txa_texto_comentario, 'tipo' => XmlLenguajeTipo::TIPO_COMENTARIO
);

$arr["error"] = false;

// -----------------------------------------------------------------------------
// controles
// -----------------------------------------------------------------------------
if (Ctrl::esVacio($txa_texto_ayuda)) {
    //$arr["txa_texto_ayuda"] = "Debe ingresar un texto";
    //$arr["error"] = true;
}
if ($cmb_gral_lenguaje_id == 0) {
    //$arr["cmb_gral_lenguaje_id"] = "Debe ingresar un lenguaje";
    //$arr["error"] = true;
}

if (!$arr["error"]) {

    foreach ($arr_codigos as $arr_codigo) {
        $codigo = $arr_codigo['codigo'];
        $valor = $arr_codigo['valor'];
        $tipo = $arr_codigo['tipo'];
        
        $xml_lenguaje_tipo = XmlLenguajeTipo::getOxCodigo($tipo);
        
        // -----------------------------------------------------------------------------
        // AYUDA
        // -----------------------------------------------------------------------------
        $xml_lenguaje_codigo = XmlLenguajeCodigo::getOxCodigo($codigo);
        if (!$xml_lenguaje_codigo) {
            $xml_lenguaje_codigo = new XmlLenguajeCodigo();
            $xml_lenguaje_codigo->setDescripcion($codigo);
            $xml_lenguaje_codigo->setCodigo($codigo);
            if($xml_lenguaje_tipo){
                $xml_lenguaje_codigo->setXmlLenguajeTipoId($xml_lenguaje_tipo->getId());
            }
            $xml_lenguaje_codigo->setEstado(1);
            $xml_lenguaje_codigo->save();
        }
        if ($xml_lenguaje_codigo) {
            $array = array(
                array('campo' => 'gral_lenguaje_id', 'valor' => $cmb_gral_lenguaje_id),
                array('campo' => 'xml_lenguaje_codigo_id', 'valor' => $xml_lenguaje_codigo->getId()),
            );
            
            if($xml_lenguaje_tipo){
                $xml_lenguaje_codigo->setXmlLenguajeTipoId($xml_lenguaje_tipo->getId());
            }
            $xml_lenguaje_codigo->save();
            

            $xml_lenguaje_traduccion = XmlLenguajeTraduccion::getOxArray($array);
            if (!$xml_lenguaje_traduccion) {
                // ---------------------------------------------------------------------
                // si no existe se inicializa traduccion
                // ---------------------------------------------------------------------
                $xml_lenguaje_traduccion = new XmlLenguajeTraduccion();
                $xml_lenguaje_traduccion->setXmlLenguajeCodigoId($xml_lenguaje_codigo->getId());
                $xml_lenguaje_traduccion->setGralLenguajeId($cmb_gral_lenguaje_id);
            }
            $xml_lenguaje_traduccion->setCodigo($codigo);
            $xml_lenguaje_traduccion->setTraduccion($valor);
            $xml_lenguaje_traduccion->setEstado(1);
            $xml_lenguaje_traduccion->save();

            $xml_lenguaje_traduccion->setArchivoXml();

            // -------------------------------------------------------------------------
            // se limpia la session para recargar la palabra traducida
            // -------------------------------------------------------------------------
            unset($_SESSION['GEN_LANG']['es'][$codigo]);

            $arr["xml_lenguaje_traduccion_id"] = $xml_lenguaje_traduccion->getId();
        }
    }
}

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
