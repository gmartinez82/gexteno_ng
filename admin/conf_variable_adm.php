<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'conf_variable';
$db_nombre_pagina = 'conf_variable_adm';


$criterio = new Criterio(ConfVariable::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
ConfVariable::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(ConfVariable::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = ConfVariable::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$conf_variables = ConfVariable::getConfVariablesDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('ConVariable') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="conf_variable">
              <?php include 'ajax/modulos/conf_variable/conf_variable_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="conf_variable">
              <?php //include 'ajax/modulos/conf_variable/conf_variable_datos.php' ?>
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
    refreshAdmAll('conf_variable', <?php echo $pagina_actual ?>);
</script>

