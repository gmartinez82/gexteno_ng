<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ws_fe_ope_solicitud_opcional';
$db_nombre_pagina = 'ws_fe_ope_solicitud_opcional_adm';


$criterio = new Criterio(WsFeOpeSolicitudOpcional::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeOpeSolicitudOpcional::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(WsFeOpeSolicitudOpcional::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = WsFeOpeSolicitudOpcional::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ws_fe_ope_solicitud_opcionals = WsFeOpeSolicitudOpcional::getWsFeOpeSolicitudOpcionalsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('WsFeOpeSolicitudOpcional') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ws_fe_ope_solicitud_opcional">
              <?php include 'ajax/modulos/ws_fe_ope_solicitud_opcional/ws_fe_ope_solicitud_opcional_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ws_fe_ope_solicitud_opcional">
              <?php //include 'ajax/modulos/ws_fe_ope_solicitud_opcional/ws_fe_ope_solicitud_opcional_datos.php' ?>
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
    refreshAdmAll('ws_fe_ope_solicitud_opcional', <?php echo $pagina_actual ?>);
</script>

