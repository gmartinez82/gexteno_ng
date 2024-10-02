<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_param_geo_departamento';
$db_nombre_pagina = 'eku_param_geo_departamento_adm';


$criterio = new Criterio(EkuParamGeoDepartamento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamGeoDepartamento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(EkuParamGeoDepartamento::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = EkuParamGeoDepartamento::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$eku_param_geo_departamentos = EkuParamGeoDepartamento::getEkuParamGeoDepartamentosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuParamGeoDepartamentos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="eku_param_geo_departamento">
              <?php include 'ajax/modulos/eku_param_geo_departamento/eku_param_geo_departamento_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="eku_param_geo_departamento">
              <?php //include 'ajax/modulos/eku_param_geo_departamento/eku_param_geo_departamento_datos.php' ?>
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
    refreshAdmAll('eku_param_geo_departamento', <?php echo $pagina_actual ?>);
</script>

