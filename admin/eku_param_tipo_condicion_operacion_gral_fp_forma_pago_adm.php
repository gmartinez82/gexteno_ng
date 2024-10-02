<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_param_tipo_condicion_operacion_gral_fp_forma_pago';
$db_nombre_pagina = 'eku_param_tipo_condicion_operacion_gral_fp_forma_pago_adm';


$criterio = new Criterio(EkuParamTipoCondicionOperacionGralFpFormaPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoCondicionOperacionGralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(EkuParamTipoCondicionOperacionGralFpFormaPago::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = EkuParamTipoCondicionOperacionGralFpFormaPago::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$eku_param_tipo_condicion_operacion_gral_fp_forma_pagos = EkuParamTipoCondicionOperacionGralFpFormaPago::getEkuParamTipoCondicionOperacionGralFpFormaPagosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuParamTipoCondicionOperacionGralFpFormaPagos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="eku_param_tipo_condicion_operacion_gral_fp_forma_pago">
              <?php include 'ajax/modulos/eku_param_tipo_condicion_operacion_gral_fp_forma_pago/eku_param_tipo_condicion_operacion_gral_fp_forma_pago_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="eku_param_tipo_condicion_operacion_gral_fp_forma_pago">
              <?php //include 'ajax/modulos/eku_param_tipo_condicion_operacion_gral_fp_forma_pago/eku_param_tipo_condicion_operacion_gral_fp_forma_pago_datos.php' ?>
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
    refreshAdmAll('eku_param_tipo_condicion_operacion_gral_fp_forma_pago', <?php echo $pagina_actual ?>);
</script>

