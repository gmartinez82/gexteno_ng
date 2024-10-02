<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_orden_pago_pde_nota_debito';
$db_nombre_pagina = 'pde_orden_pago_pde_nota_debito_adm';


$criterio = new Criterio(PdeOrdenPagoPdeNotaDebito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOrdenPagoPdeNotaDebito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdeOrdenPagoPdeNotaDebito::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdeOrdenPagoPdeNotaDebito::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pde_orden_pago_pde_nota_debitos = PdeOrdenPagoPdeNotaDebito::getPdeOrdenPagoPdeNotaDebitosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeOrdenPagoPdeNotaDebito') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pde_orden_pago_pde_nota_debito">
              <?php include 'ajax/modulos/pde_orden_pago_pde_nota_debito/pde_orden_pago_pde_nota_debito_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pde_orden_pago_pde_nota_debito">
              <?php //include 'ajax/modulos/pde_orden_pago_pde_nota_debito/pde_orden_pago_pde_nota_debito_datos.php' ?>
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
    refreshAdmAll('pde_orden_pago_pde_nota_debito', <?php echo $pagina_actual ?>);
</script>

