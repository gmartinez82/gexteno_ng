<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'us_navegacion';
$db_nombre_pagina = 'us_navegacion_adm';


$criterio = new Criterio(UsNavegacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsNavegacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(UsNavegacion::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = UsNavegacion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$us_navegacions = UsNavegacion::getUsNavegacionsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('UsNavegacions') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="us_navegacion">
              <?php include 'ajax/modulos/us_navegacion/us_navegacion_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="us_navegacion">
              <?php //include 'ajax/modulos/us_navegacion/us_navegacion_datos.php' ?>
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
    refreshAdmAll('us_navegacion', <?php echo $pagina_actual ?>);
</script>

