<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ws_fe_param_tipo_comprobante';
$db_nombre_pagina = 'ws_fe_param_tipo_comprobante_adm';


$criterio = new Criterio(WsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(WsFeParamTipoComprobante::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = WsFeParamTipoComprobante::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ws_fe_param_tipo_comprobantes = WsFeParamTipoComprobante::getWsFeParamTipoComprobantesDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('WsFeParamTipoComprobante') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ws_fe_param_tipo_comprobante">
              <?php include 'ajax/modulos/ws_fe_param_tipo_comprobante/ws_fe_param_tipo_comprobante_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ws_fe_param_tipo_comprobante">
              <?php //include 'ajax/modulos/ws_fe_param_tipo_comprobante/ws_fe_param_tipo_comprobante_datos.php' ?>
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
    refreshAdmAll('ws_fe_param_tipo_comprobante', <?php echo $pagina_actual ?>);
</script>

