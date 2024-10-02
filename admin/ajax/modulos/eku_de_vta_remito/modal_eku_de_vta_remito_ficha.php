<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_vta_remito = EkuDeVtaRemito::getOxId($id);
//Gral::prr($eku_de_vta_remito);
?>

<div class="tabs ficha-eku_de_vta_remito" identificador="<?php echo $eku_de_vta_remito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_vta_remito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_remito->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_vta_remito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_remito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_remito eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_remito->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_remito vta_remito_id">
            <div class="label"><?php Lang::_lang('VtaRemito') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_remito->getVtaRemito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_remito inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_remito->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_remito actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_remito->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_remito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_remito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_remito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_remito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_remito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_remito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_remito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_remito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

