<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gen_widget_sector';
$db_nombre_pagina = 'gen_widget_sector_adm';


$criterio = new Criterio(GenWidgetSector::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenWidgetSector::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GenWidgetSector::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GenWidgetSector::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gen_widget_sectors = GenWidgetSector::getGenWidgetSectorsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GenWidgetSector') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gen_widget_sector">
              <?php include 'ajax/modulos/gen_widget_sector/gen_widget_sector_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gen_widget_sector">
              <?php //include 'ajax/modulos/gen_widget_sector/gen_widget_sector_datos.php' ?>
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
    refreshAdmAll('gen_widget_sector', <?php echo $pagina_actual ?>);
</script>

