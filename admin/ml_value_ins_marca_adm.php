<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ml_value_ins_marca';
$db_nombre_pagina = 'ml_value_ins_marca_adm';


$criterio = new Criterio(MlValueInsMarca::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlValueInsMarca::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(MlValueInsMarca::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = MlValueInsMarca::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ml_value_ins_marcas = MlValueInsMarca::getMlValueInsMarcasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('MlValueInsMarcas') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ml_value_ins_marca">
              <?php include 'ajax/modulos/ml_value_ins_marca/ml_value_ins_marca_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ml_value_ins_marca">
              <?php //include 'ajax/modulos/ml_value_ins_marca/ml_value_ins_marca_datos.php' ?>
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
    refreshAdmAll('ml_value_ins_marca', <?php echo $pagina_actual ?>);
</script>

