<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_enviado = InsInsumoEnviado::getOxId($id);
//Gral::prr($ins_insumo_enviado);
?>

<div class="tabs ficha-ins_insumo_enviado" identificador="<?php echo $ins_insumo_enviado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_enviado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_enviado->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_enviado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_enviado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_enviado ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_enviado->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_enviado asunto">
            <div class="label"><?php Lang::_lang('Asunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_enviado->getAsunto()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_enviado destinatario">
            <div class="label"><?php Lang::_lang('Destinatario') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_enviado->getDestinatario()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_enviado cuerpo">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_enviado->getCuerpo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_enviado adjunto">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_enviado->getAdjunto()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_enviado codigo_envio">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_enviado->getCodigoEnvio()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_enviado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_enviado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_enviado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_enviado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_enviado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_enviado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_enviado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_insumo_enviado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

