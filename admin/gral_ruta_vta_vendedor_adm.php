<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_ruta_vta_vendedor';
$db_nombre_pagina = 'gral_ruta_vta_vendedor_adm';


$criterio = new Criterio(GralRutaVtaVendedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralRutaVtaVendedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GralRutaVtaVendedor::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GralRutaVtaVendedor::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gral_ruta_vta_vendedors = GralRutaVtaVendedor::getGralRutaVtaVendedorsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GralRutaVtaVendedors') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gral_ruta_vta_vendedor">
              <?php include 'ajax/modulos/gral_ruta_vta_vendedor/gral_ruta_vta_vendedor_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gral_ruta_vta_vendedor">
              <?php //include 'ajax/modulos/gral_ruta_vta_vendedor/gral_ruta_vta_vendedor_datos.php' ?>
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
    refreshAdmAll('gral_ruta_vta_vendedor', <?php echo $pagina_actual ?>);
</script>

