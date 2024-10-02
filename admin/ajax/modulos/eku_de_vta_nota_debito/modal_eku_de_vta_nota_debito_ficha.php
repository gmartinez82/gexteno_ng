<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_vta_nota_debito = EkuDeVtaNotaDebito::getOxId($id);
//Gral::prr($eku_de_vta_nota_debito);
?>

<div class="tabs ficha-eku_de_vta_nota_debito" identificador="<?php echo $eku_de_vta_nota_debito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_vta_nota_debito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_debito->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_vta_nota_debito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_debito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_debito eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_debito->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_debito vta_nota_debito_id">
            <div class="label"><?php Lang::_lang('VtaNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_debito->getVtaNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_debito inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_nota_debito->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_debito actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_nota_debito->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_debito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_debito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_debito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_debito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_debito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_nota_debito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_nota_debito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_nota_debito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

