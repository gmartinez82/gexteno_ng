<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pdi_pedido';
$db_nombre_pagina = 'pdi_pedido_adm';


$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiPedido::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdiPedido::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdiPedido::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pdi_pedidos = PdiPedido::getPdiPedidosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdiPedidos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pdi_pedido">
              <?php include 'ajax/modulos/pdi_pedido/pdi_pedido_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pdi_pedido">
              <?php //include 'ajax/modulos/pdi_pedido/pdi_pedido_datos.php' ?>
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
    refreshAdmAll('pdi_pedido', <?php echo $pagina_actual ?>);
</script>

