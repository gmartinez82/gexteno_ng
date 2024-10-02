<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'geo_pais';
$db_nombre_pagina = 'geo_pais_adm';


$criterio = new Criterio(GeoPais::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GeoPais::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GeoPais::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GeoPais::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$geo_paiss = GeoPais::getGeoPaissDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GeoPais') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="geo_pais">
              <?php include 'ajax/modulos/geo_pais/geo_pais_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="geo_pais">
              <?php //include 'ajax/modulos/geo_pais/geo_pais_datos.php' ?>
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
    refreshAdmAll('geo_pais', <?php echo $pagina_actual ?>);
</script>

