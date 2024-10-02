<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_actividad';
$db_nombre_pagina = 'gral_actividad_adm';


$criterio = new Criterio(GralActividad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralActividad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GralActividad::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GralActividad::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gral_actividads = GralActividad::getGralActividadsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GralActividads') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gral_actividad">
              <?php include 'ajax/modulos/gral_actividad/gral_actividad_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gral_actividad">
              <?php //include 'ajax/modulos/gral_actividad/gral_actividad_datos.php' ?>
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
    refreshAdmAll('gral_actividad', <?php echo $pagina_actual ?>);
</script>

