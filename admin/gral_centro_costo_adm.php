<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_centro_costo';
$db_nombre_pagina = 'gral_centro_costo_adm';


$criterio = new Criterio(GralCentroCosto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralCentroCosto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GralCentroCosto::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GralCentroCosto::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gral_centro_costos = GralCentroCosto::getGralCentroCostosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GralCentroCostos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gral_centro_costo">
              <?php include 'ajax/modulos/gral_centro_costo/gral_centro_costo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gral_centro_costo">
              <?php //include 'ajax/modulos/gral_centro_costo/gral_centro_costo_datos.php' ?>
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
    refreshAdmAll('gral_centro_costo', <?php echo $pagina_actual ?>);
</script>

