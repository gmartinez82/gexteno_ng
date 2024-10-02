<?php
include "_autoload.php";
$cntb_periodo_id = Gral::getVars(Gral::VARS_GET, 'cntb_periodo_id', 0);

$cntb_periodo = CntbPeriodo::getOxId($cntb_periodo_id);
if($cntb_periodo)
{
   $cntb_periodo_descripcion = $cntb_periodo->getDescripcion();
}
?>

<div class="datos modal-cntb-periodo-gestion-regenerar" cntb_periodo_id="<?php Gral::_echo($cntb_periodo_id); ?>">
    <form id='form_cntb_periodo_gestion_regenerar' name='form_cntb_periodo_gestion_regenerar' method='POST' action='' >
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Periodo'); ?>
            </div>
            <div class="dato">
                 <?php Gral::_echo($cntb_periodo_descripcion); ?>
            </div>
        </div>
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Observacion'); ?>
            </div>
            <div class="dato">
                 <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echo($txa_observacion) ?></textarea>
                 <div id="txa_observacion_error" class="error label-error" ><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>
        <div class="error-comprobantes">
            <p>Existen comprobantes no vinculados que impiden que se regenere el proceso correctamente
            <div class="error-comprobantes-col error-comprobantes-ventas">
                <h4 class="titulo-comprobante-venta">Ventas</h4>
                <div class="error-comprobantes-uno"></div>
            </div>
            <div class="error-comprobantes-col error-comprobantes-compras">
                <h4 class="titulo-comprobante-compra">Compras</h4>
                <div class="error-comprobantes-uno"></div>
            </div>
        </div>
        <div class="botonera">
            <button class="boton" id='btn_cntb_periodo_gestion_regenerar' name='btn_cntb_periodo_gestion_regenerar' type='button' class='btn_cntb_periodo_gestion_regenerar'>
                <?php Lang::_lang('Regenerar Periodo') ?>
            </button>
        </div>
    </form>
</div>

<script>
    setInit();
    setInitCntbPeriodoGestion();
</script>