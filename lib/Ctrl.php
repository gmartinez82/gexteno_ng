<?php

class Ctrl {

    const DIGITOS = "0123456789";
    const ALFABETICOS = " abcdefghijklmnńopqrstuvwxyzABCDEFGHIJKLMNŃOPQRSTUVWXYZáéíóúÁÉÍÓÚüÜ$";
    const LATLON = "0123456789-.";
    const USUARIO = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    const PASS = "abcdefghijklmnnopqrstuvwxyzABCDEFGHIJKLMNNOPQRSTUVWXYZ0123456789";

    static function esVacio($v) {
        if (trim($v) == "")
            return true;
        return false;
    }

    static function esNull($v) {
        if (is_null($v) or trim($v) == 'null')
            return true;
        return false;
    }

    static function esTexto($v) {
        if (!self::esVacio($v)) {
            $valido = true;
            for ($i = 0; $i < strlen($v); $i++) {
                $caracter = strpos(self::ALFABETICOS, $v[$i]);
                if ($caracter === false) {
                    $valido = false;
                }
            }
            return $valido;
        }
        return false;
    }

    static function esDigito($v) {
        if (!self::esVacio($v)) {
            $valido = true;
            for ($i = 0; $i < strlen($v); $i++) {
                $caracter = strpos(self::DIGITOS, $v[$i]);
                if ($caracter === false) {
                    $valido = false;
                }
            }
            return $valido;
        }
        return false;
    }

    static function esAlfanumerico($v) {
        if (!self::esVacio($v)) {
            $valido = true;
            for ($i = 0; $i < strlen($v); $i++) {
                $caracter = strpos(self::DIGITOS . self::ALFABETICOS, $v[$i]);
                if ($caracter === false) {
                    $valido = false;
                }
            }
            return $valido;
        }
        return false;
    }

    static function esLatlon($v) {
        if (!self::esVacio($v)) {
            $valido = true;
            for ($i = 0; $i < strlen($v); $i++) {
                $caracter = strpos(self::LATLON, $v[$i]);
                if ($caracter === false) {
                    $valido = false;
                }
            }
            return $valido;
        }
        return false;
    }

    static function esNumero($v) {
        if (is_numeric($v))
            return true;
        return false;
    }

    static function esUsuarioValido($v) {
        if (!self::esVacio($v)) {
            $valido = true;
            for ($i = 0; $i < strlen($v); $i++) {
                $caracter = strpos(self::USUARIO, $v[$i]);
                if ($caracter === false) {
                    $valido = false;
                }
            }
            return $valido;
        }
        return false;
    }

    static function esPassValido($v) {
        if (!self::esVacio($v)) {
            $valido = true;
            for ($i = 0; $i < strlen($v); $i++) {
                $caracter = strpos(self::PASS, $v[$i]);
                if ($caracter === false) {
                    $valido = false;
                }
            }
            return $valido;
        }
        return false;
    }

    static function esFechaValida($fecha, $permite_vacio = true) {
        if (strlen($fecha) != 10){
            return false;
        }
        if(!$permite_vacio){
            if ($fecha == '1900-01-01') {
                return false;
            }
        }
        
        $dia = $fecha[8] . $fecha[9];
        $mes = $fecha[5] . $fecha[6];
        $anio = $fecha[0] . $fecha[1] . $fecha[2] . $fecha[3];

        $estado = true;
        if (!self::esNumeroEntero($dia))
            $estado = false;
        if (!self::esNumeroEntero($mes))
            $estado = false;
        if (!self::esNumeroEntero($anio))
            $estado = false;

        if ($estado)
            if (checkdate($mes, $dia, $anio))
                return true;
        return false;
    }

    static function esFechaHoraValida($fecha) {
        //if(strlen($fecha)!=10) return false;

        $dia = $fecha[8] . $fecha[9];
        $mes = $fecha[5] . $fecha[6];
        $anio = $fecha[0] . $fecha[1] . $fecha[2] . $fecha[3];

        $hora = $fecha[11] . $fecha[12];
        $min = $fecha[14] . $fecha[15];

        $estado = true;
        if (!self::esNumeroEntero($dia))
            $estado = false;
        if (!self::esNumeroEntero($mes))
            $estado = false;
        if (!self::esNumeroEntero($anio))
            $estado = false;

        if (!self::esNumeroEntero($hora))
            $estado = false;
        if ((int) $hora < 0 || (int) $hora >= 24)
            $estado = false;
        if (!self::esNumeroEntero($min))
            $estado = false;
        if ((int) $min < 0 || (int) $min >= 60)
            $estado = false;

        if ($estado)
            if (checkdate($mes, $dia, $anio))
                return true;
        return false;
    }

    static function esHoraValida($string_hora) {

        $hora = $string_hora[0] . $string_hora[1];
        $min = $string_hora[3] . $string_hora[4];

        $estado = true;

        if (!self::esNumeroEntero($hora))
            $estado = false;
        if ((int) $hora < 0 || (int) $hora >= 24)
            $estado = false;
        if (!self::esNumeroEntero($min))
            $estado = false;
        if ((int) $min < 0 || (int) $min >= 60)
            $estado = false;

        if ($estado)
            return true;
        return false;
    }

    static function esNumeroEntero($valor) { // Fn Controla Caracteres Enteros
        if (!self::esVacio($valor)) {
            $valido = true;
            for ($i = 0; $i < strlen($valor); $i++) {
                //$enteros_habiles = $GLOBALS["fg_enteros_habiles"];
                $caracter = strpos(self::DIGITOS, $valor[$i]);
                if ($caracter === false) {
                    $valido = false;
                }
            }
            return $valido;
        } else
            return false;
    }

//    static function esEmail($email) { // ereg no lo admite php 7.0
//        if (ereg('^[a-zA-Z0-9]+([\.]?[a-zA-Z0-9_-]+)*@' . // usuario
//                        '[a-z0-9]+([\.-]+[a-z0-9]+)*\.[a-z]{2,}$', // server.
//                        $email))
//            return true;
//        return false;
//    }

    static function esEmail($email) {
        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
            return true;
        }
        return false;
    }

    // Controla que no repita valor en la base de datos.
    static function esRepetido($objeto, $campo) {
        $get = 'get';
        $get.=$campo;
        $campov = $objeto->$get();
        $getox = 'getOx';
        $getox.=$campo;
        $objetox = $objeto->$getox($campov);
        if (!Ctrl::esVacio($campov)) {
            if ($objetox) {
                if (!$objeto->getId()) {
                    return true;
                } else {
                    if ($objeto->getId() != $objetox->getId())
                        return true;
                    return false;
                }
            }else {
                return false;
            }
        } else {
            return false;
        }
    }

    static function esMaxCaracteres($long, $frase) {
        if (strlen($frase) >= $long + 1)
            return true;
        return false;
    }

    static function esPar($numero) {
        $resto = $numero % 2;
        if (($resto == 0) && ($numero != 0)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Autor: Hernan Garay
     * Creado: 07/02/2018 14:53
     * @param type $cuit
     * @return type
     */
    static function esCuitValido($cuit) {
        
        if ($cuit[2] != '-'){
            return false;
        }
        if ($cuit[11] != '-'){
            return false;
        }
        
        $esCuit = false;
        $cuit_rearmado = "";
        //separo cualquier caracter que no tenga que ver con numeros
        for ($i = 0; $i < strlen($cuit); $i++) {
            if ((Ord(substr($cuit, $i, 1)) >= 48) && (Ord(substr($cuit, $i, 1)) <= 57)) {
                $cuit_rearmado = $cuit_rearmado . substr($cuit, $i, 1);
            }
        }
        $cuit = $cuit_rearmado;
        if (strlen($cuit_rearmado) <> 11) {  // si to estan todos los digitos
            $esCuit = false;
        } else {
            $x = $i = $dv = 0;
            // Multiplico los dígitos.
            $vec[0] = (substr($cuit, 0, 1)) * 5;
            $vec[1] = (substr($cuit, 1, 1)) * 4;
            $vec[2] = (substr($cuit, 2, 1)) * 3;
            $vec[3] = (substr($cuit, 3, 1)) * 2;
            $vec[4] = (substr($cuit, 4, 1)) * 7;
            $vec[5] = (substr($cuit, 5, 1)) * 6;
            $vec[6] = (substr($cuit, 6, 1)) * 5;
            $vec[7] = (substr($cuit, 7, 1)) * 4;
            $vec[8] = (substr($cuit, 8, 1)) * 3;
            $vec[9] = (substr($cuit, 9, 1)) * 2;

            // Suma cada uno de los resultado.
            for ($i = 0; $i <= 9; $i++) {
                $x += $vec[$i];
            }
            $dv = (11 - ($x % 11)) % 11;
            if ($dv == (substr($cuit, 10, 1))) {
                $esCuit = true;
            }
        }
        return( $esCuit );
    }

    /**
     * 
     * @param type $ruc
     */
    static function esRUCValido($ruc) {
        
        $arr = explode("-", $ruc);
        
        if(count($arr) != 2){
            return false;
        }
        
        $ruc_numero = $arr[0];
        $ruc_dv = $arr[1];
        
        if(Gral::getDigitoVerificadorRUC($ruc_numero) != $ruc_dv){
            return false;
        }
        
        return true;
    }

}

?>