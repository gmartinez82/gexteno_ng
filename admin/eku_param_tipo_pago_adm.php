<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_param_tipo_pago';
$db_nombre_pagina = 'eku_param_tipo_pago_adm';


$criterio = new Criterio(EkuParamTipoPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(EkuParamTipoPago::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = EkuParamTipoPago::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$eku_param_tipo_pagos = EkuParamTipoPago::getEkuParamTipoPagosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuParamTipoPagos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="eku_param_tipo_pago">
              <?php include 'ajax/modulos/eku_param_tipo_pago/eku_param_tipo_pago_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="eku_param_tipo_pago">
              <?php //include 'ajax/modulos/eku_param_tipo_pago/eku_param_tipo_pago_datos.php' ?>
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
    refreshAdmAll('eku_param_tipo_pago', <?php echo $pagina_actual ?>);
</script>

