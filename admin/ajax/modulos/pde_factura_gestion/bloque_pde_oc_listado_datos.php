<?php
include_once "_autoload.php";

$pde_ocs_en_factura = array();
$pde_factura_pde_ocs = array();
if ($pde_factura) {
    $pde_factura_pde_ocs = $pde_factura->getPdeFacturaPdeOcs(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));

    $importe_subtotal_factura = $pde_factura->getPdeFacturaSubtotal();
}

foreach ($pde_ocs as $pde_oc) {
    if ($pde_oc->getCantidadDisponibleEnFactura() > 0) {
        $pde_ocs_para_facturar[] = $pde_oc;
    }
}
?>
<div class="par">
    <div class="label"><?php Lang::_lang('Filtrar por') ?></div>
    <div class="dato">
        <input id="txt_buscador_filtros_varios" name="txt_buscador_filtros_varios" type="text" class="textbox" size="120" value="<?php Gral::_echo($txt_buscador_filtros_varios) ?>" placeholder="<?php Lang::_lang('Ingrese algun dato para identificar las OCs') ?>" title="<?php Lang::_lang('Ingrese algun dato para identificar las OCs') ?>" />
        <img class="txt_buscador_filtros_varios_boton" src="imgs/lupa.png" width="20">
    </div>
</div>

<?php if (count($pde_ocs_para_facturar) > 0) { ?>

    <div class="bloque-oc-no-facturadas">
        <?php //include 'bloque_pde_oc_listado_datos_oc_no_facturadas.php' ?>
    </div>

<?php } ?>

<?php if (count($pde_factura_pde_ocs) > 0) { ?>
    <div class="bloque-oc-facturadas">
        <?php include 'bloque_pde_oc_listado_datos_oc_facturadas.php'; ?>
    </div>
<?php } ?>


<script>
    setInit();
    setInitPdeFacturaGestion();
</script>