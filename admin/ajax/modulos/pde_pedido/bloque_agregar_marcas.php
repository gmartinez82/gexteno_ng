<?php
if (!$ins_insumo) {
    echo "Debe seleccionar un insumo";
    return;
}
$pedido_id = Gral::getVars(2, 'pedido_id', 0);
$pde_pedido = PdePedido::getOxId($pedido_id);

//$ins_categoria = $ins_insumo->getInsCategoria();
$ins_marcas = $ins_insumo->getInsMarcasPropuestasParaPdePedido();
$ins_categoria = $ins_insumo->getInsCategoria();

if ($buscador != '') {
    $ins_marcas = InsMarca::getInsMarcasXPalabra($buscador);
}
?>
<div class="error label-error" id="chk_marca_error"></div>
<div class="comentario">Marcas vinculadas a "<strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>"</div>

<div class="datos">
    <?php
    if ($ins_insumo) {

        if (count($ins_marcas) > 0) {
            foreach ($ins_marcas as $ins_marca) {

                // excepcion para marca "Otras" ID 293
                if ($ins_marca->getId() == 293)
                    continue;

                if ($pde_pedido) {
                    $array = array(
                        array('campo' => 'pde_pedido_id', 'valor' => $pde_pedido->getId()),
                        array('campo' => 'ins_marca_id', 'valor' => $ins_marca->getId()),
                    );
                    $pde_pedido_ins_marca = PdePedidoInsMarca::getOxArray($array);
                } else {
                    $pde_pedido_ins_marca = false;
                }

                $checked = ($pde_pedido_ins_marca) ? 'checked="checked"' : '';
                $selected = ($pde_pedido_ins_marca) ? 'selected' : '';
                ?>
                <div class="uno <?php echo $selected ?>" marca_id="<?php Gral::_echo($ins_marca->getId()) ?>">
                    <div class="checkbox">
                        <input type="checkbox" id="chk_marca_id_<?php Gral::_echo($ins_marca->getId()) ?>" name="chk_marca_id[<?php Gral::_echo($ins_marca->getId()) ?>]" value="<?php Gral::_echo($ins_marca->getId()) ?>" <?php echo $checked ?> >
                    </div>
                    <div class="descripcion"><?php Gral::_echo($ins_marca->getDescripcion()) ?></div>

                    <div class="acciones">
                        <?php if ($buscador != '') { ?>
                            <div class="accion vincular-categoria">- Vincular a Categoria "<?php Gral::_echo($ins_categoria->getDescripcion()) ?>"</div>
                        <?php } ?>

                        <?php if ($buscador != '') { ?>
                            <div class="accion vincular-insumo">- Vincular a Insumo seleccionado"</div>
                        <?php } ?>
                    </div>

                </div>
            <?php } ?>
        </div>

    <?php } else { ?>
        No se encuentran marcas vinculadas con la Categoria ("<?php Gral::_echo($ins_categoria->getCodigo()) ?>") del Insumo.
    <?php } ?>

<?php } else { ?>
    Debe seleccionar un insumo
<?php } ?>