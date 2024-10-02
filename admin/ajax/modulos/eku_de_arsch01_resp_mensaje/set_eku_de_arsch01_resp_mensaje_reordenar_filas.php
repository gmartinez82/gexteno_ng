<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se instancia paginador
// -----------------------------------------------------------------------------
$paginador = new Paginador(EkuDeArsch01RespMensaje::getSesPagCantidad(), EkuDeArsch01RespMensaje::getSesPag());
$paginas = $paginador->getFin(true);
$pagina = $paginador->getPagina();
$registros = $paginador->getRegistros();
    
// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_MENSAJE_ADM_ACCION_REORDENAR')){
    $identificadores_ordenados = Gral::getVars(Gral::VARS_POST, 'identificadores_ordenados', '');
    
    $arr_identificadores_ordenados = explode(',', $identificadores_ordenados);
    
    foreach ($arr_identificadores_ordenados as $identificador){
        $orden++;
        $orden_paginado = ($registros * ($pagina - 1)) + $orden;
        
        $eku_de_arsch01_resp_mensaje = EkuDeArsch01RespMensaje::getOxId($identificador);
        if($eku_de_arsch01_resp_mensaje){
            $eku_de_arsch01_resp_mensaje->setOrden($orden_paginado);
            $eku_de_arsch01_resp_mensaje->saveDesdeProceso();
        }
    }
    
}

