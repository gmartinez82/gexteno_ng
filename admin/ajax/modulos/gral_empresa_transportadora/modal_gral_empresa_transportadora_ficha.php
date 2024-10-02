<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_empresa_transportadora = GralEmpresaTransportadora::getOxId($id);
//Gral::prr($gral_empresa_transportadora);
?>

<div class="tabs ficha-gral_empresa_transportadora" identificador="<?php echo $gral_empresa_transportadora->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_empresa_transportadora id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa_transportadora->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_empresa_transportadora descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa_transportadora->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa_transportadora codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa_transportadora->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa_transportadora documento">
            <div class="label"><?php Lang::_lang('Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa_transportadora->getDocumento()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa_transportadora domicilio">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa_transportadora->getDomicilio()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa_transportadora publica">
            <div class="label"><?php Lang::_lang('Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_empresa_transportadora->getPublica())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa_transportadora observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa_transportadora->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa_transportadora orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa_transportadora->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa_transportadora estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_empresa_transportadora->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

