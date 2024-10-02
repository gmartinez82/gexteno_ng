<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_tipo_origen_nota_credito = VtaTipoOrigenNotaCredito::getOxId($id);
//Gral::prr($vta_tipo_origen_nota_credito);
?>

<div class="tabs ficha-vta_tipo_origen_nota_credito" identificador="<?php echo $vta_tipo_origen_nota_credito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_tipo_origen_nota_credito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_origen_nota_credito->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_tipo_origen_nota_credito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_origen_nota_credito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_origen_nota_credito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_origen_nota_credito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_origen_nota_credito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_origen_nota_credito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_origen_nota_credito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_origen_nota_credito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_origen_nota_credito estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_origen_nota_credito->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

