<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_pedido_prv_proveedor_avisado';
$db_nombre_pagina = 'pde_pedido_prv_proveedor_avisado_adm';


$criterio = new Criterio(PdePedidoPrvProveedorAvisado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdePedidoPrvProveedorAvisado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdePedidoPrvProveedorAvisado::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdePedidoPrvProveedorAvisado::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pde_pedido_prv_proveedor_avisados = PdePedidoPrvProveedorAvisado::getPdePedidoPrvProveedorAvisadosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdePedidoPrvProveedorAvisados') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pde_pedido_prv_proveedor_avisado">
              <?php include 'ajax/modulos/pde_pedido_prv_proveedor_avisado/pde_pedido_prv_proveedor_avisado_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pde_pedido_prv_proveedor_avisado">
              <?php //include 'ajax/modulos/pde_pedido_prv_proveedor_avisado/pde_pedido_prv_proveedor_avisado_datos.php' ?>
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
    refreshAdmAll('pde_pedido_prv_proveedor_avisado', <?php echo $pagina_actual ?>);
</script>

