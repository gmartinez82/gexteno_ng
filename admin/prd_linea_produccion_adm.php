<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prd_linea_produccion';
$db_nombre_pagina = 'prd_linea_produccion_adm';


$criterio = new Criterio(PrdLineaProduccion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdLineaProduccion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrdLineaProduccion::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrdLineaProduccion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prd_linea_produccions = PrdLineaProduccion::getPrdLineaProduccionsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrdLineaProduccions') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prd_linea_produccion">
              <?php include 'ajax/modulos/prd_linea_produccion/prd_linea_produccion_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prd_linea_produccion">
              <?php //include 'ajax/modulos/prd_linea_produccion/prd_linea_produccion_datos.php' ?>
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
    refreshAdmAll('prd_linea_produccion', <?php echo $pagina_actual ?>);
</script>

