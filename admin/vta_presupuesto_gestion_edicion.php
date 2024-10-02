<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_presupuesto_gestion';
$db_nombre_pagina = 'vta_presupuesto_gestion';

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0);
//$vta_presupuesto_id = Gral::getSes('vta_presupuesto_id');

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
//$vta_presupuesto = VtaPresupuesto::getPresupuestoActivo();
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>


<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaPresupuesto') ?> </div>
        <div class='contenedor central'>

            <div class="div_bloque_carrito" modulo="vta_presupuesto_gestion_edicion">
                <?php include 'ajax/modulos/vta_presupuesto_carrito/bloque_carrito.php' ?>
            </div>
            
            <div class="datos vta-presupuesto-gestion-edicion">
                <form id='form_vta_presupuesto_gestion_edicion' name='form_vta_presupuesto_gestion_edicion' method='post' action='' vta_presupuesto_id="<?php Gral::_echo($vta_presupuesto->getId()) ?>">

                    <div class="div_listado_presupuesto_edicion_datos" modulo="vta_presupuesto_gestion_edicion">
                        <?php include 'ajax/modulos/vta_presupuesto_gestion/vta_presupuesto_gestion_edicion_datos.php' ?>
                    </div>

                    <div class="div_listado_presupuesto_edicion_datos_pie" modulo="vta_presupuesto_gestion_edicion">
                        <?php include 'ajax/modulos/vta_presupuesto_gestion/vta_presupuesto_gestion_edicion_datos_pie.php' ?>
                    </div>
                </form>
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
</script>

