<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$vta_nota_credito_id = Gral::getVars(2, 'vta_nota_credito_id');
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);
$gral_tipo_personeria = $vta_nota_credito->getGralTipoPersoneria();

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
        <a href="_init.php?arr_gral=<?php echo VtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito->getFiltrosArrXCampo('GralTipoPersoneria', 'gral_tipo_personeria_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaNotaCreditos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_tipo_personeria->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

