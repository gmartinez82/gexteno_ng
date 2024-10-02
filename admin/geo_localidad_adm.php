<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'geo_localidad';
$db_nombre_pagina = 'geo_localidad_adm';


$criterio = new Criterio(GeoLocalidad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GeoLocalidad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GeoLocalidad::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GeoLocalidad::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$geo_localidads = GeoLocalidad::getGeoLocalidadsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GeoLocalidad') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="geo_localidad">
              <?php include 'ajax/modulos/geo_localidad/geo_localidad_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="geo_localidad">
              <?php //include 'ajax/modulos/geo_localidad/geo_localidad_datos.php' ?>
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
    refreshAdmAll('geo_localidad', <?php echo $pagina_actual ?>);
</script>

