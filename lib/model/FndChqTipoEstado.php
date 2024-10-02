<?php 
require_once "base/BFndChqTipoEstado.php"; 
class FndChqTipoEstado extends BFndChqTipoEstado
{
    const TIPO_GENERADO                 = 'GENERADO';
    const TIPO_EN_PROCESO_INTERNO       = 'EN_PROCESO_INTERNO';
    const TIPO_ENTREGADO                = 'ENTREGADO';
    const TIPO_PROXIMO_A_PAGAR          = 'PROXIMO_A_PAGAR';
    const TIPO_A_PAGAR                  = 'A_PAGAR';
    const TIPO_PAGADO                   = 'PAGADO';
    const TIPO_RECHAZADO                = 'RECHAZADO';
    const TIPO_ANULADO                  = 'ANULADO';
    const TIPO_SALVADO                  = 'SALVADO';
    const TIPO_DEVUELTO_SIN_ENDOSAR     = 'DEVUELTO_SIN_ENDOSAR';
    const TIPO_DEVUELTO_ENDOSADO        = 'DEVUELTO_ENDOSADO';
    const TIPO_A_DEPOSITAR              = 'A_DEPOSITAR';
    const TIPO_DISPONIBLE_PARA_DEPOSITO = 'DISPONIBLE_DEPOSITO';
    const TIPO_DEPOSITADO               = 'DEPOSITADO';
    const TIPO_ENDOSADO                 = 'ENDOSADO';
    const TIPO_ACREDITADO               = 'ACREDITADO';
    const TIPO_VENCIDO                  = 'VENCIDO';

    const TIPO_DEVUELTO_A_CLIENTE     = 'DEVUELTO_A_CLIENTE';
    const TIPO_DEVUELTO_POR_PROVEEDOR     = 'DEVUELTO_POR_PROVEEDOR';}
?>
