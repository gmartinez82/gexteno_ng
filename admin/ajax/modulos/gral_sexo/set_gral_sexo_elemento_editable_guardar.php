<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se realizan los controles de datos
// -----------------------------------------------------------------------------
$arr['error'] = false;

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_SEXO_ALTA')){

    $identificador = Gral::getVars(Gral::VARS_POST, 'identificador', '', Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', '', Gral::TIPO_STRING);
    $campo = Gral::getVars(Gral::VARS_POST, 'campo', '', Gral::TIPO_STRING);
    $valor = Gral::getVars(Gral::VARS_POST, 'valor', '', Gral::TIPO_STRING);
    $type = Gral::getVars(Gral::VARS_POST, 'type', '', Gral::TIPO_STRING);
    $mascara = Gral::getVars(Gral::VARS_POST, 'mascara', '', Gral::TIPO_STRING);
    
    // -------------------------------------------------------------------------
    // se realiza saneamiento del valor antes de procesarlo
    // -------------------------------------------------------------------------
    $valor = GralSexo::getSaneamientoParaRegistroSimple($campo, $valor, $type, $mascara);
    
    // -------------------------------------------------------------------------
    // se define el indice
    // -------------------------------------------------------------------------
    $indice = $campo.'_'.$identificador;

    // se sanean espacios laterales en el valor
    $valor = trim($valor);
    
    $gral_sexo = GralSexo::getOxId($identificador);
    if($gral_sexo){
        if($gral_sexo->getHash() == $hash){
            
            // -----------------------------------------------------------------
            // Se ejecutan controles
            // -----------------------------------------------------------------
            eval("\$gral_sexo->set".Gral::getCamelCase($campo).'($valor);');
            
            $db_error = $gral_sexo->control();
            $db_error_errores = $db_error->getErrores();
            $db_error_errores_campo = $db_error_errores[$campo];
            if($db_error_errores_campo){
                $db_error_mensaje = $db_error_errores_campo->getMensaje();
                $arr[$indice] = Lang::_lang($db_error_mensaje, true);
                $arr['error'] = true;
            }
            
            if(!$arr['error']){
                // -------------------------------------------------------------
                // se registra el valor
                // -------------------------------------------------------------
                $gral_sexo->saveDesdeListado($campo, $valor);
            }
            
        }else{
            $arr[$indice] = Lang::_lang('No se reconoce el HASH para el ID indicado', true);
            $arr['error'] = true;
        }
    }else{
        $arr[$indice] = Lang::_lang('No se reconoce el ID', true);
        $arr['error'] = true;
    }
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

