<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_param_tipo_presencia_gral_escenario_id = Gral::getVars(2, 'eku_param_tipo_presencia_gral_escenario_id');
$eku_param_tipo_presencia_gral_escenario = EkuParamTipoPresenciaGralEscenario::getOxId($eku_param_tipo_presencia_gral_escenario_id);
$eku_param_tipo_presencia = $eku_param_tipo_presencia_gral_escenario->getEkuParamTipoPresencia();

?>
<div class="datos" id="<?php Gral::_echo($eku_param_tipo_presencia->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuParamTipoPresencia') ?>: 
        <strong><?php Gral::_echo($eku_param_tipo_presencia->getId()) ?> - <?php Gral::_echo($eku_param_tipo_presencia->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_param_tipo_presencia_alta.php?id=<?php echo($eku_param_tipo_presencia->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoPresencia') ?>: <strong><?php Gral::_echo($eku_param_tipo_presencia->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuParamTipoPresenciaGralEscenario::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_presencia_gral_escenario->getFiltrosArrXCampo('EkuParamTipoPresencia', 'eku_param_tipo_presencia_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuParamTipoPresenciaGralEscenarios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_param_tipo_presencia->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

