<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ml_attribute_type';
$db_nombre_pagina = 'ml_attribute_type_adm';


$criterio = new Criterio(MlAttributeType::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlAttributeType::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(MlAttributeType::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = MlAttributeType::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ml_attribute_types = MlAttributeType::getMlAttributeTypesDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('MlAttributeTypes') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ml_attribute_type">
              <?php include 'ajax/modulos/ml_attribute_type/ml_attribute_type_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ml_attribute_type">
              <?php //include 'ajax/modulos/ml_attribute_type/ml_attribute_type_datos.php' ?>
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
    refreshAdmAll('ml_attribute_type', <?php echo $pagina_actual ?>);
</script>

