<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_insumo_composicion_id = Gral::getVars(2, 'ins_insumo_composicion_id');
$ins_insumo_composicion = InsInsumoComposicion::getOxId($ins_insumo_composicion_id);
$ins_insumo_composic = $ins_insumo_composicion->getInsInsumoComposic();

?>
<div class="datos" id="<?php Gral::_echo($ins_insumo_composic->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsInsumoComposic') ?>: 
        <strong><?php Gral::_echo($ins_insumo_composic->getId()) ?> - <?php Gral::_echo($ins_insumo_composic->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_insumo_composic_alta.php?id=<?php echo($ins_insumo_composic->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoComposic') ?>: <strong><?php Gral::_echo($ins_insumo_composic->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumoComposicion::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_composicion->getFiltrosArrXCampo('InsInsumoComposic', 'ins_insumo_composic_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumoComposicions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_insumo_composic->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

