<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_fp_forma_pago';
$db_nombre_pagina = 'gral_fp_forma_pago_adm';


$criterio = new Criterio(GralFpFormaPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GralFpFormaPago::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GralFpFormaPago::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gral_fp_forma_pagos = GralFpFormaPago::getGralFpFormaPagosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GralFpFormaPago') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gral_fp_forma_pago">
              <?php include 'ajax/modulos/gral_fp_forma_pago/gral_fp_forma_pago_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gral_fp_forma_pago">
              <?php //include 'ajax/modulos/gral_fp_forma_pago/gral_fp_forma_pago_datos.php' ?>
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
    refreshAdmAll('gral_fp_forma_pago', <?php echo $pagina_actual ?>);
</script>

