<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cntb_diario_asiento_pde_nota_credito';
$db_nombre_pagina = 'cntb_diario_asiento_pde_nota_credito_adm';


$criterio = new Criterio(CntbDiarioAsientoPdeNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoPdeNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(CntbDiarioAsientoPdeNotaCredito::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = CntbDiarioAsientoPdeNotaCredito::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$cntb_diario_asiento_pde_nota_creditos = CntbDiarioAsientoPdeNotaCredito::getCntbDiarioAsientoPdeNotaCreditosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('CntbDiarioAsientoPdeNotaCreditos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="cntb_diario_asiento_pde_nota_credito">
              <?php include 'ajax/modulos/cntb_diario_asiento_pde_nota_credito/cntb_diario_asiento_pde_nota_credito_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="cntb_diario_asiento_pde_nota_credito">
              <?php //include 'ajax/modulos/cntb_diario_asiento_pde_nota_credito/cntb_diario_asiento_pde_nota_credito_datos.php' ?>
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
    refreshAdmAll('cntb_diario_asiento_pde_nota_credito', <?php echo $pagina_actual ?>);
</script>

