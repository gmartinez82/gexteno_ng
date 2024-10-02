<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ml_attribute';
$db_nombre_pagina = 'ml_attribute_adm';


$criterio = new Criterio(MlAttribute::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlAttribute::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(MlAttribute::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = MlAttribute::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ml_attributes = MlAttribute::getMlAttributesDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('MlAttributes') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ml_attribute">
              <?php include 'ajax/modulos/ml_attribute/ml_attribute_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ml_attribute">
              <?php //include 'ajax/modulos/ml_attribute/ml_attribute_datos.php' ?>
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
    refreshAdmAll('ml_attribute', <?php echo $pagina_actual ?>);
</script>

