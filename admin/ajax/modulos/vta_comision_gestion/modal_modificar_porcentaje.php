<?php
include_once '_autoload.php';

// ------------------------------------------------------------------------------
// se obtienen los comisionistas
// ------------------------------------------------------------------------------
$cmb_vta_preventista_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_preventista_id', 0);
$cmb_vta_comprador_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_comprador_id', 0);
$cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_vendedor_id', 0);

// ------------------------------------------------------------------
// se obtienen comprobantes
// ------------------------------------------------------------------
$chk_vta_comprobantes = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante", null);
$hdn_importe_base_comisionables = Gral::getVars(Gral::VARS_POST, "hdn_importe_base_comisionable", 0);
$txt_porcentaje_comisions = Gral::getVars(Gral::VARS_POST, "txt_porcentaje_comision", 0);
$hdn_importe_comisions = Gral::getVars(Gral::VARS_POST, "hdn_importe_comision", 0);
$hdn_vta_comprobante_classs = Gral::getVars(Gral::VARS_POST, "hdn_vta_comprobante_class", null);

foreach ($chk_vta_comprobantes as $i => $vta_comprobante_id) {
    $class = $hdn_vta_comprobante_classs[$i];
    $vta_comprobante = $class::getOxId($vta_comprobante_id);
    $vta_comprobantes[] = $vta_comprobante;
}

$vta_preventista = VtaPreventista::getOxId($cmb_vta_preventista_id);
$vta_comprador = VtaComprador::getOxId($cmb_vta_comprador_id);
$vta_vendedor = VtaVendedor::getOxId($cmb_vta_vendedor_id);
?>
<form id='form_datos_modificar_porcentaje_comision' name='form_datos_modificar_porcentaje_comision' method='post' >
    <div class='datos modificar-porcentaje-comision'>

        <?php include "vta_comision_gestion_modal_top.php" ?>   

        <?php if($vta_preventista){ ?>
        <div class="par">
            <div class="label"><?php Lang::_lang('Preventista') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_preventista->getDescripcion()) ?>
            </div>
        </div>
        <?php } ?>

        <?php if($vta_comprador){ ?>
        <div class="par">
            <div class="label"><?php Lang::_lang('Comprador') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getDescripcion()) ?>
            </div>
        </div>
        <?php } ?>

        <?php if($vta_vendedor){ ?>
        <div class="par">
            <div class="label"><?php Lang::_lang('Vendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getDescripcion()) ?>
            </div>
        </div>
        <?php } ?>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Comprobantes Afectados') ?></div>
            <div class="dato" style="width: 80%;">
                Se afectaran <?php echo count($chk_vta_comprobantes) ?> comprobantes.<br />
                <?php foreach ($vta_comprobantes as $vta_comprobante) { ?>
                    <label class="comprobante-uno" style="font-size: 10px; font-weight: normal;"><?php Gral::_echo($vta_comprobante->getNumeroComprobanteCompleto()) ?></label> -
                <?php } ?>
                <div class="error label-error" id="div_comprobantes_error"><?php Gral::_echo($txt_porcentaje_valor_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Porcentaje') ?></div>
            <div class="dato">
                <input name='txt_porcentaje_valor' type='text' class='textbox' id='txt_porcentaje_valor' value='' size='5' />
                <div class="error label-error" id="txt_porcentaje_valor_error"><?php Gral::_echo($txt_porcentaje_valor_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_porcentaje_observacion' rows='7' cols='50' id='txa_porcentaje_observacion' class='textbox'></textarea>
                <div class="error label-error" id="txa_porcentaje_observacion_error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton" id='btn_registrar_porcentaje' name='btn_registrar_porcentaje' type='button' ><?php Lang::_lang('Cambiar Porcentaje') ?></button>
        </div>

    </div>
</form>
