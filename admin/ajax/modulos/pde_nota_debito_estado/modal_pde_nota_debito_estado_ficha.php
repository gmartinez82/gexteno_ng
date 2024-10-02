<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_nota_debito_estado = PdeNotaDebitoEstado::getOxId($id);
//Gral::prr($pde_nota_debito_estado);
?>

<div class="tabs ficha-pde_nota_debito_estado" identificador="<?php echo $pde_nota_debito_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_nota_debito_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_nota_debito_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_estado pde_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_estado->getPdeNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_estado pde_nota_debito_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeNotaDebitoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_estado->getPdeNotaDebitoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_nota_debito_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_nota_debito_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_nota_debito_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

