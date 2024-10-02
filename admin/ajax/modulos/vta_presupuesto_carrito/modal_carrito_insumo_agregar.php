<?php
include "_autoload.php";
include Gral::getPathAbs().'admin/control/init.php';

$ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'ins_insumo_id', 0);
$ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_GET, 'ins_tipo_lista_precio_id', 0);

$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
$ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_precio_id);
$ins_categoria = $ins_insumo->getInsCategoria();

if (!$ins_tipo_lista_precio) {
    //$ins_tipo_lista_precio = InsTipoListaPrecio::getOxCodigo(InsInsumo::TIPO_LISTA_DEFAULT);
    $ins_tipo_lista_precio = InsTipoListaPrecio::getTipoListaPrecioPorDefaultParaUsuario($us_usuario_autenticado, $vta_vendedor_autenticado);
}
$ins_insumo_bultos = $ins_insumo->getInsInsumoBultosOrdenados($ins_tipo_lista_precio);

$cli_cliente = new CliCliente();

$vta_presupuesto_activo = false;
$vta_presupuesto_activo_id = Gral::getSes(VtaPresupuesto::PRESUPUESTO_ACTIVO);
$cantidad = 1;

if (!Ctrl::esVacio($vta_presupuesto_activo_id)) {
    $vta_presupuesto_activo = VtaPresupuesto::getOxId($vta_presupuesto_activo_id);
    if ($vta_presupuesto_activo) {
        $vta_presupuesto_ins_insumo = $vta_presupuesto_activo->getVtaPresupuestoInsInsumoXInsInsumoId($ins_insumo->getId());
        if ($vta_presupuesto_ins_insumo) {
            $cantidad = $vta_presupuesto_ins_insumo->getCantidad();
            $ins_insumo_bulto_id = $vta_presupuesto_ins_insumo->getInsInsumoBultoId();
            
            // -----------------------------------------------------------------
            // se determina si puede modificarse o no el item del presupuesto por haber generado OV
            // -----------------------------------------------------------------
            $vta_orden_venta = $vta_presupuesto_ins_insumo->getVtaOrdenVenta();
            if ($vta_orden_venta) {
                echo "Se ha generado la " . $vta_orden_venta->getCodigo() . " a partir del insumo elegido en el presupuesto activo, a raiz de esto ya no se puede modificar el item seleccionado";
                exit;
            }
            // -----------------------------------------------------------------
        }

        // ---------------------------------------------------------------------
        // se obtiene el tipo de lista de precio del presupuesto activo
        // ---------------------------------------------------------------------
        $cmb_ins_tipo_lista_precio_id = $vta_presupuesto_activo->getInsTipoListaPrecioId();
        $ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($cmb_ins_tipo_lista_precio_id);
        $dbsug_cli_cliente_id = $vta_presupuesto_activo->getCliClienteId();
        $cli_cliente = CliCliente::getOxId($dbsug_cli_cliente_id);

        $ins_insumo_bultos = $ins_insumo->getInsInsumoBultosOrdenados($ins_tipo_lista_precio);
        
        if(!$cli_cliente){
            $cli_cliente = new CliCliente();
        }
    }
}
$ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio, $solo_habilitado = true);

$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
$fraccionable = $ins_unidad_medida->getFraccionable();
$css_fraccionable = ($fraccionable == 1) ? 'fraccionable' : '';
$step = ($fraccionable == 1) ? '0.1' : '1';

if(!$gral_sucursal_autenticada){
    echo 'El vendedor no tiene asignada una sucursal.';
    exit;
}
?>

<div class="datos agregar-insumo-a-carrito" ins_insumo_id="<?php echo $ins_insumo->getId() ?>" vta_presupuesto_id="<?php echo ($vta_presupuesto_activo) ? $vta_presupuesto_activo->getId() : 0 ?>" cli_cliente_id="<?php echo ($vta_presupuesto_activo) ? $cli_cliente->getId() : 0 ?>" ins_tipo_lista_precio_id="<?php echo ($vta_presupuesto_activo) ? $ins_tipo_lista_precio->getId() : 0 ?>">
    <form id='form_agregar_insumo' name='form_agregar_insumo' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="fotos">
            <?php foreach ($ins_insumo->getInsInsumoImagens() as $ins_insumo_imagen) { ?>
                <div class="avatar foto">
                    <a href="<?php echo $ins_insumo_imagen->getPathImagen() ?>" rel="ins_insumo_carrito_<?php echo $ins_insumo->getId() ?>">
                        <img src="<?php echo $ins_insumo_imagen->getPathImagen(true) ?>" alt="img" width="60" />
                    </a>
                </div>
            <?php } ?>
        </div>

        <div class="col c1">
            <div class="par sucursal">
                <div class="label"><?php Lang::_lang('Sucursal') ?></div>
                <div class="dato"><?php Gral::_echo($gral_sucursal_autenticada->getDescripcion()) ?></div>
            </div>
            
            <div class="par insumo">
                <div class="label"><?php Lang::_lang('Producto') ?></div>
                <div class="dato"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></div>
            </div>
            
            <div class="par categoria">
                <div class="label"><?php Lang::_lang('Categoria') ?></div>
                <div class="dato"><?php Gral::_echo($ins_categoria->getFamiliaDescripcion()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
                <div class="dato"><?php Gral::_echo($ins_insumo->getCodigoInterno()); ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Marca') ?></div>
                <div class="dato"><?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()); ?></div>
            </div>

            <div class="par cliente">
                <div class="label"><?php Lang::_lang('Cliente') ?></div>
                <div class="dato">
                    <?php if ($vta_presupuesto_activo) { ?>
                            <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
                    <?php } else { ?>
                        <?php if ($cli_cliente->getId() != '') { ?>
                            <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
                        <?php } else { ?>
                            <?php echo Html::html_get_dbsuggest(1, 'dbsug_cli_cliente', 'ajax/modulos/cli_cliente/cli_cliente_dbsuggest_custom.php', false, true, true, 'Ingrese ...', $cli_cliente->getId(), $cli_cliente->getDescripcion()) ?>
                            <div id="dbsug_cli_cliente_id_error" class="label-error" ><?php Gral::_echo($dbsug_cli_cliente_id_error) ?></div>   
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>

            <div class="par lista-precio">
                <div class="label"><?php Lang::_lang('Lista de Precio') ?></div>
                <div class="dato">
                    <?php if ($vta_presupuesto_activo) { ?>
                        <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
                    <?php } else { ?>
                        <?php //Html::html_dib_select(1, 'cmb_ins_tipo_lista_precio_id', InsTipoListaPrecio::getInsTipoListaPreciosCmbF(), $ins_tipo_lista_precio->getId(), 'textbox') ?>
                        <?php Html::html_dib_select(1, 'cmb_ins_tipo_lista_precio_id', $vta_vendedor_autenticado->getInsTipoListaPreciosHabilitadasParaVendedorCmb(), $ins_tipo_lista_precio->getId(), 'textbox') ?>
                        <div class="error label-error" id="cmb_ins_tipo_lista_precio_id_error"></div>
                    <?php } ?>
                </div>
            </div>

            <div class="bloque-carrito-bultos">           
                <?php include "bloque_carrito_insumo_agregar_bultos.php" ?>            
            </div>
            
            <div class="par cantidad">
                <div class="label"><?php Lang::_lang('Cantidad') ?></div>
                <div class="dato">
                    <input type="text" id="txt_cantidad" name="txt_cantidad" value="<?php echo $cantidad; ?>" min="1" step="<?php echo $step ?>" size="4" class="textbox" />
                    <label class="comentario"><?php Lang::_lang($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?></label>
                    <div class="error label-error" id="txt_cantidad_error"></div>
                </div>
            </div>
                        
        </div>

        <div class="col c2">
            <div class="bloque-carrito-importes">           
                <?php include "bloque_carrito_insumo_agregar_importes.php" ?>            
            </div>
        </div>

        <div class="botonera">
            <button class="boton" id="btn_agregar_insumo" name='btn_agregar_insumo' type='button'><?php Lang::_lang('Agregar Insumo a Carrito') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
</script>
