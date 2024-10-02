<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_centro_pedido_email';
$db_nombre_pagina = 'pde_centro_pedido_email_adm';


$criterio = new Criterio(PdeCentroPedidoEmail::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCentroPedidoEmail::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdeCentroPedidoEmail::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdeCentroPedidoEmail::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pde_centro_pedido_emails = PdeCentroPedidoEmail::getPdeCentroPedidoEmailsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeCentroPedidoEmail') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pde_centro_pedido_email">
              <?php include 'ajax/modulos/pde_centro_pedido_email/pde_centro_pedido_email_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pde_centro_pedido_email">
              <?php //include 'ajax/modulos/pde_centro_pedido_email/pde_centro_pedido_email_datos.php' ?>
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
    refreshAdmAll('pde_centro_pedido_email', <?php echo $pagina_actual ?>);
</script>

