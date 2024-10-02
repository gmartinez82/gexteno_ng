<?php 
require_once "base/BEkuEveTipoEvento.php"; 
class EkuEveTipoEvento extends BEkuEveTipoEvento
{
    const TIPO_CANCELACION = 'CANCELACION';
    const TIPO_INUTILIZACION = 'INUTILIZACION';
    const TIPO_RECEPCION = 'RECEPCION';
    const TIPO_CONFORMIDAD = 'CONFORMIDAD';
    const TIPO_DISCONFORMIDAD = 'DISCONFORMIDAD';
    const TIPO_DESCONOCIMIENTO = 'DESCONOCIMIENTO';
}
?>