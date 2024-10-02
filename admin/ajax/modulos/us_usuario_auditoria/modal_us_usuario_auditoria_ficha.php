<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_usuario_auditoria = UsUsuarioAuditoria::getOxId($id);
//Gral::prr($us_usuario_auditoria);
?>

<div class="tabs ficha-us_usuario_auditoria" identificador="<?php echo $us_usuario_auditoria->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_usuario_auditoria id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getId()) ?>
            </div>
        </div>

	
        <div class="par us_usuario_auditoria descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_auditoria us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_auditoria tabla">
            <div class="label"><?php Lang::_lang('Tabla') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getTabla()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_auditoria accion">
            <div class="label"><?php Lang::_lang('Accion') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getAccion()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_auditoria pagina">
            <div class="label"><?php Lang::_lang('Pagina') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getPagina()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_auditoria url">
            <div class="label"><?php Lang::_lang('Url') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getUrl()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_auditoria comando">
            <div class="label"><?php Lang::_lang('Comando') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getComando()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_auditoria dato_before">
            <div class="label"><?php Lang::_lang('Before') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getDatoBefore()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_auditoria dato_after">
            <div class="label"><?php Lang::_lang('After') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getDatoAfter()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_auditoria observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_auditoria orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_usuario_auditoria->getOrden()) ?>
            </div>
        </div>
		
        <div class="par us_usuario_auditoria estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_usuario_auditoria->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

    <!-- Tab  -->
    <div id="tab_" class="datos">

        <div class="titulo"><?php Lang::_lang('') ?></div>

        <div class="bloque-">
            <?php if(file_exists('modal_ficha_bloque_.php')){ ?>
                <?php include 'modal_ficha_bloque_.php' ?>
            <?php }else{ ?>
                Debe incluir el bloque HTML en el archivo 'modal_ficha_bloque_.php'
            <?php } ?>
        </div>
        
    </div>
        
</div>

