<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_contribuyente_gral_tipo_personeria = EkuParamTipoContribuyenteGralTipoPersoneria::getOxId($id);
//Gral::prr($eku_param_tipo_contribuyente_gral_tipo_personeria);
?>

<div class="tabs ficha-eku_param_tipo_contribuyente_gral_tipo_personeria" identificador="<?php echo $eku_param_tipo_contribuyente_gral_tipo_personeria->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_contribuyente_gral_tipo_personeria id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_contribuyente_gral_tipo_personeria->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_contribuyente_gral_tipo_personeria eku_param_tipo_contribuyente_id">
            <div class="label"><?php Lang::_lang('EkuParamTipoContribuyente') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_contribuyente_gral_tipo_personeria->getEkuParamTipoContribuyente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_contribuyente_gral_tipo_personeria gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_contribuyente_gral_tipo_personeria->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

