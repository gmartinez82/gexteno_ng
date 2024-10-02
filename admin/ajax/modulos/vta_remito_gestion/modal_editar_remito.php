<?php
include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

$vta_remito_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);
$vta_remito = VtaRemito::getOxId($vta_remito_id);


?>

<form id='form_editar_remito' name='form_editar_remito' method='post' action='' >
    <div class="datos remito" >       
        
        <div class="label-error" id="error_general_error"></div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getCodigo()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getPersonaDescripcion()); ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <textarea name='txa_nota_interna' rows='2' cols='60' id='txa_nota_interna' class='textbox'><?php echo $vta_remito->getObservacion();?></textarea>
                <div class="label-error" id="txa_nota_interna_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <textarea name='txa_nota_publica' rows='2' cols='60' id='txa_nota_publica' class='textbox'><?php echo $vta_remito->getNotaPublica();?></textarea>
                <div class="label-error" id="txa_nota_publica_error"></div>
            </div>
        </div>
        
        <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_MODIFICAR_NRO_COMPROBANTE')) { ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('Nro Remito') ?></div>
                <div class="dato">
                    <input name='txt_nro_sucursal' type='text' class='textbox nro-sucursal' id='txt_nro_sucursal' value='<?php Gral::_echo($vta_remito->getNumeroSucursal()) ?>' size='3' placeholder="000" />
                    <input name='txt_nro_punto_venta' type='text' class='textbox nro-punto-venta-simple' id='txt_nro_punto_venta' value='<?php Gral::_echo($vta_remito->getNumeroPuntoVenta()) ?>' size='3' placeholder="000" />
                    <input name='txt_nro_comprobante' type='text' class='textbox nro-comprobante' id='txt_nro_comprobante' value='<?php Gral::_echo($vta_remito->getNumeroRemito()) ?>' size='10' placeholder="00000000" />

                    <div class="label-error" id="txt_nro_sucursal_error"><?php Gral::_echo($txt_nro_sucursal_error) ?></div>  
                    <div class="label-error" id="txt_nro_punto_venta_error"><?php Gral::_echo($txt_nro_punto_venta_error) ?></div>  
                    <div class="label-error" id="txt_nro_comprobante_error"><?php Gral::_echo($txt_nro_comprobante_error) ?></div>  
                </div>
            </div>
        <?php } ?>
        

        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/vta_remito_gestion/set_modal_editar_remito.php?vta_remito_id=<?php echo $vta_remito_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitVtaRemitoGestion(); refreshAdmUno('vta_remito_gestion', <?php echo $vta_remito_id; ?>);"><?php Lang::_lang('Guardar') ?></button>
        </div>
    </div>
</form>
<script>
    setInit();
    setInitVtaRemitoGestion();
</script>