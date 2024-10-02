<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_nota_debito_pde_recibo = PdeNotaDebitoPdeRecibo::getOxId($id);
//Gral::prr($pde_nota_debito_pde_recibo);
?>

<div class="tabs ficha-pde_nota_debito_pde_recibo" identificador="<?php echo $pde_nota_debito_pde_recibo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_nota_debito_pde_recibo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_recibo->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_nota_debito_pde_recibo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_recibo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_recibo pde_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_recibo->getPdeNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_recibo pde_recibo_id">
            <div class="label"><?php Lang::_lang('PdeRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_recibo->getPdeRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_recibo importe_afectado">
            <div class="label"><?php Lang::_lang('Imp Afectado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_recibo->getImporteAfectado()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_recibo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_recibo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_recibo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_recibo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_recibo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_pde_recibo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_pde_recibo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_nota_debito_pde_recibo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

