<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_nota_credito_gestion';
$db_nombre_pagina = 'vta_nota_credito_gestion';


$criterio = new Criterio(VtaNotaCredito::SES_CRITERIOS);
$criterio->addTabla('vta_nota_credito');
//$criterio->setCriteriosInicial();
$criterio->addOrden(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, Criterio::_DESC);
$criterio->addOrden(VtaNotaCredito::GEN_ATTR_NUMERO_NOTA_CREDITO_COMPLETO, Criterio::_DESC);
$criterio->setCriterios();


$pagina_actual = VtaNotaCredito::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>


<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaNotaCredito') ?> </div>
        <div class='contenedor central'>

            <div class="div_listado_buscador" modulo="vta_nota_credito_gestion">
                <?php include 'ajax/modulos/vta_nota_credito_gestion/vta_nota_credito_gestion_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="vta_nota_credito_gestion">
                <?php //include 'ajax/modulos/vta_nota_credito_gestion/vta_nota_credito_gestion_datos.php' ?>
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
    refreshAdmAll('vta_nota_credito_gestion', <?php echo $pagina_actual ?>);
</script>

