<?php
include_once '_autoload.php';

$vta_comision_id = Gral::getVars(Gral::VARS_GET, 'vta_comision_id', 0);
$vta_comision = VtaComision::getOxId($vta_comision_id);

?>
<form id='form_datos_pago_recibido_comision' name='form_datos_autorizar_comision' method='post' >
    <div class='datos pago-recibido-comision' vta_comision_id="<?php echo $vta_comision_id ?>">

        <?php include "vta_comision_gestion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getCodigo()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Comisionista') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getPersonaDescripcion()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Importe Comision') ?></div>
            <div class="dato">
                <?php Gral::_echoImp($vta_comision->getVtaComisionTotal()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='7' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="error label-error" id="txa_observacion_error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_registrar" name='btn_registrar' type='button' class='boton' value='<?php Lang::_lang('Registrar Pago Efectuado') ?>' />
        </div>

    </div>
</form>
