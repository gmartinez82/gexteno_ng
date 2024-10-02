<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'per_estado';
$db_nombre_pagina = 'per_estado_adm';


$criterio = new Criterio(PerEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PerEstado::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PerEstado::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$per_estados = PerEstado::getPerEstadosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PerEstados') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="per_estado">
              <?php include 'ajax/modulos/per_estado/per_estado_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="per_estado">
              <?php //include 'ajax/modulos/per_estado/per_estado_datos.php' ?>
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
    refreshAdmAll('per_estado', <?php echo $pagina_actual ?>);
</script>

