<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_recibo_item_gestion';
$db_nombre_pagina = 'vta_recibo_item_gestion';


$criterio = new Criterio(VtaReciboItem::SES_CRITERIOS);
$criterio->addTabla('vta_recibo_item');
$criterio->addRealJoin(GralFpFormaPago::GEN_TABLA, GralFpFormaPago::GEN_ATTR_ID, VtaReciboItem::GEN_ATTR_GRAL_FP_FORMA_PAGO_ID);
$criterio->add(GralFpFormaPago::GEN_ATTR_REQUIERE_CONCILIACION, 1, Criterio::IGUAL);
$criterio->setCriterios();


$pagina_actual = VtaReciboItem::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$vta_recibo_items = VtaReciboItem::getVtaReciboItemsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaReciboItem') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="vta_recibo_item_gestion">
              <?php include 'ajax/modulos/vta_recibo_item_gestion/vta_recibo_item_gestion_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="vta_recibo_item_gestion">
              <?php //include 'ajax/modulos/vta_recibo_item_gestion/vta_recibo_item_gestion_datos.php' ?>
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
    refreshAdmAll('vta_recibo_item_gestion', <?php echo $pagina_actual ?>);
</script>

