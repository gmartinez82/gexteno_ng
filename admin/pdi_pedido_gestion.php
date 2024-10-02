<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pdi_pedido_gestion';
$db_nombre_pagina = 'pdi_pedido_gestion';

// se inicializan los panoles que el usuario puede gestionar
$string_panoles_permitidos_para_in_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();

$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
$criterio->addDistinct(false);
/*
  if(!$user->getAbsoluto()){
  $criterio->add('pdi_pedido_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL);
  $criterio->add('pdi_pedido_destinatario.estado', 1, Criterio::IGUAL);
  }
 */
//$criterio->add('pdi_estado.actual', 1, Criterio::IGUAL, false, '');
$criterio->add('pdi_tipo_estado.gestionable', 1, Criterio::IGUAL);
$criterio->add('pdi_tipo_origen.requiere_atencion', 1, Criterio::IGUAL);

//if (!$user->getAbsoluto()) {
    $criterio->addInicioSubconsulta();
    $criterio->add('pdi_pedido.pan_panol_origen', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
    $criterio->add('pdi_pedido.pan_panol_destino', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
//}

//$criterio->add('pdi_pedido_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL);
//$criterio->add('pdi_pedido_destinatario.estado', 1, Criterio::IGUAL);
$criterio->addTabla('pdi_pedido');
//$criterio->addRealJoin('pdi_estado', 'pdi_estado.pdi_pedido_id', 'pdi_pedido.id');
//$criterio->addRealJoin('pdi_pedido_destinatario', 'pdi_pedido_destinatario.pdi_pedido_id', 'pdi_pedido.id');
$criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id', 'LEFT JOIN');
$criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_pedido.pdi_tipo_estado_id', 'LEFT JOIN');
$criterio->setCriterios();

// inicializacion de variable seteada para ver tipso de origen de PDI, por default solo los que requieren atencion
if ($criterio->getValorDeCampo('pdi_tipo_origen.requiere_atencion')) {
    if ($criterio->getValorDeCampo('pdi_tipo_origen.requiere_atencion') != -1) {
        $cmb_filtro_requiere_atencion = $criterio->getValorDeCampo('pdi_tipo_origen.requiere_atencion');
    }
} else {
    $cmb_filtro_requiere_atencion = 1;
}

$pagina_actual = PdiPedido::getSesPag();
$paginador = new Paginador(15, PdiPedido::getSesPag());


//$pdi_pedidos = PdiPedido::getPdiPedidos($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<script type='text/javascript' src='../js/admin/modulos/pde_pedido.js?<?php echo date("Hm") ?>'></script>
<link href='../css/admin/pde.css?<?php echo date("Hm") ?>' rel='stylesheet' type='text/css' />

<script type='text/javascript' src='../js/admin/modulos/pdi_pedido_gestion.js?<?php echo date("Hm") ?>'></script>
<link href='../css/admin/pdi.css?<?php echo date("Hm") ?>' rel='stylesheet' type='text/css' />

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdiPedidos') ?> </div>
        <div class='contenedor central'>

            <div class="div_listado_buscador" modulo="pdi_pedido_gestion">
                <?php include 'ajax/modulos/pdi_pedido_gestion/pdi_pedido_gestion_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="pdi_pedido_gestion">
                <?php //include 'ajax/modulos/pdi_pedido_gestion/pdi_pedido_gestion_datos.php' ?>
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
    refreshAdmAll('pdi_pedido_gestion', <?php echo $pagina_actual ?>);
</script>

