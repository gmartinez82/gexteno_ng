<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prd_prioridad';
$db_nombre_pagina = 'prd_prioridad_adm';


$criterio = new Criterio(PrdPrioridad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdPrioridad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrdPrioridad::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrdPrioridad::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prd_prioridads = PrdPrioridad::getPrdPrioridadsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrdPrioridads') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prd_prioridad">
              <?php include 'ajax/modulos/prd_prioridad/prd_prioridad_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prd_prioridad">
              <?php //include 'ajax/modulos/prd_prioridad/prd_prioridad_datos.php' ?>
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
    refreshAdmAll('prd_prioridad', <?php echo $pagina_actual ?>);
</script>

