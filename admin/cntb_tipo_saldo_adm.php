<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cntb_tipo_saldo';
$db_nombre_pagina = 'cntb_tipo_saldo_adm';


$criterio = new Criterio(CntbTipoSaldo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbTipoSaldo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(CntbTipoSaldo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = CntbTipoSaldo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$cntb_tipo_saldos = CntbTipoSaldo::getCntbTipoSaldosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('CntbTipoSaldos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="cntb_tipo_saldo">
              <?php include 'ajax/modulos/cntb_tipo_saldo/cntb_tipo_saldo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="cntb_tipo_saldo">
              <?php //include 'ajax/modulos/cntb_tipo_saldo/cntb_tipo_saldo_datos.php' ?>
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
    refreshAdmAll('cntb_tipo_saldo', <?php echo $pagina_actual ?>);
</script>

