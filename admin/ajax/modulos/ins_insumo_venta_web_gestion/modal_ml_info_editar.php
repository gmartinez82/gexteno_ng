<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$ins_venta_ml_infos = $ins_insumo->getInsVentaMlInfos();
$ins_venta_ml_info = $ins_venta_ml_infos[0];

if (!$ins_venta_ml_info) {
    $ins_venta_ml_info = new InsVentaMlInfo();
    $ins_venta_ml_info->setDescripcion($ins_insumo->getDescripcion());
}

$ins_tipo_lista_precio_mercadolibre = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_MERCADOLIBRE);
$ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio_mercadolibre);
?>
<div class="datos" insumo_id="<?php echo $ins_insumo->getId() ?>" venta_ml_info_id="<?php echo $ins_venta_ml_info->getId() ?>">
    <form id="form_ml_info" name="form_ml_info" method="post">

        <?php if (count($ins_insumo->getInsInsumoImagensMercadolibre()) > 0) { ?>
            <div class="fotos-ml">
                <?php foreach ($ins_insumo->getInsInsumoImagensMercadolibre() as $ins_insumo_imagen_mercadolibre) { ?>
                    <div class="avatar foto-ml">
                        <a href="<?php echo $ins_insumo_imagen_mercadolibre->getPathImagen() ?>" rel="imagen-insumo-<?php echo $ins_insumo->getId() ?>">
                            <img src="<?php echo $ins_insumo_imagen_mercadolibre->getPathImagen(true) ?>" alt="img" width="60" />
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
        <?php } ?>

        <div class="par">
            <div class="label"><?php Lang::_lang('Insumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo->getDescripcion()) ?> 
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo Interno') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?> 
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Titulo') ?></div>
            <div class="dato">
                <input type="text" class="textbox" size="90" id="txt_ml_descripcion" name="txt_ml_descripcion" value="<?php Gral::_echoTxt($ins_venta_ml_info->getDescripcion($proponer = true)) ?>" />
                <div class="label-error" id="txt_ml_descripcion_error"></div>
                <div class="comentario" id="txt_ml_descripcion_cantidad_caracteres"><?php echo strlen($ins_venta_ml_info->getDescripcion()) ?> caracteres</div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Descripcion Producto') ?></div>
            <div class="dato">
                <textarea id="txa_ml_descripcion_breve" name="txa_ml_descripcion_breve" cols="90" rows="10"><?php Gral::_echoTxt($ins_venta_ml_info->getDescripcionBreve($proponer = true)) ?></textarea>
                <div class="label-error" id="txa_ml_descripcion_breve_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Obs del Producto') ?></div>
            <div class="dato">
                <?php Gral::_echoTxt($ins_insumo->getObservacion()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Descripcion Empresa') ?></div>
            <div class="dato">
                <textarea id="txa_ml_descripcion_empresa" name="txa_ml_descripcion_empresa" cols="90" rows="10"><?php Gral::_echoTxt($ins_venta_ml_info->getDescripcionEmpresa($proponer = true)) ?></textarea>
                <div class="label-error" id="txa_ml_descripcion_empresa_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Condicion') ?></div>
            <div class="dato">
                <?php if ($ins_venta_ml_info->getPublicado() == 0) { ?>
                    <?php Html::html_dib_select(1, 'cmb_ml_condition_id', Gral::getCmbFiltro(MlCondition::getMlConditionsCmb(true), '...'), $ins_venta_ml_info->getMlConditionId(), 'textbox') ?>
                    <div class="label-error" id="cmb_ml_condition_id_error"></div>
                <?php } else { ?>
                    <?php Gral::_echo($ins_venta_ml_info->getMlCondition()->getDescripcion()) ?>
                <?php } ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo Publicacion') ?></div>
            <div class="dato">
                <?php if ($ins_venta_ml_info->getPublicado() == 0) { ?>
                    <?php Html::html_dib_select(1, 'cmb_ml_listing_type_id', Gral::getCmbFiltro(MlListingType::getMlListingTypesCmb(true), '...'), $ins_venta_ml_info->getMlListingTypeId(), 'textbox') ?>
                    <div class="label-error" id="cmb_ml_listing_type_id_error"></div>
                <?php } else { ?>
                    <?php Gral::_echo($ins_venta_ml_info->getMlListingType()->getDescripcion()) ?>
                <?php } ?>
            </div>
        </div>

        <?php if ($ins_venta_ml_info->getPublicado() == 0) { ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('Cantidad') ?></div>
                <div class="dato">
                    <input type="text" class="textbox spinner_cantidad" size="10" id="txt_ml_cantidad" name="txt_ml_cantidad" value="<?php Gral::_echoTxt($ins_venta_ml_info->getCantidad()) ?>" />
                    <div class="label-error" id="txt_ml_cantidad_error"></div>
                </div>
            </div>
        <?php } else { ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('Cantidad Publicada') ?></div>
                <div class="dato">
                    <?php Gral::_echo($ins_venta_ml_info->getCantidad()) ?>
                </div>
            </div>
            <div class="par">
                <div class="label"><?php Lang::_lang('Modificar Cantidad') ?></div>
                <div class="dato">
                    <input type="text" class="textbox spinner_cantidad" size="10" id="txt_ml_cantidad" name="txt_ml_cantidad" value="<?php Gral::_echoTxt($ins_venta_ml_info->getCantidad()) ?>" />
                    <div class="label-error" id="txt_ml_cantidad_error"></div>
                </div>
            </div>
        <?php } ?>

        <div class="par">
            <div class="label"><?php Lang::_lang('Precio Venta') ?></div>
            <div class="dato">
                <?php Gral::_echoImp($ins_lista_precio->getImporteVenta()) ?> + IVA
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Precio Venta con IVA') ?></div>
            <div class="dato">
                <?php Gral::_echoImp($ins_lista_precio->getImporteVentaConIVA()) ?>
            </div>
        </div>
        
        <div class="botonera">
            <button type="button" class="boton" id="btn_ml_guardar" name="btn_ml_guardar"><?php Lang::_lang('Guardar Info ML') ?></button>

            <?php if ($ins_venta_ml_info->getPublicado() == 0) { ?>
                <button type="button" class="boton" id="btn_ml_eliminar" name="btn_ml_eliminar"><?php Lang::_lang('Eliminar Info ML') ?></button>
            <?php } ?>

        </div>
    </form>
</div>