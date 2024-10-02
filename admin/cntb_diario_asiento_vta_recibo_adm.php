<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cntb_diario_asiento_vta_recibo';
$db_nombre_pagina = 'cntb_diario_asiento_vta_recibo_adm';


$criterio = new Criterio(CntbDiarioAsientoVtaRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoVtaRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(CntbDiarioAsientoVtaRecibo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = CntbDiarioAsientoVtaRecibo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$cntb_diario_asiento_vta_recibos = CntbDiarioAsientoVtaRecibo::getCntbDiarioAsientoVtaRecibosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('CntbDiarioAsientoVtaRecibos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="cntb_diario_asiento_vta_recibo">
              <?php include 'ajax/modulos/cntb_diario_asiento_vta_recibo/cntb_diario_asiento_vta_recibo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="cntb_diario_asiento_vta_recibo">
              <?php //include 'ajax/modulos/cntb_diario_asiento_vta_recibo/cntb_diario_asiento_vta_recibo_datos.php' ?>
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
    refreshAdmAll('cntb_diario_asiento_vta_recibo', <?php echo $pagina_actual ?>);
</script>

