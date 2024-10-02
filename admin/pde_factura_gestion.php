<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_factura_gestion';
$db_nombre_pagina = 'pde_factura_gestion';


$criterio = new Criterio(PdeFactura::SES_CRITERIOS);
$criterio->addTabla('pde_factura');
//$criterio->setCriteriosInicial();
$criterio->setCriterios();


$pagina_actual = PdeFactura::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$pde_facturas = PdeFactura::getPdeFacturasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>


<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeFactura') ?> </div>
        <div class='contenedor central'>

            <div class="div_listado_buscador" modulo="pde_factura_gestion">
                <?php include 'ajax/modulos/pde_factura_gestion/pde_factura_gestion_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="pde_factura_gestion">
                <?php //include 'ajax/modulos/pde_factura_gestion/pde_factura_gestion_datos.php' ?>
            </div>

            <br />

        </div>

    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_ficha"></div>

</body>
</html>
<script type='text/javascript'>
<?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('pde_factura_gestion', <?php echo $pagina_actual ?>);
</script>

