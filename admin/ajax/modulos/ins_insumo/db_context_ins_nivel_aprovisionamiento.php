<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_insumo_id = Gral::getVars(2, 'ins_insumo_id');
$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
$ins_nivel_aprovisionamiento = $ins_insumo->getInsNivelAprovisionamiento();

?>
<div class="datos" id="<?php Gral::_echo($ins_nivel_aprovisionamiento->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsNivelAprovisionamiento') ?>: 
        <strong><?php Gral::_echo($ins_nivel_aprovisionamiento->getId()) ?> - <?php Gral::_echo($ins_nivel_aprovisionamiento->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_nivel_aprovisionamiento_alta.php?id=<?php echo($ins_nivel_aprovisionamiento->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsNivelAprovisionamiento') ?>: <strong><?php Gral::_echo($ins_nivel_aprovisionamiento->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo->getFiltrosArrXCampo('InsNivelAprovisionamiento', 'ins_nivel_aprovisionamiento_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_nivel_aprovisionamiento->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

