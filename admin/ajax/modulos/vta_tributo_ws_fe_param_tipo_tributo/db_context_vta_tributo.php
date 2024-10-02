<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_tributo_ws_fe_param_tipo_tributo_id = Gral::getVars(2, 'vta_tributo_ws_fe_param_tipo_tributo_id');
$vta_tributo_ws_fe_param_tipo_tributo = VtaTributoWsFeParamTipoTributo::getOxId($vta_tributo_ws_fe_param_tipo_tributo_id);
$vta_tributo = $vta_tributo_ws_fe_param_tipo_tributo->getVtaTributo();

?>
<div class="datos" id="<?php Gral::_echo($vta_tributo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaTributo') ?>: 
        <strong><?php Gral::_echo($vta_tributo->getId()) ?> - <?php Gral::_echo($vta_tributo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_tributo_alta.php?id=<?php echo($vta_tributo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTributo') ?>: <strong><?php Gral::_echo($vta_tributo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaTributoWsFeParamTipoTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_tributo_ws_fe_param_tipo_tributo->getFiltrosArrXCampo('VtaTributo', 'vta_tributo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaTributoWsFeParamTipoTributos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_tributo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

