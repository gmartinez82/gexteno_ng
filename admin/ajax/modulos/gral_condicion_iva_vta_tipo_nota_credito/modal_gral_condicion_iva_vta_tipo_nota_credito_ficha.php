<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_condicion_iva_vta_tipo_nota_credito = GralCondicionIvaVtaTipoNotaCredito::getOxId($id);
//Gral::prr($gral_condicion_iva_vta_tipo_nota_credito);
?>

<div class="tabs ficha-gral_condicion_iva_vta_tipo_nota_credito" identificador="<?php echo $gral_condicion_iva_vta_tipo_nota_credito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_condicion_iva_vta_tipo_nota_credito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_credito->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_condicion_iva_vta_tipo_nota_credito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_credito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_nota_credito gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_credito->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_nota_credito vta_tipo_nota_credito_id">
            <div class="label"><?php Lang::_lang('VtaTipoNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_credito->getVtaTipoNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_nota_credito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_credito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_nota_credito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_credito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_nota_credito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_credito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_vta_tipo_nota_credito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_condicion_iva_vta_tipo_nota_credito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

