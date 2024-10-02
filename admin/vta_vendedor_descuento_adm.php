<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_vendedor_descuento';
$db_nombre_pagina = 'vta_vendedor_descuento_adm';


$criterio = new Criterio(VtaVendedorDescuento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaVendedorDescuento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(VtaVendedorDescuento::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = VtaVendedorDescuento::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$vta_vendedor_descuentos = VtaVendedorDescuento::getVtaVendedorDescuentosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaVendedorDescuento') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="vta_vendedor_descuento">
              <?php include 'ajax/modulos/vta_vendedor_descuento/vta_vendedor_descuento_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="vta_vendedor_descuento">
              <?php //include 'ajax/modulos/vta_vendedor_descuento/vta_vendedor_descuento_datos.php' ?>
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
    refreshAdmAll('vta_vendedor_descuento', <?php echo $pagina_actual ?>);
</script>

