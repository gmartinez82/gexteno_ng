<?php
include "_autoload.php";

$pde_factura_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0);
$pde_factura = PdeFactura::getOxId($pde_factura_id);


$gral_centro_costos = GralCentroCosto::getGralCentroCostosParaImputacion();
//Gral::prr($gral_centro_costos);
$pde_factura_gral_centro_costos = $pde_factura->getPdeFacturaGralCentroCostos();
//Gral::prr($pde_factura_gral_centro_costos);
$simular = false;
?>


<form id='form_imputar_centro_costo' name='form_imputar_centro_costo' method='post' action='' >
    <div class="datos imputar-centro-costo" >                
        <div class="label-error" id="error_general_error"></div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getNumeroComprobanteCompleto()); ?> - <?php Gral::_echo($pde_factura->getPersonaDescripcion()); ?> - Bruto: <?php Gral::_echoImp($pde_factura->getPdeFacturaSubtotal()); ?> - Neto: <?php Gral::_echoImp($pde_factura->getPdeFacturaTotal()); ?>
            </div>
        </div>
        
        <div class="bloque">
            <?php include "bloque_pde_factura_modal_imputar_centro_costo.php"; ?>
        </div>
        
        <div class="botonera">
            <button class="boton" id='btn_prorratear' name='btn_prorratear' type='button'><?php Lang::_lang('Prorratear entre Todos') ?></button>
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/pde_factura_gestion/set_imputar_centro_costo.php?pde_factura_id=<?php echo $pde_factura_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitPdeFacturaGestion(); refreshAdmUno('pde_factura_gestion', <?php echo $pde_factura_id; ?>);"><?php Lang::_lang('Imputar Centro Costo') ?></button>
        </div>
        
    </div>
</form>
<script>
    setInit();
    setInitPdeFacturaGestion();
</script>