<?php

class Lang {

    static function _lang($t, $return = false, $valor_inicial = true, $xml_lenguaje_tipo_codigo = false, $xml_lenguaje_entorno_codigo = false) {
        // ---------------------------------------------------------------------
        // se retorna, si se solicito return
        // ---------------------------------------------------------------------
        //if ($return) {
        //    return $t;
        //}

        // ---------------------------------------------------------------------
        // se imprime valor
        // ---------------------------------------------------------------------
        //echo $t;
        //return;
        
        $user = UsUsuario::autenticado();

        // ---------------------------------------------------------------------
        // se nutre la BD con codigos
        // ---------------------------------------------------------------------
        self::setCodigosEnBD($t, $user->getGralLenguaje(), $valor_inicial);

        // ---------------------------------------------------------------------
        // se busca la traduccion en xml		
        // ---------------------------------------------------------------------
        $file = Gral::getPathAbs() . 'lang/' . $user->getGralLenguaje()->getCodigo() . '.xml';

        $texto = $t;
        if (file_exists($file)) {
            $xml = simplexml_load_file($file);
            $labels = $xml->xpath('label');

            foreach ($labels as $label) {
                if (trim((string) $t) === trim((string) $label->lab)) {
                    $texto = ($label->value);
                    $traducido = true;
                    break;
                }
            }
        }

        switch ($user->getGralLenguaje()->getCodigo()) {
            case 'es':
                $texto = utf8_decode($texto);
                break;
            default:
                $texto = utf8_encode($texto);
        }

        // ---------------------------------------------------------------------
        // si son mensajes de ayuda se inicializan en vacio
        // ---------------------------------------------------------------------
        if ($xml_lenguaje_tipo_codigo && $xml_lenguaje_tipo_codigo == XmlLenguajeTipo::TIPO_AYUDA) {
            if (!$traducido) {
                return '';
            }
        }

        // ---------------------------------------------------------------------
        // si son mensajes de comentario se inicializan en vacio
        // ---------------------------------------------------------------------
        if ($xml_lenguaje_tipo_codigo && $xml_lenguaje_tipo_codigo == XmlLenguajeTipo::TIPO_COMENTARIO) {
            if (!$traducido) {
                return '';
            }
        }

        // ---------------------------------------------------------------------
        // se retorna, si se solicito return
        // ---------------------------------------------------------------------
        if ($return) {
            return $texto;
        }

        // ---------------------------------------------------------------------
        // se imprime valor
        // ---------------------------------------------------------------------
        echo $texto;
    }

    /* metodo para imprimir en frontend */

    static function _langFr($t, $return = false, $valor_inicial = true) {
        $lid = strtoupper(Gral::getConfig('conf_proyecto_min')) . Gral::getSes('_GRAL_LENGUAJE_ID');
        $gral_lenguaje = new GralLenguaje();

        // se nutre la BD con codigos
        self::setCodigosEnBD($t, $gral_lenguaje, $valor_inicial);

        if (trim($lid) != '')
            $gral_lenguaje->setId($lid);
        $file = Gral::getPathAbs() . 'lang/' . $gral_lenguaje->getCodigo() . '.xml';

        $texto = $t;
        if (file_exists($file)) {
            $xml = simplexml_load_file($file);
            $labels = $xml->xpath('label');

            foreach ($labels as $label) {
                if (trim((string) $t) === trim((string) $label->lab)) {
                    $texto = $label->value;
                    break;
                }
            }
        }

        switch ($gral_lenguaje->getCodigo()) {
            case 'es':
                $texto = utf8_decode($texto);
                break;
            default:
                $texto = utf8_encode($texto);
        }

        if ($return)
            return $texto;
        echo $texto;
    }

    static function setCodigosEnBD($t, $gral_lenguaje, $valor_inicial = true) {
        $codigo = $t;
        $traduccion = $t;
        if (!$valor_inicial)
            $traduccion = '';

        // se nutre la tabla de palabras a traducir
        $nutrir_xml = false;
        if ($nutrir_xml) {
            $xml_lenguaje_codigo = XmlLenguajeCodigo::getOxDescripcion($t);
            if (!$xml_lenguaje_codigo) {
                $xml_lenguaje_codigo_new = new XmlLenguajeCodigo();
                $xml_lenguaje_codigo_new->setDescripcion($codigo);
                $xml_lenguaje_codigo_new->setCodigo($codigo);
                $xml_lenguaje_codigo_new->setEstado(1);
                $xml_lenguaje_codigo_new->save();

                $xml_lenguaje_traduccion = new XmlLenguajeTraduccion();
                $xml_lenguaje_traduccion->setGralLenguajeId($gral_lenguaje->getId());
                $xml_lenguaje_traduccion->setXmlLenguajeCodigoId($xml_lenguaje_codigo_new->getId());
                $xml_lenguaje_traduccion->setTraduccion($traduccion);
                $xml_lenguaje_traduccion->setEstado(1);
                $xml_lenguaje_traduccion->save();
            }
        }
    }

}

?>
