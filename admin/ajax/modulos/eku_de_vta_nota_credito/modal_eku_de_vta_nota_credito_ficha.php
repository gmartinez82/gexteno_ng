<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_vta_nota_credito = EkuDeVtaNotaCredito::getOxId($id);
//Gral::prr($eku_de_vta_nota_credito);
?>

<div class="tabs ficha-eku_de_vta_nota_credito" identificador="<?php echo $eku_de_vta_nota_credito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_vta_nota_credito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_credito->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_vta_nota_credito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_credito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_credito eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_credito->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_credito vta_nota_credito_id">
            <div class="label"><?php Lang::_lang('VtaNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_credito->getVtaNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_credito inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_nota_credito->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_credito actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_nota_credito->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_credito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_credito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_credito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_credito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_credito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_credito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_credito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_nota_credito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

