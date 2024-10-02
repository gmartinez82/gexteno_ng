<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_param_tipo_documento_gral_tipo_documento_id = Gral::getVars(2, 'eku_param_tipo_documento_gral_tipo_documento_id');
$eku_param_tipo_documento_gral_tipo_documento = EkuParamTipoDocumentoGralTipoDocumento::getOxId($eku_param_tipo_documento_gral_tipo_documento_id);
$eku_param_tipo_documento = $eku_param_tipo_documento_gral_tipo_documento->getEkuParamTipoDocumento();

?>
<div class="datos" id="<?php Gral::_echo($eku_param_tipo_documento->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuParamTipoDocumento') ?>: 
        <strong><?php Gral::_echo($eku_param_tipo_documento->getId()) ?> - <?php Gral::_echo($eku_param_tipo_documento->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_param_tipo_documento_alta.php?id=<?php echo($eku_param_tipo_documento->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoDocumento') ?>: <strong><?php Gral::_echo($eku_param_tipo_documento->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuParamTipoDocumentoGralTipoDocumento::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_documento_gral_tipo_documento->getFiltrosArrXCampo('EkuParamTipoDocumento', 'eku_param_tipo_documento_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuParamTipoDocumentoGralTipoDocumentos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_param_tipo_documento->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

