<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'veh_modelo';
$db_nombre_pagina = 'veh_modelo_adm';


$criterio = new Criterio(VehModelo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VehModelo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(VehModelo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = VehModelo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$veh_modelos = VehModelo::getVehModelosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VehModelos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="veh_modelo">
              <?php include 'ajax/modulos/veh_modelo/veh_modelo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="veh_modelo">
              <?php //include 'ajax/modulos/veh_modelo/veh_modelo_datos.php' ?>
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
    refreshAdmAll('veh_modelo', <?php echo $pagina_actual ?>);
</script>

