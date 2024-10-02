<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_nota_debito_pde_nota_credito = PdeNotaDebitoPdeNotaCredito::getOxId($id);
//Gral::prr($pde_nota_debito_pde_nota_credito);
?>

<div class="tabs ficha-pde_nota_debito_pde_nota_credito" identificador="<?php echo $pde_nota_debito_pde_nota_credito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_nota_debito_pde_nota_credito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_nota_debito_pde_nota_credito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_nota_credito pde_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getPdeNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_nota_credito pde_nota_credito_id">
            <div class="label"><?php Lang::_lang('PdeNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getPdeNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_nota_credito importe_afectado">
            <div class="label"><?php Lang::_lang('Imp Afectado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getImporteAfectado()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_nota_credito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_nota_credito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_nota_credito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_nota_credito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_nota_debito_pde_nota_credito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

