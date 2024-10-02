<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$pde_nota_credito_id = Gral::getVars(2, 'pde_nota_credito_id');
$pde_nota_credito = PdeNotaCredito::getOxId($pde_nota_credito_id);
$gral_tipo_personeria = $pde_nota_credito->getGralTipoPersoneria();

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
        <a href="_init.php?arr_gral=<?php echo PdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito->getFiltrosArrXCampo('GralTipoPersoneria', 'gral_tipo_personeria_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeNotaCreditos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_tipo_personeria->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

