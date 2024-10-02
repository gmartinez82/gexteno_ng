<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'us_clave';
$db_nombre_pagina = 'us_clave_adm';


$criterio = new Criterio(UsClave::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsClave::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(UsClave::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = UsClave::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$us_claves = UsClave::getUsClavesDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('UsClave') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="us_clave">
              <?php include 'ajax/modulos/us_clave/us_clave_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="us_clave">
              <?php //include 'ajax/modulos/us_clave/us_clave_datos.php' ?>
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
    refreshAdmAll('us_clave', <?php echo $pagina_actual ?>);
</script>

