<?php
include "_autoload.php";

$pdi_pedido = new PdiPedido();
$error = new DbError();
$hdn_error = 1;

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $pdi_pedido->setId($hdn_id);

    $btn_guardar = Gral::getVars(1, 'btn_guardar');

    $accion = '';
    if (trim($btn_guardar) != '') {
        $accion = 'guardar';
    }

    $txa_observacion = Gral::getVars(1, "txa_observacion", null);

    $estado = true;
    if (Ctrl::esVacio($txa_observacion)) {
        $estado = false;
        $txa_observacion_error = Lang::_lang('Debe ingresar comentario', true);
    }

    //Gral::prr($pdi_pedido);
    if ($estado) {
        $pdi_comentario = new PdiComentario();
        $pdi_comentario->setPdiPedidoId($hdn_id);
        $pdi_comentario->setObservacion($txa_observacion);
        $pdi_comentario->save();
        $hdn_error = 0;
    }
} else {
    $pedido_id = Gral::getVars(2, 'pedido_id', 0);
    if ($pedido_id != 0) {
        $pdi_pedido = PdiPedido::getOxId($pedido_id);
    }
}
?>

<form id='form_pedido' name='form_pedido' method='post' action='ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_comentario.php' >
    <div class="datos">
        <?php include "pdi_pedido_gestion_modal_top.php"; ?>   
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Comentario'); ?>
            </div>
            <div class="dato">
                <textarea id='txa_observacion' name='txa_observacion' rows='10' cols='60' class='textbox'><?php //Gral::_echoTxt($pdi_pedido->getObservacion(), true)   ?></textarea>
                <div class="error">
                    <?php Gral::_echo($txa_observacion_error); ?>
                </div>
            </div>
            <div class="error"></div>
        </div>
        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Agregar Comentario') ?>' />
            <input id="hdn_id"      name='hdn_id' type='hidden' value='<?php echo $pdi_pedido->getId(); ?>' />
            <input id="hdn_error"   name='hdn_error' type='hidden' value='<?php echo $hdn_error; ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se registro el Comentario Correctamente') ?>' />
        </div>
    </div>
</form>