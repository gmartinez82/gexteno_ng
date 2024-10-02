<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_sucursal_valoracion_tipo_item';
$db_nombre_pagina = 'gral_sucursal_valoracion_tipo_item_adm';


$criterio = new Criterio(GralSucursalValoracionTipoItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalValoracionTipoItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GralSucursalValoracionTipoItem::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GralSucursalValoracionTipoItem::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gral_sucursal_valoracion_tipo_items = GralSucursalValoracionTipoItem::getGralSucursalValoracionTipoItemsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GralSucursalValoracionTipoItems') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gral_sucursal_valoracion_tipo_item">
              <?php include 'ajax/modulos/gral_sucursal_valoracion_tipo_item/gral_sucursal_valoracion_tipo_item_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gral_sucursal_valoracion_tipo_item">
              <?php //include 'ajax/modulos/gral_sucursal_valoracion_tipo_item/gral_sucursal_valoracion_tipo_item_datos.php' ?>
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
    refreshAdmAll('gral_sucursal_valoracion_tipo_item', <?php echo $pagina_actual ?>);
</script>

