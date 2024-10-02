<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prv_convenio_descuento';
$db_nombre_pagina = 'prv_convenio_descuento_adm';


$criterio = new Criterio(PrvConvenioDescuento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvConvenioDescuento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrvConvenioDescuento::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrvConvenioDescuento::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prv_convenio_descuentos = PrvConvenioDescuento::getPrvConvenioDescuentosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrvConvenioDescuentos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prv_convenio_descuento">
              <?php include 'ajax/modulos/prv_convenio_descuento/prv_convenio_descuento_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prv_convenio_descuento">
              <?php //include 'ajax/modulos/prv_convenio_descuento/prv_convenio_descuento_datos.php' ?>
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
    refreshAdmAll('prv_convenio_descuento', <?php echo $pagina_actual ?>);
</script>

