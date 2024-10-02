<?php
include "_autoload.php";

$ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'ins_insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($ins_insumo_id);

$ins_marca = $ins_insumo->getInsMarca();
$ins_categoria = $ins_insumo->getInsCategoria();
$ins_venta_web_info = $ins_insumo->getInsVentaWebInfo();
$ins_insumo_imagens = $ins_insumo->getInsInsumoImagens();
$ins_insumo_veh_modelos = $ins_insumo->getInsInsumoVehModelos();
?>

<div class="datos enviar_ficha_tecnica ficha-tecnica" ins_insumo_id="<?php Gral::_echo($ins_insumo->getId()) ?>">
    <form id='form_enviar_ficha_tecnica' name='form_enviar_ficha_tecnica' method='post' action='' >

        <div class="par">
            <div class="label"><?php Lang::_lang('Insumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
            </div>
        </div>

        <div class="info-publica">

            <div class="par">
                <div class="label"><?php Lang::_lang('Insumo') ?></div>
                <div class="dato">
                    <input name='txt_descripcion_insumo' type='text' class='textbox' id='txt_descripcion_insumo' value='<?php Gral::_echo($ins_insumo->getDescripcion()) ?>' size='50' />
                    <div class="label-error" id="txt_descripcion_insumo_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Marca') ?></div>
                <div class="dato"><?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Codigo Marca') ?></div>
                <div class="dato"><?php Gral::_echo($ins_insumo->getCodigoMarca()) ?></div>
            </div>

            <?php if (count($ins_insumo_veh_modelos) > 0) { ?>
            <div class="veh-modelos">
                <div class="par">
                    <div class="label"><?php Lang::_lang('Modelos de Vehiculos') ?></div>
                    <div class="dato">
                        <?php foreach ($ins_insumo_veh_modelos as $ins_insumo_veh_modelo) { ?>
                            <?php Gral::_echo($ins_insumo_veh_modelo->getVehModelo()->getDescripcionFull()) ?> / 
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            <div class="ins-atributos">
                <?php foreach ($ins_insumo->getInsInsumoInsAtributos() as $ins_insumo_ins_atributo) { ?>
                    <div class="par">
                        <div class="label"><?php Gral::_echo($ins_insumo_ins_atributo->getInsAtributo()->getDescripcion()) ?></div>
                        <div class="dato"><?php Gral::_echo($ins_insumo_ins_atributo->getValor()); ?></div>
                    </div>
                <?php } ?>
            </div>

            <?php if ($ins_venta_web_info && $ins_venta_web_info->getDescripcionBreve() != "") { ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('Descripcion Breve') ?></div>
                <div class="dato"><?php Gral::_echo($ins_venta_web_info->getDescripcionBreve()) ?></div>
            </div>
            <?php } ?>

            <?php if ($ins_venta_web_info && $ins_venta_web_info->getDescripcionExt() != "") { ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('Descripcion Extendida') ?></div>
                <div class="dato"><?php Gral::_echo($ins_venta_web_info->getDescripcionExt()) ?></div>
            </div>
            <?php } ?>

            <?php if (count($ins_insumo_imagens) > 0) { ?>
            <div class="fotos">
                <?php foreach ($ins_insumo_imagens as $ins_insumo_imagen) { ?>
                    <div class="avatar foto">
                        <a href="<?php echo $ins_insumo_imagen->getPathImagen() ?>" rel="ins_insumo_carrito_<?php echo $ins_insumo->getId() ?>">
                            <img src="<?php echo $ins_insumo_imagen->getPathImagen(true) ?>" alt="img" width="120" />
                        </a>
                    </div>
                <?php } ?>
            </div>            
            <?php } ?>

        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Para') ?></div>
            <div class="dato">
                <input name='txt_email' type='text' class='textbox' id='txt_email' value='' size='100' />
                <div class="label-error" id="txt_email_error"></div>

                <div class="comentario">para enviar a mas de un destinatario debe separarlos con punto y coma (;)</div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='2' cols='100' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        <div class="label-error" id="error_envio_email_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_enviar' name='btn_enviar' type='button' class='btn_enviar'><?php Lang::_lang('Enviar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
    setInitInsInsumoGestion();
</script>