<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_param_tipo_naturaleza_receptor_gral_condicion_iva_id = Gral::getVars(2, 'eku_param_tipo_naturaleza_receptor_gral_condicion_iva_id');
$eku_param_tipo_naturaleza_receptor_gral_condicion_iva = EkuParamTipoNaturalezaReceptorGralCondicionIva::getOxId($eku_param_tipo_naturaleza_receptor_gral_condicion_iva_id);
$eku_param_tipo_naturaleza_receptor = $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getEkuParamTipoNaturalezaReceptor();

?>
<div class="datos" id="<?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuParamTipoNaturalezaReceptor') ?>: 
        <strong><?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getId()) ?> - <?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_param_tipo_naturaleza_receptor_alta.php?id=<?php echo($eku_param_tipo_naturaleza_receptor->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoNaturalezaReceptor') ?>: <strong><?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuParamTipoNaturalezaReceptorGralCondicionIva::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getFiltrosArrXCampo('EkuParamTipoNaturalezaReceptor', 'eku_param_tipo_naturaleza_receptor_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuParamTipoNaturalezaReceptorGralCondicionIvas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

