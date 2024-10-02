<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_tributo_ws_fe_param_tipo_tributo';
$db_nombre_pagina = 'vta_tributo_ws_fe_param_tipo_tributo_adm';


$criterio = new Criterio(VtaTributoWsFeParamTipoTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTributoWsFeParamTipoTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(VtaTributoWsFeParamTipoTributo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = VtaTributoWsFeParamTipoTributo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$vta_tributo_ws_fe_param_tipo_tributos = VtaTributoWsFeParamTipoTributo::getVtaTributoWsFeParamTipoTributosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="vta_tributo_ws_fe_param_tipo_tributo">
              <?php include 'ajax/modulos/vta_tributo_ws_fe_param_tipo_tributo/vta_tributo_ws_fe_param_tipo_tributo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="vta_tributo_ws_fe_param_tipo_tributo">
              <?php //include 'ajax/modulos/vta_tributo_ws_fe_param_tipo_tributo/vta_tributo_ws_fe_param_tipo_tributo_datos.php' ?>
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
    refreshAdmAll('vta_tributo_ws_fe_param_tipo_tributo', <?php echo $pagina_actual ?>);
</script>

