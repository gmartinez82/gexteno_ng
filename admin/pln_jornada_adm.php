<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pln_jornada';
$db_nombre_pagina = 'pln_jornada_adm';


$criterio = new Criterio(PlnJornada::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PlnJornada::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PlnJornada::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PlnJornada::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pln_jornadas = PlnJornada::getPlnJornadasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PlnJornadas') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pln_jornada">
              <?php include 'ajax/modulos/pln_jornada/pln_jornada_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pln_jornada">
              <?php //include 'ajax/modulos/pln_jornada/pln_jornada_datos.php' ?>
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
    refreshAdmAll('pln_jornada', <?php echo $pagina_actual ?>);
</script>

