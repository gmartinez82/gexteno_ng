<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc';
$hdn_error = 1;

$pde_oc = new PdeOc();
$error = new DbError();

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $pde_oc = PdeOc::getOxId($hdn_id);

    $txa_observacion = Gral::getVars(1, "pde_oc_txa_observacion");

    // control de datos
    $estado = true;

    if (Ctrl::esVacio($txa_observacion)) {
        $estado = false;
        $txa_observacion_error = Lang::_lang('Debe ingresar un comentario por la anulacion', true);
    }

    if ($estado) {
        //$pde_oc->save();
        // se registra estado del pedido, PdeEstado
        $pde_estado = $pde_oc->setPdeOcEstado(
                PdeOcTipoEstado::TIPO_ESTADO_ANULADO, $txa_observacion
        );

        // se avisa a destinatarios de cambios, PdeOcDestinatario
        $pde_oc->setPdeOcDestinatariosAviso();

        $hdn_error = 0;
    }
} else {
    $oc_id = Gral::getVars(2, 'oc_id', 0);
    if ($oc_id != 0) {
        $pde_oc = PdeOc::getOxId($oc_id);
    }
    $pde_oc->setPdeOcLeido();
}

if (!$error->getExisteError()) {
    $hdn_id = Gral::getVars(2, 'id');
    if (trim($hdn_id) != '')
        $pde_oc->setId($hdn_id);
}
?>
<form id='form_pedido' name='form_pedido' method='post' action='<?php echo Gral::getPath('path_http') . "admin/ajax/modulos/pde_oc_gestion/modal_oc_anular.php" ?>' >
    <div class='datos' >

        <?php include "pde_oc_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='pde_oc_txa_observacion' rows='7' cols='50' id='pde_oc_txa_observacion' class='textbox'><?php Gral::_echoTxt($pde_oc->getObservacion(), true) ?></textarea>
                <div class="error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Anular OC') ?>' />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pde_oc->getId() ?>' />

            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
        </div>

    </div>
</form>
