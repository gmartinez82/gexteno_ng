<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'fnd_chq_tipo_pago';
$db_nombre_pagina = 'fnd_chq_tipo_pago_adm';


$criterio = new Criterio(FndChqTipoPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqTipoPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(FndChqTipoPago::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = FndChqTipoPago::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$fnd_chq_tipo_pagos = FndChqTipoPago::getFndChqTipoPagosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('FndChqTipoPago') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="fnd_chq_tipo_pago">
              <?php include 'ajax/modulos/fnd_chq_tipo_pago/fnd_chq_tipo_pago_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="fnd_chq_tipo_pago">
              <?php //include 'ajax/modulos/fnd_chq_tipo_pago/fnd_chq_tipo_pago_datos.php' ?>
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
    refreshAdmAll('fnd_chq_tipo_pago', <?php echo $pagina_actual ?>);
</script>

