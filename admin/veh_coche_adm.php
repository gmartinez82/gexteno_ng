<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'veh_coche';
$db_nombre_pagina = 'veh_coche_adm';


$criterio = new Criterio(VehCoche::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VehCoche::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(VehCoche::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = VehCoche::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$veh_coches = VehCoche::getVehCochesDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VehCoches') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="veh_coche">
              <?php include 'ajax/modulos/veh_coche/veh_coche_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="veh_coche">
              <?php //include 'ajax/modulos/veh_coche/veh_coche_datos.php' ?>
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
    refreshAdmAll('veh_coche', <?php echo $pagina_actual ?>);
</script>

