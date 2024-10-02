<?php

class PrvInsumoExcel {

    static function getDescripcionSaneado($string) {
        
        settype($string, "string");
        $string = trim($string);        

        $string = preg_replace("/á|à|â|ã|ª/","a",$string);
        $string = preg_replace("/Á|À|Â|Ã/","A",$string);
        $string = preg_replace("/é|è|ê/","e",$string);
        $string = preg_replace("/É|È|Ê/","E",$string);
        $string = preg_replace("/í|ì|î/","i",$string);
        $string = preg_replace("/Í|Ì|Î/","I",$string);
        $string = preg_replace("/ó|ò|ô|õ|º/","o",$string);
        $string = preg_replace("/Ó|Ò|Ô|Õ/","O",$string);
        $string = preg_replace("/ú|ù|û/","u",$string);
        $string = preg_replace("/Ú|Ù|Û/","U",$string);
        //$string = str_replace("ñ","n", $string);
        //$string = str_replace("Ñ","N", $string);
        $string = str_replace("'", "", $string);
        $string = str_replace('%20', ' ', $string);  

        $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'Ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ü', 'Ü');
        $repl = array('a', 'e', 'i', 'o', 'u', 'n', 'N', 'A', 'E', 'I', 'O', 'U', 'u', 'U');
        //$string = str_replace($find, $repl, $string);

        $find = array(' ', '&', '\r\n', '\n', '+', '.');
        $string = str_replace($find, '-', $string);

        //$string = strtoupper($string);

        //$string = preg_replace('([^A-Za-z0-9])', '-', $string);        
        
        $find = array('/[^A-Za-zñÑ0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
        $repl = array('', ' ', '');
        $string = preg_replace($find, $repl, $string);

        return $string;
    }
    
    static function getCodigoSaneado($string) {
        
        settype($string, "string");
        $string = trim($string);

        $string = preg_replace("/á|à|â|ã|ª/","a",$string);
        $string = preg_replace("/Á|À|Â|Ã/","A",$string);
        $string = preg_replace("/é|è|ê/","e",$string);
        $string = preg_replace("/É|È|Ê/","E",$string);
        $string = preg_replace("/í|ì|î/","i",$string);
        $string = preg_replace("/Í|Ì|Î/","I",$string);
        $string = preg_replace("/ó|ò|ô|õ|º/","o",$string);
        $string = preg_replace("/Ó|Ò|Ô|Õ/","O",$string);
        $string = preg_replace("/ú|ù|û/","u",$string);
        $string = preg_replace("/Ú|Ù|Û/","U",$string);
        $string = str_replace("ñ","n", $string);
        $string = str_replace("Ñ","N", $string);
        $string = str_replace("'", "", $string);
        $string = str_replace('%20', ' ', $string);  

        $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'Ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ü', 'Ü');
        $repl = array('a', 'e', 'i', 'o', 'u', 'n', 'N', 'A', 'E', 'I', 'O', 'U', 'u', 'U');
        $string = str_replace($find, $repl, $string);

        $find = array(' ', '&', '\r\n', '\n', '+', '.');
        $string = str_replace($find, '-', $string);

        $string = strtoupper($string);

        $string = preg_replace('([^A-Za-z0-9])', '-', $string);        
        
        $find = array('/[^A-Z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
        $repl = array('', '-', '');
        $string = preg_replace($find, $repl, $string);

        return $string;
    }
    
    static function getInsCategoriaDesdeMigracion($string, $crear = false) {

        settype($string, "string");
        $string = trim($string);
        
        $string = str_replace(' > ', ' - ', $string);

        //Gral::pr($string);
        
        $ins_categoria = InsCategoria::getOxFamiliaDescripcion($string);
        if($ins_categoria){
            return $ins_categoria;
        }else{
            
        }
        
        return false;
    }

    static function _echoImp($importe, $gral_moneda = false, $return = false, $simbolo = false) {
        if ($importe != '') {
            $signo = ($simbolo) ? $simbolo : '$';
            if ($gral_moneda) {
                $signo = $gral_moneda->getSimbolo();
            }

            $punto_decimal = ',';
            $punto_miles = '.';

            $texto = $signo . ' ' . number_format($importe, 2, $punto_decimal, $punto_miles);
            if ($return) {
                return $texto;
            } else {
                echo $texto;
            }
        }
        echo '';
    }

    static function getCantidadSugerencia($descripcion, $codigo_marca, $codigo_pieza, $codigo_proveedor) {
        
        $ins_insumos = InsInsumo::getInsInsumosSugeridos($descripcion, $codigo_marca, $codigo_pieza, $codigo_proveedor);
        $ins_matrizs = InsMatriz::getInsInsumosSugeridos($descripcion, $codigo_pieza);
        return count($ins_insumos) + count($ins_matrizs);

    }

}

?>