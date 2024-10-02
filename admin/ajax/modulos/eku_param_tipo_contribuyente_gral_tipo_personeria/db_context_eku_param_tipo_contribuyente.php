<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_param_tipo_contribuyente_gral_tipo_personeria_id = Gral::getVars(2, 'eku_param_tipo_contribuyente_gral_tipo_personeria_id');
$eku_param_tipo_contribuyente_gral_tipo_personeria = EkuParamTipoContribuyenteGralTipoPersoneria::getOxId($eku_param_tipo_contribuyente_gral_tipo_personeria_id);
$eku_param_tipo_contribuyente = $eku_param_tipo_contribuyente_gral_tipo_personeria->getEkuParamTipoContribuyente();

?>
<div class="datos" id="<?php Gral::_echo($eku_param_tipo_contribuyente->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuParamTipoContribuyente') ?>: 
        <strong><?php Gral::_echo($eku_param_tipo_contribuyente->getId()) ?> - <?php Gral::_echo($eku_param_tipo_contribuyente->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_param_tipo_contribuyente_alta.php?id=<?php echo($eku_param_tipo_contribuyente->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoContribuyente') ?>: <strong><?php Gral::_echo($eku_param_tipo_contribuyente->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuParamTipoContribuyenteGralTipoPersoneria::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_contribuyente_gral_tipo_personeria->getFiltrosArrXCampo('EkuParamTipoContribuyente', 'eku_param_tipo_contribuyente_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuParamTipoContribuyenteGralTipoPersonerias') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_param_tipo_contribuyente->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

