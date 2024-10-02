<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_banco = GralBanco::getOxId($id);
//Gral::prr($gral_banco);
?>

<div class="tabs ficha-gral_banco" identificador="<?php echo $gral_banco->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_banco id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_banco->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_banco descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_banco->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_banco descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_banco->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par gral_banco codigo_numerico">
            <div class="label"><?php Lang::_lang('Codigo Numerico') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_banco->getCodigoNumerico()) ?>
            </div>
        </div>
		
        <div class="par gral_banco codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_banco->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_banco observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_banco->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_banco orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_banco->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_banco estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_banco->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

