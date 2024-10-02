<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc_agrupacion_gestion';
$db_nombre_pagina = 'pde_oc_agrupacion_gestion';

// se inicializan los centros de pedido que el usuario puede gestionar
$string_centro_pedido_ids = PdeCentroPedido::getArrayPdeCentroPedidoIdsXCredencialParaComparadorIn();
//Gral::prr($string_centro_pedido_ids);

$criterio = new Criterio(PdeOcAgrupacion::SES_CRITERIOS);
$criterio->addDistinct(true);
/*
  if(!$user->getAbsoluto()){
  $criterio->add('pde_oc_agrupacion_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL);
  $criterio->add('pde_oc_agrupacion_destinatario.estado', 1, Criterio::IGUAL);
  }
 */
//$criterio->add('pde_oc_agrupacion.pde_centro_pedido_id', $string_centro_pedido_ids, Criterio::IN);
$criterio->addTabla('pde_oc_agrupacion');
//$criterio->addRealJoin('pde_oc_agrupacion_estado', 'pde_oc_agrupacion_estado.pde_oc_agrupacion_id', 'pde_oc_agrupacion.id');
//$criterio->addRealJoin('pde_oc_agrupacion_destinatario', 'pde_oc_agrupacion_destinatario.pde_oc_agrupacion_id', 'pde_oc_agrupacion.id', 'LEFT JOIN');
$criterio->setCriterios();

$pagina_actual = PdeOcAgrupacion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$pde_oc_agrupacions = PdeOcAgrupacion::getPdeOcAgrupacions($paginador, $criterio);
//Gral::prr($pde_oc_agrupacions);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>
<script type="text/javascript" src="../js/admin/modulos/pde_oc_agrupacion.js"></script>
<link href='../css/admin/pde.css' rel='stylesheet' type='text/css' />

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeOcAgrupacions') ?> </div>
        <div class='contenedor central'>

            <div class="div_listado_buscador" modulo="pde_oc_agrupacion_gestion">
                <?php include 'ajax/modulos/pde_oc_agrupacion_gestion/pde_oc_agrupacion_gestion_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="pde_oc_agrupacion_gestion">
                <?php //include 'ajax/modulos/pde_oc_agrupacion_gestion/pde_oc_agrupacion_gestion_datos.php' ?>
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
    refreshAdmAll('pde_oc_agrupacion_gestion', <?php echo $pagina_actual ?>);
</script>

