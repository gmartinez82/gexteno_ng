<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$vta_ajuste_debe_id = Gral::getVars(2, 'vta_ajuste_debe_id');
$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);
$gral_tipo_personeria = $vta_ajuste_debe->getGralTipoPersoneria();

?>
<div class="datos" id="<?php Gral::_echo($gral_tipo_personeria->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralTipoPersoneria') ?>: 
        <strong><?php Gral::_echo($gral_tipo_personeria->getId()) ?> - <?php Gral::_echo($gral_tipo_personeria->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_tipo_personeria_alta.php?id=<?php echo($gral_tipo_personeria->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralTipoPersoneria') ?>: <strong><?php Gral::_echo($gral_tipo_personeria->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaAjusteDebe::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe->getFiltrosArrXCampo('GralTipoPersoneria', 'gral_tipo_personeria_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaAjusteDebes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_tipo_personeria->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

