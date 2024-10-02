<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'alt_origen';
$db_nombre_pagina = 'alt_origen_adm';


$criterio = new Criterio(AltOrigen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltOrigen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(AltOrigen::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = AltOrigen::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$alt_origens = AltOrigen::getAltOrigensDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('AltOrigen') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="alt_origen">
              <?php include 'ajax/modulos/alt_origen/alt_origen_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="alt_origen">
              <?php //include 'ajax/modulos/alt_origen/alt_origen_datos.php' ?>
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
    refreshAdmAll('alt_origen', <?php echo $pagina_actual ?>);
</script>

