<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pln_jornada_tramo';
$db_nombre_pagina = 'pln_jornada_tramo_adm';


$criterio = new Criterio(PlnJornadaTramo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PlnJornadaTramo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PlnJornadaTramo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PlnJornadaTramo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pln_jornada_tramos = PlnJornadaTramo::getPlnJornadaTramosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PlnJornadaTramos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pln_jornada_tramo">
              <?php include 'ajax/modulos/pln_jornada_tramo/pln_jornada_tramo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pln_jornada_tramo">
              <?php //include 'ajax/modulos/pln_jornada_tramo/pln_jornada_tramo_datos.php' ?>
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
    refreshAdmAll('pln_jornada_tramo', <?php echo $pagina_actual ?>);
</script>

