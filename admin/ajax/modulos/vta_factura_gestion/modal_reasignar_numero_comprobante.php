<?php
include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

$vta_factura_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_id', 0, Gral::TIPO_INTEGER);
$vta_factura = VtaFactura::getOxId($vta_factura_id);

$proximo_numero_comprobante = $vta_factura->getProximoNumeroComprobante();
$proximo_numero_comprobante = str_pad($proximo_numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
?>
<form id='form_reasignar_numero_comprobante' name='form_reasignar_numero_comprobante' method='post' action='' >
    <div class="datos remito" >       
        
        <div class="label-error" id="error_general_error"></div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getCodigo()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getPersonaDescripcion()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nro Factura') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getNumeroComprobanteCompleto()); ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Nuevo Nro Factura') ?></div>
            <div class="dato">
                <?php echo $vta_factura->getNumeroSucursal() ?>-<?php echo $vta_factura->getNumeroPuntoVenta() ?>
                <input name='txt_nro_comprobante' type='text' class='textbox nro-comprobante' id='txt_nro_comprobante' value='<?php Gral::_echo($proximo_numero_comprobante) ?>' size='10' placeholder="00000000" />

                <div class="label-error" id="txt_nro_sucursal_error"><?php Gral::_echo($txt_nro_sucursal_error) ?></div>  
                <div class="label-error" id="txt_nro_punto_venta_error"><?php Gral::_echo($txt_nro_punto_venta_error) ?></div>  
                <div class="label-error" id="txt_nro_comprobante_error"><?php Gral::_echo($txt_nro_comprobante_error) ?></div>  
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <textarea name='txa_nota_interna' rows='2' cols='60' id='txa_nota_interna' class='textbox'><?php echo $vta_factura->getNotaInterna();?></textarea>
                <div class="label-error" id="txa_nota_interna_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/vta_factura_gestion/set_modal_reasignar_numero_comprobante.php?vta_factura_id=<?php echo $vta_factura_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitVtaFacturaGestion(); refreshAdmAll('vta_factura_gestion', 1);"><?php Lang::_lang('Reasignar Numero de Comprobante') ?></button>
        </div>
    </div>
</form>
<script>
    setInit();
    setInitVtaRemitoGestion();
</script>