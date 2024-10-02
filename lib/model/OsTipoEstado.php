<?php 
require_once "base/BOsTipoEstado.php"; 
class OsTipoEstado extends BOsTipoEstado
{
    const TIPO_GENERADO                = "GENERADO";
    const TIPO_NOTIFICADO              = "NOTIFICADO";
    const TIPO_NOTIFICADO_SIN_DESCARGO = "NOTIFICADO_SIN_DESCARGO";
    const TIPO_DESCARGO_REALIZADO      = "DESCARGO_REALIZADO";
    const TIPO_RESUELTO                = "RESUELTO";
    const TIPO_RESUELTO_NOTIFICADO                = "RESUELTO_NOTIFICADO";
    const TIPO_ARCHIVADO               = "ARCHIVADO";
    
}
?>