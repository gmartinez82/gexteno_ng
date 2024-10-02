<?php
include "_autoload.php";

$vta_comision_id = Gral::getVars(Gral::VARS_GET, 'vta_comision_id', 0);
$vta_comision = VtaComision::getOxId($vta_comision_id);

$vta_preventista = $vta_comision->getVtaPreventista();
$vta_comprador = $vta_comision->getVtaComprador();
$vta_vendedor = $vta_comision->getVtaVendedor();

$txt_email = '';

if($vta_preventista->getId() != 'null'){
    $txt_email = $vta_preventista->getEmail();
}
if($vta_comprador->getId() != 'null'){
    $txt_email = $vta_comprador->getEmail();
}
if($vta_vendedor->getId() != 'null'){
    $txt_email = $vta_vendedor->getEmail();
}

?>

<div class="datos enviar-comision" vta_comision_id="<?php Gral::_echo($vta_comision->getId()) ?>">
    <form id='form_enviar_comision' name='form_enviar_comision' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>


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
            <div class="label"><?php Lang::_lang('Para') ?></div>
            <div class="dato">
                <input name='txt_direccion_mail' type='text' class='textbox' id='txt_direccion_mail' value='<?php echo $txt_email ?>' size='70' />
                <div class="label-error" id="txt_direccion_mail_error"></div>
                
                <div class="comentario">para enviar a mas de un destinatario debe separarlos con punto y coma (;)</div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Mensaje al destinatario en cuerpo de email') ?></div>
            <div class="dato">
                <textarea name='txa_enviar_observacion' rows='3' cols='50' id='txa_enviar_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_enviar_observacion_error"></div>
            </div>
        </div>
        <div class="label-error" id="envio_mail_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_enviar' name='btn_enviar' type='button' class='btn_enviar'><?php Lang::_lang('Enviar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
    setInitVtaComisionGestion();
</script>