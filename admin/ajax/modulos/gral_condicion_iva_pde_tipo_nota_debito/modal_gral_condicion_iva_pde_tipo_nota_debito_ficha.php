<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_condicion_iva_pde_tipo_nota_debito = GralCondicionIvaPdeTipoNotaDebito::getOxId($id);
//Gral::prr($gral_condicion_iva_pde_tipo_nota_debito);
?>

<div class="tabs ficha-gral_condicion_iva_pde_tipo_nota_debito" identificador="<?php echo $gral_condicion_iva_pde_tipo_nota_debito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_condicion_iva_pde_tipo_nota_debito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_condicion_iva_pde_tipo_nota_debito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_nota_debito gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_nota_debito pde_tipo_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeTipoNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getPdeTipoNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_nota_debito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_nota_debito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_nota_debito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_debito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_nota_debito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_condicion_iva_pde_tipo_nota_debito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

