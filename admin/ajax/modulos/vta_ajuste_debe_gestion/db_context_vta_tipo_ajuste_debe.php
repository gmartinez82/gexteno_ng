<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$vta_ajuste_debe_id = Gral::getVars(2, 'vta_ajuste_debe_id');
$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);
$vta_tipo_ajuste_debe = $vta_ajuste_debe->getVtaTipoAjusteDebe();

?>
<div class="datos" id="<?php Gral::_echo($vta_tipo_ajuste_debe->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaTipoAjusteDebe') ?>: 
        <strong><?php Gral::_echo($vta_tipo_ajuste_debe->getId()) ?> - <?php Gral::_echo($vta_tipo_ajuste_debe->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_tipo_ajuste_debe_alta.php?id=<?php echo($vta_tipo_ajuste_debe->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoAjusteDebe') ?>: <strong><?php Gral::_echo($vta_tipo_ajuste_debe->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaAjusteDebe::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe->getFiltrosArrXCampo('VtaTipoAjusteDebe', 'vta_tipo_ajuste_debe_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaAjusteDebes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_tipo_ajuste_debe->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

