<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc_agrupacion';
$hdn_error = 1;

$pde_oc_agrupacion = new PdeOcAgrupacion();
$error = new DbError();

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $pde_oc_agrupacion = PdeOcAgrupacion::getOxId($hdn_id);

    $txa_observacion = Gral::getVars(1, "pde_oc_agrupacion_txa_observacion", '');

    // control de datos
    $estado = true;

    if (Ctrl::esVacio($txa_observacion)) {
        $estado = false;
        $txa_observacion_error = Lang::_lang('Debe ingresar un comentario por la anulacion', true);
    }

    if ($estado) {

        $pde_ocs = $pde_oc_agrupacion->getPdeOcs();
        foreach ($pde_ocs as $pde_oc) {
            $pde_oc_estado = $pde_oc->setPdeOcEstado(
                    PdeOcTipoEstado::TIPO_ESTADO_ANULADO, $txa_observacion
            );
        }
        $pde_oc_agrupacion_estado = $pde_oc_agrupacion->setPdeOcAgrupacionEstado(
                PdeOcAgrupacionTipoEstado::TIPO_ESTADO_ANULADO, $txa_observacion
        );

        $hdn_error = 0;
    }
} else {
    $pde_oc_agrupacion_id = Gral::getVars(2, 'pde_oc_agrupacion_id', 0);
    if ($pde_oc_agrupacion_id != 0) {
        $pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);
    }
}

if (!$error->getExisteError()) {
    $hdn_id = Gral::getVars(2, 'id');
    if (trim($hdn_id) != '')
        $pde_oc_agrupacion->setId($hdn_id);
}
?>
<form id='form_pedido' name='form_pedido' method='post' action='<?php echo Gral::getPath('path_http') . "admin/ajax/modulos/pde_oc_agrupacion_gestion/modal_oc_anular.php" ?>' >
    <div class='datos' >

        <?php include "pde_oc_agrupacion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='pde_oc_agrupacion_txa_observacion' rows='7' cols='50' id='pde_oc_agrupacion_txa_observacion' class='textbox'></textarea>
                <div class="error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton btn_guardar' value='<?php Lang::_lang('Anular OC Masiva') ?>' />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pde_oc_agrupacion->getId() ?>' />
            
            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
        </div>

    </div>
</form>
