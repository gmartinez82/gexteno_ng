<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_moneda_gestion';
$db_nombre_pagina = 'gral_moneda_gestion';

$criterio = new Criterio(GralMoneda::SES_CRITERIOS);
$criterio->add(GralMoneda::GEN_ATTR_MONEDA_BASE, 1, Criterio::IGUAL);
$criterio->addTabla('gral_moneda');
$criterio->setCriteriosInicial();


$pagina_actual = GralMoneda::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$gral_monedas = GralMoneda::getGralMonedasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>


<body>
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GralMonedas') ?> </div>
        <div class='contenedor central'>

            <div class="div_listado_buscador" modulo="gral_moneda_gestion">
                <?php include 'ajax/modulos/gral_moneda_gestion/gral_moneda_gestion_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="gral_moneda_gestion">
                <?php //include 'ajax/modulos/gral_moneda/gral_moneda_datos.php' ?>
            </div>

            <br />

        </div>

    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>

</body>
</html>
<script type='text/javascript'>
<?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('gral_moneda_gestion', <?php echo $pagina_actual ?>);
</script>

