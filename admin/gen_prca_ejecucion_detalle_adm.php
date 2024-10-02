<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gen_prca_ejecucion_detalle';
$db_nombre_pagina = 'gen_prca_ejecucion_detalle_adm';


$criterio = new Criterio(GenPrcaEjecucionDetalle::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenPrcaEjecucionDetalle::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GenPrcaEjecucionDetalle::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GenPrcaEjecucionDetalle::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gen_prca_ejecucion_detalles = GenPrcaEjecucionDetalle::getGenPrcaEjecucionDetallesDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GenPrcaEjecucionDetalle') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gen_prca_ejecucion_detalle">
              <?php include 'ajax/modulos/gen_prca_ejecucion_detalle/gen_prca_ejecucion_detalle_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gen_prca_ejecucion_detalle">
              <?php //include 'ajax/modulos/gen_prca_ejecucion_detalle/gen_prca_ejecucion_detalle_datos.php' ?>
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
    refreshAdmAll('gen_prca_ejecucion_detalle', <?php echo $pagina_actual ?>);
</script>

