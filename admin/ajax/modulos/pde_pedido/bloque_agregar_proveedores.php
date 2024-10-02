<?php
if (!$ins_insumo || !$pde_centro_pedido) {
    echo "Debe seleccionar minimamente un centro de pedido y un insumo";
    return;
}
$pedido_id = Gral::getVars(2, 'pedido_id', 0);
$pde_pedido = PdePedido::getOxId($pedido_id);

$ins_categoria = $ins_insumo->getInsCategoria();
$prv_proveedors = $ins_insumo->getPrvProveedorsPropuestosParaPdePedido($pde_centro_pedido->getId());

if ($buscador != '') {
    $prv_proveedors = PrvProveedor::getPrvProveedorsXPalabra($buscador);
}
?>
<div class="error label-error" id="chk_proveedor_error"></div>
<div class="comentario">Proveedores vinculados a "<strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>"</div>

<div class="datos">
    <?php
    if ($ins_insumo && $pde_centro_pedido) {

        if (count($prv_proveedors) > 0) {
            foreach ($prv_proveedors as $prv_proveedor) {
                $pde_pedidos = $prv_proveedor->getPdePedidosDelProveedorXInsInsumo($ins_insumo->getId());
                $pde_cotizacions = $prv_proveedor->getPdeCotizacionsDelProveedorXInsInsumo($ins_insumo->getId());
                $pde_ocs = $prv_proveedor->getPdeOcsDelProveedorXInsInsumo($ins_insumo->getId());
                $pde_oc_reclamos = $prv_proveedor->getPdeOcReclamosDelProveedorXInsInsumo($ins_insumo->getId());


                if ($pde_pedido) {
                    $array = array(
                        array('campo' => 'pde_pedido_id', 'valor' => $pde_pedido->getId()),
                        array('campo' => 'prv_proveedor_id', 'valor' => $prv_proveedor->getId()),
                    );
                    $pde_pedido_prv_proveedor = PdePedidoPrvProveedor::getOxArray($array);
                } else {
                    $pde_pedido_ins_marca = false;
                }

                $checked = ($pde_pedido_prv_proveedor) ? 'checked="checked"' : '';
                $selected = ($pde_pedido_prv_proveedor) ? 'selected' : '';
                ?>
                <div class="uno <?php echo $selected ?>" proveedor_id="<?php Gral::_echo($prv_proveedor->getId()) ?>">
                    <div class="checkbox">
                        <input type="checkbox" id="chk_proveedor_id_<?php Gral::_echo($prv_proveedor->getId()) ?>" name="chk_proveedor_id[<?php Gral::_echo($prv_proveedor->getId()) ?>]" value="<?php Gral::_echo($prv_proveedor->getId()) ?>" <?php echo $checked ?> >
                    </div>
                    <div class="descripcion"><?php Gral::_echo($prv_proveedor->getDescripcion()) ?></div>

                    <div class="inform">
                        <div class="geo"><?php Gral::_echo($prv_proveedor->getGeoLocalidadProvinciaPaisDescripcion()) ?></div>

                        <?php foreach ($prv_proveedor->getPrvEmails() as $prv_email) { ?>
                            <div class="email"><?php Gral::_echo($prv_email->getDescripcion()) ?></div>
                        <?php } ?>

                        <div class="operacion pedidos <?php echo (count($pde_pedidos) > 0) ? 'existe' : '' ?>" title="<?php echo count($pde_pedidos) ?> Pedidos">
                            <?php echo count($pde_pedidos) ?>
                        </div>
                        <div class="operacion cotizaciones <?php echo (count($pde_cotizacions) > 0) ? 'existe' : '' ?>" title="<?php echo count($pde_cotizacions) ?> Cotizaciones">
                            <?php echo count($pde_cotizacions) ?>
                        </div>
                        <div class="operacion compras <?php echo (count($pde_ocs) > 0) ? 'existe' : '' ?>" title="<?php echo count($pde_ocs) ?> Compras">
                            <?php echo count($pde_ocs) ?>
                        </div>
                        <div class="operacion reclamos <?php echo (count($pde_oc_reclamos) > 0) ? 'existe' : '' ?>" title="<?php echo count($pde_oc_reclamos) ?> Reclamos">
                            <?php echo count($pde_oc_reclamos) ?>
                        </div>

                        <div class="acciones">
                            <?php if ($buscador != '') { ?>
                            <div class="accion vincular-categoria" style="display: none;">- Vincular a Categoria "<?php Gral::_echo($ins_categoria->getDescripcion()) ?>"</div>
                            <?php } ?>

                            <?php if ($buscador != '') { ?>
                                <div class="accion vincular-insumo">- Vincular "<?php Gral::_echo($prv_proveedor->getDescripcion()) ?>" al Insumo seleccionado</div>
                            <?php } ?>
                        </div>

                    </div>

                </div>
            <?php } ?>
        </div>

    <?php } else { ?>
        No se encuentran proveedores vinculados al Insumo Seleccionado.
    <?php } ?>

<?php } else { ?>
    Debe seleccionar minimamente un centro de pedido y un insumo
<?php } ?>