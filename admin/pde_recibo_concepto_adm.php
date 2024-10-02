<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_recibo_concepto';
$db_nombre_pagina = 'pde_recibo_concepto_adm';


$criterio = new Criterio(PdeReciboConcepto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeReciboConcepto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdeReciboConcepto::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdeReciboConcepto::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pde_recibo_conceptos = PdeReciboConcepto::getPdeReciboConceptosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeReciboConcepto') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pde_recibo_concepto">
              <?php include 'ajax/modulos/pde_recibo_concepto/pde_recibo_concepto_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pde_recibo_concepto">
              <?php //include 'ajax/modulos/pde_recibo_concepto/pde_recibo_concepto_datos.php' ?>
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
    refreshAdmAll('pde_recibo_concepto', <?php echo $pagina_actual ?>);
</script>

