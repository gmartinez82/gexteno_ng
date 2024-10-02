<?php
include "_autoload.php";

$caja_id = Gral::getVars(2, 'caja_id', 0);
$fnd_caja = FndCaja::getOxId($caja_id);
$fnd_caja_tipo_estado = $fnd_caja->getFndCajaTipoEstado();

$fnd_caja = FndCaja::getOxId($caja_id);

// se controla que el cobrador la caja este cerrada
$es_caja_cerrada = $fnd_caja->esFndCajaCerrada();
if (!$es_caja_cerrada) {
    Gral::_echo('<br /><br />La Caja <strong>' . $fnd_caja->getDescripcion() . '</strong> NO es una Caja CERRADA.<br />');
    Gral::_echo('Para registrar rendicion de una caja es necesario que se encuentre caja cerrada.');
    exit;
}
?>
<div class="datos caja cierre">
    <h4>Reapertura de Caja de Cobros</h4>

    <p>Está a punto de reabrir la <strong><?php Gral::_echo($fnd_caja->getDescripcion()) ?></strong>.</p>

    <form name="form_caja" id="form_caja" method="post" action="">
        <div id='error_general_error' class='error label-error'></div>

        <div class="par">
            <div class="label">Comentarios Adicionales</div>
            <div class="dato">
                <textarea name='txa_observacion' rows='5' cols='50' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
                <div id='txa_observacion_error' class='error label-error'><?php Gral::_echo($txa_observacion_error) ?></div>

            </div>
        </div>

    </form>

    <div class="botonera">
        <input class="boton reabrir" type="button" value="Reabrir Caja" />
        <input type="hidden" id="hdn_caja_id" name="hdn_caja_id" value="<?php echo $fnd_caja->getId() ?>" />
    </div>
</div>