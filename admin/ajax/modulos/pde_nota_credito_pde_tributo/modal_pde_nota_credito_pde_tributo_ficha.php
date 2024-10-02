<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_nota_credito_pde_tributo = PdeNotaCreditoPdeTributo::getOxId($id);
//Gral::prr($pde_nota_credito_pde_tributo);
?>

<div class="tabs ficha-pde_nota_credito_pde_tributo" identificador="<?php echo $pde_nota_credito_pde_tributo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_nota_credito_pde_tributo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_pde_tributo->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_nota_credito_pde_tributo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_pde_tributo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_pde_tributo pde_nota_credito_id">
            <div class="label"><?php Lang::_lang('PdeNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_pde_tributo->getPdeNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_pde_tributo pde_tributo_id">
            <div class="label"><?php Lang::_lang('PdeTributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_pde_tributo->getPdeTributo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_pde_tributo importe_imponible">
            <div class="label"><?php Lang::_lang('Imp Imponible') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_pde_tributo->getImporteImponible()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_pde_tributo importe_tributo">
            <div class="label"><?php Lang::_lang('Imp Tributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_pde_tributo->getImporteTributo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_pde_tributo alicuota_porcentual">
            <div class="label"><?php Lang::_lang('Alicuota Porcentual') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_pde_tributo->getAlicuotaPorcentual()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_pde_tributo alicuota_decimal">
            <div class="label"><?php Lang::_lang('Alicuota Decimal') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_pde_tributo->getAlicuotaDecimal()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_pde_tributo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_pde_tributo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_pde_tributo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_pde_tributo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_pde_tributo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_pde_tributo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_pde_tributo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_nota_credito_pde_tributo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

