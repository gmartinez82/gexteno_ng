<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ws_fe_ope_solicitud_respuesta_observacion';
$db_nombre_pagina = 'ws_fe_ope_solicitud_respuesta_observacion_adm';


$criterio = new Criterio(WsFeOpeSolicitudRespuestaObservacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeOpeSolicitudRespuestaObservacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(WsFeOpeSolicitudRespuestaObservacion::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = WsFeOpeSolicitudRespuestaObservacion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ws_fe_ope_solicitud_respuesta_observacions = WsFeOpeSolicitudRespuestaObservacion::getWsFeOpeSolicitudRespuestaObservacionsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('WsFeOpeSolicitudRespuestaObservacion') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ws_fe_ope_solicitud_respuesta_observacion">
              <?php include 'ajax/modulos/ws_fe_ope_solicitud_respuesta_observacion/ws_fe_ope_solicitud_respuesta_observacion_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ws_fe_ope_solicitud_respuesta_observacion">
              <?php //include 'ajax/modulos/ws_fe_ope_solicitud_respuesta_observacion/ws_fe_ope_solicitud_respuesta_observacion_datos.php' ?>
          </div>

          <br />

        </div>

    </div>
    
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    
    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_modal_modal"></div>

</body>
</html>
<script type='text/javascript'>
    <?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('ws_fe_ope_solicitud_respuesta_observacion', <?php echo $pagina_actual ?>);
</script>

