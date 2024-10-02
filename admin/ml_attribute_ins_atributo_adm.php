<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ml_attribute_ins_atributo';
$db_nombre_pagina = 'ml_attribute_ins_atributo_adm';


$criterio = new Criterio(MlAttributeInsAtributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
MlAttributeInsAtributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(MlAttributeInsAtributo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = MlAttributeInsAtributo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ml_attribute_ins_atributos = MlAttributeInsAtributo::getMlAttributeInsAtributosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('MlAttributeInsAtributos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ml_attribute_ins_atributo">
              <?php include 'ajax/modulos/ml_attribute_ins_atributo/ml_attribute_ins_atributo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ml_attribute_ins_atributo">
              <?php //include 'ajax/modulos/ml_attribute_ins_atributo/ml_attribute_ins_atributo_datos.php' ?>
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
    refreshAdmAll('ml_attribute_ins_atributo', <?php echo $pagina_actual ?>);
</script>

