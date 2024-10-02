<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_factura_pde_tributo';
$db_nombre_pagina = 'pde_factura_pde_tributo_adm';


$criterio = new Criterio(PdeFacturaPdeTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaPdeTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdeFacturaPdeTributo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdeFacturaPdeTributo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pde_factura_pde_tributos = PdeFacturaPdeTributo::getPdeFacturaPdeTributosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeFacturaPdeTributo') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pde_factura_pde_tributo">
              <?php include 'ajax/modulos/pde_factura_pde_tributo/pde_factura_pde_tributo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pde_factura_pde_tributo">
              <?php //include 'ajax/modulos/pde_factura_pde_tributo/pde_factura_pde_tributo_datos.php' ?>
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
    refreshAdmAll('pde_factura_pde_tributo', <?php echo $pagina_actual ?>);
</script>

