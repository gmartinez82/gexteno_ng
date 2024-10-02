<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_stock_resumen_gestion';
$db_nombre_pagina = 'ins_stock_resumen_gestion';


$criterio = new Criterio(InsStockResumen::SES_CRITERIOS);
$criterio->addSelect(InsInsumo::GEN_ATTR_DESCRIPCION);
$criterio->addTabla('ins_stock_resumen');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_stock_resumen.ins_insumo_id', 'LEFT JOIN');
$criterio->setCriteriosInicial();


$pagina_actual = InsStockResumen::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ins_stock_resumens = InsStockResumen::getInsStockResumensDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<script type='text/javascript' src='../js/admin/modulos/pde_pedidox.js?<?php echo date("Hm") ?>'></script>
<link href='../css/admin/pde.css?<?php echo date("Hm") ?>' rel='stylesheet' type='text/css' />

<script type='text/javascript' src='../js/admin/modulos/pdi_pedidox.js?<?php echo date("Hm") ?>'></script>
<link href='../css/admin/pdi.css?<?php echo date("Hm") ?>' rel='stylesheet' type='text/css' />

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('InsStockResumens') ?> </div>
        <div class='contenedor central'>

            <div class="div_listado_buscador" modulo="ins_stock_resumen_gestion">
                <?php include 'ajax/modulos/ins_stock_resumen_gestion/ins_stock_resumen_gestion_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="ins_stock_resumen_gestion">
                <?php //include 'ajax/modulos/ins_stock_resumen_gestion/ins_stock_resumen_gestion_datos.php' ?>
            </div>

            <br />

        </div>

    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>

</body>
</html>
<script type='text/javascript'>
<?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('ins_stock_resumen_gestion', <?php echo $pagina_actual ?>);
</script>

