<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prd_equipo';
$db_nombre_pagina = 'prd_equipo_adm';


$criterio = new Criterio(PrdEquipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdEquipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrdEquipo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrdEquipo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prd_equipos = PrdEquipo::getPrdEquiposDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrdEquipos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prd_equipo">
              <?php include 'ajax/modulos/prd_equipo/prd_equipo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prd_equipo">
              <?php //include 'ajax/modulos/prd_equipo/prd_equipo_datos.php' ?>
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
    refreshAdmAll('prd_equipo', <?php echo $pagina_actual ?>);
</script>

