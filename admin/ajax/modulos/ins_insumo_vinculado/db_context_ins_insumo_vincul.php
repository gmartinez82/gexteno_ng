<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_insumo_vinculado_id = Gral::getVars(2, 'ins_insumo_vinculado_id');
$ins_insumo_vinculado = InsInsumoVinculado::getOxId($ins_insumo_vinculado_id);
$ins_insumo_vincul = $ins_insumo_vinculado->getInsInsumoVincul();

?>
<div class="datos" id="<?php Gral::_echo($ins_insumo_vincul->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsInsumoVincul') ?>: 
        <strong><?php Gral::_echo($ins_insumo_vincul->getId()) ?> - <?php Gral::_echo($ins_insumo_vincul->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_insumo_vincul_alta.php?id=<?php echo($ins_insumo_vincul->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoVincul') ?>: <strong><?php Gral::_echo($ins_insumo_vincul->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumoVinculado::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_vinculado->getFiltrosArrXCampo('InsInsumoVincul', 'ins_insumo_vincul_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumoVinculados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_insumo_vincul->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

