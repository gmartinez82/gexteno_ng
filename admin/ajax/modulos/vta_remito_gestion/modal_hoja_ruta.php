<?php
include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

$vta_remito_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);
$vta_remito = VtaRemito::getOxId($vta_remito_id);

$vta_hoja_ruta_vta_remitos = $vta_remito->getVtaHojaRutaVtaRemitos(null, null, true);
if($vta_hoja_ruta_vta_remitos){
    foreach($vta_hoja_ruta_vta_remitos as $vta_hoja_ruta_vta_remito){
        $vta_hoja_ruta_id = $vta_hoja_ruta_vta_remito->getVtaHojaRutaId();    
    }
}

//$arr_hoja_de_rutas_activas = $vta_remito->getVtaHojaRutasActivasEditablesCmb();
?>

<form id='form_hoja_ruta' name='form_hoja_ruta' method='post' action='' >
    <div class="datos hoja_ruta" >                
        <div class="label-error" id="error_general_error"></div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getCodigo()); ?>
                <!--<div class="label-error" id="cmb_dep_deposito_id_error"></div>-->
            </div>
        </div>
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Hoja Ruta') ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_vta_hoja_ruta_id', Gral::getCmbFiltro(VtaHojaRuta::getVtaHojaRutasEditablesCmb(), '...'), $vta_hoja_ruta_id, 'textbox') ?>
                <?php //Html::html_dib_select(1, 'cmb_vta_hoja_ruta_id', Gral::getCmbFiltro($arr_hoja_de_rutas_activas, '...'), $vta_hoja_ruta_id, 'textbox') ?>
                <div class="label-error" id="cmb_vta_hoja_ruta_id_error"></div>
            </div>
        </div>
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/vta_remito_gestion/set_modal_hoja_ruta.php?vta_remito_id=<?php echo $vta_remito_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitVtaRemitoGestion(); refreshAdmUno('vta_remito_gestion', <?php echo $vta_remito_id; ?>);"><?php Lang::_lang('Vincular hoja de ruta') ?></button>
            <?php if($vta_hoja_ruta_id): ?>
            <button class='boton gen-modal-btn-confirmar' id='btn_desvincular' name='btn_desvincular' type='button' gen-modal-file-post='ajax/modulos/vta_remito_gestion/set_modal_hoja_ruta_desvincular.php?vta_remito_id=<?php echo $vta_remito_id; ?>' gen-modal-content='.div_modal' gen-modal-callback="setInitVtaRemitoGestion(); refreshAdmUno('vta_remito_gestion', <?php echo $vta_remito_id; ?>);"><?php Lang::_lang('Desvincular hoja de ruta') ?></button>
            <?php endif; ?>
        </div>
    </div>
</form>
<script>
    setInit();
    setInitVtaRemitoGestion();
</script>