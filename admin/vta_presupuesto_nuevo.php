<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

//$vta_vendedor_id = 1;
$fecha = date('Y-m-d');

if ($vta_vendedor_autenticado) {
    // -----------------------------------------------------------------------------
    // se inicializa un nuevo presupuesto vacio para el vendedor
    // -----------------------------------------------------------------------------
    $vta_presupuesto = VtaPresupuesto::inicializarPresupuesto($vta_vendedor_autenticado->getId(), $fecha);

    // -----------------------------------------------------------------
    // Se guarda en session el ID del presupuesto creado
    // -----------------------------------------------------------------
    Gral::setSes(VtaPresupuesto::PRESUPUESTO_ACTIVO, $vta_presupuesto->getId());

    header('Location: ' . Gral::getPathHttp() . 'admin/vta_presupuesto_gestion_edicion.php?vta_presupuesto_id=' . $vta_presupuesto->getId());
    exit;
}
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaPresupuestoTipoEmision') ?> </div>
        <div class='contenedor central'>

            <div class="" style="margin: 25px;">
                Tu usuario no esta configurado como vendedor para iniciar presupuestos de venta.
            </div>

            <br />

        </div>

    </div>

    <div id='pie'><?php include 'parciales/pie.php' ?></div>

</body>