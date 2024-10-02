<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prd_linea_produccion_prd_param_operacion_prd_equipo';
$db_nombre_pagina = 'prd_linea_produccion_prd_param_operacion_prd_equipo_adm';


$criterio = new Criterio(PrdLineaProduccionPrdParamOperacionPrdEquipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdLineaProduccionPrdParamOperacionPrdEquipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrdLineaProduccionPrdParamOperacionPrdEquipo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrdLineaProduccionPrdParamOperacionPrdEquipo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prd_linea_produccion_prd_param_operacion_prd_equipos = PrdLineaProduccionPrdParamOperacionPrdEquipo::getPrdLineaProduccionPrdParamOperacionPrdEquiposDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prd_linea_produccion_prd_param_operacion_prd_equipo">
              <?php include 'ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prd_linea_produccion_prd_param_operacion_prd_equipo">
              <?php //include 'ajax/modulos/prd_linea_produccion_prd_param_operacion_prd_equipo/prd_linea_produccion_prd_param_operacion_prd_equipo_datos.php' ?>
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
    refreshAdmAll('prd_linea_produccion_prd_param_operacion_prd_equipo', <?php echo $pagina_actual ?>);
</script>

