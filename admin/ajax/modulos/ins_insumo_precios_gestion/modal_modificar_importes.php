<?php
include "_autoload.php";

// -----------------------------------------------------------------------------
// se recuperan datos elegidos via checkbox
// -----------------------------------------------------------------------------
$chk_insumo_ids = Gral::getVars(1, 'chk_insumo_id');
//Gral::prr($chk_insumo_ids);

// -----------------------------------------------------------------------------
// se inicializa criterio para reconocer la busqueda realizada
// -----------------------------------------------------------------------------
$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTabla(InsInsumo::GEN_TABLA);
$criterio->setCriteriosInicial();

$paginador = null;
$ins_insumos = InsInsumo::getInsInsumos($paginador, $criterio);


if ($chk_insumo_ids == '') {
    echo "Debe seleccionar al menos 1 insumo";
    exit;
}

$ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios(null, null, true);
?>
<div class="datos modificar-importe">

    <div class="col insumos">
        
        <!-- Selector de Cantidad a Afectar -->
        <div class="comentarios-cantidad">
            <div class="comentario-cantidad">
                <input type="radio" id="rad_aplicar_todos_0" name="rad_aplicar_todos" value="0" checked="checked">
                Aplicar a los <?php Gral::_echoFloatDyn(count($chk_insumo_ids)) ?> productos seleccionados.
            </div>
            <div class="comentario-cantidad">
                <input type="radio" id="rad_aplicar_todos_1" name="rad_aplicar_todos" value="1">
                Aplicar a los <?php Gral::_echoFloatDyn(count($ins_insumos)) ?> productos filtrados.
            </div>
        </div>

        <?php
        foreach ($chk_insumo_ids as $chk_insumo_id) {
            $ins_insumo = InsInsumo::getOxId($chk_insumo_id);
            $ins_insumo_imagen_principal = $ins_insumo->getInsInsumoImagenPrincipal();
            ?>
            <div class="uno insumo">

                <?php if ($ins_insumo_imagen_principal) { ?>
                    <div class="avatar">
                        <a href="<?php echo $ins_insumo_imagen_principal->getPathImagen() ?>" rel="ins_insumo_<?php echo $ins_insumo->getId() ?>" title="<?php Gral::_echo($ins_insumo_imagen_principal->getObservacion()) ?>">
                            <img class="foto" src="<?php echo $ins_insumo_imagen_principal->getPathImagen(true) ?>" alt="imagen-prd" />
                        </a>
                    </div>
                <?php } ?>

                <div class="descripcion">
                    <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                </div>
                <div class="codigo-interno">
                    CI: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
                </div>
                <div class="categoria">
                    <?php Gral::_echo($ins_insumo->getInsCategoria()->getArbolFamiliaDescripcion()) ?>
                </div>

            </div>
        <?php } ?>
    </div>

    <div class="col tipos-precios">

        <div class="tabs ficha-costo-precio">
            <ul>
                <li><a href="#tab_precio_venta"><?php Lang::_lang('Precios de Venta') ?></a></li>
                <li><a href="#tab_costo_compra"><?php Lang::_lang('Costo del Producto') ?></a></li>
                <li><a href="#tab_descuentos"><?php Lang::_lang('Descuentos') ?></a></li>
            </ul>

            <!-- Tab Precios Venta -->
            <div id="tab_precio_venta" class="datos">

                <?php foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) { ?>
                    <div class="uno tipo-precio" id="div_tipo_lista_precio_id_<?php echo $ins_tipo_lista_precio->getId() ?>" tipo_lista_precio_id="<?php echo $ins_tipo_lista_precio->getId() ?>">

                        <div class="descripcion">
                            <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
                        </div>

                        <div class="tipos-precios-info">

                            <div class="par porcentaje">
                                <div class="label"><?php Lang::_lang('Incremento') ?> (%)</div>
                                <div class="dato">
                                    <input type="text" class="textbox spinner" id="txt_porcentaje_<?php echo $ins_tipo_lista_precio->getId() ?>" name="txt_porcentaje_<?php echo $ins_tipo_lista_precio->getId() ?>" size="5" />
                                </div>
                            </div>

                            <div class="par porcentaje">
                                <div class="label"><?php Lang::_lang('Importe') ?> ($)</div>
                                <div class="dato">
                                    <input type="text" class="textbox spinner" id="txt_importe_<?php echo $ins_tipo_lista_precio->getId() ?>" name="txt_importe_<?php echo $ins_tipo_lista_precio->getId() ?>" size="5" />
                                </div>
                            </div>

                            <div class="botonera">
                                <input class="boton modificar-precio" type="button" id="btn_guardar_<?php echo $ins_tipo_lista_precio->getId() ?>" name="btn_guardar_<?php echo $ins_tipo_lista_precio->getId() ?>" value="Modificar Precio">
                            </div>

                            <div class="confirmacion">
                                <?php Lang::_lang('Importe Actualizado Correctamente') ?>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Tab Costo Insumo -->
            <div id="tab_costo_compra" class="datos">
                <div class="uno tipo-precio" id="div_tipo_lista_precio_id_<?php echo $ins_tipo_lista_precio->getId() ?>" tipo_lista_precio_id="<?php echo $ins_tipo_lista_precio->getId() ?>">

                    <div class="descripcion">
                        Costo de Insumo
                    </div>

                    <div class="advertencia-costo">
                        Modificara el COSTO de los productos indicados.
                    </div>

                    <div class="tipos-precios-info">

                        <div class="par porcentaje" title="<?php Lang::_lang('Porcentaje de Incremento') ?>">
                            <div class="label"><?php Lang::_lang('Porc Incr') ?> (%)</div>
                            <div class="dato">
                                <input type="text" class="textbox spinner" id="txt_porcentaje_costo" name="txt_porcentaje_costo" size="5" />
                            </div>
                        </div>

                        <div class="par importe" title="<?php Lang::_lang('Importe de Costo Fijo') ?>">
                            <div class="label"><?php Lang::_lang('Importe') ?> ($)</div>
                            <div class="dato">
                                <input type="text" class="textbox spinner" id="txt_importe_costo" name="txt_importe_costo" size="5" />
                            </div>
                        </div>

                        <br />
                        <br />

                        <div class="par full descripcion">
                            <div class="label"><?php Lang::_lang('Motivo') ?></div>
                            <div class="dato">
                                <input type="text" class="textbox" id="txt_descripcion_costo" name="txt_descripcion_costo" size="30" />
                            </div>
                        </div>

                        <div class="par full descripcion">
                            <div class="label"><?php Lang::_lang('Observacion') ?></div>
                            <div class="dato">
                                <textarea id="txa_observacion_costo" name="txa_observacion_costo" rows="3" cols="30"></textarea>
                            </div>
                        </div>

                        <div class="botonera">
                            <input class="boton modificar-costo" type="button" id="btn_guardar_costo" name="btn_guardar_costo" value="Modificar Costo">
                        </div>

                        <div class="confirmacion">
                            <?php Lang::_lang('Costo Actualizado Correctamente') ?>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- Tab Descuentos -->
            <div id="tab_descuentos" class="datos">

                <?php foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) { ?>
                    <div class="uno tipo-precio" id="div_descuento_tipo_lista_precio_id_<?php echo $ins_tipo_lista_precio->getId() ?>" tipo_lista_precio_id="<?php echo $ins_tipo_lista_precio->getId() ?>">

                        <div class="descripcion">
                            <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
                        </div>

                        <div class="tipos-precios-info">

                            <div class="par porcentaje">
                                <div class="label"><?php Lang::_lang('Descuento') ?> (%)</div>
                                <div class="dato">
                                    <input type="text" class="textbox spinner" id="txt_porcentaje_descuento_<?php echo $ins_tipo_lista_precio->getId() ?>" name="txt_porcentaje_descuento_<?php echo $ins_tipo_lista_precio->getId() ?>" size="5" />
                                </div>
                            </div>

                            <div class="botonera">
                                <input class="boton modificar-descuento" type="button" id="btn_guardar_descuento_<?php echo $ins_tipo_lista_precio->getId() ?>" name="btn_guardar_descuento_<?php echo $ins_tipo_lista_precio->getId() ?>" value="Modificar Descuento">
                            </div>

                            <div class="confirmacion">
                                <?php Lang::_lang('Descuento Actualizado Correctamente') ?>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
            

        </div>

    </div>

</div>