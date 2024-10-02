<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pdi_pedido_agrupacion_gestion';
$db_nombre_pagina = 'pdi_pedido_agrupacion_gestion';

// se inicializan los centros de pedido que el usuario puede gestionar
$string_panoles_permitidos_para_in_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();

$criterio = new Criterio(PdiPedidoAgrupacion::SES_CRITERIOS);
$criterio->addDistinct(true);

$criterio->add('pdi_pedido_agrupacion.estado', 1, Criterio::IGUAL);

$criterio->addInicioSubconsulta();
$criterio->add('pdi_pedido_agrupacion.pan_panol_origen', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
$criterio->add('pdi_pedido_agrupacion.pan_panol_destino', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_OR);
$criterio->addFinSubconsulta();


$criterio->addTabla('pdi_pedido_agrupacion');
$criterio->setCriterios();

$pagina_actual = PdiPedidoAgrupacion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$pdi_pedido_agrupacions = PdiPedidoAgrupacion::getPdiPedidoAgrupacions($paginador, $criterio);
//Gral::prr($pdi_pedido_agrupacions);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdiPedidoAgrupacions') ?> </div>
        <div class='contenedor central'>

            <div class="div_listado_buscador" modulo="pdi_pedido_agrupacion_gestion">
                <?php include 'ajax/modulos/pdi_pedido_agrupacion_gestion/pdi_pedido_agrupacion_gestion_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="pdi_pedido_agrupacion_gestion">
                <?php //include 'ajax/modulos/pdi_pedido_agrupacion_gestion/pdi_pedido_agrupacion_gestion_datos.php' ?>
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
    refreshAdmAll('pdi_pedido_agrupacion_gestion', <?php echo $pagina_actual ?>);
</script>

