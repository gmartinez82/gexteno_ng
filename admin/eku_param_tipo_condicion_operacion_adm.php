<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_param_tipo_condicion_operacion';
$db_nombre_pagina = 'eku_param_tipo_condicion_operacion_adm';


$criterio = new Criterio(EkuParamTipoCondicionOperacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoCondicionOperacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(EkuParamTipoCondicionOperacion::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = EkuParamTipoCondicionOperacion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$eku_param_tipo_condicion_operacions = EkuParamTipoCondicionOperacion::getEkuParamTipoCondicionOperacionsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuParamTipoCondicionOperacions') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="eku_param_tipo_condicion_operacion">
              <?php include 'ajax/modulos/eku_param_tipo_condicion_operacion/eku_param_tipo_condicion_operacion_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="eku_param_tipo_condicion_operacion">
              <?php //include 'ajax/modulos/eku_param_tipo_condicion_operacion/eku_param_tipo_condicion_operacion_datos.php' ?>
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
    refreshAdmAll('eku_param_tipo_condicion_operacion', <?php echo $pagina_actual ?>);
</script>

